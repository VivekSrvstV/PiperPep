
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

<body bgcolor="white" text="#000000" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<br/> <br/> 	
<p class="MsoNormal" style="text-align:justify;text-justify:inter-ideograph;
line-height:150%"><b><span style="font-family:&quot;Corbel&quot;,&quot;sans-serif&quot;;color:#000000;mso-themecolor:accent1">Database<o:p></o:p></span></b></p>
<p class="MsoNormal" style="text-align:justify;text-justify:inter-ideograph;
line-height:115%"><b><span style="font-family:&quot;Corbel&quot;,&quot;sans-serif&quot;;color:#4F81BD;mso-themecolor:accent1">&nbsp;</span></b></p>
<p class="MsoNormal" style="text-align:justify;text-justify:inter-ideograph;
line-height:115%"><span style="font-family: Corbel, sans-serif; background: white;"> Piperpep is a manually curated database that experimentally generated chemically modified Peptide involving in plants.&nbsp; Piperpep will be useful for people working on plants based Peptide as well as chemists working in the field of improving the peptide based drugs.</span><span style="font-family: Corbel, sans-serif;">. <span style="background:white">The database also provides informative tools like BLAST that generate similar hits to the peptide . This database is freely available through this url: </span></span><span style="font-family:&quot;Corbel&quot;,&quot;sans-serif&quot;"><a href=""><span style="mso-fareast-font-family:
&quot;Times New Roman&quot;;mso-bidi-font-family:&quot;Times New Roman&quot;;color:black;
#mso-themecolor:text1;background:white"></span><span style="mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:&quot;Times New Roman&quot;;
color:black;mso-themecolor:text1"></span></a></span><span style="font-family: Corbel, sans-serif;">.<o:p></o:p></span></p>
<p class="MsoNormal" style="text-align:justify;text-justify:inter-ideograph;
line-height:115%"><span style="font-family:&quot;Corbel&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:
&quot;Times New Roman&quot;;mso-bidi-font-family:&quot;Times New Roman&quot;">&nbsp;</span></p>
<p class="MsoNormal" style="text-align:justify;text-justify:inter-ideograph;
line-height:115%"><span style="font-family:&quot;Corbel&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:
&quot;Times New Roman&quot;;mso-bidi-font-family:&quot;Times New Roman&quot;">&nbsp;</span></p>
<p class="MsoNormal" style="text-align:justify;text-justify:inter-ideograph;
line-height:115%"><b><span style="font-family:&quot;Corbel&quot;,&quot;sans-serif&quot;;color:#000000;mso-themecolor:accent1">Browse<o:p></o:p></span></b></p>
<p class="MsoNormal" style="text-align:justify;text-justify:inter-ideograph;
line-height:115%"><b><span style="font-family:&quot;Corbel&quot;,&quot;sans-serif&quot;;color:#4F81BD;mso-themecolor:accent1">&nbsp;</span></b></p>
<p class="MsoNormal" style="text-align:justify;text-justify:inter-ideograph;
line-height:115%"><span style="font-family:&quot;Corbel&quot;,&quot;sans-serif&quot;">This user-friendly link allows you to explore by any of the given fields categorized in the database: <i> By PiperID,Sequence,Ion,Score,Hits, Mass, Modification,Protein Name,Origin and Accession.</i><o:p></o:p></span></p>

