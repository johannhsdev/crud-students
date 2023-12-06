# Ejercicio CRUD de Estudiantes (Proyecto Laravel 10)👨‍🎓📖

## Requerimientos mínimos 📋

El marco de trabajo Laravel tiene algunos requerimientos de sistema. Debes asegurarte de que tu servidor web o local tenga la siguiente versión mínima de PHP y extensiones:

-   PHP >= 8.1
-   Extensión PHP Ctype
-   Extensión PHP cURL
-   Extensión PHP DOM
-   Extensión PHP Fileinfo
-   Extensión PHP Filter
-   Extensión PHP Hash
-   Extensión PHP Mbstring
-   Extensión PHP OpenSSL
-   Extensión PHP PCRE
-   Extensión PHP PDO
-   Extensión PHP Session
-   Extensión PHP Tokenizer
-   Extensión PHP XML

## Pasos para la instalación 🔧

1. Primero, abre la terminal GIT BASH y ejecuta el comando `git clone https://github.com/johannht2/crud-students.git` para contar con este proyecto en tu máquina local.
2. Ahora, ejecuta el siguiente comando para compilar los activos: `composer install, npm install && npm run dev`
3. Finalmente, necesitamos ejecutar el comando de migración para crear la tabla de la base de datos: `php artisan migrate`

El proyecto cuenta con la tabla [students]

## Configura el nombre de la base de datos en tu archivo .env 🔑

Por último, deberas declarar en el archivo .env el nombre de tu base de datos actualmente se encuentra definida como: [DB_DATABASE=crud]
