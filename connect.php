<header>
    <h1><i>Le blog de Marie</i></h1>
<nav> 
<a href="accueil.php">Accueil</a>
<a href="article.php">Articles</a>
<a href="contact.php">Contact</a>  
<a href="connect.php">Connexion</a>
<a href="ajout-utilisateur.php">Administration</a>
</nav></header>


<main class="formulaire">

<form action="Safety_connexion.php" method="post">
 <p>Loging: <input type="text" name="username"/></p>
 <p>Password : <input type="text" name="Password" /></p>
 <p><input type="submit" value="OK"></p>
</form>


<?php 
if (isset($_SESSION["id"])){ 
header('Location: ajout-utilisateur.php'); 
} 
?>