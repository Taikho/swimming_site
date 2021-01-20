<?php
    $dbhost = 'localhost:3306';
    $dbuser = 'root';
    $dbpass = 'nowehaslo10';
    $baza = 'moja_strona';

$link = mysqli_connect($dbhost, $dbuser, $dbpass, $baza);

#$login = mysqli_real_escape_string($link,$_POST['username']);
#$pass = mysqli_real_escape_string($link,$_POST['password']); 

$sql = "SELECT id FROM page_list";
$result = $link->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id";
  }
} else {
  echo "0 results";
}
$link->close();




?>