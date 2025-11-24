<?php
#ini_set( "display_errors", 0);

require_once("head.php");
include"connection.php";
echo '<link rel="stylesheet" type="text/css" href="balloontip.css" />
<script type="text/javascript" src="balloontip.js"></script>
';
if(!isset($_GET['by'])){
echo  'AlleleSiDb Browse';
}
?>
<style >
div.pagination {
padding: 3px;
margin: 3px;
 }
div.pagination a {
padding: 2px 5px 2px 5px;
margin: 2px;
#border: 1px solid #A4600C;                                                                                                                         
border: 2px solid green;
    text-decoration: none; /* no underline */
color: blue;                                                                                                                                       
}
div.pagination a:hover, div.pagination a:active {
border: 1px solid red;                                                                                                                         
    color: blue;                                                                                                                                    
}
div.pagination span.current {
padding: 2px 5px 2px 5px;
margin: 2px;
border: 1px solid #115176;                                                                                                                         
    font-weight: bold;
#  background-color: #66cc99; 
  background-color: #348017;                                                                                                                         
  color: #FFF;                                                                                                                                       
}
div.pagination span.disabled {
padding: 2px 5px 2px 5px;
margin: 2px;
border: 1px solid #EEE;                                                                                                                            
    color: #DDD;                                                                                                                                       
}
</style>
<!--scroll to top begin-->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript">
//** jQuery Scroll to Top Control script- (c) I made this script myself (Kyle Monk) and it is hosted on my personal site so would appreciate if you followed my blog at kylemonk.tumblr.com if you use it or for details on how to change the location.
//** Graphic originally from tumbler dashboard, for details on how to change graphic colour, contact me at kylemonk.tumblr.com
//** v1.1 (April 7th, 10'):
//** 1) Adds ability to scroll to an absolute position (from top of page) or specific element on the page instead.
//** 2) Fixes scroll animation not working in Opera.
var scrolltotop={
    //startline: Integer. Number of pixels from top of doc scrollbar is scrolled before showing control
    //scrollto: Keyword (Integer, or "Scroll_to_Element_ID"). How far to scroll document up when control is clicked on (0=top).
    setting: {startline:100, scrollto: 0, scrollduration:1000, fadeduration:[500, 100]},
    controlHTML: '<img src="u.jpg" style="filter:alpha(opacity=70); -moz-opacity:0.1; width:55px; height:60px" />', //HTML for control, which is auto wrapped in DIV w/ ID="topcontrol"
    controlattrs: {offsetx:5, offsety:5}, //offset of control relative to right/ bottom of window corner
    anchorkeyword: '#top', //Enter href value of HTML anchors on the page that should also act as "Scroll Up" links
    state: {isvisible:false, shouldvisible:false},
    scrollup:function(){
        if (!this.cssfixedsupport) //if control is positioned using JavaScript
            this.$control.css({opacity:0}) //hide control immediately after clicking it
        var dest=isNaN(this.setting.scrollto)? this.setting.scrollto : parseInt(this.setting.scrollto)
        if (typeof dest=="string" && jQuery('#'+dest).length==1) //check element set by string exists
            dest=jQuery('#'+dest).offset().top
        else
            dest=0
        this.$body.animate({scrollTop: dest}, this.setting.scrollduration);
    },
    keepfixed:function(){
        var $window=jQuery(window)
        var controlx=$window.scrollLeft() + $window.width() - this.$control.width() - this.controlattrs.offsetx
        var controly=$window.scrollTop() + $window.height() - this.$control.height() - this.controlattrs.offsety
        this.$control.css({left:controlx+'px', top:controly+'px'})
    },
    togglecontrol:function(){
        var scrolltop=jQuery(window).scrollTop()
        if (!this.cssfixedsupport)
            this.keepfixed()
        this.state.shouldvisible=(scrolltop>=this.setting.startline)? true : false
        if (this.state.shouldvisible && !this.state.isvisible){
            this.$control.stop().animate({opacity:1}, this.setting.fadeduration[0])
            this.state.isvisible=true
        }
        else if (this.state.shouldvisible==false && this.state.isvisible){
            this.$control.stop().animate({opacity:0}, this.setting.fadeduration[1])
            this.state.isvisible=false
        }
    },
    init:function(){
        jQuery(document).ready(function($){
            var mainobj=scrolltotop
            var iebrws=document.all
            mainobj.cssfixedsupport=!iebrws || iebrws && document.compatMode=="CSS1Compat" && window.XMLHttpRequest //not IE or IE7+ browsers in standards mode
            mainobj.$body=(window.opera)? (document.compatMode=="CSS1Compat"? $('html') : $('body')) : $('html,body')
            mainobj.$control=$('<div id="topcontrol">'+mainobj.controlHTML+'</div>')
                .css({position:mainobj.cssfixedsupport? 'fixed' : 'absolute', bottom:mainobj.controlattrs.offsety, right:mainobj.controlattrs.offsetx, opacity:0, cursor:'pointer'})
                .attr({title:'Back to Top'})
                .click(function(){mainobj.scrollup(); return false})
                .appendTo('body')
            if (document.all && !window.XMLHttpRequest && mainobj.$control.text()!='') //loose check for IE6 and below, plus whether control contains any text
                mainobj.$control.css({width:mainobj.$control.width()}) //IE6- seems to require an explicit width on a DIV containing text
            mainobj.togglecontrol()
            $('a[href="' + mainobj.anchorkeyword +'"]').click(function(){
                mainobj.scrollup()
                return false
            })
            $(window).bind('scroll resize', function(e){
                mainobj.togglecontrol()
            })
        })
    }
}
scrolltotop.init()
</script>	
	<!--scroll to top end-->

