<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PiperDB</title>
<meta name="keywords" content="CRISPR, editing, RNA, gRNA, cas9" />
<meta name="description" content="Crispr editing crsiprgebase" />
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
                <li><a href="Team.php"><span class="gallery"></span>Team</a></li>>
            </ul>
        </div>
</div> 
</div>
<div id="wrapper">
<div id="middle">

<script type="text/javascript">

function expandCollapse() {

        for (var i=0; i<expandCollapse.arguments.length; i++) {

                var element = document.getElementById(expandCollapse.arguments[i]);

                element.style.display = (element.style.display == "none") ? "block" : "none";

        }

}

</script>

<!------------>
<script type="text/javascript">

function expandCollapse2() {

        for (var j=0; j<expandCollapse2.arguments.length; j++) {

                var element = document.getElementById(expandCollapse2.arguments[j]);

                element.style.display = (element.style.display == "none") ? "block" : "none";

        }

}

</script>

<br><br><center><H3><b><font color="white">Tools</b></H3></center></font><br>

<div id="on" style="border: 0px solid #90ee90;padding: 0px;">

        <a href="javascript: expandCollapse('expand', 'on');"><font size ="3"><b>[+] BLAST Tool</b></a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="black">-- Blast your target sequence against Piperpep or NCBI nt database</font>


        </div>

        <div id="expand" style="display: none;border: 0px solid #90ee90;padding: 0px;">

        <a href="javascript: expandCollapse('expand', 'on');"><b>[-] BLAST Tool</b></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="black" >-- Blast your target sequence against PiperDB or NCBI nt database.</font>

<p><br><a href="blast1.php">BLAST PiperDB</a><br><a href="http://blast.ncbi.nlm.nih.gov/Blast.cgi?PROGRAM=blastp&PAGE_TYPE=BlastSearch&LINK_LOC=blasthome">NCBI BLAST </a></p><br>

        </div>
		<div>

        <a href="mp.php"><b> MAP Tool</b></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="black" >-- Map your target sequence against Piperpep or NCBI nt database.</font>


        </div>
		
		<div>

        <a href="pepcal.php"><b> PepCal Tool</b></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="black" >-- Analyze your Peptide properties target sequence against Piperpep or NCBI nt database.</font>


        </div>


<div id="middle" style="height: 670px;">
    
    	<div class="col_w540 float_l v_divider">
</div>
<div class="cleaner h30"></div>
            
            <div class="cleaner"></div>
</div>

<div id="content">
    
    	<div class="col_w440 float_l">
			</div>
            
			<div class="cleaner"></div>  

      </div>
        <div class="cleaner"></div>   
</div>

</div>
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
