<?php
    include_once('funcoes.php');

    class UF {
        private $CodUf;
        private $DescricaoUF;

        public function setCodUf($nome)
        {
            $this->CodUf = $nome;
        }

        public function getCodUf()
        {
            return $this->CodUf;
        }
        public function setDescricaoUF($nome)
        {
            $this->DescricaoUF = $nome;
        }

        public function getDescricaoUF()
        {
            return $this->DescricaoUF;
        }


        public function insertUF()
        {
            $conn = conectaBanco();
            $lista = $conn->prepare("insert into unidadefederativa (CodUf, SiglaUF) values (null,? );");
            $lista->bind_param("s", $this->DescricaoUF);
            $lista->execute();
            desconectaBanco($conn);
        }

        public function deleteUF()
        {
            $conn = conectaBanco();
            $lista = $conn->prepare("delete from unidadefederativa where CodUf= ? ;");
            $lista->bind_param("d", $this->CodUf);
            $lista->execute();
            desconectaBanco($conn);
        }
        public function updateUF()
        {
            $conn = conectaBanco();
            $lista = $conn->prepare("update unidadefederativa set DescricaoUF = ? where CodUf = ? ;");
            $lista->bind_param("sd",$this->DescricaoUF,$this->CodUf);
            $lista->execute();
            desconectaBanco($conn);
        }
        public function selectUF()
        {
            $conn = conectaBanco();
            $lista = $conn->query("select CodUf, DescricaoUF from unidadefederativa where CodUf = " . $this->CodUf . ";");
            $registro = $lista->fetch_array();
            
            return $registro;


        }
        public function selectAllUF()
        {
            $conn = conectaBanco();
            $lista = $conn->prepare("Select CodUf, DescricaoUF from unidadefederativa order by CodUf;");
            $lista -> execute();
            $resultado = $lista -> get_result();
            desconectaBanco($conn);
            return $resultado;
        }
    }
?>