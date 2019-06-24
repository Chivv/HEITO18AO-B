DROP DATABASE IF EXISTS FCA;
CREATE DATABASE FCA;
USE FCA;

DROP TABLE IF EXISTS customer;
CREATE TABLE customer
(
  ID INT NOT NULL AUTO_INCREMENT,
  Voornaam VARCHAR(50),
  Tussenvoegsel VARCHAR(10),
  Achternaam VARCHAR(50),
  Telefoonnummer INT,
  Email VARCHAR(50),
  Geboortedatum VARCHAR(50),
  Plaats VARCHAR(30),
  Postadres VARCHAR(50),
  Huisnummer INT,
  Postcode VARCHAR(50),
  Leeftijdsgroep VARCHAR(50),
  Extratraining DECIMAL(50),
  Verhogingcontributies INT,
  Contributies INT,
  Betaald VARCHAR(10), 
   PRIMARY KEY (ID)
);
