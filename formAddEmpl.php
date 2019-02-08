
<!DOCTYPE html>
<?php

include 'header.php';

?>

  <div class="pusher">
  <br> <br> 
    <h2 class="ui header">
  <i class="edit icon"></i>
  <div class="content">
    Ajout employé
  </div>
</h2>

<form class="ui form " id="form" action = "valAddEmpl.php" method = "post">

     <div class="field">
    <label>Nom</label>
    <input type="text" name="Nom" placeholder="Nom" maxlength="30" > <br>
  </div>
  <div class="field">
    <label>Prenom</label>
    <input type="text" name="Prenom" placeholder="Prénom" maxlength="30" > <br>
  </div>
  <div class="field">
          <label>Sexe</label>
          <select class="ui fluid search dropdown" name="Sexe">
            <option value="F">Femme</option>
            <option value="M">Homme</option>
          </select>
    <!-- <label>Sexe</label>
    <input type="text" name="Sexe" placeholder="Sexe" maxlength="30" > <br> -->
  </div>
  <div class="field">
    <label>Adresse</label>
    <input type="text" name="Adresse" placeholder="Adresse" maxlength="30" > <br>
  </div>
  <div class="field">
    <label>Date de naissance</label>
    <input type="text" name="Date" placeholder="Date de naissance" maxlength="30" > <br>
  </div>
  <div class="inline fields">
    <label>Quel est votre department?</label>
    <div class="field">
      <div class="ui radio checkbox">
        <input type="radio" name="Type" tabindex="0" value="1" >
        <label>Vente</label>
      </div>
    </div>
    <div class="field">
      <div class="ui radio checkbox">
        <input type="radio" name="Type" tabindex="0" value="2">
        <label>Approvisionnement</label>
      </div>
    </div>
    <div class="field">
      <div class="ui radio checkbox">
        <input type="radio" name="Type" tabindex="0" value="3">
        <label>Reclamations</label>
      </div>
    </div>
  </div>
  <!-- <div class="field">
    <div class="ui checkbox">
      <input type="checkbox" tabindex="0" >
      <label>I agree to the Terms and Conditions</label>
    </div> -->
  <button class="ui floated labeled icon positive button" type="submit"><i class='check circle outline icon'></i>Ajouter</button>
  <div class="ui error message"></div>

</form>
</div>



</body>

</html>