/*
Navicat MySQL Data Transfer

Source Server         : local_db
Source Server Version : 100113
Source Host           : localhost:3306
Source Database       : db_devhome

Target Server Type    : MYSQL
Target Server Version : 100113
File Encoding         : 65001

Date: 2019-10-28 11:59:10
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for dh_admin
-- ----------------------------
DROP TABLE IF EXISTS `dh_admin`;
CREATE TABLE `dh_admin` (
  `admin_uid` int(3) NOT NULL AUTO_INCREMENT,
  `admin_uname` varchar(20) NOT NULL,
  `admin_upwd` varchar(50) NOT NULL,
  `admin_utime` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `admin_ugroupid` int(11) DEFAULT '0',
  PRIMARY KEY (`admin_uid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dh_admin
-- ----------------------------
INSERT INTO `dh_admin` VALUES ('1', 'ken', 'af974cf3ae8a5bf92832a864766f5b6c', '2019-07-29 10:40:38', '0');

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
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dh_category
-- ----------------------------
INSERT INTO `dh_category` VALUES ('9', '社区&博客', '0', '', '', '0');
INSERT INTO `dh_category` VALUES ('10', '文档教程', '9', '', '', '0');
INSERT INTO `dh_category` VALUES ('12', 'Web框架', '9', '', '', '0');
INSERT INTO `dh_category` VALUES ('13', '前端框架', '9', '', '', '0');
INSERT INTO `dh_category` VALUES ('15', '编程语言', '0', '', '', '0');
INSERT INTO `dh_category` VALUES ('16', 'Javascript', '15', 'Javascript', 'js', '0');
INSERT INTO `dh_category` VALUES ('17', 'C/C++', '15', 'C/C++', 'c', '0');
INSERT INTO `dh_category` VALUES ('18', 'Python', '15', 'python', 'python', '0');
INSERT INTO `dh_category` VALUES ('19', 'Go', '15', 'go', 'go', '0');
INSERT INTO `dh_category` VALUES ('20', 'Java', '15', 'java', 'java', '0');
INSERT INTO `dh_category` VALUES ('21', 'PHP', '15', 'php', 'php', '0');
INSERT INTO `dh_category` VALUES ('22', 'HTML', '15', 'html', 'html', '0');
INSERT INTO `dh_category` VALUES ('23', 'CSS', '15', 'css', 'css', '0');
INSERT INTO `dh_category` VALUES ('24', 'C#', '15', 'cshap', 'cshap', '0');
INSERT INTO `dh_category` VALUES ('25', 'Rust', '15', 'rust', 'rust', '0');
INSERT INTO `dh_category` VALUES ('26', 'Erlang', '15', 'erlang', 'erlang', '0');
INSERT INTO `dh_category` VALUES ('27', 'Lua', '15', 'lua', 'lua', '0');
INSERT INTO `dh_category` VALUES ('28', 'Nginx', '15', 'nginx', 'nginx', '0');
INSERT INTO `dh_category` VALUES ('29', 'Apache', '15', 'apache', 'apache', '0');
INSERT INTO `dh_category` VALUES ('30', '技术博客&社区', '9', '', '', '0');
INSERT INTO `dh_category` VALUES ('31', '网站导航', '9', '', '', '0');
INSERT INTO `dh_category` VALUES ('32', '工具网站', '9', '', '', '0');
INSERT INTO `dh_category` VALUES ('33', '第三方插件', '9', '', '', '0');
INSERT INTO `dh_category` VALUES ('34', '技术团队', '9', '', '', '0');
INSERT INTO `dh_category` VALUES ('35', '免费图库', '9', '', '', '0');
INSERT INTO `dh_category` VALUES ('36', '代码展示', '9', '', '', '0');
INSERT INTO `dh_category` VALUES ('37', '静态模板', '9', '', '', '0');
INSERT INTO `dh_category` VALUES ('38', '配色相关', '9', '', '', '0');
INSERT INTO `dh_category` VALUES ('41', '在线开源书籍', '9', '', '', '0');
INSERT INTO `dh_category` VALUES ('42', 'H5游戏', '9', '', '', '0');
INSERT INTO `dh_category` VALUES ('43', 'Vue.js', '15', 'javascript', 'javascript', '0');
INSERT INTO `dh_category` VALUES ('44', 'React', '15', 'javascript', 'javascript', '0');
INSERT INTO `dh_category` VALUES ('45', '小程序', '15', 'javascript', 'javascript', '0');
INSERT INTO `dh_category` VALUES ('46', 'Angular', '15', 'angular', 'javascript', '0');
INSERT INTO `dh_category` VALUES ('47', 'Bash', '15', 'bash', 'bash', '0');
INSERT INTO `dh_category` VALUES ('48', '个人博客', '9', '', '', '0');

-- ----------------------------
-- Table structure for dh_code_file
-- ----------------------------
DROP TABLE IF EXISTS `dh_code_file`;
CREATE TABLE `dh_code_file` (
  `cf_id` int(11) NOT NULL AUTO_INCREMENT,
  `cf_name` varchar(50) NOT NULL COMMENT '文件名称',
  `demo_id` int(11) DEFAULT '0' COMMENT '对应DEMOid',
  `cf_code` text NOT NULL COMMENT '代码内容',
  `cf_jstype` varchar(20) DEFAULT '' COMMENT 'js运行的方式',
  `cf_langid` int(11) DEFAULT '0' COMMENT '编程语言',
  `cf_type` varchar(20) NOT NULL DEFAULT '' COMMENT '文件类型',
  PRIMARY KEY (`cf_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dh_code_file
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
  `c_pubdate` datetime DEFAULT NULL COMMENT '时间',
  `c_parentid` int(11) DEFAULT '0',
  `c_seokeyword` varchar(255) DEFAULT NULL,
  `c_seodescription` varchar(255) DEFAULT NULL,
  `c_mdcont` longtext,
  `c_order` int(4) DEFAULT '0',
  `c_linkdate` datetime DEFAULT NULL COMMENT '链接发布时间',
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB AUTO_INCREMENT=185 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of dh_content
-- ----------------------------
INSERT INTO `dh_content` VALUES ('14', 'page', '0', 'HOME', null, null, null, null, '/', '内容预览', null, '2019-07-22 14:45:56', '0', '', 'HOME', '', '0', null);
INSERT INTO `dh_content` VALUES ('34', 'snippet', '16', 'N种JS小数点取整', null, null, 'js 向上取整、向下取整、四舍五入', 'https://www.cnblogs.com/Marydon20170307/p/8831055.html', null, 'Math.floor(5.55) //向下取整 结果为5 \nMath.floor(5.99) //向下取整 结果为5 \nMath.ceil(5.21) //向上取整，结果为6 \nMath.ceil(5.88) //向上取整，结果为6 \nMath.round(5.78) //四舍五入 结果为6 \nMath.round(5.33) //结果为5 ', null, '2019-10-11 13:15:03', '0', 'javascript,小数,取整,整数', null, null, '0', '2018-10-30 08:43:40');
INSERT INTO `dh_content` VALUES ('36', 'collect', '32', 'OSCHINA在线工具', null, null, null, 'http://tool.oschina.net/', null, '为开发设计人员提供在线工具，提供jsbin在线 CSS、JS 调试，在线 API文档查看', null, '2019-07-25 12:03:58', '0', '工具,api,调试', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('37', 'collect', '33', 'Unheap', null, null, null, 'http://www.unheap.com/?badge=all', null, 'Javascript第三方插件网站，包含不同的分类，有输入相关的、菜单相关的、多媒体相关、移动端相关等', null, '2019-07-25 12:03:37', '0', 'jquery,javascript', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('38', 'collect', '31', 'Alloyteam导航', null, null, null, 'http://www.alloyteam.com/nav/', null, '', null, '2019-07-25 12:05:06', '0', '前端,导航', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('39', 'collect', '30', 'Smashing Magazine', null, null, null, 'https://www.smashingmagazine.com/', null, '', null, '2019-07-25 12:06:00', '0', '博客,社区', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('40', 'collect', '10', '现代 JavaScript 教程', null, null, null, 'https://zh.javascript.info/', null, '主要课程包含 2 部分，涵盖了以 JavaScript 作为编程语言并在浏览器中运行。此外还有一系列专题文章。', null, '2019-07-25 12:06:58', '0', 'javascript,学习,教程', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('41', 'collect', '10', '入门教程网（英）', null, null, null, 'https://www.tutorialspoint.com/index.htm', null, 'The Biggest Online Tutorials Library, It\'s all Free', null, '2019-07-25 12:14:00', '0', '', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('42', 'collect', '10', '微信开发者文档', null, null, null, 'https://developers.weixin.qq.com/doc/', null, '微信开放平台,微信小程序,微信小游戏开发文档', null, '2019-07-25 12:24:08', '0', '微信,开发,文档', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('43', 'collect', '30', '一线码农 - 博客园', null, null, null, 'https://www.cnblogs.com/huangxincheng/', null, '', null, '2019-07-25 12:25:05', '0', '技术,博客', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('44', 'collect', '30', '博客园', null, null, null, 'https://www.cnblogs.com/', null, '技术社区，论坛，主要是博客为主', null, '2019-07-25 12:28:57', '0', '社区,论坛,博客', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('45', 'collect', '34', 'IMWeb 前端技术团队', null, null, null, 'https://imweb.io/', null, 'IMWeb 团队隶属腾讯公司，是国内最专业的前端团队之一。', null, '2019-07-25 12:35:35', '0', '前端,技术,团队', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('46', 'collect', '30', '酷壳', null, null, null, 'https://coolshell.cn', null, '一个分享技术见闻，知识，趋势的网站', null, '2019-07-25 12:36:11', '0', '', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('47', 'collect', '48', '张鑫旭的个人博客', null, null, null, 'https://www.zhangxinxu.com/', null, '', null, '2019-08-20 12:01:11', '0', 'html,javascript,css,原理', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('48', 'collect', '48', '阮一峰的网络日志', null, null, null, 'http://www.ruanyifeng.com/blog/', null, '', null, '2019-08-20 12:00:38', '0', '博客', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('49', 'collect', '30', 'CSDN', null, null, null, 'https://www.csdn.net/', null, '中国专业IT社区CSDN (Chinese Software Developer Network) 创立于1999年，致力于为中国软件开发者提供知识传播、在线学习、职业发展等全生命周期服务。 CSDN全职员工超过500名，分布在北京、上海、深圳、武汉、成都、江苏沭阳等地区。', null, '2019-07-25 12:48:03', '0', '程序员,软件开发,区块链,前端开发,后端开发,人工智能', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('50', 'collect', '34', 'Bocoup', null, null, null, 'https://bocoup.com/', null, 'We are a team of project managers and engineers with a track record driving browser and JavaScript interoperability, and shipping interactive applications using the Web Platform. We work with product teams to ship to the web and with browser implementers to improve the platform.（来源:官网）', null, '2019-07-25 12:53:43', '0', '前端,浏览器', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('51', 'collect', '30', 'David Barreto', null, null, null, 'http://david-barreto.com/', null, '', null, '2019-07-25 13:07:37', '0', 'javascript,react,angular', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('52', 'collect', '31', '设计达人网站导航', null, null, null, 'http://hao.shejidaren.com/', null, '设计师网址导航专注分享优秀设计网站、免费无版权限制可商用的高品质素材，设计教程、尺寸规范、配色方案、设计素材和灵感', null, '2019-07-25 13:08:49', '0', '导航,网站', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('53', 'collect', '30', '拉风的博客', null, null, null, 'http://rapheal.sinaapp.com/', null, '小程序前端框架开发负责人，曾在阿里、百度等企业实习工作', null, '2019-07-25 13:12:02', '0', '博客', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('54', 'collect', '34', '前端圈', null, null, null, 'https://fequan.com/', null, '我们成立于2010年1月，在普及W3C标准的基础上，我们一直在努力为广州web前端人员量身打造一个良好的生态圈。未来2~3年的时间内形成既与国际接轨又符合中国国情的web标准体系。', null, '2019-07-25 13:13:36', '0', 'w3c,web', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('55', 'collect', '30', 'w3cmark', null, null, null, 'http://www.w3cmark.com/', null, '', null, '2019-07-25 13:15:14', '0', '前端,css,javascript,python,bug', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('56', 'collect', '13', '微信H5UI框架', null, null, null, 'https://weui.io/', null, 'WeUI 是一套同微信原生视觉体验一致的基础样式库，由微信官方设计团队为微信内网页和微信小程序量身设计，令用户的使用感知更加统一。', null, '2019-07-25 13:16:46', '0', '微信,html5,ui,框架', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('57', 'collect', '32', '免费前端CDN', null, null, null, 'https://www.bootcdn.cn/', null, '稳定、快速、免费的前端开源项目 CDN 加速服务', null, '2019-07-26 08:35:03', '0', 'cdn,前端', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('58', 'collect', '32', 'JSRUN在线编辑器', null, null, null, 'http://jsrun.net/ ', null, 'JSRUN是一款支持手机端的在线JS编辑器,比jsfiddle/scrimba/runjs更强大的HTML/CSS/Javascript在线代码运行工具,js代码在线测试调试，\n支持vue.js/angular.js的在线编辑器 、手机端js编辑器\\ js在线运行工具, 支持ES6开发babel ', null, '2019-07-29 11:08:04', '0', '在线,运行,调试', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('59', 'collect', '32', 'SDemo展示Demo', null, null, null, 'http://www.sdemo.cn', null, '在这里你可以分享(share)学习(study)展示(show)Demo', null, '2019-07-29 11:12:11', '0', 'demo,分享,学习', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('60', 'collect', '31', 'tool.lu', null, null, null, 'https://tool.lu/index.html', null, '', null, '2019-07-29 11:31:15', '0', '运行,编译,导航,工具', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('61', 'collect', '48', 'React 大神博客（英）', null, null, null, 'https://overreacted.io/', null, 'React 大神博客', null, '2019-08-20 11:59:38', '0', 'react', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('62', 'collect', '30', 'Codrops（英）', null, null, null, 'https://tympanus.net/codrops/', null, 'Code Snap', null, '2019-07-29 11:57:26', '0', 'css,前端,javascript', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('63', 'collect', '30', 'Sebastian Müller（英）', null, null, null, 'https://sbstjn.com/', null, 'Hi!  I work as an independent Serverless Consultant, GraphQL Specialist, and Senior Cloud Consultant for superluminar in Hamburg, Germany. I am a passionate Scrum Master, Full Stack Engineer, and Technology Enthusiast who’s fancy about vinyl records, design, people, and vegan food.', null, '2019-07-29 12:01:18', '0', 'serverless,GraphQL', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('65', 'page', '0', 'Blog', null, null, null, null, '/blog', '内容预览', null, '2019-08-06 17:52:26', '0', '前端,后端,服务器,区块链,机器学习,javascript,css,html,php,python,java,lua,nginx', '记录编程路上的点点滴滴', '', '0', null);
INSERT INTO `dh_content` VALUES ('66', 'page', '0', '代码大全', null, null, null, null, '/codesnippet', '内容预览', null, '2019-08-20 12:06:31', '0', '代码,分享,收集', '', '', '0', null);
INSERT INTO `dh_content` VALUES ('67', 'page', '0', '系列教程', null, null, null, null, '/series', '内容预览', null, '2019-10-23 12:03:20', '0', '整理收集来自于不同技术社区的技术类系列文章', '整理收集来自于不同技术社区的技术类系列文章', '', '0', null);
INSERT INTO `dh_content` VALUES ('68', 'page', '0', '资源网站', null, null, null, null, '/links', '内容预览', null, '2019-10-12 17:45:41', '0', '', '', '', '0', null);
INSERT INTO `dh_content` VALUES ('69', 'page', '0', 'Demo展示', null, null, null, null, '/demos', '内容预览', null, '2019-08-06 17:55:39', '0', 'Demo展示', '', '', '0', null);
INSERT INTO `dh_content` VALUES ('71', 'collect', '35', 'ImageFinder', null, null, null, 'https://imagefinder.co/', null, '', null, '2019-07-30 15:50:44', '0', '免费,图片,视频', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('72', 'collect', '36', 'CSS Desk', null, null, null, 'http://cssdeck.com/', null, '', null, '2019-07-30 15:56:18', '0', 'css,代码,展示', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('73', 'collect', '35', 'Wallions', null, null, null, 'https://wallions.com/', null, '', null, '2019-07-30 15:59:00', '0', '免费,图库', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('74', 'collect', '35', 'Undraw', null, null, null, 'https://undraw.co/illustrations', null, '', null, '2019-07-30 16:16:32', '0', '图标,下载,免费', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('75', 'collect', '35', 'Iconstore', null, null, null, 'https://iconstore.co/', null, '', null, '2019-07-30 16:18:04', '0', '图标,免费', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('76', 'collect', '12', 'Roast', null, null, null, 'https://www.roast.io/', null, '', null, '2019-07-30 16:21:51', '0', '静态,生成', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('77', 'collect', '32', 'ZeroSSL-免费SSL证书', null, null, null, 'https://zerossl.com/', null, '', null, '2019-07-31 09:45:39', '0', 'ssl,免费', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('78', 'collect', '32', 'TinyCert免费ssl证书', null, null, null, 'https://www.tinycert.org', null, '', null, '2019-07-31 09:46:16', '0', '免费,ssl', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('79', 'collect', '37', 'HTML5 UP', null, null, null, 'https://html5up.net/', null, '', null, '2019-07-31 09:49:32', '0', 'html5,模板', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('80', 'collect', '32', '生成loading', null, null, null, 'https://loading.io/', null, '', null, '2019-07-31 09:51:25', '0', 'svg,css', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('81', 'collect', '38', 'Color Koala', null, null, null, 'https://colorkoala.xyz/', null, '', null, '2019-07-31 09:52:22', '0', '配色', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('82', 'collect', '32', '静态网站部署', null, null, null, 'http://staticsiteboilerplate.com/', null, '', null, '2019-07-31 10:00:23', '0', '静态,部署', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('83', 'collect', '38', 'LOLCOLORS', null, null, null, 'https://www.webdesignrankings.com/resources/lolcolors/', null, '', null, '2019-07-31 10:01:43', '0', '配色', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('84', 'collect', '32', 'Pixels-设计模板', null, null, null, 'https://klart.io/pixels', null, '', null, '2019-07-31 10:04:57', '0', '设计', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('85', 'collect', '38', 'Colors Klart', null, null, null, 'https://klart.io/colors/', null, '', null, '2019-07-31 10:06:30', '0', '配色', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('86', 'collect', '38', ' CoolHue 2.0', null, null, null, 'https://colorhunt.co/palettes', null, '', null, '2019-07-31 10:08:04', '0', '配色', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('87', 'collect', '30', 'Keyframes', null, null, null, 'https://keyframes.net', null, '基于CSS动画特性的聊天室', null, '2019-07-31 10:09:50', '0', 'css,动画,聊天室,社区', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('88', 'collect', '38', 'Color Hunt', null, null, null, 'https://colorhunt.co/palettes', null, '', null, '2019-07-31 10:10:41', '0', '配色', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('89', 'collect', '38', 'CoolHue 2.0', null, null, null, 'https://webkul.github.io/coolhue/', null, '', null, '2019-07-31 10:12:39', '0', '配色', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('90', 'collect', '38', 'WebGradients', null, null, null, 'https://webgradients.com/', null, '', null, '2019-07-31 10:14:40', '0', '配色', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('91', 'collect', '32', 'CSS参考网站', null, null, null, 'https://cssreference.io/', null, '', null, '2019-07-31 10:17:48', '0', 'css', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('92', 'collect', '30', 'CSS Wizardry', null, null, null, 'https://csswizardry.com/', null, '', null, '2019-07-31 10:33:11', '0', 'css', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('94', 'collect', '10', '卡片式编程教学', null, null, null, 'https://www.flashcardsfordevelopers.com/', null, '', null, '2019-07-31 10:52:49', '0', '', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('95', 'collect', '10', 'Flexbox开发教程', null, null, null, 'https://www.flexboxpatterns.com/', null, '', null, '2019-07-31 10:53:18', '0', 'flex,css3', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('96', 'collect', '32', 'Coding', null, null, null, 'https://coding.net/', null, ' CODING 是扣钉网络科技有限公司旗下一站式云端软件服务平台', null, '2019-08-05 17:05:10', '0', '项目管理,需求管理,缺陷管理,Bug Tracking,Bug管理', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('97', 'collect', '30', '前端进阶', null, null, null, 'https://muyiy.vip/', null, '深入介绍Javascript相关的原理，作用域，调用栈，防抖操作等', null, '2019-08-06 17:18:46', '0', '前端,javascript,基础,原理', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('98', 'page', '0', '在线工具', null, null, null, null, '/tools', '内容预览', null, '2019-08-06 17:56:47', '0', '在线运行,编译', '', '', '0', null);
INSERT INTO `dh_content` VALUES ('99', 'article', '0', ' JS去掉数组中重复元素的三种方法', null, '教程,javascript,es6', null, null, 'js-array-remove-3-methods', '<h2 id=\"第一种方法：使用-new-set\">第一种方法：使用 new Set</h2>\n<p>Set对象有个特点，不能包含重复元素</p>\n<pre><code class=\"language-javascript\">let arr = [1,1,1,2,2,3,3,3];\n\nconsole.log([...(new Set(arr))]);\n//output: [1,2,3]</code></pre>\n<h2 id=\"第二种方法：使用arraymap\">第二种方法：使用Array.map</h2>\n<p>数组对象有个map方法，传入一个回调函数，这个回调函数均作用于数组中的每个元素</p>\n<pre><code class=\"language-javascript\">let arr = [1,1,1,2,2,3,3,3];\nlet res = [];\narr.map(function(item) {\n    !res.include(item) &amp;&amp; res.push(item);\n});\n//output: [1,2,3]</code></pre>\n<h2 id=\"第三种方式：使用arrayfilter\">第三种方式：使用Array.filter</h2>\n<p>数组对象有个filter方法，用于根据自定义规则过滤数组元素，同样需要传递一个回调函数，这个回调函数均作用于每个数组元素，最终返回一个布尔值来表示该元素是否符合规则</p>\n<pre><code class=\"language-javascript\">let arr = [1,1,1,2,2,3,3,3];\nlet res = arr.filter(function(item , index) {\n    return arr.indexOf(item)&gt;=i;\n});\nconsole.log(res);\n//output: [1,2,3]</code></pre>\n', '列举一些处理数组重复元素的方法', '2019-08-07 10:11:32', '0', 'javascript,数组,删除,ES6,es6,重复', '', '## 第一种方法：使用 new Set\n\nSet对象有个特点，不能包含重复元素\n\n```javascript\nlet arr = [1,1,1,2,2,3,3,3];\n\nconsole.log([...(new Set(arr))]);\n//output: [1,2,3]\n```\n\n## 第二种方法：使用Array.map\n\n数组对象有个map方法，传入一个回调函数，这个回调函数均作用于数组中的每个元素\n\n```javascript\nlet arr = [1,1,1,2,2,3,3,3];\nlet res = [];\narr.map(function(item) {\n    !res.include(item) && res.push(item);\n});\n//output: [1,2,3]\n```\n\n## 第三种方式：使用Array.filter\n\n数组对象有个filter方法，用于根据自定义规则过滤数组元素，同样需要传递一个回调函数，这个回调函数均作用于每个数组元素，最终返回一个布尔值来表示该元素是否符合规则\n\n```javascript\nlet arr = [1,1,1,2,2,3,3,3];\nlet res = arr.filter(function(item , index) {\n    return arr.indexOf(item)>=i;\n});\nconsole.log(res);\n//output: [1,2,3]\n```', '0', null);
INSERT INTO `dh_content` VALUES ('100', 'article', '0', 'Gulp使用入门', null, 'gulp,工程化,自动化', null, null, 'gulp-use-begin', '<p>Gulp主要是用于完成一些前端自动化任务的工具，比如构建项目，编译程序，压缩文件，生成目标文件等。</p>\n<h2 id=\"安装gulp\">安装gulp</h2>\n<pre><code class=\"language-javascript\">npm i --g gulp gulp-cli</code></pre>\n<h2 id=\"执行gulp\">执行gulp</h2>\n<p>新建一个gulpfile.js文件，输入以下代码</p>\n<pre><code class=\"language-javascript\">var gulp = require(\'gulp\');\n\ngulp.task(\'default\', async function() {\n  // 将你的默认的任务代码放在这\n  console.log(\'default\');\n});</code></pre>\n<h2 id=\"执行gulp命令，运行程序\">执行gulp命令，运行程序</h2>\n<pre><code class=\"language-javascript\">&gt; gulp\n\n//命令行输出：\n[22:03:09] Using gulpfile D:\\DEV\\PROJECTS\\gulp\\gulpfile.js\n[22:03:09] Starting \'default\'...\ndefault\n[22:03:09] Finished \'default\' after 18 ms</code></pre>\n<h2 id=\"几个重要的方法\">几个重要的方法</h2>\n<ul>\n<li>gulp.task() 自定义任务流，处理文件</li>\n<li>gulp.src() 加载本地文件</li>\n<li>gulp.dest() 最终生成文件的目录</li>\n</ul>\n<h2 id=\"gulp插件\">gulp插件</h2>\n<p>插件也是gulp项目中的一个重要的元素，大部分的gulp任务都是通过调用插件来完成</p>\n<p>安装插件：</p>\n<pre><code>npm i --save-dev gulp-uglify</code></pre><p>加载插件：</p>\n<pre><code>var uglify = require(\'gulp-uglify\');</code></pre><p>调用插件</p>\n<pre><code>gulp.pipe(uglify());</code></pre><h2 id=\"完成一个简单的任务：压缩文件\">完成一个简单的任务：压缩文件</h2>\n<p>新建一个src目录，在目录中新建文件 demo.js，输入以下代码</p>\n<pre><code class=\"language-javascript\">console.log(\'a\');\nalert(\'b\');</code></pre>\n<p>修改gulpfile.js</p>\n<pre><code class=\"language-javascript\">//加载gulp\nvar gulp = require(\'gulp\');\n//加载gulp压缩插件\nvar uglify = require(\'gulp-uglify\');\n\ngulp.task(\'default\', async function() {\n  //定义任务\n  return gulp.src(\'src/*.js\') //加载自定目录文件\n      .pipe(uglify()) //执行压缩任务\n      .pipe(gulp.dest(\'dest\')); //输出结果到指定目录\n});</code></pre>\n<p>命令行执行：</p>\n<pre><code class=\"language-cmd\">&gt; gulp\n\n[23:16:14] Using gulpfile D:\\DEV\\PROJECTS\\gulp\\gulpfile.js\n[23:16:14] Starting \'default\'...\n开始压缩文件\n[23:16:14] Finished \'default\' after 20 ms\n</code></pre>\n<p>参考最终目录结构：</p>\n<pre><code class=\"language-javascript\">dest  //输出结果目录\n  |- demo.js\nnode_modules  //项目依赖模块\nsrc //被gulp指定处理的目录\n  |- demo.js\ngulpfile.js //定义gulp任务的主程序\npackage.json\npackage-lock.json</code></pre>\n', 'Gulp主要是用于完成一些前端自动化任务的工具，比如构建项目，编译程序，压缩文件，生成目标文件等。', '2019-08-08 11:00:52', '0', 'gulp,前端,工程,自动化', '', 'Gulp主要是用于完成一些前端自动化任务的工具，比如构建项目，编译程序，压缩文件，生成目标文件等。\n\n## 安装gulp\n\n```javascript\nnpm i --g gulp gulp-cli\n```\n\n## 执行gulp\n新建一个gulpfile.js文件，输入以下代码\n```javascript\nvar gulp = require(\'gulp\');\n\ngulp.task(\'default\', async function() {\n  // 将你的默认的任务代码放在这\n  console.log(\'default\');\n});\n```\n## 执行gulp命令，运行程序\n```javascript\n> gulp\n\n//命令行输出：\n[22:03:09] Using gulpfile D:\\DEV\\PROJECTS\\gulp\\gulpfile.js\n[22:03:09] Starting \'default\'...\ndefault\n[22:03:09] Finished \'default\' after 18 ms\n```\n\n## 几个重要的方法\n\n- gulp.task() 自定义任务流，处理文件\n- gulp.src() 加载本地文件\n- gulp.dest() 最终生成文件的目录\n\n## gulp插件\n\n插件也是gulp项目中的一个重要的元素，大部分的gulp任务都是通过调用插件来完成\n\n安装插件：\n```\nnpm i --save-dev gulp-uglify\n```\n加载插件：\n```\nvar uglify = require(\'gulp-uglify\');\n```\n调用插件\n```\ngulp.pipe(uglify());\n```\n\n## 完成一个简单的任务：压缩文件\n新建一个src目录，在目录中新建文件 demo.js，输入以下代码\n```javascript\nconsole.log(\'a\');\nalert(\'b\');\n```\n\n修改gulpfile.js\n```javascript\n//加载gulp\nvar gulp = require(\'gulp\');\n//加载gulp压缩插件\nvar uglify = require(\'gulp-uglify\');\n\ngulp.task(\'default\', async function() {\n  //定义任务\n  return gulp.src(\'src/*.js\') //加载自定目录文件\n  	.pipe(uglify()) //执行压缩任务\n  	.pipe(gulp.dest(\'dest\')); //输出结果到指定目录\n});\n```\n\n命令行执行：\n```cmd\n> gulp\n\n[23:16:14] Using gulpfile D:\\DEV\\PROJECTS\\gulp\\gulpfile.js\n[23:16:14] Starting \'default\'...\n开始压缩文件\n[23:16:14] Finished \'default\' after 20 ms\n\n```\n\n参考最终目录结构：\n```javascript\ndest  //输出结果目录\n  |- demo.js\nnode_modules  //项目依赖模块\nsrc //被gulp指定处理的目录\n  |- demo.js\ngulpfile.js //定义gulp任务的主程序\npackage.json\npackage-lock.json\n```', '0', null);
INSERT INTO `dh_content` VALUES ('101', 'article', '0', 'Javascript备忘录：常用keycode映射表', null, 'javascript', null, null, 'javascript-keycode-map-table', '<p><strong>表格</strong></p>\n<table>\n<thead>\n<tr>\n<th>键盘按钮</th>\n<th>keycode</th>\n</tr>\n</thead>\n<tbody><tr>\n<td>shift</td>\n<td>16</td>\n</tr>\n<tr>\n<td>Ctrl</td>\n<td>17</td>\n</tr>\n<tr>\n<td>Alt</td>\n<td>18</td>\n</tr>\n<tr>\n<td>大小写切换（capslock）</td>\n<td>20</td>\n</tr>\n<tr>\n<td>退格（backspace）</td>\n<td>8</td>\n</tr>\n<tr>\n<td>tab</td>\n<td>9</td>\n</tr>\n<tr>\n<td>回车</td>\n<td>13</td>\n</tr>\n<tr>\n<td>退出</td>\n<td>27</td>\n</tr>\n<tr>\n<td>空格</td>\n<td>32</td>\n</tr>\n<tr>\n<td>PageUp</td>\n<td>33</td>\n</tr>\n<tr>\n<td>PageDdown</td>\n<td>34</td>\n</tr>\n<tr>\n<td>Home</td>\n<td>36</td>\n</tr>\n<tr>\n<td>End</td>\n<td>35</td>\n</tr>\n<tr>\n<td>Insert</td>\n<td>45</td>\n</tr>\n<tr>\n<td>Left（方向向左）</td>\n<td>37</td>\n</tr>\n<tr>\n<td>Up（方向向上）</td>\n<td>38</td>\n</tr>\n<tr>\n<td>Right（方向向右）</td>\n<td>39</td>\n</tr>\n<tr>\n<td>Down（方向向下）</td>\n<td>40</td>\n</tr>\n<tr>\n<td>Delete（删除）</td>\n<td>46</td>\n</tr>\n<tr>\n<td>NumLock</td>\n<td>144</td>\n</tr>\n<tr>\n<td>F1~F12</td>\n<td>112~123</td>\n</tr>\n<tr>\n<td>`</td>\n<td>192</td>\n</tr>\n<tr>\n<td>=</td>\n<td>187</td>\n</tr>\n<tr>\n<td>-</td>\n<td>189</td>\n</tr>\n<tr>\n<td>/</td>\n<td>191</td>\n</tr>\n<tr>\n<td>.</td>\n<td>190</td>\n</tr>\n</tbody></table>\n<p><strong>JS代码</strong></p>\n<pre><code class=\"language-javascript\">    var keymap = {\n        \'Shift\': 16,\n        \'Control\': 17,\n        \'Alt\': 18,\n        \'CapsLock\': 20,\n        \'BackSpace\': 8,\n        \'Tab\': 9,\n        \'Enter\': 13,\n        \'Esc\': 27,\n        \'Space\': 32,\n        \'PageUp\': 33,\n        \'PageDown\': 34,\n        \'End\': 35,\n        \'Home\': 36,\n        \'Insert\': 45,\n        \'Left\': 37,\n        \'Up\': 38,\n        \'Right\': 39,\n        \'Down\': 40,\n        \'Delete\': 46,\n        \'NumLock\': 144,\n        \'F1\': 112,\n        \'F2\': 113,\n        \'F3\': 114,\n        \'F4\': 115,\n        \'F5\': 116,\n        \'F6\': 117,\n        \'F7\': 118,\n        \'F8\': 119,\n        \'F9\': 120,\n        \'F10\': 121,\n        \'F11\': 122,\n        \'F12\': 123,\n        \'`\': 192,\n        \'=\': 187,\n        \'-\': 189,\n        \'/\': 191,\n        \'.\': 190\n    };</code></pre>\n', '在js实际开发中，需要监听键盘事件，通过事件对象的keycode属性判断再键盘上输入的内容，文中列出常用的keycode所对应的输入', '2019-08-08 10:57:36', '0', 'javascript,键盘,keycode,事件', '', '**表格**\n\n| 键盘按钮 | keycode |\n| --- | --- |\n| shift | 16 |\n| Ctrl | 17 |\n| Alt | 18 |\n| 大小写切换（capslock） | 20 |\n| 退格（backspace） | 8 |\n| tab | 9 |\n| 回车 | 13 |\n| 退出 | 27 |\n| 空格 | 32 |\n| PageUp | 33 |\n| PageDdown | 34 |\n| Home | 36 |\n| End | 35 |\n| Insert | 45 |\n| Left（方向向左） | 37 |\n| Up（方向向上） | 38 |\n| Right（方向向右） | 39 |\n| Down（方向向下） | 40 |\n| Delete（删除） | 46 |\n| NumLock | 144 |\n| F1~F12 | 112~123 |\n| ` | 192 |\n| = | 187 |\n| - | 189 |\n| / | 191 |\n| . | 190 |\n\n**JS代码**\n\n```javascript\n    var keymap = {\n        \'Shift\': 16,\n        \'Control\': 17,\n        \'Alt\': 18,\n        \'CapsLock\': 20,\n        \'BackSpace\': 8,\n        \'Tab\': 9,\n        \'Enter\': 13,\n        \'Esc\': 27,\n        \'Space\': 32,\n        \'PageUp\': 33,\n        \'PageDown\': 34,\n        \'End\': 35,\n        \'Home\': 36,\n        \'Insert\': 45,\n        \'Left\': 37,\n        \'Up\': 38,\n        \'Right\': 39,\n        \'Down\': 40,\n        \'Delete\': 46,\n        \'NumLock\': 144,\n        \'F1\': 112,\n        \'F2\': 113,\n        \'F3\': 114,\n        \'F4\': 115,\n        \'F5\': 116,\n        \'F6\': 117,\n        \'F7\': 118,\n        \'F8\': 119,\n        \'F9\': 120,\n        \'F10\': 121,\n        \'F11\': 122,\n        \'F12\': 123,\n        \'`\': 192,\n        \'=\': 187,\n        \'-\': 189,\n        \'/\': 191,\n        \'.\': 190\n    };\n```', '0', null);
INSERT INTO `dh_content` VALUES ('102', 'collect', '41', '编写可维护的、可扩展的CSS（英）', null, null, null, 'https://cssguidelin.es/', null, '', null, '2019-08-07 14:18:51', '0', 'css,维护,灵活', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('103', 'collect', '41', '基于浏览器的高性能网络', null, null, null, 'https://hpbn.co/', null, '每个开发人员都需要知道各类网络和传输协议', null, '2019-08-07 14:23:24', '0', '网络,http,tcp,udp,wifi,4g', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('104', 'collect', '41', 'ECMAScript 6 入门', null, null, null, 'http://es6.ruanyifeng.com/', null, '', null, '2019-08-07 14:24:48', '0', 'es6,javascript', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('105', 'collect', '32', '前端属性检测', null, null, null, 'https://www.caniuse.com/', null, '用于检测当前浏览器是否支持某个特性', null, '2019-08-07 14:29:16', '0', 'html5,css3,javascript', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('106', 'collect', '41', '格鲁夫给经理人的第一课', null, null, null, 'http://blog.devtang.com/2016/06/06/high-output-management-summary/', null, '', null, '2019-08-07 14:30:05', '0', '管理', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('107', 'collect', '34', '钉粑前端团队', null, null, null, 'http://tinper.org/', null, '', null, '2019-08-07 14:38:59', '0', 'html,css,javascript', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('108', 'collect', '13', 'Knockoutjs', null, null, null, 'https://knockoutjs.com/', null, '', null, '2019-08-07 16:46:04', '0', 'mvvm,框架', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('109', 'collect', '13', '钉粑 Tinper', null, null, null, 'http://tinper.org/', null, '', null, '2019-08-07 16:47:39', '0', '前端,企业,基础', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('110', 'collect', '13', 'Vue.js', null, null, null, 'https://cn.vuejs.org/', null, '', null, '2019-08-07 16:49:24', '0', 'vue,javascript,框架', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('111', 'collect', '13', 'React.js', null, null, null, 'https://react.docschina.org/', null, '', null, '2019-08-07 16:52:26', '0', 'react,javascript', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('112', 'collect', '36', 'HTML & CSS特效', null, null, null, 'https://littlesnippets.net/', null, '', null, '2019-08-07 16:55:06', '0', 'html,javascript,css', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('113', 'collect', '13', '基于React的原型设计框架 - Framer X', null, null, null, 'https://www.framer.com', null, '', null, '2019-08-07 16:58:38', '0', 'react', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('114', 'collect', '32', 'Iconfont-阿里巴巴矢量图标库', null, null, null, 'https://www.iconfont.cn/', null, '', null, '2019-08-07 17:00:10', '0', 'iconfont', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('115', 'collect', '30', 'Dev Awesome Js周报', null, null, null, 'https://devawesome.io/archive', null, '', null, '2019-08-07 17:59:44', '0', 'javascript,周报', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('116', 'collect', '32', 'Froont - 在线网页设计', null, null, null, 'http://froont.com/', null, '', null, '2019-08-07 18:01:11', '0', '网页,设计', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('117', 'collect', '32', 'Canva - 在线平面设计', null, null, null, 'https://www.canva.cn/', null, '', null, '2019-08-07 18:02:45', '0', '平面,设计', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('118', 'collect', '32', 'Easel - 在线信息图设计', null, null, null, 'https://www.easel.ly', null, '', null, '2019-08-07 18:03:43', '0', '信息图,设计', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('119', 'collect', '32', 'Infogram - 在线信息图设计', null, null, null, 'https://infogram.com/', null, '', null, '2019-08-07 18:05:17', '0', '信息图,设计', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('120', 'collect', '10', 'Mozilla', null, null, null, 'https://developer.mozilla.org/', null, '', null, '2019-08-07 18:06:18', '0', 'web,开发', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('121', 'collect', '10', 'Web开发教程', null, null, null, 'https://webplatform.github.io/', null, '', null, '2019-08-07 18:07:50', '0', '', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('122', 'collect', '13', 'CSS动画库', null, null, null, 'http://justinaguilar.com/animations/', null, '', null, '2019-08-07 18:12:49', '0', 'css3,动画', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('123', 'collect', '13', 'Picnic - 轻量级CSS框架', null, null, null, 'https://picnicss.com/', null, '', null, '2019-08-07 18:12:43', '0', 'css3', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('124', 'collect', '13', 'Bulma - CSSFlex框架', null, null, null, 'https://bulma.io/', null, '', null, '2019-08-07 18:13:45', '0', 'css,flex', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('125', 'collect', '38', 'Material Design Palette', null, null, null, 'https://www.materialpalette.com/', null, '', null, '2019-08-07 18:19:35', '0', '配色', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('126', 'collect', '10', ' Devhints.io', null, null, null, 'https://devhints.io/', null, '', null, '2019-08-07 18:26:47', '0', 'coding', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('127', 'collect', '13', 'Vuetify', null, null, null, 'https://vuetifyjs.com/zh-Hans/', null, '', null, '2019-08-07 18:28:30', '0', 'vue', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('128', 'collect', '30', '免费教程社区（英文）', null, null, null, 'https://tutsplus.com/', null, '', null, '2019-08-07 18:30:30', '0', '免费,教程', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('129', 'collect', '10', 'HTML&CSS教程', null, null, null, 'https://learn.shayhowe.com/', null, '', null, '2019-08-07 18:31:43', '0', 'html,css', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('130', 'collect', '30', 'Tutorialzine', null, null, null, 'https://tutorialzine.com/articles', null, '', null, '2019-08-07 18:33:45', '0', '前端', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('131', 'collect', '42', 'Connection', null, null, null, 'http://connection.ivank.net/', null, '', null, '2019-08-08 09:06:12', '0', '游戏', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('132', 'collect', '42', 'Shellheroes', null, null, null, 'http://shellheroes.csharks.com/', null, '', null, '2019-08-08 09:07:29', '0', '游戏,html5,h5', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('133', 'collect', '42', 'pappu-pakia', null, null, null, 'http://khele.in/pappu-pakia/', null, '', null, '2019-08-08 09:08:08', '0', '游戏,html5,h5', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('134', 'collect', '42', 'Agot', null, null, null, 'http://www.zamolski.com/agot/', null, '', null, '2019-08-08 09:10:58', '0', 'html5,游戏,h5', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('135', 'collect', '42', 'Magician - Fairy Rescue', null, null, null, 'http://www.relfind.com/game/', null, '', null, '2019-08-08 09:12:48', '0', 'html5,游戏,h5', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('136', 'collect', '42', 'Front Invaders', null, null, null, 'http://end3r.com/games/frontinvaders/', null, '', null, '2019-08-08 09:13:45', '0', '游戏,html5,h5', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('137', 'collect', '13', 'Bootstrap4', null, null, null, 'https://v4.bootcss.com/', null, '', null, '2019-08-08 09:16:41', '0', '前端,css3,javascript,bootstrap', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('138', 'collect', '30', 'Design bombs', null, null, null, 'https://www.designbombs.com/', null, '', null, '2019-08-08 09:22:26', '0', 'web,开发,社区', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('139', 'collect', '30', '前端里', null, null, null, 'http://www.yyyweb.com/', null, '', null, '2019-08-08 09:24:46', '0', 'web,开发,资源,分享', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('141', 'collect', '13', 'Design System Template', null, null, null, 'https://codyhouse.co/', null, '', null, '2019-08-08 09:29:28', '0', 'html,css', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('142', 'collect', '30', 'Creative Tim', null, null, null, 'https://blog.creative-tim.com/', null, '', null, '2019-08-08 09:32:02', '0', 'web,开发', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('143', 'collect', '34', 'Froala', null, null, null, 'https://www.froala.com/', null, '', null, '2019-08-08 09:44:30', '0', 'page,设计,页面,编辑器', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('144', 'collect', '30', 'CodeCondo', null, null, null, 'https://codecondo.com', null, '', null, '2019-08-08 09:46:32', '0', 'web,开发', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('145', 'collect', '35', '免费图床', null, null, null, 'https://imgchr.com', null, '', null, '2019-08-08 10:17:41', '0', '图片,jpg,svg,gif,png', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('146', 'collect', '13', 'Ripple.js - 点击动效', null, null, null, 'http://jakiestfu.github.io/Ripple.js/demo/', null, '', null, '2019-08-08 14:11:09', '0', 'javascript,点击,动效', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('147', 'collect', '34', 'Tnfe - 前端技术图解', null, null, null, 'https://github.com/Tnfe', null, '', null, '2019-08-08 14:47:22', '0', '腾讯,前端,团队', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('148', 'collect', '30', 'JS前端开发资源', null, null, null, 'https://www.kancloud.cn/jikeytang/qq/81134', null, '', null, '2019-08-08 14:56:45', '0', 'javascript,开发,资源', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('152', 'collect', '32', 'Font Awesome', null, null, null, 'http://fontawesome.dashgame.com', null, '一套绝佳的图标字体库和CSS框架，Font Awesome为您提供可缩放的矢量图标，您可以使用CSS所提供的所有特性对它们进行更改，包括：大小、颜色、阴影或者其它任何支持的效果。', null, '2019-08-09 14:58:38', '0', 'web,字体', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('153', 'collect', '13', 'Gulp中文网站', null, null, null, 'https://www.gulpjs.com.cn/', null, '', null, '2019-08-09 15:10:29', '0', '自动化,工程,构建', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('154', 'collect', '10', '全栈文档', null, null, null, 'https://www.quanzhanketang.com/default.html', null, '', null, '2019-08-09 15:53:23', '0', 'html,php,javascript,css', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('162', 'collect', '34', 'FEX前端周刊', null, null, null, 'http://fex.baidu.com/weekly/', null, '', null, '2019-08-12 14:41:24', '0', '', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('163', 'collect', '34', '腾讯Alloyteam', null, null, null, 'http://www.alloyteam.com/page/0/', null, '', null, '2019-08-12 15:43:38', '0', '', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('166', 'collect', '30', 'Infoq中文站', null, null, null, 'https://www.infoq.cn/', null, '', null, '2019-08-20 11:48:01', '0', '社区,博客', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('167', 'collect', '48', 'Dejavudwh', null, null, null, 'https://www.cnblogs.com/secoding/', null, '', null, '2019-08-20 11:58:34', '0', 'javascript,java,数据结构', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('168', 'collect', '31', '印记中文', null, null, null, 'https://docschina.org/', null, '', null, '2019-08-21 15:34:42', '0', '', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('169', 'collect', '34', '凹凸实验室-京东前端', null, null, null, 'https://aotu.io/', null, '', null, '2019-08-21 15:35:12', '0', '', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('170', 'collect', '10', 'Welcome to DockerLabs', null, null, null, 'https://dockerlabs.collabnix.com/', null, 'Docker在线教程', null, '2019-09-04 14:29:56', '0', 'docker,Kubernetes', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('171', 'collect', '48', 'I code it', null, null, null, 'http://icodeit.org/blog/archives/', null, '', null, '2019-09-06 12:57:08', '0', '前端,后台,测试', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('172', 'collect', '30', 'Webkit Blog', null, null, null, 'https://webkit.org/blog/', null, '', null, '2019-09-06 13:06:42', '0', 'webkit,html5,javascript', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('173', 'collect', '10', 'JavaScript 标准参考教程（alpha）', null, null, null, 'http://javascript.ruanyifeng.com/', null, 'Javascript基础开发教程', null, '2019-09-17 14:43:02', '0', 'javascript,教程', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('174', 'collect', '10', 'javascript 编程精髓', null, null, null, 'http://eloquentjavascript.net/', null, '介绍javascript编程，计算机原理相关内容', null, '2019-09-17 14:56:32', '0', 'javascript,基础,教程', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('175', 'collect', '30', 'CSS Tricks', null, null, null, 'https://css-tricks.com/', null, 'CSS3技术社区', null, '2019-09-17 15:23:08', '0', 'css3,样式', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('176', 'collect', '30', 'IBM开发者中心', null, null, null, 'https://www.ibm.com/developerworks/cn/', null, 'IBM开发者中心', null, '2019-09-17 15:31:08', '0', '编程,开发,社区,开发,教程,工具,社区', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('177', 'collect', '10', '在线做实验，高效学编程 - 实验楼', null, null, null, 'https://www.shiyanlou.com/', null, '实验楼是国内领先的IT在线编程及在线实训学习平台，专业导师提供精选的实践项目，创新的技术使得学习者无需配置繁琐的本地环境，随时在线流畅使用。以就业为导向，提供编程、运维、测试、云计算、大数据、数据库等全面的IT技术动手实践环境，提供Linux、Python、Java、C语言、Node.js、Hadoop、PHP、Docker、Git、R、SQL、MongoDB、Redis、Swift、Spark等千门热门课程。', null, '2019-09-17 15:57:11', '0', '教程,在线,编程', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('178', 'collect', '31', '前端导航网址', null, null, null, 'http://www.daqianduan.com/nav', null, '', null, '2019-09-17 16:01:12', '0', '前端导航', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('179', 'collect', '10', 'Free How-To Tutorials', null, null, null, 'https://tutsplus.com/tutorials', null, 'Discover over 28,180 free how-to articles and tutorials. Over five million students shape their future with our free tutorials every month. What would you like to learn?', null, '2019-10-11 17:03:43', '0', '教程', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('180', 'article', '0', 'LESS基本语法', null, 'css', null, null, 'less-start', '<h1 id=\"介绍\">介绍</h1>\n<p>以编程的方式编写CSS，语法简洁，便于维护<br>less的语法不能直接被浏览器所识别，需要通过编译成CSS代码，才能被浏览器识别</p>\n<h1 id=\"通过简单入门来了解less的用法\">通过简单入门来了解Less的用法</h1>\n<p>html代码清单</p>\n<ul>\n<li>使用link标签引入less文件，rel属性设置为<code>sytlesheet/less</code></li>\n<li>在link标签下引入less.js 编译程序</li>\n</ul>\n<pre><code class=\"language-html\">&lt;link rel=\"stylesheet/less\" href=\"style.less\" /&gt;\n&lt;script src=\"//cdnjs.cloudflare.com/ajax/libs/less.js/2.5.3/less.min.js\"&gt;&lt;/script&gt;\n\n&lt;div class=\"less_box\"&gt;Hello World&lt;/div&gt;</code></pre>\n<p>style.less，将CSS属性值定义为变量，可以复用于其他的样式</p>\n<pre><code class=\"language-less\">@bg001:#000;\n@w:100px;\n@tfff:#fff;\n\n.less_box {\n    width: @w;\n    height: @w;\n    background-color: @bg001;\n    color:@tfff;\n}</code></pre>\n<p><a name=\"K7UMr\"></a></p>\n<h1 id=\"基本语法\">基本语法</h1>\n<p><a name=\"5RwQv\"></a></p>\n<h2 id=\"变量\">变量</h2>\n<p>作用：定义一系列使用频率高的属性值，提供可维护性<br>语法：<code>@变量名:变量值</code></p>\n<p><a name=\"GqHe0\"></a></p>\n<h3 id=\"定义属性值\">定义属性值</h3>\n<pre><code class=\"language-less\">//声明一个名为w, 值为100px的变量\n@w:200px;\n\n.box {\n  width:@w; //--&gt; width:200px\n  height:@w; //--&gt; height:200px\n}</code></pre>\n<p><a name=\"oLmem\"></a></p>\n<h3 id=\"定义属性名\">定义属性名</h3>\n<pre><code class=\"language-less\">//定义属性值 , 定义一个名为property，值为color的属性名字符串\n@property:color;\n//使用的时候，必须使用一对大括号\'{\'和\'}\'包含起来\n.box {\n  @{property}:#fff; //--&gt; color:#fff\n  background-@{property}:red; //--&gt; background-color:red\n}</code></pre>\n<p><a name=\"wBG41\"></a></p>\n<h3 id=\"定义路径\">定义路径</h3>\n<pre><code class=\"language-less\">//定义图片路径, 必须将路径包含在一对单引号或者双引号中\n@imgPath:\'../images\';\n//使用的时候，必须使用一对大括号\'{\'和\'}\'包含起来\n.box {\n  background:url(\'@{imgPath}/1.png\'); //--&gt; background:url(../images/1.png);\n}</code></pre>\n<p><a name=\"DY0U4\"></a></p>\n<h2 id=\"混合写法\">混合写法</h2>\n<p>样式复用：将已定义的CSS选择器，放到某个样式中，这个样式则具有该选中器所有的样式</p>\n<p><a name=\"KpfpS\"></a></p>\n<h3 id=\"基本用法\">基本用法</h3>\n<pre><code class=\"language-less\">.text {\n  color:red;\n  font-size:16px;\n}\n\n.text1 {\n    width:200px;\n  height:200px;\n  .text; //引用了.text的所有样式\n}\n等价于：\n.text1 {\n    width:200px;\n  height:200px;\n  color:red; //.text中定于的样式\n  font-size:16px;//.text中定于的样式\n}\n</code></pre>\n<p><a name=\"4SBUI\"></a></p>\n<h3 id=\"混合带参数\">混合带参数</h3>\n<p>定义类似函数的，可传参的写法</p>\n<pre><code class=\"language-less\">.bg(@bg) { background:@bg; }\n.box { .bg(red); }\n//等价于\n.box { background:red; }</code></pre>\n<p><a name=\"pRAA4\"></a></p>\n<h3 id=\"参数带默认值\">参数带默认值</h3>\n<pre><code class=\"language-less\">.bg(@bg:red) { background:@bg; }\n.box { .bg(); }\n//等价于\n.box { background:red; }</code></pre>\n<p><a name=\"YX8DT\"></a></p>\n<h2 id=\"匹配模式\">匹配模式</h2>\n<pre><code class=\"language-less\">//定义匹配规则\n.fcolor(red) {\n    color:red;\n}\n.fcolor(green) {\n    color:green;\n}\n.fcolor(blue) {\n    color:blue;\n}\n//引用\n.demo {\n    .fcolor(blue)\n}\n/** 实际效果 **/\n.demo {\n    color:blue\n}</code></pre>\n<p><a name=\"Y3Jjq\"></a></p>\n<h2 id=\"运算规则\">运算规则</h2>\n<pre><code class=\"language-less\">/** 定义变量 **/\n@test_1:300px;\n.box_02 {\n  width:@test_1*4; /** width:1200px **/\n}</code></pre>\n<p><a name=\"xe3gU\"></a></p>\n<h1 id=\"\"></h1>\n<p><a name=\"2TrRS\"></a></p>\n<h2 id=\"嵌套规则\">嵌套规则</h2>\n<pre><code class=\"language-less\">ul.list {\n    width:600px;\n  padding:30px;\n\n  li {\n      heght:30px;\n    margin:0 10px;\n\n    a {\n        color:#333;\n      /** &amp; 代表上级选择器 **/\n      &amp;:hover {\n          color:#000;\n      }\n    }\n  }\n\n  a {\n      color:blue;\n  }\n}\n\n/** 生成结果 **/\nul.list {\n    width:600px;\n  padding:30px;\n}\nul.list li {\n  heght:30px;\n  margin:0 10px;\n}\n\nul.list li a {\n  color:#333;\n}\nul.list li a:hover {\n    color:#000;\n}\nul.list a {\n  color:blue;\n}</code></pre>\n<p><a name=\"VQ83g\"></a></p>\n<h1 id=\"-1\"></h1>\n<p><a name=\"wnwds\"></a></p>\n<h2 id=\"arguments变量\">Arguments变量</h2>\n<pre><code class=\"language-less\">.box_arg(@w:100px, @c:red, @xx:solid) {\n    border:@arguments\n}\n\n.test {\n    .box_arg();\n}\n\n/** 实际生成结果 **/\n.test {\n    border:100px red solid;\n}</code></pre>\n<p><a name=\"2pWja\"></a></p>\n<h1 id=\"-2\"></h1>\n<p><a name=\"yHfAS\"></a></p>\n<h2 id=\"避免编译\">避免编译</h2>\n<p>避免编译一些特殊的CSS语法，如：</p>\n<pre><code class=\"language-less\">.test_03 {\n    widht:calc(300px-30px);\n}\n\n/** 让less不将这段代码编译 **/\n.test_03 {\n    width:~\'calc(300px-30px)\';\n}</code></pre>\n', '以编程的方式编写CSS，语法简洁，便于维护；less的语法不能直接被浏览器所识别，需要通过编译成CSS代码，才能被浏览器识别', '2019-10-23 12:00:44', '0', 'less,css,预编译', '', '# 介绍\n以编程的方式编写CSS，语法简洁，便于维护<br />less的语法不能直接被浏览器所识别，需要通过编译成CSS代码，才能被浏览器识别\n\n# 通过简单入门来了解Less的用法\n\nhtml代码清单\n\n- 使用link标签引入less文件，rel属性设置为`sytlesheet/less`\n- 在link标签下引入less.js 编译程序\n\n```html\n<link rel=\"stylesheet/less\" href=\"style.less\" />\n<script src=\"//cdnjs.cloudflare.com/ajax/libs/less.js/2.5.3/less.min.js\"></script>\n\n<div class=\"less_box\">Hello World</div>\n```\n\nstyle.less，将CSS属性值定义为变量，可以复用于其他的样式\n```less\n@bg001:#000;\n@w:100px;\n@tfff:#fff;\n\n.less_box {\n    width: @w;\n    height: @w;\n    background-color: @bg001;\n    color:@tfff;\n}\n```\n\n<a name=\"K7UMr\"></a>\n# 基本语法\n<a name=\"5RwQv\"></a>\n## 变量\n作用：定义一系列使用频率高的属性值，提供可维护性<br />语法：`@变量名:变量值`\n\n<a name=\"GqHe0\"></a>\n### 定义属性值\n```less\n//声明一个名为w, 值为100px的变量\n@w:200px;\n\n.box {\n  width:@w; //--> width:200px\n  height:@w; //--> height:200px\n}\n```\n\n<a name=\"oLmem\"></a>\n### 定义属性名\n```less\n//定义属性值 , 定义一个名为property，值为color的属性名字符串\n@property:color;\n//使用的时候，必须使用一对大括号\'{\'和\'}\'包含起来\n.box {\n  @{property}:#fff; //--> color:#fff\n  background-@{property}:red; //--> background-color:red\n}\n```\n\n<a name=\"wBG41\"></a>\n### 定义路径\n```less\n//定义图片路径, 必须将路径包含在一对单引号或者双引号中\n@imgPath:\'../images\';\n//使用的时候，必须使用一对大括号\'{\'和\'}\'包含起来\n.box {\n  background:url(\'@{imgPath}/1.png\'); //--> background:url(../images/1.png);\n}\n```\n\n<a name=\"DY0U4\"></a>\n## 混合写法\n样式复用：将已定义的CSS选择器，放到某个样式中，这个样式则具有该选中器所有的样式\n\n<a name=\"KpfpS\"></a>\n### 基本用法\n```less\n.text {\n  color:red;\n  font-size:16px;\n}\n\n.text1 {\n	width:200px;\n  height:200px;\n  .text; //引用了.text的所有样式\n}\n等价于：\n.text1 {\n	width:200px;\n  height:200px;\n  color:red; //.text中定于的样式\n  font-size:16px;//.text中定于的样式\n}\n\n```\n\n<a name=\"4SBUI\"></a>\n### 混合带参数\n定义类似函数的，可传参的写法\n```less\n.bg(@bg) { background:@bg; }\n.box { .bg(red); }\n//等价于\n.box { background:red; }\n```\n\n<a name=\"pRAA4\"></a>\n### 参数带默认值\n```less\n.bg(@bg:red) { background:@bg; }\n.box { .bg(); }\n//等价于\n.box { background:red; }\n```\n\n<a name=\"YX8DT\"></a>\n## 匹配模式\n```less\n//定义匹配规则\n.fcolor(red) {\n	color:red;\n}\n.fcolor(green) {\n	color:green;\n}\n.fcolor(blue) {\n	color:blue;\n}\n//引用\n.demo {\n	.fcolor(blue)\n}\n/** 实际效果 **/\n.demo {\n	color:blue\n}\n```\n\n<a name=\"Y3Jjq\"></a>\n## 运算规则\n```less\n/** 定义变量 **/\n@test_1:300px;\n.box_02 {\n  width:@test_1*4; /** width:1200px **/\n}\n```\n<a name=\"xe3gU\"></a>\n# \n<a name=\"2TrRS\"></a>\n## 嵌套规则\n```less\nul.list {\n	width:600px;\n  padding:30px;\n  \n  li {\n  	heght:30px;\n    margin:0 10px;\n    \n    a {\n    	color:#333;\n      /** & 代表上级选择器 **/\n      &:hover {\n      	color:#000;\n      }\n    }\n  }\n  \n  a {\n  	color:blue;\n  }\n}\n\n/** 生成结果 **/\nul.list {\n	width:600px;\n  padding:30px;\n}\nul.list li {\n  heght:30px;\n  margin:0 10px;\n}\n\nul.list li a {\n  color:#333;\n}\nul.list li a:hover {\n	color:#000;\n}\nul.list a {\n  color:blue;\n}\n```\n<a name=\"VQ83g\"></a>\n# \n<a name=\"wnwds\"></a>\n## Arguments变量\n\n```less\n.box_arg(@w:100px, @c:red, @xx:solid) {\n	border:@arguments\n}\n\n.test {\n	.box_arg();\n}\n\n/** 实际生成结果 **/\n.test {\n	border:100px red solid;\n}\n```\n<a name=\"2pWja\"></a>\n# \n<a name=\"yHfAS\"></a>\n## 避免编译\n避免编译一些特殊的CSS语法，如：\n```less\n.test_03 {\n	widht:calc(300px-30px);\n}\n\n/** 让less不将这段代码编译 **/\n.test_03 {\n	width:~\'calc(300px-30px)\';\n}\n```', '0', null);
INSERT INTO `dh_content` VALUES ('181', 'collect', '35', 'Free Images', null, null, null, 'https://www.freeimages.com', null, 'FreeImage 于2001年2月上线，他们的想法是创建一个网站，让有创造力的人可以把他们的照片交换为灵感或工作。现在它是一个大型图片站，拥有超过 400,000 张相片，可搜索且已分类。下载图片需要一个冗长（相较于其他网站）的注册程序，但会是值得的。', null, '2019-10-14 18:33:53', '0', '免费,图库', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('182', 'collect', '30', 'LogRocket Blog', null, null, null, 'https://blog.logrocket.com/', null, '', null, '2019-10-22 14:24:44', '0', '前端,博客', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('183', 'collect', '13', 'NodeGUI', null, null, null, 'https://docs.nodegui.org', null, '', null, '2019-10-22 14:25:32', '0', '桌面开发', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('184', 'page', '0', 'RSS订阅', null, null, null, null, '/rss', '内容预览', null, '2019-10-23 14:58:58', '0', '', '', '', '0', null);

-- ----------------------------
-- Table structure for dh_demo
-- ----------------------------
DROP TABLE IF EXISTS `dh_demo`;
CREATE TABLE `dh_demo` (
  `demo_id` int(11) NOT NULL AUTO_INCREMENT,
  `demo_name` varchar(50) NOT NULL DEFAULT '' COMMENT '代码名称',
  `demo_desc` text NOT NULL COMMENT 'DEMO描述',
  `demo_libs` varchar(255) DEFAULT '' COMMENT '库ID',
  `demo_iscompile` tinyint(2) DEFAULT '0' COMMENT '是否编译型',
  `demo_packjson` text COMMENT '编译的配置',
  `demo_isfront` tinyint(2) DEFAULT '0' COMMENT '是否前端项目',
  `demo_thumb` varchar(255) DEFAULT NULL COMMENT '展示缩略图',
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
  `lib_css` varchar(255) DEFAULT NULL COMMENT 'css链接',
  `lib_js` varchar(255) DEFAULT NULL COMMENT 'js链接',
  `lib_download` varchar(255) DEFAULT NULL COMMENT '包下载地址',
  `lib_keyword` varchar(255) DEFAULT NULL COMMENT '库所对应的关键字',
  `lib_type` tinyint(1) DEFAULT '0' COMMENT '库的类型: 0-开源项目,1-DEMO模板',
  PRIMARY KEY (`lib_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dh_libs
-- ----------------------------
INSERT INTO `dh_libs` VALUES ('1', 'Layzr.js', 'http://callmecavs.com/layzr.js/', 'https://github.com/callmecavs/layzr.js', '一个小型的图片懒加载JS库，支持ES6标准开发模式', '', '', '', null, '0');
INSERT INTO `dh_libs` VALUES ('3', 'Slick.js', 'http://kenwheeler.github.io/slick/', 'https://github.com/kenwheeler/slick/', 'Slick.js是一款幻灯片特效JS库，依赖JQuery 1.7+', '//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.css', '', 'https://codeload.github.com/kenwheeler/slick/zip/v1.8.1', null, '0');
INSERT INTO `dh_libs` VALUES ('5', 'Vue.js', 'https://cn.vuejs.org/', 'https://cn.vuejs.org/v2/guide/', 'Vue (读音 /vjuː/，类似于 view) 是一套用于构建用户界面的渐进式框架。与其它大型框架不同的是，Vue 被设计为可以自底向上逐层应用。Vue 的核心库只关注视图层，不仅易于上手，还便于与第三方库或既有项目整合。另一方面，当与现代化的工具链以及各种支持类库结合使用时，Vue 也完全能够为复杂的单页应用提供驱动。（来源：Vue.js官网）', '', '', 'https://cn.vuejs.org/js/vue.min.js', null, '0');
INSERT INTO `dh_libs` VALUES ('6', 'Mock.js', 'http://mockjs.com/', 'https://github.com/nuysoft/Mock/wiki/Getting-Started', 'Mock.js,生成随机数据，拦截 Ajax 请求， 用于模拟后台响应数据', '', '', '', null, '0');
INSERT INTO `dh_libs` VALUES ('7', '百度上传插件 Web Uploader', 'http://fex.baidu.com/webuploader/', 'http://fex.baidu.com/webuploader/getting-started.html', 'WebUploader是由Baidu WebFE(FEX)团队开发的一个简单的以HTML5为主，FLASH为辅的现代文件上传组件。在现代的浏览器里面能充分发挥HTML5的优势，同时又不摒弃主流IE浏览器，沿用原来的FLASH运行时，兼容IE6+，iOS 6+, android 4+。两套运行时，同样的调用方式，可供用户任意选用。采用大文件分片并发上传，极大的提高了文件上传效率。（来源：Web Uploader 官网）', '', '', 'https://github.com/fex-team/webuploader/releases', null, '0');
INSERT INTO `dh_libs` VALUES ('8', 'LESS', 'https://less.bootcss.com', 'https://less.bootcss.com', 'It\'s CSS, with just a little more.', '', '', '', null, '0');
INSERT INTO `dh_libs` VALUES ('10', 'jQCloud', 'https://github.com/lucaong/jQCloud', 'https://github.com/lucaong/jQCloud', '', '', 'https://raw.githubusercontent.com/lucaong/jQCloud/master/jqcloud/jqcloud-1.0.4.min.js', 'https://github.com/lucaong/jQCloud', null, '0');

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
-- Table structure for dh_rss
-- ----------------------------
DROP TABLE IF EXISTS `dh_rss`;
CREATE TABLE `dh_rss` (
  `rss_id` int(4) NOT NULL AUTO_INCREMENT,
  `rss_name` varchar(255) NOT NULL COMMENT '网站名称',
  `rss_siteurl` varchar(255) NOT NULL COMMENT '主站url',
  `rss_link` varchar(255) DEFAULT NULL COMMENT '订阅地址',
  `rss_item` varchar(20) DEFAULT NULL,
  `rss_item_title` varchar(20) DEFAULT NULL,
  `rss_item_url` varchar(20) DEFAULT NULL COMMENT 'rss内容中的链接',
  PRIMARY KEY (`rss_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dh_rss
-- ----------------------------
INSERT INTO `dh_rss` VALUES ('1', 'JavaScript Weekly', 'https://javascriptweekly.com/issues', '', '', '', '');
INSERT INTO `dh_rss` VALUES ('2', 'Node Weekly', 'https://nodeweekly.com/issues/301', '', '', '', '');
INSERT INTO `dh_rss` VALUES ('3', 'Frontend Focus', 'https://frontendfoc.us/issues', '', '', '', '');
INSERT INTO `dh_rss` VALUES ('4', 'WebTools Weekly', 'https://webtoolsweekly.com/?view=archive', '', '', '', '');
INSERT INTO `dh_rss` VALUES ('5', 'CSS Weekly', 'https://css-weekly.com/archives/', '', '', '', '');
INSERT INTO `dh_rss` VALUES ('6', 'Mozilla Hack Weekly', 'https://hacks.mozilla.org/category/mozilla-hacks-weekly/', '', '', '', '');
INSERT INTO `dh_rss` VALUES ('7', 'Responsive Design Weekly', 'http://responsivedesignweekly.com/archive', '', '', '', '');
INSERT INTO `dh_rss` VALUES ('8', '奇舞周刊', 'https://weekly.75team.com/', '', '', '', '');
INSERT INTO `dh_rss` VALUES ('9', '码农周刊', 'https://weekly.manong.io/issues/', '', '', '', '');
INSERT INTO `dh_rss` VALUES ('10', '百度FEX', 'http://fex.baidu.com/weekly/', '', '', '', '');
INSERT INTO `dh_rss` VALUES ('11', 'OurJS', 'http://ourjs.com', 'http://ourjs.com/rss', 'item', 'title', 'link');

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dh_setting
-- ----------------------------
INSERT INTO `dh_setting` VALUES ('1', '码农直通车', '逐步建立起一个完整的知识体系，便于学习和回顾', '汇总一些新发布的，或者已发布旧的系列型的技术文章，方便查看和回顾', '国内外技术社区很多，各自都有一些优秀的文章 和 代码资源 在这里收集和汇总一些内容，信息都是来自于各个不同的社区', 'wx279639439@163.com', null, '', '1', 'wx279639439@163.com', 'wx279639439@163.com');

-- ----------------------------
-- Table structure for dh_tag
-- ----------------------------
DROP TABLE IF EXISTS `dh_tag`;
CREATE TABLE `dh_tag` (
  `tag_id` int(11) NOT NULL AUTO_INCREMENT,
  `tag_name` varchar(255) NOT NULL COMMENT '标签名',
  `tag_color` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`tag_id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dh_tag
-- ----------------------------
INSERT INTO `dh_tag` VALUES ('10', 'rabbitmq', null);
INSERT INTO `dh_tag` VALUES ('11', '教程', null);
INSERT INTO `dh_tag` VALUES ('12', 'webkit', null);
INSERT INTO `dh_tag` VALUES ('13', '浏览器', null);
INSERT INTO `dh_tag` VALUES ('15', '微信', null);
INSERT INTO `dh_tag` VALUES ('16', '支付', null);
INSERT INTO `dh_tag` VALUES ('17', 'three.js', null);
INSERT INTO `dh_tag` VALUES ('18', 'javascript', null);
INSERT INTO `dh_tag` VALUES ('19', 'jquery', null);
INSERT INTO `dh_tag` VALUES ('20', 'es6', null);
INSERT INTO `dh_tag` VALUES ('21', '性能', null);
INSERT INTO `dh_tag` VALUES ('22', '测试', null);
INSERT INTO `dh_tag` VALUES ('23', '部署', null);
INSERT INTO `dh_tag` VALUES ('24', 'react', null);
INSERT INTO `dh_tag` VALUES ('25', 'css', null);
INSERT INTO `dh_tag` VALUES ('26', 'gulp', null);
INSERT INTO `dh_tag` VALUES ('27', '工程化', null);
INSERT INTO `dh_tag` VALUES ('28', '自动化', null);
INSERT INTO `dh_tag` VALUES ('29', '操作系统', null);
INSERT INTO `dh_tag` VALUES ('30', 'linux', null);
INSERT INTO `dh_tag` VALUES ('31', '数据库', null);
INSERT INTO `dh_tag` VALUES ('32', 'mysql', null);
INSERT INTO `dh_tag` VALUES ('33', 'html5', null);
INSERT INTO `dh_tag` VALUES ('34', '手册', null);
INSERT INTO `dh_tag` VALUES ('36', '设计模式', null);

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dh_uisetting
-- ----------------------------
INSERT INTO `dh_uisetting` VALUES ('1', '默认模板', 'default', '<link href=\"//cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css\" rel=\"stylesheet\" />\n<link href=\"/static/css/codeso.css?v=1.0.0\" rel=\"stylesheet\" />', '', '<script src=\"//cdn.jsdelivr.net/npm/jquery@1.12.4/dist/jquery.min.js\"></script>\n<script src=\"//cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js\"></script>', '0');
INSERT INTO `dh_uisetting` VALUES ('3', 'codes', 'codes', '', '', '', '1');

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
  `user_regtime` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP COMMENT '注册时间',
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
