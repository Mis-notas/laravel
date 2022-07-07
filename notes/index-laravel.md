---
aliases: [index, back]
---
# Tabla de contenido
- [[1. Instalación - Linux]]
	- [[1.1 Bootstrappers]]
- [[2. Model]]
	- [[2.1 Relaciones]]
- [[3. Migraciones]]
- [[4. Factory y Seeders]]
- [[5. Vistas]]
- [[6. Controlador]]
- [[7. Rutas]]
- [[8. Variables de sesión]]
- [[9. Despliegue]]
	- [[9.1 Heroku]]
	- [[9.2 Linux]]
- [[10. Generar certificado SSL]]

Próximo
## Sistema de autenticación de laravel - Breeze

Para la instalación se ejecuta este comando
~~~TERM
composer require laravel/breeze --dev
~~~

~~~TERM
php artisan breeze:install
~~~

~~~TERM
npm install
~~~

~~~TERM
npm run dev
~~~

~~~TERM
php artisan migrate
~~~

Si sale un error de tipo:  Vite manifest not found 
En el directorio de package.json
  "scripts": {
- - "dev": "npm run development",
- - "development": "mix",
- -  "watch": "mix watch",
- - "watch-poll": "mix watch -- --watch-options-poll=1000",
- - "hot": "mix watch --hot",
- - "prod": "npm run production",
- - "production": "mix --production 
- +" dev": "vite",
+ + "build": "vite build"
  }

En el archivo de .env se van a reemplazar las lineas de MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"
Por las lineas: 
VITE_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
VITE_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"

## Correo electrónico

Para el uso del correo electronico y su verifiación se utiliza el servicio de https://mailtrap.io -> Seleccionando la integración Laravel y configurandolo en las variables de entornos necesarias, luego en el modelo de usuario se debe agregar implements MustVerifyEmail , par que valide el correo electronico.

~~~PHP
class User extends Authenticatable implements MustVerifyEmail
~~~
finalmente en la ruta de Dashboard (La que genera Breeze ) se agrega en su middelware verified (Es la encargada de realizar la validacion que se implemento en el usuario. (En kernel.php de http se puede evidenciar esto))
~~~PHP
Route::get('/dashboard', function () {  
    return view('dashboard');  
})->middleware(['auth', 'verified'])->name('dashboard');
~~~
