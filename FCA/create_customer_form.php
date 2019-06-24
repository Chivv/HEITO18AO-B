
<body>
<fieldset>
    <legend> Nieuwe Klant toevoegen </legend>
    <form action="create_customer.php" method="post">
        
        <label>Voornaam</label><br>
        <input type="text" name="Voornaam"><br>
        <label>Tussenvoegsel</label><br>
        <input type="text" name="Tussenvoegsel"><br>
        <label>Achternaam</label><br>
        <input type="text" name="Achternaam"><br>
        <label>Postadres</label><br>
        <input type="text" name="Postadres"><br>
        <label>Huis nummer</label><br>
        <input type="text" name="Huisnummer"><br>
        <label>Postcode</label><br>
        <input type="text" name="Postcode"><br>
        <label>Plaats</label><br>
        <input type="text" name="Plaats"><br>
        <label>Telefoon nummer</label><br>
        <input type="text" name="Telefoonnummer"><br>
        <label>email adres</label><br>
        <input type="email" name="Email"><br>
        <label>leeftijdsgroep</label><br>
        <input type="text" name="Leeftijdsgroep"><br>
        <label>geboortedatum</label><br>
        <input type="text" name="Geboortedatum"><br>
        <label>Contributies</label><br>
        <input type="text" name="Contributies"><br>
        <label>Verhoging Contributies</label><br>
        <input type="text" name="Verhogingcontributies"><br>
        <label>Extra Training</label><br>
        <input type="text" name="Extratraining"><br>
        <label>Betaald of niet?</label><br>
        <input type="hidden" name="Betaald" value="nee" />
        <input type="checkbox" name="Betaald" value="ja"><br>
        <input type="submit" name="Toevoegen">
    </form>
</fieldset>
</body>
</html>
