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
                public $serverbane = "";
                public$servername = "localhost";
                public$username = "root";
                public$password = "";
                public$dbname = "dictionarydb";
                public $conn = new mysqli($servername, $username, $password, $dbname);
                function sqlQueryDone($sql){
                        
                        if(($this -> conn) -> connect_error){
                         die("Fehler beim Herstellen einer Verbindung./Error to connect./Bağlantı hatası.");
                        }
         
                        
         
                 }
        }
        $sqlC = new sqlController();
        if(isset($_POST['saveSumbit'])){
                $sqlC->sqlQueryDone("");
        }
        else{
                echo "";
        }
        ?>
</body>

</html>