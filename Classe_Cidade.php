<?php
    include_once('funcoes.php');
    
    class Cidade {
    //atributos
        private int $codigoCidade;
        private string $nomeCidade;
        private string $codUf;

        public function __construct($cod=0, $desc='', $codUf=0) {
            $this->codigoCidade = $cod;
            $this->nomeCidade = $desc;
            $this->codUf = $codUf;
        }
    // Métodos Get e Set
        public function setcodigoCidade($cod){
            $this->codigoCidade = $cod;
        }
        public function getcodigoCidade() {
            return $this->codigoCidade;
        }
        public function setNomeCidade($desc){
            $this->nomeCidade = $desc;
        }
        public function getNomeCidade() {
            return $this->nomeCidade;
        }
        public function setCodUf($codUf) {
            $this->codUf = $codUf;
        }
        public function getCodUf() {
            return $this->codUf;
        }
// Métodos de Manipulação de Banco de Dados
        public function insertCidade() {
            $conn = conectaBanco();
            $comando = $conn->prepare('Insert into Cidade values (null, ?, ?);');
            $comando->bind_param("ss", $this->nomeCidade,$this->codUf);
            $comando->execute();
            desconectaBanco($conn);
        } 
        public function deleteCidade() {
            $conn = conectaBanco();
            $comando = $conn->prepare('Delete from Cidade where CodigoCidade = ?;');
            $comando->bind_param("d", $this->codigoCidade);
            $comando->execute();
            desconectaBanco($conn);
        }
        public function updateCidade() {
            $conn = conectaBanco();
            $comando = $conn->prepare('update Cidade set NomeCidade = ?, UnidadeFederativa_CodUf = ? where CodigoCidade = ?;');
            $comando->bind_param("sdd", $this->nomeCidade, $this->codUf, $this->codigoCidade);
            $comando->execute();
            desconectaBanco($conn);
        }
        public function selectAllCidade() {
            $conn = conectaBanco();
            $comando = $conn->prepare('Select c.CodigoCidade, c.NomeCidade, u.SiglaUF from Cidade c inner join UnidadeFederativa u on c.UnidadeFederativa_CodUf = u.CodUf;');
            $comando->execute();
            $registros = $comando->get_result();
            desconectaBanco($conn);
            return $registros;
        }
        public function selectCidade() {
            $conn = conectaBanco();
            $comando = $conn->prepare('Select c.CodigoCidade, c.NomeCidade, u.SiglaUF from Cidade '.
             'c inner join UnidadeFederativa u on c.UnidadeFederativa_CodUf = u.CodUf where CodigoCidade = ?');
            $comando->bind_param("d", $this->codigoCidade);
            $comando->execute();
            $registros = $comando->get_result();
            return $registros->fetch_array();
        }
    }
?>