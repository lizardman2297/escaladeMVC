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

        <?php
        // var_dump($type);


        // echo $type->libelleType;
            foreach ($type as $element) {
            ?>
                <table class="table">
                    <h2>---------------------- <?php echo $element ?> ----------------------</h2>
                    <thead class="thead">
                        <tr>
                            <th scope="col">Nom</th>
                            <th scope="col">Description</th>
                            <th scope="col">Prix</th>
                            <th scope="col">Remarque</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            <td>@twitter</td>
                        </tr>
                    </tbody>
                </table>
            <?php
            }
        ?>

        <br>
        <br>
        <br>

        liste materiel actuel

        

    </div>
</body>
</html>