<!DOCTYPE html>
<html>

    <head>
        <title>Fiche contact</title>
        <link rel="stylesheet" href="styles.css">
    </head>

    <body>
        <h1>Fiche Contact</h1>
        <br>
        <?php
        $return = 0;
        ?>
        <div>
            <?php
            switch ($_POST['departement']) {
                case "--":
                    $dep = "NULL";
                    break;
                case "Direction":
                    $dep = "direction@entreprise.com";
                    break;
                case "Rh":
                    $dep = "rh@entreprise.com";
                    break;
                case "Com":
                    $dep = "com@entreprise.com";
                    break;
                case "Dev":
                    $dep = "dev@entreprise.com";
                    break;
            }
            if ($dep == "NULL") {
                $return++;
            }
            ?>
        </div>
        <div>
            <?php
            $check = 0;

            if (!$_POST['nom']) {
                $check++;
            }
            if (!$_POST['prenom']) {
                $check++;
            }
            if (!$_POST['mail']) {
                $check++;
            }
            if (!$_POST['message']) {
                $check++;
            }
            if ($check != 0) {
                $return++;
            }
            ?>
        </div>
        <div>
            <?php
            if ($return != 0) {
                echo 'Veuillez rentrer TOUTES vos informations.';
                ?>
                <p> <a href="index.php"> Retour </a> </p>
                <?php
            } else {
                echo 'Votre message a bien été envoyé au département: ' . $_POST['departement'] . '.';
            }
            ?>
        </div>
        <div>

        </div>
    </body>

</html>