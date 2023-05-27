
<!-- ----- debut Controllerpatient -->
<?php
require_once '../model/ModelPersonne.php';


class ControllerAdminstrateur {
 // --- page d'acceuil
 public static function caveAccueil() {
  include 'config.php';
  $vue = $root . '/app/view/viewCaveAccueil.php';
  if (DEBUG)
   echo ("ControllerPatient : caveAccueil : vue = $vue");
  require ($vue);
 }
 
  public static function adminstrateurPatientParPraticien() {
  $results = ModelPersonne:: getNomDePatient();
  
  include 'config.php';
  $vue = $root . '/app/view/patient/viewRegion.php';
  if (DEBUG)
   echo ("ControllerPatient : patientReadRegion : vue = $vue");
  require ($vue);
 }
 
}
?>
<!-- ----- fin ControllerPatient -->


