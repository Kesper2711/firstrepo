<?php
function silnia($n){
    if($n ==1||$n ==2){
        return 1;

    }
    else{
        return  silnia($n-1)+silnia($n-2);
    }
}
if(isset($_POST['show'])){
    $liczba = $_POST['liczba'];

    echo(silnia($liczba));
}
?>

<form action="" method="POST">
<input type="text" name="liczba">
<input type="submit" name="show" value="show">
</form>