<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PiperDB</title>
<meta name="keywords" content="CRISPR, editing, RNA, gRNA, cas9" />
<meta name="description" content="Crispr editing database" />
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="css/tab_style.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>

<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
<script src="script/jquery.nivo.slider.js" type="text/javascript"></script>


</head>
<body>


<div id="header_wrapper">	
    <div id="header">
        <div id="site_title">
            <h1><a href="" target="_parent">PiperDB</a></h1> </div>
<div id="menu">
            <ul>
                <li><a href="index.php" class="current"><span class="home"></span>Home</a></li>
                <li><a href="browse.php"><span class="portfolio"></span>Browse</a></li>
                <li><a href="search.php"><span class="projects"></span>Search</a></li>
		<li><a href="tool.php"><span class="projects"></span>Tools</a></li>
                <li><a href="help.php"><span class="gallery"></span>Help</a></li>
                <li><a href="Contact.php"><span class="gallery"></span>Contact</a></li>
            </ul>
        </div>
</div> 
</div>
<div id='tab_div'>
<h3 align='center'> Search Results </h3>
<?php
$key=$_POST['key'];
$type=$_POST['type'];
$h = $_POST['hse'];
//$h[0]="PiperID";
$sl=0;
$sort=$_GET['s'];
$str1="";
if(!isset($key)||!isset($h))
{
	echo "<p id='msg'>Values not Entered !!!</p>";
	break;
}
include('connection_new.php');
if($type=="similar")
{
	foreach ($h as $ho=>$value) 
   {
	   
	   if($value=="Protein Name")
	   {
		   $value="'Protein Name'";
	   }
        $str1= $str1.$value." like '%".$key."%' or ";
   }
     $str1=rtrim($str1," or ");
	 $sql="SELECT * FROM piperdb where ".$str1;
}
else
{
	foreach ($h as $ho=>$value) 
   {
	   if($value=="Protein Name")
	   {
		   $value="'Protein Name'";
	   }
        $str1= $str1.$value." = '".$key."' or ";
   }
     $str1=rtrim($str1," or ");
	$sql="SELECT * FROM piperdb where ".$str1;
}
//$sql="SELECT * FROM piperdb";
$rs_result = $conn->query($sql); 
if($row = $rs_result->fetch_assoc())
{
	$rs_result = $conn->query($sql);
   echo "<table id='tab' border='1'>";
   echo "<tr id='head'><td>Sl.No</td>";
   foreach ($h as $ho=>$value) 
   {
       // echo "<td>".$value."</td>";
		echo "<td>".$value."</td>";
   }
   echo "</tr>";
    while ($row = $rs_result->fetch_assoc())
   {
	   $sl++;
	    echo "<tr><td>".$sl."</td>";
	  foreach ($h as $ho=>$value) 
	{
        echo "<td>".$row[$value]."</td>";
	}
	echo "</tr>";
   }
   echo"</table>";
}
else
{
	echo "<p id='msg'>No Results found !!!</p>";
}
?>
</div>




<div class="col_w540 float_l v_divider">
</div>
<div class="cleaner h30"></div>
            
            <div class="cleaner"></div>


<div id="content">
    
    	<div class="col_w440 float_l">
			</div>
            
			<div class="cleaner"></div>  

      </div>
        <div class="cleaner"></div>   



<div id="footer_wrapper">
     <div id="footer">

        Copyright © 2014 <a hrf="http://www.imtech.res.in">Institute of Microbial Technology</a> |
        <a href="" target="_parent">CSIR</a> by <a href="" target="_parent">Team</a>

    </div> <!-- end of footer -->


</body>
</html>

