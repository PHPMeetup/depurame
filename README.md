depurame
========

Q&amp;A en español

Instalación.

Depurame parte del proyecto Question2Answer por lo tanto para hacer modificaciónes deberemos crear una instalacion nueva.

1. Descargar la ultima versión de Question2Answer.

http://www.question2answer.org/question2answer-latest.zip

2. Descomprimir la descarga usando una herramienta como WinZip (o descomprimir en el shell de Unix ) .

Si desea ejecutar un sitio no - Inglés , compruebe si el archivo de idioma correspondiente está disponible. Si es así , descarga e instala en la carpeta qa-lang . 

Si no, es fácil de traducir Question2Answer por ti mismo.

3. Crear una base de datos MySQL, y un usuario de MySQL con permisos completos para esa base de datos .
Si usted está interesado , los privilegios realmente necesarias son : CREATE , ALTER , DELETE , INSERT , SELECT , UPDATE , bloquear tablas

4. Tome nota de los detalles de MySQL : nombre de usuario, contraseña, nombre de base de datos y servidor de nombres de host. Si MySQL se ejecuta en el mismo servidor que el sitio web, el nombre de host del servidor es probable que sea 127.0.0.1 o localhost .

5.Encontrar qa -config- ejemplo.php en la carpeta descomprimida question2answer y cambiarle el nombre a qa- config.php .
Abrir qa- config.php en tu editor de texto, insertar los datos de MySQL en la parte superior y guarde el archivo. No utilizar un procesador de textos como Microsoft Word para esto, sino que el Bloc de notas u otro programa de edición de texto apropiado .

6. Coloque todos los archivos Question2Answer (incluyendo htaccess . ) En el lugar apropiado en el servidor web :

	- Para servir Question2Answer en la raíz de un dominio (por ejemplo http://www.mysite.com/ ) , mover o cargar todo el contenido de la carpeta question2answer descomprimido en el directorio raíz de ese dominio en su servidor web.

	- Para servir Question2Answer en un subdirectorio de un sitio ( por ejemplo http://www.mysite.com/qa/ ) , cree el subdirectorio dentro del directorio raíz del sitio web , a continuación, pasar o subir todo el contenido de la carpeta descomprimida question2answer en este subdirectorio .

7. Abra la página web adecuada para Question2Answer en su navegador web , por ejemplo :
	
	- Si ha instalado Question2Answer en la raíz de un dominio, http://www.mysite.com/
	- Si ha instalado Question2Answer en un subdirectorio , http://www.mysite.com/qa/

8. Siga las instrucciones que aparecen en pantalla para configurar la base de datos y la cuenta de administrador. Eso es todo!

9. Descargue este repositorio.

https://github.com/adminnova/depurame.git

10. Sobreescriba los archivos que se encuentran en la instalación inicial con los que se descargaron de este repo. Recuerde que debe conservar la carpeta .git (Normalmente oculta) para que todo funcione bien.

dudas o preguntas carlos.rojas@adminnova.com

