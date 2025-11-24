<?php
$id = $_REQUEST['id'];
//echo"$id";
$myFile = "$id";
$fh = fopen($myFile, 'r');
$theData = fread($fh, filesize($myFile));
fclose($fh);
header("Content-type: text");
header("Content-Disposition: attachment; filename=$id");
echo $theData;
#exit;
?>
