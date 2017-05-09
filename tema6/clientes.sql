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
);


CREATE TABLE fotos (
id INT AUTO_INCREMENT,
nombre CHAR(50) NOT NULL,
url CHAR(50) NOT NULL,
codigo_articulo INT REFERENCES articulos(id),
PRIMARY KEY(id,codigo_articulo)
);


CREATE TABLE pedidos (
id INT AUTO_INCREMENT,
cliente CHAR(30) REFERENCES usuarios(username),
articulo INT REFERENCES articulos(id),
fecha DATE NOT NULL,
pago ENUM('Efectivo','Tarjeta','PayPal') NOT NULL,
envio ENUM('Normal','Express') NOT NULL,
PRIMARY KEY(id,cliente,articulo)
);

INSERT INTO pedidos (cliente, articulo, pago, envio, fecha) VALUES ('juanjoseml', '2', 'PayPal', 'Express',CURRENT_DATE),('juanjoseml', '3', 'PayPal', 'Express',CURRENT_DATE);


CREATE TABLE lineapedidos (
id INT AUTO_INCREMENT PRIMARY KEY

);


CREATE TABLE categorias (
id INT AUTO_INCREMENT,
articulo INT REFERENCES articulos(id),
nombre CHAR(30) NOT NULL,
padre CHAR(30) REFERENCES categorias(nombre),
PRIMARY KEY(id,articulo)
);


INSERT INTO categorias (nombre, articulo) VALUES ('Videojuegos', 8),('Videojuegos', 9),('Videojuegos', 11),('Telefonia', 10),('Telefonia', 13),('Electrodomesticos', 1),('Electrodomesticos', 7),('Hogar', 12),('Mascotas', 2),('Escolar', 5),('Higiene', 12),('Muebles', 4),('Peliculas', 6),('Libros', 3),('Videojuegos', 1),('Videojuegos', 2),('Videojuegos', 3),('Telefonia', 11),('Electrodomesticos', 2),('Electrodomesticos', 8),('Hogar', 9),('Mascotas', 3),('Escolar', 10),('Higiene', 10),('Muebles', 2),('Peliculas', 6),('Libros', 1);



















