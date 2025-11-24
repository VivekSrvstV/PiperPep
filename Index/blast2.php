<?php
echo "ffffff";
if (isset($_POST['SUBMIT']))
 {
echo '<strong><font color="#9E7BFF">
<h2><br><br>PHYCA - BLAST OUTPUT</h2></font></strong>';
if (isset($_POST['sequence']))
{
$blank=	$_POST['sequence'];
echo $blank;
if ($blank !="")
{
	echo " not blank";
}
else
{
	echo "  blank";
}
}
$input = $_POST['sequence'];
/*$path = "c:/local blast/bin";
echo $input;
//$path = "c:\Program Files\Blast\bin";
/*chdir($path);

$fp = fopen("plas_seq.txt","w"); 
$in = fwrite($fp,$input); 
fclose($fp); 
//fclose($fh);
$output = 'bo.out';
// $cmd="blastall -p blastn -d plasbid.nt -i plas_seq.txt -T -o $output";
$cmd="blastall -p blastn -d c:\wamp\www\plasbid\plasbid\phycadb -i plas_seq.txt -v 10 -b 10 -T -o $output";
//echo $input;
exec($cmd);
$file=fopen($output,'r');
$i=0;
while(!feof($file))
  {
  $i++;
  if($i<15)
  {
  fgets($file);
  }
  else
  {
  
  echo "<br>". stripslashes(fgets($file)) ;
  }
  } 
  
  

  
fclose($file);*/
}

?>

