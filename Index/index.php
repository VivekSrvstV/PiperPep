<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PiperPep</title>
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
            <h1><a href="" target="_parent">PiperDB</a></h1>
        </div> <!-- end of site_title -->
        
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
        
        <!--<div id="search_box">
            <form action="#" method="post">
                <input type="text" value="Enter a keyword..." name="q" size="10" id="searchfield" title="searchfield" onfocus="clearText(this)" onblur="clearText(this)" />
                <input type="submit" name="Search" value="" id="searchbutton" title="Search" />
            </form>
        </div> -->
        <div class="cleaner"></div>
    </div>
    
    <div id="slider">
        <a href="http://www.freecsstemplates.in/" target="_parent"><img src="images/slideshow/01.jpg" alt="01" title="#" /></a>
        <a href="http://www.freecsstemplates.in/" target="_parent"><img src="images/slideshow/04.jpg" alt="04" title="#" /></a>
    </div> 
    
      <div id="middle" style="position: absolute; text-align: justify;">
    
    	<div class="col_w540 float_l v_divider">
        	<h1>Welcome to PiperPep</h1>
            <p color="black" target="_parent"> Black pepper (Piper nigrum L) belongs to Piperaceae family. It is said that the Europeans ventured new world primarily because of this Spice crop.PiperPep is Experimantally generated protein peptide database,using the mass spectrometry derived data on black pepper,with the annotation of more than 1000 number of peptides.At present the database has the information on peptide sequences and its physiochemical properties and Antimicrobial peptides from this medicinally important Spice crop.</a>
            <p target="_parent">Our database with annotated peptides is the only resource on black pepper as the whole genome sequence of this crop is not available.This database will also be a reference for finding similar peptides from other plants also.</a>
            <div class="cleaner h30"></div>
            <a href="#" class="more float_r">Continue</a>
            <div class="cleaner"></div>
        </div>
	   
        

       <!--<div class="col_w340 float_r twitter_col">
        	<div class="twitter_box">
                <div class="tb_entry">
                    <a href="#">@Vivamus a massa</a> Donec iaculis felis id neque. Morbi nunc. Praesent varius egestas velit.
                </div>
                <div class="tb_entry">
                    <a href="#">@Steven</a> Donec a massa ut pede pulvinar vulputate Nulla et augue. Sed eu nunc quis pede tristique suscipit.
                </div>
                <div class="tb_entry">
                    <a href="#">@Designer</a> Nam sit amet justo vel libero tincidunt dignissim Cras magna velit, pellentesque mattis, faucibus vitae, feugiat vitae, sapien.
                </div>
                <div class="tb_entry">
                    <a href="#">@Developer</a> Fusce ac orci sit Amet velit ultrices condimentum. Integer imperdiet odio ac eros.
                </div>
                <div class="cleaner"></div>
			</div>
            <div class="cleaner"></div>
        </div>-->
    
    </div>
     <div id="left" style="margin-left: 601px;top: 10px; text-align: justify;">
        	<h1>Statistics</h1>
            <p><a  color="black" target="_parent"> Piperpep is an experimentally generated database of peptides having more than 1000 peptides including 965 biologically important peptides and 36 antimicrobial peptides from black pepper.
			Information generated on peptieds from label free proteomics with annotation are given along with the physiochemical properties on each peptides.
Piperpep has inbuilt BLAST Tool, Analysis Tool and MAP tool for identifying the similar peptides, analysis of peptide properties and mapping of the peptide.</a>
            <p><a target="_parent">This database is the first of its kind database and the only database resource on black pepper and is expected to cater to the needs of researchers working in balck pepper improvement programmes in the world and also the base for sequence annotation in black pepper.The Piperpep will be an informative database on peptides for other crops also</a>
            <div class="cleaner h30"></div>
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