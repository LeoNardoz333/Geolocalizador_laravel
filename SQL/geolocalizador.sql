drop database if exists geolocalizador;
create database geolocalizador;
use geolocalizador;
CREATE USER if not exists 'usergeo'@'localhost' IDENTIFIED BY '123';
grant all privileges on geolocalizador . * to 'usergeo'@'localhost';
flush PRIVILEGES;

create table users(
id int primary key auto_increment,
nombre varchar(50),
apellidoP varchar(15),
apellidoM varchar(15),
pass varchar(15),
permisos enum('admin','user'));

create table usuario(
id int primary key auto_increment,
fkUsers int,
usuario varchar(7),
foreign key(fkUsers) references users(id));

create table refris(
id int primary key auto_increment,
nombre varchar(50),
marca varchar(50),
modelo VARCHAR(50),
color varchar(50),
tamaño VARCHAR(20),
Capacidad VARCHAR(50));

drop trigger if exists crear_usuario;
delimiter //
create trigger crear_usuario after insert on users
for each row
begin
declare _nombre varchar(3);
declare _apellidoP varchar(2);
declare _apellidoM varchar(1);
set _nombre = substring(new.nombre,1,3);
set _apellidoP = substring(new.apellidoP,1,2);
set _apellidoM = substring(new.apellidoM,1,1);
insert into usuario values (null,new.id,concat(_nombre,_apellidoP,_apellidoM,new.id));
end;
//
delimiter ;

insert into users values (null,'Leonardo', 'Velázquez', 'Argote','123',1);
insert into users values (null,'Alfredo', 'Salinas', 'Chaves','123',1);
insert into users values (null,'Alondra Nathaly', 'Contreras', 'Ortíz','123',1);

insert into users values (null,'Juan', 'Ey', 'Si','123',2);

select us.id, us.nombre, u.usuario, us.pass, us.permisos 
from users us join usuario u on us.id = u.fkUsers;

use geolocalizador;
drop procedure if exists v_usuarios;
delimiter //
create procedure v_usuarios(in _id int)
begin
select u.nombre, u.apellidoP, u.apellidoM, u.pass, usu.usuario from users u, 
usuario usu where u.id=usu.fkUsers and u.id=_id;
end;
//
delimiter ;