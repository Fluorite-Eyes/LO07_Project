
<!-- ----- debut ModelSpecialite -->

<?php
require_once 'Model.php';

class ModelLogin {
    public static function logLogin($login, $password) {
        $database = Model::getInstance();    
        $query = "select nom, prenom, statut, login from personne where login='$login' and password='$password'";
        $statement = $database->prepare($query);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        return $result;
        
 }
}
?>
<!-- ----- fin ModelSpecialite -->








