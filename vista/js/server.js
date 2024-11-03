const express = require('express');
const bcrypt = require('bcrypt'); // Para hashear contraseñas
const mysql = require('mysql'); // O el paquete que uses para tu DB
const app = express();
app.use(express.urlencoded({ extended: true }));

const db = mysql.createConnection({
    host: 'localhost',
    user: 'tu_usuario',
    password: 'tu_contraseña',
    database: 'tu_base_de_datos'
});

// Conexión a la base de datos
db.connect((err) => {
    if (err) {
        console.error('Error conectando a la base de datos:', err);
        return;
    }
    console.log('Conectado a la base de datos');
});

app.post('/registro', async (req, res) => {
    const { nombre, correo, contraseña } = req.body;
    const hashedPassword = await bcrypt.hash(contraseña, 10);

    db.query('INSERT INTO usuarios (nombre, correo, contraseña) VALUES (?, ?, ?)', 
        [nombre, correo, hashedPassword], 
        (error, results) => {
            if (error) {
                return res.status(500).send('Error en la base de datos');
            }
            res.status(201).send('Usuario registrado');
        }
    );
});

// Iniciar el servidor
const PORT = 3000;
app.listen(PORT, () => {
    console.log(`Servidor escuchando en http://localhost:${PORT}`);
});

app.use(express.static('public'));
