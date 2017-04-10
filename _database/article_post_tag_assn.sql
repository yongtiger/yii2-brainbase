/*
Navicat MySQL Data Transfer

Source Server         : MySQL55
Source Server Version : 50523
Source Host           : localhost:3399
Source Database       : yii2-brainbase

Target Server Type    : MYSQL
Target Server Version : 50523
File Encoding         : 65001

Date: 2017-04-07 16:27:47
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for article_post_tag_assn
-- ----------------------------
DROP TABLE IF EXISTS `article_post_tag_assn`;
CREATE TABLE `article_post_tag_assn` (
  `post_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  PRIMARY KEY (`post_id`,`tag_id`),
  KEY `post_tag_assn_post_id_fk` (`post_id`),
  KEY `post_tag_assn_tag_id_fk` (`tag_id`),
  CONSTRAINT `post_tag_assn_post_id_fk` FOREIGN KEY (`post_id`) REFERENCES `article_post` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `post_tag_assn_tag_id_fk` FOREIGN KEY (`tag_id`) REFERENCES `article_tag` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
