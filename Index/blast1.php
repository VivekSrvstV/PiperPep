<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Piperpep</title>
<meta name="keywords" content="CRISPR, editing, RNA, gRNA, cas9" />
<meta name="description" content="Crispr editing database" />
<link href="style.css" rel="stylesheet" type="text/css" />

<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>

<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="script/jquery.nivo.slider.js" type="text/javascript"></script>

<script type="text/javascript">
$(window).load(function() {
	$('#slider').nivoSlider({
		effect:'random',
		slices:15,
		animSpeed:500,
		pauseTime:2000,
		startSlide:0, // Set starting Slide (0 index)
		directionNav: false, // Next and Prev
		directionNavHide:false, // Only show on hover
		controlNav:false, // 1,2,3...
		controlNavThumbs:false, //Use thumbnails for Control Nav
		pauseOnHover:true, //Stop animation while hovering
		manualAdvance:false, //Force manual transitions
		captionOpacity:0.8, //Universal caption opacity
		beforeChange: function(){},
		afterChange: function(){},
		slideshowEnd: function(){} //Triggers after all slides have been shown
	});
});
</script>

</head>
<body>

<div id="wrapper">
	
    <div id="header">
        <div id="site_title">
            <h1><a href="" target="_parent">PiperPep</a></h1>
        </div> <!-- end of site_title -->
        
        <div id="menu">
            <ul>
                <li><a href="index.php" class="current"><span class="home"></span>Home</a></li>
                <li><a href="browse.php"><span class="portfolio"></span>Browse</a></li>
                <li><a href="search.php"><span class="projects"></span>Search</a></li>
		<li><a href="tools.php"><span class="projects"></span>Tools</a></li>
                <li><a href="help.php"><span class="gallery"></span>Help</a></li>
		<li><a href="contact.php"><span class="gallery"></span>Contact</a></li>
            </ul> 
        </div>
        
        <!--<div id="search_box">
            <form action="#" method="post">
                <input type="text" value="Enter a keyword..." name="q" size="10" id="searchfield" title="searchfield" onfocus="clearText(this)" onblur="clearText(this)" />
                <input type="submit" name="Search" value="" id="searchbutton" title="Search" />
            </form>
        </div> -->
        <div class="cleaner"></div>
    </div><html>
<head>
<title>BLAST RESULT PAGE</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script language="JavaScript">
<!--

function submitform()
{
var ff =1;


     		if(document.blast.sequence.value==0)
				{	
					alert("Enter Sequence!");
					document.blast.sequence.focus();
					ff=0;
					return false;
				}
				if (ff !=0) 
		{
			return true;
		}
}

function clearform()
{
 var a=document.getElementById('seqid');
a.value="";
}

</script>
</head>

<body bgcolor="#ACE2FD"><div style="padding-left: 1cm; padding-right: 1cm; ">
<?php
if(!isset($_POST['SUBMIT']))
{
?>
<center>
<strong><font color="#ACE2FD">
<h1><font color="#000000">PiperPep BLAST</font></h1>
</font></strong><font color="#000000"> </font>
</center>

<div align="center" style="background-color:#ACE2FD; border: solid 2px #993333;"><table><tr><td>
<form method="post" action="blast1.php" name="blast" target="_blank">
 <br><br>&nbsp;&nbsp;&nbsp;&nbsp;Enter your sequence in FASTA format<br><center>
   &nbsp;&nbsp;&nbsp;&nbsp;<textarea id="seqid" name="sequence" cols="75" rows="5"></textarea>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br>
    <input name="SUBMIT" type="SUBMIT" value="SEARCH" onClick="return submitform()">
    <input type="button" value="CLEAR" onClick="return clearform()"> 
    </center>
</form></td></tr></table></div>
<?php
}
if (isset($_POST['SUBMIT'])) {
echo '<strong><font color="#9E7BFF">
<h2><br><br>PiperPep - BLAST OUTPUT</h2></font></strong>';
$input = $_POST['sequence'];
$path = "c:\wamp\www\cgidoc2\blast-2.2.31+\bin";
//$path = "c:\NCBI\blast-2.2.31+\bin";
chdir($path);
$fp = fopen("test.txt","w"); 
$in = fwrite($fp,$input); 
fclose($fp); 
//fclose($fh);
$output = 'bo.out';
// $cmd="blastall -p blastn -d plasbid.nt -i plas_seq.txt -T -o $output";
$cmd="blastp.exe -db 98-93db -query test.fasta -v 10 -b 10 -T -o $output";
//echo $input;
exec($cmd);
$file=fopen($output,'r');
$i=0;
while(!feof($file))
  {
  $i++;
  if($i<15)
  {
  fgets($file);
  }
  else
  {
  
  echo "<br>". stripslashes(fgets($file)) ;
  }
  } 
  
  
/*  while(!feof($file))
  {
  $i++;
 
  fgets($file);
 
   if(($i<35) and ($i<65))
  {
  
  
  echo "<br>". stripslashes(fgets($file)) ;
  }
  } */
  
  
  //my program---------------------------------------------------------
//$myfile = "55.2.fasta";
//$fh = fopen($myfile,'a') or die("Cant open file");
//$in = fwrite($fh,$input);
//$stringData = "New stuff 1\n";
//fwrite($fh,$stringData);
//$stringData = "New stuff 2\n";
//fwrite($fh,$stringData);
//------------------------------------------------------------------------------
  
  
fclose($file);
}

?>


 <br><div align="center">
 &nbsp;<br>Piperpep BLAST<br>
  Indian Institute of Spices Research,<br>
  Calicut, Kerala, INDIA </div>

<div align="center"></div>
<div id="footer_wrapper">
     <div id="footer">

        Copyright © 2015 <a hrf="http://www.spices.res.in">Indian institute of Spice reserch</a> |
        <a href="" target="_parent">IISR</a> <a href="" target="_parent"></a>

    </div> <!-- end of footer -->


</body>
</html>
</div>
</body>
</html>
