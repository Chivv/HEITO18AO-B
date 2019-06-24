<?php
include 'scripts/connectdb.php';
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

$sql = "UPDATE Customer SET Contributies = :Contributies, Verhogingcontributies = :Verhogingcontributies, Extratraining = :Extratraining, Voornaam = :Voornaam, Achternaam = :Achternaam, Postadres = :Postadres, Huisnummer = :Huisnummer, Postcode = :Postcode, Plaats = :Plaats, Telefoonnummer = :Telefoonnummer, Email = :Email, Leeftijdsgroep = :Leeftijdsgroep, Geboortedatum = :Geboortedatum, Betaald = :Betaald WHERE id = :id";
    $params = array(":Contributies" => "$Contributies", ":Verhogingcontributies" => "$Verhogingcontributies", ":Extratraining" => "$Extratraining", ":Voornaam" => "$Voornaam", ":Achternaam" => "$Achternaam", ":Postadres" => "$Postadres", ":Huisnummer" => "$Huisnummer", ":Postcode" => "$Postcode", ":Plaats" => "$Plaats", ":Telefoonnummer" => "$Telefoonnummer", ":Email" => "$Email", ":Leeftijdsgroep" => "$leeftijdsgroep", ":Geboortedatum" => "$Geboortedatum");

$sth = $db->prepare($sql);
$sth->execute($params);

header("location: index.php");
?>
</body>
