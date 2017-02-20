<html>
    <head>
        <title>Local File Inclusion - Wuzz</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Roboto');
    </style>
    </head>
    <body>
        <div class="main">
            <h1>Local File Inclusion - Wuzz</h1>
            <?php include($_GET['page']); ?>
        </div>
    </body>
</html>
