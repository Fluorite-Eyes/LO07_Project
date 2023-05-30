
<!-- ----- début fragmentCaveMenu -->
<?php

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
      echo '<a class="navbar-brand" href="router3.php?action=CaveAccueil">DUPONT-DURANT |||</a>';
      }
      ?>
      
      <a class="navbar-brand" href="router3.php?action=CaveAccueil">DUPONT-DURANT |  | Paul GAILLARD |</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">administrateur</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="router3.php?action=specialiteReadAll">Liste des spécialités</a></li>
            <li><a class="dropdown-item" href="router3.php?action=specialiteReadId&target=specialiteReadOne">Selection d'une spécialité par son id</a></li>
            <li><a class="dropdown-item" href="router3.php?action=specialiteCreate">Insertion d'une nouvelle spécialité</a></li>
            <hr></hr>
            <li><a class="dropdown-item" href="router3.php?action=patientReadAll">Liste des praticiens avec leur spécialité</a></li>
            <li><a class="dropdown-item" href="router3.php?action=patientGetNumBarPraticien">Nombre de praticiens par patient</a></li>
            <hr></hr>
            <li><a class="dropdown-item" href="router3.php?action=administrateurInfo">Info</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Innovations</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="router3.php?action=specialiteReadAll">Liste des spécialités</a></li>
            <li><a class="dropdown-item" href="router3.php?action=specialiteReadId">Selection d'une spécialité par son id</a></li>
            <li><a class="dropdown-item" href="router3.php?action=specialiteCreate">Insertion d'une nouvelle spécialité</a></li>
            <li><a class="dropdown-item" href="router3.php?action=specialiteReadRegion">Liste des praticiens avec leur spécialité</a></li>
            <li><a class="dropdown-item" href="router3.php?action=specialiteGetNum">Nombre de praticiens par patient</a></li>
            <li><a class="dropdown-item" href="router3.php?action=specialiteGetNum">Info</a></li>
          </ul>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Se connecter</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="router3.php?action=logLogin">Login</a></li>
            <li><a class="dropdown-item" href="router3.php?action=logCreate">S'inscire</a></li>
            <li><a class="dropdown-item" href="router3.php?action=myPropositions">Deconnexion</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav> 

<!-- ----- fin fragmentCaveMenu -->

