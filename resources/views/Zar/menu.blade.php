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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <link
    href="https://fonts.googleapis.com/css2?family=Monoton&family=Rubik:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

</head>

<body>

  <div class="container">

    <!--
      - #HEADER
    -->

    <header>

      <nav class="navbar">

        <div class="navbar-wrapper">

          <a href="{{ route('indexZar') }}">
            <img src="./img/logo.png" alt="logo" width="250" height="100">
          </a>

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

      <!--
        - #PRODUCT SECTION
      -->

      <section class="product" id="menu" style="margin-top: 150px !important;">

        <h2 class="section-title">{{$categoria[0]->nombre}}</h2>


        <table id="Dtable" class="styled-table" style="width:100%;border-collapse:separate; 
        border-spacing: 0 1em;">
          <thead>
              <tr>
                  <th class="col" style="width: 50% !important;"></th>
                  <th class="col" style="width: 5% !important;"></th>
                  @if(!empty($categoria[0]->presentacion_1))
                    <th class="col" style="width: 15% !important;">
                      <span class="titulo-menu">{{$categoria[0]->presentacion_1}}</span>
                      <span class="titulo-pres">{{$categoria[0]->presentacion_1_descr}}</span>
                    </th>
                  @else
                  <th class="col" style="width: 15% !important;"></th>
                  @endif
                  @if(!empty($categoria[0]->presentacion_2))
                    <th class="col" style="width: 15% !important;">
                      <span class="titulo-menu">{{$categoria[0]->presentacion_2}}</span>
                      <span class="titulo-pres">{{$categoria[0]->presentacion_2_descr}}</span>
                    </th>
                  @endif
                  @if(!empty($categoria[0]->presentacion_3))
                    <th class="col" style="width: 15% !important;">
                      <span class="titulo-menu">{{$categoria[0]->presentacion_3}}</span>
                      <span class="titulo-pres">{{$categoria[0]->presentacion_3_descr}}</span>
                    </th>
                  @endif
              </tr>
          </thead>
          <tbody>
              @foreach($productos as $p)
                  <tr>
                      <td style="
                      border-bottom: 1px solid rgba(35, 132, 236, 0.848);padding-top:10px;">
                        <div style="display: flex;">
                          <span class="nombre-producto">{{$p->nombre}}</span>&nbsp;&nbsp;&nbsp;&nbsp;<span class="pres-producto">{{$p->presentacion}}</span>
                        </div>
                        <span class="descr-producto">{{$p->descripcion}}</span>
                      </td>
                      <td style="
                  border-bottom: 1px solid rgba(35, 132, 236, 0.848)">
                      @if($p->imagen == 1)
                      <img class="imgGal" src="./img/carta/{{$p->id}}.png">
                      @endif
                      </td>
                      @if(!empty($categoria[0]->presentacion_1))
                        <td style="
                  border-bottom: 1px solid rgba(35, 132, 236, 0.848)" class="prec-producto">{{flotFormatoM2Pesos($p->precio1)}}</td>
                      @else
                        <td style="
                  border-bottom: 1px solid rgba(35, 132, 236, 0.848)" class="prec-producto">{{flotFormatoM2Pesos($p->precio1)}}</td>
                      @endif
                      @if(!empty($categoria[0]->presentacion_2))
                        <td style="
                  border-bottom: 1px solid rgba(35, 132, 236, 0.848)" class="prec-producto">{{flotFormatoM2Pesos($p->precio2)}}</td>
                      @endif
                      @if(!empty($categoria[0]->presentacion_3))
                        <td style="
                  border-bottom: 1px solid rgba(35, 132, 236, 0.848)" class="prec-producto">{{flotFormatoM2Pesos($p->precio3)}}</td>
                      @endif
                  </tr>
              @endforeach
          </tbody>
        </table>

        <br><br><br><br><br><br><br><br><br>
        </div>

      </section>
    <!--
      - #FOOTER
    -->

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

    window.value = 'inicial';

    function seleccionadoCat(id){
      $('#'+window.value).removeClass('li-cActive');
      $('#'+window.value).addClass('li-c');
      $('#'+id).removeClass('li-c');
      $('#'+id).addClass('li-cActive');
      window.value = id;
    }

    $( '.carta-btn' ).click(function() {
        $( "#carta" ).toggle( "blind" );
    });

  </script>

</body>

</html>