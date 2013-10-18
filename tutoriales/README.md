Codigo fuente de [programando.la](http://programando.la)
============================================
Sitio web dedicado a ofrecer recursos para aprender a programar de forma gratuita.

Local
------
Para el ambiente de desarrollo local si estas usando Apache (XAMPP, WAMP, etc) puedes agregar estas lineas al final del archivo http.conf: 

<pre>
#Default
&lt;VirtualHost *:80&gt;
    DocumentRoot /xampp/htdocs
    ServerName localhost
&lt;/VirtualHost&gt;

#Programando.la
&lt;VirtualHost *:80&gt;
    DocumentRoot /xampp/htdocs/programandola
    ServerName dev.programando.la
&lt;/VirtualHost&gt;
</pre>

Para que puedas ingresar al sitio local (en tu maquina) desde el navegador usando la direccion **dev.programando.la** estando en Windows puedes editar el archivo *'C:/Windows/System32/drivers/etc/hosts'* y agregar esta linea al final: 

<pre>127.0.0.1  dev.programando.la</pre>

De ser necesario cambia *'/xammp/htdocs'* por la carpeta donde tienes guardado tus sitios web, por ejemplo en Ubuntu usualmente es *'/var/www'*.

Build
------
Para construir el sitio solo tienes que abrir *'build.php'*, por ejemplo abrir en el navegador *'http://dev.programando.la/build.php'*
