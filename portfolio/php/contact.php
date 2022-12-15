<?php
$data=yaml_parse_file('data/contact.yml');

/*echo "<pre>";
print_r($data);
echo "</pre>";*/

echo "<h1> CONTACT</h1>";
?>
<div class="form">
<form name="mon-formulaire1" action="page-envoi.html" method="get">
<p>
   <input type="radio" name="civi" value="Mme" /> Madame
   <input type="radio" name="civi" value="Mlle" /> Mademoiselle
   <input type="radio" name="civi" value="Mr" /> Monsieur
</p>
<p>
   Votre prénom :<br />
   <input type="text" name="prenom" value="" />
</p>
<p>
   Votre nom :<br />
   <input type="text" name="nom" value="" />
</p>
<p>
   Votre mot de passe :<br />
   <input type="password" name="passe" value="" />
</p>
<p>
   Vous êtes<br />
   <select name="profil">
      <option value="parti">Un particulier</option>
      <option value="profe" selected="selected">Un professionnel</option>
      <option value="insti">Un institutionnel</option>
   </select>
</p>
<p>
   Votre message :<br />
   <textarea name="le-message" rows="6" cols="40">Vous pouvez saisir ici un message.</textarea>
</p>
<p>
   <input type="submit" value="Envoyer" />
   <input type="reset" value="Annuler" />
</p>
</form>
</div>


<?php
foreach($data['réseaux'] AS $contact=>$tab){
    echo '<a class="icn" target="_blank" href="'.$tab['url'].'"><img src="'.$tab['icone'].'" /></a>';
}

?>

