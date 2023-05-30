
<!-- ----- début viewInserted -->
<?php
require ($root . '/app/view/fragment/fragmentCaveHeader.html');
?>

<body>
  <div class="container">
    <?php
    include $root . '/app/view/fragment/fragmentMenu.php';
    include $root . '/app/view/fragment/fragmentCaveJumbotron.html';
    ?>
    <!-- ===================================================== -->
    <?php
    if ($results) {
     echo ("<h3>Le nouveau personne a été ajouté </h3>");
     echo("<ul>");
     echo ("<li>id = " . $results . "</li>");
     echo ("<li>nom = " . $_GET['nom'] . "</li>");
     echo ("<li>prenom = " . $_GET['prenom'] . "</li>");
     echo ("<li>adress = " . $_GET['adresse'] . "</li>");
     echo ("<li>login = " . $_GET['login'] . "</li>");
     echo ("<li>password = " . $_GET['password'] . "</li>");
     echo ("<li>statut = " . $_GET['statut'] . "</li>");
     echo ("<li>specialite_id = " . $_GET['specialite_id'] . "</li>");
     echo("</ul>");
    } else {
     echo ("<h3>Problème d'insertion du producteur</h3>");
     echo ("id = " . $_GET['nom']);
    }

    echo("</div>");
    
    include $root . '/app/view/fragment/fragmentCaveFooter.html';
    ?>
    <!-- ----- fin viewInserted -->    

    
    