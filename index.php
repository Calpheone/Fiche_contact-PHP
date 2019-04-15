<!DOCTYPE html>
<html>

    <head>
        <title>Fiche contact</title>
        <link rel="stylesheet" href="styles.css">
    </head>

    <body>
        <h1>Fiche Contact</h1>
        <br>
        <form action="target.php" method="POST">
            <div>
                <p> <label> Nom: <input type="text" name="nom"> </label> </p>
                <p> <label> Prénom: <input type="text" name="prenom"> </label> </p>
                <p> <label> E-mail: <input type="text" name="mail"> </label> </p>
                <p> <label> Message: <input type="text" name="message" > </label> </p>
            </div>
            <div>
                <p> Département:
                    <SELECT name="departement" size="1">
                        <OPTION> --
                        <OPTION> Direction
                        <OPTION> Rh
                        <OPTION> Com
                        <OPTION> Dev
                    </SELECT>
                </p>
            </div>
            <p> </p><input type="submit"> </p>
        </form>
    </body>

</html>