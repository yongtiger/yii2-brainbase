/*
Navicat MySQL Data Transfer

Source Server         : MySQL55
Source Server Version : 50523
Source Host           : localhost:3399
Source Database       : yii2-brainbase

Target Server Type    : MYSQL
Target Server Version : 50523
File Encoding         : 65001

Date: 2017-03-02 13:41:30
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` smallint(6) NOT NULL DEFAULT '1',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `token` (`token`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'admin', 'vASX9nH_oNMSx7eY7vcEiMryHCzGeoPd', '$2y$13$jeYIDaJVAOl.vHEs5kq7wOTix0lFy/qIBZZbOmF2mWMnUrPFis3ay', null, 'admin@admin.com', '1', '1483439288', '1488058844');
INSERT INTO `user` VALUES ('2', 'super_moderator', '6BxhulPjLtiHazqEfafyAkTDkvVvC_DI', '$2y$13$Lrmiq8lIezo2kVr.P2Irce.GsgdsySbUzEn7b.c6JfpJ5kAREOcf6', null, 'super_moderator@admin.com', '1', '1473754593', '1473754593');
INSERT INTO `user` VALUES ('3', 'moderator', 'wwrtKtY8WD-FejGLs8ybH4WbieM5q6wU', '$2y$13$2DeGx3ZmphjZOEz.VC/7m.F9kX6KnSRlZq1zVjgM/a59.m.Qy//Bu', null, 'moderatort@admin.com', '1', '1473754608', '1473754608');
