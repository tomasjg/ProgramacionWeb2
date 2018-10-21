-- drop database  `pokemons-gomez-tomas`;

CREATE DATABASE `pokemons-gomez-tomas`;

USE `pokemons-gomez-tomas`;


CREATE TABLE tipo (
id_tipo int primary key,
descripcion varchar(50) not null,
imagen varchar(50) not null
);

INSERT INTO tipo VALUES
(1,'Acero', 'recursos/img/tipos/acero.png'),
(2,'Agua', 'recursos/img/tipos/agua.png'),
(3,'Bicho', 'recursos/img/tipos/bicho.png'),
(4,'Dragón', 'recursos/img/tipos/dragon.png'),
(5,'Eléctrico', 'recursos/img/tipos/electrico.png'),
(6,'Fantasma', 'recursos/img/tipos/fantasma.png'),
(7,'Fuego', 'recursos/img/tipos/fuego.png'),
(8,'Hada', 'recursos/img/tipos/hada.png'),
(9,'Hielo', 'recursos/img/tipos/hielo.png'),
(10,'Lucha', 'recursos/img/tipos/lucha.png'),
(11,'Normal', 'recursos/img/tipos/normal.png'),
(12,'Planta', 'recursos/img/tipos/planta.png'),
(13,'Psíquico', 'recursos/img/tipos/psiquico.png'),
(14,'Roca', 'recursos/img/tipos/roca.png'),
(15,'Siniestro', 'recursos/img/tipos/siniestro.png'),
(16,'Tierra', 'recursos/img/tipos/tierra.png'),
(17,'Veneno', 'recursos/img/tipos/veneno.png'),
(18,'Volador', 'recursos/img/tipos/volador.png');


CREATE TABLE pokemon (
id_pokemon int primary key AUTO_INCREMENT,
nombre varchar(50) not null,
id_tipo int not null,
imagen varchar(100) not null,
ataque varchar(100),
FOREIGN KEY (id_tipo) REFERENCES tipo(id_tipo)
);

-- drop table pokemon;
select id_pokemon, nombre, id_tipo, imagen from pokemon;

INSERT INTO pokemon (nombre, id_tipo, imagen) VALUES
('Bulbasaur', 12, 'recursos/img/pokemons/bulbasaur.jpg'),
('Ivysaur', 12, 'recursos/img/pokemons/ivysaur.jpg'),
('Venusaur', 12, 'recursos/img/pokemons/venusaur.jpg'),
('Charmander', 7, 'recursos/img/pokemons/charmander.jpg'),
('Charmeleon', 7, 'recursos/img/pokemons/charmeleon.jpg'),
('Charizard', 7, 'recursos/img/pokemons/charizard.jpg'),
('Squirtle', 2, 'recursos/img/pokemons/squirtle.jpg'),
('Wartortle', 2, 'recursos/img/pokemons/wartortle.jpg'),
('Blastoise', 2, 'recursos/img/pokemons/blastoise.jpg'),
('Caterpie', 3, 'recursos/img/pokemons/caterpie.jpg'),
('Metapod', 3, 'recursos/img/pokemons/metapod.jpg'),
('Butterfree', 3, 'recursos/img/pokemons/butterfree.jpg'),
('Weedle', 17, 'recursos/img/pokemons/weedle.jpg'),
('Kakuna', 17, 'recursos/img/pokemons/kakuna.jpg'),
('Beedrill', 17, 'recursos/img/pokemons/beedrill.jpg'),
('Pidgey', 18, 'recursos/img/pokemons/pidgey.jpg'),
('Pidgeotto', 18, 'recursos/img/pokemons/pidgeotto.jpg'),
('Pidgeot', 18, 'recursos/img/pokemons/pidgeot.jpg'),
('Rattata', 11, 'recursos/img/pokemons/rattata.jpg'),
('Raticate', 11, 'recursos/img/pokemons/raticate.jpg'),
('Spearow', 18, 'recursos/img/pokemons/spearow.jpg'),
('Fearow', 18, 'recursos/img/pokemons/fearow.jpg'),
('Ekans', 17, 'recursos/img/pokemons/ekans.jpg'),
('Arbok', 17, 'recursos/img/pokemons/arbok.jpg'),
('Pikachu', 5, 'recursos/img/pokemons/pikachu.jpg'),
('Raichu', 5, 'recursos/img/pokemons/raichu.jpg'),
('Sandshrew', 16, 'recursos/img/pokemons/sandshrew.jpg'),
('Sandslash', 16, 'recursos/img/pokemons/sandslash.jpg');


CREATE TABLE usuario (
  id int(11) PRIMARY KEY AUTO_INCREMENT,
  user varchar(50) UNIQUE NOT NULL,
  pass varchar(150)
  );

INSERT INTO usuario (user, pass) VALUES
	('admin', SHA2('1234', 224));

-- TRUNCATE TABLE pokemon;
