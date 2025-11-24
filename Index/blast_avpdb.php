<?php 
include'head.php';
?>
<script type="text/javascript">
function getseq(t){
document.getElementById('SEQUENCE').value = "";
var myVal;
myVal = document.getElementById('SEQUENCE').value;
myVal += ''+ t;
document.getElementById('SEQUENCE').value = myVal;

}
</script>


<HTML>
<TITLE>BLAST Search </TITLE>
<BODY 
    BGCOLOR="white"
    TEXT="#000000"
    LINK="#0000FF"
    VLINK="#FF66FF"
    ALINK="#FF0000"
    >
<FORM ACTION="/cgibin/servers/avpdb/blast/blast.cgi" METHOD = POST NAME="MainBlastForm" ENCTYPE= "multipart/form-data">
<!--<B>Choose program to use and database to search:</B>
<P>-->
    <!--<a href="docs/blast_program.html">Program</a>-->
       <center><h2><font size="4"><b>AVPdb Blast</b></font></h2></center>
        <center><font size=3 color='green'>Blast your peptide sequence against AVPdb.</font></center>

<input type="hidden" name = "PROGRAM" value="blastp">

<!--<select name = "PROGRAM" value="blastn">
    <option> blastn
    <option> blastp
    <option> blastx
    <option> tblastn
    <option> tblastx
</select>-->
<input type="hidden" name="DATALIB" value="AVPdb">
</body>
<!--
Enter here your input data as 
<select name = "INPUT_TYPE"> 
    <option> Sequence in FASTA format 
    <option> Accession or GI 
</select>
-->

<P><table><tr><td>
Enter your siRNA sequence below in <a >FASTA</a>  format 
<BR>
<textarea id="SEQUENCE" name="SEQUENCE" rows=6 cols=60>
</textarea></td><td><br/><br/><br/><b><a href="#" onclick="getseq('>XYZ\nKVLTTGLPALISWIKRKRQQ')">Example</a></b><br/> >XYZ<br>
KVLTTGLPALISWIKRKRQQ</td></tr></table>
<BR>
Or load it from disk 
<INPUT TYPE="file" NAME="SEQFILE">

<P>
<HR>

<a>Expect</a>
<select name = "EXPECT">
    <option> 0.0001 
    <option> 0.01 
    <option> 1 
    <option selected> 10 
    <option> 100 
    <option> 1000 
</select>
&nbsp;&nbsp;

<a >Matrix</a>
<select name = "MAT_PARAM">
    <option value = "PAM30	 9	 1"> PAM30 </option>
    <option value = "PAM70	 10	 1"> PAM70 </option> 
    <option value = "BLOSUM80	 10	 1"> BLOSUM80 </option>
    <option selected value = "BLOSUM62	 11	 1"> BLOSUM62 </option>
    <option value = "BLOSUM45	 14	 2"> BLOSUM45 </option>
</select>
<INPUT TYPE="checkbox" NAME="UNGAPPED_ALIGNMENT" VALUE="is_set"> Perform ungapped alignment 
<P><!--
<a href="docs/newoptions.html#gencodes">Query Genetic Codes (blastx only) 
</a>

<P>
<P>
<a href="docs/oof_notation.html">Frame shift penalty</a> for blastx 
<select NAME = "OOF_ALIGN"> 
 <option> 6
 <option> 7
 <option> 8
 <option> 9
 <option> 10
 <option> 11
 <option> 12
 <option> 13
 <option> 14
 <option> 15
 <option> 16
 <option> 17
 <option> 18
 <option> 19
 <option> 20
 <option> 25   
 <option> 30
 <option> 50
 <option> 1000
 <option selected VALUE = "0"> No OOF
</select>-->
<P>
<a>Other advanced options:</a> 
&nbsp;&nbsp;&nbsp;&nbsp; 
<INPUT TYPE="text" NAME="OTHER_ADVANCED" VALUE="" MAXLENGTH="50">
<HR>

<INPUT TYPE="checkbox" NAME="NCBI_GI" >&nbsp;&nbsp;

<INPUT TYPE="checkbox" NAME="OVERVIEW"  CHECKED> 

<a>Graphical Overview</a>
&nbsp;&nbsp;
Alignment view
<select name = "ALIGNMENT_VIEW">
    <option value=0> Pairwise
    <option value=1> master-slave with identities
    <option value=2> master-slave without identities
    <option value=3> flat master-slave with identities
    <option value=4> flat master-slave without identities
    <option value=7> BLAST XML
    <option value=9> Hit Table
</select>
<BR>
<a>Descriptions</a>
<select name = "DESCRIPTIONS">
    <option> 0 
    <option> 10 
    <option> 50 
    <option selected> 100 
    <option> 250 
    <option> 500 
</select>
&nbsp;&nbsp;
<a>Alignments</a>
<select name = "ALIGNMENTS">
    <option> 0 
    <option> 10 
    <option selected> 50 
    <option> 100 
    <option> 250 
    <option> 500 
</select>
<a>Color schema</a>
<select name = "COLOR_SCHEMA">
    
    <option selected value = 1> Color schema 1  
    <option value = 6> Color schema 2 
    <option value = 2> Color schema 3  
    <option value = 3> Color schema 4 
    <option value = 4> Color schema 5 
    <option value = 5> Color schema 6 
   <option  value = 0> No color schema
</select>
<P>
<INPUT TYPE="button" VALUE="Clear sequence" onClick="MainBlastForm.SEQUENCE.value='';MainBlastForm.SEQFILE.value='';MainBlastForm.SEQUENCE.focus();">
<INPUT TYPE="submit" VALUE="Search">
</FORM>
<HR>

<BR>
</BODY>
</HTML>
<?php 
include'foot.php';
?>
