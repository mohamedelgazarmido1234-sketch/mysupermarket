<?php
  namespace App;

  use mysqli;


  class Database{

  private string $username='root';

  private string $host='localhost';

  private string $password='';

  private string $database='supermarket';
    public mysqli $connect;


   public function __construct()
   {
    $this->connect = new mysqli(
      $this->host,
      $this->username,
      $this->password,
      $this->database,
    );
   } 
   public function check():void{

   if($this->connect->connect_error == null)
    {

    } else { echo " Database failed";}
   }

    
  }

  
?>