function insertPaquete(){
    var peso = document.getElementById("Peso").value;
    var longitud = document.getElementById("Longitud").value;
    var valor_declarado = document.getElementById("Valor_declarado").value;
    var nombre_destino = document.getElementById("Nombre_destino").value;
    var telefono_destino = document.getElementById("Telefono_destino").value;
    var fecha_envio = document.getElementById("Fecha_envio").value;
    var tipo_producto = document.getElementById("Tipo_producto").value;
    var metodo_pago = document.getElementById("Metodo_pago").value;
    console.log("here");
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            document.getElementById("modal").innerHTML = this.responseText;
            
            
        }
        
        
    };
    xmlhttp.open("POST","./model/fin_envio.php?peso=" + peso + "&longitud=" + longitud + "&valor_declarado=" + valor_declarado + "&nombre_destino=" + nombre_destino + "&telefono_destino=" + telefono_destino + "&fecha_envio=" + fecha_envio + "&tipo_producto=" + tipo_producto + "&metodo_pago=" + metodo_pago,true);
    xmlhttp.send();
}

function insertInicio(){
    var nombre = document.getElementById("Nombre").value;
    var direccion = document.getElementById("Direccion").value;
    console.log("here");
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            document.getElementById("modal").innerHTML = this.responseText;
            
            
        }
        
        
    };
    xmlhttp.open("POST","./model/fin_envio.php?nombre=" + nombre + "&direccion=" + direccion,true);
    xmlhttp.send();
}

function insertIntoDestino(){
    var nombre = document.getElementById("Nombre").value;
    var direccion = document.getElementById("Direccion").value;
    console.log("here");
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            document.getElementById("modal").innerHTML = this.responseText;
            
            
        }
        
        
    };
    xmlhttp.open("POST","./model/fin_envio.php?nombre=" + nombre + "&direccion=" + direccion,true);
    xmlhttp.send();
}