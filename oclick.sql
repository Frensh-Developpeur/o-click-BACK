-- Adminer 4.8.1 MySQL 5.7.36 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1,	'2014_10_12_000000_create_users_table',	1),
(2,	'2014_10_12_100000_create_password_resets_table',	1),
(3,	'2019_08_19_000000_create_failed_jobs_table',	1),
(4,	'2019_12_14_000001_create_personal_access_tokens_table',	1);

DROP TABLE IF EXISTS `monsters`;
CREATE TABLE `monsters` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `life` int(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

INSERT INTO `monsters` (`id`, `name`, `life`, `created_at`, `updated_at`, `status`) VALUES
(1,	'bopi',	10,	'2022-12-13 13:03:00',	'2022-12-15 09:40:23',	'active'),
(2,	'junki',	20,	'2022-12-15 08:00:38',	'2022-12-15 09:40:30',	'active'),
(3,	'garo',	400,	'2022-12-15 08:00:54',	'2022-12-15 08:00:54',	'active'),
(4,	'luci',	600,	'2022-12-15 08:01:23',	'2022-12-15 08:01:23',	'active'),
(5,	'roro',	800,	'2022-12-15 08:01:30',	'2022-12-15 08:01:30',	'active'),
(6,	'grix',	1000,	'2022-12-15 08:01:50',	'2022-12-15 08:01:50',	'active');

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=162 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `created_at`, `updated_at`) VALUES
(1,	'App\\Models\\User',	6,	'sebastien.pro21@gmail.com_Token',	'f7a32ba2acfeb3d23c2ebaa2e800c2371718009d0fc94a8f747ee7369413ef3f',	'[\"*\"]',	NULL,	'2022-12-09 10:54:46',	'2022-12-09 10:54:46'),
(2,	'App\\Models\\User',	6,	'sebastien.pro21@gmail.com_Token',	'90c744bfbedc5193e8bfa845e7495673ff1cde4d72cc862ace8c18632d3db80f',	'[\"\"]',	NULL,	'2022-12-09 10:55:05',	'2022-12-09 10:55:05'),
(3,	'App\\Models\\User',	6,	'sebastien.pro21@gmail.com_Token',	'b79f0fed32e5c0c7597a0e9dd64571051c0a8be10f82ab387c878db3b0e9e22f',	'[\"\"]',	NULL,	'2022-12-09 11:20:15',	'2022-12-09 11:20:15'),
(39,	'App\\Models\\User',	9,	'sebastienckysr@hotmail.fr_Token',	'fa1c6bcfee6d264ac8f3ec164e822791cfc850284e5934016d40ede5b41486e5',	'[\"*\"]',	NULL,	'2022-12-09 23:47:27',	'2022-12-09 23:47:27'),
(40,	'App\\Models\\User',	10,	'sebastienckyse@hotmail.fr_Token',	'2dd9183a8afac054cffc4cd9218f4bbe7593db521063c9ea5802cf26dd1dfb3d',	'[\"*\"]',	NULL,	'2022-12-09 23:56:39',	'2022-12-09 23:56:39'),
(56,	'App\\Models\\User',	12,	'maxime.serrurier@yahoo.fr_Token',	'aa95e62b37cf95ef777caa8963e7b4389d28c2c6cce84bc5c5d4cae7d666be22',	'[\"*\"]',	NULL,	'2022-12-14 07:26:30',	'2022-12-14 07:26:30'),
(59,	'App\\Models\\User',	8,	'sebastienckyser@hotmail.fr_Token',	'634bbfb4069c153478f54785c4f2219d3cae2d08a1251b7aa9eb7b7009017f4d',	'[\"\"]',	NULL,	'2022-12-14 08:07:03',	'2022-12-14 08:07:03'),
(60,	'App\\Models\\User',	13,	'sebastienckyser@hotmail.fr_Token',	'87cc572dc35bc77e87acdbc0397bd687488f36fd6ba360118cf955a801f02a98',	'[\"*\"]',	NULL,	'2022-12-14 12:31:55',	'2022-12-14 12:31:55'),
(71,	'App\\Models\\User',	20,	'mika@mika.fr_Token',	'c66a093aa6c8428fee2a7c079d40ee37e60f9eed23fcb562a27c394106947a1b',	'[\"*\"]',	NULL,	'2022-12-15 13:04:07',	'2022-12-15 13:04:07'),
(72,	'App\\Models\\User',	21,	'max@oclick.fr_Token',	'c15f164286129d564c75a8065ede79037469c19144b0762308ea72ad4cbd74e2',	'[\"*\"]',	NULL,	'2022-12-15 13:04:19',	'2022-12-15 13:04:19'),
(73,	'App\\Models\\User',	20,	'mika@mika.fr_Token',	'4fe67fca65306a2a656408c658c879eff2d002f56143afea3bc49b243dc75093',	'[\"\"]',	'2022-12-15 15:26:42',	'2022-12-15 13:04:25',	'2022-12-15 15:26:42'),
(74,	'App\\Models\\User',	21,	'max@oclick.fr_Token',	'7a1a1fb367d7b4baab74cfdf266f1078cd959f1157a5a969a7d23cc4034c1ad9',	'[\"\"]',	'2022-12-15 15:26:42',	'2022-12-15 13:04:40',	'2022-12-15 15:26:42'),
(77,	'App\\Models\\User',	19,	'sebastienckyser@hotmail.fr_Token',	'dd8a2b79ecb8a8a70d26b6282ae40d012449e4301af558370b8e9dbf91505fff',	'[\"\"]',	'2022-12-16 06:57:45',	'2022-12-16 06:57:13',	'2022-12-16 06:57:45'),
(80,	'App\\Models\\User',	24,	'max@click.fr_Token',	'a500e0e5c5f960e752238f6e07044ffc9221c63d9c1b59f14624a3a752da4512',	'[\"*\"]',	NULL,	'2022-12-16 07:13:24',	'2022-12-16 07:13:24'),
(81,	'App\\Models\\User',	23,	'mika@mika.fr_Token',	'a06329a84d56bf90711757449a299f243d4ff95ef7f64196d471c7337a8c8d97',	'[\"\"]',	'2022-12-16 07:18:15',	'2022-12-16 07:14:17',	'2022-12-16 07:18:15'),
(82,	'App\\Models\\User',	25,	'max@oclick.io_Token',	'7ddefbc6290fe758b007c503252578a7a441e8e02616df0720ceb117b8f684de',	'[\"*\"]',	NULL,	'2022-12-16 07:16:08',	'2022-12-16 07:16:08'),
(83,	'App\\Models\\User',	25,	'max@oclick.io_Token',	'6f024e95309929f2269d2e6f1e363b6f1def6a3616bd5ceff3b313664ae262dc',	'[\"\"]',	'2022-12-16 07:28:32',	'2022-12-16 07:16:29',	'2022-12-16 07:28:32'),
(84,	'App\\Models\\User',	23,	'mika@mika.fr_Token',	'4e5e0d9e8bb486370d5c501b93d81e1d3200325ce4fdeb0d6a09764f0b609d5b',	'[\"\"]',	'2022-12-16 07:20:57',	'2022-12-16 07:18:31',	'2022-12-16 07:20:57'),
(85,	'App\\Models\\User',	26,	'mikaa@mika.fr_Token',	'ccaf97e17dc233c297b18912ee878e1663d6ac092a4b69c810018331f109c4da',	'[\"*\"]',	NULL,	'2022-12-16 07:21:25',	'2022-12-16 07:21:25'),
(86,	'App\\Models\\User',	26,	'mikaa@mika.fr_Token',	'cb4b1ad1a62964a3c4d7b161fe636ecb45aadff2544e45e189242b4dfb3d06f0',	'[\"\"]',	'2022-12-16 07:51:21',	'2022-12-16 07:21:45',	'2022-12-16 07:51:21'),
(87,	'App\\Models\\User',	27,	'sebastienckyseer@hotmail.fr_Token',	'44397a282c7bfbdbbb76fa52b43f4b22c3fa7bd28b19dcabf720261c916d423d',	'[\"*\"]',	NULL,	'2022-12-16 07:23:13',	'2022-12-16 07:23:13'),
(91,	'App\\Models\\User',	29,	'test@test.fr_Token',	'fd73a8ccd04fb949f3ffed76ebd322d744e57a1a4bd41e8a3f659826c882af56',	'[\"*\"]',	NULL,	'2022-12-16 07:29:11',	'2022-12-16 07:29:11'),
(92,	'App\\Models\\User',	29,	'test@test.fr_Token',	'46c0cef278dd56b5f80e19ec201b8ade0ec8dfb6f1e496ea9a2f6f58e2eb8440',	'[\"\"]',	'2022-12-16 07:30:45',	'2022-12-16 07:29:24',	'2022-12-16 07:30:45'),
(94,	'App\\Models\\User',	29,	'test@test.fr_Token',	'0ff2e90248159a90aec198ee7aafe711f19593fba8f8dc559ec2630a72b58abd',	'[\"\"]',	'2022-12-16 07:32:19',	'2022-12-16 07:31:07',	'2022-12-16 07:32:19'),
(95,	'App\\Models\\User',	28,	'sebastien.pro210@gmail.com_Token',	'90ea70095653957370f7dcaf3771919f6c21e1bfaa8f4a7420e7052571a8eae9',	'[\"\"]',	'2022-12-16 07:45:13',	'2022-12-16 07:32:20',	'2022-12-16 07:45:13'),
(96,	'App\\Models\\User',	30,	'test2@test.fr_Token',	'c327a597ebdbbb60df6a8b03e1263e305b3a2e82af405743937b3f728154f69d',	'[\"*\"]',	NULL,	'2022-12-16 07:33:10',	'2022-12-16 07:33:10'),
(97,	'App\\Models\\User',	30,	'test2@test.fr_Token',	'153f27d6f4d5e082566f2ce5969c261e89379108fe75e12ee60b2c06307b19bb',	'[\"\"]',	'2022-12-16 07:33:47',	'2022-12-16 07:33:26',	'2022-12-16 07:33:47'),
(98,	'App\\Models\\User',	30,	'test2@test.fr_Token',	'6a60b4764dc0ed5c5ea09817da34dd600daf77ba11631b5b83f0705fd91df168',	'[\"\"]',	'2022-12-16 07:36:07',	'2022-12-16 07:34:08',	'2022-12-16 07:36:07'),
(99,	'App\\Models\\User',	31,	'test3@test.fr_Token',	'bcab88b0d1fef2e685b9027555df05bfa51a6b9f4185a0d49fd48766e8ecc469',	'[\"*\"]',	NULL,	'2022-12-16 07:37:22',	'2022-12-16 07:37:22'),
(100,	'App\\Models\\User',	31,	'test3@test.fr_Token',	'a16ccb77ff397250f4c7ba009f9fe7249f14c76ad4f32ebf69ca13d5290302bf',	'[\"\"]',	'2022-12-16 07:51:07',	'2022-12-16 07:37:52',	'2022-12-16 07:51:07'),
(101,	'App\\Models\\User',	32,	'sebastien.pro2100@gmail.com_Token',	'e015c0ae72d01daba6cfaea8a529fcebd7d38b188fb46abe397674517c5bbf52',	'[\"*\"]',	NULL,	'2022-12-16 07:50:15',	'2022-12-16 07:50:15'),
(102,	'App\\Models\\User',	32,	'sebastien.pro2100@gmail.com_Token',	'a16f7d9d89316f15f9749f18e958d96cc1a294aeb5c2404258fae4ec1cb7d3d5',	'[\"\"]',	'2022-12-16 07:52:09',	'2022-12-16 07:50:28',	'2022-12-16 07:52:09'),
(103,	'App\\Models\\User',	26,	'mikaa@mika.fr_Token',	'b3fba4329e7805b24782cc97cf754b98fbd479d3338d768813a4cc438a834069',	'[\"\"]',	'2022-12-16 07:53:51',	'2022-12-16 07:52:12',	'2022-12-16 07:53:51'),
(104,	'App\\Models\\User',	33,	'test4@test.fr_Token',	'015dedf462f494cdafd196018d07c98da727f472034289f0026116f9051dffaa',	'[\"*\"]',	NULL,	'2022-12-16 07:52:22',	'2022-12-16 07:52:22'),
(105,	'App\\Models\\User',	33,	'test4@test.fr_Token',	'd7cc360920f9cf265e9c16dec71f110d8e658242ab1d8f4ddc7b0c2284e1c4e2',	'[\"\"]',	'2022-12-16 07:53:59',	'2022-12-16 07:52:44',	'2022-12-16 07:53:59'),
(115,	'App\\Models\\User',	36,	'gloups@gloups.fr_Token',	'e71fd29730f58d5ff08987f043ae8fc78f63538478d1513d2fc3603e471d54c4',	'[\"\"]',	'2022-12-16 13:53:27',	'2022-12-16 10:35:40',	'2022-12-16 13:53:27'),
(118,	'App\\Models\\User',	35,	'maxou@oclick.io_Token',	'ec72bf1d0c6fbe11eb3a6042b03c046198b54131af6619c7430b4bcaf0a459e3',	'[\"\"]',	'2022-12-16 15:32:25',	'2022-12-16 12:27:11',	'2022-12-16 15:32:25'),
(119,	'App\\Models\\User',	36,	'Mika@mika.fr_Token',	'9e0c8954406b65fadcfff4248d90f32b26fe1973c4fe952a18273208df222a1b',	'[\"\"]',	'2022-12-16 18:43:35',	'2022-12-16 13:53:55',	'2022-12-16 18:43:35'),
(127,	'App\\Models\\User',	36,	'Mika@mika.fr_Token',	'35d340540b09c896f1d1676b33f0ac7016c7f44a0a072d0886e7c4e27174bf7f',	'[\"\"]',	'2022-12-19 13:29:00',	'2022-12-19 09:54:32',	'2022-12-19 13:29:00'),
(128,	'App\\Models\\User',	40,	'test@oclick.io_Token',	'cd11b37f2bc239bb4b5f686c37d245f6ad03d46f8e763d1f56a1ec7dbeadb555',	'[\"*\"]',	NULL,	'2022-12-19 12:07:23',	'2022-12-19 12:07:23'),
(129,	'App\\Models\\User',	40,	'test@oclick.io_Token',	'be304138da56e613a27fe3f429c91d03e54b6e1c6a558d585399281162c33679',	'[\"\"]',	'2022-12-19 12:07:41',	'2022-12-19 12:07:36',	'2022-12-19 12:07:41'),
(130,	'App\\Models\\User',	40,	'test@oclick.io_Token',	'10cf6d68cdbe94865381d31f949450b793dcd7551f533c6258199f866f6bf2c9',	'[\"\"]',	'2022-12-19 13:28:45',	'2022-12-19 12:08:34',	'2022-12-19 13:28:45'),
(131,	'App\\Models\\User',	41,	'maxime.serrurier@yahoo.fr_Token',	'00f618397cf6c3459660f1c3ee2cadc38c51e2a01ab9612d3222e060b9c64625',	'[\"*\"]',	NULL,	'2022-12-19 12:36:02',	'2022-12-19 12:36:02'),
(132,	'App\\Models\\User',	42,	'maxime.serrurier2@yahoo.fr_Token',	'0680e4e648abdaa2f2e1cac334a0d8593310a63e15228e5499593b7631962647',	'[\"*\"]',	NULL,	'2022-12-19 12:36:31',	'2022-12-19 12:36:31'),
(137,	'App\\Models\\User',	45,	'maxime.serrurier6@yahoo.fr_Token',	'ff6e94ace525b6f3a7b5da06dcc5718a5bdd6088dfb054c8394b7619eb34fae6',	'[\"*\"]',	NULL,	'2022-12-19 12:40:47',	'2022-12-19 12:40:47'),
(138,	'App\\Models\\User',	46,	'maxime.serrurier7@yahoo.fr_Token',	'a8c7dbfc7e95e0b5dbf765f4c038adf905aed13e8d7b42e97c7c253455f7af36',	'[\"*\"]',	NULL,	'2022-12-19 12:43:06',	'2022-12-19 12:43:06'),
(143,	'App\\Models\\User',	49,	'maxime.serrurier11@yahoo.fr_Token',	'1746a4590b723bd1a662d5dbf94d05947a7dd25055164b421cf7051985977be5',	'[\"*\"]',	NULL,	'2022-12-19 12:58:14',	'2022-12-19 12:58:14'),
(144,	'App\\Models\\User',	50,	'sebastien.pro2100@gmail.com_Token',	'6cae104cc7a53e3bb0be43b1320c2360515a0281e60e1ffa187f984674c76db5',	'[\"*\"]',	NULL,	'2022-12-19 12:59:04',	'2022-12-19 12:59:04'),
(145,	'App\\Models\\User',	50,	'sebastien.pro2100@gmail.com_Token',	'022c1641eac7ccc73384e4d0900315673b3fe5e5705d3a536c89fc6987c74a6c',	'[\"\"]',	'2022-12-19 13:27:51',	'2022-12-19 12:59:17',	'2022-12-19 13:27:51'),
(146,	'App\\Models\\User',	51,	'sebastien.pro210@gmail.com_Token',	'9cec62e114274ad57a1c503e43a13696df8a50f9b5709923ab8936d3f634f935',	'[\"*\"]',	NULL,	'2022-12-19 13:29:57',	'2022-12-19 13:29:57'),
(147,	'App\\Models\\User',	52,	'Mika@mika.fr_Token',	'587eb387ff3d157a54afce58c10a87cb3b27141fd7afbec425f3f5eb65f67f91',	'[\"*\"]',	NULL,	'2022-12-19 13:30:01',	'2022-12-19 13:30:01'),
(148,	'App\\Models\\User',	51,	'sebastien.pro210@gmail.com_Token',	'a1c122ad623932d5c084cd44be47895bdbf6d4abb08396dc418c08393913bd22',	'[\"\"]',	'2022-12-19 13:39:12',	'2022-12-19 13:30:10',	'2022-12-19 13:39:12'),
(149,	'App\\Models\\User',	52,	'Mika@mika.fr_Token',	'37da319b530780ad597e7ef09005bf49574c6a703d061d335a2f86b66f50d3f3',	'[\"\"]',	'2022-12-19 13:40:51',	'2022-12-19 13:30:15',	'2022-12-19 13:40:51'),
(152,	'App\\Models\\User',	53,	'max@oclick.io_Token',	'104c7cff5a0b1e5dc1b2d531a2716a9a6ad845085e441505a6d8c930fb70b1ef',	'[\"\"]',	'2022-12-19 13:39:33',	'2022-12-19 13:33:27',	'2022-12-19 13:39:33'),
(153,	'App\\Models\\User',	54,	'sebastienckyser@hotmail.fr_Token',	'bee5961d446b7b711096ecc72fa72ea7b12a7c6a22602bce217c3a91cfdd210e',	'[\"*\"]',	NULL,	'2022-12-19 13:40:08',	'2022-12-19 13:40:08'),
(154,	'App\\Models\\User',	54,	'sebastienckyser@hotmail.fr_Token',	'5e01624eb31e8d5df067551dddadcaeaf369683446f97e5ad7005ef787ef3ba9',	'[\"\"]',	'2022-12-19 14:16:55',	'2022-12-19 13:40:22',	'2022-12-19 14:16:55'),
(155,	'App\\Models\\User',	55,	'max@oclick.ioo_Token',	'b0b0925be6f8d5b7bd6e41c213287611118d45486865feed3c3b2b0b9786a75f',	'[\"*\"]',	NULL,	'2022-12-19 13:41:23',	'2022-12-19 13:41:23'),
(156,	'App\\Models\\User',	55,	'max@oclick.ioo_Token',	'd94879ce0a2cd6e948e5701ac0846212f4180b6527d1d9b0d0885343b27a01f1',	'[\"\"]',	'2022-12-19 14:17:01',	'2022-12-19 13:41:38',	'2022-12-19 14:17:01'),
(159,	'App\\Models\\User',	56,	'Mika@mika.fr_Token',	'3e19ad78bb1d162e9fb9baf23bfc5a682bc87afdeeae59a44465132378f0a913',	'[\"\"]',	'2022-12-19 14:02:33',	'2022-12-19 13:57:24',	'2022-12-19 14:02:33'),
(160,	'App\\Models\\User',	56,	'Mika@mika.fr_Token',	'e01f3ccc8cd70794111ab5dead5326a98c5d699478e493256b1c0d0ed43499ca',	'[\"\"]',	'2022-12-19 14:14:04',	'2022-12-19 14:03:03',	'2022-12-19 14:14:04'),
(161,	'App\\Models\\User',	56,	'Mika@mika.fr_Token',	'11bc710459a6d0d0bf0d1623ad48d88bdef103da75d27448a83e60e18425cfd3',	'[\"\"]',	'2022-12-19 14:16:43',	'2022-12-19 14:14:26',	'2022-12-19 14:16:43');

