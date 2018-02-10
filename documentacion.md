# CYBER CONTROL -DOCUMENTACIÓN
En este proyecto se diseñó e implementó un aplicación web en el lenguaje de programación PHP para el **manejo de los dias de acceso de los clientes** en un cyber cafe.

## Funcionalidades:

 - Calcular los dias acceso de cada cliente de forma automatica.
 - Alerta por email cuando a un cliente le queden cinco dias o menos de acceso.

## Laravel

Para la implementación de la aplicación se trabajó directamente con Laravel, un framework que permite implementar aplicaciones web en el lenguaje de programación PHP de forma elegante y simple, evitando el "código espagueti". 

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

## Interfaces

A continuación se presentan las interfaces gráficas de usuario diseñadas para demostrar la funcionalidad de la aplicación. 

**Interfaz de ingreso de usuario al sistema:**
<img alt='interfaz' src='https://camo.githubusercontent.com/6e56f04fd66eda9e858165b0f81513f1c621d7d1/68747470733a2f2f692e696d6775722e636f6d2f4d71535a524e4a2e706e67'>

**Interfaz gestionar clientes:**
<img alt='interfaz' src='https://i.imgur.com/rRsiEcV.png'>
