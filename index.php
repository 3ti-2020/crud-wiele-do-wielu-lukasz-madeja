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
        <div class="item b"><?php
                     $servername = "sql2.freemysqlhosting.net";
                     $username = "sql2374210";
                     $password = "cJ6%uL8!";
                     $dbname = "sql2374210";

                    $conn = new mysqli($servername, $username, $password, $dbname);


                    $result1 = $conn->query("SELECT id_book, autor, tytul FROM library_book, library_autor, library_tytul WHERE library_book.id_autor=library_autor.id_autor AND library_book.id_tytul=library_tytul.id_tytul");

                    echo("<table class='tabelka2' border=1");
                    echo("<tr>
                    <th>ID Książki</th>
                    <th>Autor</th>
                    <th>Tytuł</th>
                    <th>Usuwanie</th>
                    </tr>");

                    while($row=$result1->fetch_assoc() ){
                        echo("<tr>");
                        echo("<td>".$row['id_book']."</td>");
                        echo("<td>".$row['autor']."</td>");
                        echo("<td>".$row['tytul']."</td>");
                        echo("<td>
                                <form action='delete3.php' method='post'>
                                    <input type='hidden' name='id' value='".$row['id_book']."'>
                                    <input type='submit' value='x'>
                                </form>
                            </td>");
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