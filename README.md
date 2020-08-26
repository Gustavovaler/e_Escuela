# e-Escuela

## Proyecto Web que proporciona una mejora en la comunicación Alumno-Profesor, con el objetivo de intercambio de contenido entre ambas partes.

## Problemática actual

La comunicación por medios digitales entre los maestros y sus alumn@s presentan una serie de dificultades que se han puesto en evidencia en esta pandemia. Utilizar medios de comunicación como WhatsApp, e-mail, etc hace que no se tenga un espacio centralizado y accesible para enviar tareas, hacer visados y consultas de parte de los maestros hacia los alumnos, etc. Todo esto debido que lo medios mencionados no fueron creados para tal próposito.


## Solución

Por esta razón, decidí comenzar a realizar este proyecto web para facilitar una plataforma centralizada donde los docentes puedan 
subir sus archivos y los alumn@s descargarlos de forma accesible, y organizada. Facilitando el trabajo que realizan tanto los maestros como sus alumn@s para que alcacen sus objetivos. 

Actualmente la situación en Argentina se rige la suspensión de clases por tiempo indeterminado. 
Por eso se busca que esta iniciativa sea de conocimiento público. Con el objetivo de solucinar los problemas mencionados y que sea una herramienta que se utilice en los salones de clases virtualmente día a día. 


## ¿Cómo realizar la implementación de este repositorio?

### Requerimientos:

    Node 12.x o superior
    Composer
    Algún servicio de BBDD con MySQL o MariaDB

* ***Ejecutar desde la consola:***

    ``` git clone https://github.com/gustavovaler/e_escuela.git ```

    ``` cd e_escuela ```

* **Posteriormente instalar las dependencias**
 
    ``` npm install ``` 

* **Instalar las dependencias de Laravel**

    ``` composer install ```

* **Configurar laravel**

     En el archivo .env.example  cambiar:
        
            DB_CONNECTION=mysql
            DB_HOST=127.0.0.1
            DB_PORT=3306
            DB_DATABASE=laravel
            DB_USERNAME=root
            DB_PASSWORD=
        
    Por los datos de tu gestor de db y credenciales.
    Una vez echo guardar y renombrar  " .env "

    Nota: Si usas MariaDB y tienes problemas de conexión cambia DB_PORT: 3307 .

* **Migraciones y seed**

    Realizar dentro de la carpeta del proyecto:

    ``` php artisan migrate ```

    Luego (Opcional):

    ``` php artisan db:seed ```

* **Correr el servidor de pruebas**

    ``` php artisan key:generate ```

    ``` php artisan serve ```
