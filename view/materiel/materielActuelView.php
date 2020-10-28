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

        liste materiel actuel
        <?php
            foreach ($type as $element) {
            ?>
                <table class="table">
                    <h2>---------------------- <?php echo $element ?> ----------------------</h2>

                    <thead class="thead">
                        <tr>
                            <th scope="col">Nom</th>
                            <th scope="col">Marque</th>
                            <th scope="col">Description</th>
                            <th scope="col">Prix</th>
                            <th scope="col">date achat</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach (getMateriel($element) as $materiel) {
                        ?>
                        <tr>
                            <td><?php echo $materiel->nom ?></td>
                            <td><?php echo $materiel->marque ?></td>
                            <td><?php echo $materiel->commentaire ?></td>
                            <td><?php echo $materiel->prix ?>€</td>
                            <td><?php echo $materiel->dateAchat ?></td>
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
</body>
</html>