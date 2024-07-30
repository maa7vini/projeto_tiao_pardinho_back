## Requisitos 

* PHP 8.2 ou superior 
* MySQL 8 ou superior 
* Composer 

## Como rodar o projeto baixado 

Duplicar o arquivo ".env.example" e renomear para ".env". <br>
Alterar no arquvio .env as credenciais do banco de dados <br>

Instalar as depedências do PHP 
```
composer install
```

Gerar a chave no arquivo .env
```
php artisan key:generate
```


Executar as migration 
```
php artisan migrate 
```


Executar as seed 
```
php artisan db:seed
```

Iniciar o projeto criado com Laravel
```
php artisan serve
```

Para acessar a API, é recomendado utilizar o Insomnia para simular 
requisições à API.
```
http://127.0.0.1:8000/api/faixas
http://127.0.0.1:8000/api/albums
```


## Sequencia para criar o projeto 

Criar o projeto com Laravel 
```
composer create-project laravel/laravel .
```

Alterar no arquivo .env as credenciais do banco de dados <br>

Criar o arquivo de rotas para a API 
```
php artisan install:api
```
