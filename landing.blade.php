<!DOCTYPE html>
  <html>
  <style type="text/css">
      .desktop-nav {
        margin-left: 35%!important;
      }
  </style>
  <!-- Global site tag (gtag.js) - AdWords: 821882279 -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=AW-821882279"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'AW-821882279');
  </script>

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-65274092-15"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-65274092-15');
  </script>

  <!-- Facebook Pixel Code -->
  <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '711014442437141');
    fbq('track', 'PageView');
  </script>
  <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=711014442437141&ev=PageView&noscript=1"
  /></noscript>
  <!-- End Facebook Pixel Code -->

  <!-- Yandex.Metrika counter --> <script type="text/javascript" > (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter46892100 = new Ya.Metrika({ id:46892100, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/46892100" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->
    <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>Mi Delivery - Software de Gestión</title>
      <meta name="description" content="Sin necesidad de terceros, podrás por ti mismo subir tus productos y promociones, con sus descripciones y fotografías. Puedes también escoger el medio de pago, si es en entrega, efectivo o tarjetas.">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="{{asset('newLanding/css/materialize.min.css')}}"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      {{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" /> --}}

      <link type="text/css" rel="stylesheet" href="{{asset('newLanding/css/midelivery.min.css') }}"  media="screen,projection"/>

      <meta name="robots" content="Index, Follow">
      <meta name="copyright" content="Copyright © {{ date('Y') }} MiDelivery.cl">
      <meta property="og:type" content="website" />
      <meta property="og:title" content="Mi Delivery - Software de Gestión para deliverys" />
      <meta property="og:type" content="article" />
      <meta property="og:url" content="www.midelivery.cl" />
      <meta property="og:site_name" content="MiDelivery"/>
      <meta property="og:image" content="{{url('/')}}/img/seo-logo.png" />
      <meta property="og:description" content="Sin necesidad de terceros, podrás por ti mismo subir tus productos y promociones, con sus descripciones y fotografías. Puedes también escoger el medio de pago, si es en entrega, efectivo o tarjetas." />
    </head>
    <body style="overflow-x: hidden;">
        <section class="cover-home" id="cover">
          <nav>
            <div class="nav-wrapper">
              <a href="#" class="brand-logo">
                <img src="{{url('/')}}/newLanding/images/logo.svg"  height="50" class="hide-on-small-only">
                <img src="{{url('/')}}/newLanding/images/logo-m-white.svg" height="50" class="hide-on-med-and-up">
              </a>
              <a href="#" data-target="mobile-demo" class="sidenav-trigger right"><i class="material-icons">menu</i></a>
              <ul class="desktop-nav hide-on-med-and-down">
                <li><a href="{{url('/')}}/precios">planes</a></li>
                <li><a class="scroll" href="#!" data-selector="section.features">ventajas</a></li>
                <li><a href="{{url('/')}}/planes#preguntasFrecuentes">Preguntas Frecuentes</a></li>
                <li><a href="https://blog.midelivery.cl">blog</a></li>
                <li><a class="scroll" data-selector="footer" href="#!">contacto</a></li>
              </ul>
              <ul class="right session-control hide-on-med-and-down">
                <span>&nbsp;</span>
                <li><a href="{{url('/')}}/login" class="first">iniciar sesión</a></li>
                <li><a href="{{url('/')}}/registro" class="last">Regístrate</a></li>
              </ul>
              <ul class="sidenav left-align" id="mobile-demo">
                <li><img src="{{url('/')}}/newLanding/images/logo.svg"  height="40"></li>
                <li><a href="{{url('/')}}/planes">planes</a></li>
                <li><a class="scroll" href="#!" data-selector="section.features">ventajas</a></li>
                <li><a href="{{url('/')}}/planes#preguntasFrecuentes">Preguntas Frecuentes</a></li>
                <li><a href="https://blog.midelivery.cl">blog</a></li>
                <li><a class="scroll" data-selector="footer" href="#!">contacto</a></li>
                <li><div class="divider"></div></li>
                <li><a href="{{url('/')}}/login">iniciar sesión</a></li>
                <li><a href="{{url('/')}}/registro">registrarse</a></li>
              </ul>
            </div>
          </nav>
          <div class="container">
            <div class="row">
              <div class="col s12 m6">
                <img src="{{ url('/')}}/newLanding/images/cover-img.png" class="cover-img hide-on-med-and-down">
                <img src="{{ url('/')}}/newLanding/images/iphone.png" class="show-on-medium hide-on-large-only hide-on-small-only">
              </div>
              <div class="col s12 m6">
                <h2 class="white-text">Crea una tienda online para tu delivery</h2>
                <p>Deja de pagar comisiones a otras plataformas. Activa tu propia web ahora en tan sólo 1 minuto y comienza a vender</p>
                <br>
                <a href="{{url('/')}}/registro" class="btn btn-primary rosa waves-effect waves-light">Crear Tienda</a>
                <a href="#!" class="btn btn-transparent waves-effect scroll" data-selector="section.demos">Ver demos</a>
              </div>
            </div>
            <br><br>
          </div>
        </section>
        <section class="first-features">
          <div class="container slim">
            <div class="row">
              <div class="col s12 first-features">
                <div class="col s12 m4">
                  <div class="col s4 m12">
                    <img height="32" style="margin: 4px 0px;" src="{{ url('/')}}/newLanding/images/icons/dashboard.svg">
                  </div>
                  <div class="col s8 m12">
                    <h5>Dashboard</h5>
                    <p>Un espacio de estadísticas y datos del día a día de tu negocio. Resumen mensual, semanal, diario y al instante.</p>
                  </div>
                </div>
                <div class="col s12 m4">
                  <div class="col s4 m12">
                    <img height="40" src="{{ url('/')}}/newLanding/images/icons/shopping.svg">
                  </div>
                  <div class="col s8 m12">
                    <h5>Tienda en línea</h5>
                    <p>Tendrás tu propia página con carrito de compra para que tus clientes puedan realizar sus pedido con solo unos clicks.</p>
                  </div>
                </div>
                <div class="col s12 m4">
                  <div class="col s4 m12">
                    <img height="40" src="{{ url('/')}}/newLanding/images/icons/magic-wand.svg">
                  </div>
                  <div class="col s8 m12">
                    <h5>Control total</h5>
                    <p>En el panel de administrador podrás editar todos los aspectos de tu sitio de ventas: Colores, tipografías, imágenes y más.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="feature-tabs-container">
          <div class="title">
            <h4>¿Qué hace Midelivery por ti?</h4>
            <p>Te apoya en cada etapa de tu negocio</p>
          </div>
          <div class="carousel-cooldown-indicator-container">
            <div class="carousel-cooldown-indicator" id="cooldown" style="width: 0%"></div>
          </div>
          <div class="feature-tabs">
            <a href="#!" class="btn btn-secondary active" data-carousel-index="0">Publicitar</a>
            <a href="#!" class="btn btn-secondary" data-carousel-index="1">Vender</a>
            <a href="#!" class="btn btn-secondary" data-carousel-index="2">Cocinar</a>
            <a href="#!" class="btn btn-secondary" data-carousel-index="3">Enviar</a>
            <a href="#!" class="btn btn-secondary" data-carousel-index="4">Medir</a>
            <div class="feature-tabs-process hide-on-med-and-down">
              <ul>
                <li class="active" data-carousel-index="0">1</li>
                <li data-carousel-index="1">2</li>
                <li data-carousel-index="2">3</li>
                <li data-carousel-index="3">4</li>
                <li data-carousel-index="4">5</li>
              </ul>  
            </div>
          </div>      
          <div class="carousel carousel-slider center">
            <div class="carousel-item"  data-carousel-index="0">
              <p>Te entregamos una herramienta que conecta directamente con nuestra fanpage  de facebook e instagram, <br>permitiendote publicitar tu delivery en cosa de segundos.</p>
            <div class="img-container">
              <img src="{{ url('/')}}/newLanding/images/publicitar.png">
            </div>
          </div>
          <div class="carousel-item"  data-carousel-index="1">
            <p>Tendrás un menú online para que tus clientes vean de manera ordenada e interactiva todos tus productos.<br> Además de un carrito de compras y un formulario de envío.</p>
            <div class="img-container">
              <img src="{{ url('/')}}/newLanding/images/vender.png">
            </div>
          </div>
          <div class="carousel-item"  data-carousel-index="2">
            <p>Mientras estés preparando el producto podrás mantener la comunicación entre tu, el cocinero y el cliente, <br> seleccionando el estado del pedido entre “Pendiente”, “Enviado” y “Pagado”.</p>
            <div class="img-container">
              <img src="{{ url('/')}}/newLanding/images/cocinar.png">
            </div>
          </div>
          <div class="carousel-item"  data-carousel-index="3">
            <p>Podrás gestionar todas tus ventas online, telefónicas y presenciales a través de la sección “Gestionar pedidos”, <br> donde coordinarás cada envío asignando un repartidor y seleccionando el estado del pedido.</p>
            <div class="img-container">
              <img src="{{ url('/')}}/newLanding/images/enviar.png">
            </div>
          </div>
          <div class="carousel-item"  data-carousel-index="4">
            <p>En el Dashboard verás todas las estadísticas de tus ventas. Resumenes mensuales, semanales, diarios y del momento. <br> Productos más vendidos, clientes frecuentes y gráficos de venta.</p>
            <div class="img-container">
              <img src="{{ url('/')}}/newLanding/images/medir.png">
            </div>
          </div>
          </div>
        </section>

        <section class="short-msg">
          <div class="container">
            <div class="col s12 center-align">
              <h4>Gestiona todos tus pedidos y productos en una sola plataforma.<br>Ordena tus finanzas y no pares de vender.</h4>
              <a href="{{url('/')}}/registro" class="btn btn-transparent waves-effect">Crear tienda</a>
            </div>
          </div>
        </section>

        <section class="features">
          <div class="title">
            <h4>Beneficios</h4>
          </div>
          <br>
          <div class="container-slim">
            <div class="row no-padding">
              <h5>Para ti</h5>
              <div class="col s12 m4">
                <div class="feature-container">
                  <img src="{{url('/')}}/newLanding/images/icons/dashboard-r.svg" class="feature-icon">
                  <div class="feature-description">
                    <h6>Dashboard</h6>
                    <p>¿Cuánto Dinero está entrando a tu Delivery? Conocerás gráficamente el detalle diario, semanal y mensual de todas las ventas generadas por tu negocio.</p>
                  </div>
                </div>
              </div>
              <div class="col s12 m4">
                <div class="feature-container">
                  <img src="{{ url('/')}}/newLanding/images/icons/local-offer.svg" class="feature-icon">
                  <div class="feature-description">
                    <h6>Lo más vendido</h6>
                    <p>¿Qué es lo que más quieren tus clientes? Tendras el detalle de los productos que más eligen tus clientes, para que puedas proyectar tus compras de insumos.</p>
                  </div>
                </div>
              </div>
              <div class="col s12 m4">
                <div class="feature-container">
                  <img src="{{ url('/')}}/newLanding/images/icons/eye.svg" class="feature-icon">
                  <div class="feature-description">
                    <h6>Lo más visto</h6>
                    <p>¿Cuánta gente mira tu Delivery? Sabrás exactamente quienes han visitado tus productos, y en qué día y hora dedican más tiempo a ver tu carta.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col s12 m4">
                <div class="feature-container">
                  <img src="{{ url('/')}}/newLanding/images/icons/cutlery.svg" class="feature-icon">
                  <div class="feature-description">
                    <h6>Gestión de Pedidos</h6>
                    <p>¿Vendes por Whatsapp o por Facebook? Con MiDelivery podrás canalizar y medir los ingresos que recibes por redes sociales, teléfono y online.</p>
                  </div>
                </div>
              </div>
              <div class="col s12 m4">
                <div class="feature-container">
                  <img src="{{ url('/')}}/newLanding/images/icons/check-circle.svg" class="feature-icon">
                  <div class="feature-description">
                    <h6>Gestión de Envíos</h6>
                    <p>¿Problemas para coordinar a tu personal? Podrás asignar repartidores a cada pedido recibido, manteniendo un mayor orden en los envíos.</p>
                  </div>
                </div>
              </div>
              <div class="col s12 m4">
                <div class="feature-container">
                  <img src="{{ url('/')}}/newLanding/images/icons/megaphone.svg" class="feature-icon">
                  <div class="feature-description">
                    <h6>Publicidad en Redes Sociales</h6>
                    <p>Invierte tu dinero en Facebook de forma inteligente. Te ayudaremos a optimizar cada peso y a conseguir nuevos y mejores clientes.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <h5>Para tus clientes</h5>
              <div class="col s12 m4">
                <div class="feature-container">
                  <img src="{{ url('/')}}/newLanding/images/icons/devices.svg" class="feature-icon">
                  <div class="feature-description">
                    <h6>Catálogo Online</h6>
                    <p>Podrás subir todos los productos y promociones de tu carta para mostrar de forma elegante y atractiva a tus clientes, estando visible 24/7.</p>
                  </div>
                </div>
              </div>
              <div class="col s12 m4">
                <div class="feature-container">
                  <img src="{{ url('/')}}/newLanding/images/icons/shopping-cart.svg" class="feature-icon">
                  <div class="feature-description">
                    <h6>Carro de Compras</h6>
                    <p>Si así lo desean, podrán comprar desde la misma plataforma, pagando online o entrega, de acuerdo a tu preferencia y horario de atención.</p>
                  </div>
                </div>
              </div>
              <div class="col s12 m4">
                <div class="feature-container">
                  <img src="{{ url('/')}}/newLanding/images/icons/map-marker.svg" class="feature-icon">
                  <div class="feature-description">
                    <h6>Ver pedido Online</h6>
                    <p>No más preguntas sobre "¿Dónde está mi pedido?" , tus clientes sabrán exactamente si su pedido está pendiente, en cocina, o en camino.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="demos">
          <div class="title">
            <h4 class="white-text">Demos</h4>
          </div>
          <div class="container-slim">
            <div class="row hide-on-small-only">
              <div class="col s12 m3 no-padding">
                <ul class="demo-list">
                  <li class="active">
                    <a href="#!" class="demo-preview-toogle" data-user="creapizza">
                      <span>&#8226;&nbsp;&nbsp;</span>Pizza
                    </a>
                  </li>
                  <li>
                    <a href="#!" class="demo-preview-toogle" data-user="creacomida">
                      <span>&#8226;&nbsp;&nbsp;</span>Comida Rápida
                    </a>
                  </li>
                  <li>
                    <a href="#!" class="demo-preview-toogle" data-user="creasushi">
                      <span>&#8226;&nbsp;&nbsp;</span>Sushi
                    </a>
                  </li>
                  <li>
                    <a href="#!" class="demo-preview-toogle" data-user="creareposteria">
                      <span>&#8226;&nbsp;&nbsp;</span>Repostería
                    </a>
                  </li>
                </ul>
              </div>
              <div class="col s12 m6 center-align demo-preview">
                <img src="{{url('/')}}/newLanding/images/demo1-desktop.png" class="active" data-preview="creapizza">
                <img src="{{url('/')}}/newLanding/images/demo3-desktop.png"  data-preview="creacomida">
                <img src="{{url('/')}}/newLanding/images/demo2-desktop.png"  data-preview="creasushi">
                <img src="{{url('/')}}/newLanding/images/demo4-desktop.png" data-preview="creareposteria">
              </div>
              <div class="col s12 m3">
                <p id="demo-user" class="demo-data"><span>usuario:</span>creapizza</p>
                <p class="demo-data pass"><span>contraseña:</span>123456</p>
                <br><br><br><br><br>
                <a href="{{url('/')}}/creapizza" class="btn btn-primary demo-link waves-effect waves-light rosa">Ver demos</a>
                <a href="{{url('/')}}/login" class="waves-effect waves-light btn btn-transparent">Ver panel</a>
              </div>
            </div>
            <div class="show-on-small-only hide-on-med-and-up">
              <div class="carousel">
                <a class="carousel-item" href="#!" data-user="creapizza">
                  <img src="{{url('/')}}/newLanding/images/demo1.png">
                </a>
                <a class="carousel-item" href="#!" data-user="creasushi">
                  <img src="{{url('/')}}/newLanding/images/demo2.png">
                </a>
                <a class="carousel-item" href="#!" data-user="creacomida">
                  <img src="{{url('/')}}/newLanding/images/demo3.png">
                </a>
                <a class="carousel-item" href="#!" data-user="creareposteria">
                  <img src="{{url('/')}}/newLanding/images/demo4.png">
                </a>
              </div>
              <div class="btn-container">
                <a href="{{url('/')}}/creapizza" class="waves-effect demo-link waves-light btn btn-primary rosa">Ver demos</a>
                <a href="{{url('/')}}/login" class="waves-effect waves-light btn btn-transparent">Ver panel</a>
              </div>
            </div>
          </div>
        </section>
        <section class="video">
          <div class="row">
            <div class="col s12 m6 video-img-container">
              <span class="btn-wrapper"></span>
              <a href="#modal-video" class="btn-play modal-trigger"><i class="material-icons">play_arrow</i></a>
              <img src="{{url('/')}}/newLanding/images/video-img.png" class="video">
            </div>
            <div class="col s12 m6">
              <div class="content">
                <div class="left-align">
                  <h5>¿Quiéres ver cómo funciona?</h5>
                  <h6>Te lo mostramos en 1 minuto </h6>
                </div>
                  <p>Sin necesidad de terceros, podrás por ti mismo subir tus productos y promociones, con sus descripciones y fotografías. Puedes también escoger el medio de pago, si es en entrega, efectivo o tarjetas.</p>
                  <br><br>
                  <a href="{{url('/')}}/registro" class="btn btn-primary waves-effect waves-light">Prueba gratis hoy</a>
                  <a href="#!" class="scroll btn btn-transparent waves-effect" data-selector="section.demos">Ver demos</a>
              </div>
            </div>        
          </div>
        </section>
        <section class="call-to-action">
          <div class="container">
            <div class="title">
              <h4>Deja de pagar absurdas comisiones a otras plataformas y <span style="color: #5a348a;font-weight: bold;">crea tu propia tienda hoy</span></h4>
              <h6>Los resultados son garantizados. No tienes nada que perder, sólo mucho que ganar</h6>
              <a href="{{url('/')}}/registro" class="scroll btn btn-primary waves-effect waves-light rosa">Crear tienda</a>
              <h6>No necesitas tarjeta de crédito</h6>
            </div>
          </div>
        </section>
        <footer>
          <div class="container">
            <div class="row">
              <div class="col s12 m3">
                <img src="{{url('/')}}/newLanding/images/logo-white-pink.png" height="40">
                <p>Un proyecto de <a href="https://www.crealab.cl" class="crealab">CreaLab Group</a></p>
              </div>
              <div class="col s12 m3">
                <p class="footer-title">RECURSOS</p>
                <p><a href="{{url('/')}}/planes">Precios</a></p>
                <p><a href="{{url('/')}}/planes#preguntasFrecuentes">Preguntas Frecuentes</a></p>
                <p><a href="{{url('/')}}/historial">Nuevas Mejoras</a></p>
                <p><a href="https://www.facebook.com/MiDeliveryChile/">Facebook</a></p>
              </div>
              {{--<div class="col s12 m3">
                <p class="footer-title">COMUNIDAD</p>
                <p><a href="#!">Facebook</a></p>
                <p><a href="#!">Suscribete</a></p>
                <p><a href="#!">Youtube</a></p>
              </div> --}}
              <div class="col s12 m3">
                <p class="footer-title">contacto</p>
                <p>hola@midelivery.cl</p>
                <p>Lun a Vie - 8:30 a 18:30 hrs.</p>
                <p><a href="tel:452668127">Fono: 45 266 8127</a></p>
                <p><a href="https://api.whatsapp.com/send?phone=56968483939">WhatsApp: +569 6848 3939</a></p>
              </div>
              <div class="col s12 m3 center-align">
                <img class="center-align" src="{{url('/')}}/newLanding/images/logo-corfo.png" height="60">
                <img class="center-align" src="{{url('/')}}/newLanding/images/Logo-Incubatec.png" height="100">
              </div>
            </div>
          </div>
        </footer>
    </body>
     <div id="modal-video" class="modal modal-fixed-footer">
          <div class="modal-content center-align" style="overflow: hidden;" >
            <div>
              <iframe src="https://youtube.com/embed/Ez1qeAHHUyo" width="600" height="338" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            </div>
          </div>
          <div class="modal-footer">
            <a href="#!" class="modal-action modal-close waves-effect btn-flat">Cerrar</a>
          </div>
        </div>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="{{asset('newLanding/js/materialize.min.js')}}"></script>
    <script type="text/javascript">
      (function() {
        //variables
        var lastTime;
        var wasVisible = false;
        var userInteraction = false;
        var url = "{{url('/')}}";

        //init sidebar
        var sidenav = new M.Sidenav(document.querySelector('.sidenav'));

        //carousel
        var carouselFeatures = new M.Carousel(document.querySelector('section.feature-tabs-container .carousel'),{
          fullWidth: true,
          indicators: false,
          onCycleTo: function(){
            removeActiveClass('.feature-tabs .btn');
            var index=document.querySelector('.carousel-item.active[data-carousel-index]').getAttribute('data-carousel-index');;
            document.querySelector('.btn[data-carousel-index="'+index+'"]').classList.add('active');
            var activeIndex = document.querySelector('.feature-tabs a.active').getAttribute('data-carousel-index');
            document.querySelector('.feature-tabs-process li[data-carousel-index="'+activeIndex+'"]').classList.add('active');
          }
        });

        //funcionar btns
        var btnFeatures = document.querySelectorAll('.feature-tabs  .btn');
        //eventlisteners
        for(i=0;i<btnFeatures.length; i++){
          btnFeatures[i].addEventListener("click", function(){
            removeActiveClass('.feature-tabs .btn');
            this.classList.add("active");
            carouselFeatures.set(this.getAttribute("data-carousel-index"));
            lastTime = new Date().getTime();
            document.getElementById('cooldown').style.width = '10%';
          });
        }

        //remove active class
        function removeActiveClass(selector){
          var elements= document.querySelectorAll(selector);
          for(i=0;i<elements.length; i++){
            elements[i].classList.remove("active");
          }
        }

        setInterval(function(){
          if(wasVisible){
            checkTimer();
          }
        },50);

        //checktimer del carousel
        function checkTimer(){
          var currentTime = new Date().getTime();
          var diff= lastTime - currentTime;
          var secondDiff = Math.abs((diff % (1000 * 60)) / 1000);
          var newWidth = 100*secondDiff/8;
          if(newWidth > 100){
            newWidth = 100;
          }
          document.getElementById('cooldown').style.width = newWidth+'%';
          if(secondDiff>=8){
            carouselFeatures.next();
            scrollContainer('.feature-tabs');
            lastTime = currentTime;
            removeActiveClass('.feature-tabs-process li.active');
          }
        }

        //toggles demos
        var togglesDemos = document.querySelectorAll('.demo-preview-toogle');
        for(j=0;j<togglesDemos.length;j++){
          togglesDemos[j].addEventListener('click', function(){
            var user = this.getAttribute('data-user');
            removeActiveClass('ul.demo-list li.active');
            removeActiveClass('.demo-preview  img.active');
            this.parentElement.classList.add('active');
            document.getElementById('demo-user').innerHTML = '<span>usuario:</span> '+user;
            document.querySelector('.demo-preview img[data-preview="'+user+'"]').classList.add('active');
            console.log(user);
            if(user=="creacomida"){
              user="creacomidarapida"
            }
            var buts=document.querySelectorAll('.demo-link');
            for(i=0;i<buts.length;i++){
              buts[i].setAttribute('href',url+'/'+user);
            }
          });
        }


        function scrollContainer(selector){
          if(!userInteraction){
            var element = document.querySelector(selector);
            var index = document.querySelector(selector+' a.active').getAttribute('data-carousel-index');
            if(index != 4){
              element.scrollLeft += 160;
            }else{
              element.scrollLeft = 0;
            }
            setTimeout(function(){userInteraction=false},1000);
          }
        }

        //carousel demos responsive
        var carouselDemos = new M.Carousel(document.querySelector('section.demos .carousel'),{
          onCycleTo:function(){
            var user = document.querySelector('.demos .carousel-item.active').getAttribute('data-user');
            if(user=="creacomida"){
              user="creacomidarapida"
            }
            var buts=document.querySelectorAll('.demo-link');
            for(i=0;i<buts.length;i++){
              buts[i].setAttribute('href',url+'/'+user);
            }
          }
        });

        //iniciar modal
        var modalVideo = new M.Modal(document.getElementById('modal-video'));

        var scrollFunction = function(){
          if(window.scrollY >1000){
            if(!wasVisible){
              lastTime = new Date().getTime();
            }
            wasVisible=true;
            window.removeEventListener('scroll', scrollFunction, false);
          }
        }
        window.addEventListener('scroll', scrollFunction);
        document.querySelector('.feature-tabs').addEventListener('scroll',function(){
          userInteraction = true;
        });

        function scrollToItem(item) {
          var diff=(item.offsetTop-window.scrollY)/20;
          if(!window._lastDiff){
            window._lastDiff = 0;
          }
          if (Math.abs(diff)>0.5) {
            window.scrollTo(0, (window.scrollY+diff));
            clearTimeout(window._TO);

            if(diff !== window._lastDiff){
              window._lastDiff = diff;
              window._TO=setTimeout(scrollToItem, 15, item);
            }
          } else {
              window.scrollTo(0, item.offsetTop)
          }
        }

        var scrollButtons = document.querySelectorAll('.scroll');
        for(i=0;i<scrollButtons.length;i++){
          scrollButtons[i].addEventListener('click',function(){
            scrollToItem(document.querySelector(this.getAttribute('data-selector')));
          });
        }
    })();

    //PWA?

    if ('serviceWorker' in navigator && 'PushManager' in window) {
      window.addEventListener('load', function() {
        navigator.serviceWorker.register('/service-worker.js').then(function(registration) {
            // Registration was successful
            console.log('ServiceWorker registration successful with scope: ', registration.scope);
        }, function(err) {
            // registration failed :(
            console.log('ServiceWorker registration failed: ', err);
        });
      });
    }
    
    </script>
    <!-- Load Facebook SDK for JavaScript -->
      <div id="fb-root"></div>
      <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js#xfbml=1&version=v2.12&autoLogAppEvents=1';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>
      
      <!-- Your customer chat code -->
      <div class="fb-customerchat"
        attribution=setup_tool
        page_id="1335053613250239"
        theme_color="#fa3c4c"
        logged_in_greeting="¿Alguna duda? Estamos aquí para ayudar :)"
        logged_out_greeting="¿Alguna duda? Estamos aquí para ayudar :)">
      </div>
  </html>   