SHOW DATABASES;

/* USER DDL */
SHOW TABLES;
CREATE DATABASE SHIPMENT_FAST;
USE SHIPMENT_FAST;
CREATE TABLE USUARIO
(
    ID INT PRIMARY KEY,
    NOMBRE VARCHAR(20),
    APELLIDO VARCHAR(50),
    DIRECCION VARCHAR(20),
    TELEFONO TINYINT,
    CONTRASEÑA VARCHAR(20),
    EMAIL VARCHAR(25)
);

CREATE TABLE TEST
(
  ID INT PRIMARY KEY  
);

/* EMPLEADO DDL */

CREATE TABLE EMPLEADO
(
    ID INT PRIMARY KEY,
    NOMBRE VARCHAR(20),
    APELLIDO VARCHAR(50),
    EMAIL VARCHAR(25),
    CONTRASEÑA VARCHAR(20)
);

/* DESTINO DDL */
CREATE TABLE DESTINO
(
    ID INT PRIMARY KEY,
    NOMBRE VARCHAR(20),
    DIRECCION VARCHAR(25),
    ID_PAQUETE INT REFERENCES PAQUETE(ID)
);

/* INICIO DDL */
CREATE TABLE INICIO
(
    ID INT PRIMARY KEY,
    NOMBRE VARCHAR(20),
    DIRECCION VARCHAR(25),
    ID_PAQUETE INT REFERENCES PAQUETE(ID)
);

/* PAQUETE DDL */

CREATE TABLE PAQUETE
(
    ID INT PRIMARY KEY,
    PESO TINYINT,
    LONGITUD TINYINT,
    VALOR_DECLARADO MEDIUMINT,
    NOMBRE_DESTINO VARCHAR(20),
    TELEFONO_DESTINO TINYINT,
    FECHA_ENVIO DATE,
    ID_USARIO INT REFERENCES USUARIO(ID),
    ID_TRABAJADOR INT REFERENCES TRABAJADOR(ID)
);
