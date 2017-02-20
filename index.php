<!DOCTYPE html>
<?php
setcookie("Admin", 0);
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
            <h1>Welcome to Wuzz HTTP Inspector examples</h1>
            <p>Here you will examine several Web Application vulnerabilities which we will exploit by using Wuzz</p>
            <a href="lfi.php?page=notvulnerable.php">LFI </a> |
            <a href="user-agent.php">User-Agent</a> |
            <a href="are_you_admin.php">Are you admin!?</a> |
            <br><br>
            <b>You can find the official Wuzz project <a class='link' href="https://github.com/asciimoo/wuzz">here</a></b>
            <div class="footer">
                <i>This project is distributed freely around our community via Github. Please, feel free to share and edit this project in the way you want!</i>
            </div>
	    </div>
    </body>
</html>
