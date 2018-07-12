CREATE TABLE `posts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(1024) CHARACTER SET utf8 NOT NULL,
  `slug` varchar(1024) CHARACTER SET utf8 NOT NULL,
  `thumb` varchar(1024) CHARACTER SET utf8 DEFAULT NULL,
  `body` longtext CHARACTER SET utf8 NOT NULL,
  `category_id` int(3) unsigned DEFAULT '0',
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `tags` varchar(1024) CHARACTER SET utf8 DEFAULT NULL,
  `viewed` int(11) unsigned DEFAULT '0',
  `meta_title` varchar(1024) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_keywords` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_description` varchar(1024) CHARACTER SET utf8 DEFAULT NULL,
  `short_description` varchar(1024) CHARACTER SET utf8 DEFAULT NULL,
  `is_deleted` bit(1) DEFAULT b'0',
  `draft` bit(1) DEFAULT b'0',
  `created_at` datetime DEFAULT NULL,
  `published_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `type` tinyint(3) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=80 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` tinyint(2) DEFAULT '0',
  `birthday` date DEFAULT NULL,
  `address` varchar(1024) COLLATE utf8_unicode_ci DEFAULT NULL,
  `avatar` varchar(1024) COLLATE utf8_unicode_ci DEFAULT NULL,
  `role` tinyint(3) unsigned DEFAULT '0',
  `point` tinyint(3) unsigned DEFAULT '0',
  `is_deleted` bit(1) DEFAULT b'0',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `access_token` varchar(1024) COLLATE utf8_unicode_ci DEFAULT NULL,
  `token_exp` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `auth_type` enum('website','google','facebook') COLLATE utf8_unicode_ci DEFAULT NULL,
  `auth_id` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
