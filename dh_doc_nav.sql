/*
Navicat MySQL Data Transfer

Source Server         : local_db
Source Server Version : 100113
Source Host           : localhost:3306
Source Database       : db_devhome

Target Server Type    : MYSQL
Target Server Version : 100113
File Encoding         : 65001

Date: 2020-04-03 18:50:15
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
  PRIMARY KEY (`dn_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dh_doc_nav
-- ----------------------------
INSERT INTO `dh_doc_nav` VALUES ('1', 'HTML5+CSS3技术栈', '1', 'html5', '0', '0');
INSERT INTO `dh_doc_nav` VALUES ('2', 'HTML基础', '1', 'htmlbase', '0', '1');

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dh_doc_setting
-- ----------------------------
INSERT INTO `dh_doc_setting` VALUES ('2', 'loadSidebar', 'Boolean', '- Getting started\n\n  - [Quick start](quickstart.md)\n  - [Writing more pages](more-pages.md)\n  - [Custom navbar](custom-navbar.md)\n  - [Cover page](cover.md)\n\n- Customization\n\n  - [Configuration](configuration.md)\n  - [Themes](themes.md)\n  - [List of Plugins](plugins.md)\n  - [Write a Plugin](write-a-plugin.md)\n  - [Markdown configuration](markdown.md)\n  - [Language highlighting](language-highlight.md)\n\n- Guide\n\n  - [Deploy](deploy.md)\n  - [Helpers](helpers.md)\n  - [Vue compatibility](vue.md)\n  - [CDN](cdn.md)\n  - [Offline Mode(PWA)](pwa.md)\n  - [Server-Side Rendering(SSR)](ssr.md)\n  - [Embed Files](embed-files.md)\n\n- [Awesome docsify](awesome.md)\n- [Changelog](changelog.md)\n', '1', '_sidebar.md', 'true');
