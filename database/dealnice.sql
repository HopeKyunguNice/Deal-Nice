-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 01 oct. 2022 à 00:45
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `dealnice`
--

-- --------------------------------------------------------

--
-- Structure de la table `tbl_color`
--

CREATE TABLE `tbl_color` (
  `color_id` int(11) NOT NULL,
  `color_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tbl_color`
--

INSERT INTO `tbl_color` (`color_id`, `color_name`) VALUES
(1, 'Red'),
(2, 'Black'),
(3, 'Blue'),
(4, 'Yellow'),
(5, 'Green'),
(6, 'White'),
(7, 'Orange'),
(8, 'Brown'),
(9, 'Tan'),
(10, 'Pink'),
(11, 'Mixed'),
(12, 'Lightblue'),
(13, 'Violet'),
(14, 'Light Purple'),
(15, 'Salmon'),
(16, 'Gold'),
(17, 'Gray'),
(18, 'Ash'),
(19, 'Maroon'),
(20, 'Silver'),
(21, 'Dark Clay'),
(22, 'Cognac'),
(23, 'Coffee'),
(24, 'Charcoal'),
(25, 'Navy'),
(26, 'Fuchsia'),
(27, 'Olive'),
(28, 'Burgundy'),
(29, 'Midnight Blue');

-- --------------------------------------------------------

--
-- Structure de la table `tbl_country`
--

CREATE TABLE `tbl_country` (
  `country_id` int(11) NOT NULL,
  `country_name` varchar(100) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `tbl_country`
--

INSERT INTO `tbl_country` (`country_id`, `country_name`) VALUES
(1, 'Afghanistan'),
(2, 'Albania'),
(3, 'Algeria'),
(4, 'American Samoa'),
(5, 'Andorra'),
(6, 'Angola'),
(7, 'Anguilla'),
(8, 'Antarctica'),
(9, 'Antigua and Barbuda'),
(10, 'Argentina'),
(11, 'Armenia'),
(12, 'Aruba'),
(13, 'Australia'),
(14, 'Austria'),
(15, 'Azerbaijan'),
(16, 'Bahamas'),
(17, 'Bahrain'),
(18, 'Bangladesh'),
(19, 'Barbados'),
(20, 'Belarus'),
(21, 'Belgium'),
(22, 'Belize'),
(23, 'Benin'),
(24, 'Bermuda'),
(25, 'Bhutan'),
(26, 'Bolivia'),
(27, 'Bosnia and Herzegovina'),
(28, 'Botswana'),
(29, 'Bouvet Island'),
(30, 'Brazil'),
(31, 'British Indian Ocean Territory'),
(32, 'Brunei Darussalam'),
(33, 'Bulgaria'),
(34, 'Burkina Faso'),
(35, 'Burundi'),
(36, 'Cambodia'),
(37, 'Cameroon'),
(38, 'Canada'),
(39, 'Cape Verde'),
(40, 'Cayman Islands'),
(41, 'Central African Republic'),
(42, 'Chad'),
(43, 'Chile'),
(44, 'China'),
(45, 'Christmas Island'),
(46, 'Cocos (Keeling) Islands'),
(47, 'Colombia'),
(48, 'Comoros'),
(49, 'Congo'),
(50, 'Cook Islands'),
(51, 'Costa Rica'),
(52, 'Croatia (Hrvatska)'),
(53, 'Cuba'),
(54, 'Cyprus'),
(55, 'Czech Republic'),
(56, 'Denmark'),
(57, 'Djibouti'),
(58, 'Dominica'),
(59, 'Dominican Republic'),
(60, 'East Timor'),
(61, 'Ecuador'),
(62, 'Egypt'),
(63, 'El Salvador'),
(64, 'Equatorial Guinea'),
(65, 'Eritrea'),
(66, 'Estonia'),
(67, 'Ethiopia'),
(68, 'Falkland Islands (Malvinas)'),
(69, 'Faroe Islands'),
(70, 'Fiji'),
(71, 'Finland'),
(72, 'France'),
(73, 'France, Metropolitan'),
(74, 'French Guiana'),
(75, 'French Polynesia'),
(76, 'French Southern Territories'),
(77, 'Gabon'),
(78, 'Gambia'),
(79, 'Georgia'),
(80, 'Germany'),
(81, 'Ghana'),
(82, 'Gibraltar'),
(83, 'Guernsey'),
(84, 'Greece'),
(85, 'Greenland'),
(86, 'Grenada'),
(87, 'Guadeloupe'),
(88, 'Guam'),
(89, 'Guatemala'),
(90, 'Guinea'),
(91, 'Guinea-Bissau'),
(92, 'Guyana'),
(93, 'Haiti'),
(94, 'Heard and Mc Donald Islands'),
(95, 'Honduras'),
(96, 'Hong Kong'),
(97, 'Hungary'),
(98, 'Iceland'),
(99, 'India'),
(100, 'Isle of Man'),
(101, 'Indonesia'),
(102, 'Iran (Islamic Republic of)'),
(103, 'Iraq'),
(104, 'Ireland'),
(105, 'Israel'),
(106, 'Italy'),
(107, 'Ivory Coast'),
(108, 'Jersey'),
(109, 'Jamaica'),
(110, 'Japan'),
(111, 'Jordan'),
(112, 'Kazakhstan'),
(113, 'Kenya'),
(114, 'Kiribati'),
(115, 'Korea, Democratic People\'s Republic of'),
(116, 'Korea, Republic of'),
(117, 'Kosovo'),
(118, 'Kuwait'),
(119, 'Kyrgyzstan'),
(120, 'Lao People\'s Democratic Republic'),
(121, 'Latvia'),
(122, 'Lebanon'),
(123, 'Lesotho'),
(124, 'Liberia'),
(125, 'Libyan Arab Jamahiriya'),
(126, 'Liechtenstein'),
(127, 'Lithuania'),
(128, 'Luxembourg'),
(129, 'Macau'),
(130, 'Macedonia'),
(131, 'Madagascar'),
(132, 'Malawi'),
(133, 'Malaysia'),
(134, 'Maldives'),
(135, 'Mali'),
(136, 'Malta'),
(137, 'Marshall Islands'),
(138, 'Martinique'),
(139, 'Mauritania'),
(140, 'Mauritius'),
(141, 'Mayotte'),
(142, 'Mexico'),
(143, 'Micronesia, Federated States of'),
(144, 'Moldova, Republic of'),
(145, 'Monaco'),
(146, 'Mongolia'),
(147, 'Montenegro'),
(148, 'Montserrat'),
(149, 'Morocco'),
(150, 'Mozambique'),
(151, 'Myanmar'),
(152, 'Namibia'),
(153, 'Nauru'),
(154, 'Nepal'),
(155, 'Netherlands'),
(156, 'Netherlands Antilles'),
(157, 'New Caledonia'),
(158, 'New Zealand'),
(159, 'Nicaragua'),
(160, 'Niger'),
(161, 'Nigeria'),
(162, 'Niue'),
(163, 'Norfolk Island'),
(164, 'Northern Mariana Islands'),
(165, 'Norway'),
(166, 'Oman'),
(167, 'Pakistan'),
(168, 'Palau'),
(169, 'Palestine'),
(170, 'Panama'),
(171, 'Papua New Guinea'),
(172, 'Paraguay'),
(173, 'Peru'),
(174, 'Philippines'),
(175, 'Pitcairn'),
(176, 'Poland'),
(177, 'Portugal'),
(178, 'Puerto Rico'),
(179, 'Qatar'),
(180, 'Reunion'),
(181, 'Romania'),
(182, 'Russian Federation'),
(183, 'Rwanda'),
(184, 'Saint Kitts and Nevis'),
(185, 'Saint Lucia'),
(186, 'Saint Vincent and the Grenadines'),
(187, 'Samoa'),
(188, 'San Marino'),
(189, 'Sao Tome and Principe'),
(190, 'Saudi Arabia'),
(191, 'Senegal'),
(192, 'Serbia'),
(193, 'Seychelles'),
(194, 'Sierra Leone'),
(195, 'Singapore'),
(196, 'Slovakia'),
(197, 'Slovenia'),
(198, 'Solomon Islands'),
(199, 'Somalia'),
(200, 'South Africa'),
(201, 'South Georgia South Sandwich Islands'),
(202, 'Spain'),
(203, 'Sri Lanka'),
(204, 'St. Helena'),
(205, 'St. Pierre and Miquelon'),
(206, 'Sudan'),
(207, 'Suriname'),
(208, 'Svalbard and Jan Mayen Islands'),
(209, 'Swaziland'),
(210, 'Sweden'),
(211, 'Switzerland'),
(212, 'Syrian Arab Republic'),
(213, 'Taiwan'),
(214, 'Tajikistan'),
(215, 'Tanzania, United Republic of'),
(216, 'Thailand'),
(217, 'Togo'),
(218, 'Tokelau'),
(219, 'Tonga'),
(220, 'Trinidad and Tobago'),
(221, 'Tunisia'),
(222, 'Turkey'),
(223, 'Turkmenistan'),
(224, 'Turks and Caicos Islands'),
(225, 'Tuvalu'),
(226, 'Uganda'),
(227, 'Ukraine'),
(228, 'United Arab Emirates'),
(229, 'United Kingdom'),
(230, 'United States'),
(231, 'United States minor outlying islands'),
(232, 'Uruguay'),
(233, 'Uzbekistan'),
(234, 'Vanuatu'),
(235, 'Vatican City State'),
(236, 'Venezuela'),
(237, 'Vietnam'),
(238, 'Virgin Islands (British)'),
(239, 'Virgin Islands (U.S.)'),
(240, 'Wallis and Futuna Islands'),
(241, 'Western Sahara'),
(242, 'Yemen'),
(243, 'Zaire'),
(244, 'Zambia'),
(245, 'Zimbabwe'),
(246, 'Lubumbashi'),
(247, 'Kolwezi'),
(248, '10');

-- --------------------------------------------------------

--
-- Structure de la table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `cust_id` int(11) NOT NULL,
  `cust_name` varchar(100) NOT NULL,
  `cust_cname` varchar(100) NOT NULL,
  `cust_email` varchar(100) NOT NULL,
  `cust_phone` varchar(50) NOT NULL,
  `cust_country` int(11) NOT NULL,
  `cust_address` text NOT NULL,
  `cust_city` varchar(100) NOT NULL,
  `cust_state` varchar(100) NOT NULL,
  `cust_zip` varchar(30) NOT NULL,
  `cust_b_name` varchar(100) NOT NULL,
  `cust_b_cname` varchar(100) NOT NULL,
  `cust_b_phone` varchar(50) NOT NULL,
  `cust_b_country` int(11) NOT NULL,
  `cust_b_address` text NOT NULL,
  `cust_b_city` varchar(100) NOT NULL,
  `cust_b_state` varchar(100) NOT NULL,
  `cust_b_zip` varchar(30) NOT NULL,
  `cust_s_name` varchar(100) NOT NULL,
  `cust_s_cname` varchar(100) NOT NULL,
  `cust_s_phone` varchar(50) NOT NULL,
  `cust_s_country` int(11) NOT NULL,
  `cust_s_address` text NOT NULL,
  `cust_s_city` varchar(100) NOT NULL,
  `cust_s_state` varchar(100) NOT NULL,
  `cust_s_zip` varchar(30) NOT NULL,
  `cust_password` varchar(100) NOT NULL,
  `cust_token` varchar(255) NOT NULL,
  `cust_datetime` varchar(100) NOT NULL,
  `cust_timestamp` varchar(100) NOT NULL,
  `cust_status` int(1) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tbl_customer`
--

INSERT INTO `tbl_customer` (`cust_id`, `cust_name`, `cust_cname`, `cust_email`, `cust_phone`, `cust_country`, `cust_address`, `cust_city`, `cust_state`, `cust_zip`, `cust_b_name`, `cust_b_cname`, `cust_b_phone`, `cust_b_country`, `cust_b_address`, `cust_b_city`, `cust_b_state`, `cust_b_zip`, `cust_s_name`, `cust_s_cname`, `cust_s_phone`, `cust_s_country`, `cust_s_address`, `cust_s_city`, `cust_s_state`, `cust_s_zip`, `cust_password`, `cust_token`, `cust_datetime`, `cust_timestamp`, `cust_status`, `photo`) VALUES
(11, 'Hope', 'Hope Kyungu', 'kyunguhope01@gmail.com', '0974494333', 246, 'Lububamshi, texaco, des avaieurs, n°12', 'Je t\'aime bien', 'Congo Kinshasa', '1000', 'Hope', 'Kyungu Hope', '+243 974 494 333', 246, 'Annexe Bel-air Manga N°12', 'Je t\'aime bien', 'Congo Kinshasa', '1000', 'Hope', 'Kyungu Hope', '+243 974 494 333', 246, 'Annexe Bel-air Manga N°12', 'Je t\'aime bien', 'Congo Kinshasa', '1000', '5965d10acfe22de9262356ef583babf2', '28e32b0b292edd5a2e97882352d90cc7', '2022-07-29 07:13:12', '1659103992', 1, ''),
(17, 'Kyungu hope', 'hope', 'mangakyunguespere@gmail.com', '+243974494333', 2, 'ok', 'mangakyunguesper', 'Congo Kinshasa', '1000', '', '', '', 0, '', '', '', '', '', '', '', 0, '', '', '', '', '0d97b3c4c4876e896984ff51dc539d7f', '1f4d1600210206e51c71d313c3e9833f', '2022-09-30 05:32:11', '1664508731', 1, 'customer-17.PNG');

-- --------------------------------------------------------

--
-- Structure de la table `tbl_customer_message`
--

CREATE TABLE `tbl_customer_message` (
  `customer_message_id` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `order_detail` text NOT NULL,
  `cust_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `tbl_end_category`
--

CREATE TABLE `tbl_end_category` (
  `ecat_id` int(11) NOT NULL,
  `ecat_name` varchar(255) NOT NULL,
  `mcat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tbl_end_category`
--

INSERT INTO `tbl_end_category` (`ecat_id`, `ecat_name`, `mcat_id`) VALUES
(75, 'Vision Care', 16),
(76, 'Boissons', 16),
(78, 'Household Supplies', 17),
(82, 'Sacs_scolaires', 19),
(85, 'Anniversaires', 32),
(86, 'Mariages', 32),
(87, 'Autres événements', 32),
(89, 'Accesssoires scolaires', 22),
(90, 'Tout ', 18),
(91, 'women items', 48),
(92, 'Vetements', 39),
(94, 'Disque Dur', 63),
(95, 'Coats & Jackets', 51),
(96, 'Vetements', 64),
(97, 'Electronique', 64),
(98, 'Ecouteurs', 63);

-- --------------------------------------------------------

--
-- Structure de la table `tbl_faq`
--

CREATE TABLE `tbl_faq` (
  `faq_id` int(11) NOT NULL,
  `faq_title` varchar(255) NOT NULL,
  `faq_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tbl_faq`
--

INSERT INTO `tbl_faq` (`faq_id`, `faq_title`, `faq_content`) VALUES
(1, 'Comment trouver un objet?', '<h3 class=\"checkout-complete-box font-bold txt16\" style=\"box-sizing: inherit; line-height: 1.4; color: rgb(0, 0, 0); margin: 0.2rem 0px 0.5rem; text-rendering: optimizelegibility; padding: 0px; background-color: rgb(250, 250, 250);\"><font color=\"#222222\" face=\"opensans, Helvetica Neue, Helvetica, Helvetica, Arial, sans-serif\"><span style=\"font-size: 15.7143px;\">Nous avons une large gamme de produits fabuleux à choisir.</span></font></h3><h3 class=\"checkout-complete-box font-bold txt16\" style=\"box-sizing: inherit; line-height: 1.4; color: rgb(0, 0, 0); margin: 0.2rem 0px 0.5rem; text-rendering: optimizelegibility; padding: 0px; background-color: rgb(250, 250, 250);\"><span helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;\"=\"\" style=\"font-size: 15.7143px; color: rgb(34, 34, 34);\">Astuce 1: Si vous recherchez un produit spécifique, utilisez la zone de recherche par mot-clé située en haut du site. Tapez simplement ce que vous recherchez et préparez-vous à être surpris!</span></h3><h3 class=\"checkout-complete-box font-bold txt16\" style=\"box-sizing: inherit; line-height: 1.4; color: rgb(0, 0, 0); margin: 0.2rem 0px 0.5rem; text-rendering: optimizelegibility; padding: 0px; background-color: rgb(250, 250, 250);\"><font color=\"#222222\" face=\"opensans, Helvetica Neue, Helvetica, Helvetica, Arial, sans-serif\"><span style=\"font-size: 15.7143px;\">Astuce 2: Si vous souhaitez explorer une catégorie de produits, utilisez les catégories de la boutique dans le menu supérieur et naviguez dans vos catégories préférées où nous présenterons les meilleurs produits dans chacune.</span></font></h3>\r\n'),
(2, 'Quelle est votre politique de retour?', '<p><span style=\"color: rgb(10, 10, 10);\">Vous avez 5 jours pour faire une demande de remboursement après la livraison de votre commande.</span><br></p>\r\n'),
(3, 'J\'ai reçu un article défectueux/endommagé, puis-je obtenir un remboursement?', '<p>Dans le cas où l\'article que vous avez reçu est endommagé ou défectueux, vous pouvez retourner un article dans le même état que vous l\'avez reçu avec la boîte et/ou l\'emballage d\'origine intacts. Une fois que nous aurons reçu l\'article retourné, nous l\'inspecterons et si l\'article s\'avère défectueux ou endommagé, nous traiterons le remboursement ainsi que les frais d\'expédition encourus.<br></p>\r\n'),
(4, 'Quand les « retours » ne sont-ils pas possibles ?', '<p class=\"a  \" helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" background-color:=\"\" rgb(250,=\"\" 250,=\"\" 250);\"=\"\" style=\"box-sizing: inherit; margin-bottom: 0.714286rem; text-rendering: optimizelegibility; line-height: 1.6; padding: 0px; font-size: 14px; color: rgb(10, 10, 10);\">Il existe quelques scénarios dans lesquels il nous est difficile de soutenir les retours:</p><ol helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" background-color:=\"\" rgb(250,=\"\" 250,=\"\" 250);\"=\"\" style=\"box-sizing: inherit; margin-right: 0px; margin-bottom: 0px; margin-left: 1.25rem; line-height: 1.6; padding: 0px; list-style-position: outside; color: rgb(10, 10, 10);\"><li style=\"box-sizing: inherit; margin: 0px; padding: 0px; font-size: inherit;\">La demande de retour est faite en dehors du délai indiqué, de 5 jours à compter de la livraison.</li><li style=\"box-sizing: inherit; margin: 0px; padding: 0px; font-size: inherit;\">Le produit est utilisé, endommagé ou n\'est pas dans le même état que celui dans lequel vous l\'avez reçu.</li><li style=\"box-sizing: inherit; margin: 0px; padding: 0px; font-size: inherit;\">Catégories spécifiques comme les vêtements d\'intérieur, la lingerie, les chaussettes et les vêtements gratuits, etc..</li><li style=\"box-sizing: inherit; margin: 0px; padding: 0px; font-size: inherit;\">Produits défectueux couverts par la garantie du fabricant.</li><li style=\"box-sizing: inherit; margin: 0px; padding: 0px; font-size: inherit;\">Tout article consommable qui a été utilisé ou installé.</li><li style=\"box-sizing: inherit; margin: 0px; padding: 0px; font-size: inherit;\">Produits avec des numéros de série falsifiés ou manquants.</li><li style=\"box-sizing: inherit; margin: 0px; padding: 0px; font-size: inherit;\">Tout ce qui manque dans le colis que vous avez reçu, y compris les étiquettes de prix, les étiquettes, l\'emballage d\'origine, les cadeaux et les accessoires.</li><li style=\"box-sizing: inherit; margin: 0px; padding: 0px; font-size: inherit;\">Articles fragiles, articles liés à l\'hygiène.</li></ol>\r\n'),
(5, 'Quels sont les articles qui ne peuvent pas être retournés?', '<p>The items that can not be returned are:</p><p>Clearance items clearly marked as such and displaying a No-Return Policy<br></p><p>When the offer notes states so specifically are items that cannot be returned.</p><p>Items that fall into the below product types-</p><ul><li>Underwear</li><li>Lingerie</li><li>Socks</li><li>Software</li><li>Music albums</li><li>Books</li><li>Swimwear</li><li>Beauty & Fragrances</li><li>Hosiery</li></ul><p>Also, any consumable items that are used or installed cannot be returned. As outlined in consumer Protection Rights and concerning section on non-returnable items</p>');

-- --------------------------------------------------------

--
-- Structure de la table `tbl_language`
--

CREATE TABLE `tbl_language` (
  `lang_id` int(11) NOT NULL,
  `lang_name` varchar(255) NOT NULL,
  `lang_value` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tbl_language`
--

INSERT INTO `tbl_language` (`lang_id`, `lang_name`, `lang_value`) VALUES
(1, 'Devise', '$'),
(2, 'Rechercher un produit', 'Rechercher un produit'),
(3, 'Rechercher', 'Rechercher'),
(4, 'Soumettre', 'Soumettre'),
(5, 'Mise à jour', 'Mise à jour'),
(6, 'Lire la suite', 'Lire la suite'),
(7, 'En série', 'En série'),
(8, 'Photo', 'Photo'),
(9, 'Se connecter', 'Se connecter'),
(10, 'Connexion client', 'Connexion client'),
(11, 'Cliquez ici pour vous identifier', 'Cliquez ici pour vous identifier'),
(12, 'Retour à la page de connexion', 'Retour à la page de connexion'),
(13, '', ''),
(14, 'Se déconnecter', 'Se déconnecter'),
(15, 'S\'inscrire', 'S\'inscrire'),
(16, 'Enregistrement client', 'Enregistrement client'),
(17, 'Inscription réussi', 'Inscription réussi'),
(18, 'Chariot', 'Chariot'),
(19, 'Voir le panier', 'Voir le panier'),
(20, 'Mise à jour panier', 'Mise à jour panier'),
(21, 'Retour au panier', 'Retour au panier'),
(22, 'Vérifier', 'Vérifier'),
(23, 'Passer à la caisse', 'Passer à la caisse'),
(24, 'Commandes', 'Commandes'),
(25, 'Historique des commandes', 'Historique des commandes'),
(26, 'détails de la commande', 'détails de la commande'),
(27, 'Date et heure de paiement', 'Date et heure de paiement'),
(28, 'Transaction ID', 'Transaction ID'),
(29, 'Montant payé', 'Montant payé'),
(30, 'Statut de paiement', 'Statut de paiement'),
(31, 'Mode de paiement', 'Mode de paiement'),
(32, 'ID de paiement', 'ID de paiement'),
(33, 'Section de paiement', 'Section de paiement'),
(34, 'Sélectionnez le mode de paiement', 'Sélectionnez le mode de paiement'),
(35, 'Sélectionnez une méthode', 'Sélectionnez une méthode'),
(36, 'PayPal', 'PayPal'),
(37, 'Stripe', 'Stripe'),
(38, 'Bank Deposit', 'Bank Deposit'),
(39, 'Numéro de carte', 'Numéro de carte'),
(40, 'CVV', 'CVV'),
(41, 'Mois', 'Mois'),
(42, 'Année', 'Année'),
(43, 'Envoyer à ce Détails', 'Envoyer à ce Détails'),
(44, 'Informations sur les transactions', 'Informations sur les transactions'),
(45, 'Inclure correctement l\'identifiant de transaction et d\'autres informations', 'Inclure correctement l\'identifiant de transaction et d\'autres informations'),
(46, 'Payez maintenant', 'Payez maintenant'),
(47, 'Nom du produit', 'Nom du produit'),
(48, 'détails du produit', 'détails du produit'),
(49, 'Catégories', 'Catégories'),
(50, 'Catégorie:', 'Catégorie:'),
(51, 'Tous les produits sous', 'Tous les produits sous'),
(52, 'Sélectionnez la taille', 'Sélectionnez la taille'),
(53, 'Sélectionnez la couleur', 'Sélectionnez la couleur'),
(54, 'Prix ??du produit', 'Prix ??du produit'),
(55, 'Quantité', 'Quantité'),
(56, 'En rupture de stock', 'En rupture de stock'),
(57, 'Partager ceci', 'Partager ceci'),
(58, 'Partager ce produit', 'Partager ce produit'),
(59, 'Description du produit', 'Description du produit'),
(60, 'Fonctionnalités', 'Fonctionnalités'),
(61, 'Conditions', 'Conditions'),
(62, 'Politique de retour', 'Politique de retour'),
(63, 'Commentaires', 'Commentaires'),
(64, 'Avis', 'Avis'),
(65, 'Donner un avis', 'Donner un avis'),
(66, 'Écrivez votre commentaire (facultatif)', 'Écrivez votre commentaire (facultatif)'),
(67, 'Poster le commentaire', 'Poster le commentaire'),
(68, 'Vous avez déjà donné une note !', 'Vous avez déjà donné une note !'),
(69, 'Vous devez vous connecter pour donner un avis', 'Vous devez vous connecter pour donner un avis'),
(70, 'Aucune description trouvée', 'Aucune description trouvée'),
(71, 'Aucune fonctionnalité trouvée', 'Aucune fonctionnalité trouvée'),
(72, 'Aucun état trouvé', 'Aucun état trouvé'),
(73, 'Aucune politique de retour trouvée', 'Aucune politique de retour trouvée'),
(74, 'Avis introuvable', 'Avis introuvable'),
(75, 'Nom du client', 'Nom du client'),
(76, 'Commentaire', 'Commentaire'),
(77, 'commentaires', 'commentaires'),
(78, 'Évaluation', 'Évaluation'),
(79, 'Précédent', 'Précédent'),
(80, 'Prochain', 'Prochain'),
(81, 'Sous-total', 'Sous-total'),
(82, 'Total', 'Total'),
(83, 'Action', 'Action'),
(84, 'Frais de livraison', 'Frais de livraison pour la ville selectionnée'),
(85, 'Continuer vos achats', 'Continuer vos achats'),
(86, 'Mettre à jour l\'adresse de facturation', 'Mettre à jour l\'adresse de facturation'),
(87, 'Mettre à jour l\'adresse de livraison', 'Mettre à jour l\'adresse de livraison'),
(88, 'Mettre à jour les informations de facturation et d\'expédition', 'Mettre à jour les informations de facturation et d\'expédition'),
(89, 'Tableau de bord', 'Tableau de bord'),
(90, 'Bienvenue sur le tableau de bord', 'Bienvenue sur le tableau de bord'),
(91, 'Retour au tableau de bord', 'Retour au tableau de bord'),
(92, 'S\'abonner', 'S\'abonner'),
(93, 'Abonnez-vous à notre newsletter', 'Abonnez-vous à notre newsletter'),
(94, 'Adresse e-mail', 'Adresse e-mail'),
(95, 'Entrez votre adresse email', 'Entrez votre adresse email'),
(96, 'Mot de passe', 'Mot de passe'),
(97, 'Mot de passe oublié', 'Mot de passe oublié'),
(98, 'Retaper le mot de passe', 'Retaper le mot de passe'),
(99, 'Mettre à jour le mot de passe', 'Mettre à jour le mot de passe'),
(100, 'nouveau mot de passe', 'nouveau mot de passe'),
(101, 'Retaper le nouveau mot de passe', 'Retaper le nouveau mot de passe'),
(102, 'Prénom', 'Prénom'),
(103, 'Nom et post-nom', 'Nom et post-nom'),
(104, 'Numéro de téléphone', 'Numéro de téléphone'),
(105, 'Adresse', 'Adresse'),
(106, 'Ville', 'Ville'),
(107, 'Ville', 'Ville'),
(108, 'État', 'État'),
(109, 'Code postal', 'Code postal'),
(110, 'À propos de nous', 'À propos de nous'),
(111, 'Articles du jour', 'Articles du jour'),
(112, 'Articles populaires', 'Articles populaires'),
(113, 'Messages récents', 'Messages récents'),
(114, 'Coordonnées', 'Coordonnées'),
(115, 'Formulaire de contact', 'Formulaire de contact'),
(116, 'Notre bureau', 'Notre bureau'),
(117, 'Mettre à jour le profil', 'Mettre à jour le profil'),
(118, 'Envoyer le message', 'Envoyer le message'),
(119, 'Message', 'Message'),
(120, 'Trouvez-nous sur la carte', 'Trouvez-nous sur la carte'),
(121, 'Félicitations ! Le paiement est réussi.', 'Félicitations ! Le paiement est réussi.'),
(122, 'Les informations de facturation et d\'expédition ont été mises à jour avec succès.', 'Les informations de facturation et d\'expédition ont été mises à jour avec succès.'),
(123, 'Le nom du client ne peut pas être vide.', 'Le nom du client ne peut pas être vide.'),
(124, 'Le numéro de téléphone ne peut pas être vide.', 'Le numéro de téléphone ne peut pas être vide.'),
(125, 'L\'adresse ne peut pas être vide.', 'L\'adresse ne peut pas être vide.'),
(126, 'Vous devez obligatoirement sélectionner une ville.', 'Vous devez obligatoirement sélectionner une ville.'),
(127, 'La ville ne peut pas être vide.', 'La ville ne peut pas être vide.'),
(128, 'L\'état ne peut pas être vide.', 'L\'état ne peut pas être vide.'),
(129, 'Le code postal ne peut pas être vide.', 'Le code postal ne peut pas être vide.'),
(130, 'Les informations de profil ont été mises à jour avec succès.', 'Les informations de profil ont été mises à jour avec succès.'),
(131, 'L\'adresse e-mail ne peut pas être vide', 'L\'adresse e-mail ne peut pas être vide'),
(132, 'L\'e-mail et/ou le mot de passe ne peuvent pas être vides.', 'L\'e-mail et/ou le mot de passe ne peuvent pas être vides.'),
(133, 'L\'adresse de messagerie ne correspond pas.', 'L\'adresse de messagerie ne correspond pas.'),
(134, 'L\'adresse e-mail doit être valide.', 'L\'adresse e-mail doit être valide.'),
(135, 'Votre adresse e-mail est introuvable dans notre système.', 'Votre adresse e-mail est introuvable dans notre système.'),
(136, 'Veuillez vérifier votre e-mail et confirmer votre abonnement.', 'Veuillez vérifier votre e-mail et confirmer votre abonnement.'),
(137, 'Votre email est vérifié avec succès. Vous pouvez maintenant vous connecter à notre site Web.', 'Votre email est vérifié avec succès. Vous pouvez maintenant vous connecter à notre site Web.'),
(138, 'Le mot de passe ne peut pas être vide.', 'Le mot de passe ne peut pas être vide.'),
(139, 'Les mots de passe ne correspondent pas.', 'Les mots de passe ne correspondent pas.'),
(140, 'Veuillez saisir de nouveaux mots de passe et les retaper.', 'Veuillez saisir de nouveaux mots de passe et les retaper.'),
(141, 'Le mot de passe est mis à jour avec succès.', 'Le mot de passe est mis à jour avec succès.'),
(142, 'Pour réinitialiser votre mot de passe, veuillez cliquer sur le lien ci-dessous.', 'Pour réinitialiser votre mot de passe, veuillez cliquer sur le lien ci-dessous.'),
(143, 'DEMANDE DE RÉINITIALISATION DU MOT DE PASSE - Dealnice.com', 'DEMANDE DE RÉINITIALISATION DU MOT DE PASSE - Dealnice.com'),
(144, 'Le délai de réinitialisation du mot de passe (24 heures) a expiré. Veuillez réessayer de réinitialiser votre mot de passe.', 'Le délai de réinitialisation du mot de passe (24 heures) a expiré. Veuillez réessayer de réinitialiser votre mot de passe.'),
(145, 'Un lien de confirmation est envoyé à votre adresse e-mail. Vous y trouverez les informations de réinitialisation du mot de passe.', 'Un lien de confirmation est envoyé à votre adresse e-mail. Vous y trouverez les informations de réinitialisation du mot de passe.'),
(146, 'Le mot de passe est réinitialisé avec succès. Vous pouvez maintenant vous connecter.', 'Le mot de passe est réinitialisé avec succès. Vous pouvez maintenant vous connecter.'),
(147, 'L\'adresse mail existe déjà.', 'L\'adresse mail existe déjà.'),
(148, 'Désolé! Votre compte est inactif. Veuillez contacter l\'administrateur.', 'Désolé! Votre compte est inactif. Veuillez contacter l\'administrateur.'),
(149, 'Changer le mot de passe', 'Changer le mot de passe'),
(150, 'E-mail de confirmation d\'inscription pour VOTRE SITE WEB', 'E-mail de confirmation d\'inscription pour VOTRE SITE WEB'),
(151, 'Merci pour votre inscription! Votre compte a été créé. Pour activer votre compte, cliquez sur le lien ci-dessous :', 'Merci pour votre inscription! Votre compte a été créé. Pour activer votre compte, cliquez sur le lien ci-dessous :'),
(152, 'Votre inscription est terminée. Veuillez vérifier votre adresse e-mail pour suivre le processus de confirmation de votre inscription.', 'Votre inscription est terminée. Veuillez vérifier votre adresse e-mail pour suivre le processus de confirmation de votre inscription.'),
(153, 'Aucun produit trouvé', 'Aucun produit trouvé'),
(154, 'Ajouter au chariot', 'Ajouter au chariot'),
(155, 'Produits similaires', 'Produits similaires'),
(156, 'Voir tous les produits connexes ci-dessous', 'Voir tous les produits connexes ci-dessous'),
(157, 'Taille', 'Taille'),
(158, 'Coleur', 'Coleur'),
(159, 'Prix', 'Prix'),
(160, 'Veuillez vous connecter en tant que client pour passer à la caisse', 'Veuillez vous connecter en tant que client pour passer à la caisse'),
(161, 'Adresse de facturation', 'Adresse de facturation'),
(162, 'Adresse de livraison', 'Adresse de livraison'),
(163, 'L\'évaluation a été soumise avec succès !', 'L\'évaluation a été soumise avec succès !');

-- --------------------------------------------------------

--
-- Structure de la table `tbl_mid_category`
--

CREATE TABLE `tbl_mid_category` (
  `mcat_id` int(11) NOT NULL,
  `mcat_name` varchar(255) NOT NULL,
  `tcat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tbl_mid_category`
--

INSERT INTO `tbl_mid_category` (`mcat_id`, `mcat_name`, `tcat_id`) VALUES
(16, 'Deal-Market', 5),
(17, 'Electro-Ménagé', 5),
(18, 'Founitures Scolaire', 6),
(19, 'Sacs', 6),
(22, 'Autres accessoires', 6),
(29, 'Sacs et Valises', 5),
(32, 'Gateaux', 7),
(34, 'Boissons', 5),
(37, 'Promotion', 8),
(38, 'Autres événements', 7),
(39, 'Hommes', 9),
(40, 'Chaussures Hommes', 9),
(41, 'Accessoires Hommes', 9),
(42, 'Oridnateurs', 10),
(43, 'Electroniques', 10),
(45, 'Téléphones', 10),
(46, 'Promotion Chaussures', 8),
(47, 'Promotion Vetement', 8),
(48, 'Femmes', 11),
(49, 'Chaussures Femmes', 11),
(50, 'Accessoires Femmes', 11),
(51, 'Vetements Femmes', 11),
(52, 'Enfants', 13),
(53, 'Accessoires Enfants', 13),
(54, 'Chaussures Enfants', 13),
(55, 'Bijoux Montre', 12),
(56, 'Bracelet', 12),
(57, 'Coliers', 12),
(58, 'Deal sur le campus Unilu', 14),
(59, 'Seconde main', 14),
(60, 'Romans', 15),
(61, 'Cours', 15),
(62, 'Livres', 15),
(63, 'Accessoires ', 10),
(64, 'Promotion', 16),
(65, 'Vestes', 9);

-- --------------------------------------------------------

--
-- Structure de la table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `size` varchar(100) NOT NULL,
  `color` varchar(100) NOT NULL,
  `quantity` varchar(50) NOT NULL,
  `unit_price` varchar(50) NOT NULL,
  `payment_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `tbl_page`
--

CREATE TABLE `tbl_page` (
  `id` int(11) NOT NULL,
  `about_title` varchar(255) NOT NULL,
  `about_content` text NOT NULL,
  `about_banner` varchar(255) NOT NULL,
  `about_meta_title` varchar(255) NOT NULL,
  `about_meta_keyword` text NOT NULL,
  `about_meta_description` text NOT NULL,
  `faq_title` varchar(255) NOT NULL,
  `faq_banner` varchar(255) NOT NULL,
  `faq_meta_title` varchar(255) NOT NULL,
  `faq_meta_keyword` text NOT NULL,
  `faq_meta_description` text NOT NULL,
  `blog_title` varchar(255) NOT NULL,
  `blog_banner` varchar(255) NOT NULL,
  `blog_meta_title` varchar(255) NOT NULL,
  `blog_meta_keyword` text NOT NULL,
  `blog_meta_description` text NOT NULL,
  `contact_title` varchar(255) NOT NULL,
  `contact_banner` varchar(255) NOT NULL,
  `contact_meta_title` varchar(255) NOT NULL,
  `contact_meta_keyword` text NOT NULL,
  `contact_meta_description` text NOT NULL,
  `pgallery_title` varchar(255) NOT NULL,
  `pgallery_banner` varchar(255) NOT NULL,
  `pgallery_meta_title` varchar(255) NOT NULL,
  `pgallery_meta_keyword` text NOT NULL,
  `pgallery_meta_description` text NOT NULL,
  `vgallery_title` varchar(255) NOT NULL,
  `vgallery_banner` varchar(255) NOT NULL,
  `vgallery_meta_title` varchar(255) NOT NULL,
  `vgallery_meta_keyword` text NOT NULL,
  `vgallery_meta_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tbl_page`
--

INSERT INTO `tbl_page` (`id`, `about_title`, `about_content`, `about_banner`, `about_meta_title`, `about_meta_keyword`, `about_meta_description`, `faq_title`, `faq_banner`, `faq_meta_title`, `faq_meta_keyword`, `faq_meta_description`, `blog_title`, `blog_banner`, `blog_meta_title`, `blog_meta_keyword`, `blog_meta_description`, `contact_title`, `contact_banner`, `contact_meta_title`, `contact_meta_keyword`, `contact_meta_description`, `pgallery_title`, `pgallery_banner`, `pgallery_meta_title`, `pgallery_meta_keyword`, `pgallery_meta_description`, `vgallery_title`, `vgallery_banner`, `vgallery_meta_title`, `vgallery_meta_keyword`, `vgallery_meta_description`) VALUES
(1, 'À propos de nous', '<p style=\"margin-top: 1.5rem; margin-bottom: 0px; border: 0px solid;\">Bienvenue chez DealNice!</p><p style=\"margin-top: 1.5rem; margin-bottom: 0px; border: 0px solid;\"><span style=\"border: 0px solid;\">Notre objectif est d\'offrir à nos clients une variété des dernièrs produits disponibles sur le marché</span>.<span style=\"border: 0px solid;\"> Nous avons parcouru un long chemin, nous savons donc exactement quelle direction prendre pour vous fournir des produits de haute qualité mais abordables. Nous offrons tout cela tout en offrant un excellent service client et un support amical.</span></p><p style=\"margin-top: 1.5rem; margin-bottom: 0px; border: 0px solid;\"><span style=\"border: 0px solid;\">Nous gardons toujours un œil sur les dernières tendances sur le maché et accordons la priorité aux souhaits de nos clients. C\'est pourquoi nous avons des clients satisfaits dans le monde entier et sommes ravis de faire partie de cette grande l\'industrie .</span></p><p style=\"margin-top: 1.5rem; margin-bottom: 0px; border: 0px solid;\"><span style=\"border: 0px solid;\">Les intérêts de nos clients sont toujours la priorité absolue pour nous, c\'est pourquoi nous espérons que vous apprécierez nos produits autant que nous aimons les mettre à votre disposition.</span></p><p>Nous nous assurons que vous obtenez les meilleurs Articles de qualité avec une politique de retour et d\'échange sans tracas. Nous nous assurons que ce que vous voyez est exactement ce que vous obtenez!</p><ul><li style=\"text-align: justify;\"><font face=\"apercu, Arial, sans-serif\"><span style=\"font-size: 14px;\">Garantie de prix bas</span></font><br></li><li style=\"text-align: justify;\"><font face=\"apercu, Arial, sans-serif\"><span style=\"font-size: 14px;\">Assistance client 24h/24 et 7j/7</span></font><br></li><li style=\"text-align: justify;\"><font face=\"apercu, Arial, sans-serif\"><span style=\"font-size: 14px;\">E-mail - SMS - Appel</span></font><br></li><li style=\"text-align: justify;\"><font face=\"apercu, Arial, sans-serif\"><span style=\"font-size: 14px;\">Nous sommes là pour vous 24h/24 et 7j/7 en ligne et par téléphone.</span></font></li><li style=\"text-align: justify;\"><font face=\"apercu, Arial, sans-serif\"><span style=\"font-size: 14px;\">Taille et couleur</span></font><br></li><li style=\"text-align: justify;\"><font face=\"apercu, Arial, sans-serif\"><span style=\"font-size: 14px;\">Livraison à dimicile</span></font><br></li><li style=\"text-align: justify;\"><font face=\"apercu, Arial, sans-serif\"><span style=\"font-size: 14px;\">Nous serions ravis d\'étendre bientôt notre activité à l\'international.</span></font></li><li style=\"text-align: justify;\"><font face=\"apercu, Arial, sans-serif\"><span style=\"font-size: 14px;\">Retours faciles</span></font><br></li></ul><p style=\"text-align: justify;\"><font face=\"apercu, Arial, sans-serif\"><span style=\"font-size: 14px;\">Vous avez acheté un article mais vous souhaitez la retourner ? Nous avons une politique de retour facile de 3 jours. S\'il vous plaît écrivez-nous à dealnicecoorp01@gmail.com pour plus de détails.</span></font></p><p style=\"text-align: justify;\"><font face=\"apercu, Arial, sans-serif\"><span style=\"font-size: 14px;\"><span style=\"font-weight: 700;\">Sécurité vérifiée</span></span></font><br></p><p style=\"text-align: justify;\"><font face=\"apercu, Arial, sans-serif\"><span style=\"font-size: 14px;\">Toutes nos transactions sont vérifiées par Norton et avec les normes de sécurité les plus élevées. De plus, il y a beaucoup à faire aussi grâce à des offres et des cadeaux passionnants réguliers, alors faites passer le mot et référez-nous à tout le monde de votre famille, amis et collègues et soyez récompensé pour cela. Et pour couronner le tout, vous pouvez partager votre expérience utilisateur en publiant des avis. N\'attendez plus Inscrivez-vous dès maintenant ! commencez à traquer, commencez à acheter et commencez à aimer et commencez à présenter la beauté en vous.</span></font></p>\r\n', 'about-banner.jpg', 'DealNice | About Us', 'à propos de, à propos de nous, à propos de la mode, à propos de l\'entreprise, à propos de DealNice', 'Notre objectif a toujours été d\'obtenir le meilleur de vous, nous avons apporté une énorme collection, que vous assistiez à une fête, à un mariage et à tous ces événements qui nécessitent une robe WOW.', 'FAQ', 'faq-banner.jpg', 'DealNice | FAQ', '', '', 'Blog', 'blog-banner.jpg', 'Ecommerce - Blog', '', '', 'Nous contacter', 'contact-banner.jpg', 'DealNice | Contact', '', '', 'Photo Gallery', 'pgallery-banner.jpg', 'Ecommerce - Photo Gallery', '', '', 'Video Gallery', 'vgallery-banner.jpg', 'Ecommerce - Video Gallery', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `payment_date` varchar(50) NOT NULL,
  `txnid` varchar(255) NOT NULL,
  `paid_amount` int(11) NOT NULL,
  `card_number` varchar(50) NOT NULL,
  `card_cvv` varchar(10) NOT NULL,
  `card_month` varchar(10) NOT NULL,
  `card_year` varchar(10) NOT NULL,
  `bank_transaction_info` text NOT NULL,
  `payment_method` varchar(20) NOT NULL,
  `payment_status` varchar(25) NOT NULL,
  `shipping_status` varchar(20) NOT NULL,
  `payment_id` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `tbl_photo`
--

CREATE TABLE `tbl_photo` (
  `id` int(11) NOT NULL,
  `caption` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tbl_photo`
--

INSERT INTO `tbl_photo` (`id`, `caption`, `photo`) VALUES
(1, 'Photo 1', 'photo-1.jpg'),
(2, 'Photo 2', 'photo-2.jpg'),
(3, 'Photo 3', 'photo-3.jpg'),
(4, 'Photo 4', 'photo-4.jpg'),
(5, 'Photo 5', 'photo-5.jpg'),
(6, 'Photo 6', 'photo-6.jpg'),
(7, 'h', 'photo-7.png');

-- --------------------------------------------------------

--
-- Structure de la table `tbl_post`
--

CREATE TABLE `tbl_post` (
  `post_id` int(11) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_slug` varchar(255) NOT NULL,
  `post_content` text NOT NULL,
  `post_date` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `total_view` int(11) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_keyword` text NOT NULL,
  `meta_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tbl_post`
--

INSERT INTO `tbl_post` (`post_id`, `post_title`, `post_slug`, `post_content`, `post_date`, `photo`, `category_id`, `total_view`, `meta_title`, `meta_keyword`, `meta_description`) VALUES
(1, 'Cu vel choro exerci pri et oratio iisque', 'cu-vel-choro-exerci-pri-et-oratio-iisque', '<p>Lorem ipsum dolor sit amet, qui case probo velit no, an postea scaevola partiendo mei. Id mea fuisset perpetua referrentur. Ut everti ceteros mei, alii discere eum no, duo id malis iuvaret. Ad sint everti accusam vel, ea viderer suscipiantur pri. Brute option minimum in cum, ignota iuvaret an pro.</p>\r\n\r\n<p>Solum atqui intellegebat mea an. Ne ius alterum aliquam. Ea nec populo aliquid mentitum, vis in meliore atomorum, sanctus consequat vituperatoribus duo ea. Ad doctus pertinacia ius, virtute fuisset id has, eum ut modo principes. Qui eu labore adversarium, oporteat delicata qui ut, an qui meliore principes. Id aliquid dolorum nam.</p>\r\n\r\n<p>Reque pericula philosophia ut mei, volumus eligendi mandamus has an. In nobis consulatu pri, has at timeam scaevola, has simul quaeque et. Te nec sale accumsan. Dolorem prodesset efficiendi sea ea.</p>\r\n\r\n<p>Et habeo modus debitis pri, vel quis fierent albucius ne. Ea animal meliore usu, nec etiam dolorum atomorum at, nam in audire mandamus omittantur. Cu ius dicam officiis molestiae, mea volumus officiis cotidieque no. Ut vel possim interpretaris, idque probatus antiopam has ad. Facilisi qualisque te sea, no dolorum mnesarchum usu.</p>\r\n\r\n<p>Eum tota graeci impetus an, eirmod invenire rationibus ne mel. Ignota habemus eum ex, vis omnesque delicata perpetua an. Sit id modo invidunt sapientem, ne eum vocibus dolores phaedrum. Case praesent appellantur eu per.</p>\r\n', '05-09-2017', 'news-1.jpg', 3, 14, 'Cu vel choro exerci pri et oratio iisque', '', ''),
(2, 'Epicurei necessitatibus eu facilisi postulant ', 'epicurei-necessitatibus-eu-facilisi-postulant-', '<p>Lorem ipsum dolor sit amet, qui case probo velit no, an postea scaevola partiendo mei. Id mea fuisset perpetua referrentur. Ut everti ceteros mei, alii discere eum no, duo id malis iuvaret. Ad sint everti accusam vel, ea viderer suscipiantur pri. Brute option minimum in cum, ignota iuvaret an pro.</p>\r\n\r\n<p>Solum atqui intellegebat mea an. Ne ius alterum aliquam. Ea nec populo aliquid mentitum, vis in meliore atomorum, sanctus consequat vituperatoribus duo ea. Ad doctus pertinacia ius, virtute fuisset id has, eum ut modo principes. Qui eu labore adversarium, oporteat delicata qui ut, an qui meliore principes. Id aliquid dolorum nam.</p>\r\n\r\n<p>Reque pericula philosophia ut mei, volumus eligendi mandamus has an. In nobis consulatu pri, has at timeam scaevola, has simul quaeque et. Te nec sale accumsan. Dolorem prodesset efficiendi sea ea.</p>\r\n\r\n<p>Et habeo modus debitis pri, vel quis fierent albucius ne. Ea animal meliore usu, nec etiam dolorum atomorum at, nam in audire mandamus omittantur. Cu ius dicam officiis molestiae, mea volumus officiis cotidieque no. Ut vel possim interpretaris, idque probatus antiopam has ad. Facilisi qualisque te sea, no dolorum mnesarchum usu.</p>\r\n\r\n<p>Eum tota graeci impetus an, eirmod invenire rationibus ne mel. Ignota habemus eum ex, vis omnesque delicata perpetua an. Sit id modo invidunt sapientem, ne eum vocibus dolores phaedrum. Case praesent appellantur eu per.</p>\r\n', '05-09-2017', 'news-2.jpg', 3, 6, 'Epicurei necessitatibus eu facilisi postulant ', '', ''),
(3, 'Mei ut errem legimus periculis eos liber', 'mei-ut-errem-legimus-periculis-eos-liber', '<p>Lorem ipsum dolor sit amet, qui case probo velit no, an postea scaevola partiendo mei. Id mea fuisset perpetua referrentur. Ut everti ceteros mei, alii discere eum no, duo id malis iuvaret. Ad sint everti accusam vel, ea viderer suscipiantur pri. Brute option minimum in cum, ignota iuvaret an pro.</p>\r\n\r\n<p>Solum atqui intellegebat mea an. Ne ius alterum aliquam. Ea nec populo aliquid mentitum, vis in meliore atomorum, sanctus consequat vituperatoribus duo ea. Ad doctus pertinacia ius, virtute fuisset id has, eum ut modo principes. Qui eu labore adversarium, oporteat delicata qui ut, an qui meliore principes. Id aliquid dolorum nam.</p>\r\n\r\n<p>Reque pericula philosophia ut mei, volumus eligendi mandamus has an. In nobis consulatu pri, has at timeam scaevola, has simul quaeque et. Te nec sale accumsan. Dolorem prodesset efficiendi sea ea.</p>\r\n\r\n<p>Et habeo modus debitis pri, vel quis fierent albucius ne. Ea animal meliore usu, nec etiam dolorum atomorum at, nam in audire mandamus omittantur. Cu ius dicam officiis molestiae, mea volumus officiis cotidieque no. Ut vel possim interpretaris, idque probatus antiopam has ad. Facilisi qualisque te sea, no dolorum mnesarchum usu.</p>\r\n\r\n<p>Eum tota graeci impetus an, eirmod invenire rationibus ne mel. Ignota habemus eum ex, vis omnesque delicata perpetua an. Sit id modo invidunt sapientem, ne eum vocibus dolores phaedrum. Case praesent appellantur eu per.</p>\r\n', '05-09-2017', 'news-3.jpg', 3, 1, 'Mei ut errem legimus periculis eos liber', '', ''),
(4, 'Id pro unum pertinax oportere vel', 'id-pro-unum-pertinax-oportere-vel', '<p>Lorem ipsum dolor sit amet, qui case probo velit no, an postea scaevola partiendo mei. Id mea fuisset perpetua referrentur. Ut everti ceteros mei, alii discere eum no, duo id malis iuvaret. Ad sint everti accusam vel, ea viderer suscipiantur pri. Brute option minimum in cum, ignota iuvaret an pro.</p>\r\n\r\n<p>Solum atqui intellegebat mea an. Ne ius alterum aliquam. Ea nec populo aliquid mentitum, vis in meliore atomorum, sanctus consequat vituperatoribus duo ea. Ad doctus pertinacia ius, virtute fuisset id has, eum ut modo principes. Qui eu labore adversarium, oporteat delicata qui ut, an qui meliore principes. Id aliquid dolorum nam.</p>\r\n\r\n<p>Reque pericula philosophia ut mei, volumus eligendi mandamus has an. In nobis consulatu pri, has at timeam scaevola, has simul quaeque et. Te nec sale accumsan. Dolorem prodesset efficiendi sea ea.</p>\r\n\r\n<p>Et habeo modus debitis pri, vel quis fierent albucius ne. Ea animal meliore usu, nec etiam dolorum atomorum at, nam in audire mandamus omittantur. Cu ius dicam officiis molestiae, mea volumus officiis cotidieque no. Ut vel possim interpretaris, idque probatus antiopam has ad. Facilisi qualisque te sea, no dolorum mnesarchum usu.</p>\r\n\r\n<p>Eum tota graeci impetus an, eirmod invenire rationibus ne mel. Ignota habemus eum ex, vis omnesque delicata perpetua an. Sit id modo invidunt sapientem, ne eum vocibus dolores phaedrum. Case praesent appellantur eu per.</p>\r\n', '05-09-2017', 'news-4.jpg', 4, 0, 'Id pro unum pertinax oportere vel', '', ''),
(5, 'Tollit cetero cu usu etiam evertitur', 'tollit-cetero-cu-usu-etiam-evertitur', '<p>Lorem ipsum dolor sit amet, qui case probo velit no, an postea scaevola partiendo mei. Id mea fuisset perpetua referrentur. Ut everti ceteros mei, alii discere eum no, duo id malis iuvaret. Ad sint everti accusam vel, ea viderer suscipiantur pri. Brute option minimum in cum, ignota iuvaret an pro.</p>\r\n\r\n<p>Solum atqui intellegebat mea an. Ne ius alterum aliquam. Ea nec populo aliquid mentitum, vis in meliore atomorum, sanctus consequat vituperatoribus duo ea. Ad doctus pertinacia ius, virtute fuisset id has, eum ut modo principes. Qui eu labore adversarium, oporteat delicata qui ut, an qui meliore principes. Id aliquid dolorum nam.</p>\r\n\r\n<p>Reque pericula philosophia ut mei, volumus eligendi mandamus has an. In nobis consulatu pri, has at timeam scaevola, has simul quaeque et. Te nec sale accumsan. Dolorem prodesset efficiendi sea ea.</p>\r\n\r\n<p>Et habeo modus debitis pri, vel quis fierent albucius ne. Ea animal meliore usu, nec etiam dolorum atomorum at, nam in audire mandamus omittantur. Cu ius dicam officiis molestiae, mea volumus officiis cotidieque no. Ut vel possim interpretaris, idque probatus antiopam has ad. Facilisi qualisque te sea, no dolorum mnesarchum usu.</p>\r\n\r\n<p>Eum tota graeci impetus an, eirmod invenire rationibus ne mel. Ignota habemus eum ex, vis omnesque delicata perpetua an. Sit id modo invidunt sapientem, ne eum vocibus dolores phaedrum. Case praesent appellantur eu per.</p>\r\n', '05-09-2017', 'news-5.jpg', 4, 24, 'Tollit cetero cu usu etiam evertitur', '', ''),
(6, 'Omnes ornatus qui et te aeterno', 'omnes-ornatus-qui-et-te-aeterno', '<p>Lorem ipsum dolor sit amet, qui case probo velit no, an postea scaevola partiendo mei. Id mea fuisset perpetua referrentur. Ut everti ceteros mei, alii discere eum no, duo id malis iuvaret. Ad sint everti accusam vel, ea viderer suscipiantur pri. Brute option minimum in cum, ignota iuvaret an pro.</p>\r\n\r\n<p>Solum atqui intellegebat mea an. Ne ius alterum aliquam. Ea nec populo aliquid mentitum, vis in meliore atomorum, sanctus consequat vituperatoribus duo ea. Ad doctus pertinacia ius, virtute fuisset id has, eum ut modo principes. Qui eu labore adversarium, oporteat delicata qui ut, an qui meliore principes. Id aliquid dolorum nam.</p>\r\n\r\n<p>Reque pericula philosophia ut mei, volumus eligendi mandamus has an. In nobis consulatu pri, has at timeam scaevola, has simul quaeque et. Te nec sale accumsan. Dolorem prodesset efficiendi sea ea.</p>\r\n\r\n<p>Et habeo modus debitis pri, vel quis fierent albucius ne. Ea animal meliore usu, nec etiam dolorum atomorum at, nam in audire mandamus omittantur. Cu ius dicam officiis molestiae, mea volumus officiis cotidieque no. Ut vel possim interpretaris, idque probatus antiopam has ad. Facilisi qualisque te sea, no dolorum mnesarchum usu.</p>\r\n\r\n<p>Eum tota graeci impetus an, eirmod invenire rationibus ne mel. Ignota habemus eum ex, vis omnesque delicata perpetua an. Sit id modo invidunt sapientem, ne eum vocibus dolores phaedrum. Case praesent appellantur eu per.</p>\r\n', '05-09-2017', 'news-6.jpg', 4, 2, 'Omnes ornatus qui et te aeterno', '', ''),
(7, 'Vix tale noluisse voluptua ad ne', 'vix-tale-noluisse-voluptua-ad-ne', '<p>Lorem ipsum dolor sit amet, qui case probo velit no, an postea scaevola partiendo mei. Id mea fuisset perpetua referrentur. Ut everti ceteros mei, alii discere eum no, duo id malis iuvaret. Ad sint everti accusam vel, ea viderer suscipiantur pri. Brute option minimum in cum, ignota iuvaret an pro.</p>\r\n\r\n<p>Solum atqui intellegebat mea an. Ne ius alterum aliquam. Ea nec populo aliquid mentitum, vis in meliore atomorum, sanctus consequat vituperatoribus duo ea. Ad doctus pertinacia ius, virtute fuisset id has, eum ut modo principes. Qui eu labore adversarium, oporteat delicata qui ut, an qui meliore principes. Id aliquid dolorum nam.</p>\r\n\r\n<p>Reque pericula philosophia ut mei, volumus eligendi mandamus has an. In nobis consulatu pri, has at timeam scaevola, has simul quaeque et. Te nec sale accumsan. Dolorem prodesset efficiendi sea ea.</p>\r\n\r\n<p>Et habeo modus debitis pri, vel quis fierent albucius ne. Ea animal meliore usu, nec etiam dolorum atomorum at, nam in audire mandamus omittantur. Cu ius dicam officiis molestiae, mea volumus officiis cotidieque no. Ut vel possim interpretaris, idque probatus antiopam has ad. Facilisi qualisque te sea, no dolorum mnesarchum usu.</p>\r\n\r\n<p>Eum tota graeci impetus an, eirmod invenire rationibus ne mel. Ignota habemus eum ex, vis omnesque delicata perpetua an. Sit id modo invidunt sapientem, ne eum vocibus dolores phaedrum. Case praesent appellantur eu per.</p>\r\n', '05-09-2017', 'news-7.jpg', 2, 0, 'Vix tale noluisse voluptua ad ne', '', ''),
(8, 'Liber utroque vim an ne his brute', 'liber-utroque-vim-an-ne-his-brute', '<p>Lorem ipsum dolor sit amet, qui case probo velit no, an postea scaevola partiendo mei. Id mea fuisset perpetua referrentur. Ut everti ceteros mei, alii discere eum no, duo id malis iuvaret. Ad sint everti accusam vel, ea viderer suscipiantur pri. Brute option minimum in cum, ignota iuvaret an pro.</p>\r\n\r\n<p>Solum atqui intellegebat mea an. Ne ius alterum aliquam. Ea nec populo aliquid mentitum, vis in meliore atomorum, sanctus consequat vituperatoribus duo ea. Ad doctus pertinacia ius, virtute fuisset id has, eum ut modo principes. Qui eu labore adversarium, oporteat delicata qui ut, an qui meliore principes. Id aliquid dolorum nam.</p>\r\n\r\n<p>Reque pericula philosophia ut mei, volumus eligendi mandamus has an. In nobis consulatu pri, has at timeam scaevola, has simul quaeque et. Te nec sale accumsan. Dolorem prodesset efficiendi sea ea.</p>\r\n\r\n<p>Et habeo modus debitis pri, vel quis fierent albucius ne. Ea animal meliore usu, nec etiam dolorum atomorum at, nam in audire mandamus omittantur. Cu ius dicam officiis molestiae, mea volumus officiis cotidieque no. Ut vel possim interpretaris, idque probatus antiopam has ad. Facilisi qualisque te sea, no dolorum mnesarchum usu.</p>\r\n\r\n<p>Eum tota graeci impetus an, eirmod invenire rationibus ne mel. Ignota habemus eum ex, vis omnesque delicata perpetua an. Sit id modo invidunt sapientem, ne eum vocibus dolores phaedrum. Case praesent appellantur eu per.</p>\r\n', '05-09-2017', 'news-8.jpg', 2, 12, 'Liber utroque vim an ne his brute', '', ''),
(9, 'Nostrum copiosae argumentum has', 'nostrum-copiosae-argumentum-has', '<p>Lorem ipsum dolor sit amet, qui case probo velit no, an postea scaevola partiendo mei. Id mea fuisset perpetua referrentur. Ut everti ceteros mei, alii discere eum no, duo id malis iuvaret. Ad sint everti accusam vel, ea viderer suscipiantur pri. Brute option minimum in cum, ignota iuvaret an pro.</p>\r\n\r\n<p>Solum atqui intellegebat mea an. Ne ius alterum aliquam. Ea nec populo aliquid mentitum, vis in meliore atomorum, sanctus consequat vituperatoribus duo ea. Ad doctus pertinacia ius, virtute fuisset id has, eum ut modo principes. Qui eu labore adversarium, oporteat delicata qui ut, an qui meliore principes. Id aliquid dolorum nam.</p>\r\n\r\n<p>Reque pericula philosophia ut mei, volumus eligendi mandamus has an. In nobis consulatu pri, has at timeam scaevola, has simul quaeque et. Te nec sale accumsan. Dolorem prodesset efficiendi sea ea.</p>\r\n\r\n<p>Et habeo modus debitis pri, vel quis fierent albucius ne. Ea animal meliore usu, nec etiam dolorum atomorum at, nam in audire mandamus omittantur. Cu ius dicam officiis molestiae, mea volumus officiis cotidieque no. Ut vel possim interpretaris, idque probatus antiopam has ad. Facilisi qualisque te sea, no dolorum mnesarchum usu.</p>\r\n\r\n<p>Eum tota graeci impetus an, eirmod invenire rationibus ne mel. Ignota habemus eum ex, vis omnesque delicata perpetua an. Sit id modo invidunt sapientem, ne eum vocibus dolores phaedrum. Case praesent appellantur eu per.</p>\r\n', '05-09-2017', 'news-9.jpg', 1, 12, 'Nostrum copiosae argumentum has', '', ''),
(10, 'An labores explicari qui eu', 'an-labores-explicari-qui-eu', '<p>Lorem ipsum dolor sit amet, qui case probo velit no, an postea scaevola partiendo mei. Id mea fuisset perpetua referrentur. Ut everti ceteros mei, alii discere eum no, duo id malis iuvaret. Ad sint everti accusam vel, ea viderer suscipiantur pri. Brute option minimum in cum, ignota iuvaret an pro.</p>\r\n\r\n<p>Solum atqui intellegebat mea an. Ne ius alterum aliquam. Ea nec populo aliquid mentitum, vis in meliore atomorum, sanctus consequat vituperatoribus duo ea. Ad doctus pertinacia ius, virtute fuisset id has, eum ut modo principes. Qui eu labore adversarium, oporteat delicata qui ut, an qui meliore principes. Id aliquid dolorum nam.</p>\r\n\r\n<p>Reque pericula philosophia ut mei, volumus eligendi mandamus has an. In nobis consulatu pri, has at timeam scaevola, has simul quaeque et. Te nec sale accumsan. Dolorem prodesset efficiendi sea ea.</p>\r\n\r\n<p>Et habeo modus debitis pri, vel quis fierent albucius ne. Ea animal meliore usu, nec etiam dolorum atomorum at, nam in audire mandamus omittantur. Cu ius dicam officiis molestiae, mea volumus officiis cotidieque no. Ut vel possim interpretaris, idque probatus antiopam has ad. Facilisi qualisque te sea, no dolorum mnesarchum usu.</p>\r\n\r\n<p>Eum tota graeci impetus an, eirmod invenire rationibus ne mel. Ignota habemus eum ex, vis omnesque delicata perpetua an. Sit id modo invidunt sapientem, ne eum vocibus dolores phaedrum. Case praesent appellantur eu per.</p>\r\n', '05-09-2017', 'news-10.jpg', 1, 4, 'An labores explicari qui eu', '', ''),
(11, 'Lorem ipsum dolor sit amet', 'lorem-ipsum-dolor-sit-amet', '<p>Lorem ipsum dolor sit amet, qui case probo velit no, an postea scaevola partiendo mei. Id mea fuisset perpetua referrentur. Ut everti ceteros mei, alii discere eum no, duo id malis iuvaret. Ad sint everti accusam vel, ea viderer suscipiantur pri. Brute option minimum in cum, ignota iuvaret an pro.</p>\r\n\r\n<p>Solum atqui intellegebat mea an. Ne ius alterum aliquam. Ea nec populo aliquid mentitum, vis in meliore atomorum, sanctus consequat vituperatoribus duo ea. Ad doctus pertinacia ius, virtute fuisset id has, eum ut modo principes. Qui eu labore adversarium, oporteat delicata qui ut, an qui meliore principes. Id aliquid dolorum nam.</p>\r\n\r\n<p>Reque pericula philosophia ut mei, volumus eligendi mandamus has an. In nobis consulatu pri, has at timeam scaevola, has simul quaeque et. Te nec sale accumsan. Dolorem prodesset efficiendi sea ea.</p>\r\n\r\n<p>Et habeo modus debitis pri, vel quis fierent albucius ne. Ea animal meliore usu, nec etiam dolorum atomorum at, nam in audire mandamus omittantur. Cu ius dicam officiis molestiae, mea volumus officiis cotidieque no. Ut vel possim interpretaris, idque probatus antiopam has ad. Facilisi qualisque te sea, no dolorum mnesarchum usu.</p>\r\n\r\n<p>Eum tota graeci impetus an, eirmod invenire rationibus ne mel. Ignota habemus eum ex, vis omnesque delicata perpetua an. Sit id modo invidunt sapientem, ne eum vocibus dolores phaedrum. Case praesent appellantur eu per.</p>\r\n', '05-09-2017', 'news-11.jpg', 1, 18, 'Lorem ipsum dolor sit amet', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `p_old_price` varchar(10) NOT NULL,
  `p_current_price` varchar(10) NOT NULL,
  `p_qty` int(10) NOT NULL,
  `p_featured_photo` varchar(255) NOT NULL,
  `p_description` text NOT NULL,
  `p_short_description` text NOT NULL,
  `p_feature` text NOT NULL,
  `p_condition` text NOT NULL,
  `p_return_policy` text NOT NULL,
  `p_total_view` int(11) NOT NULL,
  `p_is_featured` int(1) NOT NULL,
  `p_is_active` int(1) NOT NULL,
  `ecat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tbl_product`
--

INSERT INTO `tbl_product` (`p_id`, `p_name`, `p_old_price`, `p_current_price`, `p_qty`, `p_featured_photo`, `p_description`, `p_short_description`, `p_feature`, `p_condition`, `p_return_policy`, `p_total_view`, `p_is_featured`, `p_is_active`, `ecat_id`) VALUES
(108, 'Women\'s Plus-Size Shirt Dress with Gold Hardware', '19', '16', 10, 'product-featured-108.jpg', '<p><span style=\"color: rgb(15, 17, 17);\">This dress has everything! Enough stretch to be forgiving. Works for my hourglass/pear shape just fine. The cap sleeves satisfy conservative dressing requirements (no sleeveless) but still works for spring/summer.</span><br></p>', '<p>&lt;p&gt;From Calvin Klein&lt;/p&gt;<br></p>', '<ul><li style=\"list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span class=\"a-list-item\" style=\"overflow-wrap: break-word; display: block;\">Cap-sleeve shirt dress featuring belted waist with gold-tone hardware accents</span></li><li style=\"list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span class=\"a-list-item\" style=\"overflow-wrap: break-word; display: block;\">Split v-neckline</span></li><li style=\"list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span class=\"a-list-item\" style=\"overflow-wrap: break-word; display: block;\">Exposed center back zipper</span></li></ul>', '<p><span style=\"color: rgb(51, 51, 51); font-size: 14px;\">This is a sample text for conditions.</span><br></p>', '<p><span style=\"margin: 0px; padding: 0px; color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px;\">Offers a&nbsp;</span><span style=\"margin: 0px; padding: 0px; color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px;\">15 to 30-day window</span><span style=\"margin: 0px; padding: 0px; color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px;\">&nbsp;in which customers can return a product and ask for a refund. Some businesses extend that period up to 90 days. Regardless of the time frame you choose, ensuring that you actually have a time frame is essential.</span><br></p>', 0, 1, 1, 91),
(109, 'Men\'s Long Cuffed Jogger Yoga Sweat Pant', '12', '10', 9, 'product-featured-109.jpg', '<p><span style=\"color: rgb(51, 51, 51);\">We warmly welcome you to our \"Long\" Mens Cuffed Perfection Yoga Pant - our most exciting product launch of the year -&nbsp;</span><span style=\"color: rgb(51, 51, 51); font-weight: 700;\">and voted \"Favorite Yoga Pant\" by Instructors in YOGA JOURNAL magazine! (Spring/2015)</span><br></p>', '<p>&lt;p style=\"padding: 0px; margin-top: 0px; text-rendering: optimizelegibility; margin-bottom: 0px !important; line-height: 32px !important;\"&gt;&lt;span id=\"productTitle\" class=\"a-size-large product-title-word-break\" style=\"text-rendering: optimizelegibility; word-break: break-word; line-height: 32px !important;\"&gt;Long Cuffed Jogger Pants&lt;/span&gt;&lt;/p&gt;<br></p>', '<ul><li style=\"list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span class=\"a-list-item\" style=\"overflow-wrap: break-word; display: block;\">Proudly brought to you by 4-rth: over 10 years in business from LA, California. Designed, manufactured &amp; shipped from Los Angeles, CA.</span></li><li style=\"list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span class=\"a-list-item\" style=\"overflow-wrap: break-word; display: block;\">Fabric strips in the upper leg allow for complete expansion of the crotch area in ALL directions.</span></li><li style=\"list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span class=\"a-list-item\" style=\"overflow-wrap: break-word; display: block;\">Made from our Custom MODAL French-Terry fabric from the sustainable Birch Tree wood.</span></li><li style=\"list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span class=\"a-list-item\" style=\"overflow-wrap: break-word; display: block;\">Cuff at the bottom is form-fitting, yet relaxed. IDEAL for all Yoga styles - Ashtanga, Bikram, Hatha, Hot - as well as Pilates, Tennis &amp; Soccer!</span></li><li style=\"list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span class=\"a-list-item\" style=\"overflow-wrap: break-word; display: block;\">MODEL: 6\'2, 175lbs. Size: M. (See Product Description for specific SIZE guidelines!) Please IGNORE the \"size chart\" above!!</span></li></ul>', '<p><span style=\"color: rgb(51, 51, 51); font-size: 14px;\">This is a sample text for conditions.</span><br></p>', '<p><span style=\"margin: 0px; padding: 0px; color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px;\">Offers a&nbsp;</span><span style=\"margin: 0px; padding: 0px; color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px;\">15 to 30-day window</span><span style=\"margin: 0px; padding: 0px; color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px;\">&nbsp;in which customers can return a product and ask for a refund. Some businesses extend that period up to 90 days. Regardless of the time frame you choose, ensuring that you actually have a time frame is essential.</span><br></p>', 1, 1, 1, 92),
(110, 'Men\'s Long Cuffed Jogger Yoga Sweat Pant', '12', '10', 9, 'product-featured-110.jpg', '<p><span style=\"color: rgb(51, 51, 51);\">We warmly welcome you to our \"Long\" Mens Cuffed Perfection Yoga Pant - our most exciting product launch of the year -&nbsp;</span><span style=\"color: rgb(51, 51, 51); font-weight: 700;\">and voted \"Favorite Yoga Pant\" by Instructors in YOGA JOURNAL magazine! (Spring/2015)</span><br></p>', '<p>&lt;p style=\"padding: 0px; margin-top: 0px; text-rendering: optimizelegibility; margin-bottom: 0px !important; line-height: 32px !important;\"&gt;&lt;span id=\"productTitle\" class=\"a-size-large product-title-word-break\" style=\"text-rendering: optimizelegibility; word-break: break-word; line-height: 32px !important;\"&gt;Long Cuffed Jogger Pants&lt;/span&gt;&lt;/p&gt;<br></p>', '<ul><li style=\"list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span class=\"a-list-item\" style=\"overflow-wrap: break-word; display: block;\">Proudly brought to you by 4-rth: over 10 years in business from LA, California. Designed, manufactured &amp; shipped from Los Angeles, CA.</span></li><li style=\"list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span class=\"a-list-item\" style=\"overflow-wrap: break-word; display: block;\">Fabric strips in the upper leg allow for complete expansion of the crotch area in ALL directions.</span></li><li style=\"list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span class=\"a-list-item\" style=\"overflow-wrap: break-word; display: block;\">Made from our Custom MODAL French-Terry fabric from the sustainable Birch Tree wood.</span></li><li style=\"list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span class=\"a-list-item\" style=\"overflow-wrap: break-word; display: block;\">Cuff at the bottom is form-fitting, yet relaxed. IDEAL for all Yoga styles - Ashtanga, Bikram, Hatha, Hot - as well as Pilates, Tennis &amp; Soccer!</span></li><li style=\"list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span class=\"a-list-item\" style=\"overflow-wrap: break-word; display: block;\">MODEL: 6\'2, 175lbs. Size: M. (See Product Description for specific SIZE guidelines!) Please IGNORE the \"size chart\" above!!</span></li></ul>', '<p><span style=\"color: rgb(51, 51, 51); font-size: 14px;\">This is a sample text for conditions.</span><br></p>', '<p><span style=\"margin: 0px; padding: 0px; color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px;\">Offers a&nbsp;</span><span style=\"margin: 0px; padding: 0px; color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px;\">15 to 30-day window</span><span style=\"margin: 0px; padding: 0px; color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px;\">&nbsp;in which customers can return a product and ask for a refund. Some businesses extend that period up to 90 days. Regardless of the time frame you choose, ensuring that you actually have a time frame is essential.</span><br></p>', 0, 1, 1, 92),
(111, 'Women\'s Fuzzy Fleece Lapel Open Front Long Cardigan Coat', '14', '13', 10, 'product-featured-111.jpg', '<h3 class=\"a-spacing-mini\" amazon=\"\" ember\",=\"\" arial,=\"\" sans-serif;=\"\" color:=\"\" rgb(15,=\"\" 17,=\"\" 17);=\"\" margin-bottom:=\"\" 6px=\"\" !important;\"=\"\" style=\"font-weight: bold; line-height: 1.255; color: rgb(0, 0, 0); margin-top: 0px; margin-right: 0px; margin-left: 0px; font-size: 17px; padding: 0px; text-rendering: optimizelegibility;\">Design Details - Women Fuzzy Winter Teddy Coat</h3><p class=\"a-spacing-base\" amazon=\"\" ember\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" margin-bottom:=\"\" 14px=\"\" !important;\"=\"\" style=\"padding: 0px; color: rgb(15, 17, 17);\"></p><ul class=\"a-unordered-list a-vertical\" amazon=\"\" ember\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;\"=\"\" style=\"margin-right: 0px; margin-bottom: 18px; margin-left: 18px; color: rgb(15, 17, 17); padding: 0px;\"><li style=\"list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span class=\"a-list-item\"><span class=\"a-text-bold\" style=\"font-weight: 700 !important;\">Material:</span>Â 85% Cotton + 15% Spandex. This women\'s teddy coat is 100% brand new and high quality!</span></li><li style=\"list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span class=\"a-list-item\"><span class=\"a-text-bold\" style=\"font-weight: 700 !important;\">Style:</span>Â Causal, Long Sleeves, Knee Length, Fuzzy, Faux Fur, Lapel, Open Front, this women\'s teddy coat can be both chic and warm.</span></li><li style=\"list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span class=\"a-list-item\"><span class=\"a-text-bold\" style=\"font-weight: 700 !important;\">Occasion:</span>Â Spring, Fall, Winter, Work, Date, Vacation, Daily Casual, At Home . This women\'s faux fur coat is suitable for both formal and casual occasions.</span></li><li style=\"list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span class=\"a-list-item\"><span class=\"a-text-bold\" style=\"font-weight: 700 !important;\">Package include:</span>Â 1 Womens Fuzzy Coat</span></li><li style=\"list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span class=\"a-list-item\"><span class=\"a-text-bold\" style=\"font-weight: 700 !important;\">KINDLY NOTE: Different body types may have different fit from the model pictures, please refer to customer review images for more fitting information.</span></span></li><li style=\"list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span class=\"a-list-item\"><span class=\"a-text-bold\" style=\"font-weight: 700 !important;\">KINDLY NOTE: this item is designed to be open front and has no button or zipper closure. Please take it into consideration before purchase.</span></span></li></ul>', '<p><p style=\"list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span class=\"a-list-item\" style=\"overflow-wrap: break-word; display: block;\">Material:85% Polyester; 15% Spandex. 100% brand new and high quality!</span></p><br></p>', '<ul class=\"a-unordered-list a-vertical a-spacing-mini\" amazon=\"\" ember\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;\"=\"\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 18px; color: rgb(15, 17, 17); padding: 0px;\"><li style=\"list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span class=\"a-list-item\" style=\"overflow-wrap: break-word; display: block;\">No closure closure</span></li><li style=\"list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span class=\"a-list-item\" style=\"overflow-wrap: break-word; display: block;\">Material:85% Polyester; 15% Spandex. 100% brand new and high quality!</span></li><li style=\"list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span class=\"a-list-item\" style=\"overflow-wrap: break-word; display: block;\">Style: Causal, Long Sleeves, Knee Length, Fuzzy, Faux Fur, Lapel, Open Front</span></li><li style=\"list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span class=\"a-list-item\" style=\"overflow-wrap: break-word; display: block;\">Occasion: Spring, Fall, Winter, Work, Date, Vacation, Daily Casual, At Home</span></li><li style=\"list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span class=\"a-list-item\" style=\"overflow-wrap: break-word; display: block;\">Pair with: This women\'s coat goes perfect with a shirt/sweater & jeans/leggings/palazoo pants underneath and with short boots.</span></li><li style=\"list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span class=\"a-list-item\" style=\"overflow-wrap: break-word; display: block;\">KINDLY NOTE: Different body types may have different fit from the model pictures, please refer to customer review images for more fitting information.</span></li></ul>', '<p><span style=\"color: rgb(51, 51, 51); font-size: 14px;\">This is a sample text for conditions.</span><br></p>', '<p><span style=\"margin: 0px; padding: 0px; color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px;\">Offers aÂ </span><span style=\"margin: 0px; padding: 0px; color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px;\">15 to 30-day window</span><span style=\"margin: 0px; padding: 0px; color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px;\">Â in which customers can return a product and ask for a refund. Some businesses extend that period up to 90 days. Regardless of the time frame you choose, ensuring that you actually have a time frame is essential.</span><br></p>', 0, 0, 1, 95),
(112, 'Bose QuietComfort 45 Bluetooth Wireless Headphones', '14', '9', 10, 'product-featured-112.jpg', '<p><span style=\"color: rgb(51, 51, 51);\">The first noise cancelling headphones are back, with world-class quiet, lightweight materials, and proprietary technology for deep, clear sound. Bose QuietComfort 45 headphones arenâ€™t just an icon reborn â€“ theyâ€™re the perfect balance of quiet, comfort, and sound. Plus, everything that made the first around ear headphones an icon is still here. Just refined. Like an updated design with smooth cushions and a clean look. Plush synthetic leather, impact-resistant glass-filled nylon, and cast-metal hinges were all selected for their comfort as well as their durability. Add in minimal clamping force, and youâ€™ll almost forget youâ€™re wearing Bluetooth wireless noise cancelling headphones.</span><br></p>', '<p>Iconic, Quiet, Comfort and Sound.<br></p>', '<ul class=\"a-unordered-list a-vertical a-spacing-mini\" amazon=\"\" ember\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;\"=\"\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 18px; color: rgb(15, 17, 17); padding: 0px;\"><li style=\"list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span class=\"a-list-item\">Noise cancelling wireless headphones â€“ The perfect balance of quiet, comfort, and sound. Bose uses tiny mics to measure, compare, and react to outside noise, cancelling it with opposite signals.</span></li><li style=\"list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span class=\"a-list-item\">High-fidelity audio â€“ The TriPort acoustic architecture offers depth and fullness. Volume-optimized Active EQ maintains balanced performance at any volume, so bass stays consistent when turned down and the music remains clear when turned up.</span></li><li style=\"list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span class=\"a-list-item\">Quiet and Aware Modes â€“ Choose Quiet Mode for full noise cancelling, or Aware Mode to bring the outside into the around ear headphones and hear your environment and your music at the same time.</span></li><li style=\"list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span class=\"a-list-item\">Over ear headphones â€“ These comfortable wireless headphones are suitable for all-day wear. Crafted with plush synthetic leather and impact-resistant nylon, and designed with minimal clamping force, theyâ€™re as luxurious as they are durable.</span></li><li style=\"list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span class=\"a-list-item\">Up to 24 hours battery life â€“ Enjoy 24 hours of battery life from a single charge. A quick 15-minute charge offers 3 hours when youâ€™re on the go, or plug in the included audio cable to listen for even longer in wired mode.</span></li><li style=\"list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span class=\"a-list-item\">Around ear headphones charge via USB-C â€“ Headphones charge via the included USB-C cable.</span></li><li style=\"list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span class=\"a-list-item\">Bluetooth wireless noise cancelling headphones â€“ These headphones are optimized for a strong, reliable Bluetooth connection within 30 feet of the paired device.</span></li><li style=\"list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span class=\"a-list-item\">Bose Music app â€“ The app walks you through guided setup of your over ear headphones, making it easy to get started. Plus, access adjustable noise cancellation settings, manage your Bluetooth connections, enable shortcuts, and more.</span></li></ul>', '<p><span style=\"color: rgb(51, 51, 51); font-size: 14px;\">This is a sample text for conditions.</span><br></p>', '<p><span style=\"margin: 0px; padding: 0px; color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px;\">Offers aÂ&nbsp;</span><span style=\"margin: 0px; padding: 0px; color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px;\">15 to 30-day window</span><span style=\"margin: 0px; padding: 0px; color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px;\">Â&nbsp;in which customers can return a product and ask for a refund. Some businesses extend that period up to 90 days. Regardless of the time frame you choose, ensuring that you actually have a time frame is essential.</span><br></p>', 0, 0, 1, 97),
(113, 'WD 5TB Elements Portable External Hard Drive HDD', '', '100', 99, 'product-featured-113.jpg', '<p><span style=\"color: rgb(51, 51, 51);\">Western Digital elements portable hard drives offer reliable, high-capacity storage, fast data transfer rates and universal connectivity with USB 3.0 and USB 2.0 devices to back up your photos, videos and files on the go. The small, lightweight design offers up to 5TB capacity.</span><br></p>', '<p>&lt;p style=\"padding: 0px; margin-top: 0px; text-rendering: optimizelegibility; margin-bottom: 0px !important; line-height: 32px !important;\"&gt;&lt;span id=\"productTitle\" class=\"a-size-large product-title-word-break\" style=\"text-rendering: optimizelegibility; word-break: break-word; line-height: 32px !important;\"&gt;USB 3.0, Compatible with PC, Mac, PS4 &amp; Xbox - WDBU6Y0050BBK-WESN&lt;/span&gt;&lt;/p&gt;<br></p>', '<ul class=\"a-unordered-list a-vertical a-spacing-mini\" amazon=\"\" ember\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;\"=\"\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 18px; color: rgb(15, 17, 17); padding: 0px;\"><li style=\"list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span class=\"a-list-item\">USB 3.0 and USB 2.0 Compatibility</span></li><li style=\"list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span class=\"a-list-item\">Compatible with PC, Mac, PS4 &amp; Xbox</span></li><li style=\"list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span class=\"a-list-item\">Fast Data Transfers, Improve PC Performance</span></li><li style=\"list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span class=\"a-list-item\">High Capacity</span></li><li style=\"list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span class=\"a-list-item\">Memory Storage Capacity: 5TB</span></li></ul>', '<p><span style=\"color: rgb(51, 51, 51); font-size: 14px;\">This is a sample text for conditions.</span><br></p>', '<p><span style=\"margin: 0px; padding: 0px; color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px;\">Offers aÂ&nbsp;</span><span style=\"margin: 0px; padding: 0px; color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px;\">15 to 30-day window</span><span style=\"margin: 0px; padding: 0px; color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px;\">Â&nbsp;in which customers can return a product and ask for a refund. Some businesses extend that period up to 90 days. Regardless of the time frame you choose, ensuring that you actually have a time frame is essential.</span><br></p>', 0, 0, 1, 94),
(114, 'Oculus Quest 2 - Advanced All-In-One Virtual Reality Headset', '30', '25', 8, 'product-featured-114.jpg', '<p><span style=\"color: rgb(51, 51, 51);\">Oculus quest 2 is our most advanced all-in-one VR system yet. Every detail has been engineered to make virtual worlds adapt to your movements, letting you explore awe-inspiring games and experiences with unparalleled freedom. No PC or Console required. Get the most out of each moment with blazing-fast performance and next-generation graphics. Stay focused with a stunning display that features 50% more pixels than the original quest. Or take a break from the action and grab front-row seats to live concerts, exclusive events and more. The redesigned touch controllers feature improved ergonomics and intuitive controls that transport your gestures, motions and actions directly into VR. You can even connect your VR headset to a gaming-compatible computer with an Oculus Link cable to access hundreds of PC VR games and experiences. Quest 2 also lets you bring your friends into the action. With live casting, you can share your VR experience with people around you. Or meet up with friends in virtual worlds to battle in multiplayer competitions or just spend some time together. With Oculus quest 2, there\'s no end in sight to what you can play, create and discover in virtual reality.</span><br></p>', '<p>&lt;p style=\"padding: 0px; margin-top: 0px; text-rendering: optimizelegibility; margin-bottom: 0px !important; line-height: 32px !important;\"&gt;&lt;span id=\"productTitle\" class=\"a-size-large product-title-word-break\" style=\"text-rendering: optimizelegibility; word-break: break-word; line-height: 32px !important; font-family: Roboto;\"&gt;Advanced All-In-One Virtual Reality Headset&lt;/span&gt;&lt;/p&gt;<br></p>', '<ul class=\"a-unordered-list a-vertical a-spacing-mini\" amazon=\"\" ember\",=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;\"=\"\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 18px; color: rgb(15, 17, 17); padding: 0px;\"><li style=\"list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span class=\"a-list-item\">Next-level Hardware - Make every move count with a blazing-fast processor and our highest-resolution display</span></li><li style=\"list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span class=\"a-list-item\">All-In-One Gaming - With backward compatibility, you can explore new titles and old favorites in the expansive Quest content library</span></li><li style=\"list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span class=\"a-list-item\">Immersive Entertainment - Get the best seat in the house to live concerts, groundbreaking films, exclusive events and more</span></li><li style=\"list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span class=\"a-list-item\">Easy Setup - Just open the box, set up with the smartphone app and jump into VR. No PC or console needed. Requires wireless internet access and the Oculus app (free download) to set up device</span></li><li style=\"list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span class=\"a-list-item\">Premium Display - Catch every detail with a stunning display that features 50% more pixels than the original Quest</span></li><li style=\"list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span class=\"a-list-item\">Ultimate Control - Redesigned Oculus Touch controllers transport your movements directly into VR with intuitive controls</span></li><li style=\"list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span class=\"a-list-item\">PC VR Compatible - Step into incredible Oculus Rift titles by connecting an Oculus Link cable to a compatible gaming PC. Oculus Link Cable sold separately</span></li><li style=\"list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span class=\"a-list-item\">3D Cinematic Sound - Hear in all directions with built-in speakers that deliver cinematic 3D positional audio</span></li></ul>', '<p><span style=\"color: rgb(51, 51, 51); font-size: 14px;\">This is a sample text for conditions.</span><br></p>', '<p><span style=\"margin: 0px; padding: 0px; color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px;\">Offers a&nbsp;</span><span style=\"margin: 0px; padding: 0px; color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px;\">15 to 30-day window</span><span style=\"margin: 0px; padding: 0px; color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px;\">&nbsp;in which customers can return a product and ask for a refund. Some businesses extend that period up to 90 days. Regardless of the time frame you choose, ensuring that you actually have a time frame is essential.</span><br></p>', 1, 0, 1, 98),
(115, 'headphone boat', '50', '45', 6, 'product-featured-115.jpeg', '<p><span style=\"margin: 0px; padding: 0px; color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px;\">Offers a&nbsp;</span><span style=\"margin: 0px; padding: 0px; color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px;\">15 to 30-day window</span><span style=\"margin: 0px; padding: 0px; color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px;\">&nbsp;in which customers can return a product and ask for a refund. Some businesses extend that period up to 90 days. Regardless of the time frame you choose, ensuring that you actually have a time frame is essential.</span><br></p>', '<p><span style=\"margin: 0px; padding: 0px; color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px;\">Offers a&nbsp;</span><span style=\"margin: 0px; padding: 0px; color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px;\">15 to 30-day window</span><span style=\"margin: 0px; padding: 0px; color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px;\">&nbsp;in which customers can return a product and ask for a refund. Some businesses extend that period up to 90 days. Regardless of the time frame you choose, ensuring that you actually have a time frame is essential.</span><br></p>', '<p><span style=\"margin: 0px; padding: 0px; color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px;\">Offers a&nbsp;</span><span style=\"margin: 0px; padding: 0px; color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px;\">15 to 30-day window</span><span style=\"margin: 0px; padding: 0px; color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px;\">&nbsp;in which customers can return a product and ask for a refund. Some businesses extend that period up to 90 days. Regardless of the time frame you choose, ensuring that you actually have a time frame is essential.</span><br></p>', '<p><span style=\"margin: 0px; padding: 0px; color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px;\">Offers a&nbsp;</span><span style=\"margin: 0px; padding: 0px; color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px;\">15 to 30-day window</span><span style=\"margin: 0px; padding: 0px; color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px;\">&nbsp;in which customers can return a product and ask for a refund. Some businesses extend that period up to 90 days. Regardless of the time frame you choose, ensuring that you actually have a time frame is essential.</span><br></p>', '<p><span style=\"margin: 0px; padding: 0px; color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px;\">Offers a&nbsp;</span><span style=\"margin: 0px; padding: 0px; color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px;\">15 to 30-day window</span><span style=\"margin: 0px; padding: 0px; color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px;\">&nbsp;in which customers can return a product and ask for a refund. Some businesses extend that period up to 90 days. Regardless of the time frame you choose, ensuring that you actually have a time frame is essential.</span><br></p>', 0, 0, 1, 98),
(116, 'headphone boat 56H', '63', '60', 5, 'product-featured-116.jpeg', '<p><span style=\"margin: 0px; padding: 0px; color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px;\">Offers a&nbsp;</span><span style=\"margin: 0px; padding: 0px; color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px;\">15 to 30-day window</span><span style=\"margin: 0px; padding: 0px; color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px;\">&nbsp;in which customers can return a product and ask for a refund. Some businesses extend that period up to 90 days. Regardless of the time frame you choose, ensuring that you actually have a time frame is essential.</span><br></p>', '<p><span style=\"margin: 0px; padding: 0px; color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px;\">Offers a&nbsp;</span><span style=\"margin: 0px; padding: 0px; color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px;\">15 to 30-day window</span><span style=\"margin: 0px; padding: 0px; color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px;\">&nbsp;in which customers can return a product and ask for a refund. Some businesses extend that period up to 90 days. Regardless of the time frame you choose, ensuring that you actually have a time frame is essential.</span><br></p>', '<p><span style=\"margin: 0px; padding: 0px; color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px;\">Offers a&nbsp;</span><span style=\"margin: 0px; padding: 0px; color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px;\">15 to 30-day window</span><span style=\"margin: 0px; padding: 0px; color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px;\">&nbsp;in which customers can return a product and ask for a refund. Some businesses extend that period up to 90 days. Regardless of the time frame you choose, ensuring that you actually have a time frame is essential.</span><br></p>', '<p><span style=\"margin: 0px; padding: 0px; color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px;\">Offers a&nbsp;</span><span style=\"margin: 0px; padding: 0px; color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px;\">15 to 30-day window</span><span style=\"margin: 0px; padding: 0px; color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px;\">&nbsp;in which customers can return a product and ask for a refund. Some businesses extend that period up to 90 days. Regardless of the time frame you choose, ensuring that you actually have a time frame is essential.</span><br></p>', '<p><span style=\"margin: 0px; padding: 0px; color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px;\">Offers a&nbsp;</span><span style=\"margin: 0px; padding: 0px; color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px;\">15 to 30-day window</span><span style=\"margin: 0px; padding: 0px; color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px;\">&nbsp;in which customers can return a product and ask for a refund. Some businesses extend that period up to 90 days. Regardless of the time frame you choose, ensuring that you actually have a time frame is essential.</span><br></p>', 0, 0, 1, 98),
(117, 'headphone boat65', '65', '56', 10, 'product-featured-117.jpeg', '<p><span style=\"margin: 0px; padding: 0px; color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px;\">Offers a&nbsp;</span><span style=\"margin: 0px; padding: 0px; color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px;\">15 to 30-day window</span><span style=\"margin: 0px; padding: 0px; color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px;\">&nbsp;in which customers can return a product and ask for a refund. Some businesses extend that period up to 90 days. Regardless of the time frame you choose, ensuring that you actually have a time frame is essential.</span><br></p>', '<p><span style=\"margin: 0px; padding: 0px; color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px;\">Offers a&nbsp;</span><span style=\"margin: 0px; padding: 0px; color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px;\">15 to 30-day window</span><span style=\"margin: 0px; padding: 0px; color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px;\">&nbsp;in which customers can return a product and ask for a refund. Some businesses extend that period up to 90 days. Regardless of the time frame you choose, ensuring that you actually have a time frame is essential.</span><br></p>', '<p><span style=\"margin: 0px; padding: 0px; color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px;\">Offers a&nbsp;</span><span style=\"margin: 0px; padding: 0px; color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px;\">15 to 30-day window</span><span style=\"margin: 0px; padding: 0px; color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px;\">&nbsp;in which customers can return a product and ask for a refund. Some businesses extend that period up to 90 days. Regardless of the time frame you choose, ensuring that you actually have a time frame is essential.</span><br></p>', '<p><span style=\"margin: 0px; padding: 0px; color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px;\">Offers a&nbsp;</span><span style=\"margin: 0px; padding: 0px; color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px;\">15 to 30-day window</span><span style=\"margin: 0px; padding: 0px; color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px;\">&nbsp;in which customers can return a product and ask for a refund. Some businesses extend that period up to 90 days. Regardless of the time frame you choose, ensuring that you actually have a time frame is essential.</span><br></p>', '<p><span style=\"margin: 0px; padding: 0px; color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px;\">Offers a&nbsp;</span><span style=\"margin: 0px; padding: 0px; color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px;\">15 to 30-day window</span><span style=\"margin: 0px; padding: 0px; color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px;\">&nbsp;in which customers can return a product and ask for a refund. Some businesses extend that period up to 90 days. Regardless of the time frame you choose, ensuring that you actually have a time frame is essential.</span><br></p>', 3, 0, 1, 98);

-- --------------------------------------------------------

--
-- Structure de la table `tbl_product_color`
--

CREATE TABLE `tbl_product_color` (
  `id` int(11) NOT NULL,
  `color_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tbl_product_color`
--

INSERT INTO `tbl_product_color` (`id`, `color_id`, `p_id`) VALUES
(69, 1, 4),
(70, 4, 4),
(77, 6, 6),
(82, 2, 12),
(83, 9, 13),
(84, 3, 14),
(85, 2, 15),
(86, 6, 15),
(87, 3, 16),
(88, 3, 17),
(89, 2, 18),
(90, 3, 19),
(91, 1, 20),
(92, 8, 21),
(93, 2, 22),
(94, 2, 23),
(95, 2, 25),
(96, 5, 26),
(97, 2, 27),
(98, 4, 27),
(99, 5, 28),
(100, 7, 29),
(101, 10, 30),
(102, 11, 31),
(103, 14, 32),
(105, 2, 34),
(106, 1, 35),
(107, 3, 36),
(109, 6, 38),
(110, 2, 39),
(111, 11, 42),
(149, 3, 10),
(150, 6, 9),
(151, 3, 8),
(152, 7, 7),
(159, 2, 77),
(163, 17, 79),
(164, 2, 78),
(167, 3, 80),
(168, 2, 81),
(172, 1, 82),
(173, 2, 82),
(174, 4, 82),
(297, 2, 108),
(298, 3, 108),
(299, 14, 109),
(300, 14, 110),
(302, 5, 111),
(303, 2, 112),
(304, 2, 113),
(305, 6, 114),
(306, 3, 115),
(307, 6, 115),
(308, 2, 116),
(309, 4, 116),
(310, 6, 117);

-- --------------------------------------------------------

--
-- Structure de la table `tbl_product_photo`
--

CREATE TABLE `tbl_product_photo` (
  `pp_id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `p_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tbl_product_photo`
--

INSERT INTO `tbl_product_photo` (`pp_id`, `photo`, `p_id`) VALUES
(136, '136.jpg', 108),
(137, '137.jpg', 109),
(138, '138.jpg', 110),
(139, '139.jpg', 111),
(140, '140.jpg', 111),
(141, '141.jpg', 112),
(142, '142.jpg', 113),
(143, '143.jpg', 114),
(144, '144.jpeg', 115),
(145, '145.jpeg', 116),
(146, '146.jpeg', 117);

-- --------------------------------------------------------

--
-- Structure de la table `tbl_product_size`
--

CREATE TABLE `tbl_product_size` (
  `id` int(11) NOT NULL,
  `size_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tbl_product_size`
--

INSERT INTO `tbl_product_size` (`id`, `size_id`, `p_id`) VALUES
(44, 1, 6),
(56, 8, 12),
(57, 9, 12),
(58, 10, 12),
(59, 11, 12),
(60, 12, 12),
(61, 13, 12),
(62, 9, 13),
(63, 11, 13),
(64, 13, 13),
(65, 15, 13),
(66, 9, 14),
(67, 11, 14),
(68, 12, 14),
(69, 13, 14),
(70, 9, 15),
(71, 11, 15),
(72, 13, 15),
(73, 15, 16),
(74, 16, 16),
(75, 17, 16),
(76, 16, 17),
(77, 17, 17),
(78, 14, 18),
(79, 15, 18),
(80, 16, 18),
(81, 17, 18),
(82, 15, 19),
(83, 16, 19),
(84, 17, 19),
(85, 14, 20),
(86, 15, 20),
(87, 17, 20),
(88, 15, 21),
(89, 17, 21),
(90, 15, 22),
(91, 16, 22),
(92, 17, 22),
(93, 15, 23),
(94, 16, 23),
(95, 17, 23),
(96, 18, 25),
(97, 19, 25),
(98, 20, 25),
(99, 21, 25),
(100, 19, 26),
(101, 21, 26),
(102, 22, 26),
(103, 23, 26),
(104, 19, 27),
(105, 20, 27),
(106, 21, 27),
(107, 22, 27),
(108, 19, 28),
(109, 20, 28),
(110, 21, 28),
(111, 19, 29),
(112, 20, 29),
(113, 22, 29),
(114, 1, 30),
(115, 2, 30),
(116, 3, 30),
(117, 4, 30),
(118, 23, 31),
(119, 26, 32),
(123, 2, 34),
(124, 2, 35),
(125, 2, 36),
(126, 3, 36),
(129, 2, 38),
(130, 3, 38),
(131, 4, 38),
(132, 5, 38),
(133, 27, 39),
(134, 8, 42),
(210, 3, 10),
(211, 4, 10),
(212, 5, 10),
(213, 6, 10),
(214, 3, 9),
(215, 4, 9),
(216, 3, 8),
(217, 4, 8),
(218, 2, 7),
(219, 3, 7),
(220, 4, 7),
(249, 1, 79),
(250, 2, 79),
(251, 3, 79),
(252, 1, 78),
(253, 2, 78),
(254, 3, 78),
(255, 4, 78),
(256, 5, 78),
(259, 26, 80),
(262, 3, 82),
(263, 4, 82),
(517, 42, 108),
(518, 43, 108),
(519, 44, 108),
(520, 45, 108),
(521, 46, 108),
(522, 47, 108),
(523, 9, 109),
(524, 10, 109),
(525, 17, 109),
(526, 9, 110),
(527, 10, 110),
(528, 17, 110),
(533, 4, 111),
(534, 5, 111),
(535, 6, 111),
(536, 7, 111),
(537, 27, 112),
(538, 33, 113),
(539, 27, 114),
(540, 27, 115),
(541, 27, 116),
(542, 27, 117);

-- --------------------------------------------------------

--
-- Structure de la table `tbl_rating`
--

CREATE TABLE `tbl_rating` (
  `rt_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `tbl_service`
--

CREATE TABLE `tbl_service` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tbl_service`
--

INSERT INTO `tbl_service` (`id`, `title`, `content`, `photo`) VALUES
(5, 'Easy Returns', 'Return any item before 15 days!', 'service-5.png'),
(6, 'Free Shipping', 'Enjoy free shipping inside US.', 'service-6.png'),
(7, 'Fast Shipping', 'Items are shipped within 24 hours.', 'service-7.png'),
(11, 'Satisfaction Guarantee', 'We guarantee you with our quality satisfaction.', 'service-11.png'),
(12, 'Secure Checkout', 'Providing Secure Checkout Options for all', 'service-12.png'),
(13, 'Money Back Guarantee', 'Offer money back guarantee on our products', 'service-13.png');

-- --------------------------------------------------------

--
-- Structure de la table `tbl_settings`
--

CREATE TABLE `tbl_settings` (
  `id` int(11) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `favicon` varchar(255) NOT NULL,
  `footer_about` text NOT NULL,
  `footer_copyright` text NOT NULL,
  `contact_address` text NOT NULL,
  `contact_email` varchar(255) NOT NULL,
  `contact_phone` varchar(255) NOT NULL,
  `contact_fax` varchar(255) NOT NULL,
  `contact_map_iframe` text NOT NULL,
  `receive_email` varchar(255) NOT NULL,
  `receive_email_subject` varchar(255) NOT NULL,
  `receive_email_thank_you_message` text NOT NULL,
  `forget_password_message` text NOT NULL,
  `total_recent_post_footer` int(10) NOT NULL,
  `total_popular_post_footer` int(10) NOT NULL,
  `total_recent_post_sidebar` int(11) NOT NULL,
  `total_popular_post_sidebar` int(11) NOT NULL,
  `total_featured_product_home` int(11) NOT NULL,
  `total_latest_product_home` int(11) NOT NULL,
  `total_popular_product_home` int(11) NOT NULL,
  `meta_title_home` text NOT NULL,
  `meta_keyword_home` text NOT NULL,
  `meta_description_home` text NOT NULL,
  `banner_login` varchar(255) NOT NULL,
  `banner_registration` varchar(255) NOT NULL,
  `banner_forget_password` varchar(255) NOT NULL,
  `banner_reset_password` varchar(255) NOT NULL,
  `banner_search` varchar(255) NOT NULL,
  `banner_cart` varchar(255) NOT NULL,
  `banner_checkout` varchar(255) NOT NULL,
  `banner_product_category` varchar(255) NOT NULL,
  `banner_blog` varchar(255) NOT NULL,
  `cta_title` varchar(255) NOT NULL,
  `cta_content` text NOT NULL,
  `cta_read_more_text` varchar(255) NOT NULL,
  `cta_read_more_url` varchar(255) NOT NULL,
  `cta_photo` varchar(255) NOT NULL,
  `featured_product_title` varchar(255) NOT NULL,
  `featured_product_subtitle` varchar(255) NOT NULL,
  `latest_product_title` varchar(255) NOT NULL,
  `latest_product_subtitle` varchar(255) NOT NULL,
  `popular_product_title` varchar(255) NOT NULL,
  `popular_product_subtitle` varchar(255) NOT NULL,
  `testimonial_title` varchar(255) NOT NULL,
  `testimonial_subtitle` varchar(255) NOT NULL,
  `testimonial_photo` varchar(255) NOT NULL,
  `blog_title` varchar(255) NOT NULL,
  `blog_subtitle` varchar(255) NOT NULL,
  `newsletter_text` text NOT NULL,
  `paypal_email` varchar(255) NOT NULL,
  `stripe_public_key` varchar(255) NOT NULL,
  `stripe_secret_key` varchar(255) NOT NULL,
  `bank_detail` text NOT NULL,
  `before_head` text NOT NULL,
  `after_body` text NOT NULL,
  `before_body` text NOT NULL,
  `home_service_on_off` int(11) NOT NULL,
  `home_welcome_on_off` int(11) NOT NULL,
  `home_featured_product_on_off` int(11) NOT NULL,
  `home_latest_product_on_off` int(11) NOT NULL,
  `home_popular_product_on_off` int(11) NOT NULL,
  `home_testimonial_on_off` int(11) NOT NULL,
  `home_blog_on_off` int(11) NOT NULL,
  `newsletter_on_off` int(11) NOT NULL,
  `ads_above_welcome_on_off` int(1) NOT NULL,
  `ads_above_featured_product_on_off` int(1) NOT NULL,
  `ads_above_latest_product_on_off` int(1) NOT NULL,
  `ads_above_popular_product_on_off` int(1) NOT NULL,
  `ads_above_testimonial_on_off` int(1) NOT NULL,
  `ads_category_sidebar_on_off` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=COMPRESSED;

--
-- Déchargement des données de la table `tbl_settings`
--

INSERT INTO `tbl_settings` (`id`, `logo`, `favicon`, `footer_about`, `footer_copyright`, `contact_address`, `contact_email`, `contact_phone`, `contact_fax`, `contact_map_iframe`, `receive_email`, `receive_email_subject`, `receive_email_thank_you_message`, `forget_password_message`, `total_recent_post_footer`, `total_popular_post_footer`, `total_recent_post_sidebar`, `total_popular_post_sidebar`, `total_featured_product_home`, `total_latest_product_home`, `total_popular_product_home`, `meta_title_home`, `meta_keyword_home`, `meta_description_home`, `banner_login`, `banner_registration`, `banner_forget_password`, `banner_reset_password`, `banner_search`, `banner_cart`, `banner_checkout`, `banner_product_category`, `banner_blog`, `cta_title`, `cta_content`, `cta_read_more_text`, `cta_read_more_url`, `cta_photo`, `featured_product_title`, `featured_product_subtitle`, `latest_product_title`, `latest_product_subtitle`, `popular_product_title`, `popular_product_subtitle`, `testimonial_title`, `testimonial_subtitle`, `testimonial_photo`, `blog_title`, `blog_subtitle`, `newsletter_text`, `paypal_email`, `stripe_public_key`, `stripe_secret_key`, `bank_detail`, `before_head`, `after_body`, `before_body`, `home_service_on_off`, `home_welcome_on_off`, `home_featured_product_on_off`, `home_latest_product_on_off`, `home_popular_product_on_off`, `home_testimonial_on_off`, `home_blog_on_off`, `newsletter_on_off`, `ads_above_welcome_on_off`, `ads_above_featured_product_on_off`, `ads_above_latest_product_on_off`, `ads_above_popular_product_on_off`, `ads_above_testimonial_on_off`, `ads_category_sidebar_on_off`) VALUES
(1, 'logo.png', 'favicon.png', '<p>Lorem ipsum dolor sit amet, omnis signiferumque in mei, mei ex enim concludaturque. Senserit salutandi euripidis no per, modus maiestatis scribentur est an.Â Ea suas pertinax has.</p>\r\n', 'Copyright © 2022 - DealNice All Rights Reserved.', '93 Simpson Avenue\r\nHarrisburg, PA', 'dealnicecoorp01@gmail.com', '+243 84 666 0310', '', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3094.020958405712!2d-84.39261378514685!3d39.151504939531584!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8841acfb8da30203%3A0x193175e741781f21!2s4293%20Simpson%20Ave%2C%20Cincinnati%2C%20OH%2045227%2C%20USA!5e0!3m2!1sen!2snp!4v1647796779407!5m2!1sen!2snp\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', 'dealnicecoorp01@gmail.com', 'dealnicecoorp01@gmail.com', 'Merci d\'avoir envoyer votre message. Nous allons vous contacter dans les comments qui suivent', 'Un lien de confirmation est envoyé à votre adresse e-mail. Vous y trouverez les informations de réinitialisation du mot de passe.', 4, 4, 5, 5, 5, 16, 21, 'DealNice', 'boutique de mode en ligne, boutique L\'appareils électroniques et bien d\'autres, vêtements en ligne', 'DealNice project with mysql database', 'banner_login.jpg', 'banner_registration.jpg', 'banner_forget_password.jpg', 'banner_reset_password.jpg', 'banner_search.jpg', 'banner_cart.jpg', 'banner_checkout.jpg', 'banner_product_category.jpg', 'banner_blog.jpg', 'Bienvenue sur notre site DealNice', 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, \r\nat usu eius eligendi singulis. Sea ocurreret principes ne. At nonumy aperiri pri, nam quodsi copiosae intellegebat et, ex deserunt euripidis usu. ', 'Voir Plus', '#', 'cta.jpg', 'Produits vedettes', 'Notre liste des produits en promotion', 'Nouveaux produits', 'Notre liste des produits ajouté recemment', 'Produits Populaires', 'Produits populaires basé sur les choix des clients', 'Témoignages', 'Découvrez ce que nos clients disent de nous', 'testimonial.jpg', 'Dernier blog', 'Voir tous nos derniers articles et actualités ci-dessous', 'Inscrevez-vous à notre Newsletter  pour tout savoir sur nos deniers promotions et réduction.', 'admin@ecom.com', 'pk_test_0SwMWadgu8DwmEcPdUPRsZ7b', 'sk_test_TFcsLJ7xxUtpALbDo1L5c1PN', 'Methode de paiement choisi: Cash', '', '<div id=\"fb-root\"></div>\r\n<script>(function(d, s, id) {\r\n  var js, fjs = d.getElementsByTagName(s)[0];\r\n  if (d.getElementById(id)) return;\r\n  js = d.createElement(s); js.id = id;\r\n  js.src = \"//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10&appId=323620764400430\";\r\n  fjs.parentNode.insertBefore(js, fjs);\r\n}(document, \'script\', \'facebook-jssdk\'));</script>', '<!--Start of Tawk.to Script-->\r\n<script type=\"text/javascript\">\r\nvar Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();\r\n(function(){\r\nvar s1=document.createElement(\"script\"),s0=document.getElementsByTagName(\"script\")[0];\r\ns1.async=true;\r\ns1.src=\'https://embed.tawk.to/5ae370d7227d3d7edc24cb96/default\';\r\ns1.charset=\'UTF-8\';\r\ns1.setAttribute(\'crossorigin\',\'*\');\r\ns0.parentNode.insertBefore(s1,s0);\r\n})();\r\n</script>\r\n<!--End of Tawk.to Script-->', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `tbl_shipping_cost`
--

CREATE TABLE `tbl_shipping_cost` (
  `shipping_cost_id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `amount` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tbl_shipping_cost`
--

INSERT INTO `tbl_shipping_cost` (`shipping_cost_id`, `country_id`, `amount`) VALUES
(1, 228, '11'),
(2, 167, '10'),
(3, 13, '8'),
(4, 230, '0'),
(5, 246, '4'),
(6, 246, '4');

-- --------------------------------------------------------

--
-- Structure de la table `tbl_shipping_cost_all`
--

CREATE TABLE `tbl_shipping_cost_all` (
  `sca_id` int(11) NOT NULL,
  `amount` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tbl_shipping_cost_all`
--

INSERT INTO `tbl_shipping_cost_all` (`sca_id`, `amount`) VALUES
(1, '100');

-- --------------------------------------------------------

--
-- Structure de la table `tbl_size`
--

CREATE TABLE `tbl_size` (
  `size_id` int(11) NOT NULL,
  `size_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tbl_size`
--

INSERT INTO `tbl_size` (`size_id`, `size_name`) VALUES
(1, 'XS'),
(2, 'S'),
(3, 'M'),
(4, 'L'),
(5, 'XL'),
(6, 'XXL'),
(7, '3XL'),
(8, '31'),
(9, '32'),
(10, '33'),
(11, '34'),
(12, '35'),
(13, '36'),
(14, '37'),
(15, '38'),
(16, '39'),
(17, '40'),
(18, '41'),
(19, '42'),
(20, '43'),
(21, '44'),
(22, '45'),
(23, '46'),
(24, '47'),
(25, '48'),
(26, 'Free Size'),
(27, 'One Size for All'),
(28, '10'),
(29, '12 Months'),
(30, '2T'),
(31, '3T'),
(32, '4T'),
(33, '5T'),
(34, '6 Years'),
(35, '7 Years'),
(36, '8 Years'),
(37, '10 Years'),
(38, '12 Years'),
(39, '14 Years'),
(40, '256 GB'),
(41, '128 GB'),
(42, '14 Plus'),
(43, '16 Plus'),
(44, '18 Plus'),
(45, '20 Plus'),
(46, '22 Plus'),
(47, '24 Plus'),
(48, '1G'),
(49, '1.5G'),
(50, '2G');

-- --------------------------------------------------------

--
-- Structure de la table `tbl_slider`
--

CREATE TABLE `tbl_slider` (
  `id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `button_text` varchar(255) NOT NULL,
  `button_url` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tbl_slider`
--

INSERT INTO `tbl_slider` (`id`, `photo`, `heading`, `content`, `button_text`, `button_url`, `position`) VALUES
(6, 'slider-6.png', 'vbvbvbvb', 'bvbvbvbv', 'bvbvbvb', '', 'Left'),
(7, 'slider-7.mp4', 'vbvbv', 'vbvb', '', '', 'Left'),
(8, 'slider-8.mp4', 'ça vient très vite', 'ça vient très vite et ça vient ', '', '', 'Left');

-- --------------------------------------------------------

--
-- Structure de la table `tbl_social`
--

CREATE TABLE `tbl_social` (
  `social_id` int(11) NOT NULL,
  `social_name` varchar(30) NOT NULL,
  `social_url` varchar(255) NOT NULL,
  `social_icon` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tbl_social`
--

INSERT INTO `tbl_social` (`social_id`, `social_name`, `social_url`, `social_icon`) VALUES
(1, 'Facebook', 'https://www.facebook.com/#', 'fa fa-facebook'),
(2, 'Twitter', '', 'fa fa-twitter'),
(3, 'LinkedIn', '', 'fa fa-linkedin'),
(4, 'Google Plus', '', 'fa fa-google-plus'),
(5, 'Pinterest', '', 'fa fa-pinterest'),
(6, 'YouTube', 'https://www.youtube.com#', 'fa fa-youtube'),
(7, 'Instagram', 'https://www.instagram.com/#', 'fa fa-instagram'),
(8, 'Tumblr', '', 'fa fa-tumblr'),
(9, 'Flickr', '', 'fa fa-flickr'),
(10, 'Reddit', '', 'fa fa-reddit'),
(11, 'Snapchat', '', 'fa fa-snapchat'),
(12, 'WhatsApp', '', 'fa fa-whatsapp'),
(13, 'Quora', '', 'fa fa-quora'),
(14, 'StumbleUpon', '', 'fa fa-stumbleupon'),
(15, 'Delicious', '', 'fa fa-delicious'),
(16, 'Tiktok', '', 'fa fa-tik-tok');

-- --------------------------------------------------------

--
-- Structure de la table `tbl_subscriber`
--

CREATE TABLE `tbl_subscriber` (
  `subs_id` int(11) NOT NULL,
  `subs_email` varchar(255) NOT NULL,
  `subs_date` varchar(100) NOT NULL,
  `subs_date_time` varchar(100) NOT NULL,
  `subs_hash` varchar(255) NOT NULL,
  `subs_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tbl_subscriber`
--

INSERT INTO `tbl_subscriber` (`subs_id`, `subs_email`, `subs_date`, `subs_date_time`, `subs_hash`, `subs_active`) VALUES
(1, 'ruth@mail.com', '2022-03-20', '2022-03-20 10:25:18', 'f4eabc1afed38a08da8d1c6e5fb42187', 1),
(2, 'kimberly@mail.com', '2022-03-20', '2022-03-20 10:26:07', '61f3af9cac686555a4bff9e565f88c47', 1),
(3, 'gregobn@mail.com', '2022-03-20', '2022-03-20 10:27:21', '72d6fc3a9e9ed33dfc30b10f4de82f34', 1),
(4, 'morgan.sarahh5@mail.com', '2022-03-20', '2022-03-20 10:27:48', 'bcdeda095a6c882803fc3aaf4a17f08e', 1),
(5, 'greenwd1154@mail.com', '2022-03-20', '2022-03-20 10:28:09', '279ecfe9debbb091c664641f534857ee', 1),
(6, 'awsm785@mail.com', '2022-03-20', '2022-03-20 10:28:21', '94096ae01fc65e71c50c7843d096e041', 1);

-- --------------------------------------------------------

--
-- Structure de la table `tbl_top_category`
--

CREATE TABLE `tbl_top_category` (
  `tcat_id` int(11) NOT NULL,
  `tcat_name` varchar(255) NOT NULL,
  `show_on_menu` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tbl_top_category`
--

INSERT INTO `tbl_top_category` (`tcat_id`, `tcat_name`, `show_on_menu`) VALUES
(5, 'Super-Marché & Boissons', 1),
(6, 'Founitures Scolaire', 1),
(7, 'Gateaux', 1),
(8, 'This Week', 1),
(9, 'Hommes', 1),
(10, 'Electroniques', 1),
(11, 'Femmes', 1),
(12, 'Montre & Bijoux', 1),
(13, 'Enfants', 1),
(14, 'Seconde Main', 1),
(15, 'Livres', 1),
(16, 'Promotion', 1);

-- --------------------------------------------------------

--
-- Structure de la table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(10) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `role` varchar(30) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `full_name`, `email`, `phone`, `password`, `photo`, `role`, `status`) VALUES
(1, 'Hope Kyungu', 'kyunguhope01@gmail.com', '+243974494333', '5965d10acfe22de9262356ef583babf2', 'user-1.png', 'Super Admin', 'Active'),
(2, 'Christine', 'christine@mail.com', '4444444444', '81dc9bdb52d04dc20036dbd8313ed055', 'user-13.jpg', 'Admin', 'Active');

-- --------------------------------------------------------

--
-- Structure de la table `tbl_video`
--

CREATE TABLE `tbl_video` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `iframe_code` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tbl_video`
--

INSERT INTO `tbl_video` (`id`, `title`, `iframe_code`) VALUES
(1, 'Video 1', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/L3XAFSMdVWU\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>'),
(2, 'Video 2', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/sinQ06YzbJI\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>'),
(4, 'Video 3', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/ViZNgU-Yt-Y\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `tbl_color`
--
ALTER TABLE `tbl_color`
  ADD PRIMARY KEY (`color_id`);

--
-- Index pour la table `tbl_country`
--
ALTER TABLE `tbl_country`
  ADD PRIMARY KEY (`country_id`);

--
-- Index pour la table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`cust_id`);

--
-- Index pour la table `tbl_customer_message`
--
ALTER TABLE `tbl_customer_message`
  ADD PRIMARY KEY (`customer_message_id`);

--
-- Index pour la table `tbl_end_category`
--
ALTER TABLE `tbl_end_category`
  ADD PRIMARY KEY (`ecat_id`);

--
-- Index pour la table `tbl_faq`
--
ALTER TABLE `tbl_faq`
  ADD PRIMARY KEY (`faq_id`);

--
-- Index pour la table `tbl_language`
--
ALTER TABLE `tbl_language`
  ADD PRIMARY KEY (`lang_id`);

--
-- Index pour la table `tbl_mid_category`
--
ALTER TABLE `tbl_mid_category`
  ADD PRIMARY KEY (`mcat_id`);

--
-- Index pour la table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tbl_page`
--
ALTER TABLE `tbl_page`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tbl_photo`
--
ALTER TABLE `tbl_photo`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tbl_post`
--
ALTER TABLE `tbl_post`
  ADD PRIMARY KEY (`post_id`);

--
-- Index pour la table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`p_id`);

--
-- Index pour la table `tbl_product_color`
--
ALTER TABLE `tbl_product_color`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tbl_product_photo`
--
ALTER TABLE `tbl_product_photo`
  ADD PRIMARY KEY (`pp_id`);

--
-- Index pour la table `tbl_product_size`
--
ALTER TABLE `tbl_product_size`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tbl_rating`
--
ALTER TABLE `tbl_rating`
  ADD PRIMARY KEY (`rt_id`);

--
-- Index pour la table `tbl_service`
--
ALTER TABLE `tbl_service`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tbl_settings`
--
ALTER TABLE `tbl_settings`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tbl_shipping_cost`
--
ALTER TABLE `tbl_shipping_cost`
  ADD PRIMARY KEY (`shipping_cost_id`);

--
-- Index pour la table `tbl_shipping_cost_all`
--
ALTER TABLE `tbl_shipping_cost_all`
  ADD PRIMARY KEY (`sca_id`);

--
-- Index pour la table `tbl_size`
--
ALTER TABLE `tbl_size`
  ADD PRIMARY KEY (`size_id`);

--
-- Index pour la table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tbl_social`
--
ALTER TABLE `tbl_social`
  ADD PRIMARY KEY (`social_id`);

--
-- Index pour la table `tbl_subscriber`
--
ALTER TABLE `tbl_subscriber`
  ADD PRIMARY KEY (`subs_id`);

--
-- Index pour la table `tbl_top_category`
--
ALTER TABLE `tbl_top_category`
  ADD PRIMARY KEY (`tcat_id`);

--
-- Index pour la table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tbl_video`
--
ALTER TABLE `tbl_video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `tbl_color`
--
ALTER TABLE `tbl_color`
  MODIFY `color_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT pour la table `tbl_country`
--
ALTER TABLE `tbl_country`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=249;

--
-- AUTO_INCREMENT pour la table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `tbl_customer_message`
--
ALTER TABLE `tbl_customer_message`
  MODIFY `customer_message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `tbl_end_category`
--
ALTER TABLE `tbl_end_category`
  MODIFY `ecat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT pour la table `tbl_faq`
--
ALTER TABLE `tbl_faq`
  MODIFY `faq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `tbl_language`
--
ALTER TABLE `tbl_language`
  MODIFY `lang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=164;

--
-- AUTO_INCREMENT pour la table `tbl_mid_category`
--
ALTER TABLE `tbl_mid_category`
  MODIFY `mcat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT pour la table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `tbl_page`
--
ALTER TABLE `tbl_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT pour la table `tbl_photo`
--
ALTER TABLE `tbl_photo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `tbl_post`
--
ALTER TABLE `tbl_post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT pour la table `tbl_product_color`
--
ALTER TABLE `tbl_product_color`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=311;

--
-- AUTO_INCREMENT pour la table `tbl_product_photo`
--
ALTER TABLE `tbl_product_photo`
  MODIFY `pp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;

--
-- AUTO_INCREMENT pour la table `tbl_product_size`
--
ALTER TABLE `tbl_product_size`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=543;

--
-- AUTO_INCREMENT pour la table `tbl_rating`
--
ALTER TABLE `tbl_rating`
  MODIFY `rt_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `tbl_service`
--
ALTER TABLE `tbl_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `tbl_settings`
--
ALTER TABLE `tbl_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `tbl_shipping_cost`
--
ALTER TABLE `tbl_shipping_cost`
  MODIFY `shipping_cost_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `tbl_shipping_cost_all`
--
ALTER TABLE `tbl_shipping_cost_all`
  MODIFY `sca_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `tbl_size`
--
ALTER TABLE `tbl_size`
  MODIFY `size_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT pour la table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `tbl_social`
--
ALTER TABLE `tbl_social`
  MODIFY `social_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `tbl_subscriber`
--
ALTER TABLE `tbl_subscriber`
  MODIFY `subs_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `tbl_top_category`
--
ALTER TABLE `tbl_top_category`
  MODIFY `tcat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `tbl_video`
--
ALTER TABLE `tbl_video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
