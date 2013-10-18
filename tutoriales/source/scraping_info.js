// Regalando.la
// Scrips para extraer informacion de las diferentes partes
// haciendo uso de Javascript en la consola de Chrome

// :: Bookmarklet para inyectar jQuery en cualquier pagina
// agresivamente (sobreescribe la variable "$" en caso de existir)
javascript:(function () {window.selectorPlz = function(o){ o = typeof $0 !== "undefined" ? $0 : o; return jQuery(o).parentsUntil("body").andSelf().map(function () { if(this.id)return '#'+this.id;if(this.className)return this.className.trim().replace(/\s+/g,'.'); }).get().join(" ");};var last_script = ""; var _sss = document.createElement("script"); _sss.src = "//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"; if(document.attachEvent){ var ieAlready = false; _sss.onreadystatechange= function () { if (this.readyState == "complete" || this.readyState == "loaded" && !ieAlready){if($.noConflict){$.noConflict()};ieAlready = true;}; } } document.getElementsByTagName("head")[0].appendChild(_sss); } )();

// :: Con un javascript (jQuery) similar a este saco los links de las listas de YouTube:
  var n = "\r\n";
var result = "<!-"+"- Extraido desde " + String(document.location) + " -"+"->" + n +
$(".playlist-landing .yt-uix-tile-link").filter(function () { return this.innerText.indexOf("Python") !== -1; }).map(function(i, e){
  return '<li>' + n + '\t<a class="video_es" href="' + e.href.replace(/&.*/, "") + '" target="_blank">' + e.innerText + "</a>" + n + "</li>";
}).get().join(n);

// :: Ejemplo para lista PHP de Youtube:
var n = "\r\n";
var result = "<!-"+"- Extraido desde " + String(document.location) + " -"+"->" + n +
$(".playlist-landing .yt-uix-tile-link").filter(function () { return this.innerText.indexOf("PHP") !== -1; }).map(function(i, e){
return '<li>' + n + '\t<a class="video_es" href="' + e.href.replace(/&.*/, "") + '" target="_blank">' + e.innerText.replace("Tutorial PHP - ", "").replace(/ en PHP ?| mediante PHP/,"") + "</a>" + n + "</li>";
}).get().join(n);

// :: Ejemplo para lista Ruby de Youtube:
var n = "\r\n";
var result = "<!-"+"- Extraido desde " + String(document.location) + " -"+"->" + n +
$(".playlist-landing .yt-uix-tile-link").map(function(i, e){
return '<li>' + n + '\t<a class="video_es" href="' + e.href.replace(/&.*/, "") + '" target="_blank">' + e.innerText.replace('Tutorial Ruby ', '') + "</a>" + n + "</li>";
}).get().join(n);

// :: Con este javascript extraigo los actuales resultados de google
var n = "\r\n";
var result = "<!-"+"- Extraido desde " + String(document.location) + " -"+"->" + n +
$(".g").map(function () { return '<li>' + n + '\t<a class="doc" href="' + $(this).find("a:first").prop("href") + '">' + $(this).find("a:first").text() + "</a>" + n + '</li>'; }).get().join(n);