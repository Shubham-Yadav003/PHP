

<?php
$name = $_FILES['myfile']['name'];
$temp_name = $_FILES['myfile']['tmp_name'];
$error_code = $_FILES['myfile']['error'];

if ($error_code === UPLOAD_ERR_OK) {
    if (move_uploaded_file($temp_name, $name)) {
        echo "File uploaded successfully";
    } else {
        echo "Error moving file to destination";
    }
} else {
    echo "File upload error: " . $error_code;
}
?>
