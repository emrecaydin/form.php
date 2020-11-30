
<form  action="thanks.php"  method="post">
<div>
  <label  for="nom">Nom :</label>
  <input  type="text"  id="nom"  name="user_name">
</div>
<div>
  <label  for="courriel">Courriel :</label>
    <input  type="email"  id="courriel"  name="user_email">
</div>
<div>
    <label for="phone">Numéro de téléphone</label>
    <input type="text" id="phone" name="phone_number">
</div>
<div>
    <label for="subject">Sujet</label>
    <textarea name="subject" id="subject" type="text"></textarea>
</div>
<div>
  <label  for="message">Message :</label>
  <textarea  id="message"  name="user_message"></textarea>
</div>
<div  class="button">
  <button  type="submit">Envoyer votre message</button>
</div>
</form>

<?php 



?>
