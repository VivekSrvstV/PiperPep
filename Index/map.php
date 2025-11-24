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
            <h1><a href="" target="_parent">PiperDB</a></h1> </div>
<div id="menu">
            <ul>
                <li><a href="index.php" class="current"><span class="home"></span>Home</a></li>
                <li><a href="browse.php"><span class="portfolio"></span>Browse</a></li>
                <li><a href="search.php"><span class="projects"></span>Search</a></li>
		<li><a href="advance.php"><span class="projects"></span>Advanced Search</a></li>
                <li><a href="tools.php"><span class="gallery"></span>Tools</a></li>
                <li><a href="#"><span class="gallery"></span>Team</a></li>
            </ul>
        </div>
</div> 
</div>
<div id="wrapper">
<div id="middle">


<?php 
include 'connection.php';
$Peptide Sequence=$_POST['Peptide_Sequence']?$_POST['Peptide_Sequence']:$_GET['Peptide_Sequence'];
$x=0;
$Peptide Sequence=$x.$Peptide Sequence;

function preg_match_all_positions($pattern, $subject, &$count=null, $flags=0, $offset=0) {
 	 for ($count=0; preg_match($pattern, $subject, $match, $flags, $offset); $count++) {
 		   $positions[0][] = $pos = strpos($subject, $match[0], $offset);
 		   $positions[1][] = $len = strlen($match[0]);
   		   $offset = $pos+$len;
		 }
	  return $positions;
}
#$Peptide Sequence=str_replace("\r","",$Peptide Sequence);
#$Peptide Sequence=str_replace("\n","",$Peptide Sequence);
#$Peptide Sequence=str_replace("s","",$Peptide Sequence);


$sem=$Peptide Sequence;
if($sub=preg_match("/>(.+\n)/",$Peptide Sequence,$matches)){/*echo  "Resulting Peptide Sequence's for $matches[0]..";*/}
$Peptide Sequence=preg_replace("/$matches[0]/","",$Peptide Sequence);
$subt=strlen($sub);
//print4me($print4me,$matches);
$Peptide Sequence1=preg_replace("/\s|\r|\n/","",$Peptide Sequence);
$Peptide Sequence1=preg_replace("/T/","T",$Peptide Sequence);
$Peptide Sequence=$Peptide Sequence1;
   	function preg_index($number) {
           	$match_prefix = '$';$match_suffix = '';
        	  if ( ! empty($this->matches) ) {$match_prefix = '$' . $this->matches . '['; $match_suffix = ']';}
          	return "$match_prefix$number$match_suffix";
    	 }

if(!empty($_POST['Peptide Sequence']) && $_GET['eff_od']!='down' &&$_GET['eff_od']!='up' ){$var='all';if($_GET['by']=='gene'){$by='gene';}
if($_GET['by']=='eff'){$by='efficacy';}
#@@@@@ $query='select * from `virPeptide Sequencedb` where `efficacy level/percent` not like \'%*%\' and `sen_sequence` not like \'NA\' and`sen_sequence` not like \'\'  and `sen_sequence` not like \'%*%\' and `efficacy level/percent` not like \'%#%\'  order by `efficacy level/percent`+ 0 desc';
$query='select `Id`,`Sequence`,`Source`,`Target` from `avpdb` where `Inhibition` not like \'%*%\' and `Inhibition` not like \'NA\' and`Inhibition` not like \'\'  and `Inhibition` not like \'%*%\' and `Inhibition` not like \'%#%\'  order by `Inhibition`+ 0 desc';
}
 if($_GET['eff_od']=='up'){$var='up';
 if($_GET['by']=='gene'){$by='`Target Gene`';}
 if($_GET['by']=='eff'){$by='`efficacy level/percent` +0 ';}
	 $query='select `Id`,`Sequence`,`Source`,`Target` from `avpdb` where `Inhibition` not like \'%*%\' and `Inhibition` not like \'NA\' and`Inhibition` not like \'\'  and `Inhibition` not like \'%*%\' and `Inhibition` not like \'%#%\'  order by '.$by.' ASC';
	}
if($_GET['eff_od']=='down'){$var='down';
	 if($_GET['by']=='gene'){$by='`Target Gene`';}
	 if($_GET['by']=='eff'){$by='`efficacy level/percent` + 0';}
	 $query='select `Id`,`Sequence`,`Source`,`Target` from `avpdb` where `Inhibition` not like \'%*%\' and `Inhibition` not like \'NA\' and`Inhibition` not like \'\'  and `Inhibition` not like \'%*%\' and `Inhibition` not like \'%#%\'  order by '.$by.' desc';
	}
