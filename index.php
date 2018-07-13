<?php
include './AdresseDisposable.php';


if (isset($_POST["TestDomain"])) {
    if (DomainJetable($_POST["Domain"]))
        echo "Domaine non jetable";
    else
        echo "Domaine jetable";
}

if (isset($_POST["TestEmail"])) {
    if (EmailJetable($_POST["Email"]))
        echo "Email non jetable";
    else
        echo "Email jetable";
}
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Page Test</title>
    </head>
    <body>
        <form action="#" method="POST">
            <input type="text" name="Domain" value="" placeholder="gmail.com" /> <br>
            <input type="submit" value="TestDomain" name="TestDomain" />
        </form>

        <form action="#" method="POST">
            <input type="text" name="Email" value=""  placeholder="jean.paul@yopmail.com" /> <br>
            <input type="submit" value="TestEmail" name="TestEmail" />
        </form>
    </body>
</html>
