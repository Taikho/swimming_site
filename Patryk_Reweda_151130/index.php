<!DOCTYPE html>

<?php
    
 error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);

    
if($_GET['idp'] == 'glowna') $strona = 'html/glowna.html';
if($_GET['idp'] == 'michael') $strona = 'html/michael.html';
if($_GET['idp'] == 'training_examples') $strona = 'html/training_examples.html';
if($_GET['idp'] == 'Training_Films') $strona = 'html/Training_Films.html';
if($_GET['idp'] == 'contact') $strona = 'html/contact.html';



include($strona);


?>


<html lang="pl">
<head>
      <meta charset = "Utf-8">
</head>

<body>
    


<?php
    
 $nr_indeksu = 151130;
 $nrGrupy = 5;

echo "Patryk Reweda $nr_indeksu grupa $nrGrupy <br></br>";

    
?>



</body>
</html>

