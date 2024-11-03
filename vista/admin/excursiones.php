
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riqueza del Sur - Compra de Paquetes</title>
    <link rel="stylesheet" href="../css/styleCompra.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .oculto {
            display: none;
        }
        .info-adicional {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <header>
        <a type="button" class="btn" href="../index.php">Página Principal</a>
        <h1>Riqueza del Sur - Excursiones</h1>
    </header>
    <main>
        <section class="paquetes">
            <!-- Paquete 1 -->
            <div class="paquete">
                <h2>Excursión al Cañón del Sumidero y Chiapa de Corzo</h2>
                <p>Explora las bellezas naturales de Chiapas</p>
                <p><strong>Precio: $5,000 MXN</strong></p>
                <button onclick="toggleInfo(this)">Más información</button>
                <div class="info-adicional oculto">
                    <ul>
                        <li>Duración: Medio día o día completo.</li>
                        <li>Actividades: Salida en lancha por el Cañón del Sumidero para ver las altas paredes rocosas, formaciones naturales como el "árbol de Navidad" y avistamiento de fauna local (cocodrilos, aves). <br> Después, un recorrido guiado por Chiapa de Corzo para visitar el exconvento, la fuente mudéjar y el malecón.</li>
                        <li>Ideal para: Amantes de la naturaleza y quienes buscan una excursión cultural.</li>
                    </ul>
                    <button onclick="mostrarFormularioPago('Chiapas Maravilloso')">Comprar ahora</button>
                </div>
            </div>
            
            <div class="paquete">
                <h2>Excursión a las Cascadas de Agua Azul y Misol-Há</h2>
                <p>Disfruta y relajate en las cascadas cristalinas.</p>
                <p><strong>Precio: $6,500 MXN</strong></p>
                <button onclick="toggleInfo(this)">Más información</button>
                <div class="info-adicional oculto">
                    <ul>
                        <li>Duración: Día completo.</li>
                        <li>Actividades: Esta excursión permite disfrutar de las impresionantes Cascadas de Agua Azul y Misol-Há. <br> En Agua Azul, hay áreas para nadar y disfrutar de las pozas naturales de color turquesa, y en Misol-Há, una caída de agua de 30 metros rodeada de selva, se puede nadar o caminar detrás de la cascada.</li>
                        <li>Ideal para: Aficionados a la fotografía, el ecoturismo y quienes buscan una experiencia refrescante.</li>
                    </ul>
                    <button onclick="mostrarFormularioPago('Aventura en Selva Lacandona')">Comprar ahora</button>
                </div>
            </div>

            <div class="paquete">
                <h2>Excursión Arqueológica en Palenque</h2>
                <p>Descubre el encanto de Palenque.</p>
                <p><strong>Precio: $4,200 MXN</strong></p>
                <button onclick="toggleInfo(this)">Más información</button>
                <div class="info-adicional oculto">
                    <ul>
                        <li>Duración: Día completo.</li>
                        <li>Actividades: Visita guiada por la zona arqueológica de Palenque, uno de los sitios mayas más importantes de México.<br> Los guías explican la historia y arquitectura del Templo de las Inscripciones, el Palacio, y otros edificios significativos.<br> En algunos tours, se incluye una caminata por la selva a otros sitios cercanos, como Bonampak o Yaxchilán.</li>
                        <li>Ideal para: Interesados en historia, arqueología y cultura maya.</li>
                    </ul>
                    <button onclick="mostrarFormularioPago('Mágico San Cristóbal')">Comprar ahora</button>
                </div>
            </div>

            <div class="paquete">
                <h2>Excursión por San Cristóbal de las Casas y Comunidades Indígenas</h2>
                <p>Descubre el encanto de San Cristóbal de las Casas.</p>
                <p><strong>Precio: $4,200 MXN</strong></p>
                <button onclick="toggleInfo(this)">Más información</button>
                <div class="info-adicional oculto">
                    <ul>
                        <li>Duración: Día completo.</li>
                        <li>Actividades: Un recorrido por el centro de San Cristóbal de las Casas para explorar su arquitectura colonial, mercados de artesanías y la iglesia de Santo Domingo.<br> Luego, excursión a los pueblos indígenas de San Juan Chamula y Zinacantán para aprender sobre las costumbres, artesanías y tradiciones de las comunidades tsotsiles.</li>
                        <li>Ideal para: Viajeros interesados en la cultura local y la vida de las comunidades indígenas.</li>
                    </ul>
                    <button onclick="mostrarFormularioPago('Mágico San Cristóbal')">Comprar ahora</button>
                </div>
            </div>

            <div class="paquete">
                <h2>Excursión a la Selva Lacandona</h2>
                <p>Descubre los secretos de la selva.</p>
                <p><strong>Precio: $4,200 MXN</strong></p>
                <button onclick="toggleInfo(this)">Más información</button>
                <div class="info-adicional oculto">
                    <ul>
                        <li>Duración: Dos días (puede extenderse a más).</li>
                        <li>Actividades: Una excursión a la Selva Lacandona para hacer senderismo guiado por la selva y visitar zonas arqueológicas escondidas como Bonampak (famoso por sus murales) y Yaxchilán (con estructuras en medio de la vegetación). <br> Los guías lacandones comparten información sobre la flora, fauna y tradiciones de la región.</li>
                        <li>Ideal para: Amantes del ecoturismo, la aventura y la arqueología en un entorno natural.</li>
                    </ul>
                    <button onclick="mostrarFormularioPago('Mágico San Cristóbal')">Comprar ahora</button>
                </div>
            </div>
            
            <div class="paquete">
                <h2>Excursión a las Lagunas de Montebello y Cascada El Chiflón</h2>
                <p>Explora y Genera experiencias bellas</p>
                <p><strong>Precio: $4,200 MXN</strong></p>
                <button onclick="toggleInfo(this)">Más información</button>
                <div class="info-adicional oculto">
                    <ul>
                        <li>Duración: Día completo.</li>
                        <li>Actividades: Visita al Parque Nacional Lagunas de Montebello, que cuenta con más de 50 lagunas de colores que van del azul turquesa al verde esmeralda. Puedes explorar algunas de las lagunas en balsas de madera tradicionales.<br> Después, la excursión continúa hacia El Chiflón, una serie de cascadas impresionantes rodeadas de vegetación, con la principal llamada “Velo de Novia” (de unos 120 metros de altura).<br> Hay senderos para caminatas y áreas de descanso junto al agua, ideales para disfrutar del paisaje.</li>
                        <li>Ideal para: Quienes buscan una excursión con paisajes impresionantes, actividades al aire libre y contacto directo con la naturaleza.</li>
                    </ul>
                    <button onclick="mostrarFormularioPago('Mágico San Cristóbal')">Comprar ahora</button>
                </div>
            </div>

    </main>

     <!-- Formulario de pago -->
     <div id="formulario-pago" class="oculto">
            <h3>Formulario de Pago</h3>
            <form action="/procesar_pago" method="POST">
                <label for="nombre">Nombre Completo:</label>
                <input type="text" id="nombre" name="nombre" required>

                <label for="email">Correo Electrónico:</label>
                <input type="email" id="email" name="email" required>

                <label for="paquete">Paquete Seleccionado:</label>
                <input type="text" id="paquete" name="paquete" readonly>

                <label for="metodo-pago">Método de Pago:</label>
                <select id="metodo-pago" name="metodo-pago" required>
                    <option value="tarjeta-credito">Tarjeta de Crédito</option>
                    <option value="tarjeta-debito">Tarjeta de Débito</option>
                    <option value="deposito">Depósito Bancario</option>
                    <option value="transferencia">Transferencia Bancaria</option>
                </select>

                <!-- Información para pago con tarjeta -->
                <div id="info-tarjeta">
                    <label for="numero-tarjeta">Número de Tarjeta:</label>
                    <input type="text" id="numero-tarjeta" name="numero-tarjeta" maxlength="16">

                    <label for="fecha-expiracion">Fecha de Expiración:</label>
                    <input type="month" id="fecha-expiracion" name="fecha-expiracion">

                    <label for="cvv">CVV:</label>
                    <input type="text" id="cvv" name="cvv" maxlength="3">
                </div>

                <!-- Información para depósito/transferencia -->
                <div id="info-banco" class="oculto">
                    <p>Para realizar el depósito o transferencia, utilice la siguiente cuenta bancaria:</p>
                    <p><strong>Banco:</strong> Banco Ficticio</p>
                    <p><strong>Número de Cuenta:</strong> 4153 7895 7878 4959</p>
                    <p><strong>CLABE:</strong> 000123456789012345</p>
                </div>

                <button type="submit">Confirmar Compra</button>
            </form>
        </div>

    <script>
        function toggleInfo(button) {
            const infoAdicional = button.nextElementSibling;
            if (infoAdicional.classList.contains("oculto")) {
                infoAdicional.classList.remove("oculto");
                button.textContent = "Menos información";
            } else {
                infoAdicional.classList.add("oculto");
                button.textContent = "Más información";
            }
        }

        function mostrarFormularioPago(paquete) {
            document.getElementById("formulario-pago").classList.remove("oculto");
            document.getElementById("paquete").value = paquete;
        }

        document.getElementById("metodo-pago").addEventListener("change", function() {
            const infoTarjeta = document.getElementById("info-tarjeta");
            const infoBanco = document.getElementById("info-banco");

            if (this.value === "tarjeta-credito" || this.value === "tarjeta-debito") {
                infoTarjeta.classList.remove("oculto");
                infoBanco.classList.add("oculto");
            } else if (this.value === "deposito" || this.value === "transferencia") {
                infoTarjeta.classList.add("oculto");
                infoBanco.classList.remove("oculto");
            }
        });
    </script>
</body>
</html>