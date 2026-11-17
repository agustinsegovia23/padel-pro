# 🎾 Padel Pro: Camino a la gloria

Sitio web oficial y plataforma promocional para el videojuego indie **Padel Pro: Camino a la gloria**, desarrollado como trabajo final integrador para las materias **Diseño Web y Usabilidad** y **Frameworks de Desarrollo Web** — Año 2026.

## 🚀 Sobre el Proyecto

**Padel Pro: Camino a la gloria** es una simulación deportiva y aventura narrativa centrada en la superación personal, las rivalidades intensas y la redención en el circuito profesional de pádel. El sitio web presenta la identidad visual del estudio ficticio **Point Break**, permitiendo explorar la historia de Alex, las mecánicas de juego, los personajes del circuito, material multimedia y documentación técnica del desarrollo.

## 🛠️ Tecnologías Utilizadas

- **Backend:** PHP / CodeIgniter 3 (Arquitectura MVC, controladores, vistas modulares y manejo de formularios).
- **Frontend:** HTML5, CSS3, Bootstrap 5 (carrusel, grillas responsivas, alertas dinámicas y componentes colapsables).
- **Iconografía y Recursos Externos:** FontAwesome 6, YouTube Embed API y Google Maps Embed.
- **Estilos y UI:** Hoja de estilos externa (`assets/css/styles.css`) con variables CSS y paleta de colores institucional (`#1565C0`, `#1B2430`, `#FF6B35`, `#4FC3F7`, `#F5F5F0`).
- **Control de Versiones:** Git y GitHub.

## 📁 Estructura del Sitio

- **Home (`/`):** Carrusel destacado con llamados a la acción, tarjeta principal del videojuego (portada, título, género, sinopsis y botones de acción) y tarjetas de acceso rápido a las secciones clave.
- **Historia (`/index.php/paginas/historia`):** Sinopsis completa de la campaña, características principales y requisitos del sistema.
- **Gameplay (`/index.php/paginas/gameplay`):** Detalle de la simulación deportiva, el sistema de decisiones ramificadas y la evolución de habilidades.
- **Personajes (`/index.php/paginas/personajes`):** Fichas de protagonistas, entrenadores, patrocinadores y rivales (Alex, Sofía, Alejandro, Marcos y Clara).
- **Multimedia (`/index.php/paginas/multimedia`):** Tráiler oficial embebido desde YouTube y galería interactiva con vista ampliada de capturas y bocetos.
- **Contacto y Comunidad (`/index.php/paginas/contacto`):** Formulario de consulta con confirmación de envío, enlaces a redes/tiendas digitales (Discord, X, YouTube, Steam, Epic Games) y ubicación en Google Maps.
- **Área de Usuario (`/index.php/paginas/usuario`):** Formularios de inicio de sesión, registro de nueva cuenta y recuperación de contraseña integrada.
- **Documentación del Proyecto:** Descarga directa en PDF (`assets/docs/documentacion_padel_pro.pdf`) con la identidad visual, paleta cromática, tipografía, mapa de navegación y wireframes de laboratorio.

## ⚙️ Configuración e Instalación Local

El proyecto no requiere base de datos externa para su ejecución. Para correrlo en un entorno local:

1. **Requisitos previos:** Tener instalado un servidor local con PHP y Apache (por ejemplo, **XAMPP** o **WAMP**).
2. **Ubicación del proyecto:** Descomprimir la carpeta `padel-pro` dentro del directorio raíz del servidor web (`C:\xampp\htdocs\padel-pro\`).
3. **Iniciar servicios:** Abrir el panel de control de XAMPP e iniciar el módulo **Apache**.
4. **Acceso desde el navegador:** Ingresar a `http://localhost/padel-pro/`

_(Nota: Si se aloja en una carpeta con otro nombre o puerto distinto al 80, verificar la variable `$config['base_url']` en `application/config/config.php`)._

---

**Autor:** Jorge Agustín Segovia  
_Universidad de La Punta — Tecnicatura en Diseño Digital y Videojuegos — San Luis, Argentina._
