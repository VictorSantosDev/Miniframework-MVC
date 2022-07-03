<?php
namespace App;

class Connection{

    public static function getDb() {
		try {

			$conn = new \PDO(
                "mysql:host=localhost;dbname=NomeDoBanco;charset=utf8",
                "usuarioDoBanco",
                "senhaDoBanco"
            );

            return $conn;

      } catch (\PDOException $e) {
        //.. tratar ..//
      }
    }
 
} 

?>