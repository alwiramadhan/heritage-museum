<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- Data AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <title>Heritage - Musem and Art Gallery</title>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" data-aos="fade-down" data-aos-duration="1000"
        data-aos-delay="50">
        <div class="container">
            <a class="navbar-brand fs-5" href="#">HERITAGE</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#museum">Museum</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#arts">Arts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Disabled</a>
                    </li>
                </ul>
                <div class="navbar-nav">
                    <span class="nav-link" >
                        <?php
                           echo isset($_POST['username']) ? $_POST['username']: '<a href="sign_in.html" class="nav-link" >Sign In</a>';
                        ?>
                    </span>
                </div>
            </div>
        </div>
    </nav>


    <!-- Jumbotron -->
    <div class="jumbotron">
        <div class="container" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="50">
            <h1 class="display-4">Museum of Arts</h1>
            <p class="lead">Find Solace in Paintings and Artifacts.<br>Come and Get Attached to The Goodness of
                History.
            </p>
            <button class="btn-exlpore" href="#museum">Explore</button>
        </div>
    </div>

    <!-- Museum -->
    <section class="museum" id="museum">
        <div class="container">
            <h2>Museum</h2>
            <img src="img/location.svg" style="width: 15px;" alt="">
            <span>Jalan Medan Merdeka Barat No. 12, Jakarta Selatan</span>

        </div>
        </div>
        <div class="container">
            <div class="row ">
                <div class="col-md-3 py-3">
                    <img src="img/museum-1.jpg" class="card-img-top" alt="Museum 1">
                </div>
                <div class="col-md-3 py-3">
                    <img src="img/museum-2.jpg" class="card-img-top" alt="Museum 2">
                </div>
                <div class="col-md-3 py-3">
                    <img src="img/museum-3.jpg" class="card-img-top" alt="Museum 3">
                </div>
                <div class="col-md-3 py-3">
                    <img src="img/museum-4.jpg" class="card-img-top" alt="Museum 4">
                </div>
            </div>
        </div>
    </section>


    <!-- Arts Section -->
    <section id="arts" class="arts">
        <div class="container">
        </div>
        <div class="container">
            <div class="row mb-4">
                <div class="col-md-6 col-12 text-light fs-4">Arts</div>
                <div class="col-md-6 col-12 text-light fs-4 text-lg-end">
                    <a href="/arts.html" class="btn-see-more">See all</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card mb-3" style="max-width: 540px; max-height: 270px;">
                        <div class="row g-0">
                            <div class="col-md-4 embed-responsive embed-responsive-16by9">
                                <img src="img/monalisa.jpg" class="img-fluid rounded-start embed-responsive-item "
                                    alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body" style="max-height: 270px; overflow: auto;">
                                    <h5 class="card-title">Judul</h5>
                                    <p class="card-text"><small class="text-muted">by Leonardo Davinci</small></p>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eos
                                        perferendis accusamus vero pariatur! Quisquam officia reiciendis natus voluptate
                                        expedita repellendus maxime, velit saepe minima iste, dolores deleniti
                                        necessitatibus ipsa quos. Lorem ipsum dolor sit amet consectetur adipisicing
                                        elit.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-3" style="max-width: 540px; max-height: 270px;">
                        <div class="row g-0">
                            <div class="col-md-4 embed-responsive embed-responsive-16by9">
                                <img src="img/museum-1.jpg" class="img-fluid rounded-start embed-responsive-item "
                                    alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body" style="max-height: 270px; overflow: auto;">
                                    <h5 class="card-title">Judul</h5>
                                    <p class="card-text"><small class="text-muted">by Leonardo Davinci</small></p>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eos
                                        perferendis accusamus vero pariatur! Quisquam officia reiciendis natus voluptate
                                        expedita repellendus maxime, velit saepe minima iste, dolores deleniti
                                        necessitatibus ipsa quos. Lorem ipsum dolor sit amet consectetur adipisicing
                                        elit. Architecto iusto laboriosam et debitis nemo quae consequatur dolore quia
                                        officiis possimus! Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                        Veniam consectetur quae corporis voluptate obcaecati cupiditate id magnam animi
                                        aliquid mollitia.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-3" style="max-width: 540px; max-height: 270px;">
                        <div class="row g-0">
                            <div class="col-md-4 embed-responsive embed-responsive-16by9">
                                <img src="img/monalisa.jpg" class="img-fluid rounded-start embed-responsive-item "
                                    alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body" style="max-height: 270px; overflow: auto;">
                                    <h5 class="card-title">Judul</h5>
                                    <p class="card-text"><small class="text-muted">by Leonardo Davinci</small></p>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eos
                                        perferendis accusamus vero pariatur! Quisquam officia reiciendis natus voluptate
                                        expedita repellendus maxime, velit saepe minima iste, dolores deleniti
                                        necessitatibus ipsa quos. Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit. Cum saepe laborum, nobis, omnis, illo ipsam quisquam at autem reiciendis
                                        nihil earum nulla iure suscipit quo atque. Velit cumque sunt deleniti?</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-3" style="max-width: 540px; max-height: 270px;">
                        <div class="row g-0">
                            <div class="col-md-4 embed-responsive embed-responsive-16by9">
                                <img src="img/monalisa.jpg" class="img-fluid rounded-start embed-responsive-item "
                                    alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body" style="max-height: 270px; overflow: auto;">
                                    <h5 class="card-title">Judul</h5>
                                    <p class="card-text"><small class="text-muted">by Leonardo Davinci</small></p>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eos
                                        perferendis accusamus vero pariatur! Quisquam officia reiciendis natus voluptate
                                        expedita repellendus maxime, velit saepe minima iste, dolores deleniti
                                        necessitatibus ipsa quos. Lorem ipsum dolor sit amet consectetur adipisicing
                                        elit. Aspernatur, rem ullam ipsa provident necessitatibus autem molestiae
                                        veritatis modi iure optio? Voluptate, perferendis. Blanditiis, facilis,
                                        aspernatur culpa non, aperiam unde eos excepturi accusantium dignissimos ipsa
                                        quae. Impedit soluta in dolores sed.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer style="background-color: #242424">
        <div class="container p-4">
            <div class="row">
                <div class="col-lg-6 col-md-12 mb-4">
                    <h5 class="mb-3" style="letter-spacing: 2px; color: #b9b9b9;">HERITAGE</h5>
                    <p style="color: #b9b9b9;">
                        The best introduction to art is to stroll through a museum.
                        The more art you see, the more you'll learn to define your own taste. Find Solace in Paintings
                        and Artifacts. Come and Get Attached to The Goodness of
                        History.
                    </p>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5 class="mb-3" style="letter-spacing: 2px; color: #b9b9b9;">links</h5>
                    <ul class="list-unstyled mb-0">
                        <li class="mb-1">
                            <a href="#!" style="color: #4f4f4f;">Home</a>
                        </li>
                        <li class="mb-1">
                            <a href="#!" style="color: #4f4f4f;">Museum</a>
                        </li>
                        <li class="mb-1">
                            <a href="#!" style="color: #4f4f4f;">Art</a>
                        </li>
                        <li>
                            <a href="#!" style="color: #4f4f4f;">Buat apa ya</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5 class="mb-1" style="letter-spacing: 2px; color: #b9b9b9;">opening hours</h5>
                    <table class="table" style="color: #4f4f4f; border-color: #666;">
                        <tbody>
                            <tr>
                                <td>Mon - Fri:</td>
                                <td>8am - 9pm</td>
                            </tr>
                            <tr>
                                <td>Sat - Sun:</td>
                                <td>8am - 1am</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="text-center p-3" style="color: #b9b9b9; background-color: rgba(0, 0, 0, 0.2);">
            © 2022 Copyright:
            <a style="color:#b9b9b9;">Alwi Ramadhan</a>
        </div>
    </footer>


    <!-- Data AOS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>