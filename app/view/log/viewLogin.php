
<?php 
require ($root . '/app/view/fragment/fragmentHeader.html');
?>

<?php
include $root . '/app/view/fragment/fragmentMenu.php';
include $root . '/app/view/fragment/fragmentBody.html';
?> 
<br></br>
<br></br>
<h1 class="heading">Connexion</h1>
<br></br>

    <form method='get' action='router3.php'>
        
        <input type="hidden" name='action' value='verifyLogin'>        
        <span>login : </span><input type="text" name='login' placeholder="login" class="box" value=''>
        <span>password :</span><input type="password" name='password' placeholder="password" class="box" value='' required>
        <button class="link-btn" type="submit">Connexion</button>
    
    </form>
<br></br>
<br></br>
<br></br>

  <?php include $root . '/app/view/fragment/fragmentFooter.html'; ?>

<!-- ----- fin viewInsert -->



