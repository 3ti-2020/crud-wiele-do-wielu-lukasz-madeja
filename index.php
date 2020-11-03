<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Łukasz Madeja</title>
</head>
<body>
    <div class="grid">
        <div class="item a">
        <h1>Łukasz Madeja</h1>
        </div>
        <div class="item b">
        <?php

            $servername = "sql2.freemysqlhosting.net";
            $username = "sql2374210";
            $password = "cJ6%uL8!";
            $dbname = "sql2374210";


            $conn = new mysqli($servername, $username, $password, $dbname);

            $result = $conn->query("SELECT id_autor_tytul, name, tytul FROM lib_autor, lib_tyt, lib_aut_tyt where lib_aut_tyt.id_autor=lib_autor.id_autor and lib_aut_tyt.id_tytul = lib_tyt.id_tytul  ");



            echo("<table class='table'>");
            echo("<tr class='tr'>
            <th class='th'>ID</th>
            <th class='th'>Nazwisko</th>
            <th class='th'>Tytul</th>
            <th class='th'>Usuń</th>
            </tr>");




            while($row=$result->fetch_assoc()){
                
                echo("<tr class='tr'>");
                echo("<td class='td'>".$row['id_autor_tytul']."</td>");
                echo("<td class='td'>".$row['name']."</td>");
                echo("<td class='td'>".$row['tytul']."</td>");
                echo("<td class='td'>  <form class='form' action='delete.php' method='POST'>
                <input class='text' type='hidden' name='ID' value='$row[id_autor_tytul]' placeholder='ID'></br>
                <input class='buttona' type='submit' value='Usun'> </td>");
                
                echo("</tr>");
            }
                


            echo("</table>");





?>
        </div>
        <div class="item c">
        <a class="menu" href="logowanie.php">Zaloguj</a> 
        <a href="cards.html" class="menu">Cards</a>
        </div>
        <div class="item d">
        <form class="form" action="insert.php" method="POST">
            <input class="text" type="text" name="nazwisko" placeholder="Nazwisko"></br>
            <input class="text" type="text" name="tytul" placeholder="Tytul"></br>
            <input class="button" type="submit" value="Dodaj">
        </form>
        </div>
    </div>
</body>
</html>