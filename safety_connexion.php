<?php
echo "<p>Login".$_POST['Login']."</p>";
echo "<p>Password".$_POST['Password']."</p>";

if (isset($_POST["Login"]) && $_POST["Login"] == "Marie" && (isset($_POST["Password"]) && $_POST["Password"] == "2020")){
}

else {echo"<p>Mauvais couple identifiant / mot de passe.</p>";
echo "<a href='connexion.php'>Connexion</a>";
}

session_start();
if (isset($_SESSION["id"])){
    echo"<p>Login:".$_SESSION["id"]."</p>";
}
else {
    header('Location: back-office.php?page=1');
exit;
}