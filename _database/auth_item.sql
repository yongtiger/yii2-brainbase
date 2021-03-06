/*
Navicat MySQL Data Transfer

Source Server         : MySQL55
Source Server Version : 50523
Source Host           : localhost:3399
Source Database       : yii2-brainblog

Target Server Type    : MYSQL
Target Server Version : 50523
File Encoding         : 65001

Date: 2017-12-13 16:55:19
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for auth_item
-- ----------------------------
DROP TABLE IF EXISTS `auth_item`;
CREATE TABLE `auth_item` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `rule_name` varchar(64) DEFAULT NULL,
  `data` text,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`),
  KEY `rule_name` (`rule_name`),
  KEY `type` (`type`),
  CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of auth_item
-- ----------------------------
INSERT INTO `auth_item` VALUES ('@app-backend/*', '2', null, null, null, '1487147800', '1487147800');
INSERT INTO `auth_item` VALUES ('@app-backend/admin/assignment/*', '2', null, null, null, '1488000067', '1488000067');
INSERT INTO `auth_item` VALUES ('@app-backend/gii/*', '2', null, null, null, '1487237749', '1487237749');
INSERT INTO `auth_item` VALUES ('@app-backend/site/*', '2', null, null, null, '1487149138', '1487149138');
INSERT INTO `auth_item` VALUES ('@app-backend/thememanager/default/update', '2', null, null, null, '1489108824', '1489108824');
INSERT INTO `auth_item` VALUES ('@app-frontend/*', '2', null, null, null, '1487147641', '1487147641');
INSERT INTO `auth_item` VALUES ('guest', '1', null, null, null, '1487146242', '1487146242');
INSERT INTO `auth_item` VALUES ('permission_access_app-backend', '2', null, null, null, '1487232722', '1488228172');
INSERT INTO `auth_item` VALUES ('permission_access_app-frontend', '2', null, null, null, '1488228420', '1488228420');
INSERT INTO `auth_item` VALUES ('permission_admin', '2', null, null, null, '1487147762', '1487147762');
INSERT INTO `auth_item` VALUES ('permission_guest', '2', null, null, null, '1487146216', '1487146216');
INSERT INTO `auth_item` VALUES ('permission_moderator', '2', null, null, null, '1487148938', '1487148938');
INSERT INTO `auth_item` VALUES ('permission_super_moderator', '2', null, null, null, '1487148926', '1487148926');
INSERT INTO `auth_item` VALUES ('role_admin', '1', null, null, null, '1487147589', '1487147589');
INSERT INTO `auth_item` VALUES ('role_moderator', '1', null, null, null, '1487148871', '1487148871');
INSERT INTO `auth_item` VALUES ('role_super_moderator', '1', null, null, null, '1487149303', '1487149303');
