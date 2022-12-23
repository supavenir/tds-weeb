<?php
$data=yaml_parse_file('data/contact.yml');

/*echo "<pre>";
print_r($data);
echo "</pre>";*/

echo "<h1> CONTACT</h1>";
?>

<form action="php/mail.php" method="POST">

<p>
   Votre prénom et votre nom :<br />
   <input type="text" name="nom" value="" placeholder="Prenom et nom"/>
</p>
<p>
   Votre e-mail :<br />
   <input type="text" name="mail" value="" placeholder="mail de l'emetteur"/>
</p>
<p>
   Vous êtes<br />
   <select name="sexe">
      <option value="1">homme</option>
      <option value="2" selected="selected">femme</option>
      <option value="3">MR Morin</option>
   </select>
</p>
<p>
   Objet du message :<br />
   <input name="objet" rows="6" placeholder="Objet du message"/>
</p>
<p>
  Contenu du message :<br />
   <textarea name="contenu" rows="6" cols="81" placeholder="contenu du message"></textarea>
</p>
<p>
   <input type="submit" value="Envoyer" />
</p>
</form>




<?php
foreach($data['réseaux'] AS $contact=>$tab){
    echo '<a class="icn" target="_blank" href="'.$tab['url'].'"><img src="'.$tab['icone'].'" /></a>';
}

?>

