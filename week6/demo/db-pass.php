<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
            $userPass = filter_input(INPUT_POST, 'pass');
            $userPassHash = sha1($userPass);
            $passcode = sha1('hidden');
            
            if ( $userPass == $userPassHash){
                echo '<p>Passcode Accepted </p>';
            } else {
                echo '<p>Passcode not accepted</p>';
            }  
        
        
        ?>
        
        <form action="#" method="post">
            
           Passcode: <input type="password" name ="pass" value="" />
            
            <input type="submit" value="submit" />
            
        </form>
        
    </body>
</html>