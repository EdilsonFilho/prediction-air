## Using PHP-ML for air quality prediction.

Our project uses sensor data from cities [1] that monitor air quality and through Neural Networks (MLP) [2]  predicts the air quality for cities that do not have air quality monitoring sensors.



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
```

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

References

[1] https://aqicn.org/here/

[2]  https://php-ml.readthedocs.io/en/0.6.1/machine-learning/neural-network/multilayer-perceptron-classifier/



