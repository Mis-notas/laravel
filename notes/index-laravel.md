
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

SET SESSION sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));


~~~PHP
            // Aqui debe ir un if de new version
            /*
                if($request->input('new_version')){
                    if ($request->has('service_charge_active') || $request->has('discount') || $request->has('items')) {
                        if ($order->order_type_fee > 0){
                            $orderType = $order->venue->order_types()->wherePivot('order_type_id', $order->order_type_id)->first();
                            if ($orderType->pivot->type == '%') {
                                $order->update([
                                    'order_type_fee' => round((($order->getRawOriginal('subtotal') - $order->discount_amount??0)) * $orderType->pivot->fee, 2)
                                ]);
                            }
                        }
                    }
                }
             */
            if ($request->has('service_charge_active') || $request->has('discount') || $request->has('items')) {
                if ($order->order_type_fee > 0){
                    $orderType = $order->venue->order_types()->wherePivot('order_type_id', $order->order_type_id)->first();
                    if ($orderType->pivot->type == '%') {
                        $order->update([
                            'order_type_fee' => round((($order->getRawOriginal('subtotal') - $order->discount_amount??0)) * $orderType->pivot->fee, 2)
                        ]);
                    }
                }
            }

~~~

https://docs.nestjs.com/pipes#built-in-pipes 

Manejar parametros en endpoints 
@Get('products/:product_id')  
getProduct(@Param('product_id') product_id: string) {  
  return `product ${product_id}`;  
}


nest g controller controller/categories --flat
`nest g s services/products --flat`

exceptions 
https://docs.nestjs.com/exception-filters#built-in-http-exceptions

pipes -> validator
https://docs.nestjs.com/pipes#built-in-pipes

Crear pipe
nest g pipe common/parse-int  

isNaN(val) consultar
DTOS es para que todo para la experencia de desarrollo, no valida el request.


Validator 
```
npm i class-validator class-transformer 
```

import { IsString, IsNumber, IsUrl, IsNotEmpty } from 'class-validator';  
  
export class CreateProductDto {  
  @IsString()  
  @IsNotEmpty()  
  readonly name: string;  
  @IsString()  
  @IsNotEmpty()  
  readonly description: string;  
  @IsNumber()  
  @IsNotEmpty()  
  readonly price: number;  
  @IsNumber()  
  @IsNotEmpty()  
  readonly stock: number;  
  @IsUrl()  
  @IsNotEmpty()  
  readonly image: string;  
}  

Para activar el uso de validator en la aplicación, se coloca en main.ts 
1. La importación 
   import { ValidationPipe } from '@nestjs/common'; 
2. Que use el pipe de forma global
   app.useGlobalPipes(new ValidationPipe());

```
@nestjs/mapped-types
```
Reutilizador de codigo


app.useGlobalPipes(  
  new ValidationPipe({  
    whitelist: true,  
  }),  
);

whitelist: Elimina los datos extras que se envien en el body al api
forbidNonWhitelisted: Avisa los datos extras

Tipo: insert, update, delete



No se puede inyectar servicios en circulo, es decir el servicio a al ser inyectado en el servicio b, el servicio b no puede estar en el a.



CREATE USER 'otfadmin'@'%' IDENTIFIED BY '%#D3v3lop+2023*$$';
GRANT ALL PRIVILEGES ON *.* TO 'otfadmin' WITH GRANT OPTION;







