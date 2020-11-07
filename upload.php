<?php
if (isset($_POST["submit"])) {
    $file = $_FILES["userUpload"];
    $fileerror = $file["error"];
    if ($fileerror === 0) {
        $filename = $file["name"];

        $filetype = $file["type"];
        $filetype = explode("/", $filetype);
        $filetype = ($filetype[0]);

        $filetmp_name = $file["tmp_name"];
        $filenameInArray = explode(".", $filename);
        $fileExtension = end($filenameInArray);
        $filenameOnly = $filenameInArray[0] . " ";
        $filesize = $file["size"];

        $newFileName = uniqid($filenameOnly, false) . "." . $fileExtension;
        move_uploaded_file($filetmp_name, "uploads/" . $newFileName);
        header("Location: index.php?fileSuccessfullyUploaded");
    }
}
