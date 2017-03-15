/*
Navicat MySQL Data Transfer

Source Server         : MySQL55
Source Server Version : 50523
Source Host           : localhost:3399
Source Database       : yii2-brainbase

Target Server Type    : MYSQL
Target Server Version : 50523
File Encoding         : 65001

Date: 2017-03-15 13:48:22
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for user_preference
-- ----------------------------
DROP TABLE IF EXISTS `user_preference`;
CREATE TABLE `user_preference` (
  `user_id` int(11) NOT NULL,
  `locale` varchar(255) DEFAULT NULL,
  `time_offset` smallint(6) DEFAULT NULL,
  `datetime_format` varchar(255) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user_preference
-- ----------------------------
