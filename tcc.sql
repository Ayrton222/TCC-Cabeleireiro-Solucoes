DROP DATABASE IF EXISTS tcc;


CREATE DATABASE tcc;

USE tcc;

CREATE TABLE usuario(
id INT(11) AUTO_INCREMENT NOT NULL,
nome VARCHAR(50) ,
senha VARCHAR(50) NOT NULL,
email VARCHAR(60) ,
telefone VARCHAR(15) NOT NULL,
sexo VARCHAR(15) NOT NULL,
data_nasc DATE NOT NULL,
cidade VARCHAR (45) NOT NULL,
estado VARCHAR(45) NOT NULL,
endereco VARCHAR (45) NOT NULL,

user VARCHAR(50) NOT NULL,
  texto TEXT NOT NULL,
  imagem TEXT NOT NULL,
  dataa DATE NOT NULL,
  

PRIMARY KEY (id));

CREATE TABLE funcionario(
id INT(11) AUTO_INCREMENT NOT NULL,
nome VARCHAR(50) NOT NULL,
senha VARCHAR(50) NOT NULL,
email VARCHAR(60) NOT NULL,
telefone VARCHAR(15) NOT NULL,
sexo VARCHAR(15) NOT NULL,
data_nasc DATE NOT NULL,
cidade VARCHAR (45) NOT NULL,
estado VARCHAR(45) NOT NULL,
endereco VARCHAR (45) NOT NULL,

user VARCHAR(50) NOT NULL,
  texto TEXT NOT NULL,
  imagem TEXT NOT NULL,
  dataa DATE NOT NULL,

PRIMARY KEY (id));



CREATE TABLE `eventoscalendar` (
  `id` int(11) NOT NULL,
  `evento` varchar(250) DEFAULT NULL,
  `color_evento` varchar(20) DEFAULT NULL,
  `fecha_inicio` varchar(20) DEFAULT NULL,
  `fecha_fin` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



INSERT INTO `eventoscalendar` (`id`, `evento`, `color_evento`, `fecha_inicio`, `fecha_fin`) VALUES
(51, 'Mi Primera Prueba', 'teal', '2021-07-07', '2021-07-08'),
(52, 'Mi Segunda Prueba', 'amber', '2021-07-17', '2021-07-18'),
(53, 'Mi Tercera Prueba', 'orange', '2021-07-03', '2021-07-04');


ALTER TABLE `eventoscalendar`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `eventoscalendar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

CREATE TABLE agendamento(
  id INT(11) AUTO_INCREMENT NOT NULL,
  hora TIMESTAMP NOT NULL,
  nome_cli VARCHAR(50) NOT NULL,
  nome_func VARCHAR(50) NOT NULL,
  serv VARCHAR (50) NOT NULL,
PRIMARY KEY (id));


CREATE TABLE pubs(

  id INT(11) AUTO_INCREMENT NOT NULL,
  user VARCHAR(50) NOT NULL,
  texto TEXT NOT NULL,
  imagem TEXT NOT NULL,
  dataa DATE NOT NULL,

  PRIMARY KEY (id));



CREATE TABLE users(
    id INT(11) AUTO_INCREMENT NOT NULL,
    usu_name VARCHAR(50) NOT NULL,
    usu_nick VARCHAR(50) NOT NULL,
    img TEXT NOT NULL,
    usu_mail VARCHAR(50) NOT NULL,
    usu_pass VARCHAR(20) NOT NULL,
    usu_date DATE NOT NULL ,

    PRIMARY KEY (id));


   
CREATE TABLE trabalhador(
  
  nome VARCHAR(50) NOT NULL,
  servico VARCHAR(50) NOT NULL,

  PRIMARY KEY(nome));

  
ALTER TABLE `funcionario` ADD `img` TEXT NOT NULL AFTER `dataa`;

UPDATE `funcionario` SET `img` = 'fotoU.jpg' WHERE `funcionario`.`id` = 1;