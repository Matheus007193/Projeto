<?php

@session_start();

$_SESSION = array();
session_destroy();
header('location: pagina_login.html');
exit;

?>