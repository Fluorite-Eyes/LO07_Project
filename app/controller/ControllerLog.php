
<!-- ----- debut Controllerpatient -->
<?php
require_once '../model/ModelPersonne.php';
require_once '../model/ModelSpecialite.php';
require_once '../model/ModelRendezvous.php';
require_once '../model/ModelLogin.php';


class ControllerLog {
 // --- page d'acceuil
 public static function caveAccueil() {
  include 'config.php';
  $vue = $root . '/app/view/viewCaveAccueil.php';
  if (DEBUG)
   echo ("ControllerPatient : caveAccueil : vue = $vue");
  require ($vue);
 }
 
 // Affiche le formulaire de creation d'un producteur
 public static function logCreate() {
  // ----- Construction chemin de la vue
  $options = ModelSpecialite::getAllSpecialite();
  // ----- Construction chemin de la vue
  include 'config.php';
  $vue = $root . '/app/view/log/viewLog.php';
  require ($vue);
 }

 // Affiche un formulaire pour récupérer les informations d'un nouveau producteur.
 public static function logCreated() {
  // ajouter une validation des informations du formulaire
  $results = ModelPersonne::insert(
      htmlspecialchars($_GET['nom']), htmlspecialchars($_GET['prenom']), htmlspecialchars($_GET['adresse']), htmlspecialchars($_GET['login']), htmlspecialchars($_GET['password']), htmlspecialchars($_GET['statut']), htmlspecialchars($_GET['specialite_id'])
  );
  // ----- Construction chemin de la vue
  include 'config.php';
  $vue = $root . '/app/view/log/viewInserted.php';
  require ($vue);
 }
 
 // Login
  public static function logLogin() {

  include 'config.php';
  $vue = $root . '/app/view/log/viewLogin.php';
  require ($vue);
 }

 // Login Verify
 public static function verifyLogin() {
     session_start();
     $login = $_GET['login'];
     $password = $_GET['password'];
     $results = ModelLogin::logLogin($login, $password);
     	if($results){
		echo "<script>alert('success');</script>";
                $_SESSION['login'] = $login; // session
        $_SESSION['nom'] = $results['nom'];
        $_SESSION['prenom'] = $results['prenom'];
        $_SESSION['statut'] = $results['statut'];
       
        header("Refresh:0.1;url=router3.php?action=caveAccueil");
	} else{
		echo "<script>alert('fail, no login exist');</script>";
	}
 }
 
 public static function logout() {
     // Initialize the session.
session_start();
// Unset all of the session variables.
unset($_SESSION['login']);
// Finally, destroy the session.    
session_destroy();
echo "<script>alert('Logout seccessfully!');</script>";
// Include URL for Login page to login again.
session_start();
$_SESSION['login'] = "vide";
header("Refresh:0.1;url=router3.php?action=truc");
exit;
 }
}
?>
<!-- ----- fin ControllerAdministrateur -->


