<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage - Posts</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <!-- Logo -->
    <nav class="navbar navbar-light bg-main">
        <div class="container p-4">
            <a class="navbar-brand m-auto" href="#">
                <img src="{{asset('images/logo.png')}}" width="180" alt="" loading="lazy">
            </a>
        </div>
    </nav>

    <!-- Contenido -->
    <section class="container-fluid content">
        <!-- Categorías -->
        <div class="row justify-content-center">
            <div class="col-10 col-md-12">
                <nav class="text-center my-5">
                    <a href="#" class="mx-3 pb-3 link-category d-block d-md-inline selected-category" >Todas</a>
                    <a href="#" class="mx-3 pb-3 link-category d-block d-md-inline" >Programación</a>
                    <a href="#" class="mx-3 pb-3 link-category d-block d-md-inline" >Desarrollo web</a>
                </nav>
            </div>
        </div>

        <!-- Posts -->
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="row">
                    <!-- Post 1 -->
                    <div class="col-md-4 col-12 justify-content-center mb-5">
                        <div class="card m-auto" style="width: 18rem;">
                            <img class="card-img-top" src="{{asset('images/3.png')}}" alt="Post Python">
                            <div class="card-body">
                                <small class="card-txt-category">Categoría: Programación</small>
                                <h5 class="card-title my-2">Aprende Python en un dos tres</h5>
                                <div class="d-card-text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Sed voluptatum ab cumque quisquam quod nesciunt fugiat,
                                    eius corrupti nulla veniam, molestias nemo repudiandae?
                                </div>
                                <a href="#" class="post-link"><b>Leer más</b></a>
                                <hr>
                                <div class="row">
                                    <div class="col-6 text-left">
                                        <span class="card-txt-author">BLOGUEA!</span>
                                    </div>
                                    <div class="col-6 text-right">
                                        <span class="card-txt-date">Hace 2 semanas</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Post 2 -->
                    <div class="col-md-4 col-12 justify-content-center mb-5">
                        <div class="card m-auto" style="width: 18rem;">
                            <img class="card-img-top" src="{{asset('images/3.png')}}" alt="Post Python">
                            <div class="card-body">
                                <small class="card-txt-category">Categoría: Programación</small>
                                <h5 class="card-title my-2">Aprende Python en un dos tres</h5>
                                <div class="d-card-text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Sed voluptatum ab cumque quisquam quod nesciunt fugiat,
                                    eius corrupti nulla veniam, molestias nemo repudiandae?
                                </div>
                                <a href="#" class="post-link"><b>Leer más</b></a>
                                <hr>
                                <div class="row">
                                    <div class="col-6 text-left">
                                        <span class="card-txt-author">BLOGUEA!</span>
                                    </div>
                                    <div class="col-6 text-right">
                                        <span class="card-txt-date">Hace 2 semanas</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Post 3 -->
                    <div class="col-md-4 col-12 justify-content-center mb-5">
                        <div class="card m-auto" style="width: 18rem;">
                            <img class="card-img-top" src="{{asset('images/3.png')}}" alt="Post Python">
                            <div class="card-body">
                                <small class="card-txt-category">Categoría: Programación</small>
                                <h5 class="card-title my-2">Aprende Python en un dos tres</h5>
                                <div class="d-card-text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Sed voluptatum ab cumque quisquam quod nesciunt fugiat,
                                    eius corrupti nulla veniam, molestias nemo repudiandae?
                                </div>
                                <a href="#" class="post-link"><b>Leer más</b></a>
                                <hr>
                                <div class="row">
                                    <div class="col-6 text-left">
                                        <span class="card-txt-author">BLOGUEA!</span>
                                    </div>
                                    <div class="col-6 text-right">
                                        <span class="card-txt-date">Hace 2 semanas</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <!-- Paginador -->

            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="container-fluid bg-main">
        <div class="row text-center p-4">
            <div class="mb-3">
                <img src="{{asset('images/logo.png')}}" alt="BLOGUEA! logo" width="120" id="logofooter">
            </div>
            <div id="col-md-10">
                <a href="https://www.facebook.com/BLOGUEA!">
                    <img src="{{asset('images/facebook.png')}}" class="img-fluid" width="40px" alt="facebook BLOGUEA!">
                </a>
                <a href="https://www.instagram.com/BLOGUEA!">
                    <img src="{{asset('images/instagram.png')}}" class="img-fluid" width="40px" alt="instagram BLOGUEA!">
                </a>
                <a href="https://www.youtube.com/c/BLOGUEA!Oficial">
                    <img src="{{asset('images/youtube.png')}}" class="img-fluid" width="40px" alt="youtube BLOGUEA!">
                </a>
                <p class="mt-3">Copyright © 2020 BLOGUEA!, Blog. <br> Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.min.js" integrity="sha384-5h4UG+6GOuV9qXh6HqOLwZMY4mnLPraeTrjT5v07o347pj6IkfuoASuGBhfDsp3d" crossorigin="anonymous"></script>
</body>
</html>