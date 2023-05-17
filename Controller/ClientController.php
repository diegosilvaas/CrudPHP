<?php

include_once 'C:\xampp\htdocs\crudPHP\Model\Conection.php';

Class ClientController 
{
    private $dados;
    private $clientRepository;
}

    public function __construct()
    { 
 
    $this->pegaDadosFormulario();
    $this->clienteRepository = new Cliente();
    }



    
    




