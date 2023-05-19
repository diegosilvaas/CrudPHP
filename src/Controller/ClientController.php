<?php

namespace Diego\CrudPhp\Controller;

use Diego\CrudPhp\Model\Client;

class ClientController
{
    private $dados;
    private $clienteRepository;

    public function __construct()
    {
        $this->pegaDadosFormulario();
        $this->clienteRepository = new Client();
    }

    public function armazenar()
    {
        $this->clienteRepository->setNome($this->dados['nome']);
        $this->clienteRepository->setTelefone($this->dados['telefone']);
        $this->clienteRepository->setEmail($this->dados['email']);
        $this->clienteRepository->cadastrarCliente();
        return true;
    }

    private function pegaDadosFormulario()
    {
        if (!empty($_POST)) {
            $this->dados = $_POST;
            return;
        }

        $this->dados = [];
    }

    public function listarClientes()
    {
        return $this->clienteRepository->listarClientes();
    }

    public function buscaDadosCliente($id)
    {
        return $this->clienteRepository->buscaDadosCliente($id);
    }

    public function editarCliente($id)
    {

        $this->clienteRepository->setNome($this->dados['nome']);
        $this->clienteRepository->setTelefone($this->dados['telefone']);
        $this->clienteRepository->setEmail($this->dados['email']);
        $this->clienteRepository->editarCliente($id);
    }
    public function deletarCliente($id)
    {
        return $this->clienteRepository->deletarCliente($id);
    }
}
