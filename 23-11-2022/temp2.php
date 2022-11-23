<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Conversion</title>
</head>
<body>
    <?php $fahrenheit = $_GET['fahrenheit'];
        if (is_null($fahrenheit)) { 
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
        Fahrenheit Temperature
        <input type="text" name="fahrenheit" value="">
        <br>
        <input type="submit" name="" value="">
    </form>
    
    <?php
        } else {
            $celcius = ($fahrenheit - 32) * 5 / 9;
            printf("%.2fF is %.2fC", $fahrenheit, $celcius);
        }
    ?>
</body>
</html>