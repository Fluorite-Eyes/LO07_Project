
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
<h1 class="heading">Nombre de praticiens par patient</h1>
<br></br>

    <table class = "table table-striped table-bordered">
      <thead>
        <tr>
          <th scope = "col">Patient Nom</th>
          <th scope = "col">Patient Prenom</th>
          <th scope = "col">Patient id</th>
          <th scope = "col">Numbre de praticien par patient</th>
        </tr>
      </thead>
      <tbody>
          <?php
          
          while ($row = $results->fetch(PDO::FETCH_ASSOC)) {
    echo ("<tr><td>".$row["nom"]."</td><td>".$row["prenom"]."</td><td>".$row["patient_id"]."</td><td>".$row["num"]."</td></tr>");
}
          
          ?>
      </tbody>
    </table>
<br></br>
<br></br>
<br></br><br></br>
  <?php include $root . '/app/view/fragment/fragmentFooter.html'; ?>

  <!-- ----- fin viewAll -->
  
  
  