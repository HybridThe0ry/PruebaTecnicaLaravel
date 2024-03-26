# Guía de Configuración para Prueba Técnica Laravel

Este repositorio contiene una aplicación Laravel para una prueba técnica. Sigue los siguientes pasos para configurar y ejecutar la aplicación localmente.

## Pasos de Configuración

1. **Clonar el Repositorio:**
git clone https://github.com/HybridThe0ry/PruebaTecnicaLaravel.git

2. **Instalar Dependencias:**
composer update

3. **Crear Archivo .env:**
cp .env.example .env

4. **Generar App Key:**
php artisan key:generate

5. **Levantar MySQL para Base de Datos:**
Utiliza XAMPP u otro servidor MySQL. También puedes usar SQLite si lo prefieres.

6. **Configurar Base de Datos en .env:**
Ajusta las variables de entorno en el archivo .env para configurar la conexión a tu base de datos.

7. **Ejecutar Migraciones:**
php artisan migrate

8. **Ejecutar Seeders:**
php artisan db:seed --class=DatabaseSeeder

9. **Levantar Proyecto:**
php artisan serve

## Métodos POST

- **http://localhost:8000/api/ficha**
- **http://localhost:8000/api/beneficio**
- **http://localhost:8000/api/montos-maximos**

## Método GET

- **http://localhost:8000/api/misbeneficios/{RUT}**

Sustituye `{RUT}` con el RUT que desees consultar.

¡Listo! Ahora puedes utilizar la aplicación localmente para probar sus funcionalidades.
