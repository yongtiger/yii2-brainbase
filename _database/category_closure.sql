/*
Navicat MySQL Data Transfer

Source Server         : MySQL55
Source Server Version : 50523
Source Host           : localhost:3399
Source Database       : 1_oauth

Target Server Type    : MYSQL
Target Server Version : 50523
File Encoding         : 65001

Date: 2017-04-08 18:07:51
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for category_closure
-- ----------------------------
DROP TABLE IF EXISTS `category_closure`;
CREATE TABLE `category_closure` (
  `child_id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `level` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`child_id`,`parent_id`,`level`),
  KEY `category_fk_parent` (`parent_id`),
  CONSTRAINT `category_fk_parent` FOREIGN KEY (`parent_id`) REFERENCES `category_nullref` (`id`) ON DELETE CASCADE,
  CONSTRAINT `category_fk_parents` FOREIGN KEY (`child_id`) REFERENCES `category_nullref` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
