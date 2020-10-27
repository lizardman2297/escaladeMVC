<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" href="public\librairy\bootstrap-4.5.2\css\bootstrap.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">Welcome <?php echo $_SESSION["username"] ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Dashboard <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Materiel
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="index.php?module=materiel&action=actuel">Materiel Actuel</a>
                        <a class="dropdown-item" href="index.php?module=materiel&action=future">Liste de souhait</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="index.php?module=materiel&action=ajouter">Ajouter materiel</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Sortie
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="index.php?module=sortie&action=liste">Liste sortie</a>
                        <a class="dropdown-item" href="index.php?module=sortie&action=prochaine">Prochaine sortie</a>
                        <a class="dropdown-item" href="index.php?module=sortie&action=ajouter   ">Ajouter sortie sortie</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="index.php?module=lieux&action=liste">Liste lieux</a>
                        <a class="dropdown-item" href="index.php?module=lieux&action=ajouter">Ajouter lieux</a>
                    </div>
                </li>
                
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Utilisateur
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="index.php?module=user&action=setting">Parametre</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="index.php?module=user&action=logout">Deconnexion</a>
                    </div>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <script src="public\librairy\jquery\jquery-3.5.1.js"></script>
    <script src="public\librairy\bootstrap-4.5.2\js\bootstrap.js"></script>
    
</body>
</html>