<?php
/**
 * Created by PhpStorm.
 * User: starstryder
 * Date: 7/19/19
 * Time: 10:01 AM
 */

$structure = "CREATE TABLE `images` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `image_set_id` int(10) unsigned DEFAULT NULL,
  `application_id` int(10) unsigned DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `file_location` text COLLATE utf8_unicode_ci NOT NULL,
  `priority` double(8,2) DEFAULT NULL,
  `premarked` tinyint(1) NOT NULL DEFAULT '0',
  `done` tinyint(1) NOT NULL DEFAULT '0',
  `sun_angle` double(8,2) DEFAULT NULL,
  `details` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `favorites_count` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `images_name_unique` (`name`),
  KEY `images_image_set_id_foreign` (`image_set_id`),
  KEY `images_on_done` (`done`),
  KEY `images_application_id_index` (`application_id`),
  KEY `images_image_set_id_index` (`image_set_id`),
  KEY `images_done_index` (`done`)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;";