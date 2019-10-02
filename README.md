
# Client List

Aplicativo web para cadastro de clients.
## Ferramentas
* PHP
* MySQL
## Frameworks PHP
* [Laravel](https://twig.symfony.com/)
## Instalação
1. Execute o comando do composer na pasta do projeto:
```sh
composer update
```
2. Crie um banco de dados no seu mysql, inclua as configurações de acesso no .ENV e execute o seguinte comando no seu terminal.
````sh
php artisan migrate
````
3. O comando a baixo vai popular a base com o usuário default:
<br/>
User: desenvolvimento@infotv.com.br
<br/>
Password: clientlist
````sh
php artisan db:seed --class=UsersTableSeeder
````
4. Para iniciar o servidor execute o comando abaixo:
````sh
php artisan serve
````
5. Se preferir utilize o dockerfile
````sh
docker image build -t clientlist .
docker container run -p 85:83 --name clientlist clientlist
````
