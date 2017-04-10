/*
Navicat MySQL Data Transfer

Source Server         : MySQL55
Source Server Version : 50523
Source Host           : localhost:3399
Source Database       : yii2-brainbase

Target Server Type    : MYSQL
Target Server Version : 50523
File Encoding         : 65001

Date: 2017-04-07 16:28:32
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for comment
-- ----------------------------
DROP TABLE IF EXISTS `comment`;
CREATE TABLE `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `entity` char(10) NOT NULL,
  `entity_id` int(11) NOT NULL,
  `content` text NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `level` smallint(6) NOT NULL DEFAULT '1',
  `vote_up` int(11) DEFAULT '0',
  `vote_down` int(11) DEFAULT '0',
  `related_to` varchar(255) NOT NULL,
  `related_url` varchar(255) NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '1',
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_comment_entity` (`entity`),
  KEY `idx_comment_entity_id` (`entity_id`),
  KEY `idx_comment_status` (`status`)
) ENGINE=InnoDB AUTO_INCREMENT=107 DEFAULT CHARSET=utf8;
