
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

    <table class = "table table-striped table-bordered">
      <thead>
        <tr>
          <th scope = "col">Number of prodecteurs in region</th>
          <th scope = "col">Number of prodecteurs in region</th>
        </tr>
      </thead>
      <tbody>
          <?php
          
          while ($row = $results->fetch(PDO::FETCH_ASSOC)) {
    echo ("<tr><td>".$row["region"]."</td><td>".$row["num"]."</td></tr>");
}
          
          ?>
      </tbody>
    </table>
  </div>
  <?php include $root . '/app/view/fragment/fragmentCaveFooter.html'; ?>

  <!-- ----- fin viewAll -->
  
  
  