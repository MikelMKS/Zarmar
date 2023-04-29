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

      <section class="home-slidder" id="home-slidder" style="margin-top: 100px !important;">

        <video id="myVideo" autoplay="true" loop="true" speed="2"
        muted="muted" width="100%" height="600" playbackRate="2">
          <source src="./videos/zarvideox2_8.mp4" type="video/mp4">
            Tu navegador no admite el elemento
        </video>

      </section>
      
      <section class="home" id="home">

        <div class="home-left">

          <h1 class="main-heading" style="margin-top:-300px">¡CONOCENOS!</h1>

          <p class="home-text">
            Ven y degusta nuestros deliciosos molcajetes, camarones, zarandeado y muchos platillo más.
          </p>

        </div>

        <div class="home-right">

          @if(isset($imagenes[0]))
          <img src="./img/carta/{{$imagenes[0]->id}}.png" alt="food image" class="food-img food-1 imgRedonda" width="150" loading="lazy">
          @else
          <img src="./assets/images/food1.png" alt="food image" class="food-img food-1 imgRedonda" width="150" loading="lazy">
          @endif
          
          @if(isset($imagenes[1]))
          <img src="./img/carta/{{$imagenes[1]->id}}.png" alt="food image" class="food-img food-2 imgRedonda" width="150" loading="lazy">
          @else
          <img src="./assets/images/food2.png" alt="food image" class="food-img food-2 imgRedonda" width="150" loading="lazy">
          @endif

          @if(isset($imagenes[2]))
          <img src="./img/carta/{{$imagenes[2]->id}}.png" alt="food image" class="food-img food-3 imgRedonda" width="150" loading="lazy">
          @else
          <img src="./assets/images/food3.png" alt="food image" class="food-img food-3 imgRedonda" width="150" loading="lazy">
          @endif

          @if(isset($imagenes[3]))
          <img src="./img/carta/{{$imagenes[3]->id}}.png" alt="food image" class="food-img food-4 imgRedonda" width="150" loading="lazy">
          @else
          <img src="./assets/images/food4.png" alt="food image" class="food-img food-4 imgRedonda" width="150" loading="lazy">
          @endif

          @if(isset($imagenes[4]))
          <img src="./img/carta/{{$imagenes[4]->id}}.png" alt="food image" class="food-img food-5 imgRedonda" width="150" loading="lazy">
          @else
          <img src="./assets/images/food5.png" alt="food image" class="food-img food-5 imgRedonda" width="150" loading="lazy">
          @endif

          @if(isset($imagenes[5]))
          <img src="./img/carta/{{$imagenes[5]->id}}.png" alt="food image" class="food-img food-6 imgRedonda" width="150" loading="lazy">
          @else
          <img src="./assets/images/food6.png" alt="food image" class="food-img food-6 imgRedonda" width="150" loading="lazy">
          @endif

        </div>

      </section>

 
    <section class="product" id="menu">

    <div class="products-grid">

        {{--  --}}
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
        {{--  --}}
        {{--  --}}
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
        {{--  --}}
        {{--  --}}
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
        {{--  --}}
    
    </div>


    </section>

    <div class="navbar-wrapper-info2">
      <img onclick="window.location.replace('tel: 3336369783')" src="./../public/img/iconos/llamada.png" style="cursor:pointer;width:50px;height:50px;">
      
      <img onclick="window.open('https://wa.me/3320775734')" src="./../public/img/iconos/whatsapp.png" style="cursor:pointer;width:50px;height:50px;">
      
      <img onclick="window.open('https://www.facebook.com/elzardelmarmariscos/?ref=page_internal')" src="./../public/img/iconos/facebook.png" style="cursor:pointer;width:50px;height:50px;">
      
      <img onclick="window.open('https://www.instagram.com/elzardelmar/?hl=es')" src="./../public/img/iconos/instagram.png" style="cursor:pointer;width:50px;height:50px;">
      
      <img onclick="window.open('mailto: contacto@elzardelmar.com.mx')" src="./../public/img/iconos/correo.png" style="cursor:pointer;width:50px;height:50px;">
      
      <img onclick="window.open('https://goo.gl/maps/LFHbJnqcZoqk9iGV6')" src="./../public/img/iconos/google-maps.png" style="cursor:pointer;width:50px;height:50px;">
    </div>

      <section class="about" id="about">

        <div class="about-left">

          <div class="img-box">
            <img src="./img/plato.jpg" alt="about image" class="about-img" width="250">
          </div>

          <div class="abs-content-box">
            <div class="dotted-border">
              <p class="text-md">Zar del Mar<br>desde hace</p>
              <p class="number-lg">{{$anio = Date('Y')-2015}}</p>
              <p class="text-md">Años</p>
            </div>
          </div>

          <img src="./assets/images/circle.svg" alt="circle shape" class="shape shape-6" width="20">
          <img src="./assets/images/circle.svg" alt="circle shape" class="shape shape-7" width="30">
          <img src="./assets/images/ring.svg" alt="ring shape" class="shape shape-8" width="35">
          <img src="./assets/images/ring.svg" alt="ring shape" class="shape shape-9" width="80">

        </div>

        <div class="about-right">

          <h2 style="color: var(--space-cadet);
          font-size: var(--fs-2);
          font-weight: 600;margin-top:-200px">LO QUE NOS DISTINGUE</h2>

          <p class="section-text">
            Somos una empresa mayorista con 7 años de experiencia introduciendo pulpo yucateco, distribuyendo a los mejores restaurantes de Guadalajara y la república. Empresa 100% mexicana y orgullosamente tapatía, en donde garantizamos nuestra calidad.
          </p>

        </div>

      </section>
      <br>
      <br>

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

  <script type="text/javascript">

    

  </script>

</body>

</html>