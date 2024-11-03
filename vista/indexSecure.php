<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="../vista/css/styleSecure.css">
    <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>

    <script>
        function verificarRol(event) {
    event.preventDefault(); // Prevenir el envío del formulario
    const email = document.getElementById("email").value; // Obtener el correo ingresado
    let urlDestino;

    if (email.endsWith("@unach.mx")) {
        urlDestino = "../vista/admin/empleado.php"; // Redirige a la interfaz de empleado
    } else if (email.endsWith("@riquezas.com")) {
        urlDestino = "../vista/admin/admin.php"; // Redirige a la interfaz de administrador
    } else {
        urlDestino = "../vista/index.php"; // Redirige a la interfaz de cliente
    }

    alert("Registro exitoso. Redirigiendo..."); // Mensaje de éxito
    setTimeout(() => {
        window.location.href = urlDestino; // Realiza la redirección después de 2 segundos
    }, 2000); // 2000 milisegundos = 2 segundos
}
    </script>

    <a style="color:beige;" type="button" class="btn btn-outline-success" href="../vista/index.php">Página Principal</a>
    <div class="form">
        <ul class="tab-group">
            <li class="tab active"><a href="../vista/indexSecure.php">Registro</a></li>
            <li class="tab"><a href="../vista/login.php" onclick="toggleLogin()">Iniciar Sesión</a></li>
        </ul>
        <div id="signup">
            <h1 style="color:beige">¡Inicia Tu Registro Para La Aventura!</h1>
            <form onsubmit="verificarRol(event)"> <!-- Añadir onsubmit -->
                <div class="top-row">
                    <div class="field-wrap">
                        <input type="text" required autocomplete="off" placeholder="Nombre(s)" />
                    </div>
                    <div class="field-wrap">
                        <input type="text" required autocomplete="off" placeholder="Paterno" />
                    </div>
                </div>
                <div class="field-wrap">
                    <input type="text" required autocomplete="off" placeholder="Materno"/>
                </div>
                <div class="field-wrap">
                    <input type="text" required autocomplete="off" placeholder="Número de Teléfono" oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0,10)" />
                </div>
                <div class="field-wrap">
                <input type="text" id="email" required autocomplete="off" placeholder="Correo Electrónico" pattern="^[^@\s]+@[^@\s]+\.[^@\s]+$" title="Por favor, introduce un correo electrónico válido que contenga '@' y una terminación." />
                </div>
                <div class="field-wrap">
                    <input type="password" required autocomplete="off" placeholder="Password"/>
                </div>
                <button type="submit" class="button button-block">Registrate</button>
            </form>
        </div>
    </div>

    <script src="../vista/js/checkInicio.js" defer></script>
</body>
</html>

