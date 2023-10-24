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

    <main class="container mt-4">
        <h1>Le titre de votre site</h1>

        <div class="row row-cols-1 row-cols-md-2 g-4">
            <!-- équateur -->
            <div class="col">
                <div class="mt-2">
                    <img src="../img/thomas-bonometti-OyO5NDiRPMM-unsplash.jpg" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title mt-2">Titre de l'article</h5>
                        <p class="card-text mt-2">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Asperiores facere, aperiam suscipit eligendi nisi quidem autem officia explicabo,
                            repudiandae provident quos delectus reiciendis quo laudantium,
                            harum quasi praesentium deserunt. Quae?
                        </p>
                    </div>
                </div>
            </div>

            <!-- partie de droite avec les actu -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Actu</h5>
                        <ul class="list-group">
                            <li class="list-group-item">Info 1</li>
                            <li class="list-group-item">Info 2</li>
                            <li class="list-group-item">Info 3</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div>
                <p class="card-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Asperiores facere, aperiam suscipit eligendi nisi quidem autem officia explicabo,
                    repudiandae provident quos delectus reiciendis quo laudantium,
                    harum quasi praesentium deserunt. Quae?
                </p>
                <p class="card-text mt-2">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Asperiores facere, aperiam suscipit eligendi nisi quidem autem officia explicabo,
                    repudiandae provident quos delectus reiciendis quo laudantium,
                    harum quasi praesentium deserunt. Quae?
                </p>
            </div>
        </div>
        <section></section>
    </main>

    <footer></footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>