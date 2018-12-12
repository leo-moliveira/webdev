<?php
require('db_funcoes.php');

$pdo = connect_to_database("mysql");
$sql = "CREATE DATABASE servweb";
$pdo->exec($sql);

$pdo=null;

$pdo = connect_to_database("servweb");

$sql="CREATE TABLE cadastro (
      cpf int(11) NOT NULL,
      nome varchar(200) NOT NULL,
      email varchar(80) NOT NULL,
      telefone int(13) NOT NULL,
      endereco varchar(150) NOT NULL,
      cep int(9) NOT NULL,
      id_cidade int(11) NOT NULL,
      id_servico int(11) NOT NULL,
      senha varchar(20) NOT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;".
    "CREATE TABLE cidade (
      id_cidade int(11) NOT NULL,
      cidade varchar(150) NOT NULL,
      estado varchar(2) NOT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
$pdo->exec($sql);
$pdo=null;

$pdo = connect_to_database("servweb");
$sql="CREATE TABLE servicos (
  id_servico int(11) NOT NULL,
  servico varchar(150) NOT NULL,
  descicao varchar(300) NOT NULL,
  foto text NOT NULL,
  tarifaH double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
$pdo->exec($sql);
$pdo=null;

$pdo = connect_to_database("servweb");
$sql="ALTER TABLE cadastro
  ADD PRIMARY KEY (cpf),
  ADD KEY cadastro_ibfk_1 (id_cidade),
  ADD KEY id_servico (id_servico);
  ALTER TABLE cidade
    ADD PRIMARY KEY (id_cidade);
    ALTER TABLE servicos
      ADD PRIMARY KEY (id_servico);
    ALTER TABLE cidade
      MODIFY id_cidade int(11) NOT NULL AUTO_INCREMENT;
    ALTER TABLE servicos
      MODIFY id_servico int(11) NOT NULL AUTO_INCREMENT;
    ALTER TABLE cadastro
      ADD CONSTRAINT cadastro_ibfk_1 FOREIGN KEY (id_cidade) REFERENCES cidade (id_cidade) ON DELETE CASCADE ON UPDATE CASCADE,
      ADD CONSTRAINT cadastro_ibfk_2 FOREIGN KEY (id_servico) REFERENCES servicos (id_servico) ON DELETE CASCADE ON UPDATE CASCADE;
    COMMIT;";
$pdo->exec($sql);

 ?>
