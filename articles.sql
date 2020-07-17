-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : ven. 17 juil. 2020 à 09:57
-- Version du serveur :  5.7.24
-- Version de PHP : 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `mydevblog`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `Titre` text NOT NULL,
  `Image` text NOT NULL,
  `Auteur` tinytext NOT NULL,
  `Date` date NOT NULL,
  `Text` text NOT NULL,
  `Extrait` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`Titre`, `Image`, `Auteur`, `Date`, `Text`, `Extrait`) VALUES
('La tendance de l\'été', 'xFpKqY_c.jpg', 'Isabelle Durand', '2021-06-20', 'Vous attendez impatiemment l’été ? Pour être stylée pendant cette saison, certaines pièces sont à avoir absolument dans votre dressing. \r\n        Pour composer un look fashion, misez aussi sur certains imprimés et coloris. \r\n        Découvrez au plus vite les tendances mode rythmant cette saison estivale.\r\n        Fashion addict, soyez au top de la tendance en agrémentant votre dressing de vêtements oversize. \r\n        Parfaites pour souligner toutes les morphologies, ces pièces se portent aisément par les silhouettes fines sans avoir besoin de les accessoiriser. \r\n        Si en revanche vous avez des courbes voluptueuses, les vêtements oversize s’associent à une ceinture pour marquer la taille. \r\n        Sweat oversize, blazer oversize… choisissez en fonction de votre style vestimentaire.', '\"Vous attendez impatiemment l’été ? Pour être stylée pendant cette saison, certaines pièces sont à avoir absolument dans votre dressing. \"'),
('Comment trouver les couleurs de vêtements qui me vont ? Conseils', 'mode (2).jpg', 'Stephanie Leroy', '2015-04-20', 'Quelle palette de couleurs êtes-vous ?\r\n    Chaque saison (Printemps, éte, automne, hiver) représente une palette de couleurs. Bien sûr, chaque personne est différente et à considérer dans sa globalité. «Loin de nous mettre dans 4 cases (Printemps, Eté, Automne, Hiver), connaître ses couleurs confère une grande liberté, décuple la confiance en soi, fait gagner du temps le matin, limite les mauvais achats et apporte beaucoup de joie» précise d\'ailleurs l\'experte de MyVestiaire. \r\n    De manière générale, les palettes chaleureuses (printemps et automne) mettent en valeur les femmes dont l’éclat est doré ou solaire tandis que les palettes fraîches (été et hiver) subliment celles dont l\'éclat est argenté ou lunaire.', '\"Chaque saison (Printemps, éte, automne, hiver) représente une palette de couleurs.\"'),
('Conseils pour bien débuter en photographie', 'photographe.jpg', 'Clément Petit', '2022-01-20', '1- Le prix du matériel ne fait pas la qualité de la photo\r\n\r\n2- Ayez toujours votre appareil photo à portée de main\r\n\r\n3- Faites une liste des photos que vous aimeriez faire\r\n\r\n4- Ne cherchez pas très loin ce que vous avez sous le nez\r\n\r\n5- Prenez le temps de réfléchir à votre pratique\r\n\r\n6- Formez-vous gratuitement\r\n\r\n7- Testez les différents modes de votre appareil photo\r\n\r\n8- Apprenez les bases de la photographie\r\n\r\n9- Les logiciels de post-traitement ne font pas tout\r\n\r\n10- Montrez vos photos à ceux qui savent', '\"Le prix du matériel ne fait pas la qualité de la photo\"'),
('Comment décorer avec ses polaroids?', 'pola5.jpg', 'Vaillant Marie', '2015-04-20', 'Pour la déco, il en faut pour tous les goûts!\r\nSi tu es plutôt créatif je te conseille de disposer tes polaroids de façon post-it challenge. Ainsi c\'est toi qui crée la forme que tu souhaites, cela peut être en forme de coeur, de tour eiffel...A toi de voir! Mais n\'hésite pas à montrer à toute la communauté de quoi tu es capable!\r\n\r\nSi tu es plutôt aventurier ou voyageur je te conseille de faire une déco globe-trotteuse. C\'est à dire que tu vas épingler sur un planisphère tes polaroids. Sympa, non ? Tout le monde va t\'envier!\r\n\r\nSi tu es plutôt nature, je te conseille d\'utiliser des matériaux naturels qui t\'aideront à suspendre tes photos polaroids. Par exemple à l\'aide d\'une branche en bois, tu peux placer des ficelles qui te permettront d\'accrocher les photos. Original non ?\r\n\r\nEnfin si tu es plutôt organisée, la déco bien cadrée serait idéale pour toi. Il suffit de déposer tout tes polaroids dans un cadre. Ca peut paraitre simple mais ça en jette!!!\r\n\r\nJ\'espère que ces conseils pourront t\'être utile! ', '\"Pour la déco, il en faut pour tous les goûts!\"'),
('Zoom sur VOGUE', 'magazine (2).jpg', 'Rédaction Vogue Magazine', '2017-05-20', 'Vogue est un magazine américain, un des principaux magazines de mode féminin dans le monde avec une diffusion supérieure à un million d\'exemplaires mensuels. \r\n        Le titre est édité par Condé Nast Publications basé à New York et fait l\'objet de nombreuses éditions internationales. \r\n        À l\'origine une petite revue mélangeant mode, arts, conseils, et chroniques mondaines, Vogue connait un bouleversement à partir de 1909, date de son rachat par Condé Montrose Nast, qui incorpore au magazine alors bimensuel, « cet indispensable chic qui est la marque du magazine » : Condé Montrose Nast en fait une publication composée de mode, de luxe, et d\'art contemporain.    \r\n        Ainsi au travers du magazine vous y trouverez à la fois des rubriques sur différents domaines mais également des conseils.', '\" Ainsi au travers du magazine vous y trouverez à la fois des rubriques sur différents domaines mais également des conseils.\"');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
