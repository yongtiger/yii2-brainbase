/*
Navicat MySQL Data Transfer

Source Server         : MySQL55
Source Server Version : 50523
Source Host           : localhost:3399
Source Database       : yii2-brainbase

Target Server Type    : MYSQL
Target Server Version : 50523
File Encoding         : 65001

Date: 2017-04-07 16:28:07
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for attachment
-- ----------------------------
DROP TABLE IF EXISTS `attachment`;
CREATE TABLE `attachment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `model` varchar(255) DEFAULT NULL,
  `model_id` int(11) DEFAULT NULL,
  `attach_token` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `original` varchar(255) DEFAULT NULL,
  `size` int(11) DEFAULT NULL,
  `suffix` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `related_url` varchar(255) DEFAULT NULL,
  `status` smallint(6) NOT NULL DEFAULT '1',
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_attachment_entity` (`model`),
  KEY `idx_attachment_entity_id` (`model_id`),
  KEY `idx_attachment_status` (`status`)
) ENGINE=InnoDB AUTO_INCREMENT=135 DEFAULT CHARSET=utf8;
