/*
Navicat MySQL Data Transfer

Source Server         : MySQL55
Source Server Version : 50523
Source Host           : localhost:3399
Source Database       : yii2-brainbase

Target Server Type    : MYSQL
Target Server Version : 50523
File Encoding         : 65001

Date: 2017-03-12 19:45:36
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
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of setting
-- ----------------------------
INSERT INTO `setting` VALUES ('1', 'site', 'name', 'My Application', 'string', 'textInput', null, '', '', 'Setup <b>site name</b>.', '');
INSERT INTO `setting` VALUES ('2', 'site', 'brandLabel', '<img src=\"{themeurl}/image/logo.png\" title=\"My Company\"/>', 'string', 'textInput', null, '', '', 'Setup <b>site brand label</b>.', '');
INSERT INTO `setting` VALUES ('3', 'site', 'brandUrl', 'http://www.brainbook.cc', 'string', 'textInput', null, '', '', 'Setup <b>site brand url</b>.', '');
INSERT INTO `setting` VALUES ('4', 'site', 'adminEmail', 'admin@example.com', 'string', 'textInput', null, null, null, 'Setup <b>admin email</b>.', null);
INSERT INTO `setting` VALUES ('5', 'site', 'supportEmail', 'support@example.com', 'string', 'textInput', null, null, null, 'Setup <b>support email</b>.', null);
INSERT INTO `setting` VALUES ('6', 'site', 'serviceEmail', 'service@example.com', 'string', 'textInput', null, null, null, 'Setup <b>service email</b>.', null);
INSERT INTO `setting` VALUES ('18', 'theme', 'themes', 'a:2:{i:0;a:5:{s:5:\"title\";s:9:\"theme yii\";s:10:\"screenshot\";s:14:\"screenshot.jpg\";s:9:\"namespace\";s:18:\"yongtiger\\themeyii\";s:4:\"path\";s:19:\"@yongtiger/themeyii\";s:6:\"active\";b:0;}i:1;a:5:{s:5:\"title\";s:10:\"themes yii\";s:10:\"screenshot\";s:14:\"screenshot.jpg\";s:9:\"namespace\";s:23:\"themes\\yii2themeyii\\src\";s:4:\"path\";s:24:\"@themes/yii2themeyii/src\";s:6:\"active\";b:0;}}', 'array', 'textInput', null, null, null, null, null);
