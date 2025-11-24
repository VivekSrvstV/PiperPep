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
<p class="defaultstyle" align="center" style="text-align:center;line-height:115%;
background:white"><b><span style="font-size:14.0pt;line-height:115%;font-family:&quot;Corbel&quot;,&quot;sans-serif&quot;;
mso-bidi-font-family:&quot;Times New Roman&quot;;color:#0070C0">FAQs<o:p></o:p></span></b></p>
<div class="defaultstyle" align="center" style="text-align:center;line-height:115%;
background:white"><span style="font-size:12.0pt;line-height:115%;font-family:
&quot;Corbel&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Times New Roman&quot;;color:#0070C0">  <hr size="2" width="100%" align="center" />
</span></div>
<p class="defaultstyle" style="text-align:justify;text-justify:inter-ideograph;
line-height:115%;background:white"><span style="font-size:12.0pt;line-height:
115%;font-family:&quot;Corbel&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Times New Roman&quot;;
color:#0070C0">Q1. What is siRNAmod?<o:p></o:p></span></p>
<p class="defaultstyle" style="text-align:justify;text-justify:inter-ideograph;
line-height:115%;background:white"><span style="font-size: 12pt; line-height: 115%; font-family: Corbel, sans-serif;">siRNAmod is a manually curated database for experimentally validated chemically modified siRNA involving 110 different types chemical modifications with different permutations and combinations of targeting variousgenes with 3831 siRNA sequences reported that are involved in cellular processes. <o:p></o:p></span></p>
<p class="defaultstyle" style="text-align:justify;text-justify:inter-ideograph;
line-height:115%;background:white"><span style="font-size: 12pt; line-height: 115%; font-family: Corbel, sans-serif;">&nbsp;</span></p>
<p class="defaultstyle" style="text-align:justify;text-justify:inter-ideograph;
line-height:115%;background:white"><span style="font-size:12.0pt;line-height:
115%;font-family:&quot;Corbel&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Times New Roman&quot;;
color:#0070C0">Q2. What is the importance of siRNAmod database to scientific community?<o:p></o:p></span></p>
<p class="defaultstyle" style="text-align:justify;text-justify:inter-ideograph;
line-height:115%;background:white"><span style="font-size: 12pt; line-height: 115%; font-family: Corbel, sans-serif;">Since, &ldquo;siRNAmod&rdquo; will be useful for people working on siRNA-based techniques as well as chemists working in the field of improving the siRNA-based techniques. It is also useful in identifying the modifications for further research. Therefore, in order to make these chemical modifications quickly accessible in the form of a comprehensive database, we have developed siRNAmod. <o:p></o:p></span></p>
<p class="defaultstyle" style="text-align:justify;text-justify:inter-ideograph;
line-height:115%;background:white"><span style="font-size: 12pt; line-height: 115%; font-family: Corbel, sans-serif;">&nbsp;</span></p>
<p class="defaultstyle" style="text-align:justify;text-justify:inter-ideograph;
line-height:115%;background:white"><span style="font-size:12.0pt;line-height:
115%;font-family:&quot;Corbel&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Times New Roman&quot;;
color:#0070C0">&nbsp;Q3. How many total entries are there in siRNAmod of siRNA? <o:p></o:p></span></p>
<p class="defaultstyle" style="text-align:justify;text-justify:inter-ideograph;
line-height:115%;background:white"><span style="font-size: 12pt; line-height: 115%; font-family: Corbel, sans-serif;">siRNAmod contains total of 3831 experimentally validated chemically modified &nbsp; siRNAs. These also includes modifications like mismatch, mutations, overhangs, wobble base pairs, NA, Asymmetric siRNA, cut (internally segmented siRNA) category (60 entries in all).<br>
In addition database also includes 365 siRNA sequences (not included in above 3831) with no modification on either strand. These were given in the papers as control siRNAs
.<o:p></o:p></span></p>
<p class="defaultstyle" style="text-align:justify;text-justify:inter-ideograph;
line-height:115%;background:white"><a name="_GoBack"></a><span style="font-size: 12pt; line-height: 115%; font-family: Corbel, sans-serif;">&nbsp;</span></p>
<p class="defaultstyle" style="text-align:justify;text-justify:inter-ideograph;
line-height:115%;background:white"><span style="font-size:12.0pt;line-height:
115%;font-family:&quot;Corbel&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Times New Roman&quot;;
color:#0070C0">Q4. What are the fields of siRNAmod?<o:p></o:p></span></p>
<p class="defaultstyle" style="text-align:justify;text-justify:inter-ideograph;
line-height:115%;background:white"><span style="font-size: 12pt; line-height: 115%; font-family: Corbel, sans-serif;">These are as follows: -<o:p></o:p></span></p>
<p class="defaultstyle" style="text-align:justify;text-justify:inter-ideograph;
line-height:115%;background:white"><span style="font-size: 12pt; line-height: 115%; font-family: Corbel, sans-serif;">(i) siRNAmodID, (ii) siRNA sequence (sense/antisense), (iii) Modification (sense/antisense), (iv) Types of modification,&nbsp; (v) Number of modifications, (vi) Position of modification, (vii) Modification component (sugar, base, phosphate), (viii) Bonding of modification, (ix) Melting temperature, (x) Biological activity, (xi) Effect on stability (time or half-life), (xii) Target gene, (xiii) siRNA concentration used, (xiv) Experiment used for various assays, (xv) Cell or Organism used, (xvi) siRNA synthesis technique, (xvii) Transfection method, (xviii) Duration after transfection, (xix) Delivery system used viral or non-viral, (xx) Vector name, (xxi) Comments, (xxii) Reference.<o:p></o:p></span></p>
<p class="defaultstyle" style="text-align:justify;text-justify:inter-ideograph;
line-height:115%;background:white"><span style="font-size: 12pt; line-height: 115%; font-family: Corbel, sans-serif;">&nbsp;</span></p>
<p class="defaultstyle" style="text-align:justify;text-justify:inter-ideograph;
line-height:115%;background:white"><span style="font-size:12.0pt;line-height:
115%;font-family:&quot;Corbel&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Times New Roman&quot;;
color:#0070C0">&nbsp;Q5. What type of experimentation type is used in chemical modifications of siRNA?<o:p></o:p></span></p>
<p class="defaultstyle" style="text-align:justify;text-justify:inter-ideograph;
line-height:115%;background:white"><span style="font-size: 12pt; line-height: 115%; font-family: Corbel, sans-serif;">Both vivo and vitro are used in chemical modification of siRNA in siRNAmod. In vivo, C57BL/6 mice is used while for in vitro HeLa, HEK293, H1299 cells, COS7 cells, PC12 Cells, Vero cells, HEK 293, HCT116 cells, NIH-3T3-MDR cells, Hepa1-6 cells, SH-SY5Y cells,MiaPaca II cells,Rhabdomyosarcoma cells, Huh7 cells are used.<o:p></o:p></span></p>
<p class="defaultstyle" style="text-align:justify;text-justify:inter-ideograph;
line-height:115%;background:white"><span style="font-size: 12pt; line-height: 115%; font-family: Corbel, sans-serif;">&nbsp;</span></p>
<p class="defaultstyle" style="text-align:justify;text-justify:inter-ideograph;
line-height:115%;background:white"><span style="font-size:12.0pt;line-height:
115%;font-family:&quot;Corbel&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Times New Roman&quot;;
color:#0070C0">&nbsp;Q6. What components are used in chemical modifications of siRNA in siRNAmod?<o:p></o:p></span></p>
<p class="defaultstyle" style="text-align:justify;text-justify:inter-ideograph;
line-height:115%;background:white"><span style="font-size: 12pt; line-height: 115%; font-family: Corbel, sans-serif;">All three components are used in siRNAmod. They are Sugar, Base and Phosphate.<o:p></o:p></span></p>
<p class="defaultstyle" style="text-align:justify;text-justify:inter-ideograph;
line-height:115%;background:white"><span style="font-size: 12pt; line-height: 115%; font-family: Corbel, sans-serif;">&nbsp;</span></p>
<p class="defaultstyle" style="text-align:justify;text-justify:inter-ideograph;
line-height:115%;background:white"><span style="font-size:12.0pt;line-height:
115%;font-family:&quot;Corbel&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Times New Roman&quot;;
color:#0070C0">Q7. How to use search option in siRNAmod?<o:p></o:p></span></p>
<p class="defaultstyle" style="text-align:justify;text-justify:inter-ideograph;
line-height:115%;background:white"><span style="font-size: 12pt; line-height: 115%; font-family: Corbel, sans-serif;">User can enter the query/keyword after clicking search on menu bar. The user given keyword can be searched in the all fields like siRNAmod Id, PMID, siRNA/shRNA type, Name of siRNA in paper of sense/antisense strand, Sequence of sense/antisense strand, Modification (sense/antisense), Type of modification of sense/antisense, Position of modification of sense/antisense, Bonding of modification, Melting temperature, Biological activity, Effect of half life, Target, siRNA concentration used, Cell or Organism used, Transfection method, there is also facility that user can select some out of all fields to search that keyword in those fields only.<o:p></o:p></span></p>
<p class="defaultstyle" style="text-align:justify;text-justify:inter-ideograph;
line-height:115%;background:white"><span style="font-size: 12pt; line-height: 115%; font-family: Corbel, sans-serif;">&nbsp;</span></p>
<p class="defaultstyle" style="text-align:justify;text-justify:inter-ideograph;
line-height:115%;background:white"><span style="font-size:12.0pt;line-height:
115%;font-family:&quot;Corbel&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Times New Roman&quot;;
color:#0070C0">Q8. How to use advanced search option in siRNAmod?<o:p></o:p></span></p>
<p class="defaultstyle" style="text-align:justify;text-justify:inter-ideograph;
line-height:115%;background:white"><span style="font-size: 12pt; line-height: 115%; font-family: Corbel, sans-serif;">In the &lsquo;Advance Search&rsquo; option, the user can enter keyword and search the data using logical operators (AND/OR) to make more flexible and stringent queries.<o:p></o:p></span></p>
<p class="defaultstyle" style="text-align:justify;text-justify:inter-ideograph;
line-height:115%;background:white"><span style="font-size: 12pt; line-height: 115%; font-family: Corbel, sans-serif;">&nbsp;</span></p>
<p class="defaultstyle" style="text-align:justify;text-justify:inter-ideograph;
line-height:115%;background:white"><span style="font-size:12.0pt;line-height:
115%;font-family:&quot;Corbel&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Times New Roman&quot;;
color:#0070C0">Q9. Describe the tools incorporated in siRNAmod and their advantage?<o:p></o:p></span></p>
<p class="defaultstyle" style="text-align:justify;text-justify:inter-ideograph;
line-height:115%;background:white"><span style="font-size: 12pt; line-height: 115%; font-family: Corbel, sans-serif;">There are two tools in siRNAmod to help user analyze their sequence. These are:<o:p></o:p></span></p>
<p class="defaultstyle" style="text-align:justify;text-justify:inter-ideograph;
line-height:115%;background:white"><span style="font-size: 12pt; line-height: 115%; font-family: Corbel, sans-serif;">1) siRNAmodBlast: To blast user provided siRNA to the siRNAmod in the database.<o:p></o:p></span></p>
<p class="defaultstyle" style="text-align:justify;text-justify:inter-ideograph;
line-height:115%;background:white"><span style="font-size: 12pt; line-height: 115%; font-family: Corbel, sans-serif;">2) siRNAmod Map: To mapsiRNAmod siRNA on your siRNA/shRNA or nucleotide sequence.<o:p></o:p></span></p>
<p class="defaultstyle" style="text-align:justify;text-justify:inter-ideograph;
line-height:115%;background:white"><span style="font-size: 12pt; line-height: 115%; font-family: Corbel, sans-serif;">&nbsp;</span></p>
<p class="defaultstyle" style="text-align:justify;text-justify:inter-ideograph;
line-height:115%;background:white"><span style="font-size:12.0pt;line-height:
115%;font-family:&quot;Corbel&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Times New Roman&quot;;
color:#0070C0">Q10. What is the use of siRNAmod tool?<o:p></o:p></span></p>
<p class="defaultstyle" style="text-align:justify;text-justify:inter-ideograph;
line-height:115%;background:white"><span style="font-size: 12pt; line-height: 115%; font-family: Corbel, sans-serif;">The siRNAmod tool searches the siRNA sequence in the database similar to the siRNA sequence provided by the user and searches whether that siRNA sequence have been already reported in the literature or not. <o:p></o:p></span></p>
<p class="defaultstyle" style="text-align:justify;text-justify:inter-ideograph;
line-height:115%;background:white"><span style="font-size: 12pt; line-height: 115%; font-family: Corbel, sans-serif;">&nbsp;</span></p>
<p class="defaultstyle" style="text-align:justify;text-justify:inter-ideograph;
line-height:115%;background:white"><span style="font-size:12.0pt;line-height:
115%;font-family:&quot;Corbel&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Times New Roman&quot;;
color:#0070C0">Q11. How to download data from siRNAmod?&nbsp; <o:p></o:p></span></p>
<p class="defaultstyle" style="text-align:justify;text-justify:inter-ideograph;
line-height:115%;background:white"><span style="font-size: 12pt; line-height: 115%; font-family: Corbel, sans-serif;">Data is freely available to download from siRNAmod under the downloads section in the menu bar. User can download entire database in excel format depending upon their requirement.<o:p></o:p></span></p>


