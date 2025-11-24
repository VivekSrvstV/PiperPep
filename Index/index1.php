<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CrisprEdb</title>
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

<div id="wrapper">
	
    <div id="header">
        <div id="site_title">
            <h1><a href="" target="_parent">CrisprEdb</a></h1>
        </div> <!-- end of site_title -->
        
        <div id="menu">
            <ul>
                <li><a href="#" class="current"><span class="home"></span>Home</a></li>
                <li><a href="browse.php"><span class="portfolio"></span>Browse</a></li>
                <li><a href="#"><span class="projects"></span>Search</a></li>
                <li><a href="#"><span class="gallery"></span>Contact</a></li>
		<li><a href="#"><span class="gallery"></span>Team</a></li>
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
        <a href="http://www.freecsstemplates.in/" target="_parent"><img src="images/slideshow/01.jpg" alt="01" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit." /></a>
        <a href="http://www.freecsstemplates.in/" target="_parent"><img src="images/slideshow/02.jpg" alt="02" title="Nullam ante leo, consectetur eget adipiscing et." /></a>
        <a href="http://www.freecsstemplates.in/" target="_parent"><img src="images/slideshow/03.jpg" alt="03" title="Suspendisse sit amet enim elit. Curabitur tempor consequat." /></a>
        <a href="http://www.freecsstemplates.in/" target="_parent"><img src="images/slideshow/04.jpg" alt="04" title="Nulla faucibus luctus quam eget placerat." /></a>
        <a href="http://www.freecsstemplates.in/" target="_parent"><img src="images/slideshow/05.jpg" alt="05" title="Phasellus aliquet viverra posuere." /></a>
    </div> 
    
    <div id="middle">
    
    	<div class="col_w540 float_l v_divider">
        	<h1>Welcome to CrisprEdb</h1>
            <p><a href="" target="_parent">CrisprEdb</a> is a free css template for your personal or business websites. Credit goes to <a href="http://www.photovaco.com" target="_blank">Free Photos</a> for photos used in this template. Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow">XHTML</a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow">CSS</a>. Nam sit amet justo vel libero tincidunt dignissim. Cras magna velit, pellentesque mattis, faucibus vitae, feugiat vitae, sapien. </p>
            <p>Fusce ac orci sit amet velit ultrices condimentum. Integer imperdiet odio ac eros. Ut id massa. Nullam nunc. Vivamus sagittis varius lorem.Maecenas aliquam, ligula id egestas suscipit, nisi sapien dignissim nibh, ac vestibulum lorem urna in neque.</p>
            <div class="cleaner h30"></div>
            <a href="#" class="more float_r">Continue</a>
            <div class="cleaner"></div>
       <!-- </div>
       <div class="col_w340 float_r twitter_col">
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
    
        Copyright © 2014 <a href="http://www.imtech.res.in">Institute of Microbial Technology</a> | 
        <a href="" target="_parent">CSIR</a> by <a href="" target="_parent">Team</a>
    
    </div> <!-- end of footer -->
</div>
</body>
</html>
