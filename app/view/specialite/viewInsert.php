
<!-- ----- début viewInsert -->
 
<?php 
require ($root . '/app/view/fragment/fragmentCaveHeader.html');
?>

<body>
  <div class="container">
    <?php
      include $root . '/app/view/fragment/fragmentCaveMenu.html';
      include $root . '/app/view/fragment/fragmentCaveJumbotron.html';
    ?> 

    <form role="form" method='get' action='router3.php'>
      <div class="form-group">
          <h3><font color="red">Création d'une nouvelle spécialité</font></h3>
        <input type="hidden" name='action' value='specialiteCreated'>        
        <label class='w-25' for="id">label : </label><input type="text" name='label' size='75' value=''> <br/>                                  
      </div>
      <p/>
       <br/> 
      <button class="btn btn-primary" type="submit">Go</button>
    </form>
    <p/>
  </div>
  <?php include $root . '/app/view/fragment/fragmentCaveFooter.html'; ?>

<!-- ----- fin viewInsert -->



