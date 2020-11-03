<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php
            session_start();
            var_dump($_SESSION);
            if( isset($_GET['akcja']) && $_GET['akcja'] =='wyloguj' ){
                unset($_SESSION['zalogowany']);
            }
            if( !isset($_SESSION['zalogowany']) ){
        ?>        
            <form action="plik1.php" method="post">
                <input type="text" name="login" placeholder="login">
                <input type="text" name="haslo" placeholder="haslo">
                <input type="submit" value="zaloguj">
            </form>
        <?php
            }else{
                echo("<li>ZALOGOWANY");
                echo("<br><a href='logowanie.php?akcja=wyloguj'>WYLOGUJ</a>");
            }
        ?>
    <h3>MENU</h3>
    <ul>
        <li><a href="logowanie.php">LOGOWANIE.php</a>
        <li><a href="plik1.php">PLIK 1</a>
        <li><a href="plik2.php">PLIK 2</a>
    </ul>
</body>
</html>