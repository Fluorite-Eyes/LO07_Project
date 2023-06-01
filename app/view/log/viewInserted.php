
<!-- ----- début viewInsert -->
 
<?php 
require ($root . '/app/view/fragment/fragmentCaveHeader.html');
?>

<?php
include $root . '/app/view/fragment/fragmentMenu.php';
include $root . '/app/view/fragment/fragmentBody.html';
?> 

<br></br>
<br></br>
<h1 class="heading">Le nouveau personne a été ajouté </h1>
<br></br>  
    <!-- ===================================================== -->
    <?php
    if ($results) {
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
    
    include $root . '/app/view/fragment/fragmentFooter.html';
    ?>
    <!-- ----- fin viewInserted -->    

    
    