if(!empty($_POST['Peptide Sequence']) || $_GET['eff_od']=='up' || $_GET['eff_od']=='down'){
	echo "<center><font color=\"khaki\" size=\"4\"><a href=\"mp.php\">AVPdb Map</a></font></center>";echo "<center><font color=\"GREEN\" size=\"3\">The AVPdb peptides mapped on your sequence</font><br><br></center>";

  	echo "<table width=\"100%\" border=\"1px\" bordercolor=\"black\">
<tr bgcolor=\"#C8B560\"><td><font color=\"white\" size='3'>S.No</font></td><td><font color=\"white\" size='3'>AVPid</td>
<td><font color=\"white\" size='3'>Source</font></td><td><font color=\"white\" size='3'>Sequence</font></td><td><font color=\"white\" size='3'>Target</font></td><td><font color=\"white\" size='3'>Start Postion</font></td></tr>";$i=1;
        $RESULT = mysql_query($query) or die(mysql_error());
        $row1=0;
	while($row = mysql_fetch_array($RESULT)){#echo $row[1];
	  $row[1]=str_replace("5`-","",$row[1]); $row[1]=str_replace("-3`","",$row[1]);$row[1]=str_replace("\n","",$row[1]);$row[1]=str_replace("\r","",$row[1]);$row[1]=str_replace("-","",$row[1]);#$Peptide Sequence=str_replace("T",'u',$Peptide Sequence);
	 # $Peptide Sequence=str_replace("A","a",$Peptide Sequence);
	 # $Peptide Sequence=str_replace("C","c",$Peptide Sequence);
	 # $Peptide Sequence=str_replace("G","g",$Peptide Sequence);
		if(preg_match("/$row[1]/",$Peptide Sequence)){
		 $positive=preg_match_all_positions("/$row[1]/",$Peptide Sequence);
		 
		 $ll='';$row1++;
		$k=0;while($positive[0][$k]){
		$ll=$ll.$positive[0][$k++].',';
		
		}
		
		$ll=preg_replace("/,/","&nbsp&nbsp ",$ll);
		
		$pos1=strpos($Peptide Sequence,$row[1]);
		$pos=$pos1-$subt+1;
		echo "<tr><td>".$i++."</td>\t<td><a href=\"http://crdd.osdd.net/servers/avpdb/record.php?details=$row[0]\" >".$row[0]."</a></td>\t\t\t<td>$row[2]</td><td>".$row[1]."</font></td><td><a href=\"browse.php?by=$row[3]&TYPE=Target\" >".$row[3]."</a></td><td>$ll</td>";
		  }
	}
	echo "</table>";
	 if($row1==0){
	   print"<br><br><br><center><font color='brown' size='4'><b>No peptides Found for your sequence</b></font>";
	   print"<br><input type='button' onClick='history.go(-1)' value='Go Back'></center>";
	}
}

if(!isset($_POST['Peptide Sequence']) && $_GET['eff_od']!='up' && $_GET['eff_od']!='down'){
echo '<center>

<h2><font size="4"><b>PiperDB Map</b></font></h2><font color="GREEN" size="4">This tool helps you to map PiperDB peptides on your  peptide or protein</font>                                  
</a></center><form action="" method="post" ENCTYPE= "multipart/form-data">
<P><table><tr>
Enter sequence below in FASTA format 
<td>
<textarea name="Peptide Sequence" rows=6 cols=60>
</textarea></td><tr><td>
<BR>Example<br>
<pre>>xyz
NQGRHFCGGALIHARFVMTAASSFQGLQLLGFI
MANAGLQLLGFILAFLGWIGAIVSIGAIVSTAL
MAILGDTAWDFGSLGGVFTSIGKALHQVFGAIY
</pre>
</td></tr></table>

<input type="hidden" name="MAX_FILE_SIZE" value="100000" />
<input type="submit" value="Map Peptides"></form></center>

';}
?>
<div id="middle" style="height: 200px;">
    
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

        Copyright © 2015 <a hrf="http://www.spices.res.in">Indian Institute of Spices Reserch</a> |
        <a href="" target="_parent">IISR</a><a href="" target="_parent"></a>

    </div> <!-- end of footer -->


</body>
</html>
