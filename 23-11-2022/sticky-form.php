<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Conversion</title>
</head>
<body>
    <?php 
        $fahrenheit = $_GET['fahrenheit']; 
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
        Fahrenheit temperature: 
        <input type="text" name="fahrenheit" value="<?php echo $fahrenheit; ?>" />
        <br>
        <input type="submit" value="Convert to Celsius!" />
    </form>

    <?php
        if (!is_null($fahrenheit)) {
            $celsius = ($fahrenheit - 32) * 5 / 9;
            printf("%.2fF is %.2fC", $fahrenheit, $celsius);
        }
    ?>
</body>
</html>