/*
Navicat MySQL Data Transfer

Source Server         : local_db
Source Server Version : 50720
Source Host           : localhost:3306
Source Database       : db_devhome

Target Server Type    : MYSQL
Target Server Version : 50720
File Encoding         : 65001

Date: 2019-11-11 22:53:39
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for dh_visitlog
-- ----------------------------
DROP TABLE IF EXISTS `dh_visitlog`;
CREATE TABLE `dh_visitlog` (
  `v_id` int(11) NOT NULL AUTO_INCREMENT,
  `v_ip` varchar(255) NOT NULL COMMENT 'IP地址',
  `v_uname` varchar(255) DEFAULT NULL COMMENT '用户名',
  `v_link` varchar(255) NOT NULL COMMENT '访问链接',
  `v_logtime` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  `v_staytime` decimal(11,0) NOT NULL COMMENT '0',
  PRIMARY KEY (`v_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dh_visitlog
-- ----------------------------
