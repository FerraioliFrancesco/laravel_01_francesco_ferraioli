<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
     <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    {{-- boostrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    {{-- css personale --}}
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    {{-- start navbar --}}
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="./media/Italian-Sprout-LOGO-registrato-ok_260x.avif" alt="">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"></a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Prodotti
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Novita'</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Articoli per la germinazione</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Tutti i prodotti</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Germogli</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Risparmia
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Offerte</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Offerte Lampo</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
    </nav>
      {{-- end navbar --}}
      
      {{-- start header --}}
       <!-- Swiper -->
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <h1 class="carousel-title">SEMI DA GERMOGLIO</h1>
                <img src="./media/carousel/Slide-germogli-2000x800-min_2000x.webp" alt="">
            </div>
            <div class="swiper-slide">
                <h1 class="carousel-title">SEMI PER MICROGREENS</h1>
                <img src="./media/carousel/Slide-microgreens-2000x800-min_2000x.webp" alt="">
            </div>
            <div class="swiper-slide">
                <h1 class="carousel-title">SEMI PER ORTO</h1>
                <img src="./media/carousel/Slide-orto-2000x800-min_2000x.webp" alt="">
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>
      {{-- end header --}}

    {{-- start section 1 --}}
    <div class="container-fluid mt-3 section1">
        <div class="row">
            <div class="col-12 text-center">
                <h4>PRODOTTI IN TENDENZA</h4>
            </div>
        </div>
        
        <div class="col-12 d-flex justify-content-center align-item-center">
            <button class="btn btn-primary rounded-pill button">
                <a href="{{route('prodotti')}}">Scopri tutta la collezione</a>
            </button>
        </div>
    </div>
    {{-- end section 1 --}}

    









      <!-- Swiper JS -->
      <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
      {{-- script boostrap --}}
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
      {{-- js personale --}}
      <script src="main.js"></script>
  </body>
</html>