
<?php
#session_start();
#include'include/head.php';
if(include'config.php'){}else{print "cud't load config.php";}

$start_rec = 0;
$rec_limit = 25;
if(isset($_POST['Protein name']))
$_1=$_POST['Protein name'];
else
$_1='';
if(isset($_POST['AON1'])){
$_2=$_POST['AON1'];$_21=$_2;
}else{
$_2='';$_21=$_2;
}
if(isset($_POST['Peptide Sequence'])){
$_3=$_POST['Peptide Sequence'];
}else{
$_3='';
}
if(isset($_POST['AON2'])){
$_4=$_POST['AON2'];$_41=$_4;
}else{
$_4='';$_41=$_4;
}
if(isset($_POST['Modification'])){
$_5=$_POST['Modification'];
}else{
$_5='';
}
if(isset($_GET['page'])){
$page_no = $_GET['page'];
}else{
$page_no = 1;
}
if(!isset($_GET['page'])){
$query_string = "";
if ($_POST) {
	  foreach ($_POST as $key => $value) {
	$kv[] = "$key='$value'";
	  }
	  $query_string = join(" AND ", $kv);

if($_1==''){$_1="'%%'";$_2="OR";}
else{$_1=$_1;
	if($_2==''){$_2="OR";}
	else{$_2=$_2;}
}
#echo $_1."  $_2";
if($_3==''){$_3="'%%'";$_4="OR";}
else{$_3=$_3;
	if($_4==''){$_4="OR";}
	else{$_4=$_4;}
}
#echo $_3."  $_4";
if($_5==''){$_5="'%%'";$_4="OR";}
else{$_5=$_5;
	if($_4==''){$_4="OR";}
	else{$_4=$_4;}
}
#echo "<br/><br/><br/><br/>".$_1." &nbsp&nbsp $_2 &nbsp&nbsp $_3 &nbsp&nbsp $_4  &nbsp&nbsp $_5  <br/><br/><br/><br/>";
#if(($_1='' && $_2!='' ||$_2='') && $_3!='' && $_4!='' && $_5!=''){}
#if($_1!='' && $_2!='' && $_3!='' && $_4!='' && $_5!=''){}
#if($_1!='' && $_2!='' && $_3!='' && $_4!='' && $_5!=''){}
#if($_1!='' && $_2!='' && $_3!='' && $_4!='' && $_5!=''){}
#if($_1!='' && $_2!='' && $_3!='' && $_4!='' && $_5!=''){}
#if($_1!='' && $_2='' && $_5!='')
	#if($_1!='' && $_2!='' && $_3!='' && $_4!='' && $_5!=''){

		$query_string = preg_replace("/ AND AON1='$_21'/"," $_2",$query_string);
		$query_string = preg_replace("/AND Protein name/"," Protein name",$query_string);
		$query_string = preg_replace("/ AND AON2='$_41'/"," $_4",$query_string);
		#if($query_string=preg_match("/target_gene=''/",$query_string)){$query_string = preg_replace("/$_4 target_gene=''/","",$query_string);}
		$query_string = preg_replace("/AND Peptide Sequence/"," Peptide Sequence",$query_string);
		#echo $query_string,"<br/>";
	#elseif($_1!='' && $_3!='' && $_5==''){	
		$query_string = preg_replace("/ AND AON1='$_21'/"," $_2",$query_string);
		$query_string = preg_replace("/AND Protein name/"," Protein name",$query_string);
	#	echo $query_string,"<br/>";



	  # }*/
	}
else {
  $query_string = $_SERVER['QUERY_STRING'];
}
#echo $query_string;
$sql = "select * from piperdb where $query_string";
$res = mysql_query($sql) or die(mysql_error());
$no_res = mysql_num_rows($res);
#print $sql;
#print $no_res;
$_SESSION['skl'] = "$sql";///////////////////////// Pagination..............Coding.....!!!!!!!
$_SESSION['start'] = 1;
$_SESSION['rec_limit'] = $rec_limit;
$total_page = $no_res/$rec_limit;
if(preg_match("/\.\d+/",$total_page)){
$total_page = preg_replace("/\.\d+/","",$total_page);
$total_page = $total_page+1;
#print $total_page."<br>";
}
$_SESSION['total_page'] = $total_page;
//print "$sql&nbsp;&nbsp;$rec_limit&nbsp;&nbsp;$no_res";
if($total_page > 1){
print"<a href='adsearch.php?page=1'>Next&nbsp;&nbsp;&nbsp;</a>";
}
}////////////////////////////////////////// Before Pagination ////////////////////////////////
else if(isset($_GET['page'])){
$sql = $_SESSION['skl'];
$total_page = $_SESSION['total_page'];
$rec_limit = $_SESSION['rec_limit'];
$page_no = $_GET['page'];
if(($page_no == 0) || !(isset($_GET['page']))){
$start_rec = $page_no*$rec_limit;
}
else{
$start_rec = $rec_limit*$page_no;
}
$pre_page = $page_no-1;
$page_no = $page_no+1;
if($page_no > 1){
print"<a href='adsearch.php?page=0'><b>Start</b></a>&nbsp;&nbsp;&nbsp;";
}
if($page_no > 1){
print"<a href='adsearch.php?page=$pre_page'><b>Previous</b></a>&nbsp;&nbsp;&nbsp;";
}
if($page_no < $total_page){
print"<a href='adsearch.php?page=$page_no'><b>Next</b></a>&nbsp;&nbsp;&nbsp;";
}
//print $sql."<br>$total_page<br>$rec_limit";
}
if($page_no < $total_page && $total_page > 1){
$last = $total_page-1;
print"<a href='adsearch.php?page=$last'><b>Last</b></a>";
}
#print $res;
$res = mysql_query($sql) or die(mysql_error());
$no_res = mysql_num_rows($res);
$total_res = mysql_query($sql) or die(mysql_error());
$total_records = mysql_num_rows($total_res);
$sql = $sql." limit $start_rec,$rec_limit";
$res = mysql_query($sql) or die(mysql_error());
$no_res = mysql_num_rows($res);

