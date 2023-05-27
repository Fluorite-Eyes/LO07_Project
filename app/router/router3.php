
<!-- ----- debut Router1 -->
<?php
require ('../controller/ControllerProducteur.php');
require ('../controller/ControllerSpecialite.php');
require ('../controller/ControllerCave.php');
require ('../controller/ControllerPatient.php');


// --- récupération de l'action passée dans l'URL
$query_string = $_SERVER['QUERY_STRING'];

// fonction parse_str permet de construire 
// une table de hachage (clé + valeur)
parse_str($query_string, $param);

// --- $action contient le nom de la méthode statique recherchée
$action = htmlspecialchars($param["action"]);

// --- Liste des méthodes autorisées




switch ($action) {
 case "specialiteReadAll" :
 case "specialiteReadOne" :
 case "specialiteReadId" :
 case "specialiteCreate" :
 case "specialiteCreated" :
  ControllerSpecialite::$action($args);
  break;
 case "producteurReadAll" :
 case "producteurReadOne" :
 case "producteurReadId" :
 case "producteurCreate" :
 case "producteurCreated" :
 case "producteurReadRegion":
 case "producteurGetNum":
  ControllerProducteur::$action($args);
  break;
 case "patientReadAll":
  ControllerPatient::$action();
  break;
 case "myPropositions":
  ControllerCave::$action($args);
  break;



 // Tache par d茅faut
 default:
  $action = "caveAccueil";
  Controllerspecialite::$action();
}




?>
<!-- ----- Fin Router1 -->

