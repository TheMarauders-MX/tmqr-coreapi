<p align="center"><a href="#"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>
# Instrucciones para instalar el proyecto
## Instalar Laragon
1. [Instalar Laragon Full](https://laragon.org/download/index.html)
2. [Descargar PHP Non Thread Safe](https://windows.php.net/download#php-7.4)
3. Descomprimir el zip de PHP en un nuevo folder dentro de `laragon\bin\php`
4. Abrir la aplicación de Laragon y dar clic derecho y seleccionar `PHP > version ... > PHP 7.4.16` para usar la versión reciente de PHP
5. Arrancar los servicios con el botón `Start All`

## Instalar el proyecto
Primero es necesario crear la base de datos que va a utilizar la aplicación
1. Dar clic en `Database` para abrir la ventana de login de MySQL
2. Por default Laragon no asigna una contraseña a root, poner contraseña y hacer login
3. En el menú de la izquierda dar clic derecho a Laragon que tiene el ícono de un delfin a la izquierda
4. En el menú contextual seleccionar `Create new > Database`
5. Elegir un nombre para la base de datos de la aplicación y en `Collate` seleccionar `utf8_general_ci`
6. Crear la base de datos 

Después se debe configurar el proyecto para usarlo
1. Clonar el proyecto dentro del folder que aparece cuando presionas el botón `Root` en laragon
2. Duplicar el archivo `.env.example` y renombrarlo `.env`
3. Editar el archivo `.env` cambiar el valor `DB_DATABASE` al nombre de la base de datos y `DB_PASSWORD` con la contraseña o dejarla en blanco como está si no tiene
4. Abrir la terminal con el botón `Terminal` de laragon
5. Moverse a la carpeta del proyecto clonado
6. Si apenas instalaste laragon debes correr el comando `composer self-update`
7. Se deben correr los siguientes comandos
```
composer install
php artisan key:generate
php artisan migrate:fresh
php artisan serve
```
