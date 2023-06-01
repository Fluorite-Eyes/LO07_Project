
<!-- ----- début viewInsert -->
<?php 
require ($root . '/app/view/fragment/fragmentHeader.html');
?>

<?php
include $root . '/app/view/fragment/fragmentMenu.php';
include $root . '/app/view/fragment/fragmentBody.html';
?> 

<br></br>
<br></br>
<h1 class="heading">Création d'une nouvelle spécialité</h1>
<br></br>

    <form method='get' action='router3.php'>
      
        <input type="hidden" name='action' value='specialiteCreated'>     
        <span>label : </span><input type="text" name='label' class="box" value=''>                              

        <button class="link-btn" type="submit">Go</button>
    </form>

<br></br>
<br></br>
<br></br>
  <?php include $root . '/app/view/fragment/fragmentFooter.html'; ?>

<!-- ----- fin viewInsert -->



