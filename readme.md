CyberControl

Sistema desarrollado usando el framework Laravel 5.5 y la herramienta QuickAdminPanel. 

## Capturas

<img src='https://i.imgur.com/MqSZRNJ.png' alt='capturas'>
<img src='https://i.imgur.com/PZiLy1d.png' alt='capturas'>

## Funcionalidades

- Login de Administrador - correo y clave(encryptada con bcrypt)
- Gestion de Clientes - username, dias premium, fecha de registro
- Resta de dias premium de forma automatica a cada cliente
- Alerta por email a cuando a un usuario le quedan menos de cinco dias premium


## Como usar

- Clonar el repositorio con git clone.
- Copiar el archivo .env.example a .env y editar credenciales de base de datos.
- Ejecutar composer install.
- Ejecutar php artisan key:generate.
- Ejecutar php artisan migrate --seed 
- Listo! Accede al URL del proyecto y haz login con las credenciales Correo: admin@admin.com Clave: password

## Enlaces: 

- Laravel: https://github.com/laravel/laravel 
- QuickAdminPanel: https://quickadminpanel.com/ 



