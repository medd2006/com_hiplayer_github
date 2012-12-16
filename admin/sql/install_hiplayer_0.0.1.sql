CREATE TABLE `#__hicategorie` (
	`categorie_id` bigint(20) NOT NULL AUTO_INCREMENT,
	`categorie_name` varchar(255) DEFAULT NULL,
	`categorie_description` longtext,
	`categorie_image` varchar(1023) DEFAULT NULL,
	`categorie_access` int(11) DEFAULT NULL,
	`categorie_alias` varchar(255) DEFAULT NULL,
	`published` tinyint(4) DEFAULT NULL,
	`checked_out` int(11) DEFAULT '0',
	`checked_out_time` datetime DEFAULT NULL,
	PRIMARY KEY (`categorie_id`),
	UNIQUE KEY `categorie_alias` (`categorie_alias`)
);

CREATE TABLE `#__hiplayer` (
	`audio_id` bigint(20) NOT NULL AUTO_INCREMENT,
	`audio_name` varchar(255) DEFAULT NULL,
	`audio_description` longtext,
	`audio_path` varchar(1023) DEFAULT NULL,
	`categorie_id` int(11) DEFAULT NULL,
	`audio_access` int(11) DEFAULT NULL,
	`audio_alias` varchar(255) DEFAULT NULL,
	`published` tinyint(4) DEFAULT NULL,
	`checked_out` int(11) DEFAULT '0',
	`checked_out_time` datetime DEFAULT NULL,
	PRIMARY KEY (`audio_id`),
	UNIQUE KEY `audio_alias` (`audio_alias`),
	KEY `categorie_id` (`categorie_id`)
);

CREATE TABLE `#__hifavorites` (
	`favorite_id` serial not null,
	`audio_id` int(11) not null,
	`user_id` int(11) not null,
	PRIMARY KEY(favorite_id),
	UNIQUE(audio_id, user_id),
	INDEX(favorite_id, user_id)
);
