<?php $conn = oci_connect('SYSTEM', 'admin', '//localhost/xe'); if (!$conn) {
   $m = oci_error();
   echo $m['message'], "\n";
   exit; } else {
   
} 
    
    ?>