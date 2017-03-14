/*
Navicat MySQL Data Transfer

Source Server         : MySQL55
Source Server Version : 50523
Source Host           : localhost:3399
Source Database       : yii2-brainbase

Target Server Type    : MYSQL
Target Server Version : 50523
File Encoding         : 65001

Date: 2017-03-14 00:15:24
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for user_profile
-- ----------------------------
DROP TABLE IF EXISTS `user_profile`;
CREATE TABLE `user_profile` (
  `user_id` int(11) NOT NULL,
  `fullname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `firstname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` tinyint(1) DEFAULT NULL,
  `language` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `province` int(11) DEFAULT NULL,
  `city` int(11) DEFAULT NULL,
  `district` int(11) DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telephone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `graduate` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `education` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `position` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `revenue` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`user_id`),
  KEY `user_id` (`user_id`) USING BTREE,
  CONSTRAINT `fk_profile_user_id_user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of user_profile
-- ----------------------------
INSERT INTO `user_profile` VALUES ('1', 'aaa', '', '', null, '', '', '', null, '', null, null, null, '', '', '', '', '', '', '', '', '1', '1488529248');
INSERT INTO `user_profile` VALUES ('2', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '2', '2');
INSERT INTO `user_profile` VALUES ('3', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '3', '3');
INSERT INTO `user_profile` VALUES ('60', '', '', '', null, '', '', '', '2017-03-17', '', '4', '85', '1309', '', '', '', '', '', '', '', '', '1488508077', '1488618348');
INSERT INTO `user_profile` VALUES ('61', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '1489439467', '1489439467');
INSERT INTO `user_profile` VALUES ('62', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '1489439825', '1489439825');
INSERT INTO `user_profile` VALUES ('63', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '1489440345', '1489440345');
INSERT INTO `user_profile` VALUES ('64', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '1489440375', '1489440375');
