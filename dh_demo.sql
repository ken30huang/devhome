/*
Navicat MySQL Data Transfer

Source Server         : local_db
Source Server Version : 100113
Source Host           : localhost:3306
Source Database       : db_devhome

Target Server Type    : MYSQL
Target Server Version : 100113
File Encoding         : 65001

Date: 2020-04-01 10:03:44
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for dh_demo
-- ----------------------------
DROP TABLE IF EXISTS `dh_demo`;
CREATE TABLE `dh_demo` (
  `demo_id` int(11) NOT NULL AUTO_INCREMENT,
  `demo_name` varchar(50) NOT NULL DEFAULT '' COMMENT '代码名称',
  `demo_desc` text NOT NULL COMMENT 'DEMO描述',
  `demo_thumb` varchar(255) DEFAULT NULL COMMENT '展示缩略图',
  `demo_html` text,
  `demo_js` text,
  `demo_css` text,
  `demo_jstype` varchar(20) DEFAULT NULL,
  `demo_csslinks` text,
  `demo_jslinks` text,
  PRIMARY KEY (`demo_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dh_demo
-- ----------------------------
