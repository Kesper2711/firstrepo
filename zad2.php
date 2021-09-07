<?php

if(isset($_POST['oblicz'])){
$log = $_POST['log'];
$pass = $_POST['pass'];
$miasto = $_POST['miasto'];
$pesel = $_POST['pesel'];
$woj = $_POST['woj'];
if($log=='jacek' && $pass == 'owca')
{

    echo("zalogowany");

}
else{
    echo("sprobuj ponownie");
}
}


?>
<form action="" method="POST">
    <input type="text" name="log">
    <input type="password" name="pass">
  

<br>

  miasto  <input type="text" name="miasto">
  pesel  <input type="text" name="pesel">
  wojewodztwo  <input type="text" name="woj">
  <input type="submit" name="oblicz" value="show">
</form>

