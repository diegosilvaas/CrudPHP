<?php

$pdo = new PDO('mysql:host=localhost;dbname=crud', 'root', '');

//insert  
if (isset($_POST['nome'])) {
    $sql = $pdo->prepare("INSERT INTO clientes VALUES (null,?,?)");
    $sql->execute(array($_POST['nome'], $_POST['email']));
    echo 'inserido com sucesso!';
}
?>

<form method="post">
    <input type="text" name="nome">
    <input type="text" name="email">
    <input type="submit" name="Enviar">



</form>