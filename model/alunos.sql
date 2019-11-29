create table alunos(
  ra INT(8) UNSIGNED PRIMARY KEY,
  nome VARCHAR(50) NOT NULL,
  nasc date NOT NULL,
  sexo VARCHAR(10) NOT NULL,
  email VARCHAR(150) NOT NULL,
  senha VARCHAR(20) NOT NULL
);
