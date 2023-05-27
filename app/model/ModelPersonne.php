
<!-- ----- debut ModelPersonne -->

<?php
require_once 'Model.php';

class ModelPersonne {
 private $id, $nom, $prenom, $adresse, $login, $password, $statut, $specialite_id;


 // pas possible d'avoir 2 constructeurs
 public function __construct($id=NULL, $nom=NULL, $prenom=NULL, $adresse=NULL, $login=NULL, $password=NULL, $statut=NULL, $specialite_id=NULL) {
  // valeurs nulles si pas de passage de parametres
  if (!is_null($id)) {
   $this->id = $id;
   $this->nom = $nom;
   $this->prenom = $prenom;
   $this->adresse = $adresse;
   $this->login = $login;
   $this->password = $password;
   $this->statut = $statut;
   $this->specialite_id = $specialite_id;
  }
 }

 function setId($id) {
  $this->id = $id;
 }

 function setNom($nom) {
  $this->nom = $nom;
 }

 function setPrenom($prenom) {
  $this->prenom = $prenom;
 }

 function setAdresse($adresse) {
  $this->adresse = $adresse;
 }
 
  function setPassword($password) {
  $this->password = $password;
 }

   function setStatut($statut) {
  $this->statut = $statut;
 }
 
   function setSpecialite_id($specialite_id) {
  $this->specialite_id = $specialite_id;
 }
 function getId() {
  return $this->id;
 }

 function getnom() {
  return $this->nom;
 }

 function getStatut() {
  return $this->statut;
 }

 function getAdresse() {
  return $this->adresse;
 }
 
  function getLogin() {
  return $this->login;
 }
 
   function getStatus() {
  return $this->statut;
 }
 
  function getPassword() {
  return $this->password;
 }
 
  function getSpecialite_id() {
  return $this->specialite_id;
 }
 
 
// retourne une liste des id patient
 public static function getPatientId() {
  try {
   $database = Model::getInstance();
   $query = "select id from personne where statut = 2";
   $statement = $database->prepare($query);
   $statement->execute();
   $results = $statement->fetchAll(PDO::FETCH_COLUMN, 0);
   return $results;
  } catch (PDOException $e) {
   printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
   return NULL;
  }
 }

 
   public static function getAllPatient() {
  try {
   $database = Model::getInstance();
   $query = " SELECT personne.id, personne.nom, personne.prenom, personne.adresse, specialite.label from personne join specialite on personne.specialite_id = specialite.id where personne.statut = 2 ;";
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
 
    public static function getNomDePatient() {
  try {
   $database = Model::getInstance();
   $query = " SELECT patient_id, COUNT(*) AS num FROM rendezvous GROUP BY praticien_id;";
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
 
 
  public static function getNum() {
  try {
   $database = Model::getInstance();
   $query = " SELECT adresse, COUNT(*) AS num FROM producteur GROUP BY adresse;";
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
 

 

 public static function getMany($query) {
  try {
   $database = Model::getInstance();
   $statement = $database->prepare($query);
   $statement->execute();
   $results = $statement->fetchAll(PDO::FETCH_CLASS, "ModelProducteur");
   return $results;
  } catch (PDOException $e) {
   printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
   return NULL;
  }
 }

 public static function getAll() {
  try {
   $database = Model::getInstance();
   $query = "select * from producteur";
   $statement = $database->prepare($query);
   $statement->execute();
   $results = $statement->fetchAll(PDO::FETCH_CLASS, "ModelProducteur");
   return $results;
  } catch (PDOException $e) {
   printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
   return NULL;
  }
 }

 public static function getOne($id) {
  try {
   $database = Model::getInstance();
   $query = "select * from producteur where id = :id";
   $statement = $database->prepare($query);
   $statement->execute([
     'id' => $id
   ]);
   $results = $statement->fetchAll(PDO::FETCH_CLASS, "ModelProducteur");
   return $results;
  } catch (PDOException $e) {
   printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
   return NULL;
  }
 }

 public static function insert($nom, $prenom, $adresse) {
  try {
   $database = Model::getInstance();

   // recherche de la valeur de la clé = max(id) + 1
   $query = "select max(id) from producteur";
   $statement = $database->query($query);
   $tuple = $statement->fetch();
   $id = $tuple['0'];
   $id++;

   // ajout d'un nouveau tuple;
   $query = "insert into producteur value (:id, :nom, :prenom, :adresse)";
   $statement = $database->prepare($query);
   $statement->execute([
     'id' => $id,
     'nom' => $nom,
     'prenom' => $prenom,
     'adresse' => $adresse
   ]);
   return $id;
  } catch (PDOException $e) {
   printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
   return -1;
  }
 }


 
 public static function update() {
  try {
      
  } catch (Exception $ex) {

  }
  return null;
 }

 public static function delete() {
  echo ("ModelProducteur : delete() TODO ....");
  return null;
 }

}
?>
<!-- ----- fin ModelProducteur -->
