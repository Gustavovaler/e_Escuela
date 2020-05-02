# e-Escuela

## Proyecto para web de auda en la comunicaión alumno-profesor par intercambio de contenido .

#### Es de publico conocimiento que en Argentina rige la suspensión de clases por tiempo ideterminado. 

### Debido a ello decidí realizar este proyecto web para facilitar una plataforma donde los docentes puedan 
### subir sus archivos y los alumn@s descargarlos de forma intuitiva y organizada, sin tener que recurrir
### a otros medios como e-mails, whtsapp y otros que no fueron diseñados para tal fin y que hacen de esta 
### una tarea deficil de llevar a cabo.

## Para clonar este repo y echarlo a andar en local

### Requerimientos

    Node 12.x o superior
    Composer
    Algún servicio de BBDD con mysql o MariaDB

` git clone https://github.com/gustavovaler/e_escuela`

### Luego de eso instalar las dependencias
 
 ` npm install` 

### Instalar las dependencias de Laravel

` composer install`

### Configurar laravel
     En el archivo .env.example  cambiar:
        
            DB_CONNECTION=mysql
            DB_HOST=127.0.0.1
            DB_PORT=3306
            DB_DATABASE=laravel
            DB_USERNAME=root
            DB_PASSWORD=
        
    Por los datos de tu gestor de db y credenciales.
    Una vez echo guardar y renombrar  " .env "

    Nota: Si usas MariaDB y tienes problemas de conexion cambia DB_PORT: 3307

### Migraciones y seed
    Desde la dentro de la carpeta del proyecto:

        `php artisan migrate`

    Luego (Opcional):

        ` php artisan db:seed`

### Correr el servidor de pruebas

    `php artisan serve`









