-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Ven 23 Décembre 2016 à 21:38
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `laravel`
--

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(5, '2016_12_23_181706_create_table_vehicules', 2),
(6, '2016_12_23_193006_create_table_type_vehicules', 2);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `type_vehicule`
--

CREATE TABLE `type_vehicule` (
  `id` int(10) UNSIGNED NOT NULL,
  `gamme` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `base_tarifaire` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `type_vehicule`
--

INSERT INTO `type_vehicule` (`id`, `gamme`, `base_tarifaire`) VALUES
(1, '2', 100),
(2, '2', 80);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date-naissance` date NOT NULL,
  `permis` tinyint(1) NOT NULL DEFAULT '0',
  `no-telephone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenom`, `date-naissance`, `permis`, `no-telephone`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'BERTRAND', 'Gisèle', '1939-09-03', 1, '0640540597', 'guillaume5524@hotmail.fr', '$2y$10$8cPTGJRqb7xa/WgMLYPxLumqaEv6g1gkvmip2cQTViFxN1ivQTPZS', 'rbVIanbi2ZhliC8sOrArN1RhuTkNRu9Az5ENndq78ENh4WTOoW7HwRxbqdOK', '2016-12-20 19:34:54', '2016-12-23 16:21:50'),
(2, 'SILLANS', 'Orlane', '1973-04-14', 1, '0671801193', 'sillans@voila.fr', '$2y$10$DFd8YDgQTu.LigS9CQYa1uEqylSw7v5ttMU0YDxsc9o1Zw.2teVam', NULL, '2016-12-20 19:45:30', '2016-12-20 19:45:30'),
(3, 'SILLANS', 'Oriane', '1995-07-21', 1, '0640540597', 'guillaume.bertrandpr@yahoo.fr', '$2y$10$OLmufyzmHM02HJxmOZ/iJu6voV2txnrPffP7obntOwl40PbIxHOAW', 'Lab8hfv2gC0UHdhz94s27AvIFP38MbmLsEoqGVTnQolUI8MzLZZ7oI5bZqmy', '2016-12-23 15:59:01', '2016-12-23 15:59:33');

-- --------------------------------------------------------

--
-- Structure de la table `vehicule`
--

CREATE TABLE `vehicule` (
  `id` int(10) UNSIGNED NOT NULL,
  `marque` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `modele` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `immatriculation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `carburant_max` smallint(6) NOT NULL,
  `prochain_entretien` date NOT NULL,
  `etat` tinyint(4) NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `vehicule`
--

INSERT INTO `vehicule` (`id`, `marque`, `modele`, `immatriculation`, `carburant_max`, `prochain_entretien`, `etat`, `image`) VALUES
(1, 'Tesla', 's', 'BR-450-QX', 0, '2017-08-31', 2, 'tesla_model_s.jpg'),
(2, 'Ford', 'sierra cosworth', 'BT-450-QX', 75, '2017-02-02', 2, 'ford_sierra_cosworth.jpg');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Index pour la table `type_vehicule`
--
ALTER TABLE `type_vehicule`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Index pour la table `vehicule`
--
ALTER TABLE `vehicule`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `type_vehicule`
--
ALTER TABLE `type_vehicule`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `vehicule`
--
ALTER TABLE `vehicule`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
