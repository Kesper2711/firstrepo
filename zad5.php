<?php
$uczniowie=array("1"=>"Alex<br>", "2"=>"Tomek<br>", "3"=>"Kuba<br>", "4"=>"Szymon<br>", "5"=>"Filip<br>", "6"=>"Max<br>", "7"=>"Lukasz<br>", "8"=>"Kacper<br>", "9"=>"Bartek<br>", "10"=>"Emil<br>");
krsort($uczniowie);
reset($uczniowie);
while(list($klucz,$wartosc)=each($uczniowie)){
    echo "$klucz=$wartosc";
}
?>