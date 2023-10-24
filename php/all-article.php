<?php include "../bdd/conn.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
                            <a class="nav-link" href="./all-article.php">All Article</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../php/article-page.php">exemple Article 1</a>
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
            <div class="row row-cols-md-2 g-6">
                <!-- card part -->
                <div class="col d-flex flex-wrap">
                    <?php
                    // '.$donnee['Img'].'
                    $test = $conn->select("Article");
                    $article = $test;
                    foreach ($article as $donnee) {
                        echo   '<div class="col p-2">
                                        <div class="card" style="width: 9rem;">
                                            <img src="../img/gary-bendig-6GMq7AGxNbE-unsplash.jpg" class="card-img-top" alt="...">
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
    </main>
</body>

</html>