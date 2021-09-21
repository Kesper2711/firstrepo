<html>

    <head>
    </head>

    <body>


    
        <?php
            $user= 'root';
            $pass= '';
            $host = 'localhost';
            $base = 'logowanie_richert';
            $kac= mysqli_connect($host, $user, $pass, $base);
            mysqli_select_db($kac,$base);


            if(isset($_POST['reg'])) {
                $log = $_POST['logi'];
                $has = $_POST['haslo'];
                $imie = $_POST['imie'];
                $nazwisko = $_POST['nazwisko'];
                $szkola = $_POST['szkola'];
                $adres = $_POST['adres'];
                $telefon = $_POST['telefon'];

                $query = "INSERT INTO tabela_richert(login, haslo, imie, nazwisko, szkola, adres, telefon) values('$log', '$has', '$imie', '$nazwisko', '$szkola', '$adres', '$telefon')";
                $run = mysqli_query($kac,$query) or die(mysqli_error($kac));

                echo "brawo utworzyles konto";
            }
        ?>
                <form method="POST">
            Login: <input type="text" name="logi"><br>
            Hasło: <input type="password" name="haslo"><br>
            Imię: <input type="text" name="imie"><br>
            Nazwisko: <input type="text" name="nazwisko"><br>
            Szkoła: <input type="text" name="szkola"><br>
            Adres: <input type="text" name="adres"><br>
            Telefon: <input type="number" name="telefon"><br>
            <input name="reg" type="submit" value="Zarejestruj Się!">
        </form>
    </body>

</html>