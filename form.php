<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
</body>
<form  action="thanks.php"  method="post">
    <div>
      <label  for="firstName">Prénom :</label>
      <input  type="text"  id="prénom"  name="user_firstName" required/>
    </div>
    <div>
      <label  for="lastName">Nom :</label>
      <input  type="text"  id="nom"  name="user_lastName" required/>
    </div>
    <div>
      <label  for="courriel">Courriel :</label>
        <input  type="email"  id="courriel"  name="user_email" required/>
    </div>
    <div>
      <label for="phone">Téléphone :</label>
      <input type="number" id="téléphone" name="phone" required/>
    </div>
    <div class="subject">
      <label for="subject">Sujet :</label>
      <select name="subject" id="subject" required/>
        <option>Recrutement</option>
        <option>Demande d'un rendez-vous</option>
        <option>Autres questions</option>
    </select>
    </div>
    <div>
      <label  for="message">Message :</label>
      <textarea  id="message"  name="user_message" required/></textarea>
    </div>
    <div  class="button">
      <button  type="submit">Envoyer votre message</button>
    </div>
  </form>
  <?php
        var_dump($_POST);
     ?>
</body>
</html>
