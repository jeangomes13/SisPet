<?php
include_once('funcoes.php');

class cor
{
	private  $codigoCor;
	private  $descricaoCor;

	public function setCodigoCor($codigo)
	{
		$this->codigoCor = $codigo;
	}

	public function setDescricaoCor($nome)
	{
		$this->descricaoCor = $nome;
	}

	public function getCodigoCor()
	{
		return $this->codigoCor;
	}

	public function getDescricaoCor()
	{
		return $this->descricaoCor;
	}

	public function insertCor()
	{
		$conn = conectaBanco();
		$lista = $conn->prepare("insert into cor(CodigoCor, DescricaoCor) values (null,? );");
		$lista->bind_param("s",
		 $this->descricaoCor);
		$lista->execute();
		desconectaBanco($conn);
	}

	public function deleteCor()
	{
		$conn = conectaBanco();
		$lista = $conn->prepare("delete from cor where CodigoCor = ? ;");
		$lista->bind_param("d", $this->codigoCor);
		$lista->execute();
		desconectaBanco($conn);
	}

	public function updateCor()
	{
		$conn = conectaBanco();
		$lista = $conn->prepare("update cor set DescricaoCor = ? where CodigoCor = ? ;");
		$lista->bind_param("sd", $this->descricaoCor,
		$this->codigoCor);
		$lista->execute();
		desconectaBanco($conn);
	}

	public function selectCor()
	{
		$conn = conectaBanco();
		$lista  = $conn->query("Select CodigoCor, DescricaoCor from cor where CodigoCor = " . $this->codigoCor . ";");
		$registro = $lista->fetch_array();
		desconectaBanco($conn);
		return $registro;
	}

	public function selectAllCor()
	{
		$conn = conectaBanco();
		$lista = $conn->query("Select CodigoCor, DescricaoCor from cor order by CodigoCor;");
		desconectaBanco($conn);
		return $lista;
	}
}
