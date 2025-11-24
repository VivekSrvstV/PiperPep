
<?php
$not_ok=file("NOT_ok_113.txt");
$warning=file("Warning_101.txt");
// 		echo "<p style=\"text-align:left\">\"#\" Seed based siRNA <a href=\"http://www.dharmacon.com/seedlocator/seedlocatortemplate.aspx\">seed locator </a> tool for offtarget prediction </p> ";
echo "<table class =\"tab\" border=\"1\" width=\"100%\"  height='1%' name=\"tab\" STYLE=\"border-spacing: 0px;border-style: line ;
		border-color:pink; font-size:12px;
		border-collapse: collapse;
		background-color: white;\">

";


//<caption><b><i><FONT SIZE=2px COLOR='#800000' face='monotype corsiva'> ".$_POST['TYPE'].' '.$_POST['get_gene']."</i></FONT></b></caption>";
//echo $pubmed_res[-4]."<br/>";
		echo "";
$font='<font size=3px>';
if($_GET['how']=='up'){$how='down';}else{$how='up';}

echo "<center><tr bgcolor=\"#cdcdcd\"><th>AVPid</th><th>Sequence</th><th>Length</th><th>Virus</th><th>Cell line</th><th>Inhibition<br>/IC50</th><th>Unit</th><th>Target</th><th>Assay</th><th>Reference</th></tr></font></center>";
while($row = mysql_fetch_array($result)){
  $HUMAN="";
 #$row[1]=preg_replace("/T/","T",$row[1]);

 #foreach ($check_off as $c_off){if(preg_match('/significant/',$c_off)){
     #$HUMAN="<a href=\"offtarget/$row[0].html\"rel=".$row[0]."off>Blast</a>";

#}


#}
$refsub="siRNA sequence \"<a href>$row[1]</a>\" alignment with \"<a href>$row[5]</a>\" virus reference Genome sequences";
if(file_exists("./images/virus/$row[0].jpeg")){
  $family_con="Conservation of \"<a href>$row[1]</a>\" in <a>$row[5]</a>\"<br/> Virus reference Genome sequences<img src=\"images/virus/$row[0].jpeg\" width=250 height=200>";}
else{$family_con='Reference sequneces are not available';}
$pubmed_res=file('pubmed.txt');
 $var4=$row[0];
if(in_array("$row[0]\n",$not_ok)){$sss_color="red1.jpeg";}
elseif(in_array("$row[0]\n",$warning)){$sss_color="blue1.jpeg";}
else{$sss_color="green1.jpeg";}

foreach ($pubmed_res as $publine){
  trim($publine);
  unset($file_ex1[1]);unset($fruits[1]);unset($fruits[1]);unset($fruits[1]);
$file_ex1=explode("\t",$publine);
if($row[20]==$file_ex1[0]){
$var1="Pubmed:<a href>$row[20]</a> <br/>Article:<a href=''>$file_ex1[1]</a><br/>Authors:<a>$file_ex1[2]</a><br/>Journal:<a>$file_ex1[3]</a><br/>Entrez:<a>$file_ex1[5]</a><br/>";}
}
if(!empty($row[4])){$addgc="<br/>GC Content:<a>$row[4] %</a>";}else{$addgc='';}
if(!empty($row[17])){$addtr="Transfection Reagent:<a>$row[17] </a>";}else{$addtr='';}
if(!empty($row[18])){$addih="<br/>Incubation Time (Hours):<a>$row[18] </a>";}else{$addih='';}
if(file_exists("structure/$row[0].png1")){$addstr='<img src="structure/'.$row[0].'.png" width=220px height=200px>';}else{}


if(!empty($row[12])){$addacc="<br/>GenBank Acc: <a>$row[12] </a>";}else{$addacc='';}
if(!empty($row[3])){$addlen="<br/>Length: <a>$row[3] </a>";}else{$addlen='';}
if(!empty($row[7])){$addstrain="<br/>Strain of Virus: <a>$row[7] </a>";}else{$addstrain='';}
if(!empty($row[10])){$addsp="<br/>Starting position: <a>$row[10] </a>";}else{$addsp='';}
if(!empty($row[17])){$addta="<br/>Transfection Reagent: <a>$row[17] </a>";}else{$addta='';}


$browse_record="Browse \"<a href>$row[0] </a>\" record $addlen $addgc $addsp $addstrain $addacc $addta $addih<br/>";

# $browse_record="Browse \"<a href>$row[0] </a>\" record<br/>$addgc<br/>$addih<br/>$addstr<br/>";
 $browse_acc="See <a href>$row[12]</a> at Genbank";
 $browse_vir="Browse all the records for \"<a href>$row[5]</a>\" virus";
 $offtar="Offtargets for \"<a href>$row[1]</a>\" siRNA in  Human  Genome sequences";
// $refsub="Conservation of \"<a href>$row[1]</a>\" in \"<a href>$row[5]</a>\" virus reference Genome sequences";
 if(preg_match("/<a/",$HUMAN)){$HUMAN=$HUMAN;}else{$HUMAN='<font color="#A9E2F3"> Blast</font>';}
 echo "<tr ><td>$font<a href=\"record.php?details=".$row[0]."\"rel=".$row[0]."0>".$row[0]."</a></td><td style=word-break:break-all;>".$row[1]."</td><td>$row[2]</a></td><td><center>".$row[4]."</center></td><td><center>".$row[8]."</center></td><td><center>".$row[9]."</center></td><td><center>$row[10]</center></td><td><a href=\"browse.php?by=$row[11]&TYPE=Target\" rel=".$row[0]."5><center>".$row[11]."</a></center><td><center>".$row[12]."</center></td></a></td>";
 
 
 
if (preg_match("/US/", "$row[13]")) {

echo"<td><center><a href=\"http://www.patentlens.net/patentlens/patents.html?patnums=".$row[13]."\" rel=".$row[0].">".$row[13]."</center></a></td>";}

else {echo"<td><center><a href=\"http://www.ncbi.nlm.nih.gov/pubmed/".$row[13]."\" rel=".$row[0].">".$row[13]."</center></td>";}





#<td><center>$HUMAN <a href=\"siRNAspecificity.php?ID=$row[0]\"><img src=\"images/$sss_color\"> </a><a href=\"siRNAseed.php?ID=$row[0]\">SL<a></center></td><td><center><a href=\"blast.php?SEQUENCE=$row[1]&VIRUS=$row[5]&id=$row[0]\" rel=".$row[0]."1>refseqs</a></center></td><td>&nbsp&nbsp&nbsp&nbsp&nbsp<a href=\"conserve_stats.php?CON=virus&CID=$row[0]\"rel=".$row[0].'fam><img src="images/virus/small/'.$row[0].'.jpeg"'.'></a></td>';





#echo "<div id=\"$row[0]1\" class=\"balloonstyle\" style=\"width: 300px; background-color: #D0F5A9\">$refsub</div>";
#echo "<div id=\"$row[0]fam\" class=\"balloonstyle\" style=\"width: 300px; background-color: #D0F5A9\">$family_con</div>";
#echo "<div id=\"$row[0]5\" class=\"balloonstyle\" style=\"width: 300px; background-color: #D0F5A9\">$browse_vir</div>";
#echo "<div id=\"$row[0]0\" class=\"balloonstyle\" style=\"width: 240px; background-color: #D0F5A9\">$browse_record</div>";
#echo "<div id=\"$row[0]off\" class=\"balloonstyle\" style=\"width: 260px; background-color: #D0F5A9\">$offtar</div>";

#echo "<div id=\"$row[0]acc\" class=\"balloonstyle\" style=\"width: 160px; background-color: #D0F5A9\">$browse_acc</div>";
#echo "<div id=\"$row[0]\" class=\"balloonstyle\" style=\"width: 550px; background-color: #D0F5A9\">$var1</div>";
echo "</tr>";
}

?>
