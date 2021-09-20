## Projeto para predicão de qualidade do ar 

Nosso projeto usa dados de sensores de cidades que monitaram a qualidade do  ar e através de Redes Neurias (MLP) prevê qual a qualidade do ar para cidades que não possuem sensores de monitoramento de qualidade do ar. 



### Components
- docker
- jeroennoten/laravel-adminlte
- doctrine/dbal
- laravelcollective/html
- nesbot/carbon
- akaunting/money
- bensampo/laravel-enum
- maatwebsite/excel

### Installation
1. Run
```sh
$ sudo docker-compose up -d
```

2. Run
```sh
$ composer install

Important: Need create .env and verificad .yml
```

3. Enter the container
```sh
$ sudo docker exec -it seed-app bash
$ php artisan key:generate --show


4. Run Migrations
```sh
$ php artisan migrate --step --seed

```

5. Run
```sh
$ php artisan storage:link
```

### Autores
Edilson e Ronald


