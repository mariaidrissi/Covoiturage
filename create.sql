DROP TABLE IF EXISTS PassagerRec;
DROP TABLE IF EXISTS PassagerExep;
DROP TABLE IF EXISTS Recurrents;
DROP TABLE IF EXISTS Exceptionnel;
DROP TABLE IF EXISTS Users;

CREATE TABLE Users(
    id varchar(50),
    tel varchar(11),
    PRIMARY KEY(id)
);

CREATE TABLE Exceptionnel(
    id int,
    depart varchar(50) NOT NULL,
    arrivee varchar(50) NOT NULL,
    places int NOT NULL,
    heure varchar(6) NOT NULL,
    jour varchar(15) NOT NULL,
    chauffeur varchar(50) NOT NULL,
    PRIMARY KEY(id),
    FOREIGN KEY(chauffeur) REFERENCES Users(id)
);



CREATE TABLE Recurrents(
    id int PRIMARY KEY, 
    depart varchar(50) NOT NULL,
    arrivee varchar(50) NOT NULL,
    places int NOT NULL,
    heure time NOT NULL,
    chauffeur varchar(50),
    FOREIGN KEY(chauffeur) REFERENCES Users(id), 
    debut date NOT NULL,
    type varchar NOT NULL,
    jour varchar NOT NULL, 
    fin date
);


CREATE TABLE PassagerExep (
    trajet int,
    passager varchar(50),
    FOREIGN KEY (trajet) REFERENCES Exceptionnel(id),
    FOREIGN KEY (passager) REFERENCES Users(id),
    PRIMARY KEY(trajet,passager)
);

CREATE TABLE PassagerRec (
    trajet int,
    passager varchar(50),
    debut date,
    FOREIGN KEY (trajet) REFERENCES Recurrents(id),
    FOREIGN KEY (passager) REFERENCES Users(id),
    PRIMARY KEY(trajet,passager)
);