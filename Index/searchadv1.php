<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.:org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Keyword search Page of CPPsite  Database of cell penetrating peptides</title>
<meta name="description" content="A comprehensive database of cell penetrating peptides">
<meta name="keywords" content="tumor, cancer, home page, database, peptides, imtech, chandigarh">

<?php include("head.php"); ?>

   
<?php 
require_once("av-c.php");

$key = $_REQUEST['txt'];
$seq = $_REQUEST['Id'];
$chr = $_REQUEST['Sequence'];
$ori = $_REQUEST['Nomenclature'];
$fml = $_REQUEST['Abbreviation'];
$ntr = $_REQUEST['Length'];
$nterm = $_REQUEST['Virus'];
$ctrem = $_REQUEST['Family'];
$sub = $_REQUEST['Source'];
$eff = $_REQUEST['Cell_Line'];
$mech = $_REQUEST['Inhibition'];
$line = $_REQUEST['Unit'];
$ptn = $_REQUEST['Target'];
$nam = $_REQUEST['Assay'];
$nf = $_REQUEST['Accession'];


#ECHO "$key\t$seq";



$seq1 = $_REQUEST['Id1'];
$chr1= $_REQUEST['Sequence1'];
$ori1 = $_REQUEST['Nomenclature1'];
$fml1 = $_REQUEST['Abbreviation1'];
$ntr1 = $_REQUEST['Length1'];
$nterm1 = $_REQUEST['Virus1'];
$ctrem1 = $_REQUEST['Family1'];
$sub1 = $_REQUEST['Source1'];
$eff1 = $_REQUEST['Cell_Line1'];
$mech1 = $_REQUEST['Inhibition1'];
$line1 = $_REQUEST['Unit1'];
$ptn1 = $_REQUEST['Target1'];
$nam1 = $_REQUEST['Assay1'];
$nf1 = $_REQUEST['Accession1'];

#ECHO "$seq1\t$chr1";




$key = trim($key);

if ($seq=='Id') $where.=" OR Id LIKE '%$key%' ";
if ($chr=='Sequence') $where.=" OR Sequence LIKE '%$key%' ";
if ($ori=='Nomenclature') $where.=" OR Nomenclature LIKE '%$key%' ";
if ($fml=='Abbreviation') $where.=" OR Abbreviation LIKE '%$key%' ";
if ($ntr=='Length') $where.=" OR Length LIKE '%$key%' ";
if ($nterm=='Virus') $where.=" OR Virus LIKE '%$key%' ";
if ($cterm=='Family') $where.=" OR Family LIKE '%$key%' ";
if ($sub=='Source') $where.=" OR Source LIKE '%$key%' ";
if ($eff=='Cell_Line') $where.=" OR Cell_Line LIKE '%$key%' ";
if ($mech=='Inhibition') $where.=" OR Inhibition LIKE '%$key%' ";
if ($line=='Unit') $where.=" OR Unit LIKE '%$key%' ";
if ($ptn=='Target') $where.=" OR Target LIKE '%$key%' ";
if ($nam=='Assay') $where.=" OR Assay LIKE '%$key%' ";
if ($nf=='Accession') $where.=" OR Accession LIKE '%$key%' ";


#ECHO "$key";




