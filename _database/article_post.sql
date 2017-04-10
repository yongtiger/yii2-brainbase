/*
Navicat MySQL Data Transfer

Source Server         : MySQL55
Source Server Version : 50523
Source Host           : localhost:3399
Source Database       : yii2-brainbase

Target Server Type    : MYSQL
Target Server Version : 50523
File Encoding         : 65001

Date: 2017-04-07 16:27:39
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for article_post
-- ----------------------------
DROP TABLE IF EXISTS `article_post`;
CREATE TABLE `article_post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `summary` varchar(255) DEFAULT NULL,
  `content_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `count` int(11) DEFAULT '0',
  `status` tinyint(1) unsigned DEFAULT '0',
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `post_category_id_fk` (`category_id`),
  KEY `post_content_id_fk` (`content_id`),
  KEY `post_user_id_fk` (`user_id`),
  CONSTRAINT `post_category_id_fk` FOREIGN KEY (`category_id`) REFERENCES `article_category` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `post_content_id_fk` FOREIGN KEY (`content_id`) REFERENCES `article_content` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `post_user_id_fk` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8;
