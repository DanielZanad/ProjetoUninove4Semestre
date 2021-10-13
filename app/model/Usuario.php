<?php

// Definindo namespace
namespace app\model;


class Usuario{

    // Criando atributos
    private $id, $nome, $email, $senha, $cel, $genero, $dataNas;

    // Metodos set
    public function setId($id){
        $this->id = $id;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function setEmail($email){
        $this->email = $email;
    }
    public function setSenha($senha){
        $this->senha = $senha;
    }
    public function setCel($cel){
        $this->cel = $cel;
    }
    public function setGenero($genero){
        $this->genero = $genero;
    }
    public function setDataNas($dataNas){
        $this->dataNas = $dataNas;
    }


    // Metodos get
    public function getId(): int{
        return $this->id;
    }
    public function getNome(): string{
        return $this->nome;
    }
    public function getEmail(): string{
        return $this->email;
    }
    public function getSenha(): string{
        return $this->senha;
    }
    public function getCel(): string{
        return $this->cel;
    }
    public function getGenero(): string{
        return $this->genero;
    }
    public function getDataNas(): string{
        return $this->dataNas;
    }

}

?>