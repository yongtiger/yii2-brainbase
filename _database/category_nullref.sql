/*
Navicat MySQL Data Transfer

Source Server         : MySQL55
Source Server Version : 50523
Source Host           : localhost:3399
Source Database       : 1_oauth

Target Server Type    : MYSQL
Target Server Version : 50523
File Encoding         : 65001

Date: 2017-04-08 18:07:59
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for category_nullref
-- ----------------------------
DROP TABLE IF EXISTS `category_nullref`;
CREATE TABLE `category_nullref` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent_id` int(11) NOT NULL,
  `sort_order` float DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `category_fk_parent` (`parent_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
