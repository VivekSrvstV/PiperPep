<?php include("user_connection.php");


$con=mysql_connect($host="localhost",$user="root",$password="");
if(empty($con)){echo "connection failure: $con.mysql_error()";}
if(mysql_select_db("piperdb",$con)){$db="piperdb";} else {echo "not connected";}
?>
