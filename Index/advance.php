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

</head><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
<body>
<?
include'include/head.php';

?>
<script type='text/javascript'>
function validate(){
var Protein name = document.adsearch.Protein name.value;
var Peptide Sequence = document.adsearch.Peptide Sequence.value;
var Modification = document.adsearch.Modification.value;
var aon1 = document.adsearch.AON1.value;
var aon2 = document.adsearch.AON2.value;

if(Protein name == '' &&  Peptide sequence == '' && Modification == ''){
alert('Please enter value in atleast one field !!!');
if(Protein name != '' && aon1=='' ){alert('Please select Operator AND or OR !!!');return false;}
if(Modification != '' && aon2==''){alert('Please select Operator AND or OR !!!');return false;}
return false;
}
else{
return true;
}
}
</script>
<tr bgcolor="#ffffff">
<td>
<br><fieldset name=KEYWORD style="width: 800; height: 450; margin-left: auto; margin-right: auto;">
        <legend align='center'><font size='4.5'><b>Advance Search</b></font></legend>
<br>
<form name='adsearch' action='adsearch.php' method='post' onSubmit='return validate();'>
<table>
<tr><td><b>Protein name:&nbsp;&nbsp;</td><td><input type='text' name='Protein name'>&nbsp;&nbsp;[e.g., ATP synthase CF1 beta subunit]</td></tr>
<tr><td></td><td align="left"><select name="AON1"><option value=""></option><option value="AND">AND</option><option value="OR">OR</option></select></td></tr>
<tr><td></td><td align="left">
<tr><td><b>Peptide Sequence:</b>&nbsp;&nbsp;</td><td><input type='text' name='Peptide Sequence'>&nbsp;&nbsp;[e.g., AHGGVSVFGGVGER ]</td></tr>
<tr><td></td><td align="left"><select name="AON2"><option value=""></option><option value="AND">AND</option><option value="OR">OR</option></select></td></tr>
<tr><td><b>Modification:</b>&nbsp;&nbsp;</td><td><input type='text' name='Modification'>&nbsp;&nbsp;[e.g.[15] Oxidation (M)]</td></tr>
<tr><td colspan='2' align='center'><input type='submit' value='Search'></td></tr>
</table>
</form>

<font size='4' color='brown'><b>Help: </b>The advance search provides users the best way to search database making various combinations, a number of queries can be combined in one query. It provides more filtered results. In addition, individual query provides:</font>
<ol type='I'>
<li>Protein detail against Peptide Sequence</li>
<li>Detail about Peptide, against  sequence</li>
<li>Modification Site at sequence against that Peptide etc.</li>
</ol>
</fieldset>
</td>
</tr>
<?
include'include/footer.php';
?>
<div id="footer_wrapper">
     <div id="footer">

        Copyright © 2015 <a hrf="http://www.spices.res.in">Indian institute of Spice reserch</a> |
        <a href="" target="_parent">IISR</a> <a href="" target="_parent"></a>

    </div> <!-- end of footer -->


</body>
</html>?>
