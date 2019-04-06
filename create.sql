CREATE TABLE Users(
    id varchar(50),
    tel varchar(11),
    PRIMARY KEY(id)
);

CREATE TABLE Exceptionnel(
    id int SERIAL,
    depart varchar(50) NOT NULL,
    arrivee varchar(50) NOT NULL,
    places int NOT NULL,
    heure time NOT NULL,
    jour date NOT NULL,
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
    FOREIGN KEY(chauffeur) REFERENCES USERS(id), 
    debut date NOT NULL, 
    type varchar(50) NOT NULL IN
    CHECK type IN ("quotidien", "hebdomadaire", "bi"), 
    jour varchar NOT NULL, 
    fin date
);


CREATE TABLE PassagerExep (
    trajet varchar(50),
    passager varchar(50),
    trajet FOREIGN KEY REFERENCES Exceptionnel(id),
    passager FOREIGN KEY REFERENCES Users(id),
    PRIMARY KEY(trajet,passager),
);

CREATE TABLE PassagerRec (
    trajet varchar(50),
    passager varchar(50),
    trajet FOREIGN KEY REFERENCES Recurent(id),
    passager FOREIGN KEY REFERENCES Users(id),
    debut date,
    PRIMARY KEY(trajet,passager),
);