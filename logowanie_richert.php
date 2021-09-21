<html>

    <head>
    </head>

    <body>
        <?php
            $user= 'root';
            $pass= '';
            $host = 'localhost';
            $base = 'logowanie_richert';
            $con= mysqli_connect($host,$user,$pass, $base);
            mysqli_select_db($con,$base);


            if(isset($_POST['login'])) {
                $login = $_POST['log'];
                $haslo = $_POST['haslo'];

                $query = "SELECT * FROM tabela_richert";
                
                $run =mysqli_query($con,$query) or die(mysqli_error($con));

                $b = $con->query($query);

                if($b->num_rows>0){

                
                echo "zalogowany";
            }

            
            
            }
        ?>
                <form method="POST">
            Login: <input type="text" name="log"><br>
            Hasło: <input type="password" name="haslo"><br>
            <input name="login" type="submit" value="Zaloguj Się!">
        </form>

    </body>

</html>