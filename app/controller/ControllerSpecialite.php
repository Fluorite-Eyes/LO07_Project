
<!-- ----- debut ControllerSpecialite -->
<?php
require_once '../model/ModelSpecialite.php';

class ControllerSpecialite {
 // --- page d'acceuil
 public static function caveAccueil() {
  include 'config.php';
  $vue = $root . '/app/view/viewCaveAccueil.php';
  if (DEBUG)
   echo ("ControllerSpecialite : caveAccueil : vue = $vue");
  require ($vue);
 }

 // --- Liste des specialites
 public static function specialiteReadAll() {
  $results = ModelSpecialite::getAll();
  // ----- Construction chemin de la vue
  include 'config.php';
  $vue = $root . '/app/view/specialite/viewAll.php';
  if (DEBUG)
   echo ("ControllerSpecialite : specialiteReadAll : vue = $vue");
  require ($vue);
 }

 // Affiche un formulaire pour sélectionner un id qui existe
 public static function specialiteReadId($args) {

  $results = ModelSpecialite::getAllId();

  // ----- Construction chemin de la vue
  $target = $args['target'];
  if (DEBUG) echo ("ControllerSpecialite:SpecialiteReadId : target = $target</br>");
  include 'config.php';
  $vue = $root . '/app/view/specialite/viewId.php';
  require ($vue);
 }

 // Affiche un specialite particulier (id)
 public static function specialiteReadOne() {
  $specialite_id = $_GET['id'];
  $results = ModelSpecialite::getOne($specialite_id);

  // ----- Construction chemin de la vue
  include 'config.php';
  $vue = $root . '/app/view/specialite/viewAll.php';
  require ($vue);
 }

 // Affiche le formulaire de creation d'un specialite
 public static function specialiteCreate() {
  // ----- Construction chemin de la vue
  include 'config.php';
  $vue = $root . '/app/view/specialite/viewInsert.php';
  require ($vue);
 }

 // Affiche un formulaire pour récupérer les informations d'un nouveau specialite.
 // La clé est gérée par le systeme et pas par l'internaute
 public static function specialiteCreated() {
  // ajouter une validation des informations du formulaire
  $results = ModelSpecialite::insert(
      htmlspecialchars($_GET['label'])
  );
  // ----- Construction chemin de la vue
  include 'config.php';
  $vue = $root . '/app/view/specialite/viewInserted.php';
  require ($vue);
 }
 
}
?>
<!-- ----- fin Controllerspecialite -->


