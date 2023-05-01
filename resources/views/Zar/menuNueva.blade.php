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

        <section class="product" style="gap: 50px; !important; padding: 150px var(--px) var(--py) !important;">

            <h2 class="section-title">{{$categoria[0]->nombre}}</h2>
    
            <p class="section-text">
                @if(!empty($categoria[0]->presentacion_1))
                    {{$categoria[0]->presentacion_1}}
                  @if(!empty($categoria[0]->presentacion_1_descr)),{{$categoria[0]->presentacion_1_descr}} @endif
                @endif
                @if(!empty($categoria[0]->presentacion_2))
                  <br> {{$categoria[0]->presentacion_2}}
                  @if(!empty($categoria[0]->presentacion_2_descr)),{{$categoria[0]->presentacion_2_descr}} @endif
                @endif
                @if(!empty($categoria[0]->presentacion_3))
                  <br> {{$categoria[0]->presentacion_3}}
                  @if(!empty($categoria[0]->presentacion_3_descr)),{{$categoria[0]->presentacion_3_descr}} @endif
                @endif
            </p>
    
            <div class="products-grid">
            @foreach($productos as $p)
              <a>
                <div class="product-card">
                  <div class="img-box">
                    @if($p->imagen == 1)
                    <img src="./img/carta/{{$p->id}}.png" alt="product image" class="product-img" width="200" loading="lazy">
                    @else
                    <img src="./assets/images/menu.svg" alt="product image" class="product-img" width="200" loading="lazy">
                    @endif
                    @if(!empty($p->presentacion))
                    <div class="card-badge green">
                        <p>{{$p->presentacion}}</p>
                    </div>
                    @endif
                  </div>
    
                  <div class="product-content">
                    @if(empty($categoria[0]->presentacion_1) && empty($categoria[0]->presentacion_2) && empty($categoria[0]->presentacion_3))
                        <div class="wrapper">
                            <h3 class="product-name">{{$p->nombre}}</h3>
                            <p class="product-price-lg">
                                <span class="small">$</span>{{flotFormatoM2($p->precio1)}}
                            </p>
                        </div>
                    @else
                        <div class="wrapper">
                            <h3 class="product-name">{{$p->nombre}}</h3>
                        </div>
                        @if(!empty($categoria[0]->presentacion_1))
                            <div class="wrapper">
                                <h3 class="product-name-sm">{{$categoria[0]->presentacion_1}}</h3>
                                <p class="product-price-lg">
                                    <span class="small">$</span>{{flotFormatoM2($p->precio1)}}
                                </p>
                            </div>
                        @endif
                        @if(!empty($categoria[0]->presentacion_2))
                            <div class="wrapper">
                                <h3 class="product-name-sm">{{$categoria[0]->presentacion_2}}</h3>
                                <p class="product-price-lg">
                                    <span class="small">$</span>{{flotFormatoM2($p->precio2)}}
                                </p>
                            </div>
                        @endif
                        @if(!empty($categoria[0]->presentacion_3))
                            <div class="wrapper">
                                <h3 class="product-name-sm">{{$categoria[0]->presentacion_3}}</h3>
                                <p class="product-price-lg">
                                    <span class="small">$</span>{{flotFormatoM2($p->precio3)}}
                                </p>
                            </div>
                        @endif
                    @endif
                    <p class="product-text">
                        {{$p->descripcion}}
                    </p>
    
                  </div>
                </div>
              </a>
            @endforeach
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
