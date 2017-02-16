/*
Navicat MySQL Data Transfer

Source Server         : MySQL55
Source Server Version : 50523
Source Host           : localhost:3399
Source Database       : yii2-brainbase

Target Server Type    : MYSQL
Target Server Version : 50523
File Encoding         : 65001

Date: 2017-02-16 00:46:19
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for setting
-- ----------------------------
DROP TABLE IF EXISTS `setting`;
CREATE TABLE `setting` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` text COLLATE utf8_unicode_ci,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'string',
  `input` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'textInput',
  `items` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `options` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `label_options` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hint` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hint_options` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique-category-key` (`category`,`key`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of setting
-- ----------------------------
INSERT INTO `setting` VALUES ('1', 'site', 'name', 'My Application', 'string', 'textInput', null, '', '', 'Setup <b>site name</b>.', '');
INSERT INTO `setting` VALUES ('2', 'site', 'homeUrl', 'http://www.brainbook.cc', 'string', 'textInput', null, '', '', 'Setup <b>site home url</b>.', '');
INSERT INTO `setting` VALUES ('3', 'site', 'adminEmail', 'admin@example.com', 'string', 'textInput', null, null, null, 'Setup <b>admin email</b>.', null);
INSERT INTO `setting` VALUES ('4', 'site', 'serviceEmail', 'service@example.com', 'string', 'textInput', null, null, null, 'Setup <b>service email</b>.', null);
