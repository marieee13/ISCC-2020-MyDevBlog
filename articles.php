<DOCTYPE html>
    <html lang="fr">
    
    <head>
        <title> Articles </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style/vitrine.css">
    </head> 
 
    <body>


<?php 
      function connect_to_database(){
     $servername = 'localhost';
     $username = 'root';
     $password= 'root';
     $madatabase = 'mydevblog';
try { 
    $pdo = new PDO("mysql:host=$servername;dbname=$madatabase",$username,$password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
    return $pdo;
}
catch (PDOException $e){
    echo "connection failed : ".$e->getMessage();
}
}
$pdo= connect_to_database();
$users = $pdo->query("SELECT * FROM articles")->fetchAll();
     echo "<ul><center>";
foreach ($users as $user){
    echo ("<ul class='articles'>");

    echo "<a href = \"2articles2.php?articles=".addslashes($user['Titre'])."\">". $user ['Titre']."</a>";

    echo ("<br><br><image src='" . $user['Image'] . "'height=400px >");
    
    echo ("<br>" .$user ['Auteur']);

    echo ("<br><br>" .$user ['Extrait']);

    echo ("<br><br>" .$user ['Date']. "<br><br><br>");

    echo ("</ul>");
}
?>



