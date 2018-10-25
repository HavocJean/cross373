<?php
class Conexao{

    protected $db;  
	
    public function __construct() {
        try {
			$this->db = new PDO("mysql:dbname=cross373;host=localhost;charset=utf8;port:3306","root","");
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            echo $e->getMessage();
            die();
        }
    }
}

