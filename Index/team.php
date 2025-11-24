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
		<li><a href="tools.php"><span class="projects"></span>Tools</a></li>
                <li><a href="help.php"><span class="gallery"></span>Help</a></li>
                <li><a href="team.php"><span class="gallery"></span>Team</a></li>
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

<body bgcolor="white" text="#000000" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<br/> <br/> 

<table width=100% align='center'><tr><td></td><td>
<table>
<tr><td><font color="blue"><b>Dr.M Anandaraj</b></font></td></tr>
<tr><td><img src="images/d.png" height=150 width=140 border=2></td></tr>
<tr><td><font color="blue">Director & National Co-ordinator(PhytoFuRa)</font></td></tr>
<td><font color="blue">Indian Institute of Spices Research</font></td></tr>
<tr><td><font color="blue">Kozhikode- 673012,  Kerala</font></td></tr>
<tr><td><font color="blue">Phone: +91-9447132294</font></td></tr>
<tr><td><font color="blue">e-mail: </b></font><a href="mailto:manojk@imtech.res.in">anandaraj@spices.res.in</a></td></tr>
</table>
</td>
</tr>

</table>
<table width=100% align='center'><tr><td>

<table width=100% align='center'><tr><td>

<table>
<br><tr><td><font color="blue"><b>Ms.P Uma Devi</b></font></td></tr>
<td><img src="images/umadevi.jpg" height=150  width=140 border=2></td>
<tr><td><font color="blue">Scientist</font></td></tr>
<tr><td><font color="blue">e-mail: </font><a href="mailto:qureshisaab@imtech.res.in">umamaniicar@rediffmail.com</a></td></tr>
</font>
</td>
</table>
<td>
<table>

<table width=100% align='center'><tr><td>
<br/><tr><td><font color="blue"><b> Vivek kumar Srivastav</b></font></td></tr>
<td><img src="images/vivek.jpg" width=140 height=150 border=2></td>
<tr><td><font color="blue">Junior Reserch Fellow</font></td></tr>
<tr><td><font color="blue">e-mail: </font><a href="mailto:mailto:thakur@imtech.res.in">srivvivek20@gmail.com</a></td></tr>
</font>
</table>
</td>

</tr>
</table>
<br/><br/><br/>

</table>
<table width=100% align='center'><tr><td>

<table>
<br><tr><td><font color="blue"><b>Dr.Johnson George K</b></font></td></tr>
<td><img src="images/johnson.jpg" height=150  width=140 border=2></td>
<tr><td><font color="blue">Principal Scientist</font></td></tr>
<tr><td><font color="blue">e-mail: </font><a href="mailto:qureshisaab@imtech.res.in">kokkatjohn@spices.res.in</a></td></tr>
</font>
</td>
</table>
<td>

<td>
<table>
<br><tr><td><font color="blue"><b>Dr.Santhosh J Eapen</b></font></td></tr>
<td><img src="images/san.jpg" height=150  width=140 border=2></td>
<tr><td><font color="blue">Principal Scientist</font></td></tr>
<tr><td><font color="blue">e-mail: </font><a href="mailto:qureshisaab@imtech.res.in">sjeapen@spices.res.in</a></td></tr>
</font>
</td>
</table>

</tr>
</table>
<br/><br/><br/>
&nbsp;&nbsp;&nbsp; <font size=\"5px\" COLOR="BLACK"><br/>
&nbsp;&nbsp;&nbsp;&nbsp;"Thank you for giving us your precious time. If you have any questions or comments, please email us today. We value your comments/suggestions and will be pleased to hear from you."<br/><BR></font>



<?
include'include/footer.php';
?>
<div id="footer_wrapper">
     <div id="footer">
	 <div class=bcolumn>
				<b style="font-size:12px;margin-left: 701px;top: 10px; text-align: justify">Downloads</b> |
        <a href="" target="_parent">Contacts</a> <a href="" target="_parent"></a><br>
				</div>

        Copyright © 2015 <a hrf="http://www.spices.res.in">Indian institute of Spice reserch</a> |
        <a href="http://www.spices.res.in" target="_parent">IISR</a> <a href="" target="_parent"></a>

    </div> <!-- end of footer -->


</body>
</html>

