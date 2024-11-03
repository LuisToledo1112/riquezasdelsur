<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administración Empresarial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styleAdmin.css">
</head>
<body>
    <div class="sidebar">
        <h2>Riqueza del Sur</h2>
        <nav>
            <a href="#">Inicio</a>
            <a href="#">Usuarios</a>
            <a href="#">Inventario</a>
            <a href="#">Ventas</a>
            <a href="#">Reportes</a>
            <a href="#">Configuración</a>
            <a type="button" class="btn btn-outline-success" href="../index.php">Página Principal</a>
        </nav>
    </div>

    <div class="main-content">
        <h1>Panel de Administración Empresarial</h1>
        <section id="general">
            <h2>Datos Generales</h2>
            <form class="admin-form">
                <label for="empresa">Nombre de la Empresa:</label>
                <input type="text" id="empresa" name="empresa" value="Riqueza del Sur">

                <label for="descripcion">Descripción:</label>
                <textarea id="descripcion" name="descripcion"></textarea>

                <label for="ubicacion">Ubicación:</label>
                <input type="text" id="ubicacion" name="ubicacion">

                <label for="telefono">Teléfono:</label>
                <input type="text" id="telefono" name="telefono">

                <label for="correo">Correo Electrónico:</label>
                <input type="email" id="correo" name="correo">
            </form>
        </section>

        <section id="usuarios">
            <h2>Gestión de Usuarios</h2>
            <button type="button">Agregar Usuario</button>
            <button type="button">Editar Usuario</button>
            <button type="button">Eliminar Usuario</button>
        </section>

        <section id="inventario">
            <h2>Gestión de Inventario</h2>
            <button type="button">Agregar Producto</button>
            <button type="button">Editar Producto</button>
            <button type="button">Eliminar Producto</button>
        </section>

        <section id="ventas">
            <h2>Gestión de Ventas</h2>
            <button type="button">Registrar Venta</button>
            <button type="button">Ver Historial de Ventas</button>
        </section>

        <section id="reportes">
            <h2>Reportes</h2>
            <button type="button">Generar Reporte Financiero</button>
            <button type="button">Generar Reporte de Inventario</button>
        </section>

        <section id="configuracion">
            <h2>Configuración</h2>
            <button type="button">Configuración de Sistema</button>
            <button type="button">Preferencias de Usuario</button>
        </section>
    </div>
</body>
</html>
