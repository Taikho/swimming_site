<!DOCTYPE html>

<?php

 error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);

include_once('cfg/cfg.php');



if(file_exists('showpage/showpage.php')){
    include('showpage/showpage.php');
} else{
    echo "Brak pliku do pobrania podstron";
}


if($_GET['idp'] == 'glowna') echo PokazPodstrone(1);
if($_GET['idp'] == 'michael') echo PokazPodstrone(2);
if($_GET['idp'] == 'training_examples') echo PokazPodstrone(3);
if($_GET['idp'] == 'Training_Films') echo PokazPodstrone(4);
if($_GET['idp'] == 'contact') echo PokazPodstrone(5);

?>




<html lang="pl">
<head>
    <title>CMS Swimming</title>
     <link rel="stylesheet" href="html/style.css" />
      <meta charset = "Utf-8">
</head>

<body>
    <div class = "main">
    <a href = "index.php" id = "container">Index</a>
        <ol>
            <li><a href="index.php?idp=glowna">page1</a></li>
            <li><a href="index.php?idp=michael">page2</a></li> 
            <li><a href="index.php?idp=training_examples">page3</a></li> 
            <li><a href="index.php?idp=Training_Films">page4</a></li>
            <li><a href="index.php?idp=contact">page5</a></li> 
            <li><a href="admin/admin.php">logowanie</a></li>
              <li><a href="mail/mail.php">mail</a></li> 
        </ol>
        
    </div>


<?php
    
 $nr_indeksu = 151130;
 $nrGrupy = 5;

echo "Patryk Reweda $nr_indeksu grupa $nrGrupy <br></br>";

    
?>



</body>
</html>

