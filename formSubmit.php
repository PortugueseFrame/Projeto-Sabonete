<?php

require 'connection.php';

$svDBName = "projeto_sabonete";
$newConn = ConnectDB($svName, $svUsername, $svPassword, $svDBName);

$formData = json_decode(file_get_contents("php://input"));

$nameForm = $formData->nameForm;
$emailForm = $formData->emailForm;
$telForm = $formData->telForm;
$msgForm = $formData->msgForm;

$sqlRegMessage = "INSERT INTO formAnswers (username, email, phone, answer) VALUES ('$nameForm', '$emailForm', '$telForm', '$msgForm')";

$newConn->query($sqlRegMessage);
$newConn->close();

?>