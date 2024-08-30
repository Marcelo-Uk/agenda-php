<?php

class Empresa {

    private $id;
    private $nome;
    private $cnpj;
    private $endereco;
    private $telefone;

    function __construct($nome, $cnpj, $endereco, $telefone) {
        $this->nome = $nome;
        $this->cnpj = $cnpj;
        $this->endereco = $endereco;
        $this->telefone = $telefone;
    }
    
    //Getter and Setters 
    function getId() {
        return $this->id;
    }
    
    function getNome() {
        return $this->nome;
    }

    function getCnpj() {
        return $this->cnpj;
    }

    function getEndereco() {
        return $this->endereco;
    }

    function getTelefone() {
        return $this->telefone;
    }
    
    function setNome() {
        $this->setNome();
    }

    function setCnpj() {
        $this->setCnpj();
    }

    function setEndereco() {
        $this->setEndereco();
    }

    function setTelefone() {
        $this->setTelefone();
    }

}