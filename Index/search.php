<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PiperDB</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<script language="javascript">
function toggle(source) 
{
  checkboxes = document.getElementsByName('hse[]');
  for(var i=0, n=checkboxes.length;i<n;i++) 
  {
    checkboxes[i].checked = source.checked;
  }
  checkboxes[0].checked= true;
}
function toggle2() 
{
  document.getElementById("all1").checked = false;
}
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
		<li><a href="tools.php"><span class="projects"></span>Tools</a></li>
                <li><a href="help.php"><span class="gallery"></span>Help</a></li>
                <li><a href="contact.php"><span class="gallery"></span>Contact</a></li>
            </ul>
        </div>
</div> 
</div>
<div id="wrapper">
<div id="middle">
<br> <center><h2><font size="4"; color=#FFFFF;>Search PiperDB records</font></h2>
 &nbsp&nbsp&nbsp&nbsp<fieldset style="border:0px; background-color: #0a2333;" name="KEYWORD" >
<form onsubmit="return formValidation(this)" enctype="multipart/form-data" method="POST" action="ser_results.php">
<br><b><font color=#FFFFF>Enter Query:</font></b> <input type="text"   name="key"></b><br><br>
               <b><font color=#FFFFF>Search Type:</font></b>
                  &nbsp;&nbsp;<input type="radio"  value="similar" name="type" checked=""><font color=#FFFFF>Containing</font>
                  &nbsp;&nbsp;<input type="radio"  value="exact" name="type"><font color=#FFFFF>Exact</font>
              <br><br>

<table cellspacing="3" cellpadding="3" border="0">
<tr bgcolor="##FFFFFF"><td><b><font color="black">Select</font></b></td><td><b><font color="000000">Fields</font></b></td></tr>
<tr bgcolor="white"><td><input type="checkbox" value="all" name="al" id="all1" onClick="toggle(this)"></td><td><b color="#000000" >All</b></td></tr>
<tr bgcolor="white"><td><input type="checkbox" value="PiperID" name="hse[]" onClick="toggle2()"></td><td><b>PiperID</b> [e.g, Piper01]</td></tr>
<tr bgcolor="white"><td><input type="checkbox" value="SEQUENCE" name="hse[]" onClick="toggle2()"></td><td><b>Sequence</b> [e.g,  AHGGVSVFGGVGER]</td></tr>
<tr bgcolor="white"><td><input type="checkbox" value="Ion" name="hse[]" onClick="toggle2()"></td><td><b>Ion</b> [e.g,  2707]</td></tr>
<tr bgcolor="white"><td><input type="checkbox" value="Score" name="hse[]" onClick="toggle2()"></td><td><b>Score</b> [e.g, 68.87]</td></tr>
<tr bgcolor="white"><td><input type="checkbox" value="Hits" name="hse[]" onClick="toggle2()"></td><td><b>Hits</b> [e.g, 10]</td></tr>
<tr bgcolor="white"><td><input type="checkbox" value="Mass" name="hse[]" onClick="toggle2()"></td><td><b>Mass</b> [e.g, 1327.6631]</td></tr>
<tr bgcolor="white"><td><input type="checkbox" value="Modification" name="hse[]" onClick="toggle2()"></td><td><b>Modification</b> [e.g, [15] Oxidation (M)]</td></tr>
<tr bgcolor="white"><td><input type="checkbox" value="Protein Name" name="hse[]" onClick="toggle2()"></td><td><b>Protein name</b> [e.g, ATP synthase CF1 beta subunit]</td></tr>
<tr bgcolor="white"><td><input type="checkbox" value="Origin" name="hse[]" onClick="toggle2()"></td><td><b>Origin</b> [e.g, chloroplast]</td></tr>
<tr bgcolor="white"><td><input type="checkbox" value="Accession" name="hse[]" onClick="toggle2()"></td><td><b>Accession</b> [e.g, Gi|114107053]</td></tr>
</table>
</tr><input type="submit" value="Search">
&nbsp;&nbsp;<input type="reset" value="Clear Data">&nbsp;&nbsp;<!--input name="help" type="button" value="Help" onClick="MyWindow()"-->
</form>

<div align="right">
<DIV onMouseover="ddrivetip('The user can enter the desired keyword and field then select necessary fields to search the database. Here you can also download your search results as a csv file.', '#f0e68c', '450')";
 onMouseout="hideddrivetip()"><a href="help.php#Search"><font color="#3BB9FF">Help</a></font></div>
</div>
<!--<a href="http://yahoo.com" onMouseover="ddrivetip('Yahoo\'s Site', 'yellow', 250)";
 onMouseout="hideddrivetip()">Yahoo</a>-->
</center>
<!--
<center><H4>OR</H4></center>
<br/>
<form onsubmit="return formValidation(this)" enctype="multipart/form-data" method="POST" action="new-search.php">
 <b>Efficacy <select name="bool"><option value="<"> <b>< </b></option><option value=">" selected><b>></b></option><option value="="><b>=</b></option> </select><input type="text"   name="keyword">[e.g, 90]
</tr>




</table>
</tr><input type="submit" value="Search">
&nbsp;&nbsp;&nbsp;&nbsp;<!--input name="help" type="button" value="Help" onClick="MyWindow()"-></p>

</form>

-->
<div id="middle" style="height: 50px;">
    
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

        Copyright © 2015 <a hrf="http://www.spices.res.in">Indian institute of Spices Reserch</a> |
        <a href="" target="_parent">IISR</a> <a href="" target="_parent"></a>

    </div> <!-- end of footer -->


</body>
</html>
