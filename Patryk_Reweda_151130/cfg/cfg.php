<?php
function polaczSie() {
    $dbhost = 'localhost:3306';
    $dbuser = 'root';
    $dbpass = 'nowehaslo10';
    $baza = 'moja_strona';
    
try{
   $mysqli = new mysqli($dbhost, $dbuser, $dbpass, $baza);
} catch(mysqliException $e){
    exit('Database error.');
}
     
    if($mysqli->connect_error) 
     die('Connect Error (' . mysqli_connect_errno() . ') '. mysqli_connect_error());
   return $mysqli;
}


    

?>
