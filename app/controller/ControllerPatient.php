
<!-- ----- debut Controllerpatient -->
<?php
require_once '../model/ModelPersonne.php';


class ControllerPatient {
 // --- page d'acceuil
 public static function caveAccueil() {
  include 'config.php';
  $vue = $root . '/app/view/viewCaveAccueil.php';
  if (DEBUG)
   echo ("ControllerPatient : caveAccueil : vue = $vue");
  require ($vue);
 }
 
  public static function patientReadAll() {
  $results = ModelPersonne::getAllPatient();
  // ----- Construction chemin de la vue
  include 'config.php';
  $vue = $root . '/app/view/patient/viewAll.php';
  if (DEBUG)
   echo ("ControllerPatient : patientReadAll : vue = $vue");
  require ($vue);
 }

 // --- Liste des patients
 public static function patientReadId($args) {
  if (DEBUG) echo ("ControllerPatient:patientReadId:begin</br>");
  $results = ModelPatient::getAllId();

  // ----- Construction chemin de la vue
  $target = $args['target'];
  if (DEBUG) echo ("ControllerPatient:patientReadId : target = $target</br>");
  include 'config.php';
  $vue = $root . '/app/view/patient/viewId.php';
  require ($vue);
 }
 
  public static function patientDeleted() {
  $patient_id = $_GET['id'];
  $results = ModelPatient::delete($patient_id);

  // ----- Construction chemin de la vue
  include 'config.php';
  $vue = $root . '/app/view/viewCaveAccueil.php';
  require ($vue);
 }
 
 public static function patientReadRegion() {
  $results = ModelPatient:: getRegionNonDuplicated();
  
  include 'config.php';
  $vue = $root . '/app/view/patient/viewRegion.php';
  if (DEBUG)
   echo ("ControllerPatient : patientReadRegion : vue = $vue");
  require ($vue);
 }
 
 public static function patientGetNum() {
  $results = ModelPatient:: getNum();
  
  include 'config.php';
  $vue = $root . '/app/view/patient/viewNum.php';
  if (DEBUG)
   echo ("ControllerPatient : patientReadRegion : vue = $vue");
  require ($vue);
 } 


 // Affiche un patient particulier (id)
 public static function patientReadOne() {
  $patient_id = $_GET['id'];
  $results = ModelPatient::getOne($patient_id);

  // ----- Construction chemin de la vue
  include 'config.php';
  $vue = $root . '/app/view/patient/viewAll.php';
  require ($vue);
 }

 // Affiche le formulaire de creation d'un patient
 public static function patientCreate() {
  // ----- Construction chemin de la vue
  include 'config.php';
  $vue = $root . '/app/view/patient/viewInsert.php';
  require ($vue);
 }

 // Affiche un formulaire pour récupérer les informations d'un nouveau patient.
 // La clé est gérée par le systeme et pas par l'internaute
 public static function patientCreated() {
  // ajouter une validation des informations du formulaire
  $results = ModelPatient::insert(
      htmlspecialchars($_GET['nom']), htmlspecialchars($_GET['prenom']), htmlspecialchars($_GET['region'])
  );
  // ----- Construction chemin de la vue
  include 'config.php';
  $vue = $root . '/app/view/patient/viewInserted.php';
  require ($vue);
 }
 
}
?>
<!-- ----- fin ControllerPatient -->