<p class="MsoNormal" style="text-align:justify;text-justify:inter-ideograph;
line-height:115%"><span style="font-family:&quot;Corbel&quot;,&quot;sans-serif&quot;">&nbsp;</span></p>
<img style="border:0px solid black;" width="900" height="800" src="images/h01.png"><BR>
<img style="border:0px solid black;" width="900" height="800" src="images/h02.png"><BR>
<br>
<br>
<p class="MsoNormal" style="text-align:justify;text-justify:inter-ideograph;
line-height:115%"><span style="font-family:&quot;Corbel&quot;,&quot;sans-serif&quot;">&nbsp;</span></p>
<p class="MsoNormal" style="text-align:justify;text-justify:inter-ideograph;
line-height:115%"><b><span style="font-family:&quot;Corbel&quot;,&quot;sans-serif&quot;;color:#000000;mso-themecolor:accent1">Search<o:p></o:p></span></b></p>
<p class="MsoNormal" style="text-align:justify;text-justify:inter-ideograph;
line-height:115%"><span style="font-family:&quot;Corbel&quot;,&quot;sans-serif&quot;">&nbsp;</span></p>
<p class="MsoNormal" style="text-align:justify;text-justify:inter-ideograph;
line-height:115%"><span style="font-family:&quot;Corbel&quot;,&quot;sans-serif&quot;"><o:p></o:p></span></p>
<p class="MsoListParagraph" style="margin-left:.75in;mso-add-space:auto;
text-align:justify;text-justify:inter-ideograph;text-indent:-.5in;line-height:
115%;mso-list:l0 level1 lfo1"><!--[if !supportLists]--><b><span style="font-family:&quot;Corbel&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:
Corbel;mso-bidi-font-family:Corbel"> <span style="font-weight: normal; font-size: 7pt; line-height: normal; font-family: 'Times New Roman';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></b><!--[endif]--><b><span style="font-family:&quot;Corbel&quot;,&quot;sans-serif&quot;"> <o:p></o:p></span></b></p>
<p class="MsoNormal" style="text-align:justify;text-justify:inter-ideograph;
line-height:115%"><b><span style="font-family:&quot;Corbel&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:
&quot;Times New Roman&quot;;mso-bidi-font-family:&quot;Times New Roman&quot;;background:white">Input:&nbsp;</span></b><span style="font-family:&quot;Corbel&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
mso-bidi-font-family:&quot;Times New Roman&quot;;background:white">Here submit your query in the box and can specify any of the given 12 fields like PiperID, Accession ,</span><span style="font-family:&quot;Corbel&quot;,&quot;sans-serif&quot;;
mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:&quot;Times New Roman&quot;"> <span style="background:white;mso-bidi-font-weight:bold">Modification </span></span><!--[if supportFields]><span
style='font-family:"Corbel","sans-serif";mso-fareast-font-family:"Times New Roman";
mso-bidi-font-family:"Times New Roman"'><span style='mso-element:field-begin'></span>
<span style='mso-element:field-begin'></span><span
style='mso-spacerun:yes'> </span>PRIVATE &quot;&lt;INPUT
TYPE=\&quot;checkbox\&quot; VALUE=\&quot;C13\&quot;
NAME=\&quot;hse[]\&quot;&gt;&quot; <span style='mso-element:field-end'></span>MACROBUTTON
HTMLDirect </span><![endif]--><!--[if supportFields]><span style='font-family:
"Corbel","sans-serif";mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:
"Times New Roman"'><span style='mso-element:field-end'></span></span><![endif]--><span style="font-family:&quot;Corbel&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
mso-bidi-font-family:&quot;Times New Roman&quot;"></span><!--[if supportFields]><span
style='font-family:"Corbel","sans-serif";mso-fareast-font-family:"Times New Roman";
mso-bidi-font-family:"Times New Roman"'><span style='mso-element:field-begin'></span>
<span style='mso-element:field-begin'></span><span
style='mso-spacerun:yes'> </span>PRIVATE &quot;&lt;INPUT
TYPE=\&quot;checkbox\&quot; VALUE=\&quot;C16\&quot;
NAME=\&quot;hse[]\&quot;&gt;&quot; <span style='mso-element:field-end'></span>MACROBUTTON
HTMLDirect </span><![endif]--><!--[if supportFields]><span style='font-family:
"Corbel","sans-serif";mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:
"Times New Roman"'><span style='mso-element:field-end'></span></span><![endif]--><span style="font-family:&quot;Corbel&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
mso-bidi-font-family:&quot;Times New Roman&quot;">&nbsp;</span><!--[if supportFields]><span
style='font-family:"Corbel","sans-serif";mso-fareast-font-family:"Times New Roman";
mso-bidi-font-family:"Times New Roman"'><span style='mso-element:field-begin'></span>
<span style='mso-element:field-begin'></span><span
style='mso-spacerun:yes'> </span>PRIVATE &quot;&lt;INPUT
TYPE=\&quot;checkbox\&quot; VALUE=\&quot;C23\&quot;
NAME=\&quot;hse[]\&quot;&gt;&quot; <span style='mso-element:field-end'></span>MACROBUTTON
HTMLDirect </span><![endif]--><!--[if supportFields]><span style='font-family:
"Corbel","sans-serif";mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:
"Times New Roman"'><span style='mso-element:field-end'></span></span><![endif]--><span style="font-family:&quot;Corbel&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
mso-bidi-font-family:&quot;Times New Roman&quot;">&nbsp;</span><!--[if supportFields]><span
style='font-family:"Corbel","sans-serif";mso-fareast-font-family:"Times New Roman";
mso-bidi-font-family:"Times New Roman"'><span style='mso-element:field-begin'></span>
<span style='mso-element:field-begin'></span><span
style='mso-spacerun:yes'> </span>PRIVATE &quot;&lt;INPUT
TYPE=\&quot;checkbox\&quot; VALUE=\&quot;C25\&quot;
NAME=\&quot;hse[]\&quot;&gt;&quot; <span style='mso-element:field-end'></span>MACROBUTTON
HTMLDirect </span><![endif]--><!--[if supportFields]><span style='font-family:
"Corbel","sans-serif";mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:
"Times New Roman"'><span style='mso-element:field-end'></span></span><![endif]--><span style="font-family:&quot;Corbel&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
mso-bidi-font-family:&quot;Times New Roman&quot;">&nbsp;</span><!--[if supportFields]><span
style='font-family:"Corbel","sans-serif";mso-fareast-font-family:"Times New Roman";
mso-bidi-font-family:"Times New Roman"'><span style='mso-element:field-begin'></span>
<span style='mso-element:field-begin'></span><span
style='mso-spacerun:yes'> </span>PRIVATE &quot;&lt;INPUT
TYPE=\&quot;checkbox\&quot; VALUE=\&quot;C26\&quot;
NAME=\&quot;hse[]\&quot;&gt;&quot; <span style='mso-element:field-end'></span>MACROBUTTON
HTMLDirect </span><![endif]--><!--[if supportFields]><span style='font-family:
"Corbel","sans-serif";mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:
"Times New Roman"'><span style='mso-element:field-end'></span></span><![endif]--><span style="font-family:&quot;Corbel&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
mso-bidi-font-family:&quot;Times New Roman&quot;">&nbsp;</span><!--[if supportFields]><span style='font-family:"Corbel","sans-serif";
mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:"Times New Roman"'><span
style='mso-element:field-begin'></span> <span style='mso-element:field-begin'></span><span
style='mso-spacerun:yes'> </span>PRIVATE &quot;&lt;INPUT
TYPE=\&quot;checkbox\&quot; VALUE=\&quot;C27\&quot;
NAME=\&quot;hse[]\&quot;&gt;&quot; <span style='mso-element:field-end'></span>MACROBUTTON
HTMLDirect </span><![endif]--><!--[if supportFields]><span style='font-family:
"Corbel","sans-serif";mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:
"Times New Roman"'><span style='mso-element:field-end'></span></span><![endif]--><span style="font-family:&quot;Corbel&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
mso-bidi-font-family:&quot;Times New Roman&quot;">&nbsp;</span><!--[if supportFields]><span
style='font-family:"Corbel","sans-serif";mso-fareast-font-family:"Times New Roman";
mso-bidi-font-family:"Times New Roman"'><span style='mso-element:field-begin'></span>
<span style='mso-element:field-begin'></span><span
style='mso-spacerun:yes'> </span>PRIVATE &quot;&lt;INPUT
TYPE=\&quot;checkbox\&quot; VALUE=\&quot;C29\&quot;
NAME=\&quot;hse[]\&quot;&gt;&quot; <span style='mso-element:field-end'></span>MACROBUTTON
HTMLDirect </span><![endif]--><!--[if supportFields]><span style='font-family:
"Corbel","sans-serif";mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:
"Times New Roman"'><span style='mso-element:field-end'></span></span><![endif]--><span style="font-family:&quot;Corbel&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
mso-bidi-font-family:&quot;Times New Roman&quot;"></span><!--[if supportFields]><span
style='font-family:"Corbel","sans-serif";mso-fareast-font-family:"Times New Roman";
mso-bidi-font-family:"Times New Roman"'><span style='mso-element:field-begin'></span>
<span style='mso-element:field-begin'></span><span
style='mso-spacerun:yes'> </span>PRIVATE &quot;&lt;INPUT
TYPE=\&quot;checkbox\&quot; VALUE=\&quot;C31\&quot;
NAME=\&quot;hse[]\&quot;&gt;&quot; <span style='mso-element:field-end'></span>MACROBUTTON
HTMLDirect </span><![endif]--><!--[if supportFields]><span style='font-family:
"Corbel","sans-serif";mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:
"Times New Roman"'><span style='mso-element:field-end'></span></span><![endif]--><span style="font-family:&quot;Corbel&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
mso-bidi-font-family:&quot;Times New Roman&quot;">&nbsp;</span><!--[if supportFields]><span
style='font-family:"Corbel","sans-serif";mso-fareast-font-family:"Times New Roman";
mso-bidi-font-family:"Times New Roman"'><span style='mso-element:field-begin'></span>
<span style='mso-element:field-begin'></span><span
style='mso-spacerun:yes'> </span>PRIVATE &quot;&lt;INPUT
TYPE=\&quot;checkbox\&quot; VALUE=\&quot;C32\&quot;
NAME=\&quot;hse[]\&quot;&gt;&quot; <span style='mso-element:field-end'></span>MACROBUTTON
HTMLDirect </span><![endif]--><!--[if supportFields]><span style='font-family:
"Corbel","sans-serif";mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:
"Times New Roman"'><span style='mso-element:field-end'></span></span><![endif]--><span style="font-family:&quot;Corbel&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
mso-bidi-font-family:&quot;Times New Roman&quot;">&nbsp;</span><!--[if supportFields]><span
style='font-family:"Corbel","sans-serif";mso-fareast-font-family:"Times New Roman";
mso-bidi-font-family:"Times New Roman"'><span style='mso-element:field-begin'></span>
<span style='mso-element:field-begin'></span><span
style='mso-spacerun:yes'> </span>PRIVATE &quot;&lt;INPUT
TYPE=\&quot;checkbox\&quot; VALUE=\&quot;C35\&quot;
NAME=\&quot;hse[]\&quot;&gt;&quot; <span style='mso-element:field-end'></span>MACROBUTTON
HTMLDirect </span><![endif]--><!--[if supportFields]><span style='font-family:
"Corbel","sans-serif";mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:
"Times New Roman"'><span style='mso-element:field-end'></span></span><![endif]--><span style="font-family:&quot;Corbel&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
mso-bidi-font-family:&quot;Times New Roman&quot;">&nbsp; <span style="background: white;">or else you can keep the default&nbsp;<b>All</b>&nbsp;option which will search against all the fields in the database. Examples have been provided corresponding to each field, which can be used as sample queries. Besides the option to choose the field,&nbsp;<b>search type</b>&nbsp;allows to retrieve either an exact match or the match containing the query. Clicking on&nbsp;<b>clear data</b>&nbsp;button clears the data after your search.<o:p></o:p></span></span></p>

