
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
<h1 class="heading">Liste des spécialité</h1>
<br></br>
      
    <form  method='get' action='router3.php'>
  
        <input type="hidden" name='action' value='specialiteReadOne'>
        <span>id : </span><select class="form-control" id='id' name='id' style="width: 100px">
            <?php
            foreach ($results as $id) {
             echo ("<option>$id</option>");
            }
            ?>
        </select>
        <br></br>
      <button class="link-btn" type="submit">Sélectionner</button>
    </form>
<br></br>
<br></br>
<br></br>
<br></br>

  <?php include $root . '/app/view/fragment/fragmentFooter.html'; ?>

  <!-- ----- fin viewId -->