<?php


?>

           <?php  
if(isset($_GET['by']) || isset($_GET['page'])){

  $adjacents = 5;
  $select_by=$_GET['by'];
  #echo $select_by;
  $select_type=isset($_GET['TYPE'])?$_GET['TYPE']:"";
  $query = "SELECT COUNT( * ) AS num FROM allsidb where `$select_type` like '".$select_by."'";
 
 if($_GET['TYPE']=='disease' || 'mismatch' || 'tar_mut' || 'cell_line ' || 'target' || 'pmid'){
  $sql345 = "SELECT *   FROM allsidb where `$select_type` like '".$select_by."'";
   $result = mysql_query($sql345);


$no_res = mysql_num_rows($result);
	echo "<font size='4px'>Total number of Results for</font> <font size='3px' color='RED'> $select_by </font>are <font size='3px' color='RED'> $no_res</font><br/>";

	$no_res = mysql_num_rows($result);
 	 if($no_res == 0){
   	   	print"<br><br><br><center><font color='brown' size='4'><b>No Record Found in our database</b></font>";
    	  	print"<br><input type='button' onClick='history.go(-1)' value='Go Back'></center>";
 	 }
	else{
		echo '<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<style type="text/css" title="currentStyle">
			@import "media/css/demo_page.css";
			@import "media/css/demo_table.css";
			@import "media/css/themes/base/jquery-ui.css";
			@import "media/css/themes/smoothness/jquery-ui-1.7.2.custom.css";
		</style>
        <script src="media/js/jquery-1.4.4.min.js" type="text/javascript"></script>
        <script src="media/js/jquery.dataTables.min.js" type="text/javascript"></script>
        <script src="media/js/jquery-ui.js" type="text/javascript"></script>
        <script src="media/js/jquery.dataTables.columnFilter.js" type="text/javascript"></script>
	<script type="text/javascript">
        $(document).ready(function () {
 $(\'#example\').dataTable({
        "aaSorting": [[ 10, "desc" ]]
    } );
                $(\'#example\').dataTable().columnFilter({ sPlaceHolder: "head:after",
                                                             aoColumns: [
                                                                         { type: "text" },
                                                                         { type: "text" },
                                                                         { type: "text" },
                                                                         { type: "text" },
                                                                         { type: "text" },
                                                                         { type: "text" },
                                                                         { type: "text", bRegex:true  },
                                                                         { type: "text" },
                                                                         { type: "text" }
                                                                         ]
                });
            });
	</script>
        <script type="text/javascript">
	</script>

                <table id="example" class="display" >
                    <thead>
                        <tr>
                            <th>ASPsiDb_ID</th>
                            <th>Mutant allele/ASP-siRNA</th>
                            <th>Mutant<br>efficacy</th>
                             <th>Wild<br>efficacy</th>
                            <th>Percentage<br> discrimination</th>
		             <th>Mismatch<br> in siRNA</th>
                            <th>Gene</th>
                            <th>Disease</th>
                             <th>Analysis</th>
                            <th>Pubmed ID</th>
                        </tr>
                        <tr>
                           <th>ASPsiDb_ID</th>
                            <th>Mutant allele/ASP-siRNA</th>
                            <th>Mutant<br>efficacy</th>
                            <th>Wild<br>efficacy</th>
                            <th>Percentage<br> discrimination</th>
                            <th>Mismatch<br> in siRNA</th>
                            <th>Gene</th>
                            <th>Disease</th>
                            <th>Analysis</th>
                            <th>Pubmed ID</th>
                            
                        </tr>
                    </thead>

                    <tbody>';
while($row = mysql_fetch_array($result)){                    
if(file_exists ("./images/new/$row[0].jpeg")){$img="./images/new/$row[0].jpeg";}         else {$img="";}


                   /* echo "<tr ><td><a href=\"record.php?details=".$row[1]."\"rel=".$row[0]."0>".$row[1]."</a></td>
                    <td>".$row[4]."</td>
                    <td ><a href=\"browse.php?by=$row[5]&TYPE=mismatch\" rel=".$row[5]."5>$row[5]</a></td>
                    <td>".$row[20]."</td><td>".$row[25]."</td><td><center><a href=\"http://www.ncbi.nlm.nih.gov/pubmed/$row[0]\">$row[0]</a></center></td>"; */
      
     
      //$row55=preg_replace('/#/', '</font>', $row[4]);
                    
                    echo "<tr ><td><a href=\"record.php?details=".$row[1]."\"rel=".$row[0]."0>".$row[1]."</a></td>
                    
                    <td>".$row[4]."<br>".$row[3]."</td>
                    <td>".$row[5]."</td>
                    <td>".$row[6]."</td>
                    <td>".$row[7]."</td>
                    <td>".$row[8]."</td>
                    <td><a href=\"http://www.uniprot.org/uniprot/".$row[18]."\">$row[17]</a></td>
                    <td ><a href=\"http://www.omim.org/entry/$row[29]\">$row[28]</a></td>
                    
    <td><center><a href='/cgibin/servers/apsidb/blast/blast.cgi?SEQUENCE=$row[31]&PROGRAM=blastn&ALIGNMENT_VIEW=1&EXPECT=10&ALIGNMENTS=10&COLOR_SCHEMA=1&DATALIB=ASP&OVERVIEW'>
    <img title='ASPsiDb Blast' width=15 height=20 src=../virmirna/images/logo2.gif></img></a>
<a href='blast.php?SEQUENCE=$row[31]&name=$row[2]&DATALIB=GRCh37'><img title='Align sequence with reference viral genomes' width=15 height=20 src=../virmirna/images/logo1.jpg></img></a>
  </center></td>
                    <td><center><a href=\"http://www.ncbi.nlm.nih.gov/pubmed/$row[0]\">$row[0]</a></center></td>";
                    #<td>".$row[6]."</td><td><a href=\"align.php?SEQUENCE=$row[3]&name=$row[2]\">align</a> <a href=\"blast.php?SEQUENCE=$row[3]&name=$row[2]&DATALIB=$row[1]\">Blast</a></td><td><img src=\"$img\"></td><td>".$row[8]."</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp<a href=\"http://www.ncbi.nlm.nih.gov/pubmed?term=$row[9]\">".$row[9].'</a></td>';
                   }
                   }
                   
	}
	
	
