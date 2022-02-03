<?php 

class SQL extends PDO { //busca as propriedades da classe PDO 

	private $conn;

	public function __construct() { //conecta automaticamente no banco de dados

		$this->conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

	}

	private function setParams($parameters = array()){

		foreach ($parameters as $key => $value) {
			
			$this->setParam($key, $value); // setParam - metodo criado abaixo 

		}

	}


	private function setParam($statment, $key, $value){ // comando SQL 

			$statment->bindParam($key, $value);

	}

	public function query($rawQuery, $params = array()){

		$stmt = $this->conn->prepare($rawQuery);

		$this->setParams($stmt, $params); 

		$stmt->execute();

		return $stmt;

	}

	public function select($rawQuery, $params = array()):array {

		$stmt = $this->query($rawQuery, $params);

		return $stmt->fetchAll(PDO::FETCH_ASSOC); 

	}

}


?>