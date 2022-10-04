---
aliases: [index, back]
---
mysql -u 'root' -p
mysql otf2 < OTF_JUN_07.sql -p -u root

Espaciados de Bootstrap
https://bootstrapshuffle.com/es/classes/spacing/mr-1+%25_F+mr-*-%23 

## Debugar 
composer require barryvdh/laravel-debugbar --dev
composer require barryvdh/laravel-debugbar:~3.2 --dev

```php
composer remove vendor/laravel-debugbar
```
---
## Versionamiento php 

sudo update-alternatives --set php /usr/bin/php7.4

sudo update-alternatives --set php /usr/bin/php8.1

---
Saber que queries se hicieron laravel 
https://hdtuto.com/article/laravel-8-eloquent-get-query-log-example 

Sub query
https://stackoverflow.com/questions/27064678/how-to-create-a-subquery-using-laravel-eloquent
Condicional when 
https://es.stackoverflow.com/questions/190910/realizar-consulta-sobre-bd-con-condicional
https://www.itsolutionstuff.com/post/laravel-eloquent-when-condition-exampleexample.html

Formatear fechas
https://stackoverflow.com/questions/2487921/convert-a-date-format-in-php
https://stackoverflow.com/questions/1995562/now-function-in-php


		php8.1


## Exercism
Levantar servidor php
php -S localhost:4000
```
composer require --dev phpunit/phpunit
```

```plain
exercism submit
```

git reset --hard origin/staging

MySql 5.7

https://noviello.it/es/como-instalar-mysql-5-7-en-ubuntu-20-04-lts/ 

usar floatval en una variable para obtener el valor flotante de esa variable
~~~PHP
<?php   
$var = '122.34343The';   
$float_value_of_var = floatval($var);   
echo $float_value_of_var; // 122.34343   ?>
~~~


---
Catalogo de productos actualizado.
1. Realizar la consulta
2. Realizar la comparación de campos entre el retorno de la consulta y el inserte del join
3. Realizar la construcción de los querys basandome en la comparación 
4. Retornar los querys en conjunto con la consulta creo que debo generar un array extra
5. test
---
Cambios en el redondeo de las ordenes
1. Realizar proceso de generación de orden.
2. Encontrar endpoints correspondientes y revisar el posible redondeo que se realiza.
3. Validar matemáticamente el redondeo y el ajuste del mismo.
4. 

~~~SQL
update products set description = null, short_description = null where description = 'null' or short_description = 'null';
~~~


```
$contains = Arr::has($array, 'product.name');
```
```
$exists = Arr::exists($array, 'name');
```

Un select bien hecho se encuentra en categoryController@get, usado en category profit

Comando para mostrar procesos del sistema
ps aux

