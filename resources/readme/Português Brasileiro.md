# e-Escuela

<p align="center">
 <img width="100px" src="https://github.com/Gustavovaler/e_Escuela/blob/master/resources/readme/libro.svg" align="center" alt="e-Escuela" />
 <h2 align="center">e-Escuela</h2>
 <p align="center"><b>Projeto Web que proporciona uma melhoria na comunicação Aluno-Professor, com o objetivo de trocar conteúdos entre ambas as partes.</b></p>
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
    <a href="https://github.com/Gustavovaler/e_Escuela/blob/master/resources/readme/%20Portugu%C3%AAs%20Brasileiro.md">Português Brasileiro</a>
  </p>
</p>

## Problema atual

A comunicação por meios digitais entre professores e seus alunos apresenta uma série de dificuldades que foram destacadas nesta pandemia. O uso de meios de comunicação como WhatsApp, e-mail, etc. não possui um espaço centralizado e acessível para enviar trabalhos, fazer vistos e consultas de professores para alunos, etc. Tudo isso porque os referidos meios de comunicação não foram criados para este fim.


## Solução

Por este motivo, decidi iniciar este projeto web para fornecer uma plataforma centralizada onde os professores podem
carregue seus arquivos e os alunos os baixem de forma acessível e organizada. Facilitar o trabalho que professores e alunos realizam para atingir seus objetivos.

Atualmente a situação na Argentina rege a suspensão das aulas por tempo indeterminado.
Por isso, pretende-se que esta iniciativa seja de conhecimento público. Com o objetivo de resolver os problemas acima mencionados e que é uma ferramenta que se utiliza nas salas de aula praticamente todos os dias.


## Como implementar este repositório?

### Requisitos:

    Node 12.x ou mais alto
    Composer
    Algum serviço de BBDD com MySQL ou MariaDB

* ***Execute a partir do console:***

    ``` git clone https://github.com/gustavovaler/e_escuela.git ```

    ``` cd e_escuela ```

* **Posteriormente instale as dependências**
 
    ``` npm install ``` 

* **Instale as dependências do Laravel**

    ``` composer install ```

* **Configurar laravel**

     Na alteração do arquivo .env.example:
        
            DB_CONNECTION=mysql
            DB_HOST=127.0.0.1
            DB_PORT=3306
            DB_DATABASE=laravel
            DB_USERNAME=root
            DB_PASSWORD=
        
    Para os dados de seu gerenciador de banco de dados e credenciais.
    Quando terminar, salve e renomeie ".env"

    Nota: Se você usar MariaDB e tiver problemas de conexão, altere DB_PORT: 3307.

* **Migrações e seed**

    Executar dentro da pasta do projeto:

    ``` php artisan migrate ```

    Então (opcional):

    ``` php artisan db:seed ```

* **Execute o servidor de teste**

    ``` php artisan key:generate ```

    ``` php artisan serve ```
