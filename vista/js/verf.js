function verificarRol(event) {
    event.preventDefault();
    const email = document.getElementById("email").value;
    let urlDestino;

    if (email.endsWith("@unach.mx")) {
        urlDestino = "../vista/admin/empleado.php"; // Redirige a la interfaz de empleado
    } else if (email.endsWith("@riquezas.com")) {
        urlDestino = "../vista/admin/admin.php"; // Redirige a la interfaz de administrador
    } else {
        urlDestino = "../vista/index.php"; // Redirige a la interfaz de cliente
    }

        window.location.href = urlDestino;
    }
