<?php 

// Este archivo es el que se usa para generar la pagina principal
// que se le muestra a todos los usuarios.
// De esta forma mostrar la pagina es algo mas ligero y rapido para el servidor.
require("../includes/functions.php");
onlyLocalAllowed();
define("FILE_NAME", 'contribuidores.html');

ini_set("allow_url_fopen", true);
$contribuidores = "gollum23,flukke1313,danieruval,jeffarrubla,ivanca";
$contribuidores_arr = explode(',', $contribuidores);

$html = '';
$url = "http://api.twitter.com/1/users/lookup.json?screen_name=$contribuidores&include_entities=true";
$data = json_decode(file_get_contents($url));

$what = usort($data, function ($a, $b) use ($contribuidores_arr) {
	$_a = (int)array_search(strtolower($a->screen_name), $contribuidores_arr);
	$_b = (int)array_search(strtolower($b->screen_name), $contribuidores_arr);
	return $_a - $_b;
});


foreach ($data as $twitter) {
	$html .= "
		<a target=\"_blank\" href=\"http://twitter.com/$twitter->screen_name\">
			<h2>
			<img class=\"mini\" src=\"$twitter->profile_image_url\" />
			$twitter->name 
			<span>
				@$twitter->screen_name
			</span>
			</h2>
		</a>
		";
}

ob_start("toStatic");
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Contribuidores de programando.la!</title>
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

    a, a:hover {
      color: #7CB600;
      font-weight: bold;
      text-decoration: none;
    }

    h1 {
      margin-top: 35px;
      margin-bottom: 10px;
      line-height: 66px;
      font-size: 52px;
    }

    .p {
      min-height: 37px;
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
    margin-left: 0px;
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
    margin-bottom: 30px;
    clear: both;
    text-shadow: 1px 1px 2px rgb(43, 66, 27);
    padding-left: 26px;
    color: white;
    }

    .mini {
      border: 1px solid white;
      box-shadow: 3px 3px 8px rgb(190, 190, 190);
      border-radius: 50px;
      float: left;
      margin-top: -3px;
      margin-right: 20px;
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

    h2 span {
    font-size: 13px;
    text-shadow: none;
    vertical-align: middle;
    font-family: Tahoma, Arial;
    color: rgb(203, 235, 202);
    font-size: 10px;
    margin-left: 10px;
    }
    </style>
  </head>

  <body class="nojs">

    <script>document.body && (document.body.className = "");</script>

    <div class="alert-message info hide">
        <a class="close" href="#">×</a>
        <p></p>
    </div>

    <div class="container">

      <a class="home" href="./" title="Ir al directorio!"><img role="presentation" aria-hidden="true" src="img/return_btn.png" alt="icon"></a>
      <h1>Los Contribuidores!</h1>


      <?= $html ?> <br>
	      
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
  </body>
</html><?php

ob_end_flush();