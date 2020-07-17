<html>
  <html lang="fr">
<head>
    <title>Accueil</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="front.css" rel="stylesheet">
</head>
<body>
<header>
    <nav>
    
        <ul>
      <li><a href="accueil.php">Accueil</a></li>
    
      <li><a href="contact.php">Contact</a></li>

        <li><a href="articles.php">Articles</a></li>

        <li><a href="connexion.php">Connexion</a></li>
    
    
      </ul>
  </nav>


          <h2><i>Le Blog de Marie</i></h2>
      
          <p>
            Je m'appelle Marie Vaillant j'ai 18 ans et je suis étudiante en école de communication et de marketing. 
            Je suis passionnée par la photgraphie et le monde de la mode. Ainsi à travers mon blog, je vous transmets des astuces, des idées et des conseils en lien avec mes deux passions.
            Bonne lecture!
          
          </p>
     <div> 
        <img src="xFpKqY_c.jpg" alt="illustration colorée mode" width="180" height="250">
        <img src="mode (2).jpg" alt="mode" width="180" height="250">
        <img src="photographe.jpg" alt="photo" width="180" height="250">
        <img src="polaroid.jpg" alt="polaroid" width="180" height="250">
        <img src="magazine (2).jpg" alt="vogue" width="180" height="250">

     </div>

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
       
      $users = $pdo->query("SELECT * FROM articles ORDER BY Titre DESC LIMIT 5")->fetchAll();
             echo "<ul>";
      foreach ($users as $user){
          echo "<li><a href = \"2articles2.php?articles=".$user['Titre']."\">". $user ['Titre']."  </a></li>";
          echo $user ['Extrait']."<br></p>";
      }
      echo "</ul>";
      
      ?>


<ul>
      <li><a href="https://www.linkedin.com/in/marie-vaillant-a55352195/">Profil Linkedin</a></li> 
      <li><a href="https://github.com/marieee13">Profil GitHub</a></li>
      <li>marie.peva@gmail.com </li>
      <li>06.27.37.12.90</li>
</ul>
</footer>
</body>
</html>
<footer> 
        