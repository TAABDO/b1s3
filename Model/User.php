<?php

include __DIR__ . "/../database/connection.php";

class User {

    private $nom;
    private $email;
    private $password;
    private $adresse;
    private $conn;

    private function setPassword($password) {
       $this->password = password_hash($password, PASSWORD_DEFAULT);
    }
    public function getPassword() {
        return $this->password;
    }

    //  initialize the connection by the Constructor
    public function __construct($nom = '', $email, $password, $adresse = '') {

        $this->nom = $nom;
        $this->email = $email;
        $this->password=$password;
        $this->adresse = $adresse;

        
        
        // Initialize the database connection
        $this->conn = SaidDatabase::connect();
    }
    
    

    public function create() {
        
        $hashedPassword = password_hash($this->password, PASSWORD_DEFAULT);
        $query = "INSERT INTO users (nom,email,password,adresse) VALUES (?,?,?,?)";
        $stmt = $this->conn->prepare($query);

        if (!$stmt) {

            die("Error in query: " . $this->conn->error);
        }

        $stmt->bind_param("ssss", $this->nom, $this->email, $hashedPassword, $this->adresse);
        $stmt->execute();
        $stmt->close();
    }

    public function findUserByEmail(){

    
        $sql = "SELECT * FROM users WHERE email = ?";
    
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("s", $this->email);
        $stmt->execute();
    
        $result = $stmt->get_result();
        $row= $result->fetch_assoc();

      return $row;
    }
   
}
?>
