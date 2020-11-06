<?php
$filename = "a.json";
$file = fopen($filename, "r");
$filesize = filesize($filename);
$filetext = fread($file, $filesize - 1);
fclose($file);
$file = fopen("./a.json", "w");
fwrite($file, $filetext);
