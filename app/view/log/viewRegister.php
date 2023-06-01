
<!-- ----- début viewInsert -->
 
<?php 
require ($root . '/app/view/fragment/fragmentCaveHeader.html');
?>

<?php
include $root . '/app/view/fragment/fragmentMenu.php';
include $root . '/app/view/fragment/fragmentBody.html';
?> 
<br></br>
<br></br>
<h1 class="heading">Enregistrer</h1>
 <br></br>


    <form method='get' action='router3.php'>

        <input type="hidden" name='action' value='logRegister'>        
        <span>nom : </span><input type="text" name='nom' placeholder="nom" class="box" value=''>
        <span>prenom : </span><input type="text" name='prenom' placeholder="prenom" class="box" value=''>
        <span>adresse : </span><input type="text" name='adresse' placeholder="adresse" class="box" value=''>
        <span>login : </span><input type="text" name='login' placeholder="login" class="box" value=''>
        <span>password : </span><input type="password" name='password' placeholder="password" class="box" value=''>

        <span>Votre statut : </span>
        <br></br>
        <select id="statut" name="statut" class="select-list" value="0">
            <option value="0">administrateur</option>
            <option value="1">praticien</option>
            <option value="2">patient</option>
        </select>
        <br></br>
        <span>Votre spécialité : </span>
        <br></br>
        <select name="specialite_id" id="specialite" class="select-list" value="0">
            <?php  (integer)$i = 0;?><?php foreach ($options as $option) {?><option value=<?php echo $i; ?>><?php echo $option; ?> </option><?php $i++;}?>
        </select>
        <br></br>
      <button class="link-btn" type="submit">Enregistrer</button>
    </form>

  <?php include $root . '/app/view/fragment/fragmentFooter.html'; ?>

<!-- ----- fin viewInsert -->



