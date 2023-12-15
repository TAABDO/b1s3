<?php

require __DIR__ . '/../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

// class Database{

//     private $servername;
//     private $username;
//     private $password;
//     private $dbname;
//     private static $conn;

// public function __construct(){

//    $this->servername =$_ENV['DB_HOST'];
//    $this->username =$_ENV['DB_USER'];
//    $this->password =$_ENV['DB_PASSWORD'];
//    $this->dbname =$_ENV['DB_NAME'];
//    self::$conn = mysqli_connect($this->servername,$this->username,$this->password, $this->dbname);

// }

// }
// $db = new Database();



class SaidDatabase{

    public static function connect(){
   
     
        $conn = mysqli_connect($_ENV['DB_HOST'],$_ENV['DB_USER'],$_ENV['DB_PASSWORD'],$_ENV['DB_NAME']);
        if($conn->connect_error){

            die('somthing wrong');
        }else{
            echo 'good';
        }

        return $conn;
           
    }
   }
   $db = SaidDatabase::connect();


?>