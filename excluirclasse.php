<?php

include_once('funcoes.php'); //Quase verificado

class raca
{
    private  $codigoRacaAnimal;
    private  $descricaoRacaAnimal;

    public function setCodigoRacaAnimal($codigo)
    {
        $this->codigoRacaAnimal = $codigo;
    }

    public function getCodigoRacaAnimal()
    {
        return $this->codigoRacaAnimal;
    }

    public function setDescricaoRacaAnimal($nome)
    {
        $this->descricaoRacaAnimal = $nome;
    }

    public function getDescricaoRacaAnimal()
    {
        return $this->descricaoRacaAnimal;
    }

    public function insertRacaAnimal()
    {
        $conn = conectaBanco();
        $lista = $conn->prepare("insert into racaanimal(CodigoRacaAnimal, DescricaoRacaAnimal) values (null,? );");
        $lista->bind_param("s", $this->descricaoRacaAnimal);
        $lista->execute();
        desconectaBanco($conn);
    }

    public function deleteRacaAnimal()
    {
        $conn = conectaBanco();
        $lista = $conn->prepare("delete from racaanimal where CodigoRacaAnimal = ? ;");
        $lista->bind_param("d", $this->codigoRacaAnimal);
        $lista->execute();
        desconectaBanco($conn);
    }

    public function updateRacaAnimal()
    {
        $conn = conectaBanco();
        $lista = $conn->prepare("update racaanimal set DescricaoRacaAnimal = ? where CodigoRacaAnimal = ? ;");
        $lista->bind_param("sd", $this->descricaoRacaAnimal, $this->codigoRacaAnimal);
        $lista->execute();
        desconectaBanco($conn);
    }

    public function selectRacaAnimal()
    {
        //$conn = new mysqli('localhost', 'root', '', 'pet_db');
        $conn = conectaBanco();
        $lista  = $conn->query("Select CodigoRacaAnimal, DescricaoRacaAnimal from racaanimal where CodigoRacaAnimal = " . $this->codigoRacaAnimal . ";");
        $registro = $lista->fetch_array();
        desconectaBanco($conn);
        return $registro;
    }

    public function selectAllRacaAnimal()
    {
        $conn = conectaBanco();
        $lista = $conn->query("Select CodigoRacaAnimal, DescricaoRacaAnimal from racaanimal order by CodigoRacaAnimal;");
        desconectaBanco($conn);
        return $lista;
    } //criar função selectcount()...
}
