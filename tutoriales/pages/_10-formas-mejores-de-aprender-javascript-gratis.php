<?php 

// Este archivo es el que se usa para generar la pagina principal
// que se le muestra a todos los usuarios.
// De esta forma mostrar la pagina es algo mas ligero y rapido para el servidor.
require("../includes/functions.php");
onlyLocalAllowed();
define("FILE_NAME", '10-formas-mejores-de-aprender-javascript-gratis.html');
ob_start("toStatic"); 

?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>10 Formas de Aprender Javascript - Programando.la</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Aprender programacion gratis por que aqui SI estamos mejorandola.">
    <meta name="author" content="Ivan castellanos">
    <meta name="twitter" content="ivanca">
    <link href="css/bootstrap.min.css?nocahe=2" rel="stylesheet" type="text/css" />    
    <link href="css/bootstrap-responsive.css?nocahe=2" rel="stylesheet" type="text/css" />
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
    <style type="text/css">

    .container {
      margin-top: 60px;
    }


    h1, h2, h3, h4, p, .mini {
      margin-left: 40px;
      margin-right: 40px;
    }

    a {
      color: #7CB600;
      font-weight: bold;
    }

    h1 {
      margin-top: 35px;
      margin-bottom: 10px;
      line-height: 66px;
      font-size: 52px;
    }

    .p {
      text-align: justify;
      line-height: 23px;
      font-size: 13px;
      padding-right: 20px;
    }

    h2 {
    margin-top: 60px;
    font-size: 26px;
    padding: 10px;
    border-radius: 10px;
    background: rgb(162, 201, 41);
    padding-left: 35px;
    margin-left: 0px;
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
    margin-bottom: 30px;
    clear: both;
    text-shadow: 1px 1px 2px rgb(43, 66, 27);

    color: white;
    }

    .mini {
      border: 1px solid white;
      box-shadow: 3px 3px 8px rgb(190, 190, 190);
      border-radius: 50px;
      float: left;
    }

    .home {
      position: absolute;
      top: -51px;
      left: 40px;
      cursor: pointer;
      overflow: hidden;
      width: 62px;
    }

    .home img {
      box-shadow: 3px 3px 2px rgba(0, 0, 0, 0.2);
      border-radius: 7px;
      border-bottom-left-radius: 0;
      border-bottom-right-radius: 0;
    }

    .home img:hover {
      box-shadow: 0px 3px 2px rgba(-1, 0, 0, 0.4);
      margin-left: 2px;
    }

    h3 {
      clear: left;
      float: left;
      padding-bottom: 10px;
      color: #CCC;
      width: 182px;
      height: 40px;
      font-size: 20px;
      text-align: center;
      margin: 0;
    }

    .qtip-title {
      color: #AAA;
      font-weight: bold;
    }

    @media (max-width: 767px) {
      .home img, .home img:hover {
        border-radius: 7px;
        box-shadow: none;
        margin-left: 0;
      }

      .home {
        overflow: visible;
        padding-top: 10px;
        top: -60px;
        padding-bottom: 10px;
        width: 100%;
        border-radius: 8px;
        text-align: center;
        left: 0;
        background: rgb(170, 204, 62);
        border-top-left-radius: 0;
        border-top-right-radius: 0;
      }
    }
    </style>
  </head>

  <body class="nojs">

    <script>document.body && (document.body.className = "");</script>

    <div class="alert-message info hide">
        <a class="close" href="#">×</a>
        <p></p>
    </div>
    <script>
    var msg = decodeURIComponent(document.cookie).match(/message=[^@;]+/);
    if(msg) {
      msg = msg ? msg[0].replace("message=", "").replace(/\+/g, ' ') : '';
      document.getElementsByTagName("div")[0].className += 'no';
      document.getElementsByTagName("p")[0].innerHTML = msg || 'Operacion realizada con satisfaccion!';
      document.cookie = "message=@;";
    }
    </script>

    <div class="container">

      <a class="home" href="./" title="Ir al directorio!"><img role="presentation" aria-hidden="true" src="img/return_btn.png" alt="icon"></a>
      <h1>10 Formas Mejores De Aprender Javascript Sin Pagar Un Peso!</h1>

      <a target="_blank" href="http://www.codecademy.com/?locale_code=es#!/exercises/0">
        <h2>Interactivamente en CodeCademy... en español!</h2>
      </a>
      <img class="mini" src="img/mini_cc.jpg" />
      <h3>Precio: <span>$0</span></h3>
      <p class="p">En los <a target="_blank"  href="http://www.codecademy.com/?locale_code=es#!/exercises/0">ejercicios interactivos de CodeCademy</a> podrás aprender de una forma muy sencilla e interactiva que es Javascript, como se compone y como usarlo para crear lo que tu necesitas. La aplicación en los primeros niveles te dice exactamente que es lo que tienes que escribir, lentamente te va dando mas libertad estimulando tu lógica y razonamiento para que eventualmente seas capaz de resolver sin ayuda cualquier problema que te pida solucionar.</p>
      

      <a target="_blank" href="http://www.youtube.com/playlist?list=PL9ADAF257242D75FA">
        <h2>Viendo los vídeos de Código Facilito</h2>
      </a>
      <img class="mini" src="img/mini_cf.jpg" />
      <h3>Precio: <span>$0</span></h3>
      <p class="p">En los <a target="_blank"  href="http://www.youtube.com/playlist?list=PL9ADAF257242D75FA">vídeos de Javascript de código facilito</a> podrá encontrar todo lo que necesita saber sobre Javascript y jQuery para poder hacer interesantes efectos y funcionalidades en su pagina web con todas las ventajas que los videotutoriales dan; tales como pausar para continuar otro día, repetir cualquier parte que no entienda, <a target="_blank" href="http://keepvid.com/">descargarlo</a> para poder verlos desde su smartphone. Igualmente es excelente para principiantes que familiarizarse con la sintaxis de Javascript la cual cada día coge mas fuerza en otros ambientes tales como en aplicaciones multi-plataforma como Node.JS y Phantom.JS e incluso interfaces para aplicaciones desktop en Windows 8. No esta demás mencionar que CodigoFacilito también ofrece vídeos para <a target="_blank" href="http://www.youtube.com/user/codigofacilito/videos?view=1&flow=grid">muchos otros lenguajes de programación y nuevas tecnologías</a>.</p>
      
      <a target="_blank" href="http://www.criteriastudio.com/javascript-para-titanium-i/">
        <h2>Leyendo los tutoriales de Titanium creados por Criteria</h2>
      </a>
      <img class="mini" src="img/mini_titanium.jpg" />
      <h3>Precio: <span>$0</span></h3>
      <p class="p"><a href="http://www.criteriastudio.com/javascript-para-titanium-i/">Los tutoriales de Criteria</a> enseñan Titanium. Esta es una plataforma para desarrollar aplicaciones que se crean una sola vez en Javascript pero sirven de base para crear aplicaciones nativas (osea muy rápidas!) que corran nativamente en todos los dispositivos modernos: iPhone, iPads, Android y mas! Es por eso que es un excelente alternativa para mejorar tus habilidades en Javascript mientras construyes aplicaciones multi-dispositivo para ti o para tu empresa.</p> 
 
      <a target="_blank" href="http://www.youtube.com/playlist?list=PLA2F1E4E7EB7FB461">
        <h2>Videotutoriales de Unity para crear videojuegos!</h2>
      </a>
      <img class="mini" src="img/mini_fenix.jpg" />
      <h3>Precio: <span>$0</span></h3>
      <p class="p">En los <a target="_blank"  href="http://www.youtube.com/playlist?list=PLA2F1E4E7EB7FB461">vídeos de Javascript de Fenix Discom</a> aprenderas como crear Javascript para Unity; un software que te permite crear videojuegos instalables y para la web (usando un plugin). Unity es una plataforma cada vez mas fuerte y conocida por que facilita muchísimo la creación de videojuegos 3D y 2D. <a target="_blank" href="http://unity3d.com/">La pagina oficial</a> esta en ingles pero tiene mucha info que te podría interesar. Aunque si le tienes fobia al ingles trinit.es nos ofrece gratuitamente <a href="http://trinit.es/unity/tutoriales/" target="_blank">muchos documentos en español para aprender</a> sobre esta interesante herramienta</p>

      <a target="_blank" href="http://www.youtube.com/playlist?list=PL38CA7BD8CB5F3FF9">
        <h2>Aprendiendo Node con los vídeos de VideoTutoriales.com</h2>
      </a>
      <img class="mini" src="img/mini_out.jpg" />
      <h3>Precio: <span>$0</span></h3>
      <p class="p">En los <a target="_blank"  href="http://www.youtube.com/playlist?list=PL38CA7BD8CB5F3FF9">vídeos de Javascript de la VideoTutoriales.com</a> se explica todo lo básico que necesitas saber sobre Node (Como por ejemplo: que demonios es Node?). Se enseñan todo lo que se debe saber para crear e instalar aplicaciones CRUD (En español: crear, leer, actualizar y borrar) en vuestro servidor hechas en Javascript y aprovechando todos los <a target="_blank" href="http://fernetjs.com/2012/02/modulos-en-nodejs/">módulos que existen para Node.JS.</a> Por cierto no os olvidéis de visitar los otros posts de fernet si Javascript y Node son tu rollo! E igualmente no pases por alto los otros videotutoriales de <a target="_blank" href="http://www.youtube.com/user/0utKast/videos?view=1&flow=list&sort=dd">VideoTutoriales.com en YouTube</a></p>

      
      <a target="_blank" href="http://www.bogotajs.com/">
        <h2>Asistiendo a eventos de Bogota.JS o comunidades similares</h2>
      </a>
      <img class="mini" src="img/mini_bogjs.jpg" />
      <h3>Precio: <span>$0</span></h3>
      <p class="p"><a href="http://www.bogotajs.com/">BogotaJS</a> es un grupo de desarrolladores Javascript y espacio en el que continuamente se exponen nuevas tecnologías y desarrollos relevantes para todo aquel que desee aprender Javascript y estar siempre actualizado de las nuevas posibilidades que este brinda. BogotaJS como su nombre lo indica se lleva a cabo en Bogotá (Colombia), pero si no vives en Bogotá o ni siquiera en Colombia haciendo uso del <a target="blank" href="http://www.meetup.com/">buscador de Meetup puedes encontrar conferencias</a> similares en tu ciudad, por ejemplo buscando en Argentina me encontré una <a target="_blank" href="http://www.meetup.com/NodeJS-Argentina/">gran comunidad sobre Node.JS</a> y en México encontré una <a href="http://www.meetup.com/TitaniumAppceleratorMX/" target="_blank">comunidad de Titanium</a>.</p>

      <a target="_blank" href="https://www.google.com/?hl=en">
        <h2>Google... es en serio!</h2>
      </a>
      <img class="mini" src="img/mini_g.jpg" />
      <h3>Precio: <span>$0</span></h3>
      <p class="p">Si estas teniendo algún problema en Javascript o en cualquier otro lenguaje tienes que ser inteligente y preciso a la hora de buscar ayuda en Internet; no escribas en el cajón de búsqueda "Nodejs se me bloquea". Mejor mira si el error tiene algún numero, modulo o alguna frase en particular; busca mejor "Nodejs symbol lookup error" u otra información que parezca valiosa a la hora de describir el problema de forma técnica. Recuerda siempre que cualquier problema que hayas tenido es muy probable que también lo haya tenido alguien mas en Internet; una búsqueda precisa puede salvarte horas de frustración. Cabe recalcar que si sabes un poco de ingles a veces es mejor buscar directamente en <a href="http://stackoverflow.com" target="_blank">Stackoverflow</a>, un directorio de preguntas y respuestas sobre cualquier lenguaje de programación... y claro; si no encuentras solución a tu problema no dudes en postear tu duda (en ingles!), muchos de los miembro de <a href="http://stackoverflow.com" target="_blank">Stackoverflow</a> estarán dispuestos a ayudarte.</p>
      
      <a target="_blank" href="http://www.youtube.com/course?list=EC46F0A159EC02DF82">
        <h2>Para quienes saben ingles los recursos son casi infinitos!</h2>
      </a>
      <img class="mini" src="img/mini_en.jpg" />
      <h3>Precio: <span>$0</span></h3>
      <p class="p">Si tienes la fortuna de saber Ingles <a target="_blank" href="http://www.youtube.com/course?list=EC46F0A159EC02DF82">el canal de TheNewBoston</a> tiene unos excelentes vídeos donde explica lenta y claramente los componentes en Javascript enseñando desde lo mas básico como declaración de variables hasta cosas como validación de formularios. Igualmente luego de que domines un poco Javascript deberías acceder a su <a href="http://www.youtube.com/course?list=EC6B08BAA57B5C7810">curso de jQuery</a>. Cuando ya estes un poco mas cómodo con Javascript puedes acceder a las (sin exagerar) miles de colecciones de <a href="https://gist.github.com/LindseyB/5015434" target="_blank">tutoriales para Node.JS</a>; igualmente no puedo hablar de material en ingles sin recomendar <a target="_blank" href="http://eloquentjavascript.net/">"Eloquent Javascript"</a> que es un libro gratuito y muy completo sobre Javascript.</p>

      <a target="_blank" href="http://www.youtube.com/playlist?list=PLp-77SLGy08yNQ58XClTU31IcGVO7CC9s">
        <h2>Por cierto, si no sabes ingles... learn it!</h2>
      </a>
      <img class="mini" src="img/mini_en2.jpg" />
      <h3>Precio: <span>$0</span></h3>
      <p class="p">No es directamente relacionado con Javascript pero así nos guste o no el ingles es el idioma de Internet; es la lengua mas hablada del mundo y teniendo en cuenta que Javascript y Node fueron creados en Estados Unidos es entendible que la mayor cantidad de vídeos y textos sobre estas tecnologías estén en ingles; es por eso y por muchas otras razones que aprender Ingles es una de las mejoras formas en que invertir tu tiempo. Tal vez no lo sepas pero estructuralmente hablando el español es mucho mas difícil que el ingles. Así que aprovecha el tiempo, <a href="http://www.youtube.com/playlist?list=PLp-77SLGy08yNQ58XClTU31IcGVO7CC9s">puedes comenzar checando estos vídeos!</a></p>

      <footer>
      <hr>
        <p>Creado por <a class="author" href="http://twitter.com/ivanca">Iván Castellanos</a><br>El logo animado en este sitio web es una parodia de mejorando.la<br>
          <span title="Copyright (c) 2012 Ivan Castellanos.

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the 'Software'), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED 'AS IS', WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.">MIT License</span>

        <a href="https://github.com/AltIvan/programando.la">Fork it on github</a></p>
      </footer>

    </div>

    <div id="myModal" class="modal hide fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Contribuir un link</h3>
      </div>
      <div class="modal-body">
    <form id="link-form" action="save_url.php" method="post">

      <fieldset>
        <label >Titulo:*</label>
        <input type="text" name="name" id="name" placeholder="Escriba un titulo descriptivo." class="large-input" />

        <label >Link:*</label>
        <input type="text" name="link" id="link" placeholder="Ingrese la URL del documento o video" class="large-input" />

        <label >Twitter:</label>
        <input type="text" name="twitter" id="twitter" placeholder="Opcional"  maxlength="20" /> 
        
        <input type="hidden" name="lang" id="lang" /> 
        <button type="submit" class="btn submit-link">Submit</button>
      </fieldset>

    </form>
    </div>
      <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
      <script src="js/jquery.qtip-1.0.0-rc3.min.js"></script> 
      <script type="text/javascript">
      $(".home").qtip({
        style: {
          name: 'light',
          tip: true,
          color: '#BBB',
          fontWeight: 'bold'}, 
        position: { 
          corner: {
            target: 'rightMiddle',
            tooltip: 'leftMiddle'
          },
        adjust: { 
          screen: true
        }}});
      </script>
          
    </div>

  </body>
</html><?php

ob_end_flush();