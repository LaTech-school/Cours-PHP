# Base de données : SQL

## Creation d'une Base de données

### Nom du Schema

### Nom des tables

### Les champs / Colonnes

- Le nom de la colonne
- Type de donnée (INT, CHAR, VARCHAR)
- PK : Primary Key, clé primaire
- NN : Not Null
- UQ : Uniq
- BIN : Binary
- UN : UNsigned
- ZF : ZeroFill
- AI : Auto Increment
- G: Generated

## C.R.U.D.

- Create : Ecrire des données dans la BDD.
- Read / Retrieve : Lire des données de la BDD.
- Update : Modifier / Editer des données de la BDD.
- Delete : Supprimer les données de la BDD.

### CREATE

```sql
INSERT INTO `articles` (`title`, `content`) VALUES ("My first article !", "Lorem ipsum... blablabla...");
INSERT INTO `articles` (`title`, `content`) VALUES ("My second article !", "Lorem ipsum... blablabla..."), ("My third article !", "Lorem ipsum... blablabla...");
```

### READ  /RETRIEVE

