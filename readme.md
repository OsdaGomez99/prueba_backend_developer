# Prueba-Backend-Developer
Prueba de desarrollo en Laravel 5.8, para optar por la vacante de Desarrollador Web para Norte Digital

## Requisitos Previos
Asegúrate de tener instalados los siguientes componentes antes de comenzar:

- PHP >= versión 7.1.3
- Composer >= 2.2.0
- Laravel >= 8.5

## Instalación
Sigue estos pasos para configurar el proyecto en tu entorno local:

Clona este repositorio en tu máquina local:

```bash
git clone https://github.com/OsdaGomez99/prueba_backend_developer.git
```

Navega hasta la carpeta del proyecto:

```bash
cd prueba_backend_developer
```

Instala las dependencias de Laravel:

```bash
composer install
```

Crea un archivo .env basado en el archivo .env.example y configura las variables de entorno necesarias, como la conexión a la base de datos.

Genera una clave de aplicación única:

```bash
php artisan key:generate
```

Migra las tablas de la base de datos y inserta los datos de los seeders:

```bash
php artisan migrate:fresh --seed
```

Inicia el servidor de desarrollo de Laravel:

```bash
php artisan serve
```

## URL de Documentación en Swagger

(http://127.0.0.1:8000/api/documentation)

## Créditos
Realizado por: Osdalys Gómez

Medellin, Colombia

Marzo 2024

## Contacto
- Correo Electrónico: osdalys.gomez99@hotmail.com
- Teléfono: +573002158524
- GitHub: **https://github.com/OsdaGomez99**
- Linkedin: **https://www.linkedin.com/in/osdalys-gomez**
