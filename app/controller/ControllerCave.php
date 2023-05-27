
<!-- ----- debut Controllerproducteur -->
<?php
require_once '../model/ModelProducteur.php';

class ControllerCave {
 // --- page d'acceuil
 public static function caveAccueil() {
  include 'config.php';
  $vue = $root . '/app/view/viewCaveAccueil.php';
  if (DEBUG)
   echo ("ControllerProducteur : caveAccueil : vue = $vue");
  require ($vue);
 }

 // --- Liste des producteurs
 public static function myPropositions() {
  include 'config.php';
  $vue = $root . '/app/view/myPropositions.php';
  if (DEBUG)
   echo ("ControllerCave : myPropositions : vue = $vue");
  require ($vue);
 }
 
}
?>
<!-- ----- fin ControllerProducteur -->


