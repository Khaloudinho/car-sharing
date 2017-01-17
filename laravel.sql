-- vous devez simplement faire un php artisan migrate et ensuite faire les insert
INSERT INTO `type_vehicule` (`id`, `gamme`, `base_tarifaire`) VALUES
(1, '2', 100),
(2, '2', 80);

INSERT INTO `users` (`id`, `nom`, `prenom`, `date-naissance`, `permis`, `no-telephone`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'BERTRAND', 'Gisèle', '1939-09-03', 1, '0640540597', 'guillaume5524@hotmail.fr', '$2y$10$8cPTGJRqb7xa/WgMLYPxLumqaEv6g1gkvmip2cQTViFxN1ivQTPZS', 'rbVIanbi2ZhliC8sOrArN1RhuTkNRu9Az5ENndq78ENh4WTOoW7HwRxbqdOK', '2016-12-20 19:34:54', '2016-12-23 16:21:50'),
(2, 'SILLANS', 'Orlane', '1973-04-14', 1, '0671801193', 'sillans@voila.fr', '$2y$10$DFd8YDgQTu.LigS9CQYa1uEqylSw7v5ttMU0YDxsc9o1Zw.2teVam', NULL, '2016-12-20 19:45:30', '2016-12-20 19:45:30'),
(3, 'SILLANS', 'Oriane', '1995-07-21', 1, '0640540597', 'guillaume.bertrandpr@yahoo.fr', '$2y$10$OLmufyzmHM02HJxmOZ/iJu6voV2txnrPffP7obntOwl40PbIxHOAW', 'Lab8hfv2gC0UHdhz94s27AvIFP38MbmLsEoqGVTnQolUI8MzLZZ7oI5bZqmy', '2016-12-23 15:59:01', '2016-12-23 15:59:33');

INSERT INTO `vehicule` (`id`, `marque`, `modele`, `immatriculation`, `carburant_max`, `prochain_entretien`, `etat`, `image`) VALUES
(1, 'Tesla', 's', 'BR-450-QX', 0, '2017-08-31', 2, 'tesla_model_s.jpg'),
(2, 'Ford', 'sierra cosworth', 'BT-450-QX', 75, '2017-02-02', 2, 'ford_sierra_cosworth.jpg');
