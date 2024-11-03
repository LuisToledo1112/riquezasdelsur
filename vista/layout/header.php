
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto Riquezas del Sur</title>
    <link rel="stylesheet" href="../vista/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        header {
            display: flex;
            align-items: center;
            padding: 10px;
        }
        
        header img {
            margin-right: 15px;
        }

        header h1 {
            font-size: 1.8rem;
            margin: 0;
        }
    </style>
    <script>
        function checkSession() {
            const isLoggedIn = localStorage.getItem('loggedIn') === 'true';
            const sessionButton = document.getElementById('session-button');

            console.log("Estado de sesión (isLoggedIn):", isLoggedIn);

            // Verifica si el botón existe
            if (!sessionButton) {
                console.error("No se encontró el botón con ID 'session-button'");
                return;
            }

            // Actualiza el botón según el estado de sesión
            if (isLoggedIn) {
                sessionButton.innerHTML = 'Cerrar Sesión';
                sessionButton.onclick = logOut;
                sessionButton.href = "../vista/indexSecure.php"; // Quita el enlace si es "Cerrar Sesión"
            } else {
                sessionButton.innerHTML = 'Iniciar Sesión';
                sessionButton.onclick = logIn;
                sessionButton.href = "../vista/index.php"; // Quita el enlace si es "Iniciar Sesión" y permite manejarlo con JavaScript
            }
        }

        function logOut() {
            console.log("Cerrando sesión...");
            localStorage.setItem('loggedIn', 'false');
            checkSession();
            window.location.reload(); // Recarga la página actual para mostrar "Iniciar Sesión"
        }

        function logIn() {
            console.log("Iniciando sesión...");
            localStorage.setItem('loggedIn', 'true');
            checkSession(); // Actualiza el botón sin recargar la página
        }

        window.onload = checkSession; // Verifica el estado al cargar la página
    </script>
</head>
<body>

    <header>
        <!-- Logo Image -->
        <img src="../vista/img/Logo.png" alt="Riquezas del Sur Logo" style="width: 150px; height: auto;">
        
        <!-- Título del proyecto -->
        <h1>Riquezas del Sur</h1>
        
        <!-- Botón de sesión -->
        <section class="Head ms-auto">
            <div class="dropdown">
                <img src="../vista/img/Login.png" style="width: 50px; height: 50px" alt="">
                <a href="../vista/indexSecure.php" id="session-button" class="btn btn" type="button">Iniciar Sesión</a>
                
            </div>
        </section>
    </header>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../vista/js/verf.js"></script>
</body>
</html>
