
<header>
    <h1><i>Le Blog de Marie</i></h1>
<nav> 
<a href="accueil.php">Accueil</a>
<a href="articles.php">Articles</a>
<a href="contact.php">Contact</a>  
<a href="connect.php">Connexion</a>
<a href="ajout-utilisateur.php">Administration</a>
<a href="blog-administrateur.php">Liste</a>
</nav></header>


<?php
if (isset($_POST['username'])&& isset($_POST['mail'])&& isset($_POST['password'])){
    $username = $_POST['username'];
    $mail = $_POST['mail'];
    $password = $_POST['password'];
    $is_admin = isset($_POST['is_admin']);

    if (isset($pdo)){
        include 'connect_db.php';
    }

    $query= $pdo->query( "INSERT INTO'utilisateur' ('id', 'username', 'mail', 'password', 'is_admin')VALUES(NULL, $username , $mail , $password , $is_admin")->fetchAll();
header('Location: back.php?page=admin');
}

?>

<?php 
if (isset($_SESSION["admin"])){ 
header('Location: blog-administrateur.php'); 
} 
?> 


<form action="Safety_connexion.php" method="post">
<div><input type="text" name="username"placeholder="Nom d'utilisateur" required/></div>
<div><input type="email" name="mail"placeholder="E-mail" required/></div>
<div><input type="password" name="password"placeholder="Mot de passe" required/></div>
<div><label for="admin_checkbox">Rôle administrateur : </label><input id="admin_checkbox" type="checkbox" name="is_admin"/></div>
<input type="submit" value="Ajouter" />

</form>

