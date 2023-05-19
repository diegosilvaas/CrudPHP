<?php

use Diego\CrudPhp\Controller\ClientController;

require_once  '../vendor/autoload.php';
$clientId = $_GET['clientId'];
$clienteController = new ClientController();
$dadosCliente = $clienteController->buscaDadosCliente($clientId);

?>

<form method="post">
    <input value="<?php echo $dadosCliente->nome ?>" type="text" name="nome">
    <input value="<?php echo $dadosCliente->telefone ?>" type="text" name="telefone">
    <input value="<?php echo $dadosCliente->email ?>" type="text" name="email">
    <button type="submit">Salvar alterações</button>
</form>


<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $clienteController->editarCliente($clientId);
    header('Location: ../index.php');
}



?>