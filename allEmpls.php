<?php
include 'header.php';
?>

  <div class="pusher">
    <br> <br> 
    
    <h2 class="ui header">
  <i class="settings icon"></i>
  <div class="content">
    Gestion des employés
    <div class="sub header">Liste des employés</div>
  </div>
</h2>
<table class="ui seven column inverted grey table">
<thead class="full-width">
<tr>
<th>Nom</th>
<th>Prenom</th>
<th>Sexe</th>
<th>Adresse</th>
<th>Date de naissance</th>
<th>Service</th>
<th></th>
</tr>
</thead>
<tbody>

<?php
include 'allEmplsControl.php'
?>
 </tbody>
 <tfoot >
  <tr>
  <th colspan="6"></th>
  <th>
        <a href="formAddEmpl.php" class="ui small right floated labeled icon button">
          <i class="user icon"></i>    Ajouter employé
        </a>
        </th> 
      </tr>
      </tfoot>
</table>

</div>
</body>