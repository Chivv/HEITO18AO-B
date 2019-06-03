<?php
$Contributies = empty($_POST["Contributies"]) ? null : htmlspecialchars($_POST["Contributies"]);
$Verhogingcontributies = empty($_POST["Verhogingcontributies"]) ? null : htmlspecialchars($_POST["Verhogingcontributies"]);
$Extratraining = empty($_POST["Extratraining"]) ? null : htmlspecialchars($_POST["Extratraining"]);
$Voornaam = empty($_POST["Voornaam"]) ? null : htmlspecialchars($_POST["Voornaam"]);
$Tussenvoegsel = empty($_POST["Tussenvoegsel"]) ? null : htmlspecialchars($_POST["Tussenvoegsel"]);
$Achternaam = empty($_POST["Achternaam"]) ? null : htmlspecialchars($_POST["Achternaam"]);
$Postadres = empty($_POST["Postadres"]) ? null : htmlspecialchars($_POST["Postadres"]);
$Huisnummer = empty($_POST["Huisnummer"]) ? null : htmlspecialchars($_POST["Huisnummer"]);
$Postcode = empty($_POST["Postcode"]) ? null : htmlspecialchars($_POST["Postcode"]);
$Plaats = empty($_POST["Plaats"]) ? null : htmlspecialchars($_POST["Plaats"]);
$Telefoonnummer = empty($_POST["Telefoonnummer"]) ? null : htmlspecialchars($_POST["Telefoonnummer"]);
$Email = empty($_POST["Email"]) ? null : htmlspecialchars($_POST["Email"]);
$Leeftijdsgroep = empty($_POST["Leeftijdsgroep"]) ? null : htmlspecialchars($_POST["Leeftijdsgroep"]);
$Geboortedatum = empty($_POST["Geboortedatum"]) ? null : htmlspecialchars($_POST["Geboortedatum"]);
$Betaald = empty($_POST["Betaald"]) ? null : htmlspecialchars($_POST["Betaald"]);


if ($Contributies && $Verhogingcontributies && $Extratraning && $Voornaam && $Achternaam && $Postadres && $Huisnummer && $Postcode && $Plaats && $Telefoonnummer && $Email && $Leeftijdsgroep && $Geboortedatum && $Betaald) {
    $host = 'localhost';
    $dbname = 'FCA';
    $username = 'root';
    $password = 'Root';

$connectStr = 'mysql:host=' . $host . ';dbname=' . $dbname . ';charset=utf8';
$db = new PDO($connectStr, $username, $password);

    $sql = "INSERT INTO Customer (Contributies, Verhogingcontributies, Extratraining, Voornaam, Achternaam, Postadres, Huisnummer, Postcode, Plaats, Telefoonnummer, Email, Leeftijdsgroep, Geboortedatum, Betaald) VALUES (:Contributies, :Verhogingcontributies, :Extratraining, :Voornaam, :Achternaam, :Postadres, :Huisnummer, :Postcode, :Plaats, :Telefoonnummer, :Email, :Leeftijdsgroep, :Geboortedatum, :Betaald)";
    $params = array(":Contributies" => "$Contributies", ":Verhogingcontributies" => "$Verhogingcontributies", ":Extratraining" => "$Extratraining", ":Voornaam" => "$Voornaam", ":Achternaam" => "$Achternaam", ":Postadres" => "$Postadres", ":Huisnummer" => "$Huisnummer", ":Postcode" => "$Postcode", ":Plaats" => "$Plaats", ":Telefoonnummer" => "$Telefoonnummer", ":Email" => "$Email", ":Leeftijdsgroep" => "$leeftijdsgroep", ":Geboortedatum" => "$Geboortedatum");

    $sth = $db->prepare($sql);
    $sth->execute($params);

    header("Location: index.php");
} else {
    echo "Niet genoeg info om toe te voegen";
    header ("location: create_customer_form.php");
}
?>
