
<!-- ----- début viewAll -->
<?php

require ($root . '/app/view/fragment/fragmentCaveHeader.html');
?>

<body>
  <div class="container">
      <?php
      include $root . '/app/view/fragment/fragmentCaveMenu.html';
      include $root . '/app/view/fragment/fragmentCaveJumbotron.html';
      ?>

<h3><font color="red">Liste des spécialité</font></h3>      
      
    <table class = "table table-striped table-bordered">
      <thead>
        <tr>
          <th scope = "col">id</th>
          <th scope = "col">label</th>
        </tr>
      </thead>
      <tbody>
          <?php
          // La liste des vins est dans une variable $results             
          foreach ($results1 as $element) {
           printf("<tr><td>%d</td><td>%s</td></tr>", $element->getId(), 
             $element->getLabel());
          }
          ?>
      </tbody>
    </table>

<h3><font color="red">Liste des praticiens</font></h3>      

<table class = "table table-striped table-bordered">
      <thead>
        <tr>
          <th scope = "col">id</th>
          <th scope = "col">nom</th>
          <th scope = "col">prenom</th>
          <th scope = "col">adresse</th>
          <th scope = "col">specialite</th>
        </tr>
      </thead>
      <tbody>
          <?php
          
          while ($row = $results2->fetch(PDO::FETCH_ASSOC)) {
              echo ("<tr><td>".$row["id"]."</td><td>".$row["nom"]."</td><td>".$row["prenom"]."</td><td>".$row["adresse"]."</td><td>".$row["label"]."</td></tr>");
              
          }
          
          ?>
      </tbody>
    </table>

<h3><font color="red">Liste des patients</font></h3>

<table class = "table table-striped table-bordered">
      <thead>
        <tr>
          <th scope = "col">id</th>
          <th scope = "col">nom</th>
          <th scope = "col">prenom</th>
          <th scope = "col">adresse</th>
          <th scope = "col">specialite</th>
        </tr>
      </thead>
      <tbody>
          <?php
          
          while ($row = $results3->fetch(PDO::FETCH_ASSOC)) {
              echo ("<tr><td>".$row["id"]."</td><td>".$row["nom"]."</td><td>".$row["prenom"]."</td><td>".$row["adresse"]."</td><td>".$row["label"]."</td></tr>");
              
          }
          
          ?>
      </tbody>
    </table>

<h3><font color="red">Liste des administrateurs</font></h3>

<table class = "table table-striped table-bordered">
      <thead>
        <tr>
          <th scope = "col">id</th>
          <th scope = "col">nom</th>
          <th scope = "col">prenom</th>
          <th scope = "col">adresse</th>
          <th scope = "col">specialite</th>
        </tr>
      </thead>
      <tbody>
          <?php
          
          while ($row = $results4->fetch(PDO::FETCH_ASSOC)) {
              echo ("<tr><td>".$row["id"]."</td><td>".$row["nom"]."</td><td>".$row["prenom"]."</td><td>".$row["adresse"]."</td><td>".$row["label"]."</td></tr>");
              
          }
          
          ?>
      </tbody>
    </table>

  </div>
    
  <?php include $root . '/app/view/fragment/fragmentCaveFooter.html'; ?>

  <!-- ----- fin viewAll -->
  
  
  