CREATE DATABASE curso_php;

USE curso_php;

CREATE TABLE usuarios (
username CHAR(30) PRIMARY KEY,
password CHAR(30) NOT NULL,
nombre CHAR(50) NOT NULL,
telefono CHAR(20) NOT NULL,
email CHAR(40) NOT NULL,
tipo ENUM('Cliente', 'Empleado', 'SuperUsuario') NOT NULL
);

INSERT INTO usuarios (username, password, nombre, telefono, email, tipo) VALUES ('juanjoseml', '12345', 'Juan Jose Martinez Lopez', '654567876', 'juanjo@hotmail.com', 'empleado');


CREATE TABLE articulos (
id INT AUTO_INCREMENT PRIMARY KEY,
nombre CHAR(50) NOT NULL,
descripcion TEXT NOT NULL,
precio DECIMAL(10,2) NOT NULL,
oferta ENUM('no', 'si') NOT NULL,
stock ENUM('si', 'no') NOT NULL,
fotos INT REFERENCES fotos(id),
categoria CHAR(30) REFERENCES categorias(nombre)
);


CREATE TABLE fotos (
id INT AUTO_INCREMENT PRIMARY KEY,
nombre CHAR(50) NOT NULL,
url CHAR(50) NOT NULL,
codigo_articulo INT REFERENCES articulos(id)
);


CREATE TABLE pedidos (
id INT AUTO_INCREMENT PRIMARY KEY,
cliente CHAR(30) REFERENCES usuarios(username),
contenido INT REFERENCES articulos(id),
fecha DATE NOT NULL,
pago ENUM('Efectivo','Tarjeta','PayPal') NOT NULL,
envio ENUM('Normal','Express') NOT NULL
);
INSERT INTO pedidos (cliente, contenido, pago, envio, fecha) VALUES ('juanjoseml', '2', 'PayPal', 'Express',CURRENT_DATE),('juanjoseml', '3', 'PayPal', 'Express',CURRENT_DATE);


CREATE TABLE lineapedidos (
id INT AUTO_INCREMENT PRIMARY KEY

);


CREATE TABLE categorias (
id INT AUTO_INCREMENT PRIMARY KEY,
nombre CHAR(30) NOT NULL,
padre CHAR(30) REFERENCES categorias(nombre)
);

