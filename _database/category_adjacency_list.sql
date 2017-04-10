/*
Navicat MySQL Data Transfer

Source Server         : MySQL55
Source Server Version : 50523
Source Host           : localhost:3399
Source Database       : yii2-brainbase

Target Server Type    : MYSQL
Target Server Version : 50523
File Encoding         : 65001

Date: 2017-04-08 14:03:52
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for category_adjacency_list
-- ----------------------------
DROP TABLE IF EXISTS `category_adjacency_list`;
CREATE TABLE `category_adjacency_list` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `sort` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_parent_sort` (`parent_id`, `sort`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
