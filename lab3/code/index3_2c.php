<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="lab3_2c.php" method="get">
    <?php
    foreach ($_SESSION["Info"] as $item){
        echo $item[0], " = ", $item[1], "<br>";
    }
    ?>
</form>
</body>
</html>