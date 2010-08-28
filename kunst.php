<?php

define( 'ANZ', 6 );
$str = 'laizeps reesnreget';

$output = array();
//for( $i = ANZ; $i > 0; $i-- )   $output[] = "<h$i>".$str."</h$i>";
//for( $i = $i+2; $i <= ANZ ; $i++ )   $output[] = "<h$i>".$str."</h$i>";

for( $i = 0; $i <= strlen( $str ); $i++ ) $output[] = "<h5>".substr( $str, 0, $i )." ";
for( $i = 0; $i <= strlen( $str ); $i++ ) $output[ $i] .= " ".substr( $str,  $i )."</h5>";
        //for( ; $i >0; $i-- ) $output[] = "<h5>".substr( $str,  $i )."</h5>";

//sort( $output );
echo "<center>";
foreach( $output AS $o ) echo $o;

?>