if($_GET['TYPE']=='xxx_cell_line'){
  $sql345 = "SELECT *   FROM allsidb where `$select_type` like '".$select_by."'";
   $result = mysql_query($sql345);

$pubmed_res=file("pubmed.txt");
$no_res = mysql_num_rows($result);
	echo "<font size='4px'>Total number of Results for</font> <font size='3px' color='RED'> $select_by </font>are <font size='3px' color='RED'> $no_res</font><br/>";
	$end=$start+$limit;

	$no_res = mysql_num_rows($result);
 	 if($no_res == 0){
   	   	print"<br><br><br><center><font color='brown' size='4'><b>No Record Found in our database</b></font>";
    	  	print"<br><input type='button' onClick='history.go(-1)' value='Go Back'></center>";
 	 }
	else{
		echo '<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<style type="text/css" title="currentStyle">
			@import "media/css/demo_page.css";
			@import "media/css/demo_table.css";
			@import "media/css/themes/base/jquery-ui.css";
			@import "media/css/themes/smoothness/jquery-ui-1.7.2.custom.css";
		</style>
        <script src="media/js/jquery-1.4.4.min.js" type="text/javascript"></script>
        <script src="media/js/jquery.dataTables.min.js" type="text/javascript"></script>
        <script src="media/js/jquery-ui.js" type="text/javascript"></script>
        <script src="media/js/jquery.dataTables.columnFilter.js" type="text/javascript"></script>
	<script type="text/javascript">
        $(document).ready(function () {
 $(\'#example\').dataTable({
        "aaSorting": [[ 10, "desc" ]]
    } );
                $(\'#example\').dataTable().columnFilter({ sPlaceHolder: "head:after",
                                                             aoColumns: [
                                                                         { type: "text" },
                                                                         { type: "text" },
                                                                         { type: "text" },
                                                                         { type: "text" },
                                                                         { type: "text" },
                                                                         { type: "text" },
                                                                         { type: "text", bRegex:true  },
                                                                         { type: "text" },
                                                                         { type: "" }
                                                                         ]
                });
            });
	</script>
        <script type="text/javascript">
	</script>

                <table id="example" class="display" >
                    <thead>
                        <tr>
                            <th>mirtar_ID</th>
                            <th>miRNA</th>
                            <th>Virus</th>
                            <th>Gene</th>
                            <th>Organism</th>
                            <th>Cell Line</th>
                            <th>Experimental Method</th>
                            <th>PMID</th>
                        </tr>
                        <tr>
                            <th>mirtar_ID</th>
                            <th>miRNA</th>
                            <th>Virus</th>
                            <th>Gene</th>
                            <th>Organism</th>
                            <th>Cell Line</th>
                            <th>Experimental Method</th>
                            <th>PMID</th>
                        </tr>
                    </thead>

                    <tbody>';
