#Creacion de base de datos

CREATE DATABASE garciaga;
USE garciaga;

#Creacion de la tabla usuarios
CREATE TABLE Usuarios
(
id_usuario tinyint NOT NULL auto_increment PRIMARY KEY,
usuario varchar(25) NOT NULL,
contraseña Varchar(200) NOT NULL
);

#Prueba de funcionamiento
INSERT INTO Usuarios(usuario,contraseña) VALUES('erick','garcia');

SELECT * FROM Usuarios