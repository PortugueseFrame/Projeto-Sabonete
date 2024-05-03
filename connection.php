<?php

$svName = "localhost";
$svUsername = "root";
$svPassword = "";

function ConnectDB($Name, $Username, $Password, $DBName) {
    $conn = new mysqli($Name, $Username, $Password, $DBName);

    if ($conn->connect_error) {
        echo "<script>alert('Conexão não conseguida com o servidor!' + mysqli_connect_error());</script>";
        return false;
    }

    return $conn;
}

?>