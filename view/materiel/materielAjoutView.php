<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
</head>
<body>
    <div class="container">
        Forumulaire ajout materiel

        <form enctype="multipart/form-data" action="model/formulaire/materiel/ajouter.php" method="GET" >
            <!-- <div class="form-group"> -->
                <label for="nomProduit">Nom</label>
                <input type="text" class="form-control" id="nomProduit">
            <!-- </div> -->
            <!-- <div class="form-group"> -->
                <label for="refProduit">Réference</label>
                <input type="text" class="form-control" id="refProduit">
            <!-- </div> -->
            <!-- <div class="form-group"> -->
                <label for="dateAchatProduit">Date achat</label>
                <input type="date" class="form-control" id="dateAchatProduit">
            <!-- </div> -->
            <!-- <div class="form-group"> -->
                <label for="marqueProduit">marque</label>
                <input type="text" class="form-control" id="marqueProduit">
            <!-- </div> -->
            <!-- <div class="form-group"> -->
                <label for="quantiteProduit">quantité</label>
                <input type="text" class="form-control" id="quantiteProduit">
            <!-- </div> -->
            <!-- <div class="form-group"> -->
                <label for="statutProduit">Statut</label>
                <select class="form-control" id="statutProduit">
                    <option>Actuel</option>
                    <option>Liste de souhait</option>
                    <option>ancien</option>
                </select>
            <!-- </div> -->
            <!-- <div class="form-group"> -->
                <label for="typrProduit">Type</label>
                <select class="form-control" id="typrProduit">
                <?php
                foreach ($type as $element) {
                ?>
                    <option><?php echo $element; ?></option>
                <?php
                }
                ?>
                </select>
            <!-- </div> -->
            <!-- <div class="form-group"> -->
                <label for="commentaireProduit">Commentaire</label>
                <textarea class="form-control" id="commentaireProduit" rows="3"></textarea>
            <!-- </div> -->
            <!-- <div class="form-group"> -->
                <label for="fichier_a_uploader">Image</label>
                <input type="file" name="fichier" id="fichier_a_uploader">
            <!-- </div> -->
            <button class="btn btn-primary">Ajouter</button>
        </form>


        <form enctype="multipart/form-data" action="model/formulaireMaterielAjoutModel.php" method="get">
            <input type="text" name="test1" id="test1">
            <input type="text" name="test2" id="test2">
            <input type="submit" value="test">
        </form>
    </div>
</body>
</html>