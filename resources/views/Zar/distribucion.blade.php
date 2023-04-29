<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>El Zar del mar</title>
  <link rel="icon" href="./../public/img/fav.png">

  <link rel="stylesheet" href="./assets/css/foodhub.css">
  <link rel="stylesheet" href="./assets/css/foodhubSCSS.scss">
  <link rel="stylesheet" href="./assets/css/media_query.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Monoton&family=Rubik:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

</head>

<body>

  <div class="container">

    <header>

      <nav class="navbar">

        <div class="navbar-wrapper">

          {{-- <a href="{{ route('indexZar') }}">
            <img src="./img/logo.png" alt="logo" width="250" height="100">
          </a> --}}
          <div></div>

          <ul class="navbar-nav">

            &nbsp;
            <li>
              <a href="{{ route('indexZar') }}" class="nav-link">INICIO</a>
            </li>
            <li>
              <a class="nav-link shopping-cart-btn" style="cursor: pointer">MENU</a>
            </li>
            <li>
              <a href="{{ route('distribucion') }}" class="nav-link">DISTRIBUCION</a>
            </li>
            <li>
              <a href="{{ route('admonLvl') }}" class="nav-link"><img src="./../public/img/iconos/adm.png" style="cursor:pointer;width:40px;height:40px;"></a>
            </li>
            <div class="navbar-btn-group">
  
              <button class="menu-toggle-btn">
                <span class="line one"></span>
                <span class="line two"></span>
                <span class="line three"></span>
              </button>
  
            </div>
            &nbsp;
          
        </ul>

        {{-- <a href="{{ route('indexZar') }}">
          <img src="./img/logo.png" alt="logo" width="250" height="100">
        </a> --}}
        <div></div>
        </div>
        <div class="navbar-wrapper-info">
          <br>
          <img onclick="window.location.replace('tel: 3336369783')" src="./../public/img/iconos/llamada.png" style="cursor:pointer;width:25px;height:25px;">
          <label onclick="window.location.replace('tel: 3336369783')" style="cursor:pointer" class="copyright2">3336369783</label>
          
          <img onclick="window.open('https://wa.me/3320775734')" src="./../public/img/iconos/whatsapp.png" style="cursor:pointer;width:25px;height:25px;">
          <label onclick="window.open('https://wa.me/3320775734')" style="cursor:pointer" class="copyright2">3320775734</label>
          
          <img onclick="window.open('https://www.facebook.com/elzardelmarmariscos/?ref=page_internal')" src="./../public/img/iconos/facebook.png" style="cursor:pointer;width:25px;height:25px;">
          <label onclick="window.open('https://www.facebook.com/elzardelmarmariscos/?ref=page_internal')" style="cursor:pointer" class="copyright2">facebook.com/elzardelmarmariscos</label>
          
          <img onclick="window.open('https://www.instagram.com/elzardelmar/?hl=es')" src="./../public/img/iconos/instagram.png" style="cursor:pointer;width:25px;height:25px;">
          <label onclick="window.open('https://www.instagram.com/elzardelmar/?hl=es')" style="cursor:pointer" class="copyright2">instagram.com/elzardelmar</label>
          
          <img onclick="window.open('mailto: contacto@elzardelmar.com.mx')" src="./../public/img/iconos/correo.png" style="cursor:pointer;width:25px;height:25px;">
          <label onclick="window.open('mailto: contacto@elzardelmar.com.mx')" style="cursor:pointer" class="copyright2">contacto@elzardelmar.com.mx</label>
          
          <img onclick="window.open('https://goo.gl/maps/LFHbJnqcZoqk9iGV6')" src="./../public/img/iconos/google-maps.png" style="cursor:pointer;width:25px;height:25px;">
          <label onclick="window.open('https://goo.gl/maps/LFHbJnqcZoqk9iGV6')" style="cursor:pointer" class="copyright2">Mercado del Mar</label>
        </div>

      </nav>

      <div class="cart-box">

        <ul class="cart-box-ul">

          <div style="justify-content: center;
          overflow-x: auto;
          display:         flex;
          align-items:     center;">
          <img src="./../public/img/logo.jpg" style="width:90px;height:90px;margin-right: 10px;"><br>
            <h4 class="cart-h4">Menu</h4>
          </div>
          <br><br>

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

    <section class="product" id="menu">

    <div class="products-grid" style="margin-top: 150px !important;margin-bottom: 10px !important;">

        <a>
        <div class="product-card">
            <div class="product-content">
                <div class="wrapper2">
                    <h3 class="product-name2">
                        <img src="./../public/img/tienda.png">
                        <br><br>
                        SATISFACCIÓN GARANTIZADA
                    </h3>
                    <p class="product-text">
                        Ofrecemos productos de la más alta calidad para asegurar la satisfacción de nuestros clientes
                    </p>
                </div>
            </div>
        </div>
        </a>
        <a>
        <div class="product-card">
            <div class="product-content">
                <div class="wrapper2">
                    <h3 class="product-name2">
                        <img src="./../public/img/camion.png">
                        <br><br>
                        ENVÍOS SEGUROS
                    </h3>
                    <p class="product-text">
                        Comprar con nosotros es muy fácil, tu pedido llegará a la puerta de tu negocio rápidamente.
                    </p>
                </div>
            </div>
        </div>
        </a>
        <a>
        <div class="product-card">
            <div class="product-content">
                <div class="wrapper2">
                    <h3 class="product-name2">
                        <img src="./../public/img/operadora.png">
                        <br><br>
                        ATENCIÓN PERSONALIZADA
                    </h3>
                    <p class="product-text">
                        Si tienes alguna duda con gusto te ayudaremos, puedes enviarnos un correo o llamarnos.
                    </p>
                </div>
            </div>
        </div>
        </a>
    
    </div>


    </section>

      <section class="services" id="services">

        <div class="service-card">

          <p class="card-number">FORTALEZAS</p>
          <br>
          <p class="card-text">
            Mantenemos relaciones de negocio a largo plazo con nuestros clientes, a través de la atención personalizada y cuidando nuestros tiempos de entrega.
          </p>

        </div>

        <div class="service-card">

          <p class="card-number">EXPERIENCIA</p>
          <br>
          <p class="card-text">
            Tenemos amplia experiencia, siempre a la vanguardia y al servicio de nuestros clientes, por ello somos la mejor opción en nuestro ramo.
          </p>

        </div>

        <div class="service-card">

          <p class="card-number">PUNTUALIDAD</p>
          <br>
          <p class="card-text">
            Es importante destacar que siempre cumplimos en tiempo y forma todos los pedidos de nuestros clientes.
          </p>

        </div>

      </section>


      <div style="text-align: center;color: var(--space-cadet);
      font-size: var(--fs-2);
      font-weight: 600;" >
      <h2>CONOCE NUESTROS PRODUCTOS</h2>
      <div>

      <section class="product" id="menu">
          
        <video id="myVideo" autoplay="true" loop="true" speed="2"
        muted="muted" width="100%" height="600" playbackRate="2">
          <source src="./videos/pulpox3.mp4" type="video/mp4">
        </video>
          
        <div class="products-grid">

          <a>

            <div class="product-card">

              <div class="img-box">
                <img src="./../public/img/productos/pulpo4_6.jpg" class="pulpo-img" width="250">
              </div>

              <div class="product-content">

                <div class="wrapper">
                  <h3 class="product-name">PULPO 4/6</h3>

                  <p class="product-price">
                    <span class="small"></span>
                  </p>
                </div>

              </div>

            </div>

          </a>

          <a>

            <div class="product-card">

              <div class="img-box">
                <img src="./../public/img/productos/pulpo2_4.jpg" class="pulpo-img" width="250">
              </div>

              <div class="product-content">

                <div class="wrapper">
                  <h3 class="product-name">PULPO 2/4</h3>

                  <p class="product-price">
                    <span class="small"></span>
                  </p>
                </div>

              </div>

            </div>

          </a>

          <a>

            <div class="product-card">

              <div class="img-box">
                <img src="./../public/img/productos/pulpo1_2.jpg" class="pulpo-img" width="250">
              </div>

              <div class="product-content">

                <div class="wrapper">
                  <h3 class="product-name">PULPO 1/2</h3>

                  <p class="product-price">
                    <span class="small"></span>
                  </p>
                </div>

              </div>

            </div>

          </a>

        </div>

      </section>

    <footer>

      <div class="footer-wrapper">


        <div class="social-link">
            
            <img onclick="window.location.replace('tel: 3336369783')" src="./../public/img/iconos/llamada.png" style="cursor:pointer;width:25px;height:25px;">
            <label onclick="window.location.replace('tel: 3336369783')" style="cursor:pointer" class="copyright">3336369783</label>
            
            <img onclick="window.open('https://wa.me/3320775734')" src="./../public/img/iconos/whatsapp.png" style="cursor:pointer;width:25px;height:25px;">
            <label onclick="window.open('https://wa.me/3320775734')" style="cursor:pointer" class="copyright">3320775734</label>

            <img onclick="window.open('https://www.facebook.com/elzardelmarmariscos/?ref=page_internal')" src="./../public/img/iconos/facebook.png" style="cursor:pointer;width:25px;height:25px;">
            <label onclick="window.open('https://www.facebook.com/elzardelmarmariscos/?ref=page_internal')" style="cursor:pointer" class="copyright">facebook.com/elzardelmarmariscos</label>

            <img onclick="window.open('https://www.instagram.com/elzardelmar/?hl=es')" src="./../public/img/iconos/instagram.png" style="cursor:pointer;width:25px;height:25px;">
            <label onclick="window.open('https://www.instagram.com/elzardelmar/?hl=es')" style="cursor:pointer" class="copyright">instagram.com/elzardelmar</label>

            <img onclick="window.open('mailto: contacto@elzardelmar.com.mx')" src="./../public/img/iconos/correo.png" style="cursor:pointer;width:25px;height:25px;">
            <label onclick="window.open('mailto: contacto@elzardelmar.com.mx')" style="cursor:pointer" class="copyright">contacto@elzardelmar.com.mx</label>

            <img onclick="window.open('https://goo.gl/maps/LFHbJnqcZoqk9iGV6')" src="./../public/img/iconos/google-maps.png" style="cursor:pointer;width:25px;height:25px;">
            <label onclick="window.open('https://goo.gl/maps/LFHbJnqcZoqk9iGV6')" style="cursor:pointer" class="copyright">Calle Prolongación Pinosuares 469 Col. El Vigia, Zapopan, Jalisco</label>

        </div>
        <label class="copyright">Si tienes cualquier duda sobre nuestros productos, el envío u otro tema, puedes comunicarte con uno de nuestros especialistas para que te brindemos una atención más personalizada.</label>
      </div>

    </footer>

  </div>

  <script src="./assets/js/foodhub.js"></script>

  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>