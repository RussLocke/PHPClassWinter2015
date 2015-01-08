<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    
        
        <?php        
        $myvar = filter_input(INPUT_GET, 'p');
        
         if ( $myvar === '1' ) {
            echo '<h1>Num 1</h1>'; 
         } 
         else if  ( $myvar === '2' ) {
             echo  '<h1>Num 2</h1>';
         }
         else {
             echo '<h1>my page title</h1>';
         } 
        ?>
    </body>
</html>