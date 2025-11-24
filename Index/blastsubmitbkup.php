<?php
if (isset($_POST['SUBMIT']))
 {
echo '<strong><font color="#9E7BFF">
<h2><br><br>PHYTOCAP_IISR- BLAST OUTPUT</h2></font></strong>';
$input = $_POST['sequence'];
echo $input;
$path = "/var/www/genomedb/blast-2.2.25/bin/";
chdir($path);
$output = 'bo.out';
if ($input !="")
{
 
	$fp = fopen("plas_seq.txt","w"); 
	$in = fwrite($fp,$input); 
	fclose($fp); 
	$cmd="./blastall -p blastn -d phycadb -i plas_seq.txt -v 10 -b 10 -T -o $output";
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
  
       fclose($file);
}


}

?>


 
