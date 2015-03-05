
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        
            session_start();
            
            $_SESSION['hello'] = 'hello';
            
            $_SESSION['cart'] = array();
            $_SESSION['cart']['product1'] ='screwdriver';
            $_SESSION['cart']['product2'] ='hammer';
            $_SESSION['cart']['product3'] ='wrench';

            
                       
        ?>
    </body>
</html>