<img style="border:0px solid black;" width="900" height="800" src="images/h1.png"><BR>

<p class="MsoNormal" style="text-align:justify;text-justify:inter-ideograph;
line-height:115%"><span style="font-family: Corbel, sans-serif; background: white;"><o:p>&nbsp;</o:p></span></p>
<p class="MsoNormal" style="text-align:justify;text-justify:inter-ideograph;
line-height:115%"><b><span style="font-family: Corbel, sans-serif; background: white;">Output: </span></b><span style="font-family: Corbel, sans-serif; background: white;">The results display from this search against 11 fields. You can sort the data by clicking on the column header and typing in the boxes given under the headers can do filtering.<o:p></o:p></span></p>
<img style="border:0px solid black;" width="900" height="800" src="images/h2.png"><BR>

<p class="MsoNormal" style="text-align:justify;text-justify:inter-ideograph;
line-height:115%"><span style="font-family: Corbel, sans-serif; background: white;"><o:p>&nbsp;</o:p></span></p>
<p class="MsoListParagraphCxSpFirst" style="margin-left:.75in;mso-add-space:auto;
text-align:justify;text-justify:inter-ideograph;text-indent:-.5in;line-height:
115%;mso-list:l0 level1 lfo1"><!--[if !supportLists]--><b><span style="font-family: Corbel, sans-serif;"><span style="font-weight: normal; font-size: 7pt; line-height: normal; font-family: 'Times New Roman';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></b><!--[endif]--><b><span style="font-family: Corbel, sans-serif; background: white;"> <o:p></o:p></span></b></p>
<p class="MsoListParagraphCxSpLast" style="margin-left:.75in;mso-add-space:auto;
text-align:justify;text-justify:inter-ideograph;line-height:115%"><b><span style="font-family: Corbel, sans-serif; background: white;"><o:p>&nbsp;</o:p></span></b></p>

