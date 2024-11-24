<?php
// Conectar a la base de datos
$servername = "localhost"; // Cambia esto si tu servidor es diferente
$username = "root"; // Cambia esto por tu usuario
$password = "12345678"; // Cambia esto por tu contraseña
$dbname = "odontologia"; // Cambia esto por tu base de datos

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener todas las noticias
$noticias = $conn->query("SELECT * FROM noticias ORDER BY fecha DESC");

// Cerrar la conexión (opcional, puedes hacerlo al final del script)
$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido al Departamento de Odontología</title>
    <link rel="stylesheet" href="bievenida3.css">
    <style>
        /* Estilos generales */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-image: url("fondo.png");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            color: #333;
        }

        /* Estilos del header */
        header {
            position: relative;
            background: white;
            background-image: url('ipasme3.png');
            background-size: contain;
            background-position: left;
            background-repeat: no-repeat;
            height: 40px;
            width: 82.8rem; /* Altura del header, puedes ajustar según tus necesidades */
            display: flex; /* Usar flexbox para centrar el contenido */
            align-items: center; /* Centrar verticalmente */
            justify-content: center; /* Centrar horizontalmente */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Sombra para el header */
            padding: 10px; /* Espaciado interno */
            border: 2px solid black;
            border-radius: 5px;
        }
        .logo {
            position: absolute;
            top: 0.5px;
            right: 30px;
            width: 55px;
        }
      
        /* Estilos de navegación */
        nav ul {
            
            background: transparent;
            list-style-type: none; /* Eliminar puntos de la lista */
            padding: 0; /* Eliminar padding */
            text-align: right; /* Centrar texto en el nav */
        }

        nav li {
            display: inline; /* Mostrar elementos de la lista en línea */
            margin-right: 20px; /* Espaciado entre botones */
        }

        button {
            cursor: pointer; /* Cambiar cursor al pasar el ratón */
        }

        /* Estilos del contenido principal */
        main {
            max-width: 900px;
            margin: 20px auto;
            padding: 20px;
            background: lightblue;
            border: 2px;
            border-radius: 8px;
            box-shadow: 0px 0px 15px 5px rgba(0, 0, 0, 0.2);
        }

        /* Estilos de secciones */
        section {
            margin-bottom: 20px; /* Espacio entre secciones */
            background: white;
            padding: 15px;
            border-radius: 5px;
            box-shadow: 0px 0px 15px 5px rgba(0, 0, 0, 0.2);
        }

        h1, h2 {
            text-align: center;
        }

        h1 {
            font-size: 24px; /* Tamaño de fuente del h1 */
        }

        h2 {
            font-size: 20px; /* Tamaño de fuente del h2 */
        }

        footer {
            max-width: 100%;
            margin: 20px auto;
            text-align: center;
            padding: 20px ;
            background: white;
            box-shadow: 0px 0px 15px 5px rgba(0, 0, 0, 0.2);
            border: 2px;
        }
        /* From Uiverse.io by satyamchaudharydev */ 
        #boton {
        --primary-color: #645bff;
        --secondary-color: #fff;
        --hover-color: #111;
        --arrow-width: 10px;
        --arrow-stroke: 2px;
        box-sizing: border-box;
        border: 0;
        border-radius: 20px;
        color: var(--secondary-color);
        padding: 1em 1.8em;
        background: var(--primary-color);
        display: flex;
        transition: 0.2s background;
        align-items: center;
        gap: 0.6em;
        font-weight: bold;
        }

        #boton .arrow-wrapper {
        display: flex;
        justify-content: center;
        align-items: center;
        }

        #boton .arrow {
        margin-top: 1px;
        width: var(--arrow-width);
        background: var(--primary-color);
        height: var(--arrow-stroke);
        position: relative;
        transition: 0.2s;
        }

        #boton .arrow::before {
        content: "";
        box-sizing: border-box;
        position: absolute;
        border: solid var(--secondary-color);
        border-width: 0 var(--arrow-stroke) var(--arrow-stroke) 0;
        display: inline-block;
        top: -3px;
        right: 3px;
        transition: 0.2s;
        padding: 3px;
        transform: rotate(-45deg);
        }

        #boton:hover {
        background-color: var(--hover-color);
        }

        #boton:hover .arrow {
        background: var(--secondary-color);
        }

        #boton:hover .arrow:before {
        right: 0;
        }
    </style>
</head>
<body>
    <header>
        <img src="logoipas.jpg" alt="logo" class="logo">
    </header>
    
    <nav>
        <ul>       
                <button id="boton" class="arrow-wrapper" onclick="location.href='validar.php'">Iniciar Sesión
                    <div class="arrow-wrapper">
                        <div class="arrow"></div>
                    </div>
                </button>
                <button id="boton" onclick="location.href='registro10.php'">Registrarse
                    <div class="arrow-wrapper">
                        <div class="arrow"></div>

                    </div>
                </button>
            <button onclick="location.href='#quienes-somos'">¿Quiénes Somos?</button>
            <button onclick="location.href='#servicios'">Servicios</button>
            <button onclick="location.href='#noticias'">Noticias</button>
            <button onclick="location.href='#contacto'">Contacto</button>
        </ul>   
    </nav>
        
    
    
    
    <main>
        <section id="quienes-somos">
            <h2>¿Quiénes Somos?</h2>
            <p>El Departamento de Odontología se dedica a brindar atención integral en salud bucal, ofreciendo servicios de prevención, diagnóstico y tratamiento de diversas condiciones dentales. Nuestro objetivo es promover la salud oral y mejorar la calidad de vida de nuestros pacientes.</p>
        </section>

        <section id="servicios">
            <h2>Servicios</h2>
            <ul>
                <li>Consulta dental</li>
                <li>Tratamientos de ortodoncia</li>
                <li>Odontología estética</li>
                <li>Prevención y educación en salud bucal</li>
            </ul>
        </section>

        <section id="noticias">
            <h2>Noticias</h2>
            <?php if ($noticias->num_rows > 0): ?>
                <ul>
                    <?php while ($row = $noticias->fetch_assoc()): ?>
                        <li>
                            <h4><?php echo htmlspecialchars($row['titulo']); ?></h4>
                            <p><?php echo htmlspecialchars($row['contenido']); ?></p>
                            <?php if (!empty($row['imagen'])): ?>
                                <img src="<?php echo htmlspecialchars($row['imagen']); ?>" alt="Imagen de la noticia" style="max-width: 500px;">
                            <?php else: ?>
                                <p>No hay imagen disponible.</p>
                            <?php endif; ?>
                            <small><?php echo $row['fecha']; ?></small> 
                            <form method="POST" id="form1" style="display:inline;">
                                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                            </form>
                        </li> 
                    <?php endwhile; ?>
                </ul>
            <?php else: ?>
                <p>No hay noticias disponibles.</p>
            <?php endif; ?>
            
        </section>

        <section id="contacto">
            <h2>Contacto</h2>
            <p>Para más información, contáctanos a través de:</p>
            <p>Telefono: 0271-2218423</p>
        </section>
    </main>
    <footer>
        <p><strong>Direccion:</strong>  Avenida Maya Urb. Conticinio. Sector Plata 3. Valera, Estado Trujillo</p> <p>2024. IPASME. Todos Los Derechos Reservados</p>
    </footer>
</body>
</html>
                