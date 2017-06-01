-- ----------------------
-- sauvegarde de la base cuileres au 25-May-2017
-- ----------------------


-- -----------------------------
-- creation de la table compte
-- -----------------------------
CREATE TABLE `compte` (
  `id` tinyint(2) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- -----------------------------
-- creation de la table cuilieres
-- -----------------------------
CREATE TABLE `cuilieres` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(25) DEFAULT NULL,
  `nombre` varchar(11) DEFAULT NULL,
  `origine` varchar(25) DEFAULT NULL,
  `categorie` varchar(25) DEFAULT NULL,
  `departements` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=97 DEFAULT CHARSET=latin1;



-- -----------------------------
-- insertions dans la table compte
-- -----------------------------
INSERT INTO compte VALUES('1', 'josselin', 'arcanis');

-- -----------------------------
-- insertions dans la table cuilieres
-- -----------------------------
INSERT INTO cuilieres VALUES('2', 'Ile de Re', '1', 'Charente-Maritime', 'Ville', '17');
INSERT INTO cuilieres VALUES('3', 'Vend', '1', 'Vend', 'Region', '17');
INSERT INTO cuilieres VALUES('4', 'Fort Boyard', '1', 'Charente-Maritime', 'Monument', '17');
INSERT INTO cuilieres VALUES('6', 'Saint Briac', '1', 'Bretagne', 'Ville', '35');
INSERT INTO cuilieres VALUES('7', 'La Rochelle', '1', 'Charente-Maritime', 'Ville', '17');
INSERT INTO cuilieres VALUES('8', 'Epinal', '1', 'Vosges', 'Ville', '88');
INSERT INTO cuilieres VALUES('9', 'Capebreton', '1', 'Landes', 'Ville', '40');
INSERT INTO cuilieres VALUES('10', 'La tour du pin', '1', 'Alpes', 'Symbole', '38');
INSERT INTO cuilieres VALUES('11', 'Bretagne', '1', 'Bretagne', 'Region', '22');
INSERT INTO cuilieres VALUES('12', 'La cicogne', '1', 'Alsace', 'Symbole', '67');
INSERT INTO cuilieres VALUES('13', 'Anne de Bretagne', '1', 'Bretagne', 'Symbole', '22');
INSERT INTO cuilieres VALUES('14', 'Hambourg', '1', 'Allemagne', 'Ville', '');
INSERT INTO cuilieres VALUES('15', 'Deauville', '1', 'Normandie', 'Ville', '14');
INSERT INTO cuilieres VALUES('16', 'La Tour Eiffel', '1', 'Paris', 'Symbole', '75');
INSERT INTO cuilieres VALUES('17', 'Cath?drae de Strasbourg', '1', 'Alsace', 'Monument', '67');
INSERT INTO cuilieres VALUES('18', 'Riquewihr', '1', 'Alsace', 'Ville', '67');
INSERT INTO cuilieres VALUES('19', 'Colmar', '1', 'Alsace', 'Ville', '67');
INSERT INTO cuilieres VALUES('20', 'L Alsacien', '1', 'Alsace', 'Symbole', '67');
INSERT INTO cuilieres VALUES('21', 'Courchevel 1300', '1', 'Savoie', 'Ville', '73');
INSERT INTO cuilieres VALUES('22', 'Courchevel 1850', '1', 'Savoie', 'Ville', '73');
INSERT INTO cuilieres VALUES('23', 'Disneyland', '1', 'Parc', 'Symbole', '77');
INSERT INTO cuilieres VALUES('24', 'La corrida', '1', 'Espagne', 'Symbole', '');
INSERT INTO cuilieres VALUES('25', 'El Oso y el Madrono', '1', 'Espagne', 'Symbole', '');
INSERT INTO cuilieres VALUES('26', 'Etoile de mer', '1', 'Martinique', 'Symbole', '');
INSERT INTO cuilieres VALUES('27', 'Londres', '1', 'Angleterre', 'Ville', '');
INSERT INTO cuilieres VALUES('28', 'Portugal', '1', 'Portugal', 'Pays', '');
INSERT INTO cuilieres VALUES('30', 'Tower Bridge', '1', 'Angleterre', 'Monument', '');
INSERT INTO cuilieres VALUES('31', 'Buckinghan Palace', '1', 'Angleterre', 'Monument', '');
INSERT INTO cuilieres VALUES('32', 'Madame Tussauds', '1', 'Angleterre', 'Monument', '');
INSERT INTO cuilieres VALUES('33', 'Boite aux Lettres', '1', 'Angleterre', 'Symbole', '');
INSERT INTO cuilieres VALUES('34', 'Couronne Royal', '1', 'Angleterre', 'Symbole', '');
INSERT INTO cuilieres VALUES('35', 'Id?fix', '1', 'Parc', 'Symbole', '');
INSERT INTO cuilieres VALUES('36', 'Le Fort Louvois', '1', 'Charente-Maritime', 'Monument', '17');
INSERT INTO cuilieres VALUES('37', 'La cit? de l huitre', '1', 'Charente-Maritime', 'Monument', '17');
INSERT INTO cuilieres VALUES('38', 'Lons Le Saunier', '1', 'Franche Comt', 'Ville', '39');
INSERT INTO cuilieres VALUES('39', 'Orgelet', '1', 'Franche Comt', 'Ville', '39');
INSERT INTO cuilieres VALUES('40', 'Pont de la pyle', '1', 'Franche Comt', 'Monument', '39');
INSERT INTO cuilieres VALUES('41', 'Jura', '1', 'Franche Comt', 'Ville', '39');
INSERT INTO cuilieres VALUES('42', 'Cascade de H?risson', '1', 'Franche Comt', 'Monument', '39');
INSERT INTO cuilieres VALUES('43', 'Bourg En Bresse', '1', 'Franche Comt', 'Ville', '39');
INSERT INTO cuilieres VALUES('44', 'Arbois', '1', 'Franche Comt', 'Ville', '39');
INSERT INTO cuilieres VALUES('45', 'Franche Comt', '1', 'Franche Comt', 'Region', '39');
INSERT INTO cuilieres VALUES('46', 'France Miniatures', '1', 'Parc', 'Monument', '78');
INSERT INTO cuilieres VALUES('47', 'Saintes', '1', 'Charente-Maritime', 'Ville', '17');
INSERT INTO cuilieres VALUES('48', 'Tregastel', '1', 'Bretagne', 'Ville', '29');
INSERT INTO cuilieres VALUES('49', 'Breizh (Bretagne)', '1', 'Bretagne', 'Region', '22');
INSERT INTO cuilieres VALUES('50', 'Charente-Maritime', '1', 'Charente-Maritime', 'Region', '17');
INSERT INTO cuilieres VALUES('51', 'Ile D Ol?ron', '1', 'Charente-Maritime', 'Ville', '17');
INSERT INTO cuilieres VALUES('52', 'Royan', '1', 'Charente-Maritime', 'Ville', '17');
INSERT INTO cuilieres VALUES('53', 'Port de la Rochelle', '1', 'Charente-Maritime', 'Monument', '17');
INSERT INTO cuilieres VALUES('54', 'Saint Jean D Ang?ly', '1', 'Charente-Maritime', 'Ville', '17');
INSERT INTO cuilieres VALUES('55', 'Chauve Neuve', '1', 'Doubs', 'Ville', '25');
INSERT INTO cuilieres VALUES('56', 'Normandie', '1', 'Normandie', 'Region', '14');
INSERT INTO cuilieres VALUES('57', 'Honfleur', '1', 'Normandie', 'Symbole', '14');
INSERT INTO cuilieres VALUES('58', 'Futuroscope', '1', 'Parc', 'Monument', '86');
INSERT INTO cuilieres VALUES('59', 'Cloyes sur Loire', '1', 'Centre', 'Ville', '28');
INSERT INTO cuilieres VALUES('60', 'Mimizan', '1', 'Les Landes', 'Ville', '40');
INSERT INTO cuilieres VALUES('61', 'Limousin', '1', 'Limousin', 'Region', '33');
INSERT INTO cuilieres VALUES('62', 'Bordeaux', '1', 'Gironde', 'Ville', '33');
INSERT INTO cuilieres VALUES('63', 'Le pont d la Garonne', '1', 'Gironde', 'Symbole', '33');
INSERT INTO cuilieres VALUES('64', 'Andernos', '1', 'Gironde', 'Ville', '33');
INSERT INTO cuilieres VALUES('65', 'St Emilion', '1', 'Gironde', 'Ville', '33');
INSERT INTO cuilieres VALUES('66', 'Tulle', '1', 'Correze', 'Ville', '19');
INSERT INTO cuilieres VALUES('67', 'Brive', '1', 'Correze', 'Ville', '19');
INSERT INTO cuilieres VALUES('68', 'La Cath?drale Orl?ans', '1', 'Centre', 'Monument', '45');
INSERT INTO cuilieres VALUES('69', 'La marais poitevin', '1', 'Charente-Maritime', 'Monument', '17');
INSERT INTO cuilieres VALUES('70', 'Phare de l ile de l Olero', '1', 'Charente-Maritime', 'Monument', '17');
INSERT INTO cuilieres VALUES('71', 'Boulogne sur Mer', '1', 'Nord Pas de Calais', 'Ville', '62');
INSERT INTO cuilieres VALUES('72', 'Sens', '1', 'Bourgogne', 'Ville', '89');
INSERT INTO cuilieres VALUES('73', 'Disneyland 2014', '1', 'Parc', 'Symbole', '77');
INSERT INTO cuilieres VALUES('74', 'Chateau de Cendrillon', '1', 'Parc', 'Symbole', '77');
INSERT INTO cuilieres VALUES('75', 'Haut Koenisgbourg', '1', 'Alsace', 'Ville', '68');
INSERT INTO cuilieres VALUES('76', 'Jonvac', '1', 'Charente-Maritime', 'Ville', '17');
INSERT INTO cuilieres VALUES('77', 'Talmont', '1', 'Charente-Maritime', 'Ville', '17');
INSERT INTO cuilieres VALUES('78', 'Meschers', '1', 'Charente-Maritime', 'Ville', '17');
INSERT INTO cuilieres VALUES('79', 'Saint Georges de Didonne', '1', 'Charente-Maritime', 'Ville', '17');
INSERT INTO cuilieres VALUES('80', 'Bourges', '1', 'Cher', 'Ville', '18');
INSERT INTO cuilieres VALUES('81', 'Lille', '1', 'Nord Pas de Calais', 'Ville', '59');
INSERT INTO cuilieres VALUES('82', 'Puy du Fous', '1', 'Vend', 'Monument', '85');
INSERT INTO cuilieres VALUES('83', 'Bourbonnais', '1', 'Allier', 'Ville', '03');
INSERT INTO cuilieres VALUES('84', 'Saint Quentin', '1', 'Picardie', 'Symbole', '02');
INSERT INTO cuilieres VALUES('85', 'Le Befroi de Lille', '1', 'Nord Pas de Calais', 'Symbole', '59');
INSERT INTO cuilieres VALUES('86', 'Bagnoles de L orne', '1', 'Normandie', 'Ville', '61');
INSERT INTO cuilieres VALUES('87', 'Toulouse', '1', 'Midi-Pyrenees', 'Ville', '31');
INSERT INTO cuilieres VALUES('88', 'Laval', '1', 'Pays de Loire', 'Ville', '53');
INSERT INTO cuilieres VALUES('89', 'Saint Malo', '1', 'Bretagne', 'Ville', '35');
INSERT INTO cuilieres VALUES('90', 'Le port de Saint Malo', '1', 'Bretagne', 'Monument', '35');
INSERT INTO cuilieres VALUES('91', 'Cancale', '1', 'Bretagne', 'Ville', '35');
INSERT INTO cuilieres VALUES('92', 'Mont Saint Michel', '1', 'Normandie', 'Monument', '50');
INSERT INTO cuilieres VALUES('93', 'Ouistreham', '1', 'Normandie', 'Ville', '14');
INSERT INTO cuilieres VALUES('94', 'D Day', '1', 'Normandie', 'Symbole', '14');
INSERT INTO cuilieres VALUES('95', 'Riva Bella', '1', 'Normandie', 'Symbole', '14');
INSERT INTO cuilieres VALUES('96', 'Le Memorial de Caen', '1', 'Normandie', 'Monument', '14');

