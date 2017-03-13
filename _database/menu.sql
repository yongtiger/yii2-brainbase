/*
Navicat MySQL Data Transfer

Source Server         : MySQL55
Source Server Version : 50523
Source Host           : localhost:3399
Source Database       : yii2-brainbase

Target Server Type    : MYSQL
Target Server Version : 50523
File Encoding         : 65001

Date: 2017-03-12 22:44:32
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
) ENGINE=InnoDB AUTO_INCREMENT=106 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of menu
-- ----------------------------
INSERT INTO `menu` VALUES ('1', '系统信息', null, null, '1', null);
INSERT INTO `menu` VALUES ('2', '基本信息', '1', '@app-backend/site/index', '1', null);
INSERT INTO `menu` VALUES ('3', '前台信息', '1', '@app-backend/site/frontend-info', '2', null);
INSERT INTO `menu` VALUES ('4', '后台信息', '1', '@app-backend/site/backend-info', '3', null);
INSERT INTO `menu` VALUES ('5', '系统操作记录', null, '@app-backend/admin/log/index', '5', null);
INSERT INTO `menu` VALUES ('6', '缓存管理', null, '@app-backend/cache/index', '6', null);
INSERT INTO `menu` VALUES ('10', '网站设置', null, '@app-backend/setting/default/update&category=site', '10', 0x7B2269636F6E223A202266612066612D636F67222C202276697369626C65223A20747275657D);
INSERT INTO `menu` VALUES ('20', '主题管理', null, '@app-backend/theme/default/update', '20', null);
INSERT INTO `menu` VALUES ('30', '权限控制', null, null, '30', 0x7B2269636F6E223A202266612066612D6C6F636B222C202276697369626C65223A20747275657D);
INSERT INTO `menu` VALUES ('31', '路由', '30', '@app-backend/admin/route/index', '1', null);
INSERT INTO `menu` VALUES ('32', '权限', '30', '@app-backend/admin/permission/index', '2', null);
INSERT INTO `menu` VALUES ('33', '角色', '30', '@app-backend/admin/role/index', '3', null);
INSERT INTO `menu` VALUES ('34', '规则', '30', '@app-backend/admin/rule/index', '4', null);
INSERT INTO `menu` VALUES ('35', '分配', '30', '@app-backend/admin/assignment/index', '5', null);
INSERT INTO `menu` VALUES ('40', '用户管理', null, '@app-backend/user/user/index', '40', 0x7B2269636F6E223A202266612066612D75736572222C202276697369626C65223A20747275657D);
INSERT INTO `menu` VALUES ('77', '后台菜单', null, '@app-backend/admin/menu/index', '77', null);
INSERT INTO `menu` VALUES ('88', 'Gii', null, '@app-backend/gii/default/index', '88', 0x7B2269636F6E223A202266612066612D66696C652D636F64652D6F222C202276697369626C65223A20747275657D);
INSERT INTO `menu` VALUES ('99', 'Debug', null, '@app-backend/debug/default/index', '99', 0x7B2269636F6E223A202266612066612D64617368626F617264222C202276697369626C65223A20747275657D);
