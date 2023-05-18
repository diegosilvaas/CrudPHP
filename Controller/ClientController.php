<?php

include_once 'C:\xampp\htdocs\crudPHP\Model\Conection.php';

include_once 'C:\xampp\htdocs\crudPHP\Model\Client.php';

Class ClientController 
{
    private $dados;
    private $clientRepository;

    public function __construct()
    { 
        // $this->pegaDadosFormulario(); comentar esse mestodo a principio
        $this->clientRepository = new Client(); 
    }
}



    
    




