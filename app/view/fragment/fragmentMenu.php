
<!-- ----- début fragmentMenu -->
<?php

session_start();
if ($_SESSION['login'] != "vide") {
    $nom = $_SESSION['nom'];
    $prenom = $_SESSION['prenom'];
    $statut = $_SESSION['statut'];
    $login = $_SESSION['login'];
}

?>

<body>

<!-- header section starts  -->
<header class="header fixed-top">

   <div class="container">

       
      <div class="row align-items-center justify-content-between">
          
          
          <nav class="nav">
              <?php
              if ($_SESSION['login'] == 'vide') {
                  
                  echo '<a class="logo d-flex align-items-center" href="router3.php?action=CaveAccueil">CHEN Jiashun&nbsp;<span>|  |  |</span></a>';
                  
              } else {
                  if ($_SESSION['statut'] == '0') {
                      
                      echo '<a class="logo d-flex align-items-center" href="router3.php?action=CaveAccueil">CHEN Jiashun&nbsp; <span> | administrateur | '.$prenom.' '.$nom.' |</span></a>';
                      echo '<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Administrateur</a>';
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

                  } else if ($_SESSION['statut'] == '1') {
                  
              } else {
                  
              }
              }
              
              ?>

          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Innovations
          </a>
          <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="router3.php?action=specialiteReadAll">Liste des spécialités</a></li>
              <li><a class="dropdown-item" href="router3.php?action=specialiteReadId&target=specialiteReadOne">Selection d'une spécialité par son id</a></li>
          </ul>
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Se connecter
          </a>
          <ul class="dropdown-menu">
               <li><a class="dropdown-item" href="router3.php?action=logLogin">Login</a></li>
               <li><a class="dropdown-item" href="router3.php?action=logCreate">S'inscire</a></li>
               <li><a class="dropdown-item" href="router3.php?action=logout">Deconnexion</a></li>
          </ul>
          </nav>
         <div id="menu-btn" class="fas fa-bars"></div>
      </div>
   </div>

</header>

<!-- ----- fin fragmentMenu -->

