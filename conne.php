 <?php
        // put your code here
        include("./Connection.php");
        $connection = new Connection("here");
        echo "connection sucesfull ";
        $conn2 = new PDO("mysql:host=localhost:3307;dbname=test2", "root");
        echo " hello this is a test";
        
       
  