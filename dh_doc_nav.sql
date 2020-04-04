/*
Navicat MySQL Data Transfer

Source Server         : local_db
Source Server Version : 50720
Source Host           : localhost:3306
Source Database       : db_devhome

Target Server Type    : MYSQL
Target Server Version : 50720
File Encoding         : 65001

Date: 2020-04-04 13:26:20
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for dh_doc_nav
-- ----------------------------
DROP TABLE IF EXISTS `dh_doc_nav`;
CREATE TABLE `dh_doc_nav` (
  `dn_id` int(4) NOT NULL AUTO_INCREMENT,
  `dn_name` varchar(255) NOT NULL COMMENT '导航名称',
  `dn_type` tinyint(2) NOT NULL DEFAULT '1' COMMENT '导航类型:1-顶部导航; 2-侧边导航',
  `dn_path` varchar(255) NOT NULL COMMENT '导航路径',
  `dn_order` int(4) NOT NULL DEFAULT '0' COMMENT '导航排序',
  `dn_pid` int(4) DEFAULT '0' COMMENT '上级导航',
  `dn_content` text COMMENT '页面默认内容',
  PRIMARY KEY (`dn_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dh_doc_nav
-- ----------------------------
INSERT INTO `dh_doc_nav` VALUES ('1', 'HTML5+CSS3技术栈', '1', 'html5css3', '0', '0', '重点介绍XXXXX');
INSERT INTO `dh_doc_nav` VALUES ('2', 'HTML基础', '1', 'htmlbase', '0', '1', null);
INSERT INTO `dh_doc_nav` VALUES ('3', 'CSS基础', '1', 'cssbase', '0', '1', '# CSS是个啥');
INSERT INTO `dh_doc_nav` VALUES ('4', 'Javascript技术栈', '1', 'jsstack', '0', '0', '');
INSERT INTO `dh_doc_nav` VALUES ('5', 'Javascript基础', '1', 'jsbase', '0', '4', null);
INSERT INTO `dh_doc_nav` VALUES ('6', 'Node基础', '1', 'nodebase', '0', '4', null);
INSERT INTO `dh_doc_nav` VALUES ('7', 'Typescript基础', '1', 'tsbase', '0', '4', null);

-- ----------------------------
-- Table structure for dh_doc_setting
-- ----------------------------
DROP TABLE IF EXISTS `dh_doc_setting`;
CREATE TABLE `dh_doc_setting` (
  `ds_id` int(4) NOT NULL AUTO_INCREMENT,
  `ds_key` varchar(50) NOT NULL COMMENT '配置名称',
  `ds_type` varchar(20) NOT NULL COMMENT '配置项类型',
  `ds_content` text NOT NULL COMMENT '配置内容',
  `ds_isopen` tinyint(2) DEFAULT '1' COMMENT '是否打开',
  `ds_name` varchar(50) DEFAULT NULL COMMENT '对应name',
  `ds_value` varchar(255) NOT NULL COMMENT '配置值',
  PRIMARY KEY (`ds_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dh_doc_setting
-- ----------------------------
INSERT INTO `dh_doc_setting` VALUES ('2', 'loadSidebar', 'Boolean', '- Getting started\n\n  - [Quick start](quickstart.md)\n  - [Writing more pages](more-pages.md)\n  - [Custom navbar](custom-navbar.md)\n  - [Cover page](cover.md)\n\n- Customization\n\n  - [Configuration](configuration.md)\n  - [Themes](themes.md)\n  - [List of Plugins](plugins.md)\n  - [Write a Plugin](write-a-plugin.md)\n  - [Markdown configuration](markdown.md)\n  - [Language highlighting](language-highlight.md)\n\n- Guide\n\n  - [Deploy](deploy.md)\n  - [Helpers](helpers.md)\n  - [Vue compatibility](vue.md)\n  - [CDN](cdn.md)\n  - [Offline Mode(PWA)](pwa.md)\n  - [Server-Side Rendering(SSR)](ssr.md)\n  - [Embed Files](embed-files.md)\n\n- [Awesome docsify](awesome.md)\n- [Changelog](changelog.md)\n', '1', '_sidebar.md', 'true');
INSERT INTO `dh_doc_setting` VALUES ('4', 'loadNavbar', 'Boolean', '', '1', '', 'true');
INSERT INTO `dh_doc_setting` VALUES ('5', 'alias', 'Content', '{\n \"/.*/_navbar.md\":\"_navbar.md\"\n}', '1', '', '');
INSERT INTO `dh_doc_setting` VALUES ('6', 'subMaxLevel', 'Number', '', '1', '', '2');
INSERT INTO `dh_doc_setting` VALUES ('7', 'themeColor', 'String', '', '0', '', '#4589d0');
