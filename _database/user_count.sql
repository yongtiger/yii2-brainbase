/*
Navicat MySQL Data Transfer

Source Server         : MySQL55
Source Server Version : 50523
Source Host           : localhost:3399
Source Database       : yii2-brainbase

Target Server Type    : MYSQL
Target Server Version : 50523
File Encoding         : 65001

Date: 2017-03-14 00:15:11
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for user_count
-- ----------------------------
DROP TABLE IF EXISTS `user_count`;
CREATE TABLE `user_count` (
  `user_id` int(11) NOT NULL,
  `login_count` int(11) DEFAULT NULL,
  `banned_count` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user_count
-- ----------------------------
INSERT INTO `user_count` VALUES ('1', '3', null, '1489445276', '1489468877');
