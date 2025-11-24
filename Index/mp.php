<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PiperDb</title>
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
    </div>
<?php 
include 'connection.php';
$sirna=$_POST['sirna']?$_POST['sirna']:$_GET['sirna'];
function preg_match_all_positions($pattern, $subject, &$count=null, $flags=0, $offset=0) {
 	 for ($count=0; preg_match($pattern, $subject, $match, $flags, $offset); $count++) {
 		   $positions[0][] = $pos = strpos($subject, $match[0], $offset);
 		   $positions[1][] = $len = strlen($match[0]);
   		   $offset = $pos+$len;
		 }
	  return $positions;
}
$sirna=str_replace("\r","",$sirna);
$sirna=str_replace("\n","",$sirna);
$sirna=str_replace("s","",$sirna);


$sem=$sirna;
if($sub=preg_match("/>(.+\n)/",$sirna,$matches)){/*echo  "Resulting siRNA's for $matches[0]..";*/}
$sirna=preg_replace("/$matches[0]/","",$sirna);
$subt=strlen($sub);
//print4me($print4me,$matches);
$sirna1=preg_replace("/\s|\r|\n/","",$sirna);
$sirna1=preg_replace("/T/","T",$sirna);
$sirna=$sirna1;
   	function preg_index($number) {
           	$match_prefix = '$';$match_suffix = '';
        	  if ( ! empty($this->matches) ) {$match_prefix = '$' . $this->matches . '['; $match_suffix = ']';}
          	return "$match_prefix$number$match_suffix";
    	 }

if(!empty($_POST['sirna']) && $_GET['eff_od']!='down' &&$_GET['eff_od']!='up' ){$var='all';if($_GET['by']=='gene'){$by='gene';}
if($_GET['by']=='eff'){$by='efficacy';}
#@@@@@ $query='select * from `virsirnadb` where `efficacy level/percent` not like \'%*%\' and `sen_sequence` not like \'NA\' and`sen_sequence` not like \'\'  and `sen_sequence` not like \'%*%\' and `efficacy level/percent` not like \'%#%\'  order by `efficacy level/percent`+ 0 desc';
$query='select `PiperID`,`SEQUENCE`,`Ion`,`Score`,`Hits`,`Mass`,`Modification`,`Protein Name`,`Origin`,`Accession` from `piperdb` where `Score` not like \'%*%\' and `Score` not like \'NA\' and`Score` not like \'\'  and `Score` not like \'%*%\' and `Score` not like \'%#%\'  order by `Score`+ 0 desc';
}
 if($_GET['eff_od']=='up'){$var='up';
 if($_GET['by']=='gene'){$by='`Target Gene`';}
 if($_GET['by']=='eff'){$by='`efficacy level/percent` +0 ';}
	 $query='select `PiperID`,`SEQUENCE`,`Ion`,`Score`,`Hits`,`Mass`,`Modification`,`Protein Name`,`Origin`,`Accession` from `piperdb` where `Score` not like \'%*%\' and `Score` not like \'NA\' and`Score` not like \'\'  and `Score` not like \'%*%\' and `Score` not like \'%#%\'  order by '.$by.' ASC';
	}
if($_GET['eff_od']=='down'){$var='down';
	 if($_GET['by']=='gene'){$by='`Target Gene`';}
	 if($_GET['by']=='eff'){$by='`efficacy level/percent` + 0';}
	 $query='select `PiperID`,`SEQUENCE`,`Ion`,`Score`,`Hits`,`Mass`,`Modification`,`Protein Name`,`Origin`,`Accession` from `piperdb` where `Score` not like \'%*%\' and `Score` not like \'NA\' and`Score` not like \'\'  and `Score` not like \'%*%\' and `Score` not like \'%#%\'  order by '.$by.' desc';
	}
