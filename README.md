# Bárbaro: Gestión de una barbería

Bárbaro es una plataforma de gestión diseñada para una barbería hipotética. Ofrece intranets personalizadas para diferentes roles, como administrador, empleado y cliente. La aplicación incluye funciones para gestionar citas, horarios, servicios y empleados, lo que mejora tanto la eficiencia operativa como la experiencia del usuario en la administración de la barbería.


## Características

- **Sistema de citas:** Permite a los clientes agendar citas fácilmente y a los empleados consultar sus horarios de trabajo.
- **Gestión de horarios:** Facilita la programación de turnos de trabajo y la disponibilidad del personal.
- **Administración de servicios y empleados:** Simplifica la gestión de servicios ofrecidos y del personal de la barbería.
- **Interfaces personalizadas:** Diferentes intranets adaptadas a las necesidades de administradores, empleados y clientes.

## Tecnologías Utilizadas

- **Frontend:** Vue.js
  - **Componentes:** Vuetify
  - **Gestor de estado:** Pinia
  - **Empaquetado:** Vite
- **Backend:** Laravel

### Requisitos

- Node.js
- PHP
- Composer
- MySQL o PostgreSQL

### Instrucciones

1. **Clonar el repositorio:**

   ```bash
   git clone https://github.com/davidzz-code/BarBaro_backend.git
   cd BarBaro_backend
   ```
   
2. **Instalar dependencias de Laravel:**

   ```bash
   composer install
   ```
   
3. **Configurar el archivo .env:**
   
   ```bash
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=nombre_base_de_datos
   DB_USERNAME=usuario
   DB_PASSWORD=contraseña
   ```
   
4. **Ejecutar migraciones:**

   ```bash
   php artisan migrate
   ```
   
5. **Iniciar el servidor del backend:**
   ```bash
   php artisan serve
   ```
   
7. **Configurar frontend:**  
   Si aún no has configurado el frontend, visita el [repositorio del frontend](https://github.com/davidzz-code/BarBaro_frontend.git) y sigue las instrucciones para iniciar la web  
   
### Uso

Accede a la plataforma a través de http://localhost:8000 para el backend y comprobar que funciona.
Una vez tanto frontend como backend estén funcionando, regístrate y explora las funcionalidades según tu rol asignado (administrador, empleado o cliente).

### Capturas de pantalla de la web

![Captura de pantalla de la landing page](public/screenshots/landing.webp)  

![Captura de pantalla de la vista de citas](public/screenshots/appointments.webp)
