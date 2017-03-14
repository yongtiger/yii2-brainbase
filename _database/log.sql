/*
Navicat MySQL Data Transfer

Source Server         : MySQL55
Source Server Version : 50523
Source Host           : localhost:3399
Source Database       : yii2-brainbase

Target Server Type    : MYSQL
Target Server Version : 50523
File Encoding         : 65001

Date: 2017-03-14 00:17:05
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for log
-- ----------------------------
DROP TABLE IF EXISTS `log`;
CREATE TABLE `log` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `route` varchar(255) NOT NULL DEFAULT '',
  `description` text,
  `user_id` int(10) NOT NULL DEFAULT '0',
  `user_ip` varchar(255) DEFAULT NULL,
  `created_at` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=239 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of log
-- ----------------------------
INSERT INTO `log` VALUES ('107', '/%5Bgit%5D/yii2-brainbase/frontend/web/', '', '0', '127.0.0.1', '1489435577');
INSERT INTO `log` VALUES ('108', '/%5Bgit%5D/yii2-brainbase/frontend/web/?r=user', '', '0', '127.0.0.1', '1489435607');
INSERT INTO `log` VALUES ('109', '/%5Bgit%5D/yii2-brainbase/backend/web/index.php?r=user%2Fverify', '', '1', '127.0.0.1', '1489436566');
INSERT INTO `log` VALUES ('110', '/%5Bgit%5D/yii2-brainbase/frontend/web/index.php?r=user%2Fregistration%2Fsignup', '', '0', '127.0.0.1', '1489439412');
INSERT INTO `log` VALUES ('111', '/%5Bgit%5D/yii2-brainbase/frontend/web/index.php?r=user%2Fregistration%2Fcaptcha&v=58c70ab471ed0', '', '0', '127.0.0.1', '1489439412');
INSERT INTO `log` VALUES ('112', '/%5Bgit%5D/yii2-brainbase/frontend/web/index.php?r=user%2Fregistration%2Fsignup', '', '0', '127.0.0.1', '1489439441');
INSERT INTO `log` VALUES ('113', '/%5Bgit%5D/yii2-brainbase/frontend/web/index.php?r=user%2Fregistration%2Fsignup', '', '0', '127.0.0.1', '1489439452');
INSERT INTO `log` VALUES ('114', '/%5Bgit%5D/yii2-brainbase/frontend/web/index.php?r=user%2Fregistration%2Fsignup', '', '0', '127.0.0.1', '1489439454');
INSERT INTO `log` VALUES ('115', '/%5Bgit%5D/yii2-brainbase/frontend/web/index.php?r=user%2Fregistration%2Fsignup', '', '0', '127.0.0.1', '1489439460');
INSERT INTO `log` VALUES ('116', '/%5Bgit%5D/yii2-brainbase/frontend/web/index.php?r=user%2Fregistration%2Fsignup', '', '0', '127.0.0.1', '1489439466');
INSERT INTO `log` VALUES ('117', '/%5Bgit%5D/yii2-brainbase/frontend/web/index.php?r=user%2Fregistration%2Fsignup', '', '0', '127.0.0.1', '1489439617');
INSERT INTO `log` VALUES ('118', '/%5Bgit%5D/yii2-brainbase/frontend/web/index.php?r=user%2Fregistration%2Fcaptcha&v=58c70b8185965', '', '0', '127.0.0.1', '1489439617');
INSERT INTO `log` VALUES ('119', '/%5Bgit%5D/yii2-brainbase/frontend/web/index.php?r=user%2Fregistration%2Fsignup', '', '0', '127.0.0.1', '1489439618');
INSERT INTO `log` VALUES ('120', '/%5Bgit%5D/yii2-brainbase/frontend/web/index.php?r=user%2Fregistration%2Fsignup', '', '0', '127.0.0.1', '1489439733');
INSERT INTO `log` VALUES ('121', '/%5Bgit%5D/yii2-brainbase/frontend/web/index.php?r=user%2Fregistration%2Fsignup', '', '0', '127.0.0.1', '1489439737');
INSERT INTO `log` VALUES ('122', '/%5Bgit%5D/yii2-brainbase/frontend/web/index.php?r=user%2Fregistration%2Fsignup', '', '0', '127.0.0.1', '1489439744');
INSERT INTO `log` VALUES ('123', '/%5Bgit%5D/yii2-brainbase/frontend/web/index.php?r=user%2Fregistration%2Fsignup', '', '0', '127.0.0.1', '1489439751');
INSERT INTO `log` VALUES ('124', '/%5Bgit%5D/yii2-brainbase/frontend/web/index.php?r=user%2Fregistration%2Fsignup', '', '0', '127.0.0.1', '1489439815');
INSERT INTO `log` VALUES ('125', '/%5Bgit%5D/yii2-brainbase/frontend/web/index.php?r=user%2Fregistration%2Fsignup', '', '0', '127.0.0.1', '1489439823');
INSERT INTO `log` VALUES ('126', '/%5Bgit%5D/yii2-brainbase/frontend/web/index.php?r=user%2Fregistration%2Fsignup', '', '0', '127.0.0.1', '1489439824');
INSERT INTO `log` VALUES ('127', '/%5Bgit%5D/yii2-brainbase/frontend/web/index.php?r=user%2Fregistration%2Fsignup', '', '0', '127.0.0.1', '1489440342');
INSERT INTO `log` VALUES ('128', '/%5Bgit%5D/yii2-brainbase/frontend/web/index.php?r=user%2Fregistration%2Fsignup', '', '0', '127.0.0.1', '1489440344');
INSERT INTO `log` VALUES ('129', '/%5Bgit%5D/yii2-brainbase/frontend/web/index.php?r=user%2Fregistration%2Fsignup', '', '0', '127.0.0.1', '1489440345');
INSERT INTO `log` VALUES ('130', '/%5Bgit%5D/yii2-brainbase/frontend/web/index.php?r=user%2Fregistration%2Fsignup', '', '0', '127.0.0.1', '1489440359');
INSERT INTO `log` VALUES ('131', '/%5Bgit%5D/yii2-brainbase/frontend/web/index.php?r=user%2Fregistration%2Fsignup', '', '0', '127.0.0.1', '1489440367');
INSERT INTO `log` VALUES ('132', '/%5Bgit%5D/yii2-brainbase/frontend/web/index.php?r=user%2Fregistration%2Fsignup', '', '0', '127.0.0.1', '1489440372');
INSERT INTO `log` VALUES ('133', '/%5Bgit%5D/yii2-brainbase/frontend/web/index.php?r=user%2Fregistration%2Fsignup', '', '0', '127.0.0.1', '1489440374');
INSERT INTO `log` VALUES ('134', '/%5Bgit%5D/yii2-brainbase/frontend/web/index.php?r=user%2Fregistration%2Fsignup', '', '0', '127.0.0.1', '1489440374');
INSERT INTO `log` VALUES ('135', '/%5Bgit%5D/yii2-brainbase/frontend/web/index.php?r=user%2Faccount%2Findex', '', '64', '127.0.0.1', '1489440375');
INSERT INTO `log` VALUES ('136', '/%5Bgit%5D/yii2-brainbase/frontend/web/index.php?r=user%2Fsecurity%2Flogout', '', '64', '127.0.0.1', '1489441126');
INSERT INTO `log` VALUES ('137', '/%5Bgit%5D/yii2-brainbase/frontend/web/index.php', '', '0', '127.0.0.1', '1489441126');
INSERT INTO `log` VALUES ('138', '/%5Bgit%5D/yii2-brainbase/frontend/web/index.php?r=user%2Fsecurity%2Flogin', '', '1', '127.0.0.1', '1489441354');
INSERT INTO `log` VALUES ('139', '/%5Bgit%5D/yii2-brainbase/frontend/web/index.php?r=user%2Fsecurity%2Flogout', '', '1', '127.0.0.1', '1489441369');
INSERT INTO `log` VALUES ('140', '/%5Bgit%5D/yii2-brainbase/frontend/web/index.php', '', '0', '127.0.0.1', '1489441370');
INSERT INTO `log` VALUES ('141', '/%5Bgit%5D/yii2-brainbase/frontend/web/index.php?r=user%2Fsecurity%2Flogin', '', '1', '127.0.0.1', '1489441529');
INSERT INTO `log` VALUES ('142', '/%5Bgit%5D/yii2-brainbase/frontend/web/index.php?r=user%2Fsecurity%2Flogout', '', '1', '127.0.0.1', '1489441539');
INSERT INTO `log` VALUES ('143', '/%5Bgit%5D/yii2-brainbase/frontend/web/index.php', '', '0', '127.0.0.1', '1489441539');
INSERT INTO `log` VALUES ('144', '/%5Bgit%5D/yii2-brainbase/frontend/web/index.php?r=user%2Fsecurity%2Flogin', '', '1', '127.0.0.1', '1489441756');
INSERT INTO `log` VALUES ('145', '/%5Bgit%5D/yii2-brainbase/frontend/web/index.php?r=user%2Fsecurity%2Flogout', '', '1', '127.0.0.1', '1489441759');
INSERT INTO `log` VALUES ('146', '/%5Bgit%5D/yii2-brainbase/frontend/web/index.php', '', '0', '127.0.0.1', '1489441759');
INSERT INTO `log` VALUES ('147', '/%5Bgit%5D/yii2-brainbase/frontend/web/index.php?r=user%2Fsecurity%2Flogin', '', '1', '127.0.0.1', '1489441842');
INSERT INTO `log` VALUES ('148', '/%5Bgit%5D/yii2-brainbase/frontend/web/index.php?r=user%2Fsecurity%2Flogout', '', '1', '127.0.0.1', '1489441844');
INSERT INTO `log` VALUES ('149', '/%5Bgit%5D/yii2-brainbase/frontend/web/index.php', '', '0', '127.0.0.1', '1489441844');
INSERT INTO `log` VALUES ('150', '/%5Bgit%5D/yii2-brainbase/frontend/web/index.php', '', '1', '127.0.0.1', '1489441882');
INSERT INTO `log` VALUES ('151', '/%5Bgit%5D/yii2-brainbase/frontend/web/index.php?r=user%2Fsecurity%2Flogout', '', '1', '127.0.0.1', '1489441890');
INSERT INTO `log` VALUES ('152', '/%5Bgit%5D/yii2-brainbase/frontend/web/index.php', '', '0', '127.0.0.1', '1489441890');
INSERT INTO `log` VALUES ('153', '/%5Bgit%5D/yii2-brainbase/frontend/web/index.php', '', '1', '127.0.0.1', '1489441896');
INSERT INTO `log` VALUES ('154', '/%5Bgit%5D/yii2-brainbase/frontend/web/index.php?r=user%2Fsecurity%2Flogout', '', '1', '127.0.0.1', '1489442682');
INSERT INTO `log` VALUES ('155', '/%5Bgit%5D/yii2-brainbase/frontend/web/index.php', '', '0', '127.0.0.1', '1489442682');
INSERT INTO `log` VALUES ('156', '/%5Bgit%5D/yii2-brainbase/frontend/web/index.php?r=user%2Fsecurity%2Flogin', '', '1', '127.0.0.1', '1489442767');
INSERT INTO `log` VALUES ('157', '/%5Bgit%5D/yii2-brainbase/frontend/web/index.php?r=user%2Fsecurity%2Flogout', '', '1', '127.0.0.1', '1489442770');
INSERT INTO `log` VALUES ('158', '/%5Bgit%5D/yii2-brainbase/frontend/web/index.php', '', '0', '127.0.0.1', '1489442770');
INSERT INTO `log` VALUES ('159', '/%5Bgit%5D/yii2-brainbase/frontend/web/index.php?r=user%2Fsecurity%2Flogin', '', '1', '127.0.0.1', '1489442817');
INSERT INTO `log` VALUES ('160', '/%5Bgit%5D/yii2-brainbase/frontend/web/index.php?r=user%2Fsecurity%2Flogout', '', '1', '127.0.0.1', '1489442819');
INSERT INTO `log` VALUES ('161', '/%5Bgit%5D/yii2-brainbase/frontend/web/index.php', '', '0', '127.0.0.1', '1489442819');
INSERT INTO `log` VALUES ('162', '/%5Bgit%5D/yii2-brainbase/frontend/web/index.php', '', '1', '127.0.0.1', '1489442824');
INSERT INTO `log` VALUES ('163', '/%5Bgit%5D/yii2-brainbase/frontend/web/index.php?r=user%2Fsecurity%2Flogout', '', '1', '127.0.0.1', '1489442872');
INSERT INTO `log` VALUES ('164', '/%5Bgit%5D/yii2-brainbase/frontend/web/index.php', '', '0', '127.0.0.1', '1489442872');
INSERT INTO `log` VALUES ('165', '/%5Bgit%5D/yii2-brainbase/frontend/web/index.php', '', '1', '127.0.0.1', '1489442878');
INSERT INTO `log` VALUES ('166', '/%5Bgit%5D/yii2-brainbase/frontend/web/index.php?r=user%2Fsecurity%2Flogout', '', '1', '127.0.0.1', '1489444141');
INSERT INTO `log` VALUES ('167', '/%5Bgit%5D/yii2-brainbase/frontend/web/index.php', '', '0', '127.0.0.1', '1489444141');
INSERT INTO `log` VALUES ('168', '/%5Bgit%5D/yii2-brainbase/frontend/web/index.php?r=user%2Fsecurity%2Flogin', '', '1', '127.0.0.1', '1489444208');
INSERT INTO `log` VALUES ('169', '/%5Bgit%5D/yii2-brainbase/frontend/web/index.php?r=user%2Fsecurity%2Flogout', '', '1', '127.0.0.1', '1489444211');
INSERT INTO `log` VALUES ('170', '/%5Bgit%5D/yii2-brainbase/frontend/web/index.php', '', '0', '127.0.0.1', '1489444211');
INSERT INTO `log` VALUES ('171', '/%5Bgit%5D/yii2-brainbase/frontend/web/index.php?r=user%2Fsecurity%2Flogin', '', '1', '127.0.0.1', '1489444248');
INSERT INTO `log` VALUES ('172', '/%5Bgit%5D/yii2-brainbase/frontend/web/index.php?r=user%2Fsecurity%2Flogout', '', '1', '127.0.0.1', '1489444255');
INSERT INTO `log` VALUES ('173', '/%5Bgit%5D/yii2-brainbase/frontend/web/index.php', '', '0', '127.0.0.1', '1489444255');
INSERT INTO `log` VALUES ('174', '/%5Bgit%5D/yii2-brainbase/frontend/web/index.php?r=user%2Fsecurity%2Flogin', '', '1', '127.0.0.1', '1489444307');
INSERT INTO `log` VALUES ('175', '/%5Bgit%5D/yii2-brainbase/frontend/web/index.php?r=user%2Fsecurity%2Flogout', '', '1', '127.0.0.1', '1489444309');
INSERT INTO `log` VALUES ('176', '/%5Bgit%5D/yii2-brainbase/frontend/web/index.php', '', '0', '127.0.0.1', '1489444309');
INSERT INTO `log` VALUES ('177', '/%5Bgit%5D/yii2-brainbase/frontend/web/index.php', '', '1', '127.0.0.1', '1489444316');
INSERT INTO `log` VALUES ('178', '/%5Bgit%5D/yii2-brainbase/frontend/web/index.php?r=user%2Fsecurity%2Flogout', '', '1', '127.0.0.1', '1489445144');
INSERT INTO `log` VALUES ('179', '/%5Bgit%5D/yii2-brainbase/frontend/web/index.php', '', '0', '127.0.0.1', '1489445144');
INSERT INTO `log` VALUES ('180', '/%5Bgit%5D/yii2-brainbase/frontend/web/index.php?r=user%2Fsecurity%2Flogin', '', '1', '127.0.0.1', '1489445224');
INSERT INTO `log` VALUES ('181', '/%5Bgit%5D/yii2-brainbase/frontend/web/index.php?r=user%2Fsecurity%2Flogout', '', '1', '127.0.0.1', '1489445227');
INSERT INTO `log` VALUES ('182', '/%5Bgit%5D/yii2-brainbase/frontend/web/index.php', '', '0', '127.0.0.1', '1489445227');
INSERT INTO `log` VALUES ('183', '/%5Bgit%5D/yii2-brainbase/frontend/web/index.php?r=user%2Fsecurity%2Flogin', '', '1', '127.0.0.1', '1489445264');
INSERT INTO `log` VALUES ('184', '/%5Bgit%5D/yii2-brainbase/frontend/web/index.php?r=user%2Fsecurity%2Flogout', '', '1', '127.0.0.1', '1489445267');
INSERT INTO `log` VALUES ('185', '/%5Bgit%5D/yii2-brainbase/frontend/web/index.php', '', '0', '127.0.0.1', '1489445267');
INSERT INTO `log` VALUES ('186', '/%5Bgit%5D/yii2-brainbase/frontend/web/index.php', '', '1', '127.0.0.1', '1489445276');
INSERT INTO `log` VALUES ('187', '/%5Bgit%5D/yii2-brainbase/frontend/web/index.php?r=user%2Fsecurity%2Flogout', '', '1', '127.0.0.1', '1489445288');
INSERT INTO `log` VALUES ('188', '/%5Bgit%5D/yii2-brainbase/frontend/web/index.php', '', '0', '127.0.0.1', '1489445288');
INSERT INTO `log` VALUES ('189', '/%5Bgit%5D/yii2-brainbase/frontend/web/index.php', '', '1', '127.0.0.1', '1489445298');
INSERT INTO `log` VALUES ('190', '/%5Bgit%5D/yii2-brainbase/backend/web/index.php?r=user%2Fuser%2Findex', '', '1', '127.0.0.1', '1489445461');
INSERT INTO `log` VALUES ('191', '/%5Bgit%5D/yii2-brainbase/backend/web/index.php?r=user%2Fstatus', '', '1', '127.0.0.1', '1489447827');
INSERT INTO `log` VALUES ('192', '/%5Bgit%5D/yii2-brainbase/backend/web/index.php?r=user%2Fstatus', '', '1', '127.0.0.1', '1489447898');
INSERT INTO `log` VALUES ('193', '/%5Bgit%5D/yii2-brainbase/backend/web/index.php?r=user%2Fstatus%2Fview&id=1', '', '1', '127.0.0.1', '1489447907');
INSERT INTO `log` VALUES ('194', '/%5Bgit%5D/yii2-brainbase/backend/web/index.php?r=user%2Fstatus%2Fview&id=1', '', '1', '127.0.0.1', '1489447928');
INSERT INTO `log` VALUES ('195', '/%5Bgit%5D/yii2-brainbase/backend/web/index.php?r=user%2Fstatus', '', '1', '127.0.0.1', '1489447934');
INSERT INTO `log` VALUES ('196', '/%5Bgit%5D/yii2-brainbase/backend/web/index.php?r=user%2Fstatus', '', '1', '127.0.0.1', '1489447940');
INSERT INTO `log` VALUES ('197', '/%5Bgit%5D/yii2-brainbase/backend/web/index.php?r=user%2Fstatus%2Findex&sort=last_login_at', '', '1', '127.0.0.1', '1489448001');
INSERT INTO `log` VALUES ('198', '/%5Bgit%5D/yii2-brainbase/backend/web/index.php?r=user%2Fstatus%2Findex&sort=last_login_ip', '', '1', '127.0.0.1', '1489448008');
INSERT INTO `log` VALUES ('199', '/%5Bgit%5D/yii2-brainbase/backend/web/index.php?r=user%2Fstatus%2Findex&sort=last_login_at', '', '1', '127.0.0.1', '1489448230');
INSERT INTO `log` VALUES ('200', '/%5Bgit%5D/yii2-brainbase/backend/web/index.php?r=user%2Fstatus%2Findex&sort=last_login_at', '', '1', '127.0.0.1', '1489448250');
INSERT INTO `log` VALUES ('201', '/%5Bgit%5D/yii2-brainbase/backend/web/index.php?r=user%2Fstatus%2Findex&sort=registration_ip&_pjax=%23p0', '', '1', '127.0.0.1', '1489448257');
INSERT INTO `log` VALUES ('202', '/%5Bgit%5D/yii2-brainbase/backend/web/index.php?r=user%2Fstatus%2Findex&sort=last_login_ip&_pjax=%23p0&_pjax=%23p0', '', '1', '127.0.0.1', '1489448259');
INSERT INTO `log` VALUES ('203', '/%5Bgit%5D/yii2-brainbase/backend/web/index.php?r=user%2Fstatus%2Findex&sort=last_login_ip', '', '1', '127.0.0.1', '1489448297');
INSERT INTO `log` VALUES ('204', '/%5Bgit%5D/yii2-brainbase/backend/web/index.php?r=user%2Fuser%2Findex', '', '1', '127.0.0.1', '1489448434');
INSERT INTO `log` VALUES ('205', '/%5Bgit%5D/yii2-brainbase/backend/web/index.php?r=user%2Fverify%2Fview&id=64', '', '1', '127.0.0.1', '1489448445');
INSERT INTO `log` VALUES ('206', '/%5Bgit%5D/yii2-brainbase/backend/web/index.php?r=user%2Fuser%2Findex', '', '1', '127.0.0.1', '1489448449');
INSERT INTO `log` VALUES ('207', '/%5Bgit%5D/yii2-brainbase/backend/web/index.php?r=user%2Fprofile%2Fupdate&id=64', '', '1', '127.0.0.1', '1489448465');
INSERT INTO `log` VALUES ('208', '/%5Bgit%5D/yii2-brainbase/backend/web/index.php?r=user%2Fuser%2Findex', '', '1', '127.0.0.1', '1489448472');
INSERT INTO `log` VALUES ('209', '/%5Bgit%5D/yii2-brainbase/backend/web/index.php?r=user%2Fverify%2Fview&id=64', '', '1', '127.0.0.1', '1489448477');
INSERT INTO `log` VALUES ('210', '/%5Bgit%5D/yii2-brainbase/backend/web/index.php?r=user%2Fverify', '', '1', '127.0.0.1', '1489448498');
INSERT INTO `log` VALUES ('211', '/%5Bgit%5D/yii2-brainbase/backend/web/index.php?r=user%2Fverify', '', '1', '127.0.0.1', '1489448507');
INSERT INTO `log` VALUES ('212', '/%5Bgit%5D/yii2-brainbase/backend/web/index.php?r=user%2Fverify%2Fview&id=64', '', '1', '127.0.0.1', '1489448925');
INSERT INTO `log` VALUES ('213', '/%5Bgit%5D/yii2-brainbase/backend/web/index.php?r=user%2Fuser%2Findex', '', '1', '127.0.0.1', '1489448926');
INSERT INTO `log` VALUES ('214', '/%5Bgit%5D/yii2-brainbase/backend/web/index.php?r=user%2Fstatus%2Findex&sort=last_login_ip', '', '1', '127.0.0.1', '1489448927');
INSERT INTO `log` VALUES ('215', '/%5Bgit%5D/yii2-brainbase/backend/web/index.php?r=user%2Fstatus%2Findex&sort=last_login_ip', '', '1', '127.0.0.1', '1489448945');
INSERT INTO `log` VALUES ('216', '/%5Bgit%5D/yii2-brainbase/backend/web/index.php?r=user%2Fstatus%2Fupdate&id=64', '', '1', '127.0.0.1', '1489448947');
INSERT INTO `log` VALUES ('217', '/%5Bgit%5D/yii2-brainbase/backend/web/index.php?r=user%2Fstatus%2Findex&sort=last_login_ip', '', '1', '127.0.0.1', '1489448950');
INSERT INTO `log` VALUES ('218', '/%5Bgit%5D/yii2-brainbase/backend/web/index.php?r=user%2Fstatus%2Fupdate&id=64', '', '1', '127.0.0.1', '1489448986');
INSERT INTO `log` VALUES ('219', '/%5Bgit%5D/yii2-brainbase/backend/web/index.php?r=user%2Fstatus%2Fupdate&id=64', '', '1', '127.0.0.1', '1489448989');
INSERT INTO `log` VALUES ('220', '/%5Bgit%5D/yii2-brainbase/backend/web/index.php?r=user%2Fstatus%2Fupdate&id=64', '', '1', '127.0.0.1', '1489448990');
INSERT INTO `log` VALUES ('221', '/%5Bgit%5D/yii2-brainbase/backend/web/index.php?r=user%2Fstatus%2Fupdate&id=64', '', '1', '127.0.0.1', '1489448990');
INSERT INTO `log` VALUES ('222', '/%5Bgit%5D/yii2-brainbase/backend/web/index.php?r=user%2Fstatus%2Fupdate&id=64', '', '1', '127.0.0.1', '1489448991');
INSERT INTO `log` VALUES ('223', '/%5Bgit%5D/yii2-brainbase/backend/web/index.php?r=user%2Fstatus%2Fupdate&id=64', '', '1', '127.0.0.1', '1489448995');
INSERT INTO `log` VALUES ('224', '/%5Bgit%5D/yii2-brainbase/backend/web/index.php?r=user%2Fstatus%2Fupdate&id=64', '', '1', '127.0.0.1', '1489448997');
INSERT INTO `log` VALUES ('225', '/%5Bgit%5D/yii2-brainbase/backend/web/index.php?r=user%2Fstatus%2Fupdate&id=64', '', '1', '127.0.0.1', '1489449000');
INSERT INTO `log` VALUES ('226', '/%5Bgit%5D/yii2-brainbase/backend/web/index.php?r=user%2Fstatus%2Fupdate&id=64', '', '1', '127.0.0.1', '1489449021');
INSERT INTO `log` VALUES ('227', '/%5Bgit%5D/yii2-brainbase/backend/web/index.php?r=user%2Fstatus%2Fupdate&id=64', '', '1', '127.0.0.1', '1489449025');
INSERT INTO `log` VALUES ('228', '/%5Bgit%5D/yii2-brainbase/backend/web/index.php?r=user%2Fstatus%2Fupdate&id=64', '', '1', '127.0.0.1', '1489449030');
INSERT INTO `log` VALUES ('229', '/%5Bgit%5D/yii2-brainbase/backend/web/index.php?r=user%2Fstatus%2Fupdate&id=64', '', '1', '127.0.0.1', '1489449160');
INSERT INTO `log` VALUES ('230', '/%5Bgit%5D/yii2-brainbase/backend/web/index.php?r=user%2Fstatus%2Fupdate&id=64', '', '1', '127.0.0.1', '1489449276');
INSERT INTO `log` VALUES ('231', '/%5Bgit%5D/yii2-brainbase/backend/web/index.php?r=user%2Fstatus%2Fupdate&id=64', '', '1', '127.0.0.1', '1489449286');
INSERT INTO `log` VALUES ('232', '/%5Bgit%5D/yii2-brainbase/backend/web/index.php?r=user%2Fstatus%2Fupdate&id=64', '', '1', '127.0.0.1', '1489449287');
INSERT INTO `log` VALUES ('233', '/%5Bgit%5D/yii2-brainbase/backend/web/index.php?r=user%2Fstatus%2Fupdate&id=64', '', '1', '127.0.0.1', '1489449287');
INSERT INTO `log` VALUES ('234', '/%5Bgit%5D/yii2-brainbase/backend/web/index.php?r=user%2Fstatus%2Fview&id=64', '', '1', '127.0.0.1', '1489449287');
INSERT INTO `log` VALUES ('235', '/%5Bgit%5D/yii2-brainbase/backend/web/index.php?r=user%2Fstatus%2Fview&id=64', '', '1', '127.0.0.1', '1489449369');
INSERT INTO `log` VALUES ('236', '/%5Bgit%5D/yii2-brainbase/backend/web/index.php?r=user%2Fstatus%2Fupdate&id=64', '', '1', '127.0.0.1', '1489449373');
INSERT INTO `log` VALUES ('237', '/%5Bgit%5D/yii2-brainbase/backend/web/index.php?r=user%2Fstatus%2Fupdate&id=64', '', '1', '127.0.0.1', '1489449376');
INSERT INTO `log` VALUES ('238', '/%5Bgit%5D/yii2-brainbase/backend/web/index.php?r=user%2Fstatus', '', '1', '127.0.0.1', '1489449450');
