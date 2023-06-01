
<!-- ----- debut Controllerpatient -->
<?php
require_once '../model/ModelPersonne.php';
require_once '../model/ModelSpecialite.php';
require_once '../model/ModelRendezvous.php';


class ControllerAdministrateur {
 // --- page d'acceuil
 public static function caveAccueil() {
  include 'config.php';
  $vue = $root . '/app/view/viewCaveAccueil.php';
  if (DEBUG)
   echo ("ControllerPatient : caveAccueil : vue = $vue");
  require ($vue);
 }
 
  // --- Liste des specialites
 public static function administrateurInfo() {
  $results1 = ModelSpecialite::getAll();
  $results2 = ModelPersonne::getAllPraticien();
  $results3 = ModelPersonne::getAllPatient();
  $results4 = ModelPersonne::getAllAdministrateur();
  // ----- Construction chemin de la vue
  include 'config.php';
  $vue = $root . '/app/view/info/viewAdministrateurInfo.php';
  if (DEBUG)
   echo ("ControllerSpecialite : specialiteReadAll : vue = $vue");
  require ($vue);
 }
 
  public static function patientReadAll() {
  $results = ModelPersonne::getAllPraticien();
  // ----- Construction chemin de la vue
  include 'config.php';
  $vue = $root . '/app/view/praticien/viewAll.php';
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
  $vue = $root . '/app/view/praticien/viewId.php';
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
  $vue = $root . '/app/view/praticien/viewRegion.php';
  if (DEBUG)
   echo ("ControllerPatient : patientReadRegion : vue = $vue");
  require ($vue);
 }
 
 public static function patientGetNum() {
  $results = ModelPatient:: getNum();
  
  include 'config.php';
  $vue = $root . '/app/view/praticien/viewNum.php';
  if (DEBUG)
   echo ("ControllerPatient : patientReadRegion : vue = $vue");
  require ($vue);
 } 
 
  public static function patientGetNumBarPraticien() {
  $results = ModelRendezvous:: getNomDePatient();
  
  include 'config.php';
  $vue = $root . '/app/view/rendezvous/viewNum.php';
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
  $vue = $root . '/app/view/praticien/viewAll.php';
  require ($vue);
 }

 // Affiche le formulaire de creation d'un patient
 public static function patientCreate() {
  // ----- Construction chemin de la vue
  include 'config.php';
  $vue = $root . '/app/view/praticien/viewInsert.php';
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
  $vue = $root . '/app/view/praticien/viewInserted.php';
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
<!-- ----- fin ControllerAdministrateur -->


