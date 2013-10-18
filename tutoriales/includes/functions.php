<?php 

function toStatic($buffer){
  $a = array( 
    'á','é','í','ó','ú','ñ',
    'Á','É','Í','Ó','Ú','Ñ'
  );
  $b = array( 
    '&aacute;','&eacute;','&iacute;','&oacute;','&uacute;','&ntilde;',
    '&Aacute;','&Eacute;','&Iacute;','&Oacute;','&Uacute;','&Ntilde;'
  );
  $buffer = str_replace($a, $b, $buffer);
  file_put_contents(FILE_NAME, $buffer);
  return ''; 
}

function printData($file, $wiki, $pagOficial=''){

  if(!empty($pagOficial)){
    $pagOficial = '<a class="btn btn_docs" target="_blank" href=' . $pagOficial . '>Pagina oficial</a>';
  }

  echo 
  '<p>
    <a class="btn btn_video_es" href="#">Vídeos en Español</a>
    <!-- <a class="btn btn_video_en" href="#">Videos en Ingles</a> -->
  </p>
  <p class="text_links" data-lang="' . $file . '">
    <a class="btn" href="' . $wiki .'" target="_blank">Wikipedia</a>
    <a class="btn btn_doc" href="#">Documentos</a>' . $pagOficial .'
    <a class="btn btn_add" data-toggle="modal" href="#myModal" role="button" title="Agregar un nuevo link" >+</a></p>';
  echo '<ul>';
  $source = readfile('source/' . $file . '.html');
  echo '</ul>';
}


function dbConnection(){
  
  if ( !file_exists('includes/auth.php') ) {
    exit("Usted debe crear un archivo auth.php en la carpeta 'includes' donde defina
     las constantes DB_HOST, DB_USER y DB_PASS con los parametros
     para acceder a la base de datos.
     ");
  }
  include "includes/auth.php";


  $dbh = new PDO('mysql:dbname=programandola;host=' . DB_HOST, DB_USER, DB_PASS);
  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  return $dbh;

}

function checkIfBanned($dbh){
  $stmt = $dbh->prepare('select count(*) FROM baneados where ip=:ip');
  $stmt->bindParam(':ip', $_SERVER['REMOTE_ADDR'], PDO::PARAM_STR, 50);
  $stmt->execute(); 
  $found = $stmt->fetchColumn();
  if ($found != 0) {
    exit("<h1>Usted esta baneado, contactenos a programandola@gmail.com si considera que ha sido un error.");
  } 
}


function banUser($dbh){
  $stmt = $dbh->prepare("insert into baneados (ip, headers) values (:ip, :headers)");
  $stmt->bindParam(':ip', $_SERVER['REMOTE_ADDR'], PDO::PARAM_STR, 50);
  $headers = print_r(getallheaders(), true);
  $stmt->bindParam(':headers', $headers);
  $stmt->execute();
  exit('<h1>Usted ha sido baneado; sus datos han sido registrados para
    facilitar su identificacion y de considerarlo necesario
    iniciar una  accion legal contra usted. Si considera que 
    esto es un error nos puede contactar a programandola@gmail.com');
}


function local(){
  return $_SERVER['SERVER_NAME'] !== 'programando.la' && $_SERVER['SERVER_NAME'] !== 'www.programando.la';
}

function saveSchema() {

  $dbh = dbConnection();
  $rxp = '/.*Array.*\r?\n|\r?\n\s*?(?=\r?\n)|        /';

  $stmt = $dbh->prepare("DESCRIBE baneados");
  $stmt->execute();
  $desc = "<pre>\r\n" . print_r($stmt->fetchAll(PDO::FETCH_ASSOC), true);
  $desc = preg_replace($rxp, '', $desc);
  file_put_contents('schemas/baneados.html', $desc);

  $stmt = $dbh->prepare("DESCRIBE nuevos_links");
  $stmt->execute();
  $desc = "<pre>\r\n" . print_r($stmt->fetchAll(PDO::FETCH_ASSOC), true);
  $desc = preg_replace($rxp, '', $desc);
  file_put_contents('schemas/nuevos_links.html', $desc);

}

function onlyLocalAllowed(){
  if( !local() ){
    throw new Exception(
      'Este script es para ser ejecutado unicamente en'
      . ' un contexto local, no directamente en produccion.'
    );
  }
}

function singleMessageAndReturn($msg) {

  ?>
  <!DOCTYPE HTML>
  <html>
  <head>
  <meta charset="utf-8">
  <title><?= $msg ?></title>
  <style type="text/css">
  @import url(//fonts.googleapis.com/css?family=Crete+Round);
  h1, p {
    font-family: 'Crete Round',serif;
    line-height: 40px;
    text-rendering: optimizelegibility;
    top: 100px;
    text-align: center;
    padding-right: 50px;
    padding-left: 50px;
  }

  h1 {
    font-size: 30px;
    font-weight: 400;
    margin-top: 160px;
  }

  a, h1 {
    color:  rgb(175, 190, 0);
  }

  p {
    margin-top: 10px;
    font-size: 20px;
    color: #666;
  }
  </style>
  </head>
  <body>
    <h1 id="msg"><?= $msg ?></h1>
    <p>Sera devuelto al <a href="index.html">sitio</a> en <span id="time">12</span> segundos</p>
  </body>

  <script type="text/javascript">
  var time = document.getElementById('time');
  var msg = document.getElementById('msg').innerHTML;
  var ani = setInterval(function () {
    time.innerHTML -= 1;
    if (time.innerHTML === "0") {
      document.location = 'index.html';
      clearInterval(ani);
    }
  }, 1000);
  </script>

  </html>
  <?php
}