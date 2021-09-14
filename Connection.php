<style>
    td{
        border: 1px solid ;
        background: green;
        color: greenyellow;
    }
</style>
<?php

   $user= 'root';
   $pass= '';
   $host = 'localhost';
   $base = '4g';    //tutaj nazwa twojej bazy
   $con= mysqli_connect($host,$user,$pass, $base);
   mysqli_select_db($con,$base);
  
    if(isset($_GET['sub']))
		 {  
             
             $imie = $_GET['imi'];
             $nazwisko = $_GET['nazw'];
             $hobby = $_GET['hob'];
$query = "Insert into 4g(imie, nazwisko, hobby) values('$imie', '$nazwisko', '$hobby')";

$run =mysqli_query($con,$query) or die(mysqli_error());

if($run){
    echo "Formularz zatwierdzony";
}
else{
    echo "formularz jest błędny";
}
         }

$sql = "Select * from 4g";
$result = $con->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<table>";
        echo "<tr>";
        echo "<td>";
      echo  $row["imie"];
      echo "</td>";
      echo "<td>";
      echo  $row["nazwisko"];
      echo "</td>";
      echo "<td>";
      echo  $row["hobby"];
      echo "</td>";
      echo "</tr>";
      echo "</table>";
    }
  } else {
    echo "0 results";
  }

  $usun = "DELETE FROM 4g WHERE id= 'idd' ";

if ($con->query($usun) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $con->error;
}
?>
<form action="" method="get">
ID del:<input type="text" name="idd"><br>
<input name="sub" type="submit" value="usun"><br>
</form>

<form action="" method="get">
Imie:<input type="text" name="imi"><br>
Nazwisko:<input type="text" name="nazw"><br>
Hobby:<input type="text" name="hob"><br>
<input name="sub" type="submit" value="ok">
</form>
