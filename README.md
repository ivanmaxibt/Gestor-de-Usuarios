# 👤 Gestor de Usuarios – Proyecto CRUD con Login en PHP

Este proyecto es un sistema web básico para gestionar usuarios, con funcionalidades de login, roles y operaciones CRUD (crear, leer, editar, eliminar).

---

## 🚀 Tecnologías utilizadas

- PHP (vanilla)
- MySQL
- Bootstrap 5 (CDN)
- HTML5 + CSS3
- Sesiones y password hashing
- Validaciones del lado del servidor
- Panel de administración según rol

---

## 🧑‍💻 Instalación local (XAMPP)

1. Cloná o descargá este repositorio.
2. Copiá la carpeta `gestor-usuarios` dentro de `htdocs` (XAMPP).
3. Abrí XAMPP, activá **Apache** y **MySQL**.
4. Entrá a [http://localhost/phpmyadmin](http://localhost/phpmyadmin) y:
    - Creá una base de datos llamada `crud_app`
    - Importá el archivo `sql/schema.sql`
5. Accedé desde el navegador a:
    http://localhost/gestor-usuarios/index.php

---

## 🔐 Login de prueba

| Usuario  | Contraseña | Rol    |
|----------|------------|--------|
| admin    | admin123   | admin  |

---

## 🛠 Funcionalidades del sistema

- Login con verificación de contraseña segura (`password_hash`)
- Roles: `admin` y `user`
- Panel de usuarios accesible solo si estás logueado
- Crear, editar y eliminar usuarios desde el panel
- Estilo moderno con Bootstrap

---

## ✅ Buenas prácticas incluidas

- Código indentado y comentado
- Separación en carpetas (`config/`, `includes/`, `sql/`)
- Seguridad básica (hash, sesiones, validaciones)
- Código simple para aprendizaje

---

## 📂 Estructura del proyecto

gestor-usuarios/
│
├── index.php           # Login
├── dashboard.php       # Panel de usuarios
├── create.php          # Crear usuario
├── edit.php            # Editar usuario
├── delete.php          # Eliminar usuario
├── logout.php          # Cerrar sesión
│
├── config/
│   └── db.php          # Conexión a la base de datos
│
├── sql/
│   └── schema.sql      # Script para crear la base y tabla users
│
├── assets/
│   └── style.css       # Estilos personalizados (opcional)

---

## 📧 Contacto

Este proyecto fue realizado como práctica educativa.  
Autor: Iván Bustos
Año: 2025
