# Laravel Task Manager

Sistema de gestión de tareas desarrollado con Laravel, MySQL, Blade y Tailwind CSS.

---

## Descripción

Aplicación web para administrar tareas personales mediante autenticación de usuarios, operaciones CRUD, filtros, búsqueda y dashboard de métricas.

Cada usuario puede gestionar únicamente sus propias tareas, manteniendo separación de información mediante autenticación y validación de permisos.

---

## Tecnologías utilizadas

- Laravel
- PHP
- MySQL
- Blade
- Tailwind CSS
- Laravel Breeze
- Vite
- Git / GitHub

---

## Funcionalidades

- Registro e inicio de sesión
- Dashboard con métricas de tareas
- Crear tareas
- Listar tareas
- Editar tareas
- Eliminar tareas
- Filtro por estado
- Filtro por prioridad
- Búsqueda por título o descripción
- Badges visuales de estado y prioridad
- Validaciones en formularios
- Protección de rutas con autenticación

---

## Estructura principal

```text
laravel-task-manager/
├── app/
│   ├── Http/Controllers/
│   └── Models/
├── database/
│   └── migrations/
├── resources/
│   └── views/
├── routes/
│   └── web.php
├── public/
├── package.json
├── composer.json
└── README.md
```

---

## Requisitos

Antes de ejecutar el proyecto se debe tener instalado:

- PHP 8 o superior
- Composer
- MySQL
- Node.js
- npm
- XAMPP o servidor local compatible

---

## Instalación

Clonar el repositorio:

```bash
git clone https://github.com/jorge2360/laravel-task-manager.git
```

Ingresar al proyecto:

```bash
cd laravel-task-manager
```

Instalar dependencias de PHP:

```bash
composer install
```

Instalar dependencias frontend:

```bash
npm install
```

Copiar archivo de entorno:

```bash
copy .env.example .env
```

Generar clave de aplicación:

```bash
php artisan key:generate
```

Configurar la base de datos en `.env`:

```env
DB_DATABASE=laravel_task_manager
DB_USERNAME=root
DB_PASSWORD=
```

Ejecutar migraciones:

```bash
php artisan migrate
```

Compilar assets:

```bash
npm run dev
```

Ejecutar servidor Laravel:

```bash
php artisan serve
```

Abrir en navegador:

```text
http://127.0.0.1:8000
```

---

## Buenas prácticas implementadas

- Patrón MVC de Laravel
- Autenticación con Laravel Breeze
- Uso de migraciones
- Uso de Eloquent ORM
- Validaciones desde controlador
- Protección de rutas con middleware `auth`
- Separación de vistas Blade
- Diseño con Tailwind CSS
- Control de acceso por usuario autenticado

---

## Autor

Jorge García