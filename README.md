<strong>Hola,</strong>

Directorio_api es un CRUD que funciona a partir de servicio API REST y consta de una UI muy basica, a continucion les mostrare como descargarlo y como funciona hasta el moneto

<span>Para ejecutar el proyecto relizamos los siguientes pasos</span>
<lu>
    <li>1. Clonamos el el respositorio directorio_api</li>
        <small>git clone https://github.com/Yahiko-Jeyotha/directorio_api.git</small>
    <li>2. Instala Composer en tu proyecto</li>
        <small>* composer install</small>
    <li>3. Crea la DB Y configura el archivo <strong>.env</strong></li>
    <li>4. Genera la APP_KEY</li>
        <small>* php artisan key:generate</small>
    <li>5. Ejecuta las migraciones</li>
        <small>* php artisan migrate<small>
    <li>6. Ejecuta las semillas</li>
        <small>* php db:seed<small>
<lu>
    
<p>EL proyecto consta de dos DATAS para la gestion de informacón: Directoios y Tipo Contacto
   A un directorio se le puede asignar un tipo de contacto, Ejemplo: Directorio: Pedro | Tipo de contato: Hermano</p>
 
Ahora voy a demostar el funcionamiento de los endPoints
<strong>Cabe afirmar que las pruebas son realizadas con un servidor local</strong>
        

Tipo contacto Contiene las siguientes validadiones y se realiza el correspondiente consumo de API
   
    - No se puede crear un tipo contacto con una misma descripcion ya gurdada
    - No se puede eliminar un tipo contacto que este como FK en la data Directorio
    - Debe tener entre 5 y 30 caracteres 
    
POST:  http://127.0.0.1:8000/api/tipos
    
![Captura de pantalla de 2021-06-29 18-05-03](https://user-images.githubusercontent.com/50774406/120562951-18664680-c3cd-11eb-8983-ee4c8baf468b.png)

    
GET: http://127.0.0.1:8000/api/tipos
 
![Captura de pantalla de 2021-06-29 17-12-49](https://user-images.githubusercontent.com/50774406/120558982-de457680-c3c5-11eb-847b-38f7440c9274.png)
    
GET http://127.0.0.1:8000/api/tipos/{id_tipo}
    
![Captura de pantalla de 2021-06-29 17-14-51](https://user-images.githubusercontent.com/50774406/120559127-164cb980-c3c6-11eb-93d4-d39b83bf7475.png)
    
PUT http://127.0.0.1:8000/api/tipos/{id_tipo}

![Captura de pantalla de 2021-06-29 17-16-43](https://user-images.githubusercontent.com/50774406/120559263-5875fb00-c3c6-11eb-83c7-12d7c67ae2b7.png)

DELETE http://127.0.0.1:8000/api/tipos/{id_tipo}
    
![Captura de pantalla de 2021-06-29 17-17-35](https://user-images.githubusercontent.com/50774406/120559321-75aac980-c3c6-11eb-84d5-7da8804600e6.png)
    
    
Directorio Contiene las siguientes validadiones y se realiza el correspondiente consumo de API
    
    - Nombre: Compo obligatorio, entre 2 y 100 caracteres, no se puede repetir un nombre
    - Telefono: Puede ser Null, Dato entero entre 6 y 10 carateres, no se puede repetir un telefono
    - email: Puede ser Null, entre 2 y 100 carateres, tipo email, no se puede repetir un email
    - Direccion: Puede ser null. entre 5 y 100 carateres

POST:  http://127.0.0.1:8000/api/directorios

    
![Captura de pantalla de 2021-06-29 17-36-06](https://user-images.githubusercontent.com/50774406/120560885-3336bc00-c3c9-11eb-94e7-4f8e9b7428bd.png)
    
    
 
GET: http://127.0.0.1:8000/api/directorios
    
 
![Captura de pantalla de 2021-06-29 17-38-32](https://user-images.githubusercontent.com/50774406/120561239-c7088800-c3c9-11eb-9d38-d68bf6eda3f1.png)

    
    
GET: http://127.0.0.1:8000/api/directorios/{id_directorio}
 
![Captura de pantalla de 2021-06-29 17-39-18](https://user-images.githubusercontent.com/50774406/120561252-cbcd3c00-c3c9-11eb-9f83-ad41a0d363bb.png)
    
PUT: http://127.0.0.1:8000/api/directorios/{id_directorio}
    
![Captura de pantalla de 2021-06-29 17-46-52](https://user-images.githubusercontent.com/50774406/120561656-8e1ce300-c3ca-11eb-8702-004dd4ca997e.png)
    
DELETE http://127.0.0.1:8000/api/directorios/{id_directorio}

![Captura de pantalla de 2021-06-29 17-48-36](https://user-images.githubusercontent.com/50774406/120561773-ccb29d80-c3ca-11eb-840e-97a9ae2563d8.png)


 ADICIONA:
    
 - Gestion de la data tipo contacto a partir de Porcesos almacenados.
 - UI basica.
 - Fabricas y migracions
 - Validacion de formulario
    
Directorios:
    
 ![Captura de pantalla de 2021-06-29 17-57-16](https://user-images.githubusercontent.com/50774406/120562440-0506ab80-c3cc-11eb-940e-7b6ab8387658.png)
    
    
 ![Captura de pantalla de 2021-06-29 18-02-11](https://user-images.githubusercontent.com/50774406/120562785-b86fa000-c3cc-11eb-886a-181cf510795f.png)

    

Tipo Contacto:

![Captura de pantalla de 2021-06-29 17-59-41](https://user-images.githubusercontent.com/50774406/120562639-69296f80-c3cc-11eb-96d9-c4ed0e872cbf.png)
    
    
![Captura de pantalla de 2021-06-29 18-03-14](https://user-images.githubusercontent.com/50774406/120562842-d89f5f00-c3cc-11eb-90c9-82d1453463b0.png)



    

