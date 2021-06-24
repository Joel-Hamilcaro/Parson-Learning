# ParsonLearning   

<img alt="HTML5" src="https://img.shields.io/badge/html5-%23E34F26.svg?style=flat-square&logo=html5&logoColor=white"/><img alt="CSS3" src="https://img.shields.io/badge/css3-%231572B6.svg?style=flat-square&logo=css3&logoColor=white"/><img alt="JavaScript" src="https://img.shields.io/badge/javascript%20-%23323330.svg?&style=flat-square&logo=javascript&logoColor=%23F7DF1E"/><img alt="PHP" src="https://img.shields.io/badge/php-%23777BB4.svg?style=flat-square&logo=php&logoColor=white"/><img alt="Symfony" src="https://img.shields.io/badge/Symfony-black.svg?style=flat-square&logo=symfony&logoColor=white"/><img alt="MySQL" src="https://img.shields.io/badge/mysql-%2300f.svg?&style=flat-square&logo=mysql&logoColor=white"/>    


*Projet réalisé en binôme dans le cadre du cours "Programmation Web"*   
**Auteurs : [Joël Hamilcaro](https://github.com/Joel-Hamilcaro/) et [Jie Tu](https://github.com/jie-tu)**


Le site "ParsonLearning" est un site de résolution d'exercices en ligne. L'utilisateur peut créer un compte "élève" et "professeur". Les élèves peuvent s'inscrire à des cours et résoudre les exercices. Les professeurs peuvent créer des exercices et les publier.


## Installer le projet

- Requis : composer et symfony installés
```
 composer install
 symfony server:start
```
> Remarque : Si la commande "symfony server:start" n'est pas trouvée, alors que symfony est installé, il faut remplacer "symfony" par le chemin correspondant. Exemple : "`home/toto/.symfony/bin/symfony server:start`"

## Configurer la base de donnée

Base de donnée courante :

```
mysql:host=localhost;
dbname="pw6db",
user='pw6',
passeword='pw6'
```

## Methode 1 (utiliser une database déjà existante) :

1 - Dans le shell du terminal :

```
mysql -u username -p dbname
(taper le mot de passe)
```

2 - Dans la console mysql :

```
source public/db.sql
```

3 - Dans le fichier public/model.php : modifier les informations de database


## Méthode 2 (créer un user et une database)

1 - Dans le shell du terminal :

```
sudo mysql
```

2 - Dans la console mysql :

```
CREATE USER 'pw6'@'localhost' IDENTIFIED WITH mysql_native_password BY 'pw6';
CREATE DATABASE pw6db;
GRANT ALL ON pw6db.* TO 'pw6'@'localhost';
FLUSH PRIVILEGES;
```

(Facultatif) Vérifications :

```
SELECT user, host FROM mysql.user;
SHOW DATABASES;
```

3 - Dans le shell du terminal :

```
mysql -u pw6 -p pw6db
(taper le mot de passe 'pw6')
```

4 - Dans la console mysql :
```
source public/db.sql
```

5 - Dans le fichier public/model.php : modifier les informations de la database

```
mysql:host=localhost;
dbname="pw6db",
user='pw6',
passeword='pw6'
```


# Bibliothèque externe utilisée

sortable.js : http://sortablejs.github.io/Sortable/
