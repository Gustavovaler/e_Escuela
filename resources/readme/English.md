# e-Escuela

<p align="center">
 <img width="100px" src="https://github.com/Gustavovaler/e_Escuela/blob/master/resources/readme/libro.svg" align="center" alt="e-Escuela" />
 <h2 align="center">e-Escuela</h2>
 <p align="center"><b>Web project that provides an improvement in the Student-Teacher communication, with the aim of exchanging content.</b></p>
</p>
  <p align="center">
    <a href="https://github.com/anuraghazra/github-readme-stats/actions">
      <img alt="Tests Passing" src="https://github.com/anuraghazra/github-readme-stats/workflows/Test/badge.svg" />
    </a>
        <a href="https://github.com/Gustavovaler/e_Escuela/issues">
      <img alt="Issues" src="https://img.shields.io/github/issues/Gustavovaler/e_Escuela?color=0088ff" />
    </a>
    <a href="https://github.com/Gustavovaler/e_Escuela/pulls">
      <img alt="GitHub pull requests" src="https://img.shields.io/github/issues-pr/Gustavovaler/e_Escuela?color=0088ff" />
    </a>
    <br />
    <p align="center">
    <a href="https://github.com/Gustavovaler/e_Escuela/blob/master/README.md">Español</a>
    ·
    <a href="https://github.com/Gustavovaler/e_Escuela/blob/master/resources/readme/English.md">English</a>
    ·
    <a href="https://github.com/Gustavovaler/e_Escuela/blob/master/resources/readme/Portugu%C3%AAs%20Brasileiro.md">Português Brasileiro</a>
  </p>
</p>

## What is the problem?

Communication by digital platforms between teachers and their students presents a series of difficulties that have been highlighted in this pandemic. Using social platforms such as WhatsApp, e-mail, etc. does not have a centralized and accessible space to send assignments, make reviews and inquiries from teachers to students, etc. All this because the aforementioned media were not created for this purpose.


## Solución

For this reason, I decided to start this web project to provide a centralized platform where teachers can
upload your files and the students download them in an accessible and organized way. Facilitating the work that both teachers and their students do to achieve their objectives. 

Currently the situation in Argentina governs the suspension of classes for an indefinite period.
That is why it is sought that this initiative is public knowledge. With the aim of solving the aforementioned problems and that it is a tool that is used in the classrooms virtually every day.


## How to implement this repository?

### Requirements:

    Node 12.x or superior
    Composer
    Some service like BBDD with MySQL or MariaDB

* ***Run from terminal:***

    ``` git clone https://github.com/gustavovaler/e_escuela.git ```

    ``` cd e_escuela ```

* **Install the dependencies**
 
    ``` npm install ``` 

* **Install laravel dependencies**

    ``` composer install ```

* **Configure laravel**

     In the file .env.example  change:
        
            DB_CONNECTION=mysql
            DB_HOST=127.0.0.1
            DB_PORT=3306
            DB_DATABASE=laravel
            DB_USERNAME=root
            DB_PASSWORD=
        
    For the data of your db manager and credentials.
    Once done save and rename  " .env "

    Note: If you use MariaDB and have some problems with connection. You shoulde change to DB_PORT: 3307 .

* **Migrations y seed**

    Doing inside project file:

    ``` php artisan migrate ```

    Then (Optional):

    ``` php artisan db:seed ```

* **Run Test Server**

    ``` php artisan key:generate ```

    ``` php artisan serve ```
