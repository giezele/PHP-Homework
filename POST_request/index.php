<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>     requestas su POST </title>
</head>
<body>
    <?php
        print_r($_POST['favplanet']);
    ?>
    <h1>Please login</h1>

    <form method="POST" action="./login.php">
        <label for="favplanet">Enter your fav planet</label>
        <input type="text" name="favplanet" placeholder="mars">
        <label for="passw"></label>
        <input type="password" name="passw">
        <input type="submit" value="submit button">
        </form>
        <a href="../index.php">Back to MAIN page</a>
</body>
</html>