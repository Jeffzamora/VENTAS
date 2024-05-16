<?php
// Determinar si estamos en producción o en localhost
$is_production = $_SERVER['SERVER_NAME'] !== 'localhost';

// Configuración de la base de datos
if ($is_production) {
    define('DB_SERVER', 'devzamora.com');
    define('DB_NAME', 'ventas');
    define('DB_USER', 'JZ008US00002');
    define('DB_PASS', 'Zamora97');
} else {
    define('DB_SERVER', 'localhost');
    define('DB_NAME', 'ventas');
    define('DB_USER', 'root');
    define('DB_PASS', '');
}