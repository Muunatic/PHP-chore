<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personality</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
        Select your personality attributes
        <br>
        <select name="attributes()" multiple>
            <input type="checkbox" name="attributes()" value="perky">Perky
            <input type="checkbox" name="attributes()" value="morose">Morose
            <input type="checkbox" name="attributes()" value="thinking">Thinking
            <input type="checkbox" name="attributes()" value="feeling">Feeling
            <input type="checkbox" name="attributes()" value="thrifty">Thrifty
            <input type="checkbox" name="attributes()" value="shopper">Shopper
        </select>
        <br>
        <input type="submit" name="s" value="Record my personality!">
    </form>
    
    <?php
        if (array_key_exist ('s', $_GET)) {
            $description = join(' ', $_GET['attributes']);
            echo "You have a ${description} personality";
        }
    ?>
</body>
</html>