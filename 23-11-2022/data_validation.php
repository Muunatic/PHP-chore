<?php
$name = $_POST['name'];
$mediaType = $_POST['media_type'];
$filename = $_POST['filename'];
$caption = $_POST['caption'];
$status = $_POST['status'];
$tried ($_POST['tried'] == 'yes');
if ($tried) {
  $validated = (!empty($name) && !empty($mediaType) && !empty($filename));
if (!$validated) {
?>

<p>The name, media type, and filename are required fields.</p>

<?php
}

}

if ($tried && validated) {
    echo "<P>The item has been created</p>";
}

function mediaSelected($type) {
    global $mediaType;
    if ($mediaType == $type) {
      echo "Selected";
    }
}
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    Name: <input type="text" name="name" value="<?= $name ?>">
    <br>
    Status: <input type="checkbox" name="status" value="active">
    <?php
        if ($status == "active") {
            echo "checked";
        }
    ?>
    Active
    <br>
    Media: <select name="media_type">
        <option value="picture" <?php mediaSelected("picture"); ?> >Picture</option>
        <option value="audio" <?php mediaSelected("audio"); ?> >Audio</option>
        <option value="movie" <?php mediaSelected("movie"); ?> >Movie</option>
    </select>
    <br>
    File: <input type="text" name="filename" value="<?= filename; ?>">
    <br>
    Caption: <textarea name="caption" cols="30" rows="10"><?= $filename; ?></textarea>
    <br>
    <input type="hidden" name="tried" value="yes">
    <input type="submit" value="<?php echo $tried ? "Continue" : "Create"; ?>">
</form>