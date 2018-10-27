DROP TABLE utilisateur;
DROP TABLE mesproduits;
DROP TABLE stratocaster;
DROP TABLE  telecaster;
DROP TABLE  singlecut;
DROP TABLE  doublecut;
DROP TABLE  cordes;
DROP TABLE  cables;
DROP TABLE  mediators;
DROP TABLE  acoustique;


CREATE TABLE utilisateur (
  login STRING,
  mp STRING,
  PRIMARY KEY(login,mp)
);

CREATE TABLE stratocaster (
  id integer,
  nom varchar(60),
  img varchar(60),
  couleur varchar(10),
  prix float,
  PRIMARY KEY(id)
);

CREATE TABLE telecaster(
  id integer,
  nom varchar(60),
  img varchar(60),
  couleur varchar(10),
  prix float,
  PRIMARY KEY(id)
);

CREATE TABLE singlecut (
  id integer,
  nom varchar(60),
  img varchar(60),
  couleur varchar(10),
  prix float,
  PRIMARY KEY(id)
);

CREATE TABLE doublecut (
  id integer,
  nom varchar(60),
  img varchar(60),
  couleur varchar(10),
  prix float,
  PRIMARY KEY(id)
);

CREATE TABLE acoustique (
  id integer,
  nom varchar(60),
  img varchar(60),
  electroacoustique boolean CHECK(electroacoustique IN ('oui','non')),
  prix float,
  PRIMARY KEY(id)
);


CREATE TABLE cordes (
    id integer,
    nom varchar(20),
    type varchar(30) CHECK (type IN ('electrique','acoustique')),
    img varchar(60),
    tirant varchar(8),
    prix float,
    primary key(id)
);

CREATE TABLE cables (
      id integer,
      nom varchar(60),
      img varchar(60),
      longueur integer,
      couleur varchar(10),
      prix float,
      primary key(id)
);

CREATE TABLE mediators (
      id integer,
      nom varchar(40),
      img varchar(60),
      quantite integer,
      epaisseur float,
      matiere varchar(25),
      prix float,
      primary key(id)
);

CREATE TABLE mesproduits (
  utilisateur_login varchar(10),
  id integer,
  categorie varchar(30),
  primary key (utilisateur_login,id,categorie)
);
