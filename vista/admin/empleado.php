<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riqueza del Sur - Panel de Empleado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styleAdmin.css">
</head>
<body>
    <div class="sidebar">
        <h2>Riqueza del Sur</h2>
            <a id="inicio" href="#">Inicio</a>
            <a id="paquetes" href="#">Paquetes</a>
            <a id="reservaciones" href="#">Reservaciones</a>
            <a id="reportes" href="#">Reportes</a>
            <a type="button" class="btn btn-outline-success" href="../index.php">Página Principal</a>
    </div>

    <div class="main-content">
        <header>
            <h1>Panel de Empleado</h1>
        </header>

        <section class="employee-panel">
            <h2>Datos de Reservación</h2>
            <form action="#">
                <label for="cliente">Nombre del Cliente:</label>
                <input type="text" id="cliente" name="cliente" required>

                <label for="fecha">Fecha de Reservación:</label>
                <input type="date" id="fecha" name="fecha" required>

                <label for="paquete">Paquete Seleccionado:</label>
                <input type="text" id="paquete" name="paquete">

                <label for="estado">Estado de la Reservación:</label>
                <select id="estado" name="estado">
                    <option value="pendiente">Pendiente</option>
                    <option value="confirmada">Confirmada</option>
                    <option value="cancelada">Cancelada</option>
                </select>

                <div class="form-actions">
                    <button type="submit">Guardar Cambios</button>
                    <button type="button">Cancelar Reservación</button>
                </div>
            </form>
        </section>
    </div>

    <!-- Agregar estilos personalizados para botones destacados -->
    <style>
        .highlight-button {
            font-size: 16px;
            font-weight: bold;
            color: #ffffff;
            padding: 10px 10px;
            text-align: center;
            display: block;
            background-color: #004d40;
            border-radius: 5px;
            text-decoration: none;
            margin: 15px 0;
        }

        .highlight-button:hover {
            background-color: #00695c;
        }
    </style>

    <!-- Agregar script para aplicar clase basada en el correo -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Simula una verificación del correo del usuario
            const userEmail = "user@unach.mx"; // Cambiar a una variable dinámica si es necesario

            // Aplica el estilo destacado si el correo contiene "@unach.mx"
            if (userEmail.includes("@unach.mx")) {
                document.getElementById("inicio").classList.add("highlight-button");
                document.getElementById("paquetes").classList.add("highlight-button");
                document.getElementById("reservaciones").classList.add("highlight-button");
                document.getElementById("reportes").classList.add("highlight-button");
            }
        });
    </script>
</body>
</html>
