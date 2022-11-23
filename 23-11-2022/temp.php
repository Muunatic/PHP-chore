<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Conversion</title>
</head>
<body>
    <?php 
        if ($_SERVER['REQUEST_METHOD'] == 'GET') { 
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        Fahrenheit temperature:
        <input type="text" name="fahrenheit" value="">
        <br>
        <input type="submit" name="convert to celcius" value="">
    </form>

    <?php
        } else if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $fahrenheit = $_POST['fahrenheit'];
            $celcius = ($fahrenheit - 32) * 5 / 9;
            printf("%.2fF IS %.2fC", $fahrenheit, $celcius);
        }  else {
            die("this script only works with GET and POST requests")
        }
    ?>
</body>
</html>