<?php

include_once 'C:\xampp\htdocs\crudPHP\Model\Conection.php';

class Cliente
{
    private $db;
    private $nome;
    private $telefone;
    private $email;
   
}

public function getNome()
{
    return $this->nome;
}

public function setNome($nome)
{
    $this->nome = $nome;
        return $this;
}

public function getTelefone() 
{
    return $this->telefone;
}

public function setTelefone($telefone)
{
    $this->telefone = $telefone;
    return $this;
}

public function getEmail() 
{
    return $this->email;
}

public function setEmail($email)
{
    $this->email = $email;
    return $this;
}
