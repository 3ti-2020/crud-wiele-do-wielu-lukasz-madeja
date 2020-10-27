<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Bilbioteka Łukasz Madeja</title>
</head>
<body>
    <div class="grid">
        <div class="item a">
                <a class="logo" href="index.php"><img src="img/logo.png" width="200px" height="200px"></a>
        </div>
        <div class="item b">
                    <?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "library";

                    $conn = new mysqli($servername, $username, $password, $dbname);


                    $result1 = $conn->query("SELECT id_book, autor, tytul FROM library_book, library_autor, library_tytul WHERE library_book.id_autor=library_autor.id_autor AND library_book.id_tytul=library_tytul.id_tytul");

                    echo("<table class='tabelka2' border=1");
                    echo("<tr>
                    <th>ID Książki</th>
                    <th>Autor</th>
                    <th>Tytuł</th>
                    </tr>");

                    while($row=$result1->fetch_assoc() ){
                        echo("<tr>");
                        echo("<td>".$row['id_book']."</td>");
                        echo("<td>".$row['autor']."</td>");
                        echo("<td>".$row['tytul']."</td>");
                        echo("</tr>");
                    }
                    echo("</table>");
                ?>
        </div>
        <div class="item c"></div>
        <div class="item d"></div>
    </div> 
</body>
</html>