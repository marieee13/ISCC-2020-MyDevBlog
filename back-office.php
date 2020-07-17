    <?php
    include ("connexion.php");
    ?>

<!DOCTYPE html>
<html lang="fr">
<head>

    <title>Rooting</title>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>

<?php
session_start();
include ("Connect.php");

if ($_GET['page']== 1) 
echo "<h1> Accueil </h1>";

if ($_GET['page']==2)
echo "<h1> Articles </h1>";

if ($_GET ['page']==3)
echo "<h1> Contact </h1>";


?> 

</body>
</html>
    