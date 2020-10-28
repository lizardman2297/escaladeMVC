<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/tableau.css">
    <link rel="stylesheet" href="public/css/materiel.css">
    <link rel="stylesheet" href="public/librairy/lightbox/css/lightbox.css">
    <title><?php echo $title ?></title>
</head>
<body>
    <div class="container">

        liste materiel actuel
        <?php
            foreach ($type as $element) {
            ?>
                <table class="table">
                    <div class="titreMateriel"> <h1><?php echo $element ?></h1> </div>

                    <thead class="thead">
                        <tr>
                            <th scope="col" class="nom">Nom</th>
                            <th scope="col" class="marque">Marque</th>
                            <th scope="col" class="date">date achat</th>
                            <th scope="col" class="prix">Prix</th>
                            <th scope="col">Commentaire</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach (getMateriel($element) as $materiel) {
                        ?>
                        <tr>
                            <td class="nom"><a href="<?php echo $materiel->image ?>" data-lightbox="<?php echo $element ?>" data-title="<?php echo $materiel->nom ?>" ><?php echo $materiel->nom ?></a></td>
                            <td class="marque"><?php echo $materiel->marque ?></td>
                            <td class="date"><?php echo $materiel->dateAchat ?></td>
                            <td class="prix"><?php echo $materiel->prix ?>€</td>
                            <td><?php echo $materiel->commentaire ?></td>
                        </tr>
                        <?php
                        }
                    ?>
                       
                    </tbody>
                </table>
            <?php
            }
        ?>


        

    </div>
    <script src="public/librairy/lightbox/js/lightbox.js" ></script>
</body>
</html>