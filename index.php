<?php

session_start();
$_SESSION['login'] = "vide";
header('Location: app/router/router3.php?action=truc');

?>