if($no_res == 0){
print"<br><br><br><center><font color='brown' size='4'><b>No Record Found in our database</b></font>";
print"<br><input type='button' onClick='history.go(-1)' value='Go Back'></center>";
}

else{
if(!isset($_GET['page'])){
$page_no = 1;
}
print"<center><b>Page - $page_no of $total_page</b></center><br>";
$headers = array('id' => 'PiperID','Protein name' => 'Protein name','ncbi_ac' => 'NCBI Accession','Origin' => 'origin','Peptide Ion' => 'peptide ion','Score' => 'score','Hits' => 'hits','Mass' => 'mass (%)','Modification' => 'modification','Map' => 'map');
$rec = $start_rec+1;
while($row = mysql_fetch_array($res)){
#print"<center>Page - $page_no of $total_page</center>";
print"<center><b>Record - $rec of $total_records</b></center><br>";
print"<table align='center' border='1' width='90%' bgcolor='#A9F5A9'>";
$f_no = mysql_num_fields($res);
#print $f_no."<br>";
for($j=0;$j<$f_no;$j++){
$f_name = mysql_field_name($res, $j);
$r = $row[$f_name];






 if(preg_match("/GC/",$headers[$f_name])){
   $g=substr_count($row[5], "G");
   $c=substr_count($row[5], "C");
   $gc=((($g+$c)/strlen($row[5]))*100);
   print "<tr><td width='20%' bgcolor='66CC99'><b>".$headers[$f_name]."</b></td><td bgcolor='CCFFCC'>".round($gc)."</td></tr>";}
 elseif(preg_match("/PubMed/",$headers[$f_name])){print "<tr><td width='20%' bgcolor='66CC99'><b>".$headers[$f_name]."</b></td><td bgcolor='CCFFCC'><a href=\"http://www.ncbi.nlm.nih.gov/pubmed/$row[15]\" target=\"_blank\">$row[15]</a></td></tr>";}
 elseif(preg_match("/Target Gene/",$headers[$f_name])){print "<tr><td width='20%' bgcolor='66CC99'><b>".$headers[$f_name]."</b></td><td bgcolor='CCFFCC'><a href=\"new-search.php?f=targen&val=$row[3]\" target=\"_blank\">$row[3]</a></td></tr>";}
 elseif(preg_match("/HIV Strain/",$headers[$f_name])){print "<tr><td width='20%' bgcolor='66CC99'><b>".$headers[$f_name]."</b></td><td bgcolor='CCFFCC'><a href=\"new-search.php?f=hivstr&val=$row[1]\" target=\"_blank\">$row[1]</a></td></tr>";}
 elseif(preg_match("/Cell type/",$headers[$f_name])){print "<tr><td width='20%' bgcolor='66CC99'><b>".$headers[$f_name]."</b></td><td bgcolor='CCFFCC'><a href=\"new-search.php?f=cltyp&val=$row[9]\" target=\"_blank\">$row[9]</a></td></tr>";}
 elseif(preg_match("/NCBI Accession/",$headers[$f_name])){print "<tr><td width='20%' bgcolor='66CC99'><b>".$headers[$f_name]."</b></td><td bgcolor='CCFFCC'><a href=\"http://www.ncbi.nlm.nih.gov/nuccore/$row[2]\" target=\"_blank\" >$row[2]</a></td></tr>";}
 elseif($headers[$f_name]!='Length of siRNA'){print "<tr><td width='20%' bgcolor='66CC99'><b>".$headers[$f_name]."</b></td><td bgcolor='CCFFCC'>$r</td></tr
>";}

 elseif($headers[$f_name]=='Length of siRNA'){
   $row[5]=trim($row[5]);
  print "<tr><td width='20%' bgcolor='66CC99'><b>".$headers[$f_name]."</b></td><td bgcolor='CCFFCC'>".(strlen($row[5]))."</td></tr>";
}













#print "<tr><td width='20%' bgcolor='66CC99'><b>".$headers[$f_name]."</b></td><td bgcolor='CCFFCC'>$r</td></tr>";
}
print"</table><br>";
$rec++;
}
}
#include 'include/footer.php';
?>
