<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/ajoutLieux.css">
    <title><?php echo $title ?></title>
</head>
<body>
    <div class="container">
        formualire ajout lieux
        <div class="formulaire">     
            <form action="model/formulaire/lieux/ajouter.php" method="post">
                <label for="nom">Nom du site :</label>
                <input type="text" name="nom" id="nom" placeholder="Nom du site">
    
                <label for="departement">Département :</label>
                <select name="departement" id="departement">
                    <option value="">-- Veuillez selectionner le departement --</option>
                    <?php
                        foreach ($departement as $elementDepartement) {
                            echo "<option value='$elementDepartement->id'>$elementDepartement->id - $elementDepartement->libelleDepartement</option>";
                        }
                    ?>
                </select>
    
                <label for="ville">Ville :</label>
                <input type="text" name="ville" id="ville" placeholder="Ville du site">
    
                <input type="submit" value="Ajouter">
            </form>       
        </div>


    </div>
</body>
</html>