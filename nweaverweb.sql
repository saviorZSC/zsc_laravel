/*
MySQL Data Transfer
Source Host: localhost
Source Database: nweaverweb
Target Host: localhost
Target Database: nweaverweb
Date: 2015/12/15 10:29:08
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for articles
-- ----------------------------
CREATE TABLE `articles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `intro` text COLLATE utf8_unicode_ci NOT NULL,
  `publish_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Table structure for mails
-- ----------------------------
CREATE TABLE `mails` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sender` int(11) NOT NULL,
  `receiver` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Table structure for project_user
-- ----------------------------
CREATE TABLE `project_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `ismanager` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Table structure for projects
-- ----------------------------
CREATE TABLE `projects` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '/image/project_img/project_item.jpg',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Table structure for task_user
-- ----------------------------
CREATE TABLE `task_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `task_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Table structure for tasks
-- ----------------------------
CREATE TABLE `tasks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `project_id` int(11) NOT NULL,
  `flag` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Table structure for users
-- ----------------------------
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `portrait` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '/image/protrait/default.png',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records 
-- ----------------------------
INSERT INTO `articles` VALUES ('1', 'Quae atque quis rerum libero incidunt.', 'Velit qui ipsam placeat unde. Architecto illum labore autem molestiae. Modi et nihil voluptatem commodi ea. Aut rerum aut et perspiciatis.\\n\\nId dolor unde quisquam et eligendi. Maiores quaerat fuga sit fugit est. Sed iusto et facilis sunt occaecati voluptatibus expedita. Libero delectus eum sed et illum.\\n\\nQuae similique placeat eveniet quasi sit. Odit esse aut quis maxime. Hic id inventore dolores dolor laudantium asperiores. Commodi doloremque est mollitia laudantium laborum animi accusantium.\\n\\nQuia voluptatem voluptatem eum eum consequatur est. Quam autem qui sint soluta. Aut molestiae voluptate necessitatibus et.', '', '2015-12-12 11:40:10', '2015-12-11 15:52:36', '2015-12-11 15:52:36');
INSERT INTO `articles` VALUES ('2', 'Eos aut in non delectus sed.', 'Id eos doloremque ut ut sed dolores ut. Mollitia ut minus quisquam. Perferendis totam perferendis debitis qui aut non. Non qui est sunt ad.\\n\\nQuidem eveniet fuga iusto ipsa non aliquid odit. Magnam adipisci iusto eligendi earum officia consequatur est minus. Voluptatibus asperiores accusantium culpa tempore voluptates quam porro. Ullam et aliquam voluptatum enim.\\n\\nMaxime minus delectus autem vel autem ut. Ducimus occaecati corporis aut aut nemo sit. Earum amet quo officia nostrum iure.', '', '2015-11-19 20:56:39', '2015-12-11 15:52:36', '2015-12-11 15:52:36');
INSERT INTO `articles` VALUES ('3', 'Suscipit et adipisci quia reiciendis ut aperiam et et sapiente.', 'Et autem et ut. Voluptatum omnis consequatur dolorem ex eveniet autem. Voluptatem quos ipsam nihil laborum. Et maxime odit earum corporis nulla voluptatem voluptas.\\n\\nSint natus nihil reprehenderit consequatur consequatur aut. Sit maxime libero ea soluta assumenda. Enim odio dolor ipsa officiis nostrum architecto. Reiciendis voluptas eum corrupti dicta provident dolorem ducimus.\\n\\nMollitia quia quia voluptates est. Quas eveniet fuga possimus reprehenderit. Nulla impedit beatae vel tempora voluptatem ab architecto. Et deserunt sed et hic.', '', '2015-12-11 03:03:14', '2015-12-11 15:52:36', '2015-12-11 15:52:36');
INSERT INTO `articles` VALUES ('4', 'Eveniet unde omnis.', 'Debitis quisquam veritatis aut est. Dignissimos mollitia id voluptatum explicabo ipsa minus. Provident sed ea error fugiat nihil maiores.\\n\\nMolestias modi enim optio quae autem blanditiis. Velit repellendus et consectetur et. Perspiciatis nobis in dolorem in placeat ad beatae adipisci. Ad atque eligendi cupiditate ipsa sequi tempore beatae sint.\\n\\nDebitis et qui quod assumenda est. Dolores vel enim necessitatibus voluptates. Sed id porro ut quia eum quas. Ipsum corporis omnis corrupti praesentium. Sit eum alias nesciunt.', '', '2015-11-23 09:51:58', '2015-12-11 15:52:36', '2015-12-11 15:52:36');
INSERT INTO `articles` VALUES ('5', 'Non pariatur et vero optio sed qui consequatur quia autem in.', 'Vitae cupiditate ex nostrum et. Laborum ea iusto facere. Esse perferendis omnis voluptas repellendus quod. Quis optio debitis praesentium cupiditate.\\n\\nAliquid consequuntur assumenda sed aperiam et. Qui similique dolor dignissimos officia. Autem aut et quis neque dignissimos qui autem. Dolorem iusto omnis sed voluptatem aut omnis voluptatem.\\n\\nVoluptatum et odit fuga. Ea iste sit eum sunt assumenda.\\n\\nRatione asperiores magni nisi iste sapiente. Quod ipsum fuga et consequuntur perferendis. Non error voluptatem incidunt sunt occaecati officia alias dolore. Cumque quis sed consequatur fugiat rem reprehenderit dolorem.', '', '2015-11-17 01:41:15', '2015-12-11 15:52:36', '2015-12-11 15:52:36');
INSERT INTO `articles` VALUES ('6', 'Deserunt ab occaecati error.', 'Nulla quam omnis mollitia. Vel magni est accusamus modi ipsum nihil. Ut eveniet ut dolorum fugiat. Consequuntur quaerat quaerat sed aut debitis sint quaerat.\\n\\nVoluptatum dolores qui vel. Exercitationem assumenda dolor fuga tenetur atque et. Pariatur nesciunt et error. Explicabo qui impedit qui sed rerum.\\n\\nFugit aut quaerat quam ullam ut nulla. Labore magni vel molestiae repudiandae hic. Autem est totam amet minima rerum numquam dolorem.\\n\\nSunt consequatur ea ea voluptas non qui. Ab velit et labore. Nulla repellendus vero ab rem quasi. Vero dolores ipsa iste at dolorum facilis.\\n\\nAutem ab quia aspernatur molestiae eaque dolores. Eius aut voluptas voluptatem amet ipsam in esse. Sed nam et earum voluptates nulla. Quae ut quo adipisci ut ab.\\n\\nIste cumque in id dolores et. Rem rerum quaerat esse perspiciatis. Reprehenderit iure perferendis corporis molestiae. Aut quas non exercitationem quam blanditiis ut dolor est.', '', '2015-12-03 09:36:43', '2015-12-11 15:52:36', '2015-12-11 15:52:36');
INSERT INTO `articles` VALUES ('7', 'Libero aperiam ex commodi officia suscipit.', 'Ea dolor atque eveniet recusandae sed autem voluptas. Nemo dolorem eveniet adipisci vel est. Sit fuga a est. Eius qui ex dignissimos ad laudantium nisi reiciendis.\\n\\nQuos inventore minima laudantium sunt qui. Minima autem molestiae est repudiandae. Rem rerum dignissimos doloremque et repudiandae.\\n\\nQui facilis et corrupti commodi totam esse aut. Vel natus nihil ullam esse nostrum hic repellat. Nostrum natus ullam nulla beatae sit quis.', '', '2015-12-08 16:49:42', '2015-12-11 15:52:36', '2015-12-11 15:52:36');
INSERT INTO `articles` VALUES ('8', 'Ut quisquam molestias non repellat quam alias.', 'Quia autem maxime iusto enim ipsam voluptatem. Aliquam quam voluptas animi eligendi iusto incidunt ea. Quia rem alias ducimus ut repellat placeat.\\n\\nConsequatur accusantium eligendi ut veniam voluptatem. Officiis quisquam vel et accusantium molestiae. Voluptatem debitis atque ut dolores officia voluptates.\\n\\nMaxime totam eius alias error voluptas consequatur unde ut. Pariatur eveniet nam asperiores possimus molestiae corrupti eos. Qui tenetur voluptatem inventore molestiae ducimus dolore suscipit. Cupiditate delectus minus aliquam occaecati totam sit sunt.\\n\\nQuisquam recusandae et recusandae sequi. Quasi molestiae voluptas nam mollitia expedita aut. Numquam aut non culpa ipsa maxime sit ullam. Est molestias et dolor totam enim. Assumenda ratione dolores eaque et.\\n\\nUt voluptatem ipsam eos consequatur laboriosam magnam. Tempore consectetur fugiat rem ut laudantium alias. Sint omnis consequatur nisi ea doloremque sed. Quasi atque eos nobis voluptates doloribus.', '', '2015-11-25 05:55:03', '2015-12-11 15:52:36', '2015-12-11 15:52:36');
INSERT INTO `articles` VALUES ('9', 'Quos tempore et qui.', 'Molestiae magnam aliquid tempore porro maxime qui officia. Quis quas voluptatem nihil. Provident voluptas voluptatum rerum. Consequatur necessitatibus veniam esse voluptates.\\n\\nQuae qui in reiciendis excepturi ad qui explicabo similique. Minima enim id et et inventore. Ipsa itaque quis ut quia hic voluptate. Aspernatur corporis architecto sequi accusamus aut et exercitationem.\\n\\nAliquid nemo excepturi ea recusandae dolores. Qui laudantium enim voluptates quas qui.', '', '2015-11-24 15:27:59', '2015-12-11 15:52:36', '2015-12-11 15:52:36');
INSERT INTO `articles` VALUES ('10', 'Ut rem consectetur ut inventore ratione laudantium ut.', 'Nemo est eum et rerum consequatur. Maxime earum sit rerum explicabo minima magni. Unde ea itaque laborum. Dolorem ut vel minus ut quos.\\n\\nQui doloremque fugit quia. Ad blanditiis amet ipsam laudantium facere quia odit. Est et exercitationem hic hic ipsa.\\n\\nFugiat hic ipsam aperiam sed occaecati quibusdam. Enim tempore rerum ad ut est. Consequatur cumque deserunt quisquam quisquam aliquam. Qui deserunt nihil voluptas quod quis reiciendis culpa exercitationem.', '', '2015-12-12 07:22:27', '2015-12-11 15:52:36', '2015-12-11 15:52:36');
INSERT INTO `articles` VALUES ('11', 'Quidem ex perspiciatis exercitationem sed repellat laboriosam.', 'Commodi alias molestias mollitia officia fugiat provident necessitatibus. Corporis sed aut est consequatur quae possimus itaque dicta. Tempora repellendus qui est minus quos aut. Dolor voluptatem dolores placeat voluptas labore porro sunt ea.\\n\\nBlanditiis in nostrum atque aut nihil est. Asperiores fuga et aut quod dolores accusamus officiis est. Sint dolor voluptatibus exercitationem rerum necessitatibus doloremque exercitationem. Rerum dolores pariatur veniam sed ut minima harum.\\n\\nEst maxime nemo sed recusandae. Distinctio maxime omnis amet.\\n\\nQuas et alias rerum provident voluptates ex culpa reiciendis. Ut velit consequatur dolorem commodi autem est. Consequatur quia enim et distinctio qui. Ipsum sed totam ipsam enim.\\n\\nNobis aspernatur magnam omnis. Laudantium optio ad sunt quo magni sunt.\\n\\nVoluptate repellendus sint unde ut. Sit fuga autem quis inventore dolore. Rerum harum est eius sed quisquam esse vel.', '', '2015-11-30 10:39:58', '2015-12-11 15:52:36', '2015-12-11 15:52:36');
INSERT INTO `articles` VALUES ('12', 'Nobis qui voluptatem earum non itaque sint autem aperiam dolorum animi.', 'Voluptas animi aut ab esse aspernatur ipsum. Tempore dolores laudantium magnam perferendis. Eveniet voluptatem omnis omnis similique quasi iste aut.\\n\\nA ratione ut labore voluptate iusto fugit. Fugiat quia et voluptatibus tenetur velit sequi voluptatem. Praesentium rerum et nostrum placeat dolor. Voluptatem adipisci dolor non quos. Ipsa vel consectetur exercitationem quis maiores.\\n\\nEaque ex id rerum animi. Repudiandae qui fugit omnis laboriosam dignissimos aut. Qui cumque et cupiditate hic. Iste et consequatur et error optio.\\n\\nSit hic nam eius impedit placeat est. Aliquam non facilis natus consectetur quis sint. Nobis et consequatur expedita voluptas eius qui. Dignissimos qui assumenda et non iure similique consequatur et.', '', '2015-11-25 07:52:21', '2015-12-11 15:52:36', '2015-12-11 15:52:36');
INSERT INTO `articles` VALUES ('13', 'Possimus repudiandae tempore excepturi dolores ex quisquam ut sunt.', 'Sapiente nostrum ut similique id suscipit. Natus perferendis vitae excepturi nesciunt aut dolor. Alias blanditiis saepe atque perferendis debitis distinctio. Ut corrupti aliquam dolorum suscipit iste. Distinctio et accusamus modi id optio.\\n\\nVoluptas aspernatur dolorem aperiam est molestiae unde. Aspernatur excepturi eum sint ducimus qui optio. Molestiae consequatur ducimus aut. Omnis assumenda iure eos non pariatur est. Eligendi soluta veniam nisi provident delectus.\\n\\nDelectus molestiae error ab et vel labore accusamus quia. Consequuntur magnam minus nostrum repellat enim. Dolorem culpa sed ullam et dicta excepturi ducimus.', '', '2015-11-23 00:29:14', '2015-12-11 15:52:36', '2015-12-11 15:52:36');
INSERT INTO `articles` VALUES ('14', 'Aperiam et magnam.', 'Nostrum libero iusto hic qui. Inventore omnis ut harum repudiandae consectetur minima ratione iusto. Fuga omnis sequi velit minima pariatur. Dolor aspernatur nihil sint ullam debitis consequatur iste.\\n\\nUt ut totam voluptas praesentium iusto. Nemo et incidunt sed magni consequatur accusamus. Alias quo numquam autem omnis ullam. Ducimus sed corporis saepe dolorum ut.\\n\\nMolestias non ea ea reprehenderit id. Aut quia occaecati voluptatem quas quo. Sunt blanditiis velit commodi velit accusamus. Dignissimos dolor aliquam dolor omnis.\\n\\nAutem maiores voluptate dolorem doloremque. Quibusdam voluptate voluptas aut unde delectus voluptatem. Consequuntur esse dolores eos quo illo quis et cupiditate. Iusto nulla ex velit sed maxime illo recusandae.\\n\\nIncidunt aut ad alias facere. Aut veniam nihil hic doloremque amet deleniti. Facere commodi est labore nulla deleniti. Quibusdam ratione nobis harum harum et corporis qui.\\n\\nNam velit in omnis non itaque eos minus omnis. Est ut qui deleniti voluptate dolorem voluptas minus eum. Reprehenderit quae distinctio ut quo aut odit aliquid. Est rerum aut nihil quo nisi est. Soluta cupiditate voluptatem blanditiis omnis fuga labore est.', '', '2015-11-15 10:48:22', '2015-12-11 15:52:36', '2015-12-11 15:52:36');
INSERT INTO `articles` VALUES ('15', 'Architecto eum rerum voluptas cumque culpa id molestiae.', 'Enim minus aut pariatur qui consectetur dolorem. Quae et laborum est modi. Et ut impedit atque officia est ullam quaerat. Praesentium animi consectetur consequatur explicabo libero ab dolor.\\n\\nTempora et officiis sunt et et nam. Magnam error eaque modi culpa. Eos explicabo quisquam nesciunt modi. Quo nulla et dolores et aut ad quasi minima.\\n\\nQuasi rerum accusamus ratione non laborum temporibus. Rerum vel ut modi laboriosam eius quasi tempore. Et officia odit dolor nam non at. Voluptatem a ullam omnis ut aut ratione illo illo. Architecto vel non in dolores.\\n\\nUt illo debitis tempora soluta a sed impedit. Culpa doloremque sint sed et eum. Officia sit atque officiis veniam fugiat ut quis.\\n\\nNemo quia nulla consequatur facere et iusto distinctio. Et ea ea sunt non quis repellendus. Similique quo qui quisquam ab rerum.\\n\\nQuam natus reiciendis perspiciatis nemo consectetur quod. Dolores in alias accusamus repellat porro voluptatibus. Sunt dolor provident ut vitae.', '', '2015-11-16 04:13:36', '2015-12-11 15:52:36', '2015-12-11 15:52:36');
INSERT INTO `articles` VALUES ('16', 'Est error culpa modi nobis aut nulla quod.', 'Dolores dolores eum omnis omnis mollitia. Officia laudantium id laudantium harum aspernatur molestias.\\n\\nRerum et sed ab illum officiis dolorem. Omnis tempore accusantium consectetur quia libero rem sed. Eaque recusandae nisi dicta possimus repellendus et. Neque blanditiis iure omnis aut.\\n\\nEt aliquam ut facere rerum deserunt quae ut. Tenetur molestias omnis at praesentium qui. Molestias molestiae vel dolor. Id quo dolorem ipsum ducimus architecto. Qui quam fugiat laudantium modi.', '', '2015-11-22 06:59:49', '2015-12-11 15:52:36', '2015-12-11 15:52:36');
INSERT INTO `articles` VALUES ('17', 'Dolorem nobis eaque placeat optio necessitatibus ea sint quibusdam.', 'Et et neque reiciendis et enim. Sit quam exercitationem ea ea officia aut sint. Rerum ea ipsa quam a ea rem error asperiores.\\n\\nRepellendus dicta pariatur dolores aliquam sequi. Similique placeat perspiciatis consequatur natus. Sed rem sapiente delectus qui. Veniam sed nihil eaque voluptatem accusantium soluta.\\n\\nSunt et et illo id aut tenetur. Quia delectus asperiores voluptatem iusto similique molestias est rerum.', '', '2015-11-13 18:53:41', '2015-12-11 15:52:36', '2015-12-11 15:52:36');
INSERT INTO `articles` VALUES ('18', 'Dolor non est aspernatur voluptas et.', 'Aspernatur est sit quia numquam. Qui laudantium modi velit quo aspernatur quod.\\n\\nSunt repellat minima facilis fugiat et deleniti repellat. Ut ipsa ipsam nihil nobis. Nam praesentium modi quae est.\\n\\nUt dolores cupiditate earum sed nulla. Consectetur vero et corporis ea corrupti. Maxime neque cumque sunt totam consequuntur fuga.\\n\\nNihil impedit sint id dolore vel. Est ut id illum numquam porro. Laudantium quia odio sit consequatur qui exercitationem.\\n\\nNulla quaerat velit aut vel. Distinctio explicabo dignissimos optio voluptatem velit nobis. Nobis excepturi facilis sed.\\n\\nAut magni facere reprehenderit porro vitae in. Dolores aliquam molestiae quas a iure magni sint sit. Ut sit aut quos incidunt aliquid. Laboriosam cumque ea enim deserunt corporis.', '', '2015-11-25 06:28:22', '2015-12-11 15:52:36', '2015-12-11 15:52:36');
INSERT INTO `articles` VALUES ('19', 'Dolores ipsa aut id culpa nihil.', 'Enim nulla qui atque ut saepe odit voluptatum. Eos eum facilis ullam perspiciatis quia et. Tenetur veritatis earum possimus adipisci reprehenderit. Eum temporibus quia ut ut ipsum accusantium.\\n\\nDolor modi ea nostrum nihil distinctio. Et quis unde quis in ipsa perspiciatis. Et et minus tenetur accusamus et.\\n\\nTempora qui qui dolores qui est occaecati. Ea accusantium sit natus saepe. Aut consequatur eum harum inventore est aliquid molestias.', '', '2015-11-12 07:37:11', '2015-12-11 15:52:36', '2015-12-11 15:52:36');
INSERT INTO `articles` VALUES ('20', 'Aperiam et dolor ut sunt vitae qui incidunt aut nulla dignissimos ea.', 'Dolorem tenetur nam doloremque consequatur fugiat veniam quaerat. Error omnis quis reiciendis nobis aspernatur possimus earum.\\n\\nQui doloribus laboriosam ut sint est eum. Reiciendis illo ut eum eveniet. Quod veritatis veritatis perspiciatis quasi. Harum fugit consequatur commodi fugit vel assumenda a.\\n\\nEligendi minima labore vel voluptas est. Eaque vero porro sed eum debitis. Dignissimos sunt vitae et. Fugit et ut non nobis.\\n\\nPlaceat magni eos voluptas ratione aut et. Odit odio blanditiis totam laboriosam. Aliquam ut qui est rerum. Sunt qui assumenda expedita corrupti earum.', '', '2015-12-09 04:45:40', '2015-12-11 15:52:36', '2015-12-11 15:52:36');
INSERT INTO `migrations` VALUES ('2014_10_12_000000_create_users_table', '1');
INSERT INTO `migrations` VALUES ('2014_10_12_100000_create_password_resets_table', '1');
INSERT INTO `migrations` VALUES ('2015_11_26_011106_create_articles_table', '1');
INSERT INTO `migrations` VALUES ('2015_12_08_011600_create_projects_table', '1');
INSERT INTO `migrations` VALUES ('2015_12_08_011641_create_tasks_table', '1');
INSERT INTO `migrations` VALUES ('2015_12_08_011700_create_mails_table', '1');
INSERT INTO `migrations` VALUES ('2015_12_08_024242_create_user_project_table', '1');
INSERT INTO `migrations` VALUES ('2015_12_08_024313_create_user_task_table', '1');
INSERT INTO `migrations` VALUES ('2015_12_11_061303_add_portrait_column_to_user', '1');
INSERT INTO `project_user` VALUES ('1', '1', '1', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `project_user` VALUES ('2', '1', '2', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `project_user` VALUES ('3', '1', '3', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `projects` VALUES ('1', 'Test', 'internet', 'this is a test project to update', '1', '/image/project_img/project_item.jpg', '2015-12-12 06:13:55', '2015-12-12 08:49:52');
INSERT INTO `projects` VALUES ('2', 'Test2', 'media', 'this is test 2', '1', '/image/project_img/project_item.jpg', '2015-12-14 00:18:26', '2015-12-14 00:18:26');
INSERT INTO `projects` VALUES ('3', 'test3', 'media', 'test', '1', '/image/project_img/project_item.jpg', '2015-12-14 00:25:40', '2015-12-14 00:25:40');
INSERT INTO `task_user` VALUES ('1', '1', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `task_user` VALUES ('2', '1', '2', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `task_user` VALUES ('3', '1', '3', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `task_user` VALUES ('4', '1', '4', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `task_user` VALUES ('5', '1', '5', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `task_user` VALUES ('6', '0', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `tasks` VALUES ('1', 'test1', 'test1', 'test1', '1', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `tasks` VALUES ('2', 'test2', 'test2', 'test2', '1', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `tasks` VALUES ('3', 'test3', 'test3', 'test3', '1', '2', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `tasks` VALUES ('4', 'test4', 'test4', 'test4', '1', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `tasks` VALUES ('5', 'test5', 'test5', 'test5', '2', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `tasks` VALUES ('6', 'test task', 'test6', 'test update to update', '2', '1', '2015-12-14 00:42:00', '2015-12-15 00:32:21');
INSERT INTO `tasks` VALUES ('8', 'test8', 'test 8 ', 'test', '2', '1', '0000-00-00 00:00:00', '2015-12-15 02:10:30');
INSERT INTO `tasks` VALUES ('10', 'test9', 'test9', 'test9', '2', '0', '2015-12-14 16:00:15', '2015-12-14 16:13:35');
INSERT INTO `tasks` VALUES ('11', 'test10', 'test10', 'test10', '2', '0', '2015-12-14 16:00:34', '2015-12-14 16:09:28');
INSERT INTO `tasks` VALUES ('12', 'test11', 'test11', 'test11', '2', '2', '2015-12-14 16:00:51', '2015-12-15 02:01:59');
INSERT INTO `tasks` VALUES ('13', 'test12', 'test12', 'test12', '2', '2', '2015-12-14 16:01:07', '2015-12-15 00:32:26');
INSERT INTO `users` VALUES ('1', 'laravel', 'laravel@test.com', '$2y$10$h21EgKqptjYDGSjMWRJF7uX49bcAs/gjM9XWiU.SfmC8fpjeYZDhm', '5bdLfbzStphAYX0z6xeulAgMgpLFyYmWCIsvRq36O5x2Onc4HFkZQgjCOu1r', '2015-12-12 03:43:20', '2015-12-13 11:10:06', '/image/protrait/default.png');
