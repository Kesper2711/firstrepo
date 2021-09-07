<?php
$n = $_GET['war'];
for($i=58; $i<$n; $i++)
{
    $los = rand(58, 65);
    echo($los . "<br>");

}
<form action=""method = "GET">
    <input type="text" name="war">
    <input type="submit" value="show">

?>