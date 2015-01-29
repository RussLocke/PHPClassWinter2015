<?php

    $product_description = $_POST['product_description'];
    $list_price = $_POST['list_price'];
    $discount_percent = $_POST['discount_percent'];
    
    $error_msg = '';
    
    $discount = $list_price * $discount_percent * .01;
    $discount_price = $list_price - $discount;
    
   
    
    
    if ( empty($product_description) ) {
        $error_msg .= 'Product description field must be populated ';
    }
    if ( !is_string($product_description) ) {
        $error_msg .= "Product description must be valid ";
    }
    
    
    if ( !is_numeric($list_price) ) {
        $error_msg .= "List price must be a valid number ";        
    }
    if ( !is_numeric($discount_percent) ) {
        $error_msg .= "Discount percent must be a valid number ";
    }
    
    if ( !empty($error_msg) ) {
                echo $error_msg;
                include './index.php';
                exit();
            }
        
                     
            if ( isset($_POST['product_description'] ) ) {
                echo $_POST['product_description'];
            }
            echo '<br />';
            if ( isset($_POST['list_price'] ) ) {
                echo $_POST['list_price'];
            }
            echo '<br />';
            if ( isset($_POST['discount_percent'] ) ) {
                echo $_POST['discount_percent'];
            }
            
             $list_price_formatted = "$".number_format($list_price, 2);
    $discount_percent_formatted = $discount_percent."%";
    $discount_formatted = "$".number_format($discount_price, 2);
    $discount_price_formatted = "$".number_format($discount_price,2);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>
<body>
    <div id="content">
        <h1>Product Discount Calculator</h1>

        <label>Product Description:</label>
        <span><?php echo $product_description; ?></span><br />

        <label>List Price:</label>
        <span><?php echo $list_price_formatted; ?></span><br />

        <label>Standard Discount:</label>
        <span><?php echo $discount_percent_formatted; ?></span><br />

        <label>Discount Amount:</label>
        <span><?php echo $discount_formatted; ?></span><br />

        <label>Discount Price:</label>
        <span><?php echo $discount_price_formatted; ?></span><br />

        <p>&nbsp;</p>
    </div>
</body>
</html>