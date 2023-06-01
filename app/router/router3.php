
<!-- ----- debut Router3 -->
<?php
require ('../controller/ControllerProducteur.php');
require ('../controller/ControllerDoctolib.php');
require ('../controller/ControllerAdministrateur.php');
require ('../controller/ControllerLog.php');


// --- récupération de l'action passée dans l'URL
$query_string = $_SERVER['QUERY_STRING'];

// fonction parse_str permet de construire 
// une table de hachage (clé + valeur)
parse_str($query_string, $param);

// --- $action contient le nom de la méthode statique recherchée
$action = htmlspecialchars($param["action"]);

// --- Liste des méthodes autorisées

$args = null;

switch ($action) {
 case "specialiteReadAll" :
 case "specialiteReadOne" :
 case "specialiteReadId" :
 case "specialiteCreate" :
 case "specialiteCreated" :
 case "patientReadAll":
 case "patientGetNumBarPraticien":
 case "administrateurInfo":    
  ControllerAdministrateur::$action($args);
     break;
 case "logCreate" :
 case "logRegister" :
 case "logLogin" :
 case "logLoginError" :
 case "verifyLogin" :
 case "logout" :
  ControllerLog::$action();
     break;
 default:
  $action = "doctolibAccueil";
  ControllerDoctolib::$action();
}




?>
<!-- ----- Fin Router3 -->

