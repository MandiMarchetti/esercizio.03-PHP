<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" 415'<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Be a Teacher!</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <header>
        <!-- NAVBAR -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./research.php">Find a Teacher</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./register.php">Be a Teacher!</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>


    <div class="container mt-3">
        <div class="row">
            <div class="col">
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>


        <div class="row mt-4">
            <div class="col-4" style="border: solid 2px; border-radius: 15px;">
                <div class="my-3">
                    <div class="d-flex gap-3 ">
                        <div>
                            <img src="https://avatars.preply.com/i/logos/i/logos/avatar_n64m8bvx2.jpg" alt="teacher" style="width: 110px; border-radius:3px">
                        </div>
                        <div>
                            <div class="d-flex align-items-center gap-1">
                                <p class="m-0" style="font-weight: 500; font-size: 1.5rem">Kacper M.</p>
                                <img src="./svg/cercificated_incon.svg" alt="" style="width: 20px; height: 15px; ">
                                <img src="https://static.preply.com/groot/country_flags/4x3/pl.svg" alt="flag" style="width: 15px; height: 10px; ">
                            </div>
                            <div class="d-flex align-sefl-center gap-1">
                                <img src="./svg/language_icon.svg" alt="">
                                <p class="m-0">Polish (Native)</p>
                            </div>
                            <div class="d-flex gap-2">
                                <div>
                                    <p class="m-0" style="font-size: 1.2rem; font-weight: 500 ;">€65</p>
                                    <p class="m-0" style="font-size: 0.8rem; color:gray">per lesson</p>
                                </div>
                                <div>
                                    <div class="d-flex gap-1">
                                        <img src="./svg/star_icon.svg" alt="">
                                        <p class="m-0" style="font-size: 1.3rem; font-weight: 500 ;">5</p>
                                    </div>
                                    <p class="m-0" style="font-size: 0.8rem; color:gray">80 reviews</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="my-3">
                            <p class="m-0">I am Kacper, a passionate English tutor born in Poland. In addition to teaching, I am a singer and music producer, incorporating creativity into my lessons... </p>
                        </div>
                        <a href="#">Read more</a>
                    </div>
                    <div class="mt-2">
                        <button type="button" class="btn btn-info">
                            <a href="#" style="text-decoration: none;" style="color:black !important">Book trial lesson</a>
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>