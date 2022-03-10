<?php
include_once('funcoes.php');

class tipoAnimal
{
    private $codigoTipoAnimal;
    private $descricaoTipoAnimal;

    public function setCodigoTipoAnimal($nome)
    {
        $this->codigoTipoAnimal = $nome;
    }

    public function getCodigoTipoAnimal()
    {
        $this->codigoTipoAnimal;
    }
    public function setDescricaoTipoAnimal($nome)
    {
        $this->descricaoTipoAnimal = $nome;
    }

    public function getDescricaoTipoAnimal()
    {
        $this->descricaoTipoAnimal;
    }


    public function insertTipoAnimal()
    {
        $conn = conectaBanco();
        $lista = $conn->prepare("insert into tipoanimal(CodigoTipoAnimal, DescricaoTipoAnimal) values (null,? );");
        $lista->bind_param("s", $this->descricaoTipoAnimal);
        $lista->execute();
        desconectaBanco($conn);
    }

    public function deleteTipoAnimal()
    {
        $conn = conectaBanco();
        $lista = $conn->prepare("delete from tipoanimal where CodigoTipoAnimal = ? ;");
        $lista->bind_param("d", $this->codigoTipoAnimal);
        $lista->execute();
        desconectaBanco($conn);
    }
    public function updateTipoAnimal()
    {
        $conn = conectaBanco();
        $lista = $conn->prepare("update tipoanimal set DescricaoTipoAnimal = ? where CodigoTipoAnimal = ? ;");
        $lista->bind_param(
            "sd",
            $this->descricaoTipoAnimal,
            $this->codigoTipoAnimal
        );
        $lista->execute();
        desconectaBanco($conn);
    }
    public function selectTipoAnimal()
    {
        $conn = conectaBanco();
        $lista = $conn->query("select CodigoTipoAnimal, DescricaoTipoAnimal from tipoanimal where " . $this->codigoTipoAnimal . ";");
        $registro = $lista->fetch_array();
        return $registro;


    }
    public function selectAllTipoAnimal()
    {
        $conn = conectaBanco();
        $lista = $conn->query("Select CodigoTipoAnimal, DescricaoTipoAnimal from tipoanimal order by CodigoTipoAnimal;");
        desconectaBanco($conn);
        return $lista;
    }
}
