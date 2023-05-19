<?php

require_once __DIR__ . '/vendor/autoload.php';

use Diego\CrudPhp\Controller\ClientController;

$clienteController = new ClientController;
?>

<form method="post">
    <input type="text" name="nome">
    <input type="text" name="telefone">
    <input type="text" name="email">
    <input type="submit" name="Enviar">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $clienteController->armazenar();
}

$fetchClientes = $clienteController->listarClientes();

foreach ($fetchClientes as $key => $value) {
    echo '<a href="views/editar.php?clientId=' . $value['id'] . '">(editar)<a/>' . '<a href="?delete=' . $value['id'] . '">.(x)<a/>' . $value['nome'] . ' | ' . $value['telefone'] . ' | ' . $value['email'];
    echo '<hr>';
}

if (isset($_GET['delete'])) {
    $clientId = $_GET['delete'];
    $clienteController->deletarCliente($clientId);
    header('Location: index.php');
}

?>