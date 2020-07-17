<html>
  <html lang="fr">
<head>
    <title>Le Blog de Marie</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="front.css" rel="stylesheet">
</head>
<body>
  <?php 
  include("header.php");
  ?>
<?php

if ($_GET ['page'] == 1) {
echo "<p>Accueil</p>" ; 
}

else if ($_GET ['page'] == 2){
echo "<p>Articles</p>" ;
}

else if ($_GET ['page'] == 3){
  echo "<p>Contact</p>" ;
  }

else if ($_GET['cpage'] == 4){
  echo "<p>Connexion</p>";
}  

else if ($_GET['page'] == 5 ){
  echo "<p>2articles2</p>";
}  
?>


<?php 
include("footer.php");
?>