<body>
<?php include 'scan_customers.php'; ?>
<form action="update.php" method="post">

<label>Consributies</label><br>
        <input type="text" name="Contributies"><br>

        <label>Verhoging Contributies</label><br>
        <input type="text" name="Verhogingcontributies" value ="<?php echo $Customers["Verhogingcontributies"];?>"><br>
        <label>Extra Training</label><br>
        <input type="text" name="Extratraining" value ="<?php echo $Customers["Extratraining"];?>"><br>
        <label>Voornaam</label><br>
        <input type="text" name="Voornaam" value ="<?php echo $Customers["Voornaam"];?>" ><br>
        <label>Tussenvoegsel</label><br>
        <input type="text" name="Tussenvoegsel" value ="<?php echo $Customers["Tussenvoegsel"];?>"><br>
        <label>Achternaam</label><br>
        <input type="text" name="Achternaam" value ="<?php echo $Customers["Achternaam"];?>"><br>
        <label>Postadres</label><br>
        <input type="text" name="Postadres" value ="<?php echo $Customers["Postadres"];?>"><br>
        <label>Huis nummer</label><br>
        <input type="text" name="Huisnummer" value ="<?php echo $Customers["Huisnummer"];?>"><br>
        <label>Postcode</label><br>
        <input type="text" name="Postcode" value ="<?php echo $Customers["Postcode"];?>"><br>
        <label>Plaats</label><br>
        <input type="text" name="Plaats" value ="<?php echo $Customers["Plaats"];?>"><br>
        <label>Telefoon nummer</label><br>
        <input type="text" name="Telefoonnummer" value ="<?php echo $Customers["Telefoonnummer"];?>"><br>
        <label>email adres</label><br>
        <input type="email" name="Email" value ="<?php echo $Customers["Email"];?>"><br>
        <label>leeftijdsgroep</label><br>
        <input type="text" name="Leeftijdsgroep" value ="<?php echo $Customers["Leeftijdsgroep"];?>"><br>
        <label>geboortedatum</label><br>
        <input type="text" name="Geboortedatum" value ="<?php echo $Customers["Geboortedatum"];?>"><br>
        <label>Betaald of niet?</label><br>
        <input type="checkbox" name="Betaald" value ="<?php echo $Customers["Betaald"];?>"><br>
        <input type="submit" name="Toevoegen">
    </form>

<input type ="hidden" name="id" value ="<?php echo $Customers["id"];?>"><br>

    <input type="submit" name="update">
</form>
</body>
