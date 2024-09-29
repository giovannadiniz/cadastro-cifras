CREATE DATABASE bd_cifras;

use bd_cifras;

CREATE TABLE cifra(
 	id INT  auto_increment PRIMARY KEY,
  autor VARCHAR(100) NOT NULL,
  musica VARCHAR(100) NOT NULL,
  genero VARCHAR(50) NOT NULL
);

