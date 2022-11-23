<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>
    <form enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
        <input type="hidden" name="MAX_FILE_SIZE" value="10240"> File name: <input name="toProcess" type="file">
        <input type="submit" value="Upload">
    </form>
</body>
</html>