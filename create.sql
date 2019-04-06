CREATE TABLE Users(
    id varchar,
    tel varchar(11),
    PRIMARY KEY(id)
);

CREATE TABLE Exceptionnel(
    id int SERIAL,
    depart varchar NOT NULL,
    arrivee varchar NOT NULL,
    places int NOT NULL,
    heure time NOT NULL,
    jour date NOT NULL,
    chauffeur varchar NOT NULL,
    PRIMARY KEY(id),
    FOREIGN KEY(chauffeur) REFERENCES Users(id)
);



CREATE TABLE Recurrents(
    id int PRIMARY KEY, 
    depart varchar NOT NULL,
    arrivee varchar NOT NULL,
    places int NOT NULL,
    heure time NOT NULL, 
    FOREIGN KEY(chauffeur) REFERENCES USERS(id), 
    debut date NOT NULL, 
    type varchar NOT NULL IN
    CHECK type IN ("quotidien", "hebdomadaire", "bi"), 
    jour varchar NOT NULL, 
    fin date
);


CREATE TABLE PassagerExep (
    trajet FOREIGN KEY REFERENCES Exceptionnel(id),
    passager FOREIGN KEY REFERENCES Users(id),
    PRIMARY KEY(trajet,passager),
);

CREATE TABLE PassagerRec (
    trajet FOREIGN KEY REFERENCES Recurent(id),
    passager FOREIGN KEY REFERENCES Users(id),
    debut date,
    PRIMARY KEY(trajet,passager),
);