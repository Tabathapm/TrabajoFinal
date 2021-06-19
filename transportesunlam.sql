CREATE DATABASE transportesunlam;
USE transportesunlam;

CREATE TABLE Empleado(
id INT NOT NULL AUTO_INCREMENT,
dni INT NOT NULL,
nombre VARCHAR (20),
apellido VARCHAR (20),
fecha_nac DATE,
usuario VARCHAR(20),
password VARCHAR(20),
email VARCHAR (30),
rol VARCHAR(20),
hash VARCHAR(32),
activo INT(1) NOT NULL DEFAULT '0',
PRIMARY KEY (id));

INSERT INTO Empleado (dni, nombre, apellido, fecha_nac, usuario, password, email, rol, hash, activo)
VALUES (12345678, 'admi', 'apellido', '2017-06-15', 'user1', 1234, 'user@gmail.com', 'administrador', 'ab12g5d8h45123er84w5243679813435', 1);

