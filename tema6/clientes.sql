USE curso_php;

CREATE TABLE usuarios (
username CHAR(30) PRIMARY KEY,
password CHAR(30) NOT NULL,
nombre CHAR(50) NOT NULL,
telefono CHAR(20) NOT NULL,
email CHAR(40) NOT NULL,
tipo ENUM('cliente', 'empleado')
);

INSERT INTO usuarios (username, password, nombre, telefono, email, tipo) VALUES ('juanjoseml', '12345', 'Juan Jose Martinez Lopez', '654567876', 'juanjo@hotmail.com', 'empleado');

