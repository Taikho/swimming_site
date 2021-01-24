<?php

session_start();

            
if (!empty($_POST['login_pass']) && !empty($_POST['login_email'])) {
if ($_POST['login_email'] == 'admin' && $_POST['login_pass'] == 'admin') {
    $_SESSION['valid'] = true;
    $_SESSION['login_email'] = 'admin';
    echo 'Prawidłowe Hasło';
    echo dodajStrone();
    echo usunStrone();
}else {
    echo 'Wrong password';
     
}
            }
         ?>

<html lang="pl">
<head>
    <title>CMS Swimming</title>
     <link rel="stylesheet" href="../html/style.css" />
      <meta charset = "Utf-8">
</head>

<body>    
    
     <h1 class="heading"> Panel logowania: </h1>
     <div class="logowanie">
     <form method="post" name="LoginForm" enctype="multipart/form-data" action="<?php echo $_SERVER['REQUEST_URI'] ?>">
     <table class="logowanie">
     <tr><td class="log4_t">[email]</td><td><input type="text" name="login_email" class="logowanie" /><td><tr>
     <tr><td class="log4_t">[haslo]</td><td><input type="password" name="login_pass" class="logowanie" /><td><tr>
     <tr><td>&nbsp;</td><td><input type="submit" name="x1_submit" class="logowanie" value="Zaloguj" /></td></tr>
     </table>
     </form>
     <form method="post" name="przypomnij_haslo" enctype="multipart/form-data" action="">
     <input type="submit" name="przypomnij_haslo" class="mail" value="Przypomnij sobie hasło" />
     </form>
         </div>     
         </div>
         
    

</body>
</html>

<?php
    
include('../cfg/cfg.php');

function dodajStrone(){
    $dod ='
    <div class="container" style="margin-top:20px;">
    <h2>Dodaj Strone</h2>
<form action="" method="post">
Id: <input type="Integer" name="id"><br>
Strona_Tytułowa: <input type="text" name="page_title"><br>
Zawartosc_Strony:<br><textarea rows="6" name="page_content" cols="40"></textarea><br>
<input type="submit" name="dodaj" value="Dodaj">
</form>
';
    return $dod;
    
}
           
function usunStrone(){
    $us ='
    <div class="container" style="margin-top:20px;">
    <h2>Usun</h2>
<form action="" method="post">
Id: <input type="Integer" name="w_id"><br>
<input type="submit" name="delete" value="Delete">
</form>
';
    return $us;
    
}

    
if(isset($_POST['usun']))
{
    if (isset($_POST['w_id']))
    {
        $conn = polaczSie();
        $sql = "DELETE FROM page_list WHERE id= ".$_POST['w_id'];
        mysqli_query($conn, $sql);
        
    }
}
           
if(isset($_POST['dodaj']))
{
  if(isset($_POST['id']) && isset($_POST['page_title']) && isset($_POST['page_content']))
  {
      $conn = polaczSie();
      $sql = "INSERT INTO page_list (id, page_title, page_content)
VALUES ('".$_POST["id"]."','".$_POST["page_title'"]."','".$_POST["page_content"]."')";
      if ($conn->query($sql) === TRUE) {
  echo "Gratulacje zostalo stworzone";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
      
  }
}
    
           
           
     ?>