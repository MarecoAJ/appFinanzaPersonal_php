<?php
ini_set('display_errors', 1);
ini_set("log_errors", 1);
ini_set("error_log", "C:/xampp/htdocs/appFinanzaPersonal_php/php_error_lg");

require_once "controllers/control_rutas.php";

$inicio = new ControladorRutas();
$inicio -> index();