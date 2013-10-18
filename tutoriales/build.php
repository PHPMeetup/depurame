<?php 

// Este archivo es el que se usa para generar la pagina principal
// que se le muestra a todos los usuarios.
// De esta forma mostrar la pagina es algo mas ligero y rapido para el servidor.
require("includes/functions.php");
onlyLocalAllowed();
saveSchema();

define("FILE_NAME", 'index.html');
ob_start("toStatic"); 



?><!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Programando.la - Aprender a programar gratis</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Tutoriales para aprender programacion gratis!">
    <meta name="keywords" content="Programando.la, programandola, programacion, Aprender programacion, tutoriales, Javascript, PHP, Python, jQuery, HTML5, Freddy Vega">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />    
    <link href="css/bootstrap-responsive.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen"/>
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="favicon.ico">
  </head>

  <body class="nojs">

    <script>/* Handling CSS for disable Javascript */ document.body && (document.body.className = "");</script>

    <div class="container">
      <div class="social">

        <!-- Twitter -->
        <a href="https://twitter.com/Programandola" class="twitter-follow-button" data-show-count="false" data-lang="es" data-show-screen-name="false">Seguir a @Programandola</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

        <!-- Carelibro -->
        <iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.facebook.com%2FProgramandola&amp;send=false&amp;layout=button_count&amp;width=100&amp;show_faces=false&amp;font&amp;colorscheme=light&amp;action=like&amp;height=21&amp;appId=217260124964315" style="border:none; overflow:hidden; width:100px; height:21px;overflow:hidden;border:0"></iframe>

