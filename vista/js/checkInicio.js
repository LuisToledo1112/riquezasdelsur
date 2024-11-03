function checkSession() {
    const isLoggedIn = localStorage.getItem('loggedIn');
    const sessionButton = document.getElementById('session-button');
    const dropdownMenu = document.getElementById('dropdown-menu');

    if (isLoggedIn) {
        sessionButton.innerHTML = 'Sesión Iniciada';
        dropdownMenu.classList.remove('show'); // Cierra el menú al iniciar sesión
    } else {
        sessionButton.innerHTML = 'Iniciar Sesión';
        dropdownMenu.classList.remove('show'); // Asegúrate de que el menú esté cerrado
    }
}

function toggleDropdown() {
    const dropdownMenu = document.getElementById('dropdown-menu');
    dropdownMenu.classList.toggle('show'); // Cambia el estado del menú
}

function logIn() {
    localStorage.setItem('loggedIn', 'true');
    window.location.href = 'vista/index.php'; // Redirige a la página principal
}

function logOut() {
    localStorage.removeItem('loggedIn');
    checkSession(); // Actualiza el botón
    toggleDropdown(); // Cierra el menú
}

// Verifica el estado al cargar la página
window.onload = checkSession;