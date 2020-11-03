<?php

    $servername = "sql2.freemysqlhosting.net";
    $username = "sql2374210";
    $password = "cJ6%uL8!";
    $dbname = "sql2374210";

$conn= new mysqli($servername,$username,$password,$dbname);

$sql="DELETE FROM `lib_aut_tyt` WHERE `lib_aut_tyt`.`id_autor_tytul` = '".$_POST['ID']."'";



mysqli_query($conn, $sql);

header("Location:index.php");
?>