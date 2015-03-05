<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            session_start();
            echo $_SESSION['hello'];
            echo $_SESSION['cart']['product1'];
            echo $_SESSION['cart']['product2'];
            echo $_SESSION['cart']['product3'];
        ?>
    </body>
</html>