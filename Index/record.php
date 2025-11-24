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


<div id="header_wrapper">	
    <div id="header">
        <div id="site_title">
            <h1><a href="" target="_parent">CrisprEdb</a></h1> </div>
<div id="menu">
            <ul>
                <li><a href="index.php" class="current"><span class="home"></span>Home</a></li>
                <li><a href="browse.php"><span class="portfolio"></span>Browse</a></li>
                <li><a href="search.php"><span class="projects"></span>Search</a></li>
		<li><a href="advance.php"><span class="projects"></span>Advanced Search</a></li>
                <li><a href="tools.php"><span class="gallery"></span>Tools</a></li>
                <li><a href="#"><span class="gallery"></span>Contact</a></li>
            </ul>
        </div>
</div> 
</div>

<?php
include"connection.php";



if(isset($_GET['details'])){ 
echo "<br/><center><font color=\"white\" size=\"4px\">".$_GET['details']."  details</font></center><br/>";
$aaa = "SELECT * FROM `piperdb` WHERE `PiperID` like '".$_GET['details']."'";



######## Download Data Coding START ###### 
$csv = "SELECT * FROM `piperdb` WHERE `PiperID` like '".$_GET['details']."'";
$sqx = "$csv";
$ran_no = mt_rand(500, 100000000);
$down_fi_name = "../../tmp/servers/crsiprge/data-$ran_no.csv";
$fh = fopen("$down_fi_name",'w');
$down_res = mysql_query($sqx) or die(mysql_error());
$down_f_no = mysql_num_fields($down_res);
for($k=0;$k<$down_f_no;$k++){
$down_f_name = mysql_field_name($down_res, $k);
fwrite($fh,"\"$down_f_name\"\t");
}
fwrite($fh,"\n");
while($row=mysql_fetch_array($down_res)){
for($k=0;$k<$down_f_no;$k++){
$down_f_name = mysql_field_name($down_res, $k);
$down_f_val = $row[$down_f_name];
fwrite($fh,"\"$down_f_val\"\t");
}
fwrite($fh,"\n");
}
#fclose($down_res);
print"<span align='right' style='background: #DDE026; text-color: white; height: 22px'>";
echo"<form action='download_data.php' method=post>";
echo"<input type=hidden name=id value='$down_fi_name'>";
echo"<input type=submit name=DOWNLOAD value='Download as CSV'>";
echo"</form>";
print"</span><br>";
######## Download Data Coding END ######



$get=mysql_query($aaa); 
while($row = mysql_fetch_row($get)){
  echo "<table id=\"example1\" class =\"tab\" border=\"1\" align=\"center\"  border width='80%' height='1%' name=\"tab\" STYLE=\"border-spacing: 0px;border-style: line ;
		border-color:black;
		border-collapse: collapse;
		background-color: white;\"><caption><b><i><FONT SIZE=2 COLOR='#800000' face='monotype corsiva'> ".$_POST['TYPE'].' '.$_POST['get_gene']."</i></b></caption>";
	 echo "";echo "<tr bgcolor=\"#0fa7ba\"><th><b></th><th></th></tr>";
	 ?>
		   <?php 
		       $pdf=($row[0]*100)/100;
	 if($row[0]!=""){echo "";echo "<tr><td align='left'><b><FONT SIZE='2px' COLOR='#FF6666'>PiperID</FONT></b></td><td><FONT  COLOR='black'>$row[0]</b></font></td></tr>";}	
	 if($row[1]!=""){echo "<tr><td align='left'><b><FONT SIZE='2px' COLOR='#FF6666'>Organism</b></FONT></td><td><FONT  COLOR='black'>$row[1]</b></td></tr>";}
$SEQUENCE=$row[1];
echo"<tr><td align='left'><b><FONT SIZE='2px' COLOR='#FF6666'>Gene/Locus</b></td><td><FONT  COLOR='black'>$row[2]</b></td></tr>";
echo "<tr><td align='left'><b><FONT SIZE='2px' COLOR='#FF6666'>Target</b></FONT></td><td><a href=\"browse.php?by=$row[3]&TYPE=Target\">$row[3]</b></a></td></tr>";
echo "<tr><td align='left'><b><FONT SIZE='2px' COLOR='#FF6666'>Target+Mutant</b></FONT></td><td>$row[7]</b></td></tr>";
echo "<tr><td align='left'><b><FONT SIZE='2px' COLOR='#FF6666'>Modification</b></FONT></td><td><FONT  COLOR='black'>$row[8]</b></td></tr>";


	 if($row[9]!=""){echo "<tr><td align='left'><b><FONT SIZE='2px' COLOR='#FF6666'>Location</b></FONT></td><td><FONT  COLOR='black'>$row[9]</b></td></tr>";}
	 	  if($row[10]!=""){echo"<tr><td align='left'><b><FONT SIZE='2px' COLOR='#FF6666' alignment='left'>Conc. (ng/&mu;l) </b></FONT></td><td><FONT  COLOR='black'>$row[10]</td></tr>";}

	 if($row[11]!=""){echo "<tr><td align='left'><b><FONT SIZE='2px' COLOR='#FF6666'>Cell line </b></FONT></th><td><FONT  COLOR='black'>$row[11]</b></td></tr>";}
          if($row[12]!=""){echo "<tr><td align='left'><b><FONT SIZE='2px' COLOR='#FF6666'>Method/Assay</b></FONT></th><td><FONT  COLOR='black'>".$row[12].'</td></tr>';}
	  if($row[13]!=""){echo "<tr><td align='left'><b><FONT SIZE='2px' COLOR='#FF6666'>Crispr efficiency</FONT></th><td><FONT  COLOR='black'>
$row[13]</a></b></td></tr>";} 
	  if($row[14]!=""){echo "<tr><td align='left'><b><FONT SIZE='2px' COLOR='#FF6666'>Efficiency with other methods</FONT></th><td><FONT  COLOR='black'>$row[14]</a></b></td></tr>";}
	  if($row[15]!=""){echo "<tr><td align='left'><b><FONT SIZE='2px' COLOR='#FF6666'>PRM/crRNA/Vector</FONT></th><td><FONT  COLOR='black'>$row[15]</b></td></tr>";}
	if($row[16]!=""){echo "<tr><td align='left'><b><FONT SIZE='2px' COLOR='#FF6666'>PRM-cas/vector</FONT></th><td><FONT  COLOR='black'>$row[16]</b></td></tr>";}
	if($row[17]!=""){echo "<tr><td align='left'><b><FONT SIZE='2px' COLOR='#FF6666'>Strand</FONT></th><td><FONT  COLOR='black'>$row[17]</b></td></tr>";}
	if($row[18]!=""){echo"<tr><td align='left'><b><FONT SIZE='2px' COLOR='#FF6666' alignment='left'>Gene Link </b></FONT></td><td><FONT  COLOR='black'><a href=http://www.ncbi.nlm.nih.gov/gene/$row[18]>$row[18]</a></td></tr>";}
	if($row[19]!=""){echo "<tr><td align='left'><b><FONT SIZE='2px' COLOR='#FF6666'>Offtarget</FONT></th><td><FONT  COLOR='black'>$row[19]</b></td></tr>";}


	 # echo "<tr><td align='left'><b><FONT SIZE='2px' COLOR='#FF6666'>Properties</FONT></th></b><td><FONT  COLOR='black'><a href=\"analyze.php?SEQ=$row[1]\">View</br></td></tr>";
#echo "<tr><td align='left'><b><FONT SIZE='2px' COLOR='#FF6666'>Structure</FONT></th></b><td><FONT  COLOR='black'><a href=\"jmol.php?id=$row[0]\">Jmol</br></td></tr>";
	  
	  
	  
	  
	  if($row[20]!=""){echo "<tr><td align='left'><b><FONT SIZE='2px' COLOR='#FF6666'>Donor name</FONT></th></b><td><FONT  COLOR='black'>".$row[20]."</br></td></tr>";}
  if($row[21]!=""){echo"<tr><td align='left'><b><FONT SIZE='2px' COLOR='#FF6666'>Donor sequence</b></td><td><FONT  COLOR='black'>".$row[21]."</br></td></tr>";}



	  #if($row[9]!=""){echo"<tr><td align='left'><b><FONT SIZE='2px' COLOR='#FF6666'>P</b></td><td><FONT  COLOR='black'>$row[9]<br></td></tr>";}
          if($row[22]!=""){echo"<tr><td align='left'><b><FONT SIZE='2px' COLOR='#FF6666'>Comments</b></td><td><FONT  COLOR='black'>".$row[22]."</a></td></tr>";}
	  if($row[23]!=""){echo"<tr><td align='left'><b><FONT SIZE='2px' COLOR='#FF6666'>Pubmed</b></td>";}
	  
	  if (preg_match("/US/", "$row[23]")) {

echo"<td><a href=\"http://www.patentlens.net/patentlens/patents.html?patnums=".$row[23]."\" rel=".$row[0].">".$row[23]."</a></td></tr>";}

else {echo"<td><a href=\"http://www.ncbi.nlm.nih.gov/pubmed/".$row[23]."\" rel=".$row[0].">".$row[23]."</td></tr>";}
	
	 
          
	  #if($row[18]!=""){echo"<tr><td align='left'><b><FONT SIZE='2px' COLOR='#FF6666'>Incubation Time (Hours): </b></td><td><FONT  COLOR='black'>".$row[18]."</b>".'</a></td></tr>';}
	 # if($row[14]!=""){echo"<tr><td align='left'><b><FONT SIZE='2px' COLOR='#FF6666'>Nomenclature: </b></td><td><FONT  COLOR='black'>".$row[14]."</b>".'</a></td></tr>';}
	  #if($row[13]!=""){echo"<tr><td align='left'><b><FONT SIZE='2px' COLOR='#FF6666'>siRNA design algorithm used: </b></td><td><FONT  COLOR='black'>".$row[13]."</b>".'</a></td></tr>';}
#	  if($row[19]!=""){echo"<tr><td align='left'><b><FONT SIZE='2px' COLOR='#FF6666'>GRAPH:</b></th><td><FONT  COLOR='#151B54'><img src=\"./images/".$row[19].'" width="100%" hight="100%"></td></tr>';}
	  #if($row[20]!=""){echo"<tr><td align='left'><b><FONT SIZE='2px' COLOR='#FF6666'>PubMed:</b></td><td><FONT  COLOR='black'>"."<a href=\"http://www.ncbi.nlm.nih.gov/pubmed/".$row[20]."\">".$row[20].'</a></b></td></tr>';}
#	  if($row[21]!=""){echo"<tr><td align='left'><b><FONT SIZE='2px' COLOR='#FF6666'>Refer: </b></td><td><FONT  COLOR='black'>".$row[21].'</b></td></tr>';}	  
	  #if($row[22]!=""){echo"<tr><td align='left'><b><FONT SIZE='2px' COLOR='#FF6666'>Target Object (mRNA,Protein,etc): </b></td><td><FONT  COLOR='black'>".$row[22].'</b></td></tr>';}
	  #if($row[21]!=""){echo"<tr><td align='left'><b><FONT SIZE='2px' COLOR='#FF6666'>Gene Expression: </b></td><td><FONT  COLOR='black'>".$row[21].'</b></td></tr>';}
	  #if($row[23]!=""){echo"<tr><td align='left'><b><FONT SIZE='2px' COLOR='#FF6666'>Silencing Efficacy :</b></td><td><FONT  COLOR='black'>".$row[23].'</td></tr>';}
	  #if($row[24]!=""){echo"<tr><td align='left'><b><FONT SIZE='2px' COLOR='#FF6666'>Qualitative Efficacy:</b></td><td><FONT  COLOR='black'>".$row[24].'</td></tr>';}
	  #if(file_exists("./structure/$row[0].png")){	  echo"<tr><td align='left'><b><FONT SIZE='2px' COLOR='#FF6666'>Structure:</b></td><td><FONT  COLOR='black'>"."<img src=\"./structure/$row[0].png\" height=\"500\" width=\"400\">".'</td></tr>';}

          #if(file_exists("./images/virus/$row[0].jpeg")){       echo"<tr><td align='left'><b><FONT SIZE='2px' COLOR='#FF6666'>siRNA sequence matching with $row[5] reference genome:</b></td><td><FONT  COLOR='black'>"."<img src=\"./images/virus/$row[0].jpeg\" BORDER=0 height=\"400\" width=\"400\">".'</td></tr>';}

	  if($row[26]!=""){echo"<tr><td align='left'><b><FONT SIZE='2px' COLOR='#FF6666'>Virus Load % inhibition:</b></td><td><FONT  COLOR='black'>".$row[26].'</td></tr>';}
	  if($row[27]!=""){echo"<tr><td align='left'><b><FONT SIZE='2px' COLOR='#FF6666'>Virus Load Method:</b></td><td><FONT  COLOR='black'>".$row[27].'</td></tr>';}
	  if($row[28]!=""){echo"<tr><td align='left'><b><FONT SIZE='2px' COLOR='#FF6666'>Cell Copies % reduction:</b></td><td><FONT  COLOR='black'>".$row[28].'</td></tr>';}
	  if($row[29]!=""){echo"<tr><td align='left'><b><FONT SIZE='2px' COLOR='#FF6666'>Cell Copies method:</b></td><td><FONT  COLOR='black'>".$row[29].'</td></tr>';}
	  if($row[30]!=""){echo"<tr><td align='left'><b><FONT SIZE='2px' COLOR='#FF6666'>Animal Survival:</b></td><td><FONT  COLOR='black'>".$row[30].'</td></tr>';}
	  if($row[31]!=""){echo"<tr><td align='left'><b><FONT SIZE='2px' COLOR='#FF6666'>Animal Survival Method:</b></td><td><FONT  COLOR='black'>".$row[31].'</td></tr>';}
	  if($row[32]!=""){echo"<tr><td align='left'><b><FONT SIZE='2px' COLOR='#FF6666'>Referance:</b></td><td><FONT  COLOR='black'>".$row[32].'</td></tr>';}
	  if($row[33]!=""){echo"<tr><td align='left'><b><FONT SIZE='2px' COLOR='#FF6666'>Target mRNA1:</b></td><td><FONT  COLOR='black'>".$row[33].'</td></tr>';}
	  if($row[34]!=""){echo"<tr><td align='left'><b><FONT SIZE='2px' COLOR='#FF6666'>mRNA1 % inhibition:</b></td><td><FONT  COLOR='black'>".$row[34].'</td></tr>';}
	  if($row[35]!=""){echo"<tr><td align='left'><b><FONT SIZE='2px' COLOR='#FF6666'>mRNA1 Detection Method:</b></td><td><FONT  COLOR='black'>".$row[35].'</td></tr>';}
	  if($row[36]!=""){echo"<tr><td align='left'><b><FONT SIZE='2px' COLOR='#FF6666'>Target mRNA2:</b></td><td><FONT  COLOR='black'>".$row[36].'</td></tr>';}
	  if($row[37]!=""){echo"<tr><td align='left'><b><FONT SIZE='2px' COLOR='#FF6666'>mRNA2 % inhibition :</b></td><td><FONT  COLOR='black'>".$row[37].'</td></tr>';}
	  if($row[38]!=""){echo"<tr><td align='left'><b><FONT SIZE='2px' COLOR='#FF6666'>mRNA2 Detection Method:</b></td><td><FONT  COLOR='black'>".$row[38].'</td></tr>';}
	  if($row[39]!=""){echo"<tr><td align='left'><b><FONT SIZE='2px' COLOR='#FF6666'>RNA % inhibition:</b></td><td><FONT  COLOR='black'>".$row[39].'</td></tr>';}
	  if($row[40]!=""){echo"<tr><td align='left'><b><FONT SIZE='2px' COLOR='#FF6666'>RNA Detection method:</b></td><td><FONT  COLOR='black'>".$row[40].'</td></tr>';}
	  if($row[41]!=""){echo"<tr><td align='left'><b><FONT SIZE='2px' COLOR='#FF6666'>Protein1:</b></td><td><FONT  COLOR='black'>".$row[41].'</td></tr>';}
	  if($row[42]!=""){echo"<tr><td align='left'><b><FONT SIZE='2px' COLOR='#FF6666'>Protein1 % inhibition:</b></td><td><FONT  COLOR='black'>".$row[42].'</td></tr>';}
	  if($row[43]!=""){echo"<tr><td align='left'><b><FONT SIZE='2px' COLOR='#FF6666'>Protein1 Detection Method:</b></td><td><FONT  COLOR='black'>".$row[43].'</td></tr>';}
	  if($row[44]!=""){echo"<tr><td align='left'><b><FONT SIZE='2px' COLOR='#FF6666'>Protein2:</b></td><td><FONT  COLOR='black'>".$row[44].'</td></tr>';}
	  if($row[45]!=""){echo"<tr><td align='left'><b><FONT SIZE='2px' COLOR='#FF6666'>Protein2 % inhibition :</b></td><td><FONT  COLOR='black'>".$row[45].'</td></tr>';}
	  if($row[46]!=""){echo"<tr><td align='left'><b><FONT SIZE='2px' COLOR='#FF6666'>Protein2 Detection Method:</b></td><td><FONT  COLOR='black'>".$row[46].'</td></tr>';}
	  if($row[47]!=""){echo"<tr><td align='left'><b><FONT SIZE='2px' COLOR='#FF6666'>Protein3:</b></td><td><FONT  COLOR='black'>".$row[47].'</td></tr>';}
	  if($row[48]!=""){echo"<tr><td align='left'><b><FONT SIZE='2px' COLOR='#FF6666'>Protein3 % inhibition :</b></td><td><FONT  COLOR='black'>".$row[48].'</td></tr>';}
	  if($row[49]!=""){echo"<tr><td align='left'><b><FONT SIZE='2px' COLOR='#FF6666'>Protein3 Detection Method:</b></td><td><FONT  COLOR='black'>".$row[49].'</td></tr>';}
#	  if($row[50]!=""){echo"<tr><td align='left'><b><FONT SIZE='2px' COLOR='#FF6666'>Against genome:</b></td><td><FONT  COLOR='black'>".$row[50].'</td></tr>';}

	  
#	  if($row[60]!=""){echo"<tr><td align='left'><b><FONT SIZE='2px' COLOR='#FF6666'>Referance:</b></td><td><FONT  COLOR='black'>".$row[60].'</td></tr>';} 
} echo "</table>";
}echo "</p>";

/**echo "<font color=\"white\">.</font><br/><font color=\"white\">.</font><br/><font color=\"white\">.</font><br/><font color=\"white\">.</font><br/><font color=\"white\">.</font><br/><font color=\"white\">.</font><br/><font color=\"white\">.</font><br/><font color=\"white\">.</font><br/><font color=\"white\">.</font><br/><font color=\"white\">.</font><br/><font color=\"white\">.</font><br/><br/><font color=\"white\">.</font><br/><br/><font color=\"white\">.</font><br/><br/><font color=\"white\">.</font><br/>"; **/

#$id=$_GET['id'];
?>

<div id="middle" style="height: 150px;">
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



<div id="footer_wrapper">
     <div id="footer">

        Copyright © 2014 <a hrf="http://www.imtech.res.in">Institute of Microbial Technology</a> |
        <a href="" target="_parent">CSIR</a> by <a href="" target="_parent">Team</a>

    </div> <!-- end of footer -->


</body>
</html>

