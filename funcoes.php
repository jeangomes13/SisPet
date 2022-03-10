<?php
	function conectaBanco(){
		$conn = new mysqli('localhost', 'root', '', 'pet_db');
		if ($conn->connect_error) {
			echo "Erro de conexão com o Banco de Dados : " . $conn->connect_error;
			return False;
		}
		return $conn;
	}

	function desconectaBanco($conn){
		mysqli_close($conn);		
	}
?>