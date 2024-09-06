<?php

include_once 'Database.php';

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

    function cadastrar() {
        $db = Database::getInstance();
        $conn = $db->connect();

        //Preparar a consulta SQL
        $stmt = $conn->prepare("INSERT INTO empresa (nome, cnpj, endereco, telefone) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $this->nome, $this->cnpj, $this->endereco, $this->telefone);

        //Executa a consulta SQL
        if ($stmt->execute()) {
            $stmt->close();
            $db->closeConnection();
            return true;
        }else {
            $stmt->close();
            $db->closeConnection();
            return false;
        }
    }

    function atualizar(){
        $db = Database::getInstance();
        $conn = $db->connect();

        //Preparar a consulta SQL
        $stmt = $conn->prepare("UPDATE empresa SET (nome = ?, cnpj = ?, endereco = ?, telefone = ?) WHERE id = ?");
        $stmt->bind_param("ssssi", $this->nome, $this->cnpj, $this->endereco, $this->telefone);

        //Executa a consulta SQL
        if ($stmt->execute()) {
            $stmt->close();
            $db->closeConnection();
            return true;
        }else {
            $stmt->close();
            $db->closeConnection();
            return false;
        }
    }

    function apagar(){
        $db = Database::getInstance();
        $conn = $db->connect();

        //Preparar a consulta SQL
        $stmt = $conn->prepare("DELETE FROM empresa WHERE id= ?");
        $stmt->bind_param("i", $this->id);

        //Executa a consulta SQL
        if ($stmt->execute()) {
            $stmt->close();
            $db->closeConnection();
            return true;
        }else {
            $stmt->close();
            $db->closeConnection();
            return false;
        }
    }

}