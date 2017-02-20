CREATE DATABASE curso_php;

USE curso_php;

CREATE TABLE clientes (
DNI CHAR(9) PRIMARY KEY,
nombre CHAR(50) NOT NULL,
direccion CHAR(100) NOT NULL,
localidad CHAR(20) NOT NULL,
provincia CHAR(20) NOT NULL,
telefono CHAR(20) NOT NULL,
email CHAR(40) NOT NULL
);

INSERT INTO clientes (nombre, DNI, direccion, localidad, provincia, telefono, email) VALUES ('Juan Jose Martinez Lopez', '22333444b', 'C/ el peral 24h', 'Aspe', 'Alicante', '654567876', 'juanjo@hotmail.com');
