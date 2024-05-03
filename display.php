<?php
require 'connection.php';

$svDBName = "project_soap";

function displayProduct($id_prod) {
    global $svName, $svUsername, $svPassword, $svDBName;

    $newConn = ConnectDB($svName, $svUsername, $svPassword, $svDBName);

    $sqlSearchImg = "SELECT img FROM products WHERE id = '$id_prod'";
    $result = $newConn->query($sqlSearchImg);

    if ($result->num_rows > 0) {
        $img_prod = $result->fetch_assoc();
        echo '<img src="' . $img_prod['img'] . '" id="img' . $id_prod . '">';
    } else {
        echo "0 results";
    }

    $newConn->close();
}
?>