$sqla ="SELECT DISTINCT `Id` FROM `avpdb` WHERE `Id` LIKE '%$key%' "; 
#echo "$sqla";  die;
		$querya = mysql_query($sqla); 
		$zi=0; $ida = "";
		while($row=mysql_fetch_array($querya))
		{
			$result[$zi]=$row[Id]; 
			$ida[$zi]=$result[$zi];
			$zi++;
		}
	/**	$ran= rand(100, 10000);
		$dir = "/usr1/webserver/cgidocs/servers/avpdb/2/key1$ran/";
		exec("mkdir $dir");
		exec("chmod 777 $dir");
		$fh=fopen($dir."key","a+");    **/

	
			
			#fwrite($fh, "<th><a href='#' title='Click Header to Sort'>ID</a></th>");
			#fwrite($fh, "<th><a href='#' title='Click Header to Sort'>PMID</a></th>");
			
			
	if ($seq1=='Id1')echo "<th><a href='#' title='Click Header to Sort'>Sequence</a></th>";
	if ($chr1=='Sequence1')echo "<th><a href='#' title='Click Header to Sort'>Chirality</a></th>";
	if ($ori1=='Nomenclature1')echo "<th><a href='#' title='Click Header to Sort'>Origin</a></th>";
	if ($fml1=='Abbreviation1')echo "<th><a href='#' title='Click Header to Sort'>Family</a></th>";
	if ($ntr1=='Length1')echo "<th><a href='#' title='Click Header to Sort'>Nature</a></th>";
	if ($nterm1=='Virus1')echo "<th><a href='#' title='Click Header to Sort'>N-teminal modification</a></th>";
	if ($cterm1=='Family1')echo "<th><a href='#' title='Click Header to Sort'>C-teminal modification</a></th>";
	if ($sub1=='Source1')echo "<th><a href='#' title='Click Header to Sort'>Sub-cellular localization</a></th>";
	if ($eff1=='Cell_Line1')echo "<th><a href='#' title='Click Header to Sort'>Uptake efficiency</a></th>";
	if ($mech1=='Inhibition1')echo "<th><a href='#' title='Click Header to Sort'>Uptake Mechanism</a></th>";
	if ($line1=='Unit1')echo "<th><a href='#' title='Click Header to Sort'>Cell lines</a></th>";
	if ($ptn1=='Target1')echo "<th><a href='#' title='Click Header to Sort'>Patent</a></th>";
   if ($nam1=='Assay1')echo "<th><a href='#' title='Click Header to Sort'>Name</a></th>";
	if ($nf1=='Accession1')echo "<th><a href='#' title='Click Header to Sort'>PDB</a></th>";
	
	
	
	echo "</tr>";
	echo "</thead>";
	echo "<tbody>";
	


foreach($ida as $idm)
	{
$query = "SELECT * FROM `avpdb` WHERE `Id` = '$idm' "; 
$result=mysql_query($query); 
while($row = mysql_fetch_array($result))
		{
#$fh=fopen($dir."key","a+");
$id = $a = $c = $d = $e = $f = $g = $h= $i =$k = $l = $m = $n = $p = $q = $r = $s = $t = $v = $w = $y = "";
$id = $row['Id']; $pub = $row['Sequence'];  $a = $row['Nomenclature'];  $c = $row['Abbreviation'];  $d = $row['Length'];  $e = $row['Virus'];  $f = $row['Family'];  $g = $row['Source'];  $h = $row['Cell_Line'];  $i = $row['Inhibition'];  $k = $row['Unit'];  $l = $row['Target']; $m = $row['Assay']; $ch = $row['Accession'];

	echo "<tr>";
	#echo "<td><a href = 'searchid.php?name=$id'>$id</a></td>";
	#echo "<td><a href = 'http://www.ncbi.nlm.nih.gov/pubmed?term=$pub'>$pub</a></td>";
	if ($seq1=='Id1') {echo "<td>$id</td>";}
	if ($chr1=='Sequence1') {echo "<td>$pub</td>";}
	if ($ori1=='Nomenclature1') {echo "<td>$a</td>";}
	if ($fml1=='Abbreviation1'){echo "<td>$c</td>";}
	if ($ntr1=='Length1') {echo "<td>$d</td>";}
	if ($nterm1=='Virus1') {echo "<td>$e</td>";}
	if ($cterm1=='Family1') {echo "<td>$f</td>";}
	if ($sub1=='Source1') {echo "<td>$g</td>";}
	if ($eff1=='Cell_Line1') {echo "<td>$h</td>";}
	if ($mech1=='Inhibition1') {echo "<td>$i</td>";}
    if ($line1=='Unit1') {echo "<td>$k</td>";}
    if ($ptn1=='Target1') {echo "<td>$l</td>";}
    if ($nam1=='Assay'){echo "<td>$m</td>";}
	#if ($nam1=='pdb'){echo "<td><a href = 'show-str.php?id=$id'>$id.pdb</a></td>";}
	if ($nf1=='Accession') {echo "<td>$ch</td>";}

	echo "</tr>";
		}
		

  	} /**

echo "<h1>Please wait while we process your result</h1>";

shell_exec("cat /usr1/webserver/cgidocs/servers/avpdb/topkey $dir/key /usr1/webserver/cgidocs/servers/avpdb/bottom > $dir/keysearch");
shell_exec("cat /usr1/webserver/cgidocs/servers/avpdb/topd $dir/key /usr1/webserver/cgidocs/servers/avpdb/bottomd > $dir/keysearchd.html");
echo "<meta  http-equiv='refresh' content='0;url=submitkey.php?ran=$ran' />";


//////////// End of variables for advance paging ///////////////
/////////////// Start the buttom links with Prev and next link with page numbers /////////////////  **/


include("foot.php");
?>