<p class="MsoNormal" style="text-align:justify;text-justify:inter-ideograph;
line-height:115%"><b><span style="font-family:&quot;Corbel&quot;,&quot;sans-serif&quot;;color:#4F81BD;mso-themecolor:accent1">Tools<o:p></o:p></span></b></p>
<p class="MsoNormal" style="text-align:justify;text-justify:inter-ideograph;
line-height:115%"><b><span style="font-family:&quot;Corbel&quot;,&quot;sans-serif&quot;;color:#4F81BD;mso-themecolor:accent1">&nbsp;</span></b></p>
<p class="MsoListParagraphCxSpFirst" style="margin-left:39.0pt;mso-add-space:
auto;text-align:justify;text-justify:inter-ideograph;text-indent:-.5in;
line-height:115%;mso-list:l1 level1 lfo2"><!--[if !supportLists]--><b><span style="font-family:&quot;Corbel&quot;,&quot;sans-serif&quot;;
mso-fareast-font-family:Corbel;mso-bidi-font-family:Corbel"><span style="font-weight: normal; font-size: 7pt; line-height: normal; font-family: 'Times New Roman';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></b><!--[endif]--><b><span style="font-family:&quot;Corbel&quot;,&quot;sans-serif&quot;">BLAST:<o:p></o:p></span></b></p>
<p class="MsoListParagraphCxSpMiddle" style="margin-left:39.0pt;mso-add-space:
auto;text-align:justify;text-justify:inter-ideograph;line-height:115%"><b><span style="font-family:&quot;Corbel&quot;,&quot;sans-serif&quot;">&nbsp;</span></b></p>
<p class="MsoListParagraphCxSpMiddle" style="margin-left:39.0pt;mso-add-space:
auto;text-align:justify;text-justify:inter-ideograph;line-height:115%"><span style="font-family: Corbel, sans-serif; background: white;">The BLAST allows alignment of a user provided peptide sequence against all the sequences available in our database. This helps the user to confirm whether a given sequence or similar one has already been reported or not.<o:p></o:p></span></p>

