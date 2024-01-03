<?php

function debuguear($variable): string
{
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    exit;
}

// Escapa / Sanitizar el HTML
function s($html): string
{
    $s = htmlspecialchars($html);
    return $s;
}

function esUltimo($actual, $proximo): bool {
    if($actual !== $proximo) {
        return true;
    }
    return false;
}

// Función que revisa que el usuario esté autenticado
function isAuth(): void
{ // ': void' es el tipo de retorno que se espera de la función, en este caso 'void' significa que la función no devuelve ningún valor, simplemente redirige al usuario.
    if (!isset($_SESSION['login'])) { // !isset sirve para verificar si la variable de sesión 'login' no está definida (es decir el usuaro no está autenticado)
        header('Location: /'); // Si el user no está autenticado, lo redirecciona a '/'
    }
}

function isAdmin() : void {

    if(!isset($_SESSION['admin'])) {
        echo "No es un administrador. Redirigiendo...";
        header('Location: /');
    }
}
