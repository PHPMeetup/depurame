<?php

#######################
# Archivos requeridos #
#######################

require "includes/functions.php";
$url = local() ? '_index.php' : 'index.html';

#######################
# Browser back button #
#######################

if (empty($_POST)) {
	header('Location: ' . $url);
	exit();
}

##############
# Validation #
##############

if (empty($_POST["name"]) || empty($_POST["link"])) {
	exit( "name y link no pueden estar vacios." );
}

$twitter = empty($_POST["twitter"]) ? '' : preg_replace('/^@/', '', $_POST["twitter"]);
$name = $_POST["name"];
$link = $_POST["link"];
$lang = $_POST["lang"];
$ip = $_SERVER['REMOTE_ADDR'];

$test = $name . $link . $twitter . $lang;
if (preg_match('/<script|\'\s*;\s*(INSERT|UPDATE|DELETE|DROP)\b/', $test) !== 0) {
	banUser($dbh);
}

if (filter_var($link, FILTER_VALIDATE_URL) === FALSE) {
    exit('Link invalido.');
}

if (preg_match('/[^a-z0-9_]/i', $twitter) !== 0) {
    exit('Twitter invalido.');
}

if (preg_match('/[a-z]{3}/i', $name) === 0) {
    exit('Nombre invalido.');
}

############################
# Chequear si esta baneado #
############################

$dbh = dbConnection();
checkIfBanned($dbh);

#######################################################
# Checkiar si el usuario ya agrego muchos links, DOSS #
#######################################################

$stmt = $dbh->prepare('select count(*) FROM nuevos_links where ip=:ip');
$stmt->bindParam(':ip', $ip, PDO::PARAM_STR, 50);
$stmt->execute(); 
$found = $stmt->fetchColumn();
if ($found > 500) {
  banUser($dbh);
}

######################
# Saving in Database #
######################

$stmt = $dbh->prepare("insert into nuevos_links (link, twitter, ip, name, lang) values (:link, :twitter, :ip, :name, :lang)");
$stmt->bindParam(':link', $link, PDO::PARAM_STR);
$stmt->bindParam(':twitter', $twitter, PDO::PARAM_STR, 20);
$stmt->bindParam(':ip', $ip, PDO::PARAM_STR, 50);
$stmt->bindParam(':name', $name, PDO::PARAM_STR);
$stmt->bindParam(':lang', $lang, PDO::PARAM_STR);
$stmt->execute();
$first_name = 'David';
mysql_query("SET NAMES UTF8");

// If everything went fine
singleMessageAndReturn('Muchas gracias! Su link ha sido grabado y luego de ser aceptado sera añadido a la pagina.');
?>