if(!empty($_POST['sirna']) || $_GET['eff_od']=='up' || $_GET['eff_od']=='down'){
	echo "<center><font color=\"RED\" size=\"4\"><a href=\"siRNAmap.php\"> PiperPep Map</a></font></center>";echo "<center><font color=\"GREEN\" size=\"3\">The PiperPep peptides mapped on your sequence</font></center>";

  	echo "<table width=\"100%\" border=\"1px\" bordercolor=\"black\">
<tr bgcolor=\"#209D9D\"><td><font color=\"white\" size='3'>PiperID</td>
<td><font color=\"white\" size='3'>SEQUENCE</font></td><td><font color=\"white\" size='3'>Ion</font></td><td><font color=\"white\" size='3'>Score</font></td><td><font color=\"white\" size='3'>Hits</font></td><td><font color=\"white\" size='3'>Mass</font></td><td><font color=\"white\" size='3'>Modification</font></td><td><font color=\"white\" size='3'>Protein Name</font></td><td><font color=\"white\" size='3'>Origin</font></td><td><font color=\"white\" size='3'>Accession</font></td></tr>";$i=1;
        $RESULT = mysql_query($query) or die(mysql_error());
        $row1=0;
	while($row = mysql_fetch_array($RESULT)){#echo $row[1];
	  $row[1]=str_replace("5`-","",$row[1]); $row[1]=str_replace("-3`","",$row[1]);$row[1]=str_replace("\n","",$row[1]);$row[1]=str_replace("\r","",$row[1]);$row[1]=str_replace("-","",$row[1]);#$sirna=str_replace("T",'u',$sirna);
	 # $sirna=str_replace("A","a",$sirna);
	 # $sirna=str_replace("C","c",$sirna);
	 # $sirna=str_replace("G","g",$sirna);
		if(preg_match("~$row[1]~i",$sirna)){
		 $positive=preg_match_all_positions("~$row[1]~i",$sirna);
		 $ll='';$row1++;
		$k=0;while($positive[0][$k]){
		$ll=$ll.$positive[0][$k++].',';
		}
		$ll=preg_replace("/,/","&nbsp&nbsp ",$ll);
		$pos1=strpos($sirna,$row[1]);
		$pos=$pos1-$subt+1;
		echo "<tr><td><a href=\"record.php?details=$row[0]\" >".$row[0]."</a></td>\t<td><a href=\"record.php?details=$row[0]\" >".$row[1]."</a></td>\t\t\t<td>".$row[2]."</td><td><font color=\"brown\">".$row[3]."</font></td><td>".$row[4]."</font></td><td>".$row[5]."</font></td><td>".$row[6]."</font></td><td>".$row[7]."</font></td><td>".$row[8]."</font></td><td>".$row[9]."</td><td>".$l0."</td>";
		  }
	}
	echo "</table>";
	 if($row1==0){
	   print"<br><br><br><center><font color='brown' size='4'><b>No peptides Found for your sequence</b></font>";
	   print"<br><input type='button' onClick='history.go(-1)' value='Go Back'></center>";
	}
}

if(!isset($_POST['sirna']) && $_GET['eff_od']!='up' && $_GET['eff_od']!='down'){
echo '<br/><center><font color="RED" size="4">&nbsp&nbsp<a href=""><b>PiperPep Map</b></font></center><center><font color="GREEN" size="4">This tool helps you to map PiperPep peptides on your  peptide or protein</font>                                  
</a></center><form action="" method="post" ENCTYPE= "multipart/form-data">
<P><table><tr>
Enter sequence below in FASTA format 
<td>
<textarea name="sirna" rows=6 cols=60>
</textarea></td><tr><td>
<BR>Example<br>
<pre>>AGGAVPYSDMTPLQAAVGVVQKGLRPGIPLNCPLPLAELMEACWAGNPVQRPSFR 
</pre>
</td></tr></table>

<input type="hidden" name="MAX_FILE_SIZE" value="100000" />
<input type="submit" value="Map Peptides"></form>

';}
 #include'foot.php';?>
 <div id="footer_wrapper">
     <div id="footer">

        Copyright © 2015 <a hrf="http://www.spices.res.in">Indian institute of Spice reserch</a> |
        <a href="" target="_parent">IISR</a> <a href="" target="_parent"></a>

    </div> <!-- end of footer -->


</body>
</html>
