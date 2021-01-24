<?php

function PokazKontakt(){
    $wynik ='
    <div class="container" style="margin-top:200px;">
<form action="validate_data.php" method="post">
Temat: <input type="text" name="temat"><br>
Email: <input type="email" name="email"><br>
Treść wiadomości:<br><textarea rows="6" name="tresc" cols="40"></textarea><br>
<input type="submit" name="submit" value="Submit">
</form>
';
    return $wynik;
    
}

function WyslijMailaKontakt($odbiorca)
{
if(empty($_POST['temat']) || empty($_POST['tresc']) || empty($_POST['email']))
{
echo '[nie_wypelniles_pola]';
echo PokazKontakt();
}
else
{

$mail['subject'] = $_POST['temat'];
$mail['body'] = $_POST['tresc'];
$mail['sender'] = $_POST['email'];
$mail['reciptient'] = $odbiorca;
                
$header = "From: Formularz kontaktowy <". $mail['sender'].">\n";
$header .= "MIME-Verision: 1.0\nContent-Type: text/plain; charset = utf-8\nContent-Transfer-Encoding:";
$header .= "X-Sender: <".$mail['sender'].">\n";
$header .= "X-Mailer: PRapWWW mail 1.2\n";
$header .= "X-Priority: 3\n";
$header .= "Return-Path: <".$mail['sender'].">\n";

mail($mail['receiptient'],$mail['subject'],$mail['body'],$header);
echo '[wiadomosc_wyslana]';
}
}
?>