<p class="defaultstyle" style="text-align:justify;text-justify:inter-ideograph;
line-height:115%;background:white"><span style="font-size: 12pt; line-height: 115%; font-family: Corbel, sans-serif;">&nbsp;</span></p>
<p class="defaultstyle" style="text-align:justify;text-justify:inter-ideograph;
line-height:115%;background:white"><span style="font-size:12.0pt;line-height:
115%;font-family:&quot;Corbel&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Times New Roman&quot;;
color:#0070C0">Q12. What and how is efficacy designated in siRNAmod? <o:p></o:p></span></p>
<p class="defaultstyle" style="text-align:justify;text-justify:inter-ideograph;
line-height:115%;background:white"><span style="font-size: 12pt; line-height: 115%; font-family: Corbel, sans-serif;"> The efficacy is the potency of the chemically modified siRNA to silence the particular gene. It is given as biological activity in database and is defined in terms of percentage of gene silenced (e.g. 90%) or IC<sub>50</sub> of a particular siRNA. In some cases it is also mentioned via quantitative way as high or increased (as defined by the paper).<o:p></o:p></span></p>


<p class="defaultstyle" style="text-align:justify;text-justify:inter-ideograph;
line-height:115%;background:white"><span style="font-size: 12pt; line-height: 115%; font-family: Corbel, sans-serif;">&nbsp;</span></p>
<p class="defaultstyle" style="text-align:justify;text-justify:inter-ideograph;
line-height:115%;background:white"><span style="font-size:12.0pt;line-height:
115%;font-family:&quot;Corbel&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Times New Roman&quot;;
color:#0070C0">Q13. What is meant by stability in siRNAmod? <o:p></o:p></span></p>
<p class="defaultstyle" style="text-align:justify;text-justify:inter-ideograph;
line-height:115%;background:white"><span style="font-size: 12pt; line-height: 115%; font-family: Corbel, sans-serif;">Stability is the expressed in terms of the time as for how long does the particular chemically modified siRNA is stable in serum or seen as per the particular experiment or in terms of the half-life of a particular siRNA.<o:p></o:p></span></p>

<p class="defaultstyle" style="text-align:justify;text-justify:inter-ideograph;
line-height:115%;background:white"><span style="font-size: 12pt; line-height: 115%; font-family: Corbel, sans-serif;">&nbsp;</span></p>
<p class="defaultstyle" style="text-align:justify;text-justify:inter-ideograph;
line-height:115%;background:white"><span style="font-size:12.0pt;line-height:
115%;font-family:&quot;Corbel&quot;,&quot;sans-serif&quot;;mso-bidi-font-family:&quot;Times New Roman&quot;;
color:#0070C0">Q14. Is this database freely available?<o:p></o:p></span></p>
<p class="defaultstyle" style="text-align:justify;text-justify:inter-ideograph;
line-height:115%;background:white"><span style="font-size: 12pt; line-height: 115%; font-family: Corbel, sans-serif;">Yes, this database is freely available through this url: </span><span style="font-size:12.0pt;line-height:115%;font-family:&quot;Corbel&quot;,&quot;sans-serif&quot;"><a href="http://crdd.osdd.net/servers/sirnamod/">http://crdd.osdd.net/servers/siRNAmod</a></span><span style="font-size: 12pt; line-height: 115%; font-family: Corbel, sans-serif;"><o:p></o:p></span></p>
<p class="defaultstyle" style="text-align:justify;text-justify:inter-ideograph;
line-height:115%;background:white"><span style="font-size: 12pt; line-height: 115%; font-family: Corbel, sans-serif;">&nbsp;</span></p>
<p class="defaultstyle" style="margin-bottom:0in;margin-bottom:.0001pt;
text-align:justify;text-justify:inter-ideograph;line-height:115%;background:
white"><span style="font-size: 12pt; line-height: 115%; font-family: Corbel, sans-serif;">&nbsp;</span>
</p >
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
