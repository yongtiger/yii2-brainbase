/*
Navicat MySQL Data Transfer

Source Server         : MySQL55
Source Server Version : 50523
Source Host           : localhost:3399
Source Database       : yii2-brainbase

Target Server Type    : MYSQL
Target Server Version : 50523
File Encoding         : 65001

Date: 2017-03-14 00:15:35
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for user_verify
-- ----------------------------
DROP TABLE IF EXISTS `user_verify`;
CREATE TABLE `user_verify` (
  `user_id` int(11) NOT NULL,
  `password_verified_at` int(11) DEFAULT NULL,
  `email_verified_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`user_id`),
  KEY `user_id` (`user_id`) USING BTREE,
  CONSTRAINT `fk_verify_user_id_user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of user_verify
-- ----------------------------
INSERT INTO `user_verify` VALUES ('1', null, null, '1', '1');
INSERT INTO `user_verify` VALUES ('2', null, null, '2', '2');
INSERT INTO `user_verify` VALUES ('3', null, null, '3', '3');
INSERT INTO `user_verify` VALUES ('60', '1488508077', '1488508136', '1488508077', '1488508136');
INSERT INTO `user_verify` VALUES ('61', '1489439467', null, '1489439467', '1489439467');
INSERT INTO `user_verify` VALUES ('62', '1489439825', null, '1489439825', '1489439825');
INSERT INTO `user_verify` VALUES ('63', '1489440345', null, '1489440345', '1489440345');
INSERT INTO `user_verify` VALUES ('64', '1489440375', null, '1489440375', '1489440375');
