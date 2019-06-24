<body>
    <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
        <div class="sidebar-heading">Start Bootstrap </div>
        <div class="list-group list-group-flush">
            <a href="index.php" class="list-group-item list-group-item-action bg-light">Home</a>
            <a href="showjarige.php" class="list-group-item list-group-item-action bg-light">Bijna jarig</a>
            <a href="shownietbetaald.php" class="list-group-item list-group-item-action bg-light">Niet betaald<a>
            <a href="create_customer.php" class="list-group-item list-group-item-action bg-light">klant toevoegen</a>
        </div>
    </div>

<a href ="create_customer_form.php">Toevoegen</a>
<?php
include "script/connectdb.php";
$sth = $db->prepare($sql);
$sth->execute();
?>

<table class = "table">
    
        <tr>
            <th>KlantenID</th>
            <th>Voornaam</th>
            <th>Tussenvoegsel</th>
            <th>Achternaam</th>
            <th>Postadres</th>
            <th>Huis nummer</th>
            <th>Postcode</th>
            <th>Plaats</th>
            <th>Telefoon nummer</th>
            <th>Email</th>
            <th>Leeftijdsgroep</th>
            <th>Geboorte datum</th>
            <th>Contributie</th>
            <th>Verhoging Contributies</th>
            <th>Extra Training in uren</th>
            <th>wel/niet betaald</th>
        </tr>
    
    <tbody>
    <?php while ($row = $sth->fetch()) { ?>
        <tr>
            <td><?php echo $row["ID"]; ?></td>
            <td><?php echo $row["Voornaam"]; ?></td>
            <td><?php echo $row["Tussenvoegsel"]; ?></td>
            <td><?php echo $row["Achternaam"]; ?></td>
            <td><?php echo $row["Postadres"]; ?></td>
            <td><?php echo $row["Huisnummer"]; ?></td>
            <td><?php echo $row["Postcode"]; ?></td>
            <td><?php echo $row["Plaats"]; ?></td>
            <td><?php echo $row["Telefoonnummer"]; ?></td>
            <td><?php echo $row["Email"]; ?></td>
            <td><?php echo $row["Leeftijdsgroep"]; ?></td>
            <td><?php echo $row["Geboortedatum"]; ?></td>
            <td><?php echo $row["Contributies"]; ?></td>
            <td><?php echo $row["Verhogingcontributies"]; ?></td>
            <td><?php echo $row["Extratraining"]; ?></td>
            <td><?php echo $row["Betaald"]; ?></td>
            <td><a href ="update_customer_form.php?ID=<?php echo $row["ID"]?>">Wijzig</a></td>
        </tr>
    <?php } ?>
    </tbody>
</table>
</body>
</html>
