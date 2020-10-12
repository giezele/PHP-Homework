<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI calculator</title>
    <link rel="stylesheet" href="./normalize.css">
    <link rel="stylesheet" href="./style.css">
    
</head>
<body>
    <div class="container">
    

    <form class="form" method="GET" action="bmi.php">
        <h2>BMI(Body Mass Index) Calculator</h2>
        <hr>
        <div class="input">
        <label for="mass">Mass in kilogram (kg):</label>
        <input type="text" name="mass" placeholder="kg">
        </div>
        <div class="input">
        <label for="height">Height in meter (m):</label>
        <input type="text" name="height" placeholder="m">
        </div>
        <input class="btn" type="submit" name="submit" value="Calculate">
    </form>
    <a href="../index.php">Back to Main page</a></div>
    
</body>
</html>