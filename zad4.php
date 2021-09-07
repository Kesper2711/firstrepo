<?php
$owoce=array("d"=>"mango", "a"=>"papaja", "b"=>"banan", "c"=>"aronia");
krsort($owoce);
reset($owoce);
while(list($klucz,$wartosc)=each($owoce)){
    echo "$klucz=$wartosc";
}
?>