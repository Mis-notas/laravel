
### Cliente y servidor

Toda nuestra aplicación esta guardada en un servidor, el cual entrega una copia de la misma a cada cliente que la solicite.

Además, el servidor también se encarga de responder cada solicitud del usuario.

### Dominio

El dominio es nuestra dirección en internet. Gracias a él cualquier computadora es capaz de encontrar páginas web.

### Servidor físico o VPS

Es la computadora que se encarga de guardar tu página web y mantener accesible 24/7. Se le conoce como servidor y siempre está conectado a internet.

A través de él podemos definir ciertas reglas de seguridad para nuestra página.

### Servidor web

Es un programa que corre dentro de nuestro servidor físico y se encarga de gestionar cualquier petición que llegue al mismo.

Esta petición es procesada por algún lenguaje de programación y al final devuelve una respuesta.

### Métodos HTTP

Los métodos HTTP son una forma de comunicación entre el cliente y el navegador. A través de una solicitud HTTP el cliente es capaz de pedirle al servidor que realice una acción

### GET

Este método permite solicitar información al servidor. Por ejemplo, podemos pedirle una lista de productos en el caso de que estemos haciendo un e-commerce o una lista de cursos si tenemos una pagina como Platzi.

### POST

Este método permite guardar información. Por ejemplo, podemos recabar datos del usuario desde un formulario y mandarlos a nuestro servidor para procesarlos.

podríamos guardarlos para armar una base de datos de usuarios o incluso un sistema de login.

### PUT/PATCH

Estos métodos permiten actualizar información ya guardada. Por ejemplo, podemos darle la oportunidad a un usuario de actualizar su correo electrónico o incluso cambiar su contraseña.

La diferencia es que PUT reemplaza toda la información existente y PATCH solo reemplaza lo necesario, es decir, “parcha” la información

### DELETE

Este método lo usamos para eliminar un recurso del servidor. Por ejemplo, podemos usarlo si deseamos eliminar un blogpost o un comentario.

Esto no significa que dejamos eliminarlo necesariamente dentro de nuestra base de datos, podemos hacer un “Soft delete”.
-   **GET -** Pedirle al servidor una solicitud
-   **POST -** Este método nos permite pedirle al servidor que nos guarde algo
-   **PUT -** Actualiza todo el registro
-   **Patch -** Reemplaza lo necesario, es decir “parcha” la información
-   **Delete -** Este método lo usamos para eliminar un recurso del servidor
-   y **soft-delete** - Es para enviar una solicitud al servidor, pero no lo elimina, sino que básicamente lo oculta.

Si por alguna razón no ejecuta y te sale el código de tu archivo PHP en pantalla, es probable que te falte instalar un paquete para que Apache pueda interpretarlo. Ejecuta lo siguiente en tu terminal:

```bash
sudo apt install libapache2-mod-php8.0
``` 

Permisos

```bash
sudo chmod 777 html
```
