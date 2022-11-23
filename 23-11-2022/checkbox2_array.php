<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personality</title>
</head>
<body>
    <?php
        $attrs = $_GET['attributes'];
        if (!is_array($attrs)) {
          $attrs = array();
        }
    ?>
    
    function makeCheckboxes($name, $query, $options) {
      <?php foreach ($options as $value => $tabel) {
        $checked = in_array($value, $query) ? "Checked": '';
        echo "<input type=\"checkbox\" name=\"{$name}\" value=\"{$value}\" {$checked} />";
        echo "{$label} <br/> \n";
      }
    }

    $personalityAttributes = array(
        'perky' => "Perky",
        'morose' => "Morose",
        'thinking' => "Thinking",
        'feeling' => "Spend-thrift",
        'prodigal' => "Shopper"
    );
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
        Select your personality attributes
        <?php
            makeCheckboxes('attributes', $attrs, $personalityAttributes);
        ?>
        <br>
        <input type="submit" name="s" value="Record my personalty">
    </form>

    <?php
    if (array_key_exist ('s', $_GET)) {
        $description = join(' ', $_GET['attributes']);
        echo "You have a ${description} personality";
    }
    ?>
</body>
</html>