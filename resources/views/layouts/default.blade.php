<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Kino Angola | Plataforma de Descobertas Gastronômicas e Lazer')</title>

     <!-- LINKS CSS -->
     <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
     <link rel="stylesheet" href="css/styles.css">
     <link rel="stylesheet" href="css/bootstrap.css">
     <link rel="stylesheet" href="css/bootstrap.min.css">

     <link rel="shortcut icon" href="/images/logomarca/KINO DESIGN.png" type="image/x-icon">
</head>
<body>


  <header class="p-3 text-bg-dark sticky-top">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/kinoangola" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <img src="/images/logomarca/KINO DESIGN.png" alt="KINO" class="bi me-2" width="40" role="img" aria-label="KINO">
        </a>
  
        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="/kino/home" class="nav-link px-2 text-secondary">Início</a></li>
          <li><a href="/kino/estabeleciomentos" class="nav-link px-2 text-white">Estabeleciomentos</a></li>
          <li><a href="/kino/sejamembro" class="nav-link px-2 text-white">Seja Membro</a></li>
          <li><a href="/kino/contactus" class="nav-link px-2 text-white">Contacto</a></li>
          <li><a href="/kino/aboutus" class="nav-link px-2 text-white">Sobre</a></li>
        </ul>
  
        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
          <input style="color: red;" type="search" class="form-control form-control-white text-light" placeholder="Pesquisar..." aria-label="Search">
        </form>
  
        <div class="text-end">
          <a href="/kino/auth/logar" class="btn btn-outline-light me-2">Entrar</a>
          <a href="/kino/auth/cadastrar" type="button" class="btn btn-warning">Cadastra-se</a>
        </div>
      </div>
    </div>
  </header>
  
  <!--
  <header class="py-3 mb-4 border-bottom">
    <div class="container d-flex flex-wrap justify-content-center">
      <a href="/kino/app/views/home.php" class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto link-body-emphasis text-decoration-none">
        <svg class="bi me-2" width="40" height="32">
          <use xlink:href="#bootstrap" />
        </svg>
        <span class="fs-4">KINO</span>
      </a>
      <form class="col-12 col-lg-auto mb-3 mb-lg-0" role="search">
        <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
      </form>
    </div>
  </header>
  -->
  @yield('content')

<div class="b-example-divider"></div>




<footer class="py-5">
  <div class="row">
      <div class="col-6 col-md-2 mb-3">
          <h5>Empresa</h5>
          <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Nossa História</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Missãp e Visão</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Equipe</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Parcerias</a></li>
          </ul>
      </div>

      <div class="col-6 col-md-2 mb-3">
          <h5>Ajuda</h5>
          <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Suporte ao Cliente</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Guia de Usuário</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Termos e Privacidade</a></li>
          </ul>
      </div>

      <div class="col-6 col-md-2 mb-3">
          <h5>Contecte-se</h5>
          <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Eventos</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Descontos e Promoções</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary"><strong>kino@gmail.com</strong></a></li>
          </ul>
      </div>

      <div class="col-md-5 offset-md-1 mb-3">
          <form>
              <h5>Inscreva a sua empresa no nosso <strong> site</strong></h5>
              <p>Envie-nos o seu e-mail para que possamos entrar em contato consigo</p>
              <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                  <label for="newsletter1" class="visually-hidden">Endereço de e-mail</label>
                  <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                  <button class="btn btn-warning" type="button">Inscrever</button>
              </div>
          </form>
      </div>
  </div>

  <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
      <p>&copy; 2024 KINO. Todos os direitos reservados.</p>
      <ul class="list-unstyled d-flex">
          <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24">
                      <use xlink:href="#twitter" />
                  </svg></a></li>
          <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24">
                      <use xlink:href="#instagram" />
                  </svg></a></li>
          <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24">
                      <use xlink:href="#facebook" />
                  </svg></a></li>
      </ul>
  </div>
</footer>

  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    
  <script src="/js/map.js"></script>
  <script src="/js/scripts.js"></script>
  <script src="/js/bootstrap.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  <script src="/js/bootstrap.bundle.js"></script>
  <script src="/js/bootstrap.bundle.min.js"></script>
</body>
</html>