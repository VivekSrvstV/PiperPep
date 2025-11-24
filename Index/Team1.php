<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PiperDb</title>
<meta name="keywords" content="CRISPR, editing, RNA, gRNA, cas9" />
<meta name="description" content="Crispr editing piperdbbase" />
<link href="style.css" rel="stylesheet" type="text/css" />

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


<div id="header_wrapper">	
    <div id="header">
        <div id="site_title">
            <h1><a href="" target="_parent">PiperDb</a></h1> </div>
<div id="menu">
            <ul>
                <li><a href="index.php" class="current"><span class="home"></span>Home</a></li>
                <li><a href="browse.php"><span class="portfolio"></span>Browse</a></li>
                <li><a href="search.php"><span class="projects"></span>Search</a></li>
		<li><a href="advance.php"><span class="projects"></span>Advanced Search</a></li>
                <li><a href="tools.php"><span class="gallery"></span>Tools</a></li>
                <li><a href="Team.php"><span class="gallery"></span>Team</a></li>
            </ul>
        </div>
</div> 
</div>
<div id="wrapper">
<div id="middle">
<?php
ini_set( "display_errors", 0);
#require_once("head.php");
#include("sort.php");
include"connection.php";
?>
<?
include'include/header.php';

?>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

</head>

<body bgcolor="#E0FFFF" text="#000000" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<br/> <br/> 

<table width=80% align='center'><tr><td>
<table>
<tr><td><font color="#800517"><b>Ms. P Uma Devi</b></font>
</td><tr/><tr>
<td><img  width="110px" height="110px"src="images/umadevi.jpg"></td>
<tr><td><font color="#800517">scientist</font></td></tr>
<td><font color="#800517"> Crop Improvement and Biotechnology</font></td></tr>
<tr><td><font color="#800517">Indian Institute of Spices Reserch</font></td></tr>
<tr><td><font color="#800517">Kozhikode, Kerela, INDIA</font></td></tr>
<tr><td><font color="#800517">Phone: 8943022844</font></td></tr>
<tr><td><font color="#800517">Fax: +91-8943022844</font></td></tr>
<tr><td><font color="#800517">e-mail: </b></font><a href="mailto:>umadevi@spices.res.in">umadevi@spices.res.in</a></td></tr>
<tr><td><font color="#800517">Web: </b></font><a href="http://www.spices.res.in/staff.php?staffid=113"http://www.spices.res.in/staff.php?staffid=113</a></td><tr/>
</font>
</table></td>&nbsp&nbsp&nbsp&nbsp<td align="top">
<table>
<tr><td><font color="#800517"><b>Vivek Kumar Srivastav</b></font></td></tr>
<tr>
<td><img  width="110px" height="200px"src="images/vivek.jpg"></td>
</tr>

<tr><td><font color="#800517">Junior Research Fellow (JRF)</font></td></tr>
<td><font color="#800517">Bioinformatics Center</font></td></tr>
<tr><td><font color="#800517">Indian institute of Spices Reserch</font></td></tr>
<tr><td><font color="#800517">Kozhikode , Kerela, INDIA</font></td></tr>

<tr><td><font color="#800517">Phone: +91-8174038818</font></td></tr>
<tr><td><font color="#800517">e-mail: </b></font><a href="mailto:srivvivek20@gmail.com">srivvivek20@gmail.com</a></td></tr>
<tr><td><font color="#800517">Web: </b></font><a href="http://www.spicebioinfo.res.in/team.php">http://www.spicebioinfo.res.in/team.php</a></td></tr>
</font>
</table></tr></table>


<?
include'include/footer.php';
?>
<div id="footer_wrapper">
     <div id="footer">

        Copyright © 2015 <a hrf="http://www.spices.res.in">Indian institute of Spice reserch</a> |
        <a href="" target="_parent">IISR</a> <a href="" target="_parent"></a>

    </div> <!-- end of footer -->


</body>
</html>