DROP TABLE IF EXISTS `save_games`;
CREATE TABLE `save_games` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `token` int(50) NOT NULL DEFAULT '0',
  `monsters_id` int(11) NOT NULL,
  `current_theme` int(11) NOT NULL,
  `monsters_life` int(50) NOT NULL,
  `token_per_sec` int(11) NOT NULL DEFAULT '0',
  `counteur` int(11) DEFAULT '1',
  `counteur_delete_life` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;

INSERT INTO `save_games` (`id`, `user_id`, `token`, `monsters_id`, `current_theme`, `monsters_life`, `token_per_sec`, `counteur`, `counteur_delete_life`, `created_at`, `updated_at`) VALUES
(38,	56,	0,	1,	1,	10,	0,	1,	1,	'2022-12-19 13:42:02',	'2022-12-19 14:16:32'),
(37,	55,	0,	1,	1,	10,	0,	1,	1,	'2022-12-19 13:41:23',	'2022-12-19 14:17:01'),
(36,	54,	1139907,	5,	6,	788,	2,	4,	2,	'2022-12-19 13:40:08',	'2022-12-19 14:16:55');

DROP TABLE IF EXISTS `spells`;
CREATE TABLE `spells` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` varchar(499) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

INSERT INTO `spells` (`id`, `name`, `description`, `created_at`, `updated_at`, `status`, `price`) VALUES
(12,	'Clock Click',	'Ajoute 1 token par seconde',	'2022-12-12 12:26:31',	'2022-12-12 12:26:31',	'active',	60),
(13,	'Greed Click',	'Augmente le multiplicateur de token par 2 pendant 30 seconde',	'2022-12-12 13:32:22',	'2022-12-12 13:32:22',	'disable\r\n',	350),
(11,	'Four Click',	'Augmente le multiplicateur de token à 4',	'2022-12-12 12:04:51',	'2022-12-14 12:37:28',	'active',	1000),
(10,	'Triple Click',	'Augmente le multiplicateur de token à 3',	'2022-12-12 11:52:54',	'2022-12-12 11:52:54',	'active',	100),
(1,	'Double Click',	'Augmente le multiplicateur de token à 2',	'2022-12-12 10:08:32',	'2022-12-12 10:08:32',	'active',	30),
(14,	'Clock Two Click',	'Ajoute 1 token supplémentaire par seconde',	'2022-12-12 16:42:23',	'2022-12-12 16:42:23',	'active',	800),
(15,	'Clack Click',	'Enlève 1 points de vie supplémentaire au mob par click',	'2022-12-13 08:08:29',	'2022-12-19 13:51:39',	'active',	200);

DROP TABLE IF EXISTS `themes`;
CREATE TABLE `themes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

