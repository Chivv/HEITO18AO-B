<body>
    <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
        <div class="sidebar-heading">Start Bootstrap </div>
        <div class="list-group list-group-flush">
            <a href="#" class="list-group-item list-group-item-action bg-light">Dashboard</a>
            <a href="#" class="list-group-item list-group-item-action bg-light">Shortcuts</a>
            <a href="#" class="list-group-item list-group-item-action bg-light">Overview</a>
            <a href="#" class="list-group-item list-group-item-action bg-light">Events</a>
            <a href="#" class="list-group-item list-group-item-action bg-light">Profile</a>
            <a href="#" class="list-group-item list-group-item-action bg-light">Status</a>
        </div>
    </div>

<a href ="create_form.php">Toevoegen</a>
<?php
include "script/connectdb.php";
?>

<table class = "table">
    <thread>
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
    </thread>
    <tbody>
    <?php while ($row = $sth->fetch()) { ?>
        <tr>
            <td><?php echo $row["KlantenID"]; ?></td>
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
            <td><?php echo $row["Betaald"]; ?></td>
            <td><a href ="update_form.php?id=<?php echo $row["id"]?>">Wijzig</a></td>
        </tr>
    <?php } ?>
    </tbody>
</table>
</body>
</html>
