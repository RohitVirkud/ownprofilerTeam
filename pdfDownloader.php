<?php
header("Content-Type: application/octet-stream");

$file = $_GET["file"] .".pdf";
header("Content-Disposition: attachment; filename=" . urlencode($file));   
header("Content-Type: application/octet-stream");
header("Content-Type: application/download");
header("Content-Description: File Transfer");            
header("Content-Length: " . filesize($file));
flush(); // this doesn't really matter.
$fp = fopen($file, "r");
while (!feof($fp))
{
    echo fread($fp, 65536);
    flush(); // this is essential for large downloads
} 
fclose($fp); 

?>

<h2>THANK YOU FOR DOWNLOADING...</h2>


<!--
/*
 https://ownprofiler.com/pdf_server.php?file=thinkcreativebookbyrohitvirkud


 pass book name like this 
*/ -->
