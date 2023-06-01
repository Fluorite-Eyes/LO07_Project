
<!-- ----- debut Controllerproducteur -->
<?php

class ControllerDoctolib {
 // --- page d'acceuil
 public static function doctolibAccueil() {
  include 'config.php';
  $vue = $root . '/app/view/viewAccueil.php';

  require ($vue);
 }

 
 }
?>
<!-- ----- fin ControllerProducteur -->