</div>
      <div class="hero-unit">
        <h1 class="hero-title">Programando.la!</h1>
        <img src="img/logo.png" alt="@Freddier y su fiel amigo">
        <p>Directorio para aprender todo lo que ellos enseñan pero 100% gratis.</p>
        <div class="lol"></div>
      </div>
      <div class="row">
        
        <div class="span4">
          <h2 title="Dificultad: Muy facil">Paginas web HTML5</h2>
          <p>Aprende a crear paginas web de la forma moderna con todos los beneficios que esta trae.</p>
          <?php
            printData('html5', "http://es.wikipedia.org/wiki/HTML5") 
          ?>
        </div><!--/span-->
        
        <div class="span4">
          <h2  title="Dificultad: Moderada">Javascript y jQuery</h2>
          <p>Es un lenguaje <a title="Programación basada en prototipos es un estilo de programación orientada a objetos en el cual, las 'clases' no están presentes, pero la reutilizacion de codigo se hace a travez de clonacion de objetos persistentes. Los cuales sirven de base para el nuevo objeto.">basado en prototipos</a> y es el <a title="Javascript se utiliza principalmente en su forma del lado del cliente (client-side), implementado como parte de un navegador web permitiendo mejoras en la interfaz de usuario y páginas web dinámicas, en bases de datos locales al navegador. También existe una forma de JavaScript del lado del servidor, la mas popular es Node.JS">unico</a> usado para proveer interactividad en la web. También se enseña un poco sobre <a title="jQuery es una biblioteca de JavaScript, creada inicialmente por John Resig, que permite simplificar la manera de interactuar con los documentos HTML">jQuery</a>.</p>
          <?php
            printData('javascript', "http://es.wikipedia.org/wiki/JavaScript") 
          ?>
        </div><!--/span-->
        
        <div class="span4">
          <h2 title="Dificultad: Facil">CSS3</h2>
          <p>CSS significa Cascade Style Sheeting, que traduce estilos de hoja en cascada. CSS es lo que hace que las paginas web (HTML) tengan una apariencia y organizacion.</p>
          <?php
            printData('css3', "http://es.wikipedia.org/wiki/CSS3") 
          ?>
        </div><!--/span-->
      </div><!--/row-->

      <div class="row">
        
        <div class="span4">
          <h2 title="Dificultad: Moderada">Python</h2>
          <p>Python es un lenguaje de <a title="Un lenguaje interpretado es un lenguaje de programación que está diseñado para ser ejecutado por medio de un intérprete, en contraste con los lenguajes compilados. Los lenguages compilados hay que procesarlos para guardarlos como un archivo ejecutable; en los lenguages interpretados no es necesario.">programación interpretado</a> y multiparadigma con un enfoque en una sintaxis muy simple y que favorezca un código legible. Es lenguaje que usa YouTube.</p>
          <?php
            printData('python', "http://es.wikipedia.org/wiki/Python", "http://python.org/") 
          ?>
        </div><!--/span-->
        
        <div class="span4">
          <h2 title="Dificultad: Facil">PHP</h2>
          <p>Es un lenguaje multiparadigma enfocado en el desarrollo de sitios web. Es muy facil de aprender y es soportada por muchos <a title="El alojamiento web (en inglés web hosting) es el servicio que provee a los usuarios de Internet un sistema para poder almacenar información, imágenes, vídeo, o cualquier contenido accesible vía web, por ej. paginas PHP.">web hosting</a> pero sufre de algunas inconcistencias. Es el lenguaje que usa Facebook.</p>
          <?php
            printData('php', "http://es.wikipedia.org/wiki/PHP","http://php.net/") 
          ?>
        </div><!--/span-->
        
        <div class="span4">
          <h2 title="Dificultad: Sobresaliente">Java</h2>
          <p>Es un lenguaje <a title="La programación orientada a objetos o POO es un paradigma de programación que usa 'objetos' y 'clases' en sus interacciones para diseñar aplicaciones. Como analogia se puede decir que las 'clases' son los planos dibujados para la construccion de una casa y los 'objetos' son todas las casas que se hacen a partir de ese plano.">orientado objetos</a> que se caracteriza por ser usado en grandes empresas y por su velocidad de ejecución. Es un lenguaje que Google usa extensamente.</p>
          <?php
            printData('java', "http://es.wikipedia.org/wiki/Java_(lenguaje_de_programación)", 'http://www.java.com/en/') 
          ?>
        </div><!--/span-->
     
      </div><!--/row-->

      <div class="row">
        
        <div class="span4">
          <h2 title="Dificultad: Moderada">Ruby</h2>
          <p>Es un lenguaje orientado objetos que se caracteriza por ser usado en aplicaciones de escritorio y <a title="Como peliculas pero usted tiene algo de control sobre lo que sucede! :)">videojuegos</a>. Es un lenguaje que EA, Valve y otras importantes empresas de videojuegos usan.</p>
          <?php
            printData('ruby', "http://es.wikipedia.org/wiki/Ruby", "http://www.ruby-lang.org/en/") 
          ?>
        </div><!--/span-->
        
        <div class="span4">
          <h2 title="Dificultad: Facil/Moderada">Ruby On Rails</h2>
          <p>También conocido como RoR o Rails es un framework de aplicaciones web de código abierto escrito en el lenguaje de programación Ruby, siguiendo el paradigma de la arquitectura <a title="Modelo Vista Controlador (MVC) es un patrón o modelo de abstracción de desarrollo de software que separa los datos de una aplicación, la interfaz de usuario, y la lógica de negocio en tres componentes distintos. El patrón de llamada y retorno MVC (según CMU), se ve frecuentemente en aplicaciones web, donde la vista es la página HTML y el código que provee de datos dinámicos a la página.">Modelo Vista Controlador (MVC)</a>.</p>
          <?php
            printData('rails', "http://es.wikipedia.org/wiki/Ruby_on_Rails", 'http://rubyonrails.org/') 
          ?>
        </div><!--/span-->
        
        <div class="span4">
          <h2 title="Dificultad: Dificil/Moderada">C++</h2>
          <p>Es un <a title="Un lenguaje de programación de bajo nivel de abstracción es aquel en el que sus instrucciones ejercen un control directo sobre el hardware y están condicionados por la estructura física de la computadora que lo soporta.">lenguaje de bajo nivel</a> orientado objetos que se caracteriza por ser usado en aplicaciones de escritorio y videojuegos. Es un lenguaje que EA, Valve y otras importantes empresas de videojuegos usan. Es el lenguaje con el que se desarrollo Google Chrome.</p>
          <?php
            printData('c++', "http://es.wikipedia.org/wiki/C%2B%2B", "http://isocpp.org/") 
          ?>
        </div><!--/span-->
     
      </div><!--/row-->

      <div class="row">
        
        <div class="span4">
          <h2 title="Dificultad: Facil">Git y Github</h2>
          <p>Git es un <a title="Se llama control de versiones a la gestión de los diversos cambios que se realizan sobre los archivos y carpetas del proyecto">software de control de versiones</a> diseñado por Linus Torvalds, pensando en la eficiencia y la confiabilidad del mantenimiento de versiones de aplicaciones cuando estas tienen un gran número de archivos de código fuente.</p>
          <?php
            printData('git', "http://es.wikipedia.org/wiki/Git", "http://git-scm.com/") 
          ?>
        </div><!--/span-->
        
        <div class="span4">
          <h2 title="Dificultad: Media">Node.js</h2>
          <p>Node.js es un entorno de programación en la capa del servidor basado en el lenguaje de programación Javascript, con I/O de datos en una <a title="a programación dirigida por eventos es un paradigma de programación en el que tanto la estructura como la ejecución de los programas van determinados por los sucesos que ocurran en el sistema, definidos por el usuario o que ellos mismos provoquen.">arquitectura orientada a eventos</a>, y basado en el motor Javascript V8.</p>
          <?php
            printData('node', "http://es.wikipedia.org/wiki/Node.js", "http://nodejs.org/") 
          ?>
        </div><!--/span-->
        
        <div class="span4">
          <h2 title="Dificultad: Media">Django</h2>
          <p>Django es un framework de desarrollo web de código abierto, escrito en Python, que cumple en cierta medida el paradigma del Modelo Vista Controlador. Fue desarrollado en origen para gestionar varias páginas orientadas a noticias de la World Company de Lawrence, Kansas, y fue liberada al público bajo una <a title="El software libre (en inglés free software, aunque esta denominación también se confunde a veces con 'gratis' por la ambigüedad del término 'free' en el idioma inglés, por lo que también se usan 'libre software' y 'logical libre') es la denominación del software que respeta la libertad de todos los usuarios que adquirieron el producto y, por tanto, una vez obtenido el mismo puede ser usado, copiado, estudiado, modificado, y redistribuido libremente de varias formas.">licencia BSD</a> en julio de 2005.</p>
          <?php
            printData('django', "http://es.wikipedia.org/wiki/Django_(framework)", "https://www.djangoproject.com/") 
          ?>
        </div><!--/span-->
     
      </div><!--/row-->

      <hr>

      <footer>
        <p>Creado por <a class="author" href="contribuidores.html">numerosos colaboradores</a><br>El logo animado en este sitio web es una parodia de mejorando.la<br>
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
          
    </div>

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  <script src="js/jquery.prettyPhoto.js"></script>
  <script src="js/jquery.qtip-1.0.0-rc3.min.js"></script>  
  <script src="js/bootstrap.min.js"></script>  
  <script src="js/app.js?nocahe=1"></script>  

  </body>
</html>
<?php

ob_end_flush();

$pages = scandir('pages');
foreach ($pages as $p) {
  if (preg_match('/\.php$/', $p)) {
    echo file_get_contents('http://' . $_SERVER['SERVER_NAME'] . "/pages/$p");
  }
}

singleMessageAndReturn('Build completado satisfactoriamente!');


