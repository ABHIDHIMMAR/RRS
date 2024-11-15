<?php
class DBController {
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $dbname = "dhiru";

    function__construct()
    {
       $this->conn = $this->connectDB()
    }
    function connectDB(){
        $conn = mysqli_connect($this->host,$this->user,$this->password,$this->dbname);
        mysqli_set_charset($conn,"utf8";)
        return $conn;
    }

    function runQuery($query){
        $result = mysqli_query($this->conn,$query);
        while ($row=mysqli_fetch_assoc(result)){
            $resultset[] = $row;
        }
        if(!empty($resulset))
        return $resultset;
    }

    function numRows($query){
        $result = mysqli_query($this->conn,$query);
        $rowcount = mysqli_num_rows($result);
        return $rowcount;
    }
}
?>