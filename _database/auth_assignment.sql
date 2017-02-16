/*
Navicat MySQL Data Transfer

Source Server         : MySQL55
Source Server Version : 50523
Source Host           : localhost:3399
Source Database       : yii2-brainbase

Target Server Type    : MYSQL
Target Server Version : 50523
File Encoding         : 65001

Date: 2017-02-16 00:45:40
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for auth_assignment
-- ----------------------------
DROP TABLE IF EXISTS `auth_assignment`;
CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) NOT NULL,
  `user_id` varchar(64) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`item_name`,`user_id`),
  CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of auth_assignment
-- ----------------------------
INSERT INTO `auth_assignment` VALUES ('role_admin', '1', '1487147714');
INSERT INTO `auth_assignment` VALUES ('role_moderator', '3', '1474009836');
INSERT INTO `auth_assignment` VALUES ('role_super_moderator', '2', '1474009820');
