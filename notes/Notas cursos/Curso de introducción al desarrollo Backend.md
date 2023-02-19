
Clientes: Navegadores (Frontend), movil, IOT (internet of Tics).

![[Pasted image 20230206221003.png]]

- APIs, Application programing interface.

-   Los usuarios se conectan través del cliente de un dispositivo (ya sea un navegador, dispositivo móvil, etc…).
-   Se realiza una solicitud en el frontend a través del cliente.
-   En el listado de solicitudes, cada posible solicitud es conocida como un endpoint.
-   La API (application programming interface) es la encargada de recibir la solicitud y hacerla llegar al backend, a lo que el frontend espera una respuesta.
-   El backend recibe la solicitud y dispara una respuesta con el endpoint correspondiente.
-   Las bases de datos porporcionan la información que requiere el backend para satisfacer la solicitud hecha por el cliente.
-   Las librerías son herramientas (piezas de código) pre-fabricadas por otros desarrolladores, que pueden ser importadas al proyecto para evitar la necesidad de crear código ya existente (no hay que reinventar la rueda).
-   Los framework son un conjunto de librerías que en conjunto conforman un marco de trabajo utilizado para responder a una necesidad específica existente en un proyecto.

https://www.youtube.com/watch?v=yC6wR3szGz8

HTTP 

![[Pasted image 20230206222330.png]]
![[Pasted image 20230206222325.png]]

https://http.cat/

https://fakeapi.platzi.com/en/rest/introduction

APIs
Las APIs nos permiten, a través de código, la comunicación entre sistemas.  
Como backend developers, nos interesan las APIs que son servicio web y corren en el protocolo HTTP.  
La API utiliza una lista de rutas conocidas como endpoints, que provee las respuestas a las solicitudes del cliente.  
La solicitud debe ser empaquetada y retornada, y existen distintos tipos de empaquetado:  
JSON.  
XML
-   API REST es un estandar para desarrollar APIs que funcionan en el protocolo HTTP .
-   A través de los endpoints se le pide información al dominio, por lo general, se nos devuelve la información empaquetada en un JSON.
-   CRUD es el índice de unas plabras clave, y en el protocolo HTTP tenemos métodos para llevarlas a cabo:
    -   Create (crear) → POST.
    -   Read (leer) → GET.
    -   Update (actualizar) → PUT / PATCH.
    -   Delete (eliminar) → DELETE.
-   Put envía la totalidad de los datos, mientras que patch envía solo los datos destinados a actualizarse

![[Pasted image 20230206224004.png]]


Hay muchas, Digital Ocean, AWS, Google… Yo te quiero recomendar [Railway](https://railway.app/). Incluso, apenas ingresas a la plataforma, lo primero que te muestra es un _Bring your code,  
we’ll handle the rest._.  
Pero tomalo con calma, si apenas estás iniciando en el backend, no te preocupes tanto por eso, pero si algún día ves en una clase que el profesor va a mostrar como se hace el despliegue en Heroku, considera usar Railway

IaaS Infraescructura como servicio 
PaaS Plataforma como sevicio
SaaS software como servicio

slack == SaaS  
firebase == PaaS  
digital ocean == IaaS


### Escalamiento vertical.

Es cuando tenemos un servidor y eventualmente el servidor empieza a colapsar, una forma de solucionar el problema es incrementar:

-   **CPU**
    
-   **RAM**
    
-   **Disk**
    
-   **Problemas:**
    
    -   Costos
    -   En un black friday tu puedes escalar la aplicacion, pero algunos provedores no permiten desescalar.
    -   Disponibilidad -> Solucion, **Escalamiento Horizontal**

### Escalamiento horizontal

Soluciona el problema de la disponibilidad. Se tienen varias instancias del mismo servidor.  
Como se tienen distintos servidores ahora se necesita de un **LOAD BALANCER**

**LOAD BALANCER** -> Tiene conocimiento de nuestras instancias/servidores (al conjunto de servidores se denomina **Clouster**). Si un nodo(instancia) se cae, el load balancer se encarga de desviarla. Distribuye las peticiones.

-   Si tenemos la base de datos local en cada servidor va haber un problema dado que no se tienen sincronizados los datos de las distintas bases de datos de los servidores. **SOLUCION** Gestionar la base de datos fuera de estos servidores. Quizas como un servidor aparte que sirva como DB.
![[Pasted image 20230212150620.png]]


-   Soluciones a desincronización de base de datos.
    -   Aislar base de datos a un servidor en particular. Se le hace escalamiento vertical solo a la base de datos para evitar un cuello de botella.
    -   Se puede hacer escalamiento horizontal a la base de datos con su propio load balancer para solventar el problema de la disponibilidad.
        -   Cada vez que se realice escritura en una de las bases de datos, se realiza una sincronización para que el cambio ocurra en todas las bases de datos. Esto es conocido como replicación.
-   Normalmente el backend developer no se encarga de la parte de replicación y gestión de bases de datos, sino en la capa de los servidores y el escalamiento horizontal.
https://www.cloudflare.com/learning/ddos/memcached-ddos-attack/
![[Pasted image 20230212153413.png]]

