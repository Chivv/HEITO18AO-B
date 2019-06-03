DROP DATABASE IF EXISTS FCA;
CREATE DATABASE FCA;
USE FCA;

DROP TABLE IF EXISTS Customer;
CREATE TABLE Customer
(
  Lidnr INT NOT NULL AUTO_INCREMENT,
  Voornaam VARCHAR(50),
  Tussenv VARCHAR(10),
  Achternaam VARCHAR(50),
  Tel INT (12),
  Email VARCHAR(50),
  Geboortedatum INT(10),
  Plaats VARCHAR(30),
  Postadres VARCHAR(50),
  Huisnummer INT(5),
  Postcode VARCHAR(6),
  Soortlid VARCHAR(50),
  Extratraining DECIMAL(3),
  Verhogingcontributies INT(50),
  Verhogingcontributie INT(3),
  Contributies INT(50),
  Betaald BIT, /*BOOLEAN bestaat niet in SQL, bit kan 0,1 of null zijn. 0=False en 1=True. */
  PRIMARY KEY (Lidnr)
);