<p class="MsoListParagraphCxSpMiddle" style="margin-left:39.0pt;mso-add-space:
auto;text-align:justify;text-justify:inter-ideograph;line-height:115%"><span style="font-family: Corbel, sans-serif; background: white;"><o:p>&nbsp;</o:p></span></p>
<img style="border:0px solid black;" width="900" height="600" src="images/h5.png"><BR>

<p class="MsoNormal" style="text-align:justify;text-justify:inter-ideograph;
line-height:115%"><b><span style="font-family:&quot;Corbel&quot;,&quot;sans-serif&quot;;color:#4F81BD;mso-themecolor:accent1">&nbsp;</span></b></p>
<p class="MsoListParagraphCxSpFirst" style="margin-left:39.0pt;mso-add-space:
auto;text-align:justify;text-justify:inter-ideograph;text-indent:-.5in;
line-height:115%;mso-list:l1 level1 lfo2"><!--[if !supportLists]--><b><span style="font-family:&quot;Corbel&quot;,&quot;sans-serif&quot;;
mso-fareast-font-family:Corbel;mso-bidi-font-family:Corbel"><span style="font-weight: normal; font-size: 7pt; line-height: normal; font-family: 'Times New Roman';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></b><!--[endif]--><b><span style="font-family:&quot;Corbel&quot;,&quot;sans-serif&quot;">PiperPep Map Tool:<o:p></o:p></span></b></p>
<p class="MsoListParagraphCxSpMiddle" style="margin-left:39.0pt;mso-add-space:
auto;text-align:justify;text-justify:inter-ideograph;line-height:115%"><b><span style="font-family:&quot;Corbel&quot;,&quot;sans-serif&quot;">&nbsp;</span></b></p>
<p class="MsoListParagraphCxSpMiddle" style="margin-left:39.0pt;mso-add-space:
auto;text-align:justify;text-justify:inter-ideograph;line-height:115%"><span style="font-family: Corbel, sans-serif; background: white;">The Map tool allows alignment of a user provided peptide sequence against all the sequences available in our database. This helps the user to confirm whether a given sequence or similar one has already been reported or not.<o:p></o:p></span></p>
<p class="MsoListParagraphCxSpMiddle" style="margin-left:39.0pt;mso-add-space:
auto;text-align:justify;text-justify:inter-ideograph;line-height:115%"><span style="font-family: Corbel, sans-serif; background: white;"><o:p>&nbsp;</o:p></span></p>
<img style="border:0px solid black;" width="900" height="600" src="images/h7.png"><BR>
<p class="MsoListParagraphCxSpMiddle" style="margin-left:39.0pt;mso-add-space:
auto;text-align:justify;text-justify:inter-ideograph;line-height:115%"><span style="font-family: Corbel, sans-serif; background: white;"><o:p>&nbsp;</o:p></span></p>
<img style="border:0px solid black;" width="900" height="400" src="images/h8.png"><BR>

