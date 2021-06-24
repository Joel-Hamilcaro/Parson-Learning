drop table if exists user_exo;
drop table if exists user_cours;
drop table if exists exo;
drop table if exists cours;
drop table if exists user;

CREATE TABLE `user` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(50) NOT NULL,
  `password` VARCHAR(1000) NOT NULL,
  `nbSucces` INT UNSIGNED NOT NULL,
  `nbTentative` INT UNSIGNED NOT NULL,
  `teacher` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
)
DEFAULT CHARACTER SET = utf8mb4;

CREATE TABLE `cours` (
  `id_cours` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `titre` VARCHAR(1000) NOT NULL,
  `id_user` INT UNSIGNED,
  `nbSucces` INT UNSIGNED NOT NULL,
  `nbTentative` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`id_cours`),
  FOREIGN KEY (id_user) REFERENCES user(id)
)
DEFAULT CHARACTER SET = utf8mb4;

CREATE TABLE `exo` (
  `id_exo` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `enonce` VARCHAR(1000) NOT NULL,
  `indice` VARCHAR(1000) NOT NULL,
  `reponse` VARCHAR(1000) NOT NULL,
  `nbSucces` INT UNSIGNED NOT NULL,
  `nbTentative` INT UNSIGNED NOT NULL,
  `id_cours` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`id_exo`),
  FOREIGN KEY (id_cours) REFERENCES cours(id_cours)
)
DEFAULT CHARACTER SET = utf8mb4;

CREATE TABLE `user_cours` (
  `id_user` INT UNSIGNED ,
  `id_cours` INT UNSIGNED ,
  PRIMARY KEY (`id_user`,`id_cours`),
  FOREIGN KEY (id_user) REFERENCES user(id),
  FOREIGN KEY (id_cours) REFERENCES cours(id_cours)
)
DEFAULT CHARACTER SET = utf8mb4;

CREATE TABLE `user_exo` (
  `id_user` INT UNSIGNED ,
  `id_exo` INT UNSIGNED,
  `status` INT UNSIGNED,
  PRIMARY KEY (`id_user`,`id_exo`),
  FOREIGN KEY (id_user) REFERENCES user(id),
  FOREIGN KEY (id_exo) REFERENCES exo(id_exo)
)
DEFAULT CHARACTER SET = utf8mb4;

INSERT INTO user (username,password,nbSucces,nbTentative,teacher) VALUES ("alice","ab4f63f9ac65152575886860dde480a1",0,0,1);
INSERT INTO user (username,password,nbSucces,nbTentative,teacher) VALUES ("bob","ab4f63f9ac65152575886860dde480a1",0,0,1);
INSERT INTO user (username,password,nbSucces,nbTentative,teacher) VALUES ("carol","ab4f63f9ac65152575886860dde480a1",0,0,1);
INSERT INTO user (username,password,nbSucces,nbTentative,teacher) VALUES ("dave","ab4f63f9ac65152575886860dde480a1",0,0,1);
INSERT INTO user (username,password,nbSucces,nbTentative,teacher) VALUES ("eve","ab4f63f9ac65152575886860dde480a1",0,0,0);
INSERT INTO user (username,password,nbSucces,nbTentative,teacher) VALUES ("fabio","ab4f63f9ac65152575886860dde480a1",0,0,0);
INSERT INTO user (username,password,nbSucces,nbTentative,teacher) VALUES ("gaby","ab4f63f9ac65152575886860dde480a1",0,0,0);
INSERT INTO user (username,password,nbSucces,nbTentative,teacher) VALUES ("hector","ab4f63f9ac65152575886860dde480a1",0,0,0);
INSERT INTO user (username,password,nbSucces,nbTentative,teacher) VALUES ("ivan","ab4f63f9ac65152575886860dde480a1",0,0,0);

INSERT INTO cours (titre,id_user,nbSucces,nbTentative) VALUES ("Initiation à la programmation (Java)",1,0,0);
INSERT INTO cours (titre,id_user,nbSucces,nbTentative) VALUES ("Programmation Orientée Objet (Java)",1,0,0);
INSERT INTO cours (titre,id_user,nbSucces,nbTentative) VALUES ("Interfaces graphiques Java",1,0,0);
INSERT INTO cours (titre,id_user,nbSucces,nbTentative) VALUES ("Algorithmes de tri (Python)",2,0,0);
INSERT INTO cours (titre,id_user,nbSucces,nbTentative) VALUES ("Algorithmes dans les graphes (Python)",2,0,0);
INSERT INTO cours (titre,id_user,nbSucces,nbTentative) VALUES ("Programmation Fonctionnelle (OcamL)",3,0,0);
INSERT INTO cours (titre,id_user,nbSucces,nbTentative) VALUES ("Programmation Réseau",4,0,0);
INSERT INTO cours (titre,id_user,nbSucces,nbTentative) VALUES ("Programmation Système",4,0,0);


INSERT INTO user_cours (id_user,id_cours) VALUES (5,1);
INSERT INTO user_cours (id_user,id_cours) VALUES (5,4);
INSERT INTO user_cours (id_user,id_cours) VALUES (6,2);
INSERT INTO user_cours (id_user,id_cours) VALUES (6,3);
INSERT INTO user_cours (id_user,id_cours) VALUES (7,5);
INSERT INTO user_cours (id_user,id_cours) VALUES (7,6);
INSERT INTO user_cours (id_user,id_cours) VALUES (8,1);
INSERT INTO user_cours (id_user,id_cours) VALUES (8,2);
INSERT INTO user_cours (id_user,id_cours) VALUES (8,3);
INSERT INTO user_cours (id_user,id_cours) VALUES (8,4);
INSERT INTO user_cours (id_user,id_cours) VALUES (8,5);
INSERT INTO user_cours (id_user,id_cours) VALUES (8,6);
INSERT INTO user_cours (id_user,id_cours) VALUES (8,7);
INSERT INTO user_cours (id_user,id_cours) VALUES (8,8);
INSERT INTO user_cours (id_user,id_cours) VALUES (9,1);
INSERT INTO user_cours (id_user,id_cours) VALUES (9,2);
INSERT INTO user_cours (id_user,id_cours) VALUES (9,3);
INSERT INTO user_cours (id_user,id_cours) VALUES (9,5);
INSERT INTO user_cours (id_user,id_cours) VALUES (9,7);
INSERT INTO user_cours (id_user,id_cours) VALUES (9,8);
