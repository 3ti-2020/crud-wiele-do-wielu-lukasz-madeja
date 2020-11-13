<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="grid">
        <div class="item a1">
        <h2 class="tytul">Strona główna po zalogowaniu</h2>
        </div>
        <div class="item a">
            <a class="menu" href="startowa.html">Wyloguj</a>
            <a class="menu" href="cards.html">Karty</a>
            <a class="menu" href="https://github.com/maddking1337/bibliotekalistopad2020">Github</a>
        </div>
        <div class="item b">
            <a class="menu" href="#">Dodawanie książek</a>
            <a class="menu" href="#">Dodawanie autora</a>
    
        </div>
        <div class="item c">
            <?php 
            $servername = 'mysql-vokun.alwaysdata.net';
            $username = 'vokun';
            $password = 'bazadanych';
            $dbname = 'vokun_baza';

            $conn = new mysqli($servername, $username, $password,$dbname);
            $result = $conn->query("SELECT `id_autor_tytul`,`name`, `tytul` FROM lib_tyt, lib_aut_tyt, lib_autor where lib_autor.id_autor = lib_aut_tyt.id_autor and lib_tyt.id_tytul = lib_aut_tyt.id_tytul");
            echo("<table class='tabela' border 1>");
            echo("<tr>
            <th></th></tr>");

            while($row = $result->fetch_assoc()){
                echo("<tr>");
                echo("<td>".$row['name']."</td>");
                echo("<td>".$row['tytul']."</td>");
                echo("<td><form action='delete.php' method='POST'>
                            <input type='hidden' name='ID' value='$row[id_autor_tytul]' placeholder='ID'>
                            <input type='submit' value='Usun'> 
                        </form>
                    </td>");

                echo("</tr>");
            }

            echo("</table>");
            ?>
        </div>
        <div class="item d">
                <form action="insert.php" method="POST">
                <input type="text" name="name" placeholder="Autor" >
                <input type="text" name="tytul" placeholder="Tytul" >
                <input type="submit" value="Dodaj">
                </form>
        </div>
        <div class="item e">
            <h6>Wykonał Łukasz Madeja</h6>
        </div>
    </div>
</body>
</html>