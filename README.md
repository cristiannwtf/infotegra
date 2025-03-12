# 🚀 Prueba Técnica - Infotegra  

Este proyecto es una **prueba técnica** que consume la API de **Rick and Morty**, obtiene información de **100 personajes**, los almacena en una base de datos MySQL y permite **visualizarlos y editarlos** mediante una interfaz en Laravel.  

---

## 🛠️ **Tecnologías Utilizadas**  
✅ **PHP 8.2**  
✅ **Laravel 12**  
✅ **MySQL (MariaDB en XAMPP)**  
✅ **Bootstrap (para las vistas HTML)**  
✅ **GitHub**  

---

## 📌 **Requisitos Previos**  

1️⃣ **Servidor Web**:  
   - Tener **XAMPP** o cualquier servidor con PHP 8.2 instalado.  

2️⃣ **Base de Datos**:  
   - MySQL debe estar corriendo en el puerto `3306`.  
   - Se debe crear una base de datos llamada **`infotegra_db`**.  

3️⃣ **Composer Instalado**  
   - Si no lo tienes, descárgalo desde: [https://getcomposer.org/](https://getcomposer.org/)  

4️⃣ **Clonar el Proyecto desde GitHub**  
   ```bash
   git clone https://github.com/cristiannwtf/infotegra.git
   cd infotegra


⚡ Instalación y Configuración

composer install

📌 2️⃣ Configurar el archivo .env

cp .env.example .env
php artisan key:generate

⚠️ Importante: Modifica el .env con los datos de conexión a la base de datos:

DB_DATABASE=infotegra_db
DB_USERNAME=root
DB_PASSWORD=

📌 3️⃣ Migrar la base de datos
php artisan migrate

📌 4️⃣ Cargar la base de datos desde el archivo SQL

Método 1: Importar infotegra_db.sql desde phpMyAdmin.

Método 2: Usar consola MySQL:


mysql -u root infotegra_db < infotegra_db.sql


📌 5️⃣ Iniciar el servidor de Laravel

php artisan serve

La aplicación estará disponible en:
🔗 http://127.0.0.1:8000


🔥 Uso de la Aplicación
📌 Consultar Personajes desde la API
📍 GET /fetch-characters → Lista de 100 personajes desde la API.

📌 Guardar Personajes en la Base de Datos
📍 GET /save-characters → Guarda los personajes en MySQL.

📌 Listar Personajes Guardados
📍 GET /list-characters → Muestra los personajes almacenados en la BD.

📌 Editar un Personaje
📍 GET /characters/{id}/edit → Abre el formulario de edición.
📍 PUT /characters/{id} → Guarda los cambios realizados.



📝 Estructura del Proyecto
📁 app/Http/Controllers/

CharacterController.php → Controlador principal.
📁 resources/views/characters/

index.blade.php → Lista personajes desde la API.
list.blade.php → Muestra los personajes guardados.
edit.blade.php → Formulario de edición de personajes.
📁 database/migrations/

create_characters_table.php → Migración de la tabla characters.
📁 routes/

web.php → Define las rutas de la aplicación.
📁 public/

index.php → Punto de entrada de Laravel.
📄 infotegra_db.sql → Script de la base de datos.