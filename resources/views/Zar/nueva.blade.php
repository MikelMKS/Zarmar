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
              <a class="nav-link" style="cursor: pointer;display: flex;" onclick="window.location.replace('tel: 3336369783')">
                <img src="./img/iconos/llamada.png" width="20" height="20">
                &nbsp;TELEFONO 3336369783
              </a>
            </li>
            <li>
              <a class="nav-link" style="cursor: pointer;display: flex;" onclick="window.open('https://wa.me/3320775734')">
                <img src="./img/iconos/whatsapp.png" width="20" height="20">
                &nbsp;WHATSAPP 3320775734
              </a>
            </li>
            <li>
              <a class="nav-link" style="cursor: pointer;display: flex;" onclick="window.open('https://www.facebook.com/elzardelmarmariscos/?ref=page_internal')">
                <img src="./img/iconos/facebook.png" width="20" height="20">
                &nbsp;FACEBOOK elzardelmarmariscos
              </a>
            </li>
            <li>
              <a class="nav-link" style="cursor: pointer;display: flex;" onclick="window.open('https://www.instagram.com/elzardelmar/?hl=es')">
                <img src="./img/iconos/instagram.png" width="20" height="20">
                &nbsp;INSTAGRAM elzardelmar
              </a>
            </li>
            <li>
              <a class="nav-link" style="cursor: pointer;display: flex;" onclick="window.open('mailto: contacto@elzardelmar.com.mx')">
                <img src="./img/iconos/correo.png" width="20" height="20">
                &nbsp;CORREO contacto@elzardelmar.com.mx
              </a>
            </li>
            <li>
              <a class="nav-link" style="cursor: pointer;display: flex;" onclick="window.open('https://goo.gl/maps/LFHbJnqcZoqk9iGV6')">
                <img src="./img/iconos/google-maps.png" width="20" height="20">
                &nbsp;DIRECCION Mercado del Mar,Calle Prolongación Pinosuares 469 Col. El Vigia, Zapopan, Jalisco
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

          <h4 class="cart-h4" style="display:flex;cursor:pointer;" onclick="$('#cart-box').removeClass('active');">
              <img src="./assets/images/back.png" alt="shopping cart icon" width="20">&nbsp;Cerrar Menu
          </h4>

          @foreach ($categorias as $c)
          <li style="cursor: pointer" onclick="var categoria = '{{$c->id}}'; window.location.href = ('{{ url('menu') }}' + '?categoria=' + categoria);">
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
                <button class="btn btn-primary btn-icon">
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
              <button class="btn btn-primary btn-icon" onclick="$('#cart-box').addClass('active');">
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

        <div class="service-card">

          <p class="card-number"></p>

          <h3 class="card-heading">SATISFACCIÓN GARANTIZADA</h3>

          <p class="card-text">
            Ofrecemos productos de la más alta calidad para asegurar la satisfacción de nuestros clientes
          </p>

        </div>

        <div class="service-card">

          <p class="card-number"></p>

          <h3 class="card-heading">ENVÍOS SEGUROS</h3>

          <p class="card-text">
            Comprar con nosotros es muy fácil, tu pedido llegará a la puerta de tu negocio rápidamente.
          </p>

        </div>

        <div class="service-card">

          <p class="card-number"></p>

          <h3 class="card-heading">ATENCIÓN PERSONALIZADA</h3>

          <p class="card-text">
            Si tienes alguna duda con gusto te ayudaremos, puedes enviarnos un correo o llamarnos.
          </p>

        </div>

        <div class="service-card">

          <p class="card-number"></p>

          <h3 class="card-heading">FORTALEZAS</h3>

          <p class="card-text">
            Mantenemos relaciones de negocio a largo plazo con nuestros clientes, a través de la atención personalizada y cuidando nuestros tiempos de entrega.
          </p>

        </div>

        <div class="service-card">

          <p class="card-number"></p>

          <h3 class="card-heading">EXPERIENCIA</h3>

          <p class="card-text">
            Tenemos amplia experiencia, siempre a la vanguardia y al servicio de nuestros clientes, por ello somos la mejor opción en nuestro ramo.
          </p>

        </div>

        <div class="service-card">

          <p class="card-number"></p>

          <h3 class="card-heading">PUNTUALIDAD</h3>

          <p class="card-text">
            Es importante destacar que siempre cumplimos en tiempo y forma todos los pedidos de nuestros clientes.
          </p>

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

        <div class="products-grid">

          <a>
            <div class="product-card">
              <div class="img-box">
                <img src="./img/productos/pulpo4_6.jpg" alt="product image" class="product-img" width="200" loading="lazy">
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
                <img src="./img/productos/pulpo2_4.jpg" alt="product image" class="product-img" width="200" loading="lazy">
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
                <img src="./img/productos/pulpo1_2.jpg" alt="product image" class="product-img" width="200" loading="lazy">
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
