<?php

class Connection {
    private string $databaseName;
    private string $userName;
    
    function __construct(string $databaseName, string $userName){
        $this->databaseName = $databaseName;
        $this->userName = $userName;
        echo "created Connection";
    }
    
    private function openConnection(){
        try{
            $con = new PDO("mysql:host=localhost:3307;dbname=$this->databaseName", $this->userName);
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "connect";
            return $con;
        } catch (PDOException $pdoe) {
            echo "no connect";
        }
        
  
    }
    
    private function closeConnection(PDO $conn){
        $conn = null;
        echo "connection close";
    } 
    
    function insertIntoUsuarios($NOMBREINSERT,$APELLIDOINSERT,$DIRECCIONINSERT,$TELEFONOINSERT,$CONTRASENAINSERT,$EMAILINSERT){
        try{
        $conn = $this->openConnection();
        $query = "INSERT INTO USUARIOS (ID,NOMBRE,APELLIDO,DIRECCION,TELEFONO,CONTRASEÑA,EMAIl) VALUES (1,:NOMBRE,:APEELLIDO,:DIRECCION,:TELEFONO,:CONTRASENA,:EMAIL);";
        $stm = $conn->prepare("INSERT INTO USUARIOS (NOMBRE,APELLIDO,DIRECCION,TELEFONO,CONTRASEÑA,EMAIl) VALUES (?,?,?,?,?,?)");
        $NOMBRE = $NOMBREINSERT;
        $APELLIDO = $APELLIDOINSERT;
        $DIRECCION = $DIRECCIONINSERT;
        $TELEFONO = $TELEFONOINSERT;
        $CONTRASENA = $CONTRASENAINSERT;
        $EMAIL = $EMAILINSERT;
        $stm->bindParam(1, $NOMBRE);
        $stm->bindParam(2,$APELLIDO);
        $stm->bindParam(3,$DIRECCION);
        $stm->bindParam(4,$TELEFONO);
        $stm->bindParam(5,$CONTRASENA);
        $stm->bindParam(6,$EMAIL);
        echo "here";
        $stm->execute();
        $this->closeConnection($conn);
        echo "INSERT INTO CORRECT";
        return 1;
        } catch(PDOException $e){
            echo  $e->getMessage();
            return 0;
        }
    }
    

    function checkUser(string $user,string $passsword){
        try{
        $con = $this->openConnection();
        $query = "SELECT NOMBRE FROM USUARIOS WHERE NOMBRE = ? AND CONTRASEÑA = ?";
        $stm = $con->prepare($query);
        $USUARIO = $user;
        $CONTRASENA = $passsword;
        $stm->bindParam(1,$USUARIO);
        $stm->bindParam(2,$CONTRASENA);
        $stm->execute();
        $res = $stm->rowCount();
        if($res > 0){
            
            echo '<a class="w3-button w3-black" href="newhtml.html">next</a>';
            return true;
        }
        else{
            echo "false";
            echo '<a class="w3-button w3-black w3-disabled" href="#">Next</a>';
            return false;
        }
        } catch(PDOException $pdoe){
            echo "error";
            return false;
        }
        
           
    }
    
    function rastrear(int $id){
        try{
            $con = $this->openConnection();
            $query = "SELECT ESTADO FROM PAQUETE WHERE ID = ?";
            $stm = $con->prepare($query);
            $ID = $id;
            $stm->bindParam(1,$ID);
            $stm->execute();
            if($stm->rowCount() > 0){
                $res = $stm->fetch();
                if($res["ESTADO"] == 0){
                    echo "estado 1";
                }
                else{
                    if($res["ESTADO"] == 1){
                        echo "estado 2";
                    }
                    else{
                        if($res["ESTADO"] == 2){
                            echo "estado 3";
                        }
                        else{
                            echo "estado 4";
                        }
                    }
                }
            }
            else{
                echo " < 0";
            }
            
        } catch (PDOException $ex) {
            echo "error";
        }
    }
    
    
    
}

?>
