<?php
if (isset($_POST['SUBMIT']))
 {


$isolate=$_POST['isolate'];  
$input = $_POST['sequence'];

$path = "/var/www/genomedb/blast-2.2.25/bin/";
chdir($path);
$output = 'bo.out';

if ($input !="")
{
 
if($isolate == "05-06")

{
       echo '<strong><font color="#9E7BFF">
     <h2><br><br>05-06- BLAST OUTPUT</h2></font></strong>';


	$fp = fopen("plas_seq.txt","w"); 
	$in = fwrite($fp,$input); 
	fclose($fp); 
	$cmd="./blastall -p blastn -d 05-06db -i plas_seq.txt -v 10 -b 10 -T -o $output";
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








else if($isolate == "98-93")
{

         echo '<strong><font color="#9E7BFF">
        <h2><br><br>98-93- BLAST OUTPUT</h2></font></strong>'; 
	$fp = fopen("98-93seq.txt","w"); 
	$in = fwrite($fp,$input); 
	fclose($fp); 
	$cmd="./blastall -p blastn -d 98-93db -i 98-93seq.txt -v 10 -b 10 -T -o $output";
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
else
{
echo "Please Give  Inputs";
}


}

?>


 
