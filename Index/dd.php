<?php
include 'head.php';
include'connection.php';
print"<br>";
print<<<HTML
<center><h2><b><font size=4>Download siRNAmod data</font></b></h2><br>

<table cellpadding =30><tr><td>

Text format<br>
<form action='download_datax.php' method=post>
<input type=hidden name=id value='AVPdb_data.tsv'>
<img align="center" src="http://crdd.osdd.net/servers/hipdb/images/csv.png" style="width: 70px; height: 100px; " />
<input type=submit name=DOWNLOAD value='Download'>
</form>

</td><td>
Spreadsheet format<br>
<form action='download_datax.php' method=post>
<input type=hidden name=id value='AVPdb_data.xls'>
<img align="center" src="http://crdd.osdd.net/servers/hipdb/images/xls.png" style="width: 70px; height: 100px; " />
<input type=submit name=DOWNLOAD value='Download'>
</form>


</td>
</tr></table>
<br><font color="red">Note:</font> Downloads will be enabled shortly after manuscript gets accepted.
HTML;

include 'foot.php';
?>
