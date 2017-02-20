<!DOCTYPE html>
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
                if ( ($_SERVER['HTTP_USER_AGENT'])!="hax0r") {
                    echo "<h1>Oups, looks like your User-Agent is not 'hax0r'.</h1>
                        <p>Why don't you try again?!</p>";
                }
                else {
                    echo "<h1>Hello hax0r</h1>
                            <p>Yep, that was another example of how you can manipulate headers with Wuzz.</p>
                            ";
                }
            ?>
        </div>
    </body>
</html>

