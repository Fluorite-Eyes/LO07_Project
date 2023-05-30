
<!-- ----- début viewInsert -->
 
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
          <h3><font color="red">Formulaire d'inscription</font></h3>
        <input type="hidden" name='action' value='logCreated'>        
        <label class='w-25' for="id">nom : </label><input type="text" name='nom' size='75' value=''> <br/> 
        <h5></h5>
        <label class='w-25' for="id">prenom : </label><input type="text" name='prenom' size='75' value=''> <br/>  
        <h5></h5>
        <label class='w-25' for="id">adresse : </label><input type="text" name='adresse' size='75' value=''> <br/> 
        <h5></h5>
        <label class='w-25' for="id">login : </label><input type="text" name='login' size='37.5' value=''> <br/> 
        <h5></h5>
        <label class='w-25' for="id">password : </label><input type="password" name='password' size='37.5' value=''> <br/> 
        <h5></h5>
        <label class='w-25' for="id">Votre statut : </label>
        <select id="statut" name="statut" class="form-control select-list" value="0">
            <option value="0">administrateur</option>
            <option value="1">praticien</option>
            <option value="2">patient</option>
        </select> <br/> 
        <h5></h5>  
        <label class='w-25' for="id">Votre spécialité : </label>
        <select name="specialite_id" id="specialite" class="form-control select-list" value="0">
            <?php  (integer)$i = 0;?><?php foreach ($options as $option) {?><option value=<?php echo $i; ?>><?php echo $option; ?> </option><?php $i++;}?>
        </select>
      </div>
      <p/>
       <br/> 
      <button class="btn btn-primary" type="submit">Go</button>
    </form>
    <p/>
  </div>
  <?php include $root . '/app/view/fragment/fragmentCaveFooter.html'; ?>

<!-- ----- fin viewInsert -->



