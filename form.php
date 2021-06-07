<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>
    
<form action="thanks.php" method="post">
    <div>
        <label for="name"> Nom :</label>
        <input type="text" id="name" name="user_name">
    </div>
    <div>
        <label for="prenom"> Prénom :</label>
        <input type="text" id="prenom" name="user_prenom">
    </div>
    <div>
        <label for="mail"> Votre adresse mail:</label>
        <input type="email" id="mail" name="user_mail">
    </div>
    <div>
        <label for="phone"> Téléphone :</label>
        <input type="text" id="phone" name="user_phone">
    </div>
    <div>
    <label for="subjectSelect">Choissisez la raison de votre contact</label>

<select name="sujet" id="subjectSelect">
    <option value="">--Choissisez le sujet--</option>
    <option value="Lorem">Lorem</option>
    <option value="Lorem">Lorem</option>
    <option value="Lorem">Lorem</option>
    <option value="Lorem">Lorem</option>
    <option value="Lorem">Lorem</option>
    <option value="Lorem">Lorem</option>
</select>
    </div>
    <div>
        <label for="msg"> Message :</label>
        <textarea id="msg" name="user_message"></textarea>
    </div>
    <input type="submit" value="Envoyer le formulaire">
</form>
</body>
</html>