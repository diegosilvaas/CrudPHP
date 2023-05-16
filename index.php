<?php

$pdo = new PDO('mysql:host=localhost;dbname=crud', 'root', '');

//insert  
if (isset($_POST['nome'])) {
    $sql = $pdo->prepare("INSERT INTO clientes VALUES (null,?,?)");
    $sql->execute(array($_POST['nome'], $_POST['telefone'], $_POST['email']));
    echo 'inserido com sucesso!';
}
?>

<form method="post">
    <input type="text" name="nome">
    <input type="text" name="telefone">
    <input type="text" name="email">
    <input type="submit" name="Enviar">
</form>

// Mostrar na tela

<?php
    $sql = $pdo->prepare("SELECT * FROM clientes");
    $sql->execute();

    $fetchClientes = $sql->fetchAll();

    foreach ($fetchClientes as $key => $value) {
        echo $value['nome']. ' | '.$value['telefone']. ' | '.$value['email'];
        echo '<hr>';
    }
    

?>