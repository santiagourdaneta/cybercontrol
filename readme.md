# CYBER CONTROL -DOCUMENTACIÓN
En este proyecto se diseñó e implementó un aplicación web en el lenguaje de programación PHP para el **manejo de los dias de acceso de los clientes** en un cyber cafe.

## Como usar

- Clonar el repositorio con git clone.
- Copiar el archivo .env.example a .env y editar credenciales de base de datos.
- Ejecutar composer install.
- Ejecutar php artisan key:generate.
- Ejecutar php artisan migrate --seed 
- Listo! Accede al URL del proyecto y haz login con las credenciales Correo: admin@admin.com Clave: password

## Funcionalidades:

 - Calcular los dias acceso de cada cliente de forma automatica.
 - Alerta por email cuando a un cliente le queden cinco dias o menos de acceso.


## Herramientas empleadas para el desarrollo de la aplicación:

- Lamp

LAMP es el acrónimo usado para describir un sistema de infraestructura de internet que usa las siguientes herramientas:

    Linux, el sistema operativo.
    Apache, el servidor web.
    MySQL/MariaDB, el gestor de bases de datos.
    Perl, PHP, o Python, los lenguajes de programación.

Sitio Web: https://es.wikipedia.org/wiki/LAMP


- Composer

Comoposer es una herramienta para administrar dependencias en PHP. Sirve para declarar las librerías del proyecto sin intervención del desarrollador. 

Sitio Web: https://getcomposer.org/


- Laravel

Laravel es un framework que permite implementar aplicaciones web en el lenguaje de programación PHP de forma elegante y simple, evitando el "código espagueti".

Sitio Web: https://laravel.com/


- Quick Admin Panel

Quick Admin Panel es una herramienta que un panel administrativo sobre el framework Laravel, lo que agiliza el proceso de desarrollo. 

Sitio Web: https://quickadminpanel.com/


- Phpmyadmin

phpMyAdmin es una herramienta escrita en PHP con la intención de manejar la administración de MySQL a través de un navegador web.

Sitio Web: http://www.phpmyadmin.net/


- Sublime Text

Sublime Text es un editor de código multiplataforma concebido para escribir sin distracciones de una manera bastante intuitiva.

Sitio Web: http://www.sublimetext.com/


- Lucid Chart

Lucidchart es un programa para crear diagramas de flujo en línea. Permite la creación de mapas conceptuales y otros tipos de diagramas.

Sitio Web: https://www.lucidchart.com/


## Modelo-Vista-Controlador

Las aplicaciones web desarrolladas en el framework Laravel siguen el patrón de diseño Modelo-Vista-Controlador en el que se implementan:

**Modelos:** para interactuar con la base de datos y recuperar la información de sus objetos.
**Vistas:** para renderizar las páginas de la aplicación.
**Controladores:** para manejar las solicitudes de los usuarios y recuperar datos a traves de los modelos.

Los modelos, vistas y controladores en Cyber Control son los descritos a continuación:

**Modelos:** Cliente - Usuario

**Vistas:**  

 - autenticación/login
 - autenticación/logout
 - inicio
 - cliente/listar
 - cliente/registrar
 - cliente/editar

**Controladores:**  

**Autenticación:** permite el login y logout del usuario a la aplicación.

**Clientes:** permite realizar las siguientes funciones sobre los clientes: 

 - listar
 - registrar
 - editar
 - eliminar
 - calcular dias de acceso 
 - enviar email

**Usuarios:** permite gestionar las funcionalidades de la aplicación una vez que el usuario haya hecho login. 


## Diagrama de funcionamiento de la aplicación

<img alt='diagrama' src='https://i.imgur.com/Pj65n16.png'>


## Interfaces

A continuación se presentan las interfaces gráficas de usuario diseñadas para demostrar la funcionalidad de la aplicación. 

**Interfaz de ingreso de usuario al sistema:**
<img alt='interfaz' src='https://camo.githubusercontent.com/6e56f04fd66eda9e858165b0f81513f1c621d7d1/68747470733a2f2f692e696d6775722e636f6d2f4d71535a524e4a2e706e67'>

**Interfaz gestionar clientes:**
<img alt='interfaz' src='https://i.imgur.com/rRsiEcV.png'>
