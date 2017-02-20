<!DOCTYPE html>
<?php
setcookie("Admin",0);
?>
<html>
    <head>
        <title>Vulnerable Application Examples</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <style>
        @import url('https://fonts.googleapis.com/css?family=Roboto');
    </style>
    </head>
    <body>
        <div class="main">
            <?php
                setcookie("Admin",$_COOKIE["Admin"]);
                if ($_COOKIE["Admin"]==1) {
                    echo "<h1>Yes, of course you are the Admin!</h1>
                        <p>Here is a cookie for you:</p>
                        <img src='images/cookie.jpg'>
                    ";
                }
                else {
                    echo "<h1>Hmm, cookies always tell the truth</h1>
                        <p>You cookie though says you are not an admin!</p>
                    ";
}
            ?>
        </div>
    </body>
</html>


