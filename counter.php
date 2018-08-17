<?php 
$handle = fopen("counter.txt", "r");
if(!$handle){
 echo "could not open the file" ;
}
else {
	$counter = ( int ) fread ($handle,20) ;
	fclose ($handle) ;
	$counter++ ;
	
	echo'<b>Views </b>'."<span class='glyphicon glyphicon-eye-open'></span>"."&nbsp;". "<b>".$counter."</b>" . " </span>" ;
$handle =  fopen("counter.txt", "w" ) ;
fwrite($handle,$counter) ;
fclose ($handle) ;
	}
?>
