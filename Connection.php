<?php

class Connection {
    private string $databaseName;
    private string $userName;
    
    function __construct(string $databaseName, string $userName){
        $this->databaseName = $databaseName;
        $this->userName = $userName;
    }
    
    function openConnection(){
        try{
            $con = new PDO("mysql:host=localhost:3307;dbname=$this->databaseName", $this->userName);
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "connect";
            return $con;
        } catch (PDOException $pdoe) {
            echo "no connect";
        }
    }
    
    function closeConnection(PDO $conn){
        $conn = null;
        echo "connection close";
    }
    
    
    
}

$Connection1 = new Connection("test2","root");
$openCon = $Connection1->openConnection();
$Connection1->closeConnection($openCon);
echo "all sucesfull created" + "cadenas";
?>