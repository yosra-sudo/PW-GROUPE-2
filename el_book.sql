-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2021 at 12:17 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `el_book`
--

-- --------------------------------------------------------

--
-- Table structure for table `auteur`
--

CREATE TABLE `auteur` (
  `id_auteur` int(11) NOT NULL,
  `Nom_penom_auteur` varchar(60) NOT NULL,
  `Nationalite_auteur` varchar(60) NOT NULL,
  `image_auteur` varchar(255) NOT NULL,
  `Resume_auteur` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `auteur`
--

INSERT INTO `auteur` (`id_auteur`, `Nom_penom_auteur`, `Nationalite_auteur`, `image_auteur`, `Resume_auteur`) VALUES
(-1, '  Ibtihel', 'Tunisienne', '', 'Site Elbook'),
(1, 'Annie  Ernaux', 'Française', 'Annie Ernaux.jpg', 'On la connaît tous et toutes, elle est déjà enseignée à l’école, Annie Ernaux est un grand nom de la littérature contemporaine française. Elle fonde son œuvre sur une optique autobiographique, de son enfance à Yvetot (en Normandie), en passant par son mariage, son avortement, ou encore la maladie de sa mère.\r\n\r\nSi certains rapprochent ses ouvrages de la sociologie, il n’en reste pas moins que l’écriture simple d’Annie Ernaux associée à ses thèmes universels en font une autrice majeure du paysage littéraire français !'),
(2, ' Patrick Modiano', 'Française', 'Patrick Modiano.jpg', 'Prix Nobel de littéraire en 2014, Patrick Modiano est l’écrivain français contemporain de la mémoire. En effet, grâce à une œuvre aussi riche que captivante, il parvient à tracer les contours d’une œuvre prolifique, récompensée à de nombreuses reprises.\r\n\r\nL’absence, la quête d’identité, l’occupation allemande, autant de thèmes que Modiano traite avec le regard d’observateur qu’on lui connaît : fin et intelligent. Et si ses livres nous font autant voyager, il y a fort à parier qu’ils continuent encore longtemps.'),
(4, 'Marie Ndiaye', 'France', 'Marie_ Ndiaye.jpg', 'Marie Ndiaye fait partie de ces autrices de talent que possède la France. Récompensée par le prix Goncourt avec Trois femmes puissantes, elle trace progressivement une œuvre marquée par des images fortes, '),
(5, 'Delphine de vigan', 'France', 'Alain_Mabanckou.jpg', 'Après une formation au CELSA et divers emplois successifs, Delphine de Vigan devient directrice d’études dans un institut de sondage.\r\n\r\nSous le pseudonyme de Lou Delvig, elle écrit son premier roman, '),
(6, 'Jean_Echenoz', 'France', 'Jean_Echenoz.png', 'Jean Echenoz passe la plus grande partie de son enfance à Aix-en-Provence, où son père dirige un hôpital psychiatrique. Il entreprend des études de sociologie et sans grande passion, entre dans la vie active.'),
(7, 'virginie Despent', 'France', 'virginie_Despent.jpg', 'Virginie Despentes, de son vrai nom Virginie Daget, est née en 1969 à Nancy. Après une jeunesse agitée et perturbée - Virginie Despentes endure une période d’internement psychiatrique à l’âge de quinze ans qui la déscolarise – la jeune adulte fréquente le milieu punk et sombre dans l’alcoolisme et la prostitution occasionnelle.'),
(9, 'Jean_Echenoz', 'France', 'Habib Selmi.jpg', 'ayjuuuuuuuudfiiiiiiiituuyyy'),
(28, 'Annie ', '', 'Annie Ernaux.jpg', 'On la connaît tous et toutes, elle est déjà enseignée à l’école, Annie Ernaux est un grand nom de la littérature contemporaine française. Elle fonde son œuvre sur une optique autobiographique, de son enfance à Yvetot (en Normandie), en passant par son mariage, son avortement, ou encore la maladie de sa mère.'),
(32, 'Annie fzefzefzef', '', 'Ibrahim_asrallah.jpg', ''),
(33, 'alad', 'france', 'Alain_Mabanckou.jpg', 'ahhajhjksbljvjlkshbnvh');

-- --------------------------------------------------------

--
-- Table structure for table `categorie`
--

CREATE TABLE `categorie` (
  `id_categ` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categorie`
--

INSERT INTO `categorie` (`id_categ`, `nom`) VALUES
(1, 'eee'),
(2, 'malek'),
(3, 'slimm');

-- --------------------------------------------------------

--
-- Table structure for table `commande`
--

CREATE TABLE `commande` (
  `idC` int(10) NOT NULL,
  `nomUser` varchar(255) NOT NULL,
  `prenomUser` varchar(255) NOT NULL,
  `addresse` varchar(255) NOT NULL,
  `telephone` int(8) NOT NULL,
  `id_produit` int(10) NOT NULL,
  `quantite` int(255) NOT NULL,
  `modeLivraison` varchar(255) NOT NULL,
  `modePaiement` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `commande`
--

INSERT INTO `commande` (`idC`, `nomUser`, `prenomUser`, `addresse`, `telephone`, `id_produit`, `quantite`, `modeLivraison`, `modePaiement`, `mail`, `status`) VALUES
(11, 'bader', 'meriem', 'le sers', 26334028, 7, 1, 'à domicile', 'espéce', 'meriembader8@gmail.com', 'closed'),
(13, 'Bacha', 'yosra', 'gafsa ville ', 12345678, 3, 1, 'sur place', 'espéce', 'yosra.bacha@esprit.tn', 'opened'),
(14, 'Flen', 'Ben flen', 'rue flen ben falten', 25893699, 6, 1, 'par poste', 'virement', 'flen.benfalten@falten.tn', 'opened'),
(16, 'ileys', 'ene', 'dar', 53525050, 6, 11, 'zertyu', 'ertyu', 'ilyeszaidi15@gmail.com', 'rtyu'),
(17, 'ileys', 'ene', 'dar', 53525050, 6, 11, 'zertyu', 'ertyu', 'ilyeszaidi15@gmail.com', 'rtyu');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `NumClient` int(11) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Idrec` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`NumClient`, `Type`, `Description`, `Idrec`) VALUES
(10, 'solu', '', 0),
(111119, 'aa', 'r\'rrr', 0),
(111120, 'aaaaa', 'aaaaa', 0),
(111122, 'aaaaaa', 'aaaaaaa', 0);

-- --------------------------------------------------------

--
-- Table structure for table `image_livre`
--

CREATE TABLE `image_livre` (
  `num_image` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `livre`
--

CREATE TABLE `livre` (
  `id_livre` int(11) NOT NULL,
  `Nom_livre` varchar(35) NOT NULL,
  `auteur` int(11) NOT NULL,
  `prix_livre` int(11) NOT NULL,
  `Type` varchar(11) NOT NULL,
  `NbPage` int(11) NOT NULL,
  `Note` int(11) NOT NULL,
  `Image_livre` varchar(255) NOT NULL,
  `Resumer_livre` text NOT NULL,
  `nb_visite` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `livre`
--

INSERT INTO `livre` (`id_livre`, `Nom_livre`, `auteur`, `prix_livre`, `Type`, `NbPage`, `Note`, `Image_livre`, `Resumer_livre`, `nb_visite`) VALUES
(2, ' Les Misérables', 1, 35, '8', 0, 7, 'livre_7.jpg', '', 3),
(5, 'quand le faire est c', 1, 12, 'Conte', 255, 5, 'livre_8.jpg', 'Plus il attendra, et plus cela sera difficile pour lui. En faisant allusion à cette mise en scène, on utilise cette expression pour dire qu’il faut agir dès qu’on en a la possibilité, et ne pas attendre. Le fait d’attendre pourra rendre encore plus difficile la situation.', 2),
(7, '458', 2, 45, 'roman', 255, 2, 'livre_9.jpg', 'Plus il attendra, et plus cela sera difficile pour lui. En faisant allusion à cette mise en scène, on utilise cette expression pour dire qu’il faut agir dès qu’on en a la possibilité, et ne pas attendre. Le fait d’attendre pourra rendre encore plus difficile la situation.', 0),
(8, 'quand le faire est c', 1, 14, 'Conte', 24, 6, 'livre_10.jpg', 'alaaa  jjjjjkjyttjkoifiiiiiiiiiiiijfffdqaeryiuojn,lo', 1),
(10, 'legalement', 2, 14, 'Conte', 14, 4, 'livre_11.jpg', 'Plus il attendra, et plus cela sera difficile pour lui. En faisant allusion à cette mise en scène, on utilise cette expression pour dire qu’il faut agir dès qu’on en a la possibilité, et ne pas attendre. Le fait d’attendre pourra rendre encore plus difficile la situation.', 1),
(11, 'INTRODUCTION', 1, 0, 'Biographie', 958, 1, 'livre_1.jpg', 'nput type=\"text\" id=\"fname\" name=\"fname\"  height=\"200\" size=\"50\"><br><br>\n  <label for=\"pin\">PIN:</label>\n  <input type=\"text\" id=\"pin\" name=\"pin\" maxlength=\"4\" size=\"4\"><br><br>\n  <input type=\"submit\" value=\"Submit\">', 0),
(15, '111', 1, 0, 'Biographie', 1, 1, 'livre_2.jpg', ' \"Trois sœurs et un frère se retrouvent dans la maison de leurs grands-parents,', 0),
(16, '458', 0, 0, 'Biographie', 0, 1, 'livre_8.jpg', 'egfqzergergerg', 0),
(18, 'levenement', 1, 0, 'Conte', 6, 6, 'livre_3.jpg', 'Quatre ans avant la légalisation de la pilule contraceptive et douze ans avant la Loi veil, ce récit autobiographique décrit le parcours du combattant d’une jeune étudiante pour avorter. Elle est alors entourée d’un gynécologue.', 1),
(23, 'INTRODUCTION\r\nAUX\r\nB', 0, 0, 'roman', 0, 0, 'livre_1.jpg', '', 0),
(40, 'test_input(Introduction)', 12, 0, 'Biographie', 0, 1, 'livre_11.jpg', 'test_input(scQS>CC\r\nuiluytilyl)', 0),
(45, 'ffffffff', 3, 0, 'Biographie', 0, 3, 'livre_1.jpg', 'fsqefsefffff option>\r\naimerais savoir si il est possible en CSS de modifier la taille du texte dans un textarea. (jaimerais que le texte soi plus petit, ...\r\n5 مشاركات\r\n \r\n·\r\n \r\n;. } (Jespère avoir bien compris t', 0),
(58, 'Introduction', 8, 0, 'Divers', 0, 1, 'livre_2.jpg', '', 0),
(61, 'Introduction', 0, 0, 'Divers', 0, 1, 'livre_2.jpg', '', 0),
(62, 'Introduction', 0, 0, 'Divers', 0, 1, 'livre_2.jpg', '', 0),
(64, '', 0, 0, 'Divers', 0, 1, '', '', 0),
(65, 'Introduction', 3, 0, 'Divers', 0, 1, 'livre_1.jpg', '', 0),
(68, 'ppp', 3, 0, 'Divers', 0, 1, 'livre_2.jpg', '', 0),
(69, 'marim', 3, 0, 'Divers', 0, 1, 'livre_10.jpg', '', 0),
(72, 'Introduction à l\'inf', 0, 0, 'Divers', 0, 1, '', 'l\'erreur n\'est pas éclenché suite aux \'\' et au mot clé \"unique\" mais suite au fait que le nombre de champs de ta table et le nombre de valeurs que tu veux insérér ne se correspondent pas!!\r\nen plus évite de mettre un espace entre \\ e', 0),
(74, '', 0, 0, 'Divers', 0, 1, '', '', 0),
(75, '', 0, 0, 'Divers', 0, 1, '', '', 0),
(76, '', 0, 0, 'Divers', 0, 1, '', '', 0),
(78, 'fezsrf \'\"(-', 0, 0, 'Divers', 0, 1, '', '', 0),
(79, 'fezsrf \'\"(-', 0, 0, 'Divers', 0, 1, '', '', 0),
(80, 'fezsrf \'\"(-', 0, 0, 'Divers', 0, 1, '', '', 0),
(81, 'fdggfgbsnfgnbaza', 0, 0, 'Divers', 0, 1, '', '', 0),
(82, 'dsgdg', 0, 0, 'Divers', 0, 1, '', '', 0),
(83, 'dsgdg', 0, 0, 'Divers', 0, 1, '', '', 0),
(84, 'dsgdg', 0, 0, 'Divers', 0, 1, '', '', 0),
(85, 'dsgdg', 0, 0, 'Divers', 0, 1, '', '', 0),
(86, 'dsgdg', 0, 0, 'Divers', 0, 1, '', '', 0),
(87, 'dsgdg', 0, 0, 'Divers', 0, 1, '', '', 0),
(88, 'dsgdg', 0, 0, 'Divers', 0, 1, '', '', 0),
(89, 'dsgdg', 0, 0, 'Divers', 0, 1, '', '', 0),
(91, 'Auandhgg', 0, 0, 'Divers', 0, 1, '', '', 0),
(92, 'ala', 9, 12, 'Divers', 11, 8, 'livre_13.jpg', 'ayhauihauihiuohsjhhjsbjshbhuzshghjsbd', 0);

-- --------------------------------------------------------

--
-- Table structure for table `paiement`
--

CREATE TABLE `paiement` (
  `id` int(11) NOT NULL,
  `commandeRef` varchar(255) NOT NULL,
  `produit` varchar(255) NOT NULL,
  `prix` int(255) NOT NULL,
  `date` date NOT NULL,
  `mode` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paiement`
--

INSERT INTO `paiement` (`id`, `commandeRef`, `produit`, `prix`, `date`, `mode`) VALUES
(2, '12346987FG', 'velo', 566, '2021-11-29', 'espéce'),
(3, '1555987RT', 'velo', 566, '2021-11-29', 'espéce'),
(4, 'a15799333FG', 'voiture', 5988200, '2021-11-29', 'en ligne'),
(6, '559gfr89', 'poupé', 10, '2021-11-29', 'chéquee'),
(8, '7899635FT', 'rubiks', 10, '2021-11-30', 'en ligne');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `desc` text NOT NULL,
  `price` decimal(7,2) NOT NULL,
  `rrp` decimal(7,2) NOT NULL DEFAULT 0.00,
  `quantity` int(11) NOT NULL,
  `img` text NOT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `desc`, `price`, `rrp`, `quantity`, `img`, `date_added`) VALUES
(1, 'Manga', ' the story of a young boy named Tanjiro Kamado who becomes a demon slayer to avenge the deaths of his family and to find a cure for his sister', '29.99', '0.00', 10, 'manga.jpg', '2019-03-13 17:55:22'),
(2, 'Lettres persanes Montesqieu', 'Lettres persanes est un roman épistolaire de Montesquieu rassemblant la correspondance fictive échangée entre deux voyageurs persans, Usbek et Rica, et leurs amis respectifs restés en Perse. Leur séjour à l’étranger dure neuf ans.', '14.99', '19.99', 34, 'montesquieu.jpg', '2019-03-13 18:52:49'),
(3, 'Le rouge est le noir\r\nstandhal', 'Le Rouge et le Noir, sous-titré Chronique du XIX e siècle, puis Chronique de 1830, est un roman écrit par Stendhal, publié pour la première fois à Paris ...', '19.99', '0.00', 23, 'standhal.jpg', '2019-03-13 18:47:56'),
(4, 'ce que le jour doit à la nuit', 'Ce que le jour doit à la nuit est un roman de Yasmina Khadra écrit en 2008. L\'action se déroule principalement en Algérie de 1930 à 1962', '69.99', '0.00', 7, 'pelerin.jpg', '2019-03-13 17:42:04'),
(5, ' Le pelerin ', 'lorem epsum lorem epsum lorem epsum lorem epsum lorem epsum lorem epsum lorem epsumlorem epsum ', '29.99', '0.00', 10, 'pelerin.jpg', '2019-03-13 17:55:22'),
(6, 'Le Zahir', 'lorem epsum lorem epsum lorem epsum lorem epsum lorem epsum lorem epsum lorem epsumlorem epsum ', '14.99', '19.99', 34, 'zahir.jpg', '2019-03-13 18:52:49'),
(7, 'untitledd ', 'lorem epsum lorem epsum lorem epsum lorem epsum lorem epsum lorem epsum lorem epsumlorem epsum ', '19.99', '0.00', 23, 'standhal.jpg', '2019-03-13 18:47:56'),
(8, 'Monstesqieu', 'lorem epsum lorem epsum lorem epsum lorem epsum lorem epsum lorem epsum lorem epsumlorem epsum ', '69.99', '0.00', 7, 'montesquieu.jpg', '2019-03-13 17:42:04');

-- --------------------------------------------------------

--
-- Table structure for table `produit`
--

CREATE TABLE `produit` (
  `idProduit` int(10) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `quantite_total` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `prix` int(255) NOT NULL,
  `status` varchar(25) NOT NULL,
  `reference` varchar(255) NOT NULL,
  `chemin_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produit`
--

INSERT INTO `produit` (`idProduit`, `nom`, `quantite_total`, `description`, `prix`, `status`, `reference`, `chemin_img`) VALUES
(1, 'Vélo', '2', 'tres bonne qualité', 290, 'en stock', '', '2564865F'),
(2, 'rubiks', '15', 'pratique et facile à utiliser', 15, 'en stock', '', '25879933DG');

-- --------------------------------------------------------

--
-- Table structure for table `rec`
--

CREATE TABLE `rec` (
  `NumClient` int(11) NOT NULL,
  `Titre` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rec`
--

INSERT INTO `rec` (`NumClient`, `Titre`, `Description`) VALUES
(0, 'aaaa', 'aaaa');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `journaliste` varchar(155) NOT NULL,
  `date` date NOT NULL,
  `titre` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `id_cat` int(11) NOT NULL,
  `cont` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `journaliste`, `date`, `titre`, `image`, `id_cat`, `cont`) VALUES
(13, 'vvfv', '2021-12-03', 'aaa', 'phph.png', 1, 'eeee'),
(14, 'rrr', '2021-12-22', 'aaa', 'UNE-the-joker.jpg', 1, 'azzaz'),
(16, 'zz', '2021-11-30', 'aaa', 'phot.jpg', 1, 'bb');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(11) NOT NULL,
  `txn_id` varchar(255) NOT NULL,
  `payment_amount` decimal(7,2) NOT NULL,
  `payment_status` varchar(30) NOT NULL,
  `item_id` varchar(255) NOT NULL,
  `item_quantity` varchar(255) NOT NULL,
  `item_mc_gross` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `payer_email` varchar(255) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL DEFAULT '',
  `address_street` varchar(255) NOT NULL,
  `address_city` varchar(255) NOT NULL,
  `address_state` varchar(255) NOT NULL,
  `address_zip` varchar(255) NOT NULL,
  `address_country` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `type_livre`
--

CREATE TABLE `type_livre` (
  `id_Type` int(11) NOT NULL,
  `Type_livre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `type` text NOT NULL,
  `numerotele` varchar(255) NOT NULL,
  `nationalite` text NOT NULL,
  `sexe` text NOT NULL,
  `etat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `username`, `password`, `type`, `numerotele`, `nationalite`, `sexe`, `etat`) VALUES
(5, 'admin@gmail.com', 'admin', '123', 'admin', '93055796', 'tunis', 'homme', '1'),
(7, 'test1@gmail.com', 'test4', '1234', 'admin', '641216', 'ioihuv', 'homme', '1'),
(9, 'test2@gmail.com', 'test2', '1234', 'admin', '64121600', 'tounss', 'femme', '1'),
(10, 'Arslen.ferchichi@esprit.tn', 'aaaa', '1234', 'user', '1111', 'tounsii', 'homme', '1'),
(15, 'ilyeszaidi15@gmail.com', 'azerty', '332777', 'user', '11111', 'tounss', 'homme', '1');

-- --------------------------------------------------------

--
-- Table structure for table `visite_livre`
--

CREATE TABLE `visite_livre` (
  `id_livre` int(11) NOT NULL,
  `Note_0` int(11) NOT NULL,
  `Note_1` int(11) NOT NULL,
  `Note_2` int(11) NOT NULL,
  `Note_3` int(11) NOT NULL,
  `Note_4` int(11) NOT NULL,
  `Note_5` int(11) NOT NULL,
  `Note_6` int(11) NOT NULL,
  `Note_7` int(11) NOT NULL,
  `Note_8` int(11) NOT NULL,
  `Note_9` int(11) NOT NULL,
  `Note_10` int(11) NOT NULL,
  `total_score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visite_livre`
--

INSERT INTO `visite_livre` (`id_livre`, `Note_0`, `Note_1`, `Note_2`, `Note_3`, `Note_4`, `Note_5`, `Note_6`, `Note_7`, `Note_8`, `Note_9`, `Note_10`, `total_score`) VALUES
(2, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(8, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(11, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(12, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(13, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(14, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(15, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(16, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(17, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(18, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(19, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(20, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(23, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(29, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(33, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(38, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(40, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(41, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(44, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(45, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(55, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(56, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(57, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(58, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(59, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(60, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(61, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(62, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(63, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(64, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(65, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(66, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(67, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(68, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auteur`
--
ALTER TABLE `auteur`
  ADD PRIMARY KEY (`id_auteur`);

--
-- Indexes for table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id_categ`);

--
-- Indexes for table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`idC`),
  ADD KEY `fk_prod_cmd` (`id_produit`) USING BTREE;

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`NumClient`),
  ADD KEY `feedback_reclamation` (`Idrec`);

--
-- Indexes for table `image_livre`
--
ALTER TABLE `image_livre`
  ADD UNIQUE KEY `num_image` (`num_image`);

--
-- Indexes for table `livre`
--
ALTER TABLE `livre`
  ADD PRIMARY KEY (`id_livre`);

--
-- Indexes for table `paiement`
--
ALTER TABLE `paiement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`idProduit`);

--
-- Indexes for table `rec`
--
ALTER TABLE `rec`
  ADD PRIMARY KEY (`NumClient`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cat` (`id_cat`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `txn_id` (`txn_id`);

--
-- Indexes for table `type_livre`
--
ALTER TABLE `type_livre`
  ADD PRIMARY KEY (`id_Type`),
  ADD UNIQUE KEY `Type_livre` (`Type_livre`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visite_livre`
--
ALTER TABLE `visite_livre`
  ADD UNIQUE KEY `id_livre` (`id_livre`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auteur`
--
ALTER TABLE `auteur`
  MODIFY `id_auteur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id_categ` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `commande`
--
ALTER TABLE `commande`
  MODIFY `idC` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `NumClient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111123;

--
-- AUTO_INCREMENT for table `livre`
--
ALTER TABLE `livre`
  MODIFY `id_livre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `paiement`
--
ALTER TABLE `paiement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `produit`
--
ALTER TABLE `produit`
  MODIFY `idProduit` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `fk_prod_cmd` FOREIGN KEY (`id_produit`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_reclamation` FOREIGN KEY (`Idrec`) REFERENCES `rec` (`NumClient`);

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`id_cat`) REFERENCES `categorie` (`id_categ`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