INSERT INTO `themes` (`id`, `name`, `created_at`, `updated_at`, `status`, `price`) VALUES
(1,	'Stadium',	'2022-12-13 09:53:32',	'2022-12-13 09:53:32',	'active',	0),
(2,	'FullMoon',	'2022-12-13 10:16:46',	'2022-12-13 10:16:46',	'active',	2000000),
(3,	'Jungle',	'2022-12-13 10:16:58',	'2022-12-13 10:16:58',	'active',	10000),
(4,	'Lac',	'2022-12-13 10:17:11',	'2022-12-13 10:17:11',	'active',	258571),
(5,	'NewWorld',	'2022-12-13 10:17:22',	'2022-12-13 10:17:22',	'active',	259881),
(6,	'SpaceAdventure',	'2022-12-13 10:17:39',	'2022-12-13 10:17:39',	'active',	5478417),
(7,	'Tera',	'2022-12-13 10:17:53',	'2022-12-13 10:17:53',	'active',	854761),
(8,	'Portal',	'2022-12-13 10:19:35',	'2022-12-13 10:19:35',	'active',	20);

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `rank` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'player',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `rank`) VALUES
(51,	'seb',	'sebastien.pro210@gmail.com',	NULL,	'$2y$10$6nvsAfo0m1EBX4UyGFp3n.szHQK2Kdm6L/TfpiQg.YnsHyWJTyFuq',	NULL,	'2022-12-19 13:29:57',	'2022-12-19 13:29:57',	'player'),
(52,	'Mika',	'Mikaa@mika.fr',	NULL,	'$2y$10$17Ws2gme4raHUy.v0HjisO2oYvVLueaVMed7F7xKIv327LONuouku',	NULL,	'2022-12-19 13:30:01',	'2022-12-19 13:38:34',	'player'),
(53,	'max',	'max@oclick.io',	NULL,	'$2y$10$lYl1b0cJ5N3xrYzr2Tm.YeT/DECVFxI5Htc77eR7QWYCvlHEvlNDW',	NULL,	'2022-12-19 13:32:06',	'2022-12-19 13:38:13',	'player'),
(54,	'francisco',	'sebastienckyser@hotmail.fr',	NULL,	'$2y$10$VHt3tdGsxV2btLAaELq6fO8MVTiakE00pL5ZrATUa2S/o0u5sgUyi',	NULL,	'2022-12-19 13:40:08',	'2022-12-19 14:14:57',	'player'),
(55,	'max',	'maxouuu@olick.fr',	NULL,	'$2y$10$rLAW1cqKfogXCueC/yDDXOBG5jwNYOzG579jnTOamXfNjG4X.9Txy',	NULL,	'2022-12-19 13:41:23',	'2022-12-19 14:15:38',	'player'),
(56,	'Mika',	'Mika@mika.fr',	NULL,	'$2y$10$be0Ry3.2pgyWPh172YDnIuBYkwUpHRv65zj7pGQFszAPvGWFNC3k.',	NULL,	'2022-12-19 13:42:02',	'2022-12-19 14:16:43',	'player');

DROP TABLE IF EXISTS `user_has_spells`;
CREATE TABLE `user_has_spells` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `spell_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

INSERT INTO `user_has_spells` (`id`, `spell_id`, `user_id`, `created_at`, `updated_at`) VALUES
(27,	11,	54,	'2022-12-19 14:02:32',	'2022-12-19 14:02:32'),
(26,	14,	54,	'2022-12-19 14:00:58',	'2022-12-19 14:00:58'),
(25,	15,	54,	'2022-12-19 13:58:41',	'2022-12-19 13:58:41'),
(23,	12,	54,	'2022-12-19 13:46:43',	'2022-12-19 13:46:43'),
(22,	10,	54,	'2022-12-19 13:44:37',	'2022-12-19 13:44:37'),
(21,	1,	54,	'2022-12-19 13:40:53',	'2022-12-19 13:40:53');

DROP TABLE IF EXISTS `user_has_themes`;
CREATE TABLE `user_has_themes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `theme_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=99 DEFAULT CHARSET=utf8mb4;

INSERT INTO `user_has_themes` (`id`, `user_id`, `theme_id`, `created_at`, `updated_at`) VALUES
(89,	54,	1,	'2022-12-19 13:40:08',	'2022-12-19 13:40:08'),
(90,	54,	8,	'2022-12-19 13:40:44',	'2022-12-19 13:40:44'),
(91,	55,	1,	'2022-12-19 13:41:23',	'2022-12-19 13:41:23'),
(92,	56,	1,	'2022-12-19 13:42:02',	'2022-12-19 13:42:02'),
(93,	54,	3,	'2022-12-19 14:01:46',	'2022-12-19 14:01:46'),
(94,	54,	4,	'2022-12-19 14:03:05',	'2022-12-19 14:03:05'),
(95,	54,	5,	'2022-12-19 14:03:06',	'2022-12-19 14:03:06'),
(96,	54,	7,	'2022-12-19 14:03:06',	'2022-12-19 14:03:06'),
(97,	54,	2,	'2022-12-19 14:03:07',	'2022-12-19 14:03:07'),
(98,	54,	6,	'2022-12-19 14:03:08',	'2022-12-19 14:03:08');

-- 2022-12-20 10:35:04
