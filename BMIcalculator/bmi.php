<!-- Calculate BMI(Body Mass Index) Using PHP With HTML Form -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI output</title>
    <link rel="stylesheet" href="./normalize.css">
    <link rel="stylesheet" href="./style.css">
</head>
<body>
<?php 

if ($_GET['submit']) { 
    $mass = $_GET['mass'];
    $height = $_GET['height'];

    function bmi($mass,$height) {
        $bmi = $mass/($height*$height);
        return $bmi;
        } 
    if(empty($mass OR $height)) {
        echo "Please enter your mass and height"; 
    } else {
        $bmi = bmi($mass,$height);
        if ($bmi <= 18.5) {
            $output = "Under Weight";
        } else if ($bmi > 18.5 AND $bmi<=24.9 ) {
            $output = "Normal Weight";
        } else if ($bmi > 24.9 AND $bmi<=29.9) {
            $output = "Over Weight";
        } else if ($bmi > 30.0) {
            $output = "OBESE";
        }
        
        echo "Your BMI value is " . $bmi . " and you are : "; 
        echo "$output";
    }
}  

?>
<br>
<a href="index.php"><button class="btn back">Back to BMI calculator</button></a>
</body>
</html>

