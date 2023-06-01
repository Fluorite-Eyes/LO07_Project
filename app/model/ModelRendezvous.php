
<!-- ----- debut ModelSpecialite -->

<?php
require_once 'Model.php';

class ModelRendezvous {
 private $id, $patient_id, $praticien_id, $rdv_date;

 // pas possible d'avoir 2 constructeurs
 public function __construct($id = NULL, $patient_id = NULL, $praticien_id = NULL, $rdv_date = NULL) {
  // valeurs nulles si pas de passage de parametres
  if (!is_null($id)) {
   $this->id = $id;
   $this->patient_id = $patient_id;
   $this->praticien_id = $praticien_id;
   $this->rdv_date = $rdv_date;
  }
 }

 function setId($id) {
  $this->id = $id;
 }

 function setPatient_id($patient_id) {
  $this->patient_id = $patient_id;
 }
 
  function setPraticien_id($praticien_id) {
  $this->praticien_id = $praticien_id;
 }
 
  function setRdv_date($rdv_date) {
  $this->rdv_date = $rdv_date;
 }

 function getId() {
  return $this->id;
 }

 function getPatient_id() {
  return $this->patient_id;
 }
 
  function getPraticien_id() {
  return $this->praticien_id;
 }
 
  function getRdv_date() {
  return $this->rdv_date;
 }
 
    public static function getNomDePatient() {
  try {
   $database = Model::getInstance();
   $query = " SELECT personne.nom, personne.prenom, rendezvous.patient_id, COUNT(*) AS num FROM personne JOIN rendezvous ON personne.id = rendezvous.patient_id GROUP BY patient_id;";
   $results = $database->query($query);
   $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
   $stmt = $database->prepare($query);
   $stmt->execute();
   return $stmt;
  } catch (PDOException $e) {
   printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
   return NULL;
  }
 }
}
?>
<!-- ----- fin ModelSpecialite -->
