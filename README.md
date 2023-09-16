# WebSite-Turismo Conociendo las riquezas de sultepec

Desarrollo de sitio web para promover el turismo en el municipio de Sultepec
En este repositorio se llevara a cabo el proyecto propuesto por el plantel sultepec al Ayundtamiento del municipio en donde 
como finalidad se tiene promover el turismo dentro del mismo a traves de un sitio web el cual represente 
los sitios mas relevantes y atractivos para visitar.

¿Quienes colaboran? 
Lizandro Antonio Santos - Estudiante de programacion 
Yuliana Lizeth Betancourt Medina - Estudiante de programacion 
Tony Villagran Arelleno - Estudiante de programacion 
Angel Alejandro Cruz Sanchez - Estudiante de programacion  

Descripcion del desarrollo del sitio web. 
El diseño previamente establecido del sitio web cuenta con una serie de funcionalidades por desarrollar. 
Primer fase: Creacion del diseño inicial
Apartir del diseño que se encuentra en la carpeta assets llamado mockup, se debera crear el diseño principal haciendo uso de html css js , si haci lo requiere. 

Segunda fase: Automatizacion del contenido.
Se considero crear una web con contenido dinamico, ¿pero a que nos referimos con esto?
Bien pues una vez establecido el diseño inicial se buscara que la creacion de contenido sea actualizada mendiante una cuenta de administrador,
esto se tiene pensado realizar mediante el uso de php y una base de datos llamada users.
en ella se encontraran los roles de los participantes en la web los cuales dividiremos como: 
Usuario de invitado(Este primer usuario tendra el rol de invitado ya que aun no se encuentra registrado en la web, pero tendra la posibilidad de hacerlo)
Usuarios comunes(Usuarios registrados en la base de datos, los cuales tendran un rol en la web al estar registrados)
Usuario Administrador(Este usuario tendra acceso a herramientas especiales ya que podra agregar contenido y mantenimiento a la web de una manera facil)

Todo lo anterior se lograra haciendo uso de las funcionalidades de php, para comprender la forma de trabajo deberas tener el conocimiento de como funciona 
PHP en el desarollo web. 

Continuamos con el siguiente apartado. 
¿Como comenzar a trabajar en el sitio web? 

Anteriormente el proyecto constaba  de una serie de documento basicos de html css y js
sin embargo en esta actualizacion y con el uso de php la forma de trabajo se ha modificado 
por lo que tendras que seguir las siguientes instrucciones .

1- Clona el repositorio de git en tu maquina local.

2-Uso de un servidor local puede ser (XAMP,MAMP); 
Debido a que se trabaja de manera local si eres nuevo en el proyecto y debes hacer uso de la base de datos deberas crearla por ti mismo en tu maquina local.
(Despues agrego como la pueden crear XD)


Forma de Trabajo: Frontend
Seguir los estandares de colores , tipografia , padding , margin , usando medidas relativas.
A continuacion se encuentra un listado con los tamaños y especificaciones que se deberan utilizar para el diseño de 
y estructurado del la web.

1. Paleta de Colores:\
Color de Fondo: #1F242D
Color de fondo Secundario:#B6DB7B
Color complementario: #1AB823
Color de titulos: #1AB823
Color de texto: #F9F4F5

2. Tipografía:
Fuente principal: Poppins
Link: https://fonts.google.com/specimen/Poppins?query=poppins

Títulos Principales (H1): Fuente:Poppins, Tamaño: 4,6rem, Peso: Negrita
Subtítulos (h2, a ): Fuente: Fuente:Poppins, Tamaño: 2.5rem, Peso: Seminegrita
Texto del Cuerpo (p): Fuente: Fuente:Poppins Tamaño: 1.6rem, Peso: Regular
Texto Destacado: Fuente:Poppins, Tamaño: 1.6rem.

3. Clases y Nomenclatura
Utiliza nombres en el idioma ingles claros y descriptivos para las clases en el código CSS.
Utiliza la metodologia BEM
Prefijo de Clases: .Nombre descriptivo-(uso de dos guiones medios)segunda palabra descriptiva

Ejemplos: 
.menu-container 
.menu-icon
.menu-text

4. Imágenes:
Utiliza imágenes de alta calidad y optimizadas para la web (Formato: .webp).
Prefijo de Nombres de Archivos: Crear Carpeta con el nombre assets e incluir las imagenes con el siguiente formato (Descripicion corta de la imagen/lugar en la web) 
Ejemplo: 
parroquia sultepec/portada.webp


Desarrollo de backend: 
1.Archivos Reutilizables(Se han dividido el header, la barra de navegacion, y el footer en la carpeta nombrada , partials , si requieres hacer uso de ellos los debes hacer mediante php)
siguiendo esta metodologia de desarrollo deberas crear tu proyecto de manera diferente , una vez terminado tu parte del trabajo deberas añadirla en un archivo .php , en donde solo contenga tu codigo html , y mandarlo a traer en el index.php , seguramente ya habra un ejemplo de como hacerlo.


Aprobacion del mockup.
Diseño Responsivo para Dispositivos Móviles.
1. Diseño Vertical: En lugar de una disposición horizontal, el contenido se organiza en una estructura vertical que permite desplazarse hacia abajo para acceder a más información.
2. Tamaño de Fuente: Utiliza un tamaño de fuente legible para dispositivos móviles, para que los usuarios no tengan que hacer zoom para leer el contenido.
3. Imágenes Optimizadas: Asegúrate de que las imágenes se carguen rápidamente en dispositivos móviles al optimizar su tamaño y resolución.
4. Diseño Táctil-Friendly: Aumenta los espacios entre los elementos interactivos para evitar clics accidentales. Asegúrate de que los botones sean lo suficientemente grandes para tocar con facilidad.
5. Botones de Llamada a la Acción: Incluye botones de llamada a la acción estratégicamente ubicados que inviten a los usuarios a explorar más o ponerse en contacto.
6. Menú de Navegación Accesible: El menú hamburguesa debería ser fácilmente visible y accesible en la parte superior de la pantalla.
7. Diseño Simplificado: Simplifica el diseño para resaltar los aspectos más importantes y asegurarte de que la información es clara y fácil de leer en pantallas pequeñas.
Recuerda que las pruebas en dispositivos móviles son esenciales para asegurarte de que la experiencia de usuario sea fluida y agradable en todas las plataformas.


Cualquier duda en whatsapp.

