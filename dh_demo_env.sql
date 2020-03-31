/*
Navicat MySQL Data Transfer

Source Server         : local_db
Source Server Version : 100113
Source Host           : localhost:3306
Source Database       : db_devhome

Target Server Type    : MYSQL
Target Server Version : 100113
File Encoding         : 65001

Date: 2020-03-31 19:07:51
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dh_demo
-- ----------------------------

-- ----------------------------
-- Table structure for dh_env
-- ----------------------------
DROP TABLE IF EXISTS `dh_env`;
CREATE TABLE `dh_env` (
  `env_id` int(4) NOT NULL AUTO_INCREMENT,
  `env_name` varchar(20) NOT NULL DEFAULT '' COMMENT '环境名称',
  `env_desc` varchar(255) DEFAULT NULL,
  `env_files` text,
  `env_jstype` varchar(10) DEFAULT NULL,
  `env_jscode` text,
  PRIMARY KEY (`env_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dh_env
-- ----------------------------
INSERT INTO `dh_env` VALUES ('1', 'jquery开发环境', '默认加载JQuery的库', '{\"js\":[\"https://code.jquery.com/jquery-3.4.1.min.js\"],\"css\":[]}', 'javascript', '');
INSERT INTO `dh_env` VALUES ('2', 'React基础开发开发', '默认加载React, react-dom,babel脚本库', '{\"js\":[\"https://unpkg.com/react@16/umd/react.production.min.js\",\"https://unpkg.com/react-dom@16/umd/react-dom.production.min.js\",\"https://unpkg.com/@babel/standalone/babel.min.js\"],\"css\":[]}', 'babel', '');
INSERT INTO `dh_env` VALUES ('3', 'Vue', '默认加载了Vue脚本库', '{\"js\":[\"https://cdn.jsdelivr.net/npm/vue\"],\"css\":[]}', 'javascript', '');
