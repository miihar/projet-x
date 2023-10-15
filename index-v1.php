<!DOCTYPE html>
<html>

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
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Article</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sujet ? drop down</a>
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
        <h1>le titre du site</h1>
        <!-- équateur -->
        <div class="d-flex flex-row mb-3">
            <div class="p-2">Flex item 1</div>
            <div class="p-2">Flex item 2</div>
            <div class="p-2">Flex item 3</div>
            <div class="p-2">Flex item 4</div>
            <div class="p-2">Flex item 5</div>
            <div class="p-2">Flex item 6</div>
            <div class="p-2">Flex item 7</div>
            <div class="p-2">Flex item 8</div>
            <div class="p-2">Flex item 9</div>
        </div>
        <!-- section test 1  -->
        <section class="card d-flex justify-content-center carto">
            <!-- article  principaux -->
            <div style="width: 45%;" class="p-2 flex-fill m-2">
                <!-- carte article 1 -->
                <div class="card">
                    <h4 class="card-title card-header">Titre de l'article</h4>
                    <div class="card-body">
                        <div>
                            <img src="img/thomas-bonometti-OyO5NDiRPMM-unsplash.jpg" class="card-img-top" alt="">
                        </div>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Asperiores facere, aperiam suscipit eligendi nisi quidem autem officia explicabo,
                            repudiandae provident quos delectus reiciendis quo laudantium,
                            harum quasi praesentium deserunt. Quae?
                        </p>
                    </div>
                </div>
                <!-- carte ariticle 2 -->
                <div class="card">
                    <h4 class="card-title card-header">Titre de l'article</h4>
                    <div class="card-body">
                        <img src="img/gary-bendig-6GMq7AGxNbE-unsplash.jpg" class="img-fluid" alt="">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Asperiores facere, aperiam suscipit eligendi nisi quidem autem officia explicabo,
                            repudiandae provident quos delectus reiciendis quo laudantium,
                            harum quasi praesentium deserunt. Quae?
                        </p>
                    </div>
                </div>
            </div>
            <!-- partie de droite avec les actu -->
            <div class="one table-responsive flex-fill" style="width: 30%;">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">Actu</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>titre</td>
                            <td>Info 1</td>
                        </tr>
                        <tr>
                            <td>titre</td>
                            <td>Info 2</td>
                        </tr>
                        <tr>
                            <td>titre</td>
                            <td>Info 3</td>
                        </tr>
                    </tbody>
                </table>
                <!-- info en plus -->
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                    </table>
                </div>
            </div>
        </section>
        <!-- -------OK------ -->

        <!-- section test 2 -->
        <section>
            <div class="card p-2 mt-2">
                <h4 class="card-title card-header">Titre de l'article</h4>
                <div class="card-body">
                    <div class="carto">
                        <img src="img/mohamed-elsayed-bEkY-RoULlY-unsplash.jpg" class="img-fluid w-25 p-2" alt="">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Asperiores facere, aperiam suscipit eligendi nisi quidem autem officia explicabo,
                            repudiandae provident quos delectus reiciendis quo laudantium,
                            harum quasi praesentium deserunt. Quae?
                        </p>
                    </div>
                </div>
            </div>
            <!-- test card horizontal -->
            <div class="card mb-3" style="width: 40%;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="img/joshua-j-cotten-dX1P3yZkuwc-unsplash.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">titre accrocheur</h5>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Asperiores facere, aperiam suscipit eligendi nisi quidem autem officia explicabo,
                                repudiandae provident quos delectus reiciendis quo laudantium,
                                harum quasi praesentium deserunt. Quae?
                            </p>
                            <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="card p-2 mt-2">
                <h4 class="card-title card-header">Titre de l'article</h4>
                <div class="card-body">
                    <div class="carto">
                        <img src="img/mohamed-elsayed-bEkY-RoULlY-unsplash.jpg" class="img-fluid w-25 p-2" alt="">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Asperiores facere, aperiam suscipit eligendi nisi quidem autem officia explicabo,
                            repudiandae provident quos delectus reiciendis quo laudantium,
                            harum quasi praesentium deserunt. Quae?
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- ------OK------ -->
        <!-- section test 3 -->
        <section class="d-flex justify-content-center">
            <div class="card w-50 p-3">
                <h4 class="card-title card-header">Section 3</h4>
                <div class="one card-body d-flex justify-content-evenly">
                    <img src="img/mohamed-elsayed-DWpR-BpKlw0-unsplash.jpg" class="img-thumbnail w-25 p-3" alt="">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Asperiores facere, aperiam suscipit eligendi nisi quidem autem officia explicabo,
                        repudiandae provident quos delectus reiciendis quo laudantium,
                        harum quasi praesentium deserunt. Quae?
                    </p>
                </div>
            </div>
            <div class="card w-50 p-3">
                <h4 class="card-title card-header">Section 3B</h4>
                <div class="one card-body d-flex justify-content-evenly">
                    <img src="img/mohamed-elsayed-DWpR-BpKlw0-unsplash.jpg" class="img-thumbnail w-25 p-3" alt="">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Asperiores facere, aperiam suscipit eligendi nisi quidem autem officia explicabo,
                        repudiandae provident quos delectus reiciendis quo laudantium,
                        harum quasi praesentium deserunt. Quae?
                    </p>
                </div>
        </section>
        <!-- section test 4 -->
        <section>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Asperiores facere, aperiam suscipit eligendi nisi quidem autem officia explicabo,
                repudiandae provident quos delectus reiciendis quo laudantium,
                harum quasi praesentium deserunt. Quae?
            </p>
            <img src="img/mohamed-elsayed-DWpR-BpKlw0-unsplash.jpg" class="img-fluid w-50 p-3" alt="">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Asperiores facere, aperiam suscipit eligendi nisi quidem autem officia explicabo,
                repudiandae provident quos delectus reiciendis quo laudantium,
                harum quasi praesentium deserunt. Quae?
            </p>
        </section>
    </main>

    <footer class="card-footer text-body-secondary">
        <p>
            nom site
            <br>
            Tout droit reservé
        </p>
        <p></p>
    </footer>
</body>
<!-- script JS Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" 
    crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" 
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" 
    crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" 
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" 
    crossorigin="anonymous">
</script>

</html>