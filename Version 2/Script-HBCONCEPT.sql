SET FOREIGN_KEY_CHECKS = 0;
DROP DATABASE IF EXISTS HBCONCEPT;
CREATE DATABASE IF NOT EXISTS HBCONCEPT;
USE HBCONCEPT;

CREATE TABLE IF NOT EXISTS cuentausuario(

    id_Usuario INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    Nombre_1 VARCHAR(45) NOT NULL,
    Nombre_2 VARCHAR(45) NULL,
    Apellido_paterno VARCHAR(45) NOT NULL,
    Apellido_materno VARCHAR(45) NOT NULL,
    Correo VARCHAR(45) NOT NULL,
    Password_usuario VARCHAR(45)  NOT NULL,
    Fraccionamiento VARCHAR(45),
    Colonia VARCHAR(45),
    N_casa INT,
    Telefono INT(10)
);

CREATE TABLE IF NOT EXISTS libreta(

   id_Libreta INT AUTO_INCREMENT PRIMARY KEY,
   Material VARCHAR(45) NOT NULL,
   Tamanio VARCHAR (45) NOT NULL,
   Estilo_Hojas VARCHAR(45) NOT NULL,
   Cantidad_Hojas INT NOT NULL,
   Espiral VARCHAR (45) NOT NULL,
   Descripcion VARCHAR (100),
   Precio FLOAT NOT NULL
);

CREATE TABLE IF NOT EXISTS tarjeta_bancaria(

    id_Tarjeta  INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    Numero_tarjeta INT (16) NOT NULL,
    Fecha_Vencimiento DATE,
    CVC INT(3) NOT NULL,
    id_Usuario INT,
    FOREIGN KEY (id_Usuario) REFERENCES cuentausuario (id_Usuario)
);

DROP TABLE IF EXISTS factura;
CREATE TABLE IF NOT EXISTS factura(
     id_Factura INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
     Fecha_transaccion DATE,
     id_Usuario INT,
     FOREIGN KEY(id_Usuario) REFERENCES cuentausuario(id_Usuario),
     Estado VARCHAR(1)
);

DROP TABLE IF EXISTS Factura_Libreta;
CREATE TABLE IF NOT EXISTS Factura_Libreta(
      id_Libreta INT,
	  id_Factura INT,
      PRIMARY KEY (id_Libreta,id_Factura),
      FOREIGN KEY (id_Libreta) REFERENCES libreta (id_Libreta),
      FOREIGN KEY (id_Factura) REFERENCES factura (id_Factura),
	  Precio_Venta FLOAT  NOT NULL,
      Cantidad INT NOT NULL
);