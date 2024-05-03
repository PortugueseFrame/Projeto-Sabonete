<?php
require 'connection.php';

$svDBName = "projeto_sabonete";

function displayProduct($id_prod) {
    global $svName, $svUsername, $svPassword, $svDBName;

    $newConn = ConnectDB($svName, $svUsername, $svPassword, $svDBName);

    $sqlSearchImg = "SELECT img_prod FROM products WHERE id_prod = '$id_prod'";
    $result = $newConn->query($sqlSearchImg);

    if ($result->num_rows > 0) {
        $img_prod = $result->fetch_assoc();
        echo '<img src="' . $img_prod['img_prod'] . '" id="img' . $id_prod . '">';
    } else {
        echo "0 results";
    }

    $newConn->close();
}
?>


