
<?php 
require ($root . '/app/view/fragment/fragmentCaveHeader.html');
?>

<body>
  <div class="container">
    <?php
      include $root . '/app/view/fragment/fragmentMenu.php';
      include $root . '/app/view/fragment/fragmentCaveJumbotron.html';
    ?> 

    <form role="form" method='get' action='router3.php'>
      <div class="form-group">
          <h3><font color="red">Formulaire de connexion</font></h3>
        <input type="hidden" name='action' value='verifyLogin'>        
        <label class='w-25' for="id">login : </label><input type="text" name='login' size='37.5' value=''> <br/> 
        <h5></h5>
        <label class='w-25' for="id">password : </label><input type="password" name='password' size='37.5' value=''> <br/> 
      </div>
      <p/>
       <br/> 
      <button class="btn btn-primary" type="submit">Go</button>
    </form>
    <p/>
  </div>
  <?php include $root . '/app/view/fragment/fragmentCaveFooter.html'; ?>

<!-- ----- fin viewInsert -->



