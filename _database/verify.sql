/*
Navicat MySQL Data Transfer

Source Server         : MySQL55
Source Server Version : 50523
Source Host           : localhost:3399
Source Database       : yii2-brainbase

Target Server Type    : MYSQL
Target Server Version : 50523
File Encoding         : 65001

Date: 2017-03-02 13:41:37
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for verify
-- ----------------------------
DROP TABLE IF EXISTS `verify`;
CREATE TABLE `verify` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `password_verified_at` int(11) DEFAULT NULL,
  `email_verified_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`user_id`),
  KEY `user_id` (`user_id`) USING BTREE,
  CONSTRAINT `fk_verify_user_id_user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of verify
-- ----------------------------
INSERT INTO `verify` VALUES ('1', null, null, '1', '1');
INSERT INTO `verify` VALUES ('2', null, null, '2', '2');
INSERT INTO `verify` VALUES ('3', null, null, '3', '3');
