<?php
require('class/db.php')
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WikiFilms - login -</title>
</head>
<body>
<form action="#" method="post">
  <h1>WIKI MOVIES</h1>
    <h2>Se connecter</h2>
    <input type="text"name="email" placeholder="Email" required/>
    <input type="password"name="password" placeholder="Mot de passe" required/>
    <input type="submit" name="submit" value="Se connecter"/>
    <p>Pas de compte?<a href="register.php">inscrivez-vous ici</a></p>
</form>

<?php
require "class/user.php";

if(isset($_POST['valid'])){
    $user = new User();
    $user->username= $_POST["username"];
    $user->email= $_POST["email"];
    $user->password= $_POST["password"];

    print_r($user);
}
?>
</body>
</html>