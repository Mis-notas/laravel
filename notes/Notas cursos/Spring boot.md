Qué es un **bean**? Un **bean** básicamente son módulos desarrollados en Spring estos se encargan de brindarnos toda la lógica que necesitamos para nuestra aplicación. Ejemplo: Si necesitamos referenciar que nuestra clase es un modelo hacemos uso de el bean @entity . Esto nos permite usar propiedades creadas para este tipo de modulo que nos agilizan nuestro desarrollo. Al hacer inversión de control nosotros al llamar esos beans lo que hacemos es referenciar módulos funcionales creados por spring. Spring boot nos facilita el fácil instanciamiento de estos a nuestra aplicación, haciendo todo por nosotros…

¿Qué es inyección de dependencias?

Patrón que utiliza inversión de control para utilizar las dependencias inicializadas con el contenedor Spring.

_**¿QUE ES UNA ANOTACION EN SPRING BOOT?**_

Una Anotación es una forma de añadir metadatos al código fuente Java que están disponibles para la aplicación en tiempo de ejecución o de compilación. Es una alternativa mas sencilla al uso de XML.

---

**_TIPOS DE ANOTACIONES_**

---

@Controller: Para indicar que esta será la clase que gestionara las peticiones del usuario por get, post, put, patch o delete.

---

@Service: Con esta notación especificamos que en esta clase se encontrara toda nuestra lógica de negocio, cálculos o llamadas a otras API externas.

---

@Repository: Se usa para las clases o interfaces que funcionaran con el acceso a la base de datos.

---

Si nuestra clase o interfaz no tiene una especificación clara como @Service, @Repository o @Controller, simplemente recurrimos a @Component y le indicamos que sencillamente es un componente.

---

Por otro lado, no es estrictamente necesario que cumplas con colocar una notación especifica, pero es una buena practica.

> **Anotaciones para indicar dependencias en Spring Boot**

-   @Component: anotación genérica, de ella nacen las siguientes (@Controller, @Service y @Repository). Se usa cuando tenemos una clase abstracta.
    
-   @Controller: la usamos en las clases que se encargarán tanto de recibir las peticiones HTTP por parte de la parte frontal como devolver las respuestas de esas peticiones procesadas al frontal.
    
-   @Service: la usamos en las clases que implementamos la lógica de negocio, es decir, dónde realizamos las validaciones.
    
-   @Repository: la usamos en interfaces (no clases), donde nos ocuparemos de la obtención y persistencia de datos.
    

> Por lo que, un resumen podría ser: se hace petición HTTP desde la parte frontal a nuestra aplicación, el @Controller correspondiente recibe esa petición y llama al @Service para que este realice las validaciones correspondientes y además, llame al @Repository si fuera necesario para persistir o recuperar datos, el @Service devuelve respuesta al @Controller y el @Controller devuelve respuesta al frontal.