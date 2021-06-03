CREATE DATABASE garciaga;
USE garciaga;
CREATE TABLE Restaurantes
(
id_restaurante Tinyint NOT NULL auto_increment PRIMARY KEY,
Nombre_restaurante Varchar(100) NOT NULL,
Calificacion decimal(3,2) NOT NULL,
Nombre_ciudad Varchar(35) NOT NULL
);
USE garciaga;
INSERT INTO Restaurantes (Nombre_restaurante,Calificacion,Nombre_ciudad) VALUES ('shuyai','4.8','Tokyo'),('The great pier','4.5','Nueva york'),('Mariscos beach','4.2','Cancún'),('La laguna','3.4','Nuevo Laredo')
;
SELECT * FROM Restaurantes