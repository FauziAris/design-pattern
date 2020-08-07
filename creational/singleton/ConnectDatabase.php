<?php

class ConnectDatabase
{
   private static $instance = null;
   private $conn;

   private $host = 'localhost';
   private $username = 'root';
   private $password = '';
   private $databaseName = 'restoran';

   private function __construct()
   {
      $this->conn = new PDO(
         "mysql:host={$this->host};
     dbname={$this->databaseName}",
         $this->username,
         $this->password,
         array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'")
      );
   }

   public static function getInstance()
   {
      if (!self::$instance) {
         self::$instance = new ConnectDatabase();
      }

      return self::$instance;
   }

   public function getConnection()
   {
      return $this->conn;
   }
}
