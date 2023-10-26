<?php include "php/bdd/conn.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style/normalize.css">
    <title>Votre titre</title>
    <style>
        /* Ajoutez ici vos styles CSS personnalisés si nécessaire */
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container">
                <a class="navbar-brand" href="index.php">nom site</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="php/all-article.php"> All Article</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="php/article-page.php">exemple Article 1</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" aria-disabled="true">TBA</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="container mt-4">
        <h1>Le titre du site</h1>

        <div class="container">
            <div class="row">
                <!-- card part -->
                <div class="col">
                    <?php
                        // '.$donnee['Img'].'
                        $test = $conn->select("Article");
                        $article = $test;
                        foreach ($article as $donnee) {
                        echo   '<div class="col p-2">
                                    <div class="card">
                                        <img src="img/gary-bendig-6GMq7AGxNbE-unsplash.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">' . $donnee['Titre'] . '</h5>
                                            <p class="card-text">' . $donnee['Description'] . '</p>
                                            <a href="#" class="btn btn-outline-info btn-sm">Go somewhere</a>
                                        </div>
                                    </div>
                                </div>';
                        };
                    ?>
                </div>
                <!-- info part -->
                <div class="col">
                    <!-- script -->
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Actu</h5>
                            <ul class="list-group">
                                <?php
                                    $tnews = $conn->selectLimit("Article");
                                    $news = $tnews;
                                    foreach  ($news as $actu) {
                                        echo
                                        '<li class="list-group-item">' . $actu['Date'] . ' | '. $actu['Titre'] . '</li>';
                                    };
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-3">
            <div class="col-md-6">
                <div class="card">
                    <img src="img/gary-bendig-6GMq7AGxNbE-unsplash.jpg" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Titre de l'article</h5>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Asperiores facere, aperiam suscipit eligendi nisi quidem autem officia explicabo,
                            repudiandae provident quos delectus reiciendis quo laudantium,
                            harum quasi praesentium deserunt. Quae?
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-3">
            <div class="col-md-6">
                <div class="card">
                    <img src="img/thomas-bonometti-OyO5NDiRPMM-unsplash.jpg" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Titre de l'article</h5>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Asperiores facere, aperiam suscipit eligendi nisi quidem autem officia explicabo,
                            repudiandae provident quos delectus reiciendis quo laudantium,
                            harum quasi praesentium deserunt. Quae?
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row-g3">
            <!-- section test 2 -->
            <div class="col-md-6">
                <div class="card mt-4">
                    <img src="img/mohamed-elsayed-bEkY-RoULlY-unsplash.jpg" class="card-img-top w-50%" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Titre de l'article</h5>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Asperiores facere, aperiam suscipit eligendi nisi quidem autem officia explicabo,
                            repudiandae provident quos delectus reiciendis quo laudantium,
                            harum quasi praesentium deserunt. Quae?
                        </p>
                    </div>
                </div>
            </div>

            <!-- test card horizontal -->
            <div class="col-md-6">
                <div class="card mt-4">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="img/joshua-j-cotten-dX1P3yZkuwc-unsplash.jpg" class="img-fluid" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Titre accrocheur</h5>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Asperiores facere, aperiam suscipit eligendi nisi quidem autem officia explicabo,
                                    repudiandae provident quos delectus reiciendis quo laudantium,
                                    harum quasi praesentium deserunt. Quae?
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- section test 3 -->
        <div class="card mt-4">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="img/mohamed-elsayed-DWpR-BpKlw0-unsplash.jpg" class="img-fluid" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Section 3</h5>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Asperiores facere, aperiam suscipit eligendi nisi quidem autem officia explicabo,
                            repudiandae provident quos delectus reiciendis quo laudantium,
                            harum quasi praesentium deserunt. Quae?
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mt-4">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="img/mohamed-elsayed-DWpR-BpKlw0-unsplash.jpg" class="img-fluid" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Section 3B</h5>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Asperiores facere, aperiam suscipit eligendi nisi quidem autem officia explicabo,
                            repudiandae provident quos delectus reiciendis quo laudantium,
                            harum quasi praesentium deserunt. Quae?
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- section test 4 -->
        <div class="card mt-4">
            <img src="img/mohamed-elsayed-DWpR-BpKlw0-unsplash.jpg" class="card-img-top" alt="">
            <div class="card-body">
                <p class="card-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Asperiores facere, aperiam suscipit eligendi nisi quidem autem officia explicabo,
                    repudiandae provident quos delectus reiciendis quo laudantium,
                    harum quasi praesentium deserunt. Quae?
                </p>
            </div>
        </div>
    </main>

    <footer class="card-footer text-body-secondary mt-4">
        <div class="container">
            <p>
                Nom site <br>
                Tout droit réservé
            </p>
        </div>
    </footer>

    <!-- Scripts Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>