
<!-- ----- début fragmentCaveMenu -->
<?php
session_start();
if ($_SESSION['login'] != "vide") {
    $nom = $_SESSION['nom'];
    $prenom = $_SESSION['prenom'];
    $statut = $_SESSION['statut'];
}

?>

<nav class="navbar navbar-expand-lg bg-success fixed-top">
  <div class="container-fluid">
      
      <?php
      if ($_SESSION['login'] == 'vide') {
      echo '<a class="navbar-brand" href="router3.php?action=CaveAccueil">DUPONT-DURANT | | |</a>';
      echo '<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">';
      echo '<span class="navbar-toggler-icon"></span>';
      echo '</button>';
      echo '<div class="collapse navbar-collapse" id="navbarSupportedContent">';
      echo '<ul class="navbar-nav me-auto mb-2 mb-lg-0">';

     
      } else {
          
          if ($_SESSION['statut'] == '0') {
              
      echo '<a class="navbar-brand" href="router3.php?action=CaveAccueil">DUPONT-DURANT | administrateur | '.$prenom.' '.$nom.' |</a>';
      echo '<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">';
      echo '<span class="navbar-toggler-icon"></span>';
      echo '</button>';
      echo '<div class="collapse navbar-collapse" id="navbarSupportedContent">';
      echo '<ul class="navbar-nav me-auto mb-2 mb-lg-0">';
      echo '<li class="nav-item dropdown">';
      echo '<a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">administrateur</a>';
      echo '<ul class="dropdown-menu">';
      echo '<li><a class="dropdown-item" href="router3.php?action=specialiteReadAll">Liste des spécialités</a></li>';
      echo '<li><a class="dropdown-item" href="router3.php?action=specialiteReadId&target=specialiteReadOne">'; echo "Selection d'une spécialité par son id</a></li>";
      echo '<li><a class="dropdown-item" href="router3.php?action=specialiteCreate">'; echo "Insertion d'une nouvelle spécialité</a></li>";
      echo '<hr></hr>';
      echo '<li><a class="dropdown-item" href="router3.php?action=patientReadAll">Liste des praticiens avec leur spécialité</a></li>';
      echo '<li><a class="dropdown-item" href="router3.php?action=patientGetNumBarPraticien">Nombre de praticiens par patient</a></li>';
      echo '<hr></hr>';
      echo '<li><a class="dropdown-item" href="router3.php?action=administrateurInfo">Info</a></li>';
      echo '</ul>';
      echo '</li>';
 
              
          } elseif ($_SESSION['statut'] == '1') {
              
              
              
          } else {
              
              
              
          }
          
      }
      ?>

 <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Innovations</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="router3.php?action=specialiteReadAll">Liste des spécialités</a></li>
            <li><a class="dropdown-item" href="router3.php?action=specialiteReadId">Selection d'une spécialité par son id</a></li>
          </ul>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Se connecter</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="router3.php?action=logLogin">Login</a></li>
            <li><a class="dropdown-item" href="router3.php?action=logCreate">S'inscire</a></li>
            <li><a class="dropdown-item" href="router3.php?action=logout">Deconnexion</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav> 

<!-- ----- fin fragmentCaveMenu -->

