<?php
$id = empty($_GET["id"]) ? null : $_GET["id"];
include 'scripts/connectdb.php';
$sql = "SELECT * FROM Customer WHERE id =:id";

$params = array(
    ":id" => $id
);
try {
    $sth = $db->prepare($sql);
    $sth->execute($params);
    $Customers = $sth->fetch(PDO::FETCH_ASSOC);
} catch (PDOExeption $e) {
    echo $e->getMessage();
}

$Model = $Telefoons["Model"];
$Contributies = $Customers["Contributies"];
$Verhogingcontributies = $Customers["Verhogingcontributies"];
$Extratraining = $Customers["Extratraining"];
$Voornaam = $Customers["Voornaam"];
$Tussenvoegsel = $Customers["Tussenvoegsel"];
$Achternaam = $Customers["Achternaam"];
$Postadres = $Customers["Postadres"];
$Huisnummer = $Customers["Huisnummer"];
$Postcode = $Customers["Postcode"];
$Plaats = $Customers["Plaats"];
$Telefoonnummer = $Customers["Telefoonnummer"];
$Email = $Customers["Email"];
$Leeftijdsgroep = $Customers["Leeftijdsgroep"];
$Geboortedatum = $Customers["Geboortedatum"];
$Betaald = $Customers["Betaald"];
