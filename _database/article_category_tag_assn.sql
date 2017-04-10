/*
Navicat MySQL Data Transfer

Source Server         : MySQL55
Source Server Version : 50523
Source Host           : localhost:3399
Source Database       : yii2-brainbase

Target Server Type    : MYSQL
Target Server Version : 50523
File Encoding         : 65001

Date: 2017-04-07 16:26:00
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for article_category_tag_assn
-- ----------------------------
DROP TABLE IF EXISTS `article_category_tag_assn`;
CREATE TABLE `article_category_tag_assn` (
  `category_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  KEY `category_tag_assn_category_id_fk` (`category_id`),
  KEY `category_tag_assn_tag_fk` (`tag_id`),
  CONSTRAINT `category_tag_assn_category_id_fk` FOREIGN KEY (`category_id`) REFERENCES `article_category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `category_tag_assn_tag_fk` FOREIGN KEY (`tag_id`) REFERENCES `article_tag` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
