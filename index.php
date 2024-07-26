<?php 

$insertSql = "INSERT INTO `dictionarytable` (`id`, `dates`, `deutsch`, `english`, `türkçe`) VALUES (NULL, '2024-07-26', 'Hallo', 'Hello', 'Merhaba');";

?>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="style.css">
</head>
<body>
        <form action="" method="post" style="margin-left: 10%; margin-top: 5%;">
                <input type="text" name="deutschWort" placeholder="Deutsch Wort">
                <input type="text" name="englihWord"  placeholder="Enlish Word">
                <input type="text" name="turkceKelime" placeholder="Türkçe Kelime"><br><br>
                <Button type="submit" name="saveSumbit" id="saveSumbit" style="margin-left: 12%;" class="glow-on-hover">Save</Button>
        </form>
        <?php 
        class sqlController{
                function sqlQueryDone($sql){
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "dictionarydb";

                        $conn = new mysqli($servername, $username, $password, $dbname);
                        if($conn -> connect_error){
                         die("Fehler beim Herstellen einer Verbindung./Error to connect./Bağlantı hatası.");
                        }
                        if($conn ->query($sql) === True){
                                echo "</h2>Zum Speichern erledigt</h2>";
                        }
                        else{
                                echo '</br> Error: '.$sql."<br>".$conn->error."<br>";
                                echo "<h2>Kontrollieren Sie Ihre Eingaben</h2>";
                        }
                 }
        }
        
        $sqlC = new sqlController();

        $todayDate = date('Y-m-d', time()); 
        $deWort = $_POST['deutschWort'];
        $enWord = $_POST['englihWord'];
        $trKelime = $_POST['turkceKelime'];

        if(isset($_POST['saveSumbit'])){
                $sqlC->sqlQueryDone("INSERT INTO `dictionarytable` (`id`, `dates`, `deutsch`, `english`, `türkçe`) VALUES (NULL, '$todayDate', '$deWort', '$enWord', '$trKelime');");
        }
        else{
                echo "";
        }
        ?>
</body>

</html>