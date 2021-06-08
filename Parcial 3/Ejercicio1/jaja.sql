CREATE DATABASE garciaga;
USE garciaga;

#Creacion de la tabla usuarios
CREATE TABLE Usuarios
(
id_usuario tinyint NOT NULL auto_increment PRIMARY KEY,
usuario varchar(25) NOT NULL,
contraseña Varchar(200) NOT NULL
);

select * from restaurantes;
select * from usuarios;

update usuarios set contraseña='07c1645ff5fd65bc186338304889df7f711cf2d5595756339628232c2ebfd60666febe7d1fa58c034e6c7c655fd9de58509019c9d499869a18ba3f054071d375' where contraseña='garcia';