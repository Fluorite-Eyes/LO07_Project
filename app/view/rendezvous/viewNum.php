
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
          <th scope = "col">Patient id</th>
          <th scope = "col">Numbre de praticien par patient</th>
        </tr>
      </thead>
      <tbody>
          <?php
          
          while ($row = $results->fetch(PDO::FETCH_ASSOC)) {
    echo ("<tr><td>".$row["patient_id"]."</td><td>".$row["num"]."</td></tr>");
}
          
          ?>
      </tbody>
    </table>
  </div>
  <?php include $root . '/app/view/fragment/fragmentCaveFooter.html'; ?>

  <!-- ----- fin viewAll -->
  
  
  