while($row = mysql_fetch_array($result)){                    
                    echo "<tr ><td><a href=\"record.php?details=".$row[0]."\"rel=".$row[0]."0>".$row[0]."</a></td><td>".$row[2]."</td><td ><a href=\"browse.php?by=$row[1]&TYPE=Virus\" rel=".$row[5]."5>$row[1]</a></td><td>".$row[3]."</td><td>".$row[4]."</td><td><center>".$row[5]."</center></td><td>".$row[6]."</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp<a href=\"http://www.ncbi.nlm.nih.gov/pubmed?term=$row[8]\">".$row[8].'</a></td>';
                   }
                   }
                   
	}	
	
	##################end if($_GET['TYPE']=='mirna')

if($_GET['TYPE']=='xxx_target'){
$select_by=$_GET['by'];
  $sql345 = "SELECT *   FROM allsidb where `target` like '".$select_by."'";
   $result = mysql_query($sql345);

$pubmed_res=file("pubmed.txt");
$no_res = mysql_num_rows($result);
	echo "<font size='4px'>Total number of Results for</font> <font size='3px' color='RED'> $select_by </font>are <font size='3px' color='RED'> $no_res</font><br/>";
	$end=$start+$limit;

	$no_res = mysql_num_rows($result);
 	 if($no_res == 0){
   	   	print"<br><br><br><center><font color='brown' size='4'><b>No Record Found in our database</b></font>";
    	  	print"<br><input type='button' onClick='history.go(-1)' value='Go Back'></center>";
 	 }
	else{
				echo '<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<style type="text/css" title="currentStyle">
			@import "media/css/demo_page.css";
			@import "media/css/demo_table.css";
			@import "media/css/themes/base/jquery-ui.css";
			@import "media/css/themes/smoothness/jquery-ui-1.7.2.custom.css";
		</style>
        <script src="media/js/jquery-1.4.4.min.js" type="text/javascript"></script>
        <script src="media/js/jquery.dataTables.min.js" type="text/javascript"></script>
        <script src="media/js/jquery-ui.js" type="text/javascript"></script>
        <script src="media/js/jquery.dataTables.columnFilter.js" type="text/javascript"></script>
	<script type="text/javascript">
        $(document).ready(function () {
 $(\'#example\').dataTable({
        "aaSorting": [[ 10, "desc" ]]
    } );
                $(\'#example\').dataTable().columnFilter({ sPlaceHolder: "head:after",
                                                             aoColumns: [
                                                                         { type: "text" },
                                                                         { type: "text" },
                                                                         { type: "text" },
                                                                         { type: "text" },
                                                                         { type: "text" },
                                                                         { type: "text" },
                                                                         { type: "text", bRegex:true  },
                                                                         { type: "text" },
                                                                         { type: "" }
                                                                         ]
                });
            });
	</script>
        <script type="text/javascript">
	</script>

                <table id="example" class="display" >
                    <thead>
                        <tr>
                            <th>amir_ID</th>
                            <th>miRNA</th>
                            <th>MiRNA_Seq</th>
                            <th>Virus</th>
                            <th>Target</th>
                            <th>Process</th>
                            <th>Method</th>
                            <th>PMID</th>
                        </tr>
                        <tr>
                            <th>amir_ID</th>
                            <th>miRNA</th>
                            <th>MiRNA_Seq</th>
                            <th>Virus</th>
                            <th>Target</th>
                            <th>Process</th>
                            <th>Method</th>
                            <th>PMID</th>
                        </tr>
                    </thead>

                    <tbody>';
while($row = mysql_fetch_array($result)){                    
                    echo "<tr ><td><a href=\"record.php?details=".$row[0]."\"rel=".$row[0]."0>".$row[0]."</a></td><td width=\"80px\"><a href=\"browse.php?by=$row[1]&TYPE=Virus\" rel=".$row[5]."5>$row[1]</a></td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td><td>".$row[5]."</td><td>".$row[6]."</td><td><a href=\"http://www.ncbi.nlm.nih.gov/pubmed?term=$row[7]\">".$row[7].'</a></td>';
                   }
                   }
                   
	}	
	
	##################end if($_GET['TYPE']=='mirna')	
	
	
	
	
	
	 print"</table><br>";

}
else{
           
if($_GET['db']=='disease'){	

		echo "<br/>";
			echo "<ol>";
			$qu=mysql_query("SELECT distinct(`disease`) FROM `allsidb` WHERE `disease` is not null AND `disease` not like '' order by `disease`ASC LIMIT 0, 100 ");	
			while ($q1=mysql_fetch_row($qu)){
				$sq1="select * from `allsidb` where `disease`  like '".$q1[0]."'";
				$number_r=mysql_query($sq1);
				$tot_f=mysql_num_rows($number_r);
				#$ret="select sirna_id from `allsidb` where `disease`  like '".$q1[0]."'";
				$ret_my=mysql_fetch_row(mysql_query($ret));
#				echo "<br/><li><a href=\"browse.php?by=".$q1[0]."&TYPE=name of virus\">".$q1[0]."</a><font size=\"2\" color=\"#800000\">(".$tot_f.")</font> </li>";
                                echo "<br/><li><a href=\"browse.php?by=".$q1[0]."&TYPE=disease\">".$q1[0]."</a><font size=\"2\" color=\"#800000\">(" .$tot_f.")</font>";
                          }
		echo "</ol>";
}
#############################
if($_GET['db']=='pmid'){	

		echo "<br/>";
			echo "<ol>";
			$qu=mysql_query("SELECT distinct(`pmid`) FROM `allsidb` WHERE `pmid` is not null AND `pmid` not like '' order by `pmid`ASC LIMIT 0, 100 ");	
			while ($q1=mysql_fetch_row($qu)){
				$sq1="select * from `allsidb` where `pmid`  like '".$q1[0]."'";
				$number_r=mysql_query($sq1);
				$tot_f=mysql_num_rows($number_r);
				#$ret="select sirna_id from `allsidb` where `disease`  like '".$q1[0]."'";
				$ret_my=mysql_fetch_row(mysql_query($ret));
#				echo "<br/><li><a href=\"browse.php?by=".$q1[0]."&TYPE=name of virus\">".$q1[0]."</a><font size=\"2\" color=\"#800000\">(".$tot_f.")</font> </li>";
                                echo "<br/><li><a href=\"browse.php?by=".$q1[0]."&TYPE=pmid\">".$q1[0]."</a><font size=\"2\" color=\"#800000\">(" .$tot_f.")</font>";
                          }
		echo "</ol>";
}
#############################



if($_GET['db']=='target'){	

		echo "<br/>";
			echo "<ol>";
			$qu=mysql_query("SELECT distinct(`target`) FROM `allsidb` WHERE `target` is not null AND `target` not like '' order by `target`ASC LIMIT 0, 100 ");	
			while ($q1=mysql_fetch_row($qu)){
				$sq1="select * from `allsidb` where `target`  like '".$q1[0]."'";
				$number_r=mysql_query($sq1);
				$tot_f=mysql_num_rows($number_r);
#				echo "<br/><li><a href=\"browse.php?by=".$q1[0]."&TYPE=name of virus\">".$q1[0]."</a><font size=\"2\" color=\"#800000\">(".$tot_f.")</font> </li>";
                                echo "<br/><li><a href=\"browse.php?by=".$q1[0]."&TYPE=target\">".$q1[0]."</a><font size=\"2\" color=\"#800000\">("
				  .$tot_f.")</font>";
                          }
		echo "</ol>";
}
#############################
if($_GET['db']=='cell_line'){	

		echo "<br/>";
			echo "<ol>";
			$qu=mysql_query("SELECT distinct(`cell_line`) FROM `allsidb` WHERE `cell_line` is not null AND `cell_line` not like '' order by `cell_line`ASC LIMIT 0, 100 ");	
			while ($q1=mysql_fetch_row($qu)){
				$sq1="select * from `allsidb` where `cell_line`  like '".$q1[0]."'";
				$number_r=mysql_query($sq1);
				$tot_f=mysql_num_rows($number_r);
#				echo "<br/><li><a href=\"browse.php?by=".$q1[0]."&TYPE=name of virus\">".$q1[0]."</a><font size=\"2\" color=\"#800000\">(".$tot_f.")</font> </li>";
                                echo "<br/><li><a href=\"browse.php?by=".$q1[0]."&TYPE=cell_line\">".$q1[0]."</a><font size=\"2\" color=\"#800000\">("
				  .$tot_f.")</font>";
                          }
		echo "</ol>";
}

#############################
if($_GET['db']=='mismatchposition'){	

		echo "<br/>";
			echo "<ol>";
			$qu=mysql_query("SELECT distinct(`mismatchposition`) FROM `allsidb` WHERE `mismatchposition` is not null AND `mismatchposition` not like '' order by `mismatchposition`ASC LIMIT 0, 10000 ");	
			while ($q1=mysql_fetch_row($qu)){
				$sq1="select * from `allsidb` where `mismatchposition`  like '".$q1[0]."'";
				$number_r=mysql_query($sq1);
				$tot_f=mysql_num_rows($number_r);
#				echo "<br/><li><a href=\"browse.php?by=".$q1[0]."&TYPE=name of virus\">".$q1[0]."</a><font size=\"2\" color=\"#800000\">(".$tot_f.")</font> </li>";
                                echo "<br/><li><a href=\"browse.php?by=".$q1[0]."&TYPE=mismatchposition\">".$q1[0]."</a><font size=\"2\" color=\"#800000\">("
				  .$tot_f.")</font>";
                          }
		echo "</ol>";
}
#############################
if($_GET['db']=='target_mutation'){	

		echo "<br/>";
			echo "<ol>";
			$qu=mysql_query("SELECT distinct(`target_mutation`) FROM `allsidb` WHERE `target_mutation` is not null AND `target_mutation` not like '' order by `target_mutation`ASC LIMIT 0, 300 ");	
			while ($q1=mysql_fetch_row($qu)){
				$sq1="select * from `allsidb` where `target_mutation`  like '".$q1[0]."'";
				$number_r=mysql_query($sq1);
				$tot_f=mysql_num_rows($number_r);
#				echo "<br/><li><a href=\"browse.php?by=".$q1[0]."&TYPE=name of virus\">".$q1[0]."</a><font size=\"2\" color=\"#800000\">(".$tot_f.")</font> </li>";
                                echo "<br/><li><a href=\"browse.php?by=".$q1[0]."&TYPE=target_mutation\">".$q1[0]."</a><font size=\"2\" color=\"#800000\">("
				  .$tot_f.")</font>";
                          }
		echo "</ol>";
}
#############################
if($_GET['db']=='tar_mut'){	

		echo "<br/>";
			echo "<ol>";
			$qu=mysql_query("SELECT distinct(`tar_mut`) FROM `allsidb` WHERE `tar_mut` is not null AND `tar_mut` not like '' order by `tar_mut`ASC LIMIT 0, 300 ");	
			while ($q1=mysql_fetch_row($qu)){
				$sq1="select * from `allsidb` where `tar_mut`  like '".$q1[0]."'";
				$number_r=mysql_query($sq1);
				$tot_f=mysql_num_rows($number_r);
#				echo "<br/><li><a href=\"browse.php?by=".$q1[0]."&TYPE=name of virus\">".$q1[0]."</a><font size=\"2\" color=\"#800000\">(".$tot_f.")</font> </li>";
                                echo "<br/><li><a href=\"browse.php?by=".$q1[0]."&TYPE=tar_mut\">".$q1[0]."</a><font size=\"2\" color=\"#800000\">("
				  .$tot_f.")</font>";
                          }
		echo "</ol>";
}
#############################

}

include "foot.php";
?>
