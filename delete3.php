<?php
    $servername = "sql2.freemysqlhosting.net";
    $username = "sql2374210";
    $password = "cJ6%uL8!";
    $dbname = "sql2374210";
    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql = "DELETE FROM `library_book` WHERE id_book=".$_POST['id']." "; 
    mysqli_query($conn, $sql);
    header("Location:index.php");

?>