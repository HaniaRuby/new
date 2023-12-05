<?php

class DBControllers{
    // Connect to the database
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $database = "mythe";
    public $connect;


    public function connectDB(){
        $this->connect = new mysqli($this->host, $this->user, $this->password, $this->database);
        if($this->connect->connect_error){
            echo"error in connection".$this->connect->connect_error;
            return false;
        }
        else return true;
    }

    public function closeConn(){
        if($this->connect){
            $this->connect->close();
        }
        else echo"connection is not oppend";
    }


    public function select($query) {
        $result = $this->connect->query($query);
    
        if (!$result) {
            echo "Error: " . $this->connect->error;
            return false;
        } else {
            $data = [];
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            return $data;
        }
    }
    

public function selec($sql){
    $result = $this->connect->query($sql);
    if($result!=false)
    if ($result !== false) {
        return $result;
    } else {
        echo "Error: " . mysqli_error($this->connect);
        return false;
    }
}
public function inser($sql){
    $result = $this->connect->query($sql);
    if($result!=false)
    if ($result !== false) {
        return $result;
    } else {
        echo "Error: " . mysqli_error($this->connect);
        return false;
    }
}

  

    
    public function insert($query){
        $result=mysqli_query($this->connect,$query);
        //$this->connect->query($query);
        if(!$result){
            echo"Error:".mysqli_error($this->connect);
            return false;
        }
        else{
            return $result;//->fetch_all(MYSQLI_ASSOC);
        }
        
    }
}

?>