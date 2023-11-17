<?php

$filename = 'index.php';

//Create a FileInfo Obj
$finfo = finfo_open(FILEINFO_MIME_TYPE);  //Opens fileinfo obj with flag passed through, saying u want MIME type

//Get the MIME type of the file
$mime_type = finfo_file($finfo, $filename);  //retrieves MIME type of specified file using fileinfo obj

//Close the FileInfor obj
finfo_close($finfo);   //Closes it to free up resources


if ($mime_type !== false) {
    echo "MIME type of $filename: $mime_type";
} else {
    echo "Failed to retrieve MIME type for $filename";
}

?>