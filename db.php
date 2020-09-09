<?php

class Databaseverbinding {
    static public $servername = "localhost";
    static public $username = "root";
    static public $password = "";
    static public $db_name= "automerken";

    static function database_verbinding_maken(){
        $conn = new mysqli(self::$servername, self::$username, self::$password,self::$db_name);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        #echo "Connected successfully";
        return $conn;
    } 
}

function insert_database($automerk,$type){
    $conn= Databaseverbinding::database_verbinding_maken();
    $query= "INSERT INTO automerken(automerk,type) VALUES('$automerk','$type')";
    $result = mysqli_query($conn,$query);
    if (mysqli_connect_error()){
        die("Fout met verbinding");
    }
}

function update($id,$automerk,$type){
    $conn= Databaseverbinding::database_verbinding_maken();
    $query= "UPDATE automerken SET automerk='$automerk', type='$type' WHERE id='$id' ";
    $result = mysqli_query($conn,$query);
    if (mysqli_connect_error()){
        die("Fout met verbinding");
    }
}

function delete($id){
    $conn= Databaseverbinding::database_verbinding_maken();
    $query= "DELETE FROM automerken where id=$id";
    $result = mysqli_query($conn,$query);
    if (mysqli_connect_error()){
        die("Fout met verbinding");
    }
}

?>