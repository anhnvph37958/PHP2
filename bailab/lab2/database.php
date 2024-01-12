<?php 
namespace Core; 

use mysqli;

class Database{

    public function __construct(){
        $severname = "localhost";
        $username = "root";
        $password ="";

        $conn = new mysqli($severname,$username,$password);
        if(!$conn){
            die ("Connection failed: ". $conn->connect_error());

        }
        echo "Connected successfully";

    }
    public function HelloWorld(){
        echo "Hello World";
    }
}

?>