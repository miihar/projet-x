<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style/normalize.css">
    <title>Document</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container">
                <a class="navbar-brand" href="../index.php">nom site</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../index.php">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../php/all-article.php">All Article</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="article-page.php">exemple Article 1</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" aria-disabled="true">TBA</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <section class="partieConnexion">
            <h3>Inscrivez-vous</h3>
            <div class="card d-flex" style="width: 18rem;">
                <form action="BDD/insertionusers.php" method="POST">
                    <div class="placementLabelFormulaire">
                        <label class="tailleLabel" for="inscriptionNom">Nom:</label>
                        <input class="tailleInput" id="inscriptionNom" type="text" placeholder="Nom" name="Nom">
                    </div>
                    <div class="placementLabelFormulaire">
                        <label class="tailleLabel" for="inscriptionPrenom">Prenom:</label>
                        <input class="tailleInput" id="inscriptionPrenom" type="text" placeholder="Prenom" name="Prenom">
                    </div>
                    <div class="placementLabelFormulaire">
                        <label class="tailleLabel" for="inscriptionAdresseMail">Adresse email:</label>
                        <input class="tailleInput" id="inscriptionAdresseMail" type="text" placeholder="AdresseMail" name="AdresseEmail">
                    </div>
                    <div class="placementLabelFormulaire">
                        <label class="tailleLabel" for="inscriptionPseudo">Pseudo:</label>
                        <input class="tailleInput" id="inscriptionPseudo" type="text" placeholder="Pseudo" name="Pseudo">
                    </div>
                    <div class="placementLabelFormulaire">
                        <label class="tailleLabel" for="inscriptionMotDePasse">Mot de passe:</label>
                        <input class="tailleInput" id="inscriptionMotDePasse" type="text" placeholder="Mot de passe" name="Mot_De_Passe">
                    </div>
                    <input type="hidden" name="ID_Role" value="2">

                    <input class="boutonFormulaire" type="submit" id="">
                </form>
            </div>
        </section>
    </main>

    <footer class="card-footer text-body-secondary mt-4">
        <div class="container">
            <p>
                Nom site <br>
                Tout droit réservé
            </p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>