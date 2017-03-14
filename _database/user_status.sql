/*
Navicat MySQL Data Transfer

Source Server         : MySQL55
Source Server Version : 50523
Source Host           : localhost:3399
Source Database       : yii2-brainbase

Target Server Type    : MYSQL
Target Server Version : 50523
File Encoding         : 65001

Date: 2017-03-14 00:15:29
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for user_status
-- ----------------------------
DROP TABLE IF EXISTS `user_status`;
CREATE TABLE `user_status` (
  `user_id` int(11) NOT NULL,
  `registration_ip` varchar(255) DEFAULT NULL,
  `last_login_ip` varchar(255) DEFAULT NULL,
  `last_login_at` int(11) DEFAULT NULL,
  `banned_at` int(11) DEFAULT NULL,
  `banned_reason` varchar(255) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user_status
-- ----------------------------
INSERT INTO `user_status` VALUES ('1', null, '127.0.0.1', '1489468877', null, null, '1489444316', '1489468877');
INSERT INTO `user_status` VALUES ('15', '1111', '127.0.0.1', null, null, null, '1489439963', '1489442878');
INSERT INTO `user_status` VALUES ('63', '127.0.0.1', null, null, null, null, '1489440345', '1489440345');
INSERT INTO `user_status` VALUES ('64', '127.0.0.1', 'safaf', null, null, '', '1489440375', '1489449287');
