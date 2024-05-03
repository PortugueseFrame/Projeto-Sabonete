<?php

require 'connection.php';

$svDBName = "project_soap";
$newConn = ConnectDB($svName, $svUsername, $svPassword, $svDBName);

$formData = json_decode(file_get_contents("php://input"));

$nameForm = $newConn->real_escape_string($formData->nameForm);
$emailForm = $newConn->real_escape_string($formData->emailForm);
$telForm = $newConn->real_escape_string($formData->telForm);
$msgForm = $newConn->real_escape_string($formData->msgForm);

$sqlRegMessage = "INSERT INTO formAnswers (username, email, phone, answer) VALUES (?, ?, ?, ?)";

$formquery = $newConn->prepare($sqlRegMessage);

$formquery->bind_param("ssss", $nameForm, $emailForm, $telForm, $msgForm);
$formquery->execute();
$formquery->close();

$newConn->close();

?>
