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
    
    function insertIntoPaquete($PESOINSERT,$LONGITUDINSERT,$VALOR_DECLARADOINSERT,$NOMBRE_DESTINOINSERT,$TELEFONO_DESTINOINSERT,$FECHA_ENVIOINSERT,$TIPO_PRODUCTOINSERT,$METODO_PAGOINSERT){
        try{
        $conn = $this->openConnection();
        $query = "INSERT INTO PAQUETE (ID,PESO,LONGITUD,VALOR_DECLARADO,NOMBRE_DESTINO,TELEFONO_DESTINO,FECHA_ENVIO,TIPO_PRODUCTO,METODO_PAGO) VALUES (1,:PESO,:LONGITUD,:VALOR_DECLARADO,:NOMBRE_DESTINO,:TELEFONO_DESTINO,:FECHA_ENVIO,:TIPO_PRODUCTO,:METODO_PAGO);";
        $stm = $conn->prepare("INSERT INTO PAQUETE (PESO,LONGITUD,VALOR_DECLARADO,NOMBRE_DESTINO,TELEFONO_DESTINO,FECHA_ENVIO,TIPO_PRODUCTO,METODO_PAGO) VALUES (?,?,?,?,?,?,?,?)");
        $PESO = $PESOINSERT;
        $LONGITUD = $LONGITUDINSERT;
        $VALOR_DECLARADO = $VALOR_DECLARADOINSERT;
        $NOMBRE_DESTINO = $NOMBRE_DESTINOINSERT;
        $TELEFONO_DESTINO = $TELEFONO_DESTINOINSERT;
        $FECHA_ENVIO = $FECHA_ENVIOINSERT;
        $TIPO_PRODUCTO = $TIPO_PRODUCTOINSERT;
        $METODO_PAGO = $METODO_PAGOINSERT;
        $stm->bindParam(1,$PESO);
        $stm->bindParam(2,$LONGITUD);
        $stm->bindParam(3,$VALOR_DECLARADO);
        $stm->bindParam(4,$NOMBRE_DESTINO);
        $stm->bindParam(5,$TELEFONO_DESTINO);
        $stm->bindParam(6,$FECHA_ENVIO);
        $stm->bindParam(7,$TIPO_PRODUCTO);
        $stm->bindParam(8,$METODO_PAGO);
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

    function insertIntoInicio($NOMBREINSERT,$DIRECCIONINSERT){
        try{
        $conn = $this->openConnection();
        $query = "INSERT INTO INICIO (ID,NOMBRE,DIRECCION) VALUES (1,:NOMBRE,:DIRECCION);";
        $stm = $conn->prepare("INSERT INTO INICIO (NOMBRE,DIRECCION) VALUES (?,?)");
        $NOMBRE = $NOMBREINSERT;
        $DIRECCION = $DIRECCIONINSERT;
        $stm->bindParam(1, $NOMBRE);
        $stm->bindParam(2,$DIRECCION);
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

    function insertIntoDestino($NOMBREINSERT,$DIRECCIONINSERT){
        try{
        $conn = $this->openConnection();
        $query = "INSERT INTO DESTINO (ID,NOMBRE,DIRECCION) VALUES (1,:NOMBRE,:DIRECCION);";
        $stm = $conn->prepare("INSERT INTO DESTINO (NOMBRE,DIRECCION) VALUES (?,?)");
        $NOMBRE = $NOMBREINSERT;
        $DIRECCION = $DIRECCIONINSERT;
        $stm->bindParam(1, $NOMBRE);
        $stm->bindParam(2,$DIRECCION);
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
}
?>