<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php
        echo("<h1>Strona 1</h1>");
        session_start();
        var_dump($_SESSION);
        if( isset($_POST['haslo']) && $_POST['haslo'] =="a" ){
            $_SESSION['zalogowany'] = 1;
        }
        if( isset($_SESSION['zalogowany']) && $_SESSION['zalogowany'] == 1 ){
            echo("<br>Zalogowano");
            echo("<h1>Strona 1</h1>");
            echo("<br><a href='logowanie.php?akcja=wyloguj'>Wyloguj</a>");
        }else{
            echo("<br>Zaloguj Ponownie");
        }
        echo("
            <h3>Menu</h3>
        <ul>
            <li><a href='logowanie.php'>logowanie.php</a>
            <li><a class='menu' href='plik1.php'>Strona 1</a>
            <li><a class='menu' href='plik2.php'>Strona 2</a>
        </ul>
        ")
    ?>
</body>
</html>