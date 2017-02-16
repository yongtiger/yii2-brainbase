/*
Navicat MySQL Data Transfer

Source Server         : MySQL55
Source Server Version : 50523
Source Host           : localhost:3399
Source Database       : yii2-brainbase

Target Server Type    : MYSQL
Target Server Version : 50523
File Encoding         : 65001

Date: 2017-02-16 00:46:11
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for menu
-- ----------------------------
DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) DEFAULT NULL,
  `parent` int(11) DEFAULT NULL,
  `route` varchar(256) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `data` blob,
  PRIMARY KEY (`id`),
  KEY `parent` (`parent`),
  CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `menu` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of menu
-- ----------------------------
INSERT INTO `menu` VALUES ('1', '权限控制', null, null, '1', 0x7B2269636F6E223A202266612066612D6C6F636B222C202276697369626C65223A20747275657D);
INSERT INTO `menu` VALUES ('2', '路由', '1', '/admin/route/index', '1', null);
INSERT INTO `menu` VALUES ('3', '权限', '1', '/admin/permission/index', '2', null);
INSERT INTO `menu` VALUES ('4', '角色', '1', '/admin/role/index', '3', null);
INSERT INTO `menu` VALUES ('5', '分配', '1', '/admin/assignment/index', '4', null);
INSERT INTO `menu` VALUES ('6', '用户', '1', '/admin/user/index', '5', null);
INSERT INTO `menu` VALUES ('7', '菜单', '1', '/admin/menu/index', '6', null);
INSERT INTO `menu` VALUES ('8', 'Gii', null, '/gii/default/index', '2', 0x7B2269636F6E223A202266612066612D66696C652D636F64652D6F222C202276697369626C65223A20747275657D);
INSERT INTO `menu` VALUES ('9', 'Debug', null, '/debug/default/index', '3', 0x7B2269636F6E223A202266612066612D64617368626F617264222C202276697369626C65223A20747275657D);
INSERT INTO `menu` VALUES ('10', '用户管理', null, '/user/index', '4', 0x7B2269636F6E223A202266612066612D75736572222C202276697369626C65223A20747275657D);
INSERT INTO `menu` VALUES ('11', '系统日志', null, '/admin-log/index', '5', 0x7B2269636F6E223A202266612066612D63616C656E646172222C202276697369626C65223A20747275657D);