<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    // requestas su POST
        // print_r($_POST['favplanet']);
        if($_POST['favplanet'] == "mars"){
            print('Hello ' . $_POST['favplanet'] . '!');
        } else {
            print ("OOOPS something went wrong");
        }
    ?>
    <br>
    <a href="index.php">Atgal i index</a>
</body>
</html>