# 🧩 Sistema de Gestión de Snippets — Symfony 7

Este es un sistema web desarrollado con **Symfony 7** que permite a los usuarios gestionar **snippets** (fragmentos de código). Los usuarios pueden registrarse, iniciar sesión, crear, editar, comentar y hacer forks de snippets de otros usuarios.

---

## ✨ Funcionalidades

- Registro e inicio de sesión de usuarios
- Listado público de snippets
- Ver detalles de cada snippet (código, autor y comentarios)
- Crear y editar snippets (solo el autor puede editar)
- Comentar snippets (usuarios autenticados)
- Hacer **fork** de un snippet existente (crea una copia editable)

---

## ⚙️ Requisitos

- PHP >= 8.2
- Composer
- Symfony CLI (opcional, pero recomendado)
- SQLite (como base de datos predeterminada)

---

## 🚀 Instalación

1. Clona el repositorio:

```bash
git clone https://github.com/JhovidReiber/Sistema-de-Snippets-con-Symfony.git
cd Sistema-de-Snippets-con-Symfony
```

2. Instala las dependencias PHP:

```bash
composer install
```

3. Crea un archivo de entorno local:

```bash
cp .env .env.local
```

Edita `.env.local` y asegúrate de tener configurada la base de datos SQLite:

```env
DATABASE_URL="sqlite:///%kernel.project_dir%/var/data.db"
```

4. Crea la base de datos y ejecuta las migraciones:

```bash
php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate
```

5. *(Opcional)* Carga datos de prueba:

```bash
php bin/console doctrine:fixtures:load
```

6. Inicia el servidor de desarrollo:

```bash
symfony serve
```

Luego abre tu navegador en:

```
http://127.0.0.1:8000
```

---

## 📁 Estructura del Proyecto

- `src/` → Código fuente (entidades, controladores, formularios)
- `templates/` → Vistas Twig
- `public/` → Archivos públicos (CSS, JS, imágenes)
- `migrations/` → Archivos de migración de base de datos
- `var/` → Datos temporales y base SQLite local

---

## 🧰 Comandos útiles

```bash
# Ver rutas disponibles
php bin/console debug:router

# Limpiar caché
php bin/console cache:clear

# Crear entidad
php bin/console make:entity

# Ejecutar servidor
symfony serve
```

---