/*
 Navicat Premium Data Transfer

 Source Server         : MyProjects
 Source Server Type    : MySQL
 Source Server Version : 100130
 Source Host           : localhost:3306
 Source Schema         : secondelobooster

 Target Server Type    : MySQL
 Target Server Version : 100130
 File Encoding         : 65001

 Date: 01/05/2018 01:05:35
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for booster_applications
-- ----------------------------
DROP TABLE IF EXISTS `booster_applications`;
CREATE TABLE `booster_applications`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `boosterAccess` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `summonername` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `skype_discord` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `current_rank` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `boosted_before` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `willing` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `otherHire` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `booster_applications_email_unique`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for champions
-- ----------------------------
DROP TABLE IF EXISTS `champions`;
CREATE TABLE `champions`  (
  `id` int(11) NOT NULL,
  `name` varchar(55) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `imagename` varchar(55) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `champion_key` varchar(55) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `riot_id` int(11) NOT NULL,
  `role` varchar(35) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of champions
-- ----------------------------
INSERT INTO `champions` VALUES (1, 'Jax', '1', 'Jax', 24, NULL);
INSERT INTO `champions` VALUES (2, 'Sona', '2', 'Sona', 37, NULL);
INSERT INTO `champions` VALUES (3, 'Tristana', '3', 'Tristana', 18, NULL);
INSERT INTO `champions` VALUES (4, 'Varus', '4', 'Varus', 110, NULL);
INSERT INTO `champions` VALUES (5, 'Fiora', '5', 'Fiora', 114, NULL);
INSERT INTO `champions` VALUES (6, 'Singed', '6', 'Singed', 27, NULL);
INSERT INTO `champions` VALUES (7, 'Tahm Kench', '7', 'TahmKench', 223, NULL);
INSERT INTO `champions` VALUES (8, 'LeBlanc', '8', 'Leblanc', 7, NULL);
INSERT INTO `champions` VALUES (9, 'Thresh', '9', 'Thresh', 412, NULL);
INSERT INTO `champions` VALUES (10, 'Karma', '10', 'Karma', 43, NULL);
INSERT INTO `champions` VALUES (11, 'Jhin', '11', 'Jhin', 202, NULL);
INSERT INTO `champions` VALUES (12, 'Rumble', '12', 'Rumble', 68, NULL);
INSERT INTO `champions` VALUES (13, 'Udyr', '13', 'Udyr', 77, NULL);
INSERT INTO `champions` VALUES (14, 'Lee Sin', '14', 'LeeSin', 64, NULL);
INSERT INTO `champions` VALUES (15, 'Yorick', '15', 'Yorick', 83, NULL);
INSERT INTO `champions` VALUES (16, 'Ornn', '16', 'Ornn', 516, NULL);
INSERT INTO `champions` VALUES (17, 'Kayn', '17', 'Kayn', 141, NULL);
INSERT INTO `champions` VALUES (18, 'Kassadin', '18', 'Kassadin', 38, NULL);
INSERT INTO `champions` VALUES (19, 'Sivir', '19', 'Sivir', 15, NULL);
INSERT INTO `champions` VALUES (20, 'Miss Fortune', '20', 'MissFortune', 21, NULL);
INSERT INTO `champions` VALUES (21, 'Draven', '21', 'Draven', 119, NULL);
INSERT INTO `champions` VALUES (22, 'Yasuo', '22', 'Yasuo', 157, NULL);
INSERT INTO `champions` VALUES (23, 'Kayle', '23', 'Kayle', 10, NULL);
INSERT INTO `champions` VALUES (24, 'Shaco', '24', 'Shaco', 35, NULL);
INSERT INTO `champions` VALUES (25, 'Renekton', '25', 'Renekton', 58, NULL);
INSERT INTO `champions` VALUES (26, 'Hecarim', '26', 'Hecarim', 120, NULL);
INSERT INTO `champions` VALUES (27, 'Fizz', '27', 'Fizz', 105, NULL);
INSERT INTO `champions` VALUES (28, 'KogMaw', '28', 'KogMaw', 96, NULL);
INSERT INTO `champions` VALUES (29, 'Maokai', '29', 'Maokai', 57, NULL);
INSERT INTO `champions` VALUES (30, 'Lissandra', '30', 'Lissandra', 127, NULL);
INSERT INTO `champions` VALUES (31, 'Jinx', '31', 'Jinx', 222, NULL);
INSERT INTO `champions` VALUES (32, 'Urgot', '32', 'Urgot', 6, NULL);
INSERT INTO `champions` VALUES (33, 'Fiddlesticks', '33', 'Fiddlesticks', 9, NULL);
INSERT INTO `champions` VALUES (34, 'Galio', '34', 'Galio', 3, NULL);
INSERT INTO `champions` VALUES (35, 'Pantheon', '35', 'Pantheon', 80, NULL);
INSERT INTO `champions` VALUES (36, 'Talon', '36', 'Talon', 91, NULL);
INSERT INTO `champions` VALUES (37, 'Gangplank', '37', 'Gangplank', 41, NULL);
INSERT INTO `champions` VALUES (38, 'Ezreal', '38', 'Ezreal', 81, NULL);
INSERT INTO `champions` VALUES (39, 'Gnar', '39', 'Gnar', 150, NULL);
INSERT INTO `champions` VALUES (40, 'Teemo', '40', 'Teemo', 17, NULL);
INSERT INTO `champions` VALUES (41, 'Annie', '41', 'Annie', 1, NULL);
INSERT INTO `champions` VALUES (42, 'Mordekaiser', '42', 'Mordekaiser', 82, NULL);
INSERT INTO `champions` VALUES (43, 'Azir', '43', 'Azir', 268, NULL);
INSERT INTO `champions` VALUES (44, 'Kennen', '44', 'Kennen', 85, NULL);
INSERT INTO `champions` VALUES (45, 'Riven', '45', 'Riven', 92, NULL);
INSERT INTO `champions` VALUES (46, 'ChoGath', '46', 'Chogath', 31, NULL);
INSERT INTO `champions` VALUES (47, 'Aatrox', '47', 'Aatrox', 266, NULL);
INSERT INTO `champions` VALUES (48, 'Poppy', '48', 'Poppy', 78, NULL);
INSERT INTO `champions` VALUES (49, 'Taliyah', '49', 'Taliyah', 163, NULL);
INSERT INTO `champions` VALUES (50, 'Illaoi', '50', 'Illaoi', 420, NULL);
INSERT INTO `champions` VALUES (51, 'Heimerdinger', '51', 'Heimerdinger', 74, NULL);
INSERT INTO `champions` VALUES (52, 'Alistar', '52', 'Alistar', 12, NULL);
INSERT INTO `champions` VALUES (53, 'Xin Zhao', '53', 'XinZhao', 5, NULL);
INSERT INTO `champions` VALUES (54, 'Lucian', '54', 'Lucian', 236, NULL);
INSERT INTO `champions` VALUES (55, 'Volibear', '55', 'Volibear', 106, NULL);
INSERT INTO `champions` VALUES (56, 'Sejuani', '56', 'Sejuani', 113, NULL);
INSERT INTO `champions` VALUES (57, 'Nidalee', '57', 'Nidalee', 76, NULL);
INSERT INTO `champions` VALUES (58, 'Garen', '58', 'Garen', 86, NULL);
INSERT INTO `champions` VALUES (59, 'Leona', '59', 'Leona', 89, NULL);
INSERT INTO `champions` VALUES (60, 'Zed', '60', 'Zed', 238, NULL);
INSERT INTO `champions` VALUES (61, 'Blitzcrank', '61', 'Blitzcrank', 53, NULL);
INSERT INTO `champions` VALUES (62, 'Rammus', '62', 'Rammus', 33, NULL);
INSERT INTO `champions` VALUES (63, 'VelKoz', '63', 'Velkoz', 161, NULL);
INSERT INTO `champions` VALUES (64, 'Caitlyn', '64', 'Caitlyn', 51, NULL);
INSERT INTO `champions` VALUES (65, 'Trundle', '65', 'Trundle', 48, NULL);
INSERT INTO `champions` VALUES (66, 'Kindred', '66', 'Kindred', 203, NULL);
INSERT INTO `champions` VALUES (67, 'Quinn', '67', 'Quinn', 133, NULL);
INSERT INTO `champions` VALUES (68, 'Ekko', '68', 'Ekko', 245, NULL);
INSERT INTO `champions` VALUES (69, 'Nami', '69', 'Nami', 267, NULL);
INSERT INTO `champions` VALUES (70, 'Swain', '70', 'Swain', 50, NULL);
INSERT INTO `champions` VALUES (71, 'Taric', '71', 'Taric', 44, NULL);
INSERT INTO `champions` VALUES (72, 'Syndra', '72', 'Syndra', 134, NULL);
INSERT INTO `champions` VALUES (73, 'Rakan', '73', 'Rakan', 497, NULL);
INSERT INTO `champions` VALUES (74, 'Skarner', '74', 'Skarner', 72, NULL);
INSERT INTO `champions` VALUES (75, 'Braum', '75', 'Braum', 201, NULL);
INSERT INTO `champions` VALUES (76, 'Veigar', '76', 'Veigar', 45, NULL);
INSERT INTO `champions` VALUES (77, 'Xerath', '77', 'Xerath', 101, NULL);
INSERT INTO `champions` VALUES (78, 'Corki', '78', 'Corki', 42, NULL);
INSERT INTO `champions` VALUES (79, 'Nautilus', '79', 'Nautilus', 111, NULL);
INSERT INTO `champions` VALUES (80, 'Ahri', '80', 'Ahri', 103, NULL);
INSERT INTO `champions` VALUES (81, 'Jayce', '81', 'Jayce', 126, NULL);
INSERT INTO `champions` VALUES (82, 'Darius', '82', 'Darius', 122, NULL);
INSERT INTO `champions` VALUES (83, 'Tryndamere', '83', 'Tryndamere', 23, NULL);
INSERT INTO `champions` VALUES (84, 'Janna', '84', 'Janna', 40, NULL);
INSERT INTO `champions` VALUES (85, 'Elise', '85', 'Elise', 60, NULL);
INSERT INTO `champions` VALUES (86, 'Vayne', '86', 'Vayne', 67, NULL);
INSERT INTO `champions` VALUES (87, 'Brand', '87', 'Brand', 63, NULL);
INSERT INTO `champions` VALUES (88, 'Graves', '88', 'Graves', 104, NULL);
INSERT INTO `champions` VALUES (89, 'Soraka', '89', 'Soraka', 16, NULL);
INSERT INTO `champions` VALUES (90, 'Xayah', '90', 'Xayah', 498, NULL);
INSERT INTO `champions` VALUES (91, 'Karthus', '91', 'Karthus', 30, NULL);
INSERT INTO `champions` VALUES (92, 'Vladimir', '92', 'Vladimir', 8, NULL);
INSERT INTO `champions` VALUES (93, 'Zilean', '93', 'Zilean', 26, NULL);
INSERT INTO `champions` VALUES (94, 'Katarina', '94', 'Katarina', 55, NULL);
INSERT INTO `champions` VALUES (95, 'Shyvana', '95', 'Shyvana', 102, NULL);
INSERT INTO `champions` VALUES (96, 'Warwick', '96', 'Warwick', 19, NULL);
INSERT INTO `champions` VALUES (97, 'Ziggs', '97', 'Ziggs', 115, NULL);
INSERT INTO `champions` VALUES (98, 'Kled', '98', 'Kled', 240, NULL);
INSERT INTO `champions` VALUES (99, 'KhaZix', '99', 'Khazix', 121, NULL);
INSERT INTO `champions` VALUES (100, 'Olaf', '100', 'Olaf', 2, NULL);
INSERT INTO `champions` VALUES (101, 'Twisted Fate', '101', 'TwistedFate', 4, NULL);
INSERT INTO `champions` VALUES (102, 'Nunu', '102', 'Nunu', 20, NULL);
INSERT INTO `champions` VALUES (103, 'Rengar', '103', 'Rengar', 107, NULL);
INSERT INTO `champions` VALUES (104, 'Bard', '104', 'Bard', 432, NULL);
INSERT INTO `champions` VALUES (105, 'Irelia', '105', 'Irelia', 39, NULL);
INSERT INTO `champions` VALUES (106, 'Ivern', '106', 'Ivern', 427, NULL);
INSERT INTO `champions` VALUES (107, 'Wukong', '107', 'MonkeyKing', 62, NULL);
INSERT INTO `champions` VALUES (108, 'Ashe', '108', 'Ashe', 22, NULL);
INSERT INTO `champions` VALUES (109, 'Kalista', '109', 'Kalista', 429, NULL);
INSERT INTO `champions` VALUES (110, 'Akali', '110', 'Akali', 84, NULL);
INSERT INTO `champions` VALUES (111, 'Vi', '111', 'Vi', 254, NULL);
INSERT INTO `champions` VALUES (112, 'Amumu', '112', 'Amumu', 32, NULL);
INSERT INTO `champions` VALUES (113, 'Lulu', '113', 'Lulu', 117, NULL);
INSERT INTO `champions` VALUES (114, 'Morgana', '114', 'Morgana', 25, NULL);
INSERT INTO `champions` VALUES (115, 'Nocturne', '115', 'Nocturne', 56, NULL);
INSERT INTO `champions` VALUES (116, 'Diana', '116', 'Diana', 131, NULL);
INSERT INTO `champions` VALUES (117, 'Aurelion Sol', '117', 'AurelionSol', 136, NULL);
INSERT INTO `champions` VALUES (118, 'Zyra', '118', 'Zyra', 143, NULL);
INSERT INTO `champions` VALUES (119, 'Viktor', '119', 'Viktor', 112, NULL);
INSERT INTO `champions` VALUES (120, 'Cassiopeia', '120', 'Cassiopeia', 69, NULL);
INSERT INTO `champions` VALUES (121, 'Nasus', '121', 'Nasus', 75, NULL);
INSERT INTO `champions` VALUES (122, 'Twitch', '122', 'Twitch', 29, NULL);
INSERT INTO `champions` VALUES (123, 'Dr. Mundo', '123', 'DrMundo', 36, NULL);
INSERT INTO `champions` VALUES (124, 'Orianna', '124', 'Orianna', 61, NULL);
INSERT INTO `champions` VALUES (125, 'Evelynn', '125', 'Evelynn', 28, NULL);
INSERT INTO `champions` VALUES (126, 'RekSai', '126', 'RekSai', 421, NULL);
INSERT INTO `champions` VALUES (127, 'Lux', '127', 'Lux', 99, NULL);
INSERT INTO `champions` VALUES (128, 'Sion', '128', 'Sion', 14, NULL);
INSERT INTO `champions` VALUES (129, 'Camille', '129', 'Camille', 164, NULL);
INSERT INTO `champions` VALUES (130, 'Master Yi', '130', 'MasterYi', 11, NULL);
INSERT INTO `champions` VALUES (131, 'Ryze', '131', 'Ryze', 13, NULL);
INSERT INTO `champions` VALUES (132, 'Malphite', '132', 'Malphite', 54, NULL);
INSERT INTO `champions` VALUES (133, 'Anivia', '133', 'Anivia', 34, NULL);
INSERT INTO `champions` VALUES (134, 'Shen', '134', 'Shen', 98, NULL);
INSERT INTO `champions` VALUES (135, 'Jarvan IV', '135', 'JarvanIV', 59, NULL);
INSERT INTO `champions` VALUES (136, 'Malzahar', '136', 'Malzahar', 90, NULL);
INSERT INTO `champions` VALUES (137, 'Zac', '137', 'Zac', 154, NULL);
INSERT INTO `champions` VALUES (138, 'Gragas', '138', 'Gragas', 79, NULL);

-- ----------------------------
-- Table structure for chat_messages
-- ----------------------------
DROP TABLE IF EXISTS `chat_messages`;
CREATE TABLE `chat_messages`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `sender_username` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `read` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for chats
-- ----------------------------
DROP TABLE IF EXISTS `chats`;
CREATE TABLE `chats`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user1` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user2` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user1_is_typing` tinyint(1) NOT NULL DEFAULT 0,
  `user2_is _typing` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for contacts
-- ----------------------------
DROP TABLE IF EXISTS `contacts`;
CREATE TABLE `contacts`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `contacts_email_unique`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for game_accounts
-- ----------------------------
DROP TABLE IF EXISTS `game_accounts`;
CREATE TABLE `game_accounts`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `order_id` int(100) UNSIGNED NULL DEFAULT NULL,
  `user_id` int(100) UNSIGNED NULL DEFAULT NULL,
  `accountName` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `summonerName` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `serverName` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `note` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `gameImage` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `gameRole` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 21 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of game_accounts
-- ----------------------------
INSERT INTO `game_accounts` VALUES (1, 3, 3, 'BBMBMN', 'www345', 'ttth', 'EUW', 'welcome to russian', '8,1,10', '2,1', '2018-04-30 10:38:35', '2018-04-30 10:38:35');
INSERT INTO `game_accounts` VALUES (2, 2, 2, 'booster234', '234234', 'thenvk', 'EUW', 'welcome to china', '8,1,10,34', '2,1,4', '2018-05-30 10:38:57', '2018-05-30 10:38:57');
INSERT INTO `game_accounts` VALUES (3, 1, 1, 'MMBMN', 'plpo09002947', 'summonorert', 'JP', 'Hello', '1,2,3', '1,2', '2018-04-30 20:50:07', '2018-04-30 20:49:58');
INSERT INTO `game_accounts` VALUES (4, 4, 4, 'Pulk', 'mkghnrty567567', 'rtyr', 'CN', 'good', '5.6.7', '4,3', '2018-04-30 20:50:13', '2018-04-29 20:50:02');
INSERT INTO `game_accounts` VALUES (19, 5, 4, 'alpha430', 'Wolf', 'honghae', 'SEA', 'Hello? how are you?', '64,58,51,53,63,56', '1,2,3', '2018-04-30 11:44:32', '2018-04-30 11:44:32');
INSERT INTO `game_accounts` VALUES (20, 6, 5, 'police510', 'oplk123', 'polkm', 'EUNE', 'I like  this game', '15,8,1,3', '1,2,3', '2018-04-30 12:23:55', '2018-04-30 12:23:55');

-- ----------------------------
-- Table structure for messages
-- ----------------------------
DROP TABLE IF EXISTS `messages`;
CREATE TABLE `messages`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(10) UNSIGNED NOT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 34 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of messages
-- ----------------------------
INSERT INTO `messages` VALUES (1, 4, 'hi there?', '2018-04-30 11:44:40', '2018-04-30 11:44:40');
INSERT INTO `messages` VALUES (2, 4, 'how are you?', '2018-04-30 11:44:45', '2018-04-30 11:44:45');
INSERT INTO `messages` VALUES (3, 4, 'hi anton', '2018-04-30 12:14:00', '2018-04-30 12:14:00');
INSERT INTO `messages` VALUES (4, 5, 'there?', '2018-04-30 12:24:07', '2018-04-30 12:24:07');
INSERT INTO `messages` VALUES (5, 4, 'your bussiness was good', '2018-04-30 13:58:04', '2018-04-30 13:58:04');
INSERT INTO `messages` VALUES (6, 4, 'this chat was made by me', '2018-04-30 13:58:13', '2018-04-30 13:58:13');
INSERT INTO `messages` VALUES (7, 4, 'by using laravel vue js', '2018-04-30 13:58:27', '2018-04-30 13:58:27');
INSERT INTO `messages` VALUES (8, 4, 'please write in here', '2018-04-30 13:58:36', '2018-04-30 13:58:36');
INSERT INTO `messages` VALUES (9, 4, 'hey', '2018-04-30 13:58:47', '2018-04-30 13:58:47');
INSERT INTO `messages` VALUES (10, 4, 'please', '2018-04-30 13:58:49', '2018-04-30 13:58:49');
INSERT INTO `messages` VALUES (11, 4, 'kwnag hyok', '2018-04-30 13:59:04', '2018-04-30 13:59:04');
INSERT INTO `messages` VALUES (12, 4, 'please write in here', '2018-04-30 13:59:10', '2018-04-30 13:59:10');
INSERT INTO `messages` VALUES (13, 4, 'what do you need?', '2018-04-30 13:59:32', '2018-04-30 13:59:32');
INSERT INTO `messages` VALUES (14, 4, 'please chat now in here', '2018-04-30 14:00:53', '2018-04-30 14:00:53');
INSERT INTO `messages` VALUES (15, 4, 'here', '2018-04-30 14:01:01', '2018-04-30 14:01:01');
INSERT INTO `messages` VALUES (16, 4, 'do you mean?', '2018-04-30 14:01:12', '2018-04-30 14:01:12');
INSERT INTO `messages` VALUES (17, 4, 'ok', '2018-04-30 14:01:15', '2018-04-30 14:01:15');
INSERT INTO `messages` VALUES (18, 4, 'i needsu re', '2018-04-30 14:01:18', '2018-04-30 14:01:18');
INSERT INTO `messages` VALUES (19, 4, 'your chat text', '2018-04-30 14:01:23', '2018-04-30 14:01:23');
INSERT INTO `messages` VALUES (20, 4, 'please', '2018-04-30 14:01:44', '2018-04-30 14:01:44');
INSERT INTO `messages` VALUES (21, 4, 'i was made by my self', '2018-04-30 14:01:55', '2018-04-30 14:01:55');
INSERT INTO `messages` VALUES (22, 4, 'grea', '2018-04-30 14:02:03', '2018-04-30 14:02:03');
INSERT INTO `messages` VALUES (23, 4, 'no', '2018-04-30 14:02:04', '2018-04-30 14:02:04');
INSERT INTO `messages` VALUES (24, 4, 'more important is to get money', '2018-04-30 14:02:15', '2018-04-30 14:02:15');
INSERT INTO `messages` VALUES (25, 4, 'your no', '2018-04-30 14:02:19', '2018-04-30 14:02:19');
INSERT INTO `messages` VALUES (26, 4, 'more important is skill', '2018-04-30 14:02:41', '2018-04-30 14:02:41');
INSERT INTO `messages` VALUES (27, 4, 'if anyone have skill, he can get a lot of my at any time', '2018-04-30 14:03:26', '2018-04-30 14:03:26');
INSERT INTO `messages` VALUES (28, 4, 'but I don\'t have skill now', '2018-04-30 14:03:38', '2018-04-30 14:03:38');
INSERT INTO `messages` VALUES (29, 4, 'ruby or react native is yours?', '2018-04-30 14:03:53', '2018-04-30 14:03:53');
INSERT INTO `messages` VALUES (30, 4, 'Actually, I don\'t know any language now', '2018-04-30 14:04:43', '2018-04-30 14:04:43');
INSERT INTO `messages` VALUES (31, 4, 'I\'m trying to know it now only', '2018-04-30 14:05:00', '2018-04-30 14:05:00');
INSERT INTO `messages` VALUES (32, 4, 'but it isn\'t going  well for me', '2018-04-30 14:05:25', '2018-04-30 14:05:25');
INSERT INTO `messages` VALUES (33, 4, 'i got you', '2018-04-30 14:05:29', '2018-04-30 14:05:29');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 26 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (9, '2018_04_20_072937_create_users_table', 3);
INSERT INTO `migrations` VALUES (11, '2018_04_21_110956_create_selected_champions_table', 5);
INSERT INTO `migrations` VALUES (13, '2018_04_28_063035_create_chat_messages_table', 7);
INSERT INTO `migrations` VALUES (14, '2018_04_28_063342_create_chats_table', 8);
INSERT INTO `migrations` VALUES (17, '2014_10_12_100000_create_password_resets_table', 9);
INSERT INTO `migrations` VALUES (18, '2018_02_23_102327_create_champions_table', 9);
INSERT INTO `migrations` VALUES (19, '2018_04_18_155632_create_booster_applications_table', 9);
INSERT INTO `migrations` VALUES (20, '2018_04_18_160119_create_contacts_table', 9);
INSERT INTO `migrations` VALUES (21, '2018_04_19_011613_create_game_accounts_table', 9);
INSERT INTO `migrations` VALUES (22, '2018_04_20_054911_create_orders_table', 9);
INSERT INTO `migrations` VALUES (23, '2018_04_20_072404_create_users_table', 9);
INSERT INTO `migrations` VALUES (24, '2018_04_22_161820_create_roles_table', 9);
INSERT INTO `migrations` VALUES (25, '2018_04_26_071110_create_messages_table', 9);

-- ----------------------------
-- Table structure for orders
-- ----------------------------
DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(10) UNSIGNED NULL DEFAULT NULL,
  `amount` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `totalData` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `starting_image_save` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `desired_image_save` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `member_starting_rank` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `member_desired_rank` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `mode_statue` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `wins_price` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `winstotalData` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `wins_mode_statue` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `payment_id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `status` tinyint(1) NULL DEFAULT 0,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of orders
-- ----------------------------
INSERT INTO `orders` VALUES (1, 1, '1217', 'GoldIII->DiamondI(60LP)', '3_3', '1_1', 'Gold(DivisionIII)', 'Diamond(DivisionI)', 'OffLine', NULL, NULL, NULL, 'PAY-0PV57991XM7282807LLTMF2Y', 0, '2018-04-30 07:17:14', '2018-04-30 07:17:14');
INSERT INTO `orders` VALUES (2, 2, '390', 'SilverV->PlatinumIII(100LP)', '4_5', '2_3', 'Silver(DivisionV)', 'Platinum(DivisionIII)', 'OnLineMode', NULL, NULL, NULL, 'PAY-75B40996AF0891009LLTMG3I', 0, '2018-04-30 07:19:25', '2018-04-30 07:19:25');
INSERT INTO `orders` VALUES (3, 3, '60', 'GoldIII->GoldII(80LP)', '3_3', '3_2', 'Gold(DivisionIII)', 'Gold(DivisionII)', 'OnLineMode', NULL, NULL, NULL, 'PAY-59333184TF589204VLLTMH3Y', 0, '2018-04-30 07:21:34', '2018-04-30 07:21:34');
INSERT INTO `orders` VALUES (4, 3, '1021', 'PlatinumIII->DiamondI(40LP)', '2_3', '1_1', 'Platinum(DivisionIII)', 'Diamond(DivisionI)', 'OnLineMode', NULL, NULL, NULL, 'PAY-20H4596467933690HLLTPDOY', 0, '2018-04-30 10:36:58', '2018-04-30 10:36:58');
INSERT INTO `orders` VALUES (5, 4, '478', 'SilverIII->PlatinumI(60LP)', '4_3', '2_1', 'Silver(DivisionIII)', 'Platinum(DivisionI)', 'OnLineMode', NULL, NULL, NULL, 'PAY-7R164781GW400492FLLTQCQI', 0, '2018-04-30 11:43:12', '2018-04-30 11:43:12');
INSERT INTO `orders` VALUES (6, 5, '413', 'PlatinumIII->DiamondIV(60LP)', '2_3', '1_4', 'Platinum(DivisionIII)', 'Diamond(DivisionIV)', 'OffLine', NULL, NULL, NULL, 'PAY-3NW87237AR3060333LLTQVDY', 0, '2018-04-30 12:22:54', '2018-04-30 12:22:54');

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of roles
-- ----------------------------
INSERT INTO `roles` VALUES (1, 0, '1', '2018-04-30 17:24:45', NULL);
INSERT INTO `roles` VALUES (2, 0, '2', '2018-04-30 17:24:49', NULL);
INSERT INTO `roles` VALUES (3, 0, '3', '2018-04-30 17:24:52', NULL);
INSERT INTO `roles` VALUES (4, 0, '4', '2018-04-30 17:24:56', NULL);
INSERT INTO `roles` VALUES (5, 0, '5', '2018-04-30 17:25:00', NULL);

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'admin', 'admin@admin.com', '$2y$10$a0r5mcRujXVLju6e62UfXOTj/Y1GcfPtvVl/wNMnFQv2zjOwup7Cu', 1, '3tqVNPll7UPwslo47vEv6fybrppY5YPOI3HmncsbrWxxMuTt22GioeRBzyN8', '2018-04-30 07:11:19', '2018-04-30 07:11:19');
INSERT INTO `users` VALUES (2, 'booster', 'booster@gmail.com', '$2y$10$9Tz5nGsgqp2BcucyRHr9MOmnKBdBKzHfA4dIweqvgPQg3BY/sLwyW', 2, 'BEf5lwKE8ln3vqjYli8zGOhtfjYr0HxQDjlP0Lnmepm7zbmh9Wg2SVEM0f2p', '2018-04-30 07:19:05', '2018-04-30 07:19:05');
INSERT INTO `users` VALUES (3, 'BBM', 'BBB@gmail.com', '$2y$10$a9yY8IJHuP1xnDmQDj.wzuC/7/qzXQpbuEM1zqc6.tEtYUwSM2isu', 0, 'FwYP22DdyC2qMuQkk21FImV7mda1oXNYVHbcApJeZF856l5Dk0axS5XHHMIQ', '2018-04-30 07:21:21', '2018-04-30 07:21:21');
INSERT INTO `users` VALUES (4, 'alpha', 'alpha@email.com', '$2y$10$Yjmo/lx1pzgMaMxuGVZoyus/qktJaJeIKP.1NqarmB.Z9yF7LFnL2', 0, '5wycZL9Q1ReiRg03kP4KEIe0fTXbMFDte0kfvkKv7MTdjGT387b2JoAZzsid', '2018-04-30 11:42:57', '2018-04-30 11:42:57');
INSERT INTO `users` VALUES (5, 'police', 'Pol@gmail.com', '$2y$10$HzC4ElA0c5.DBjK7gI35gu/hmNWHueLx1YngfrH8RpZHzeNuritiu', 0, '90mOdWF86YM56AKben0jDMtmHuzaidUqgxpwGhL3yJXmTe68v1BFkJC9vhRq', '2018-04-30 12:22:24', '2018-04-30 12:22:24');

SET FOREIGN_KEY_CHECKS = 1;
