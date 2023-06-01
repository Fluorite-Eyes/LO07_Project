
<!-- ----- début viewInsert -->
<?php 
require ($root . '/app/view/fragment/fragmentHeader.html');
?>

<?php
include $root . '/app/view/fragment/fragmentMenu.php';
include $root . '/app/view/fragment/fragmentBody.html';
?> 

    <!-- ===================================================== -->
    <?php
    if ($results) {
     echo '<br></br><br></br><h1 class="heading">Le nouveau vin a été ajouté </h1><br></br>';
     echo('<form>');
     echo ("<span>id = " . $results . "</span>");
     echo '<br></br>';
     echo ("<span>label = " . $_GET['label'] . "</span>");
     echo("</form>");
    } else {
     echo('<form>');
     echo ("<span>Problème d'insertion du Specialite</span>");
     echo ('<span><span>id = " . $results . "</span>"</span>');
     echo("</form>");

    }
    
    echo '<br></br>';
    echo '<br></br>';
    echo '<br></br>';
    echo '<br></br>';
    echo '<br></br>';
    echo '<br></br>';
    echo '<br></br>';
    echo '<br></br>';
    
    include $root . '/app/view/fragment/fragmentFooter.html';
    ?>
    <!-- ----- fin viewInserted -->    

    
    