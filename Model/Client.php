<?php

class Client
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



public function __construct()
    {
        $this->db = Conection::getDb();
    }

    public function cadastrarCliente()
    {
        $sql = "INSERT INTO clientes(
            nome,
            telefone,
            email
    ) VALUES (?, ?, ?, ?)";  
    $stmt = $this->db->prepare($sql);  
    $stmt->bindValue(1, $this->getNome());
    $stmt->bindValue(2, $this->getTelefone());
    $stmt->bindValue(3, $this->getEmail()); 
    
    $stmt->execute();
    }

    public function listarClientes()
    {
        $sql = 'select * from clientes';
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }

    public function visualizarCliente($id)
    {
        $sql = 'select * from clientes where id = ?';
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_OBJ);
        return $result;

    }

    public function editarCliente($id)
    {
        $sql = 'select * from clientes where id = ?';
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_OBJ);
        return $result;
    }

    public function deletarCliente($id)
    {
        $sql = 'select * from clientes where id = ?';
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_OBJ);
        return $result;
}
