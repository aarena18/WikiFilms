<?php
require('class/db.php');

?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>WikiFilms - register -</title>
  </head>
  <body>

  <!--------------------- CREATION FORM --------------------->

  <form action="#" method="post">
    <h1>WIKI MOVIES</h1>
    <h2>S'inscrire</h2>
    <input type="text"name="username" placeholder="Nom d'utilisateur" required/>
    <input type="text" name="firstName" placeholder="Prénom" required/>
    <input type="text" name="lastName" placeholder="Nom" required/>
    <input type="text" name="email" placeholder="Email" required/>
    <input type="password"name="password" placeholder="Mot de passe" required/>
    <input type="submit" name="valid" value="S'inscrire"/>
    <p>Déjà inscrit?<a href="login.php">Connectez-vous ici</a></p>
  </form>


<?php 

/*   ---------------- GET VALUES FORM -------------------------   */

require "class/user.php";

if(isset($_POST['valid'])){
    $user = new User();
    $user->username= $_POST["username"];
    $user->firstName= $_POST["firstName"];
    $user->lastName= $_POST["lastName"];
    $user->email= $_POST["email"];
    $user->password= $_POST["password"];

    print_r($user);

    /*   ---------------- INSERT VALUES DATABASE -------------------------   */

    $sql = "INSERT INTO user (username, firstName, lastName, email, `password`) 
            VALUES ('$user->username', '$user->firstName', '$user->lastName', '$user->email', '$user->password')";

    if (mysqli_query($conn, $sql)) {
        echo "Nouvel enregistrement créé avec succès";
        header('Location: ../profil.php');
    } else {
        echo "Erreur : " . $sql . "<br>" . mysqli_error($conn);
    }
}
 
?>
  </body>
</html>
