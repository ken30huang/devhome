/*
Navicat MySQL Data Transfer

Source Server         : local_db
Source Server Version : 100113
Source Host           : localhost:3306
Source Database       : db_devhome

Target Server Type    : MYSQL
Target Server Version : 100113
File Encoding         : 65001

Date: 2019-07-22 18:46:17
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for dh_category
-- ----------------------------
DROP TABLE IF EXISTS `dh_category`;
CREATE TABLE `dh_category` (
  `cate_id` int(4) NOT NULL AUTO_INCREMENT,
  `cate_name` varchar(100) NOT NULL COMMENT '分类名称',
  `cate_pid` int(4) NOT NULL DEFAULT '0',
  `cate_cont` varchar(255) DEFAULT NULL,
  `cate_icon` varchar(255) DEFAULT NULL,
  `cate_pageid` int(4) DEFAULT '0',
  PRIMARY KEY (`cate_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dh_category
-- ----------------------------
INSERT INTO `dh_category` VALUES ('9', '社区&博客', '0', '', '', '0');
INSERT INTO `dh_category` VALUES ('10', '学习教程', '9', '', '', '0');
INSERT INTO `dh_category` VALUES ('12', 'Web框架', '9', '', '', '0');
INSERT INTO `dh_category` VALUES ('13', '前端框架', '9', '', '', '0');
INSERT INTO `dh_category` VALUES ('14', 'BLOG', '0', '', '', '0');

-- ----------------------------
-- Table structure for dh_codestyle
-- ----------------------------
DROP TABLE IF EXISTS `dh_codestyle`;
CREATE TABLE `dh_codestyle` (
  `cs_id` int(4) NOT NULL AUTO_INCREMENT,
  `cs_lang` varchar(50) NOT NULL COMMENT '编程语言',
  `cs_style` varchar(20) NOT NULL COMMENT '样式名',
  PRIMARY KEY (`cs_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dh_codestyle
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
  `c_linktitle` varchar(255) DEFAULT NULL,
  `c_link` varchar(255) DEFAULT NULL COMMENT '外链',
  `c_alias` varchar(255) DEFAULT NULL,
  `c_cont` longtext COMMENT '文章内容',
  `c_summery` text COMMENT '摘要',
  `c_pubdate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP COMMENT '时间',
  `c_parentid` int(11) DEFAULT '0',
  `c_seokeyword` varchar(255) DEFAULT NULL,
  `c_seodescription` varchar(255) DEFAULT NULL,
  `c_mdcont` longtext,
  `c_order` int(4) DEFAULT '0',
  `c_linkdate` datetime DEFAULT NULL COMMENT '链接发布时间',
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of dh_content
-- ----------------------------
INSERT INTO `dh_content` VALUES ('6', 'article', '0', 'd56fdgdsfg', null, 'fsdfsa122,fsad', null, null, 'twerdfg', '<p>fsdfasfsdfsa</p>\n', 'fsfasfsafd', '2019-07-22 14:17:21', '0', 'gdfgw5terg', 'fdgsdg', 'fsdfasfsdfsa', '0', null);
INSERT INTO `dh_content` VALUES ('7', 'article', '0', 'rrdgsdfs21213', null, 'fsafasdsaf,fsad,fsdfsa122,fsad', null, null, 'fsfdsaf', '<p>fsafsafs</p>\n', 'dasfsa', '2019-07-22 14:17:21', '0', 'fsadf', 'fsf', 'fsafsafs', '0', null);
INSERT INTO `dh_content` VALUES ('8', 'article', '0', 'FASA', null, 'fsad,fsdfsa122', null, null, '/TESSDASDF', '<p>FSDSFAFASF</p>\n', 'DSFASF', '2019-07-22 14:17:21', '0', 'FASFSAFS', 'SDFSAFA', 'FSDSFAFASF', '0', null);
INSERT INTO `dh_content` VALUES ('9', 'article', '0', 'JFKSDFSAHJFS', null, 'fasfa', null, null, 'DSFASFS', '<p>sdfsafas</p>\n', 'fasfafsafasf', '2019-07-22 14:17:21', '0', 'FSA', 'dsfsa', 'sdfsafas', '0', null);
INSERT INTO `dh_content` VALUES ('10', 'article', '0', 'JFKSDFSAHJFS1', null, 'fasfa', null, null, 'DSFASFS1', '<p>sdfsafas</p>\n', 'fasfafsafasf', '2019-07-22 14:17:21', '0', 'FSA', 'dsfsa', 'sdfsafas', '0', null);
INSERT INTO `dh_content` VALUES ('14', 'page', '0', 'HOME', null, null, null, null, '/', '内容预览', null, '2019-07-22 14:45:56', '0', '', 'HOME', '', '0', null);
INSERT INTO `dh_content` VALUES ('15', 'page', '0', '收藏集锦', null, null, null, null, '/collect', '内容预览', null, '2019-07-22 14:47:27', '0', '收藏集锦', '收藏集锦', '', '0', null);
INSERT INTO `dh_content` VALUES ('16', 'page', '0', '系列文章', null, null, null, null, '/series', '内容预览', null, '2019-07-22 14:51:21', '15', '前端,人工智能,机器学习,图像识别,后台技术,java,python,javascript,html5,css,css3,es6', '系列文章，筛选收藏来自各个技术社区和网站的系列文章', '', '0', null);
INSERT INTO `dh_content` VALUES ('17', 'page', '0', '在线文档', null, null, null, null, '/books', '内容预览', null, '2019-07-22 14:53:05', '15', '在线文档，开源文档', '在线文档，开源文档', '', '0', null);
INSERT INTO `dh_content` VALUES ('18', 'page', '0', '博客&社区', null, null, null, null, '/techsites', '', null, '2019-07-22 14:54:36', '15', '技术社区,技术博客', '技术社区,技术博客', '', '0', null);
INSERT INTO `dh_content` VALUES ('19', 'page', '0', '开发资源', null, null, null, null, 'javascript:;', '内容预览', null, '2019-07-22 14:56:16', '0', '开发资源', '开发资源', '', '0', null);
INSERT INTO `dh_content` VALUES ('20', 'page', '0', 'DEMO展示', null, null, null, null, '/demos', '内容预览', null, '2019-07-22 14:58:11', '19', 'js,python,svg,canvas', 'js,python,svg,canvas', '', '0', null);
INSERT INTO `dh_content` VALUES ('21', 'page', '0', '小工具', null, null, null, null, '/smalltool', '内容预览', null, '2019-07-22 14:59:12', '19', '小工具', '小工具', '', '0', null);
INSERT INTO `dh_content` VALUES ('22', 'page', '0', '知识点', null, null, null, null, '/points', '内容预览', null, '2019-07-22 14:59:48', '19', '知识点', '知识点', '', '0', null);
INSERT INTO `dh_content` VALUES ('23', 'page', '0', 'BLOG', null, null, null, null, '/blog', '内容预览', null, '2019-07-22 15:01:06', '0', '博客,javascript,js,svg,docker,java,小程序', '博客,javascript,js,svg,docker,java,小程序', '', '0', null);
INSERT INTO `dh_content` VALUES ('24', 'page', '0', '关于\"我\"', null, null, null, null, '/about', '内容预览', null, '2019-07-22 15:01:52', '0', '关于我', '关于我', '', '0', null);
INSERT INTO `dh_content` VALUES ('26', 'series', '0', 'app后端设计--总目录 - 曾健生的专栏 - CSDN博客', null, '', null, 'https://blog.csdn.net/newjueqi/article/details/19003775', '', '内容预览', '系统架构', '2019-07-22 15:57:44', '0', 'api,推送,系统架构', 'api,推送,系统架构', '', '0', '2014-02-09 09:24:21');
INSERT INTO `dh_content` VALUES ('28', 'series', '0', 'RabbitMQ学习教程 - slimina - CSDN博客', null, 'rabbitmq,教程', null, 'https://blog.csdn.net/tianwei7518/column/info/slimina-rabbitmq/2', '', '内容预览', 'RabbitMQ介绍、安装以及各种场景的应用，讲解与spring的各种集成，以及集群环境的搭建和使用。', '2019-07-22 16:01:05', '0', 'rabbitmq,教程', 'rabbitmq,教程', '', '0', '2014-11-05 21:29:32');
INSERT INTO `dh_content` VALUES ('29', 'series', '0', '理解WebKit和Chromium技术 - Yongsheng - CSDN博客', null, 'webkit,浏览器', null, 'https://blog.csdn.net/milado_nju/column/info/yongsheng', '', '内容预览', 'WebKit被广泛的应用在桌面系统和移动系统，特别是移动领域的兴起更是将WebKit推向了全所未有的应用场景。基于WebKit（Blink）的开源项目Chromium浏览器以其众多新颖的技术和高性能的表现获得广泛的关注。本专栏着重剖析WebKit和Chromium架构和原理。', '2019-07-22 16:00:37', '0', 'webkit,浏览器', 'webkit,浏览器', '', '0', '2012-01-27 14:56:07');
INSERT INTO `dh_content` VALUES ('30', 'series', '0', '支付宝、微信支付接入 - 我是大愚 - CSDN博客', null, '支付宝,微信,支付', null, 'https://idayu.blog.csdn.net/column/info/payment', '', '', '全面集成支付宝支付与微信支付功能。方便快速接入。免费支付聚合sdk。支付宝支付、订单查询、退款、转账完全支持。涵盖微信刷卡、小程序、公众号、app支付。', '2019-07-22 16:13:11', '0', '支付宝,微信,支付,接入', '支付宝,微信,支付,接入', '', '0', '2016-07-18 16:49:58');
INSERT INTO `dh_content` VALUES ('31', 'wiki', '0', '写给程序员的管理入门课程 -《格鲁夫给经理人的第一课》', 'http://blog.devtang.com/images/high-output-management-book.png', '', null, 'http://blog.devtang.com/2016/06/06/high-output-management-summary/', null, null, '《格鲁夫给经理人的第一课》 最早出版于 2007 年，书原名为《High Output Management》。本书的作者格鲁夫是 Intel 的前 CEO，领导了 Intel 从一家濒临倒闭的存储器公司，转型为微处理器公司，并且在个人 PC 开始流行时，成功和微软缔结 Wintel 联盟，主宰了整个 PC 电脑时代', '2019-07-22 16:49:09', '0', '管理', null, null, '0', '2016-06-06 23:50:00');
INSERT INTO `dh_content` VALUES ('32', 'wiki', '0', 'ECMAScript 6 入门', 'http://es6.ruanyifeng.com/images/cover-3rd.jpg', 'es6,教程,javascript', null, 'http://es6.ruanyifeng.com/', null, null, '本书覆盖 ES6 与上一个版本 ES5 的所有不同之处，对涉及的语法知识给予详细介绍，并给出大量简洁易懂的示例代码。', '2019-07-22 18:29:03', '0', 'es6', null, null, '0', '2017-09-01 00:00:00');
INSERT INTO `dh_content` VALUES ('33', 'series', '0', 'jQuery源码分析系列 - 【艾伦】 - 博客园', null, 'javascript,jquery', null, 'https://www.cnblogs.com/aaronjs/p/3279314.html', '', '内容预览', 'jQuery源码分析系列', '2019-07-22 17:45:33', '0', 'jquery,源码', 'jquery,源码', '', '0', '2013-08-24 14:52:00');

-- ----------------------------
-- Table structure for dh_demo
-- ----------------------------
DROP TABLE IF EXISTS `dh_demo`;
CREATE TABLE `dh_demo` (
  `demo_id` int(11) NOT NULL AUTO_INCREMENT,
  `demo_name` varchar(50) NOT NULL DEFAULT '' COMMENT '代码名称',
  `demo_html` text,
  `demo_css` text,
  `demo_code` text,
  `demo_js` text,
  `demo_type` varchar(10) NOT NULL COMMENT '代码类型:代码段/完整demo',
  `demo_libid` int(11) DEFAULT '0' COMMENT '库ID',
  PRIMARY KEY (`demo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dh_demo
-- ----------------------------

-- ----------------------------
-- Table structure for dh_libs
-- ----------------------------
DROP TABLE IF EXISTS `dh_libs`;
CREATE TABLE `dh_libs` (
  `lib_id` int(11) NOT NULL AUTO_INCREMENT,
  `lib_name` varchar(50) NOT NULL COMMENT '库名称',
  `lib_site` varchar(255) DEFAULT NULL COMMENT '库主页',
  `lib_github` varchar(255) DEFAULT NULL COMMENT 'github地址',
  `lib_intro` varchar(255) DEFAULT NULL COMMENT '库介绍',
  `lib_css` text COMMENT 'css链接',
  `lib_js` text COMMENT 'js链接',
  `lib_download` varchar(255) DEFAULT NULL COMMENT '包下载地址',
  `lib_keyword` varchar(255) DEFAULT NULL COMMENT '库所对应的关键字',
  `lib_type` tinyint(1) DEFAULT '0' COMMENT '库的类型: 0-开源项目,1-DEMO模板',
  PRIMARY KEY (`lib_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dh_libs
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
-- Table structure for dh_setting
-- ----------------------------
DROP TABLE IF EXISTS `dh_setting`;
CREATE TABLE `dh_setting` (
  `setting_id` int(4) NOT NULL AUTO_INCREMENT,
  `setting_title` varchar(20) DEFAULT NULL,
  `setting_keyword` varchar(255) DEFAULT NULL,
  `setting_desc` varchar(255) DEFAULT NULL,
  `setting_intro` text,
  `setting_email` varchar(255) DEFAULT NULL,
  `setting_github` varchar(255) DEFAULT NULL,
  `setting_msg` varchar(255) DEFAULT NULL,
  `setting_status` tinyint(2) DEFAULT '1',
  `setting_stmp` varchar(50) DEFAULT NULL,
  `setting_pop3` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`setting_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dh_setting
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
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dh_sites
-- ----------------------------
INSERT INTO `dh_sites` VALUES ('1', 'CSDN', 'https://www.csdn.net/', '中国专业IT社区CSDN (Chinese Software Developer Network) 创立于1999年，致力于为中国软件开发者提供知识传播、在线学习、职业发展等全生命周期服务。 CSDN全职员工超过500名，分布在北京、上海、深圳、武汉、成都、江苏沭阳等地区。', '0', '0');
INSERT INTO `dh_sites` VALUES ('3', '淘宝前端团队（FED）', 'http://taobaofed.org/', '淘宝前端团队（FED）', '0', '1');
INSERT INTO `dh_sites` VALUES ('4', '阮一峰的网络日志', 'http://www.ruanyifeng.com/blog/', '阮一峰的网络日志', '0', '1');
INSERT INTO `dh_sites` VALUES ('7', '张鑫旭的个人博客', 'https://www.zhangxinxu.com/', '张鑫旭的个人博客', '0', '1');
INSERT INTO `dh_sites` VALUES ('8', '小胡子哥的个人网站', 'https://www.barretlee.com/', '', '0', '1');
INSERT INTO `dh_sites` VALUES ('9', '酷壳', 'https://coolshell.cn', '一个分享技术见闻，知识，趋势的网站', '0', '1');
INSERT INTO `dh_sites` VALUES ('10', 'IMWeb 前端技术团队', 'https://imweb.io/', 'IMWeb 团队隶属腾讯公司，是国内最专业的前端团队之一。', '0', '1');
INSERT INTO `dh_sites` VALUES ('11', '博客园', 'https://www.cnblogs.com/', '技术社区，论坛，主要是博客为主', '0', '0');
INSERT INTO `dh_sites` VALUES ('12', '一线码农 - 博客园', 'https://www.cnblogs.com/huangxincheng/', '', '0', '1');
INSERT INTO `dh_sites` VALUES ('13', '微信官方网站', 'https://developers.weixin.qq.com/doc/', '小程序,小游戏,公众号,开放平台', '0', '1');
INSERT INTO `dh_sites` VALUES ('14', '入门教程网（英）', 'https://www.tutorialspoint.com/index.htm', 'The Biggest Online Tutorials Library, It\'s all Free', '0', '1');
INSERT INTO `dh_sites` VALUES ('15', '现代 JavaScript 教程', 'https://zh.javascript.info/', '主要课程包含 2 部分，涵盖了以 JavaScript 作为编程语言并在浏览器中运行。此外还有一系列专题文章。', '0', '1');
INSERT INTO `dh_sites` VALUES ('16', 'Smashing Magazine — For Web Designers And Developers', 'https://www.smashingmagazine.com/', '', '0', '1');
INSERT INTO `dh_sites` VALUES ('17', 'Web前端导航', 'http://www.alloyteam.com/nav/', '', '0', '1');

-- ----------------------------
-- Table structure for dh_tag
-- ----------------------------
DROP TABLE IF EXISTS `dh_tag`;
CREATE TABLE `dh_tag` (
  `tag_id` int(11) NOT NULL AUTO_INCREMENT,
  `tag_name` varchar(255) NOT NULL COMMENT '标签名',
  PRIMARY KEY (`tag_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dh_tag
-- ----------------------------
INSERT INTO `dh_tag` VALUES ('10', 'rabbitmq');
INSERT INTO `dh_tag` VALUES ('11', '教程');
INSERT INTO `dh_tag` VALUES ('12', 'webkit');
INSERT INTO `dh_tag` VALUES ('13', '浏览器');
INSERT INTO `dh_tag` VALUES ('14', '支付宝');
INSERT INTO `dh_tag` VALUES ('15', '微信');
INSERT INTO `dh_tag` VALUES ('16', '支付');
INSERT INTO `dh_tag` VALUES ('17', 'three.js');
INSERT INTO `dh_tag` VALUES ('18', 'javascript');
INSERT INTO `dh_tag` VALUES ('19', 'jquery');
INSERT INTO `dh_tag` VALUES ('20', 'es6');

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
