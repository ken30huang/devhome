/*
Navicat MySQL Data Transfer

Source Server         : local_db
Source Server Version : 100113
Source Host           : localhost:3306
Source Database       : db_devhome

Target Server Type    : MYSQL
Target Server Version : 100113
File Encoding         : 65001

Date: 2019-07-12 11:57:04
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for db_tag
-- ----------------------------
DROP TABLE IF EXISTS `db_tag`;
CREATE TABLE `db_tag` (
  `tag_id` int(11) NOT NULL,
  `tag_name` varchar(255) NOT NULL COMMENT '标签名',
  PRIMARY KEY (`tag_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of db_tag
-- ----------------------------

-- ----------------------------
-- Table structure for dh_category
-- ----------------------------
DROP TABLE IF EXISTS `dh_category`;
CREATE TABLE `dh_category` (
  `cate_id` int(4) NOT NULL,
  `cate_name` varchar(100) NOT NULL COMMENT '分类名称',
  `cate_pid` int(4) NOT NULL DEFAULT '0',
  `cate_cont` varchar(255) DEFAULT NULL,
  `cate_time` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`cate_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dh_category
-- ----------------------------

-- ----------------------------
-- Table structure for dh_content
-- ----------------------------
DROP TABLE IF EXISTS `dh_content`;
CREATE TABLE `dh_content` (
  `c_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `c_type` varchar(20) NOT NULL DEFAULT 'article' COMMENT '内容类型',
  `c_cateid` varchar(255) NOT NULL DEFAULT '0' COMMENT '分类ID',
  `c_title` varchar(255) NOT NULL DEFAULT '' COMMENT '标题',
  `c_thumb` varchar(255) DEFAULT NULL COMMENT '文章缩略图',
  `c_tag` varchar(255) DEFAULT NULL COMMENT '标签',
  `c_link` varchar(255) DEFAULT NULL COMMENT '外链',
  `c_alias` varchar(255) NOT NULL,
  `c_cont` longtext COMMENT '文章内容',
  `c_summery` text COMMENT '摘要',
  `c_pubdate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP COMMENT '时间',
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of dh_content
-- ----------------------------

-- ----------------------------
-- Table structure for dh_points
-- ----------------------------
DROP TABLE IF EXISTS `dh_points`;
CREATE TABLE `dh_points` (
  `point_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `point_name` varchar(255) NOT NULL COMMENT '标题',
  `point_pic` varchar(255) DEFAULT NULL COMMENT '链接',
  `point_link` varchar(255) DEFAULT NULL COMMENT '内容',
  `point_tag` varchar(255) DEFAULT NULL COMMENT '标签名',
  PRIMARY KEY (`point_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dh_points
-- ----------------------------

-- ----------------------------
-- Table structure for dh_pushlog
-- ----------------------------
DROP TABLE IF EXISTS `dh_pushlog`;
CREATE TABLE `dh_pushlog` (
  `pl_id` int(11) NOT NULL AUTO_INCREMENT,
  `pl_email` varchar(255) NOT NULL COMMENT '推送邮箱',
  `pl_cont` text COMMENT '推送内容',
  `pl_code` tinyint(2) DEFAULT '0' COMMENT '推送结果:0-成功,1-失败',
  `pl_msg` varchar(255) DEFAULT NULL COMMENT '成功或者失败原因',
  `pl_time` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`pl_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dh_pushlog
-- ----------------------------

-- ----------------------------
-- Table structure for dh_pushuser
-- ----------------------------
DROP TABLE IF EXISTS `dh_pushuser`;
CREATE TABLE `dh_pushuser` (
  `pu_id` int(11) NOT NULL AUTO_INCREMENT,
  `pu_email` varchar(255) NOT NULL COMMENT '推送邮箱',
  `pu_addtime` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP COMMENT '新增时间',
  PRIMARY KEY (`pu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dh_pushuser
-- ----------------------------

-- ----------------------------
-- Table structure for dh_searchlog
-- ----------------------------
DROP TABLE IF EXISTS `dh_searchlog`;
CREATE TABLE `dh_searchlog` (
  `sl_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `sl_word` varchar(255) NOT NULL COMMENT '搜索关键字',
  `sl_uname` varchar(50) DEFAULT NULL COMMENT '搜索用户名',
  `sl_uid` int(11) DEFAULT '0' COMMENT '搜索用户ID',
  `sl_time` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`sl_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dh_searchlog
-- ----------------------------

-- ----------------------------
-- Table structure for dh_sites
-- ----------------------------
DROP TABLE IF EXISTS `dh_sites`;
CREATE TABLE `dh_sites` (
  `site_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `site_name` varchar(255) NOT NULL COMMENT '网站名称',
  `site_url` varchar(255) NOT NULL COMMENT '网站地址',
  `site_description` varchar(255) DEFAULT NULL COMMENT 'site_description',
  `site_charge` tinyint(2) DEFAULT '0' COMMENT '收费类型:0-全免费,1-部分收费,2-全免费',
  `site_isrecord` tinyint(2) DEFAULT '0' COMMENT '是否收录网站:0-是,1-否',
  PRIMARY KEY (`site_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dh_sites
-- ----------------------------

-- ----------------------------
-- Table structure for dh_uisetting
-- ----------------------------
DROP TABLE IF EXISTS `dh_uisetting`;
CREATE TABLE `dh_uisetting` (
  `ui_id` int(11) NOT NULL AUTO_INCREMENT,
  `ui_name` varchar(50) NOT NULL COMMENT 'UI名称',
  `ui_path` varchar(255) NOT NULL COMMENT 'UI路径',
  `ui_headcont` longtext COMMENT 'head内容',
  `ui_slidercont` longtext COMMENT 'slider内容',
  `ui_footercont` longtext COMMENT 'footer内容',
  `ui_isactive` tinyint(2) DEFAULT '0' COMMENT '是否启用:0-否,1-是',
  PRIMARY KEY (`ui_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dh_uisetting
-- ----------------------------

-- ----------------------------
-- Table structure for dh_user
-- ----------------------------
DROP TABLE IF EXISTS `dh_user`;
CREATE TABLE `dh_user` (
  `user_id` int(11) NOT NULL COMMENT '用户id',
  `user_email` varchar(50) NOT NULL COMMENT '用户邮箱',
  `user_pwd` varchar(50) NOT NULL COMMENT '用户密码',
  `user_isvalid` tinyint(2) NOT NULL DEFAULT '0' COMMENT '是否验证:0-否,1-是',
  `user_name` varchar(50) NOT NULL COMMENT '用户',
  `user_logintime` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP COMMENT '登录时间',
  `user_regtime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP COMMENT '注册时间',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dh_user
-- ----------------------------

-- ----------------------------
-- Table structure for dh_visitlog
-- ----------------------------
DROP TABLE IF EXISTS `dh_visitlog`;
CREATE TABLE `dh_visitlog` (
  `v_id` int(11) NOT NULL AUTO_INCREMENT,
  `v_ip` varchar(255) NOT NULL COMMENT 'IP地址',
  `v_uname` varchar(255) NOT NULL COMMENT '用户名',
  `v_link` varchar(255) DEFAULT NULL COMMENT '访问链接',
  `v_logtime` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`v_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dh_visitlog
-- ----------------------------
