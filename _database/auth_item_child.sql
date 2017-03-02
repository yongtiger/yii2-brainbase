/*
Navicat MySQL Data Transfer

Source Server         : MySQL55
Source Server Version : 50523
Source Host           : localhost:3399
Source Database       : yii2-brainbase

Target Server Type    : MYSQL
Target Server Version : 50523
File Encoding         : 65001

Date: 2017-03-02 13:40:29
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for auth_item_child
-- ----------------------------
DROP TABLE IF EXISTS `auth_item_child`;
CREATE TABLE `auth_item_child` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`),
  CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of auth_item_child
-- ----------------------------
INSERT INTO `auth_item_child` VALUES ('permission_admin', '@app-backend/*');
INSERT INTO `auth_item_child` VALUES ('permission_super_moderator', '@app-backend/admin/assignment/*');
INSERT INTO `auth_item_child` VALUES ('permission_moderator', '@app-backend/site/*');
INSERT INTO `auth_item_child` VALUES ('permission_super_moderator', '@app-backend/site/*');
INSERT INTO `auth_item_child` VALUES ('permission_admin', '@app-frontend/*');
INSERT INTO `auth_item_child` VALUES ('permission_guest', '@app-frontend/*');
INSERT INTO `auth_item_child` VALUES ('permission_super_moderator', '@app-frontend/*');
INSERT INTO `auth_item_child` VALUES ('role_admin', 'permission_access_app-backend');
INSERT INTO `auth_item_child` VALUES ('role_moderator', 'permission_access_app-backend');
INSERT INTO `auth_item_child` VALUES ('role_super_moderator', 'permission_access_app-backend');
INSERT INTO `auth_item_child` VALUES ('guest', 'permission_access_app-frontend');
INSERT INTO `auth_item_child` VALUES ('role_admin', 'permission_access_app-frontend');
INSERT INTO `auth_item_child` VALUES ('role_moderator', 'permission_access_app-frontend');
INSERT INTO `auth_item_child` VALUES ('role_super_moderator', 'permission_access_app-frontend');
INSERT INTO `auth_item_child` VALUES ('role_admin', 'permission_admin');
INSERT INTO `auth_item_child` VALUES ('guest', 'permission_guest');
INSERT INTO `auth_item_child` VALUES ('role_moderator', 'permission_moderator');
INSERT INTO `auth_item_child` VALUES ('role_super_moderator', 'permission_super_moderator');
