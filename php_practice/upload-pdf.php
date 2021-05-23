<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Ques 2</title>
</head>

<body>
    <form method="post" enctype="multipart/form-data">
        <h2>Upload File</h2>
        <label for="fileSelect">Filename:</label>
        <input type="file" name="pdf" id="fileSelect">
        <input type="submit" name="submit" value="Upload">
        <p><strong>Note:</strong> Only .pdf format is allowed to a max size of 5 MB.</p>
    </form>

    <?php
    $name = $_FILES['pdf']['name'];
    $tmp_name = $_FILES['pdf']['tmp_name'];
    $size = $_FILES['pdf']['size'];
    $path = "DATA/";
    if (isset($name)) {
        if (empty($name)) {
            echo "Please choose a file";
        } else if ((!empty($name)) && ($size < 5242880)) {
            move_uploaded_file($tmp_name, $path . $name);
            echo 'Uploaded!';
        } else {
            echo "The size of the file must be less than 5MB in order to be uploaded.";
        }
    }
    ?>


</body>

</html>