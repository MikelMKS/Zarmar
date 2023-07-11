<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>El Zar del Mar</title>
  <link rel="icon" href="./../public/img/fav.png">

  <!--
    - custom css link 
  -->
  <link rel="stylesheet" href="./assets/css/foodhubNueva.css">
  <link rel="stylesheet" href="./assets/css/media_query.css">

  <!--
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Monoton&family=Rubik:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

</head>

<body>

  <!--
    - main container
  -->

  <div class="container">

    <!--
      - #HEADER
    -->

    <header>

      <nav class="navbar">

        <div class="navbar-wrapper">

          <a href="{{ route('nueva') }}">
            <img src="./img/fav.png" alt="logo" width="50">
          </a>

          <ul class="navbar-nav">
            &nbsp;
            <li>
              <a class="nav-link social-t" style="cursor: pointer;display: flex;" onclick="window.location.replace('tel: 3336369783')">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-phone" viewBox="0 0 16 16"> <path d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z"/> <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/> </svg>
                <span>3336369783</span>
                TELEFONO
              </a>
            </li>
            <li>
              <a class="nav-link social-w" style="cursor: pointer;display: flex;" onclick="window.open('https://wa.me/3320775734')">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16"> <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/> </svg>
                <span>3320775734</span>
                WHATSAPP
              </a>
            </li>
            <li>
              <a class="nav-link social-f" style="cursor: pointer;display: flex;" onclick="window.open('https://www.facebook.com/elzardelmarmariscos/?ref=page_internal')">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16"> <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/> </svg>
                <span>elzardelmarmariscos</span>
                FACEBOOK
              </a>
            </li>
            <li>
              <a class="nav-link social-i" style="cursor: pointer;display: flex;" onclick="window.open('https://www.instagram.com/elzardelmar/?hl=es')">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16"> <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/> </svg>
                <span>elzardelmar</span>
                INSTAGRAM 
              </a>
            </li>
            <li>
              <a class="nav-link social-c" style="cursor: pointer;display: flex;" onclick="window.open('mailto: contacto@elzardelmar.com.mx')">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16"> <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/> </svg>
                <span>contacto@elzardelmar.com.mx</span>
                CORREO
              </a>
            </li>
            <li>
              <a class="nav-link social-m" style="cursor: pointer;display: flex;" onclick="window.open('https://goo.gl/maps/LFHbJnqcZoqk9iGV6')">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-pin-map-fill" viewBox="0 0 16 16"> <path fill-rule="evenodd" d="M3.1 11.2a.5.5 0 0 1 .4-.2H6a.5.5 0 0 1 0 1H3.75L1.5 15h13l-2.25-3H10a.5.5 0 0 1 0-1h2.5a.5.5 0 0 1 .4.2l3 4a.5.5 0 0 1-.4.8H.5a.5.5 0 0 1-.4-.8l3-4z"/> <path fill-rule="evenodd" d="M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999z"/> </svg>
                <span>Mercado del Mar</span>
                UBICACION
              </a>
            </li>
            &nbsp;
          </ul>

          <div class="navbar-btn-group">

            <button class="shopping-cart-btn">
              <img src="./assets/images/menu.png" alt="shopping cart icon" width="20">
            </button>

            <button class="menu-toggle-btn">
              <span class="line one"></span>
              <span class="line two"></span>
              <span class="line three"></span>
            </button>

          </div>

        </div>

      </nav>

      <div id="cart-box" class="cart-box">

        <ul class="cart-box-ul">

            <button class="learn-more" onclick="$('#cart-box').removeClass('active');">
              <span class="circle" aria-hidden="true">
              <span class="icon arrow"></span>
              </span>
              <span class="button-text">&nbsp;Cerrar Menu</span>
            </button>

          @foreach ($categorias as $c)
          <li style="cursor: pointer" onclick="var categoria = '{{$c->id}}'; window.location.href = ('{{ url('menuNueva') }}' + '?categoria=' + categoria);">
            <div class="cart-item">
              <div class="img-box">
                <img src="./assets/categorias/{{$c->id}}.jpg" alt="product image" class="product-img" width="50" height="50"
                  loading="lazy">
              </div>
              <h5 class="product-name">{{$c->nombre}}</h5>
            </div>
          </li>
          @endforeach

        </ul>

      </div>

    </header>





    <main>

      <section class="testimonials" id="testimonials">

        {{-- <h2 class="section-title">What our customers say?</h2>

        <p class="section-text">
          Consectetur numquam poro nemo veniam
          eligendi rem adipisci quo modi.
        </p> --}}

        <div class="testimonials-grid">

          <div class="testimonials-card">

            <h4 class="card-title text-center">INTRODUCTORA PULPO</h4>

            {{-- <div class="testimonials-rating">
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
            </div> --}}


            <div class="item-center">
              <video onloadstart="this.playbackRate = 3.0;" class="about-img-normal" id="myVideo" autoplay="true" loop="true" muted="muted" playbackRate="2">
                <source src="./videos/introductora.mp4" type="video/mp4">
              </video>
            </div>

            <div class="item-center">
              <a href="#about">
                <button class="btn btn-primary btn-icon button-mi">
                  Mas información<img src="./assets/images/back.png" width="20">
                </button>
              </a>
            </div>

          </div>

          <div class="testimonials-card">

            <h4 class="card-title text-center">RESTAURANTE BAR</h4>

            <div class="item-center">
              <video onloadstart="this.playbackRate = 3.0;" class="about-img-normal" id="myVideo" autoplay="true" loop="true" muted="muted" playbackRate="2">
                <source src="./videos/zarvideo.mp4" type="video/mp4">
              </video>
            </div>


            <p class="testimonials-text">
            </p>

            <div class="item-center">
              <button class="btn btn-primary btn-icon button-mi" onclick="$('#cart-box').addClass('active');">
                Nuestro Menu<img src="./assets/images/back.png" width="20">
              </button>
            </div>

          </div>

        </div>

      </section>

      <!--
        - #HOME SECTION
      -->

      <section class="home" id="home">

        <div class="home-left">

          {{-- <p class="home-subtext">Hi, new friend!</p> --}}

          <h1 class="main-heading">¡CONOCENOS!</h1>

          <p class="home-text">
            Ven y degusta nuestros deliciosos molcajetes, camarones, zarandeado y muchos platillo más.
          </p>

          <div class="btn-group">

            {{-- <button class="btn btn-primary btn-icon">
              <img src="./assets/images/menu.svg" alt="menu icon">
              Nuestro Menu
            </button> --}}

            {{-- <button class="btn btn-secondary btn-icon">
              <img src="./assets/images/arrow.svg" alt="menu icon">
              Introductora
            </button> --}}

          </div>

        </div>

        <div class="home-right">
          @if(isset($imagenes[0]))
          <img src="./img/carta/{{$imagenes[0]->id}}.png" alt="food image" class="food-img food-1" width="200" loading="lazy">
          @else
          <img src="./assets/images/food1.png" alt="food image" class="food-img food-1" width="200" loading="lazy">
          @endif
          
          @if(isset($imagenes[1]))
          <img src="./img/carta/{{$imagenes[1]->id}}.png" alt="food image" class="food-img food-2" width="200" loading="lazy">
          @else
          <img src="./assets/images/food2.png" alt="food image" class="food-img food-2" width="200" loading="lazy">
          @endif

          @if(isset($imagenes[2]))
          <img src="./img/carta/{{$imagenes[2]->id}}.png" alt="food image" class="food-img food-3" width="200" loading="lazy">
          @else
          <img src="./assets/images/food3.png" alt="food image" class="food-img food-3" width="200" loading="lazy">
          @endif

          {{-- <img src="./assets/images/dialog-1.svg" alt="dialog" class="dialog dialog-1" width="230">
          <img src="./assets/images/dialog-2.svg" alt="dialog" class="dialog dialog-2" width="230"> --}}

          {{-- <img src="./assets/images/circle.svg" alt="circle shape" class="shape shape-2" width="15">
          <img src="./assets/images/circle.svg" alt="circle shape" class="shape shape-3" width="30">
          <img src="./assets/images/ring.svg" alt="ring shape" class="shape shape-4" width="60">
          <img src="./assets/images/ring.svg" alt="ring shape" class="shape shape-5" width="40"> --}}

        </div>

      </section>





      <!--
        - #ABOUT SECTION
      -->

      <section class="about" id="about">

        <div class="about-left">

          <div class="img-box">
            {{-- <img src="./assets/images/about-image.jpg" alt="about image" class="about-img" width="250"> --}}
            <video onloadstart="this.playbackRate = 3.0;" class="about-img" id="myVideo" autoplay="true" loop="true" muted="muted" playbackRate="2">
              <source src="./videos/pulpoNormal.mp4" type="video/mp4">
            </video>
          </div>

          <div class="abs-content-box">
            <div class="dotted-border">
              <p class="text-md">Introductora <br> desde hace</p>
              <p class="number-lg">{{$anio = Date('Y')-2015}}</p>
              <p class="text-md">Años</p>
            </div>
          </div>

          {{-- <img src="./assets/images/circle.svg" alt="circle shape" class="shape shape-6" width="20">
          <img src="./assets/images/circle.svg" alt="circle shape" class="shape shape-7" width="30">
          <img src="./assets/images/ring.svg" alt="ring shape" class="shape shape-8" width="35">
          <img src="./assets/images/ring.svg" alt="ring shape" class="shape shape-9" width="80"> --}}

        </div>

        <div class="about-right">

          <h2 class="section-title">LO QUE NOS DISTINGUE</h2>

          <p class="section-text">
            Somos una empresa mayorista con {{$anio = Date('Y')-2015}} años de experiencia introduciendo pulpo yucateco, distribuyendo a los mejores restaurantes de Guadalajara y la república. Empresa 100% mexicana y orgullosamente tapatía, en donde garantizamos nuestra calidad.
          </p>

          {{-- <img src="./assets/images/signature.png" alt="signature" class="signature" width="150"> --}}

        </div>

      </section>





      <!--
        - #SERVICES SECTION
      -->

      <section class="services" id="services">

        <div class="service-back">
        <div class="service-card">

          <p class="card-number"></p>

          <h3 class="card-heading">SATISFACCIÓN GARANTIZADA</h3>

          <p class="card-text">
            Ofrecemos productos de la más alta calidad para asegurar la satisfacción de nuestros clientes
          </p>

        </div>
        </div>

        <div class="service-back">
        <div class="service-card">

          <p class="card-number"></p>

          <h3 class="card-heading">ENVÍOS SEGUROS</h3>

          <p class="card-text">
            Comprar con nosotros es muy fácil, tu pedido llegará a la puerta de tu negocio rápidamente.
          </p>

        </div>
        </div>

        <div class="service-back">
        <div class="service-card">

          <p class="card-number"></p>

          <h3 class="card-heading">ATENCIÓN PERSONALIZADA</h3>

          <p class="card-text">
            Si tienes alguna duda con gusto te ayudaremos, puedes enviarnos un correo o llamarnos.
          </p>

        </div>
        </div>

        <div class="service-back">
        <div class="service-card">

          <p class="card-number"></p>

          <h3 class="card-heading">FORTALEZAS</h3>

          <p class="card-text">
            Mantenemos relaciones de negocio a largo plazo con nuestros clientes, a través de la atención personalizada y cuidando nuestros tiempos de entrega.
          </p>

        </div>
        </div>

        <div class="service-back">
        <div class="service-card">

          <p class="card-number"></p>

          <h3 class="card-heading">EXPERIENCIA</h3>

          <p class="card-text">
            Tenemos amplia experiencia, siempre a la vanguardia y al servicio de nuestros clientes, por ello somos la mejor opción en nuestro ramo.
          </p>

        </div>
        </div>

        <div class="service-back">
        <div class="service-card">

          <p class="card-number"></p>

          <h3 class="card-heading">PUNTUALIDAD</h3>

          <p class="card-text">
            Es importante destacar que siempre cumplimos en tiempo y forma todos los pedidos de nuestros clientes.
          </p>

        </div>
        </div>

      </section>





      <!--
        - #PRODUCT SECTION
      -->

      <section class="product" id="menu">

        <h2 class="section-title">PULPOS</h2>

        {{-- <p class="section-text">
          Consectetur numquam poro nemo veniam
          eligendi rem adipisci quo modi.
        </p> --}}

        <div class="products-grid3">

          <a>
            <div class="product-card">
              <div class="img-box">
                <img src="./img/productos/pulpo4_6.jpg" alt="product image" class="product-img3" width="200" loading="lazy">
              </div>
              <div class="product-content">
                <div class="wrapper">
                  <h3 class="product-name">PULPO</h3>
                  <p class="product-price">
                    <span class="small"></span>4/6
                  </p>
                </div>
              </div>
            </div>
          </a>
          
          <a>
            <div class="product-card">
              <div class="img-box">
                <img src="./img/productos/pulpo2_4.jpg" alt="product image" class="product-img3" width="200" loading="lazy">
              </div>
              <div class="product-content">
                <div class="wrapper">
                  <h3 class="product-name">PULPO</h3>
                  <p class="product-price">
                    <span class="small"></span>2/4
                  </p>
                </div>
              </div>
            </div>
          </a>

          <a>
            <div class="product-card">
              <div class="img-box">
                <img src="./img/productos/pulpo1_2.jpg" alt="product image" class="product-img3" width="200" loading="lazy">
              </div>
              <div class="product-content">
                <div class="wrapper">
                  <h3 class="product-name">PULPO</h3>
                  <p class="product-price">
                    <span class="small"></span>1/2
                  </p>
                </div>
              </div>
            </div>
          </a>

        </div>

        {{-- <button class="btn btn-primary btn-icon">
          <img src="./assets/images/menu.svg" alt="menu icon">
          Full menu
        </button> --}}

      </section>


    </main>





    <!--
      - #FOOTER
    -->

    <footer>

      <div class="footer-wrapper">

        <a href="#">
          {{-- <img src="./img/fav.png" alt="logo" class="footer-brand" width="60"> --}}
        </a>

        <div class="social-link">

          <a style="cursor: pointer;display: flex;" onclick="window.location.replace('tel: 3336369783')">
              <img src="./img/iconos/llamada.png" width="30" height="30">
          </a>

          <a style="cursor: pointer;display: flex;" onclick="window.open('https://wa.me/3330775734')">
              <img src="./img/iconos/whatsapp.png" width="30" height="30">
          </a>

          <a style="cursor: pointer;display: flex;" onclick="window.open('https://www.facebook.com/elzardelmarmariscos/?ref=page_internal')">
              <img src="./img/iconos/facebook.png" width="30" height="30">
          </a>

          <a style="cursor: pointer;display: flex;" onclick="window.open('https://www.instagram.com/elzardelmar/?hl=es')">
              <img src="./img/iconos/instagram.png" width="30" height="30">
          </a>

          <a style="cursor: pointer;display: flex;" onclick="window.open('mailto: contacto@elzardelmar.com.mx')">
              <img src="./img/iconos/correo.png" width="30" height="30">
          </a>

          <a style="cursor: pointer;display: flex;" onclick="window.open('https://goo.gl/maps/LFHbJnqcZoqk9iGV6')">
              <img src="./img/iconos/google-maps.png" width="30" height="30">
          </a>

        </div>

        <p class="copyright"></p>

      </div>

    </footer>

  </div>





  <!--
    - custom js link
  -->
  <script src="./assets/js/foodhub.js"></script>

  <!--
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>
