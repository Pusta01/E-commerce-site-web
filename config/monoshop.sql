-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 19 mai 2022 à 11:00
-- Version du serveur :  10.4.14-MariaDB
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `monoshop`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `motdepasse` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `pseudo`, `email`, `motdepasse`) VALUES
(33, 'admin', 'admin@admin.com', '123456');

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE `produits` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prix` int(11) NOT NULL,
  `description` text NOT NULL ,
  `disponible` varchar(30) NOT NULL,
  `categorie` varchar(30) NOT NULL,
  `quantité` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- creation de panier
CREATE TABLE `panier` (
  `user_id` int(11) NOT NULL,
  `image` text NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prix` int(11) NOT NULL,
  `description` text NOT NULL ,
  `quantité_commander` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`id`, `image`, `nom`, `prix`, `description`,`disponible` , `categorie`,`quantité`) VALUES
(1, 'https://ma.jumia.is/unsafe/fit-in/300x300/filters:fill(white)/product/97/169185/1.jpg?4064', 'SHORT PONTALON', 39, 'PRINCIPALES CARACTÉRISTIQUES Nouvelle collection Bonne prix Chic Bonne qualité .DESCRIPTIF TECHNIQUE - SKU: GE232MW1LUO81NAFAMZ Modèle: SHORT Poids (kg): 1 Couleur: NOIR','disponible','clothes',5),
(2, 'https://www.cdiscount.com/pdt2/0/6/0/1/700x700/mp10319060/rw/adidas-tubular-shadow-femmes-baskets-noir-7-uk.jpg', 'Basket adidas noir', 20, 'Présentation produit : adidas Tubular Shadow Femmes Baskets Noir - 7 UKHaut de page ▲\r\nadidas Tubular Shadow AC8333 Baskets Femmes Noir. Dessus / Tige: Mesh et Textile. Fixation: Lacets. Semelle de chaussure: Caoutchouc.\r\nadidas Tubular Shadow AC8333 Baskets Femmes Noir. Dessus / Tige: Mesh et Textile. Fixation: Lacets. Semelle de chaussure: Caoutchouc.','disponible','shoes',5),
(3, 'https://www.chaussures.fr/media/catalog/product/cache/image/650x650//0/0/0000199804908_2__wj.jpg', 'Chaussures adidas Bleu', 40, 'Taille et ajustement\r\nÉpaisseur de la semelle : 3 cm\r\nPoids de chaussure (pointure la plus petite) : 210 g\r\nHauteur totale de la chaussure : 11,5 cm','disponible','shoes',5),
(4, 'https://ma.jumia.is/unsafe/fit-in/500x500/filters:fill(white)/product/72/118794/1.jpg?5650', 'Koton T-SHIRT HOMME - JAUNE', 49, 'Marque :Koton Type :T-SHIRT Couleur :JAUNE SKU: KO207MW16XR7UNAFAMZ Poids (kg): 1 Matière principale: NA','disponible','clothes',5),
(5, 'https://www.chaussures.fr/media/catalog/product/cache/image/650x650/0/0/0000197850167_1__1.jpg', 'Sneakers VANS', 60, 'Taille et ajustement\r\nÉpaisseur de la semelle : 3 cm\r\nTour de mollet en haut (pointure la plus petite): 25,5 cm\r\nTour de cheville (pointure la plus petite): 30,5 cm\r\nPoids de chaussure (pointure la plus petite) : 368 g\r\nHauteur totale de la chaussure : 13 cm','disponible','shoes',5),
(6, 'https://ih1.redbubble.net/image.339900741.3490/ssrco,triblend_tee,mens,navy_triblend,front,square_product,x600-bg,f8f8f8.u4.jpg', 'T-shirt chiné', 36, 'Un look légèrement vintage, un toucher super doux. Ça gagne à tous les coups.
Coupe droite classique.Le modèle mesure 1,86 m et porte une taille L','disponible','clothes',5),
(7, 'https://www.chaussures.fr/media/catalog/product/cache/image/650x650/0/0/0000207043671_01_ksz_1.jpg', 'Chaussures ASICS', 52, 'Taille et ajustement\r\nÉpaisseur de la semelle : 3 cm\r\nType de pied: Neutre\r\nPoids de chaussure (pointure la plus petite) : 244 g\r\nHauteur totale de la chaussure : 10,5 cm','disponible','shoes',5),
(8, 'https://www.chaussures.fr/media/catalog/product/cache/image/650x650/0/0/0000209259209_01_ki.jpg', 'Baskets CONVERSE', 59, 'Taille et ajustement\r\nÉpaisseur de la semelle : 2,5 cm\r\nTour de mollet en haut (pointure la plus petite): 26 cm\r\nTour de cheville (pointure la plus petite): 32 cm\r\nPoids de chaussure (pointure la plus petite) : 382 g\r\nHauteur totale de la chaussure : 15,5 cm','disponible','shoes',5);


--
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


/* my_work add colomun dispo */
/*ALTER TABLE produits
ADD disponible varchar(255);
*/
