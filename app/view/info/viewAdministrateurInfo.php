
<!-- ----- début viewAll -->
<?php

require ($root . '/app/view/fragment/fragmentHeader.html');
?>

<?php
include $root . '/app/view/fragment/fragmentMenu.php';
include $root . '/app/view/fragment/fragmentBody.html';
?>


<br></br>
<br></br>
<h1 class="heading">Liste des spécialité </h1>
<br></br>  
  
      
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

<br></br>
<h1 class="heading">Liste des praticiens</h1>
<br></br>   

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

<br></br>
<h1 class="heading">Liste des patients</h1>
<br></br>  

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

<br></br>
<h1 class="heading">Liste des administrateurs</h1>
<br></br> 

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

    <br></br> 
        <br></br> 
            <br></br> 
  <?php include $root . '/app/view/fragment/fragmentFooter.html'; ?>

  <!-- ----- fin viewAll -->
  
  
  