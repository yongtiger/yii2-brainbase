/*
Navicat MySQL Data Transfer

Source Server         : MySQL55
Source Server Version : 50523
Source Host           : localhost:3399
Source Database       : yii2-brainbase

Target Server Type    : MYSQL
Target Server Version : 50523
File Encoding         : 65001

Date: 2017-02-16 00:46:29
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'admin', 'Noj9afOL7grjuCk2-dH4KpL7CCUyQl5l', '$2y$13$JAx.6aKlz7DsJ7VhlXmx3.Ng.nuVgL7bF6YMOgdYnZOuNW8akhQFS', '__TY3OV2s-ri1r581w3ouT581Pc1cr6d_1487115765', 'admin@admin.com', '10', '1487109359', '1487115765');
INSERT INTO `user` VALUES ('2', 'super_moderator', 'n_pRVwwBk8kE1DAT8X3bST8a45uq-RqD', '$2y$13$6kP.qMthcu15XbKWCHDTLOWIwJy3LDoFmruM4cJW8rpQHSSunvQ9u', null, 'super_moderator@example.com', '10', '1487148020', '1487148740');
INSERT INTO `user` VALUES ('3', 'moderator', 'UD-UGDp5WMr243sXWl8g1wf46N7nTSFb', '$2y$13$BxVSBW9WbRz2RquqCx.HAugTdrwniMK/Kfe7kjZnfdFH/ZbnADLgy', null, 'moderator@example.com', '10', '1487149362', '1487149362');
INSERT INTO `user` VALUES ('4', 'test', 'RbWvBLxErohXFfVMgndz7ZsRqv4dgn1N', '$2y$13$CxI7ezkCnvnlT4K/TXitROvkeJqqSoKOKt4wn68zx47zVFLHR/V8K', null, 'test@test.com', '10', '1487149644', '1487149644');
