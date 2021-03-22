<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/tableau.css">

    <title><?php echo $title ?></title>
</head>
<body>
    <div class="container">

    <table class="table">
        <div class="region"> <h1>Auvergne-Rhone-Alpes</h1> </div>
        <thead class="thead">
            <tr>
                <th scope="col" class="nom">Nom</th>
                <th scope="col" class="marque">Ville</th>
                <th scope="col" class="date">Latitude</th>
                <th scope="col" class="prix">longitude</th>
            </tr>
        </thead>
        <tbody>
        <?php
            foreach ($listeLieux as $lieu) {
        ?>
                <tr>
                <td class="libelle"><?php echo $lieu["libelle"] ?></td>
                <td class="ville"><abbr title="<?php echo $lieu["departement"] ?>"><?php echo $lieu["ville"] ?></abbr></td>
                <td class="latitude"><?php echo $lieu["latitude"] ?></td>
                <td class="longitude"><?php echo $lieu["longitude"] ?></td>
            </tr>                      
        <?php
            }
        ?>
        </tbody>
    </table>

    </div>
</body>
</html>