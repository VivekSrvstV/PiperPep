<?php
if(!empty($_POST['Protein name']) && $_GET['Sequence']!='down' &&$_GET['Peptide Sequence']!='up' ){$var='all';if($_GET['by']=='Modification'){$by='Modification';}
	if($_GET['by']=='Modification'){$by='Modification';}
	#@@@@@ $query='select * from `sample_db` where `CELL LINE` not like \'%*%\' and `SEQUENCE` not like \'NA\' and`SEQUENCE` not like \'\'  and `SEQUENCE` not like \'%*%\' and `CELL LINE` not like \'%#%\'  order by `CELL LINE`+ 0 desc';
	$query='select `PiperID`,`Accession`,`Protein name`,` Sequence`,`Peptide Ion`,`Score`,`Hits``Mass`,`Modification`,`Map` from `piperdb` where `IC50` not like \'%*%\' and `SEQUENCE` not like \'NA\' and `SEQUENCE` not like \'\'  and `SEQUENCE` not like \'%*%\' and `CELL LINE` not like \'%#%\'  order by `PiperID`+ 0 desc';
}
 if($_GET['Protein name']=='up'){$var='up';
 	if($_GET['by']=='Peptide Sequence'){$by='`SOURCE`';}
	 if($_GET['by']=='Modificatione'){$by='`IC50` +0 ';}
	 $query='select `PiperID`,`Accession`,`Protein name`,` Sequence`,`Peptide Ion`,`Score`,`Hits``Mass`,`Modification`,`Map` from `piperdb` where `IC50` not like \'%*%\' and `SEQUENCE` not like \'NA\' and`SEQUENCE` not like \'\'  and `SEQUENCE` not like \'%*%\' and `IC50` not like \'%#%\'  order by '.$by.' ASC';
}
if($_GET['Protein name']=='down'){$var='down';
	 if($_GET['by']=='Peptide Sequence'){$by='`SOURCE`';}
	 if($_GET['by']=='Modification'){$by='`IC50` + 0';}
	 $query='select `PiperID`,`Accession`,`Protein name`,`Peptide Sequence`,`Peptide Ion`,`Score`,`Hits``Mass`,`Modification`,`Map` from `piperdb` where `IC50` not like \'%*%\' and `SEQUENCE` not like \'NA\' and`SEQUENCE` not like \'\'  and `SEQUENCE` not like \'%*%\' and `IC50` not like \'%#%\'  order by '.$by.' desc';
}
?>


			
