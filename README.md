## crear todos los proyectos desde la carpeta htdocs xsiacaso 

## Comando para iniciar un proyecto con laravel y una version en especifica
composer create-project --prefer-dist laravel/laravel nombre_del_proyecto 8.3.0

## Comando para iniciar un proyecto con laravel
composer create-project --prefer-dist laravel/laravel nombre_del_proyecto

## Comando para crear proyecto desde la carpeta de httdocs
laravel new nombre_proyecto

## lanzar proyecto: 

php artisan serve

## lanzar proyecto con un puerto random manipulado por usuario
php artisan serve --port=3040 

## para crear controladores

php artisan make:controller "Nombre del controlador"

## pequeñas observaciones 

<p>para configurar las rutas el path es ./routes/web.php</p>

<p>los controladores que se crean mediante el comando php artisan make:controller "Nombre del controlador" se alojan en 
el path .\App\Http\Controllers\nombre del controlador</p>

<p>las vistas o htmls que en este caso esta con extencion php se almacenan en ./resources/views y dentro de resources existen carpetas como css que sirven para styles y js para funcionamiento de la pagina :D </p>

## codigos repetitivos reutilizar codigo 

<p>para esto se crea una carpeta layouts dentro de vistas y se lo pone de la siguiente manera nombre.blade.php
esto ayudara para que puedas reutilizar codigo en tus distintos scrpits de html importante el .blade</p>

<p>para esto creamos como variables con @yield y se le asigna identificadores para poder llamarlos con un metodo @section
en caso que nuestro codigo sea largo ponemos @section y terminamos con @endsection </p>

<p>asi mismo para poner los @section en cada script de vista como show, index o create en este ejemplo tenemos que 
adicionar la extencion .blade</p>

## Base de datos

<p> para configurar tu base de datos es necesario ir al siguiente path ./config/database.php</p>
<p> la configuracion de tu codigo se vera reflejada en este scrpit database.php pero para mayor seguridad esta
recibira parametros enviados desde un archivo .env esto para que encaso de que compartas mediante repositorio
no tengas ningun peligro de acuerdo a tus credenciales. es por seguridad</p>

<p> para crear las tablas de tu base de datos lo puedes hacer mediante migraciones desde el path.\database\migrations\ y como
ejecutar las migraciones por primera vez con el codigo "php artisan migrate"

<p> para crear nuevas migraciones se realiza con el comando "php artisan make:migration Nombre_de_Migracion"

<p> en caso de que quieras hacer un ctrl z por decirlo asi con tus migraciones solo tienes que poner el comando
"php artisan migrate:rollback" esto desara la ultima accion que tu hiciste recordando que las acciones en cada migracion
se van enumerando 1,2,3,4,5,6 si tu aplicas un rollback entonces se eliminara la accion 6 y si vuelves aplicar la 5 y asi consecutivamente </p>

### leer importante sobre migraciones de tablas a la base de datos 
<p> como se vio anteriormente ya se dio un comando para crear una migracion para la tabla de Cursos pero ahora una forma mas sencilla de acerlo es de con el sigueinte comando "php artisan make:migration create_nombredelatabla_table" de esta manera ya te generara el nombre de la tabla el id y el timestamp es una forma de ahorrar un poc de tiempo

### importante
<p> en caso tu proyecto aun no este desplegado y con datos dentro de tus tablas solamente tienes que hacer un table artisan migrate:fresh este comando eliminara todas las tablas y actualizara de ser necesaio en caso ahyas agregado una nueva columna a tu tabla :d pero si tu proyecto esta en produccion no se recomienda hacer por que destruiria todos tus registros causando grandes molestias

### algunos comandos 
artisan migrate:fresh // este comando elimina toda la migracion y la ejecuta nuevamente
artisan migrate:refresh // este comando primero ejecuta el metodo down y despues ejecuta el metodo up de esta manera realiza la migracion 

### Modificando solamente una columna de la tabla sin necesidad de borrar toda la tabla y no perder datos en caso tenga
<p> para esto se ejecuta el comando php artisan make:migration add_nombredelacolumna_to_nombredelatabla_table      add_avatar_to_user_table 
para no tener errores tienes que darle el atributo de NULLABLE para que no tengas problemas con tus demas registros

### en caso quieras modificar los atributos de las columnas se realiza de la siguiente manera
ejecutar el comando composer require doctrine/dbal
seguidamente creo otra migracion php artisan make:migration cambiar_propiedades_to_nombredelatabla_table

$table->string('name',150)->change();//siempre se debe de usar el change segun documentacion