<p class="MsoNormal" style="text-align:justify;text-justify:inter-ideograph;
line-height:115%"><b><span style="font-family:&quot;Corbel&quot;,&quot;sans-serif&quot;;color:#4F81BD;mso-themecolor:accent1">&nbsp;</span></b></p>
<p class="MsoListParagraphCxSpFirst" style="margin-left:39.0pt;mso-add-space:
auto;text-align:justify;text-justify:inter-ideograph;text-indent:-.5in;
line-height:115%;mso-list:l1 level1 lfo2"><!--[if !supportLists]--><b><span style="font-family:&quot;Corbel&quot;,&quot;sans-serif&quot;;
mso-fareast-font-family:Corbel;mso-bidi-font-family:Corbel"><span style="font-weight: normal; font-size: 7pt; line-height: normal; font-family: 'Times New Roman';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></b><!--[endif]--><b><span style="font-family:&quot;Corbel&quot;,&quot;sans-serif&quot;">Pepcal Tool:<o:p></o:p></span></b></p>
<p class="MsoListParagraphCxSpMiddle" style="margin-left:39.0pt;mso-add-space:
auto;text-align:justify;text-justify:inter-ideograph;line-height:115%"><b><span style="font-family:&quot;Corbel&quot;,&quot;sans-serif&quot;">&nbsp;</span></b></p>
<p class="MsoListParagraphCxSpMiddle" style="margin-left:39.0pt;mso-add-space:
auto;text-align:justify;text-justify:inter-ideograph;line-height:115%"><span style="font-family: Corbel, sans-serif; background: white;">The PepCal tool allows to predict physiochemical properties of a user provided peptide sequence against Hydophobicity, Moleculer weight and different properties of peptide (By pepcal.com). This helps the user to confirm properties of a given Peptide.<o:p></o:p></span></p>
<p class="MsoListParagraphCxSpMiddle" style="margin-left:39.0pt;mso-add-space:
auto;text-align:justify;text-justify:inter-ideograph;line-height:115%"><span style="font-family: Corbel, sans-serif; background: white;"><o:p>&nbsp;</o:p></span></p>
<img style="border:0px solid black;" width="900" height="100" src="images/h9.png"><BR>
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
