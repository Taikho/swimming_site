<!DOCTYPE html>
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
    
<?php include 'fluid.php';

echo '<br></br> Metoda include: <br></br>';
echo "I have a $fluid <br></br>";

echo '<br></br> Metoda if else elseif i switch : <br></br>';
    
$a = 2;
$b = 2;

if ($a > $b) {
  echo "<br></br>a is bigger than b<br></br>";
    $i = 0;
    }
else if($a < $b){
  echo "<br></br>b is bigger than a<br></br>";
    $i = 1;
}
else{
   echo "<br></br>a is equal to b<br></br>"; 
    $i = 2;
}
   switch ($i) {
    case 0:
        echo "<br></br>b is bigger than a<br></br>";
        break;
    case 1:
        echo "<br></br>i equals 1<br></br>";
        break;
    case 2:
        echo "<br></br> a is equal to b <br></br>";
        break;
}
    
echo '<br></br> while and for: <br></br>';
    
for ($x = 0; $x <= 100; $x+=10) {
  echo "The number is: $x <br>";
}
    $d = 5;
    
while($d < 10) {
  echo $d;
  $d++;
} 
    fluid.php?page=1&cos=2&cos_innego=3
        

        

?>


</body>
</html>


    

