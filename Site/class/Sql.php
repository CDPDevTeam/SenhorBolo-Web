<?php

class Sql extends PDO {

    private $conn;

    public function __construct() {

        $this->conn = new PDO("pgsql:host=motty.db.elephantsql.com;port=5432;dbname=vmnrcpwz", "vmnrcpwz", "uN9-oJ2RFBzZF9sEFeHEdQcMNb0EJA2L");

    }

    private function setParameters($statement, $parameters = array()) {

        foreach ($parameters as $key => $value) {

            $this->setParameter($statement, $key, $value);

        }

    }

    private function setParameter($statement, $key, $value){

        $statement->bindValue($key, $value);

    }

    public function query($rawQuery, $params = array()) {

        $stmt = $this->conn->prepare($rawQuery);

        $this->setParameters($stmt, $params);

        $stmt->execute();

        return $stmt;

    }

    public function select($rawQuery, $params = array())
    {

        $stmt = $this->query($rawQuery, $params);
        $this->conn=null;
        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }

}

?>