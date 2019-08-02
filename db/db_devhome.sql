/*
Navicat MySQL Data Transfer

Source Server         : local_db
Source Server Version : 100113
Source Host           : localhost:3306
Source Database       : db_devhome

Target Server Type    : MYSQL
Target Server Version : 100113
File Encoding         : 65001

Date: 2019-07-31 18:49:49
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
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dh_category
-- ----------------------------
INSERT INTO `dh_category` VALUES ('9', '社区&博客', '0', '', '', '0');
INSERT INTO `dh_category` VALUES ('10', '学习教程', '9', '', '', '0');
INSERT INTO `dh_category` VALUES ('12', 'Web框架', '9', '', '', '0');
INSERT INTO `dh_category` VALUES ('13', '前端框架', '9', '', '', '0');
INSERT INTO `dh_category` VALUES ('14', 'BLOG', '0', '', '', '0');
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
) ENGINE=InnoDB AUTO_INCREMENT=96 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of dh_content
-- ----------------------------
INSERT INTO `dh_content` VALUES ('14', 'page', '0', 'HOME', null, null, null, null, '/', '内容预览', null, '2019-07-22 14:45:56', '0', '', 'HOME', '', '0', null);
INSERT INTO `dh_content` VALUES ('26', 'series', '0', 'app后端设计--总目录 - 曾健生的专栏 - CSDN博客', null, '', null, 'https://blog.csdn.net/newjueqi/article/details/19003775', '', '内容预览', '系统架构', '2019-07-22 15:57:44', '0', 'api,推送,系统架构', 'api,推送,系统架构', '', '0', '2014-02-09 09:24:21');
INSERT INTO `dh_content` VALUES ('29', 'series', '0', '理解WebKit和Chromium技术 - Yongsheng - CSDN博客', null, 'webkit,浏览器', null, 'https://blog.csdn.net/milado_nju/column/info/yongsheng', '', '内容预览', 'WebKit被广泛的应用在桌面系统和移动系统，特别是移动领域的兴起更是将WebKit推向了全所未有的应用场景。基于WebKit（Blink）的开源项目Chromium浏览器以其众多新颖的技术和高性能的表现获得广泛的关注。本专栏着重剖析WebKit和Chromium架构和原理。', '2019-07-22 16:00:37', '0', 'webkit,浏览器', 'webkit,浏览器', '', '0', '2012-01-27 14:56:07');
INSERT INTO `dh_content` VALUES ('30', 'series', '0', '支付宝、微信支付接入 - 我是大愚 - CSDN博客', null, '支付宝,微信,支付', null, 'https://idayu.blog.csdn.net/column/info/payment', '', '', '全面集成支付宝支付与微信支付功能。方便快速接入。免费支付聚合sdk。支付宝支付、订单查询、退款、转账完全支持。涵盖微信刷卡、小程序、公众号、app支付。', '2019-07-22 16:13:11', '0', '支付宝,微信,支付,接入', '支付宝,微信,支付,接入', '', '0', '2016-07-18 16:49:58');
INSERT INTO `dh_content` VALUES ('31', 'wiki', '0', '写给程序员的管理入门课程 -《格鲁夫给经理人的第一课》', 'http://blog.devtang.com/images/high-output-management-book.png', '', null, 'http://blog.devtang.com/2016/06/06/high-output-management-summary/', null, null, '《格鲁夫给经理人的第一课》 最早出版于 2007 年，书原名为《High Output Management》。本书的作者格鲁夫是 Intel 的前 CEO，领导了 Intel 从一家濒临倒闭的存储器公司，转型为微处理器公司，并且在个人 PC 开始流行时，成功和微软缔结 Wintel 联盟，主宰了整个 PC 电脑时代', '2019-07-22 16:49:09', '0', '管理', null, null, '0', '2016-06-06 23:50:00');
INSERT INTO `dh_content` VALUES ('32', 'wiki', '0', 'ECMAScript 6 入门', 'http://es6.ruanyifeng.com/images/cover-3rd.jpg', 'es6,教程,javascript', null, 'http://es6.ruanyifeng.com/', null, null, '本书覆盖 ES6 与上一个版本 ES5 的所有不同之处，对涉及的语法知识给予详细介绍，并给出大量简洁易懂的示例代码。', '2019-07-22 18:29:03', '0', 'es6', null, null, '0', '2017-09-01 00:00:00');
INSERT INTO `dh_content` VALUES ('33', 'series', '0', 'jQuery源码分析系列 - 【艾伦】 - 博客园', null, 'javascript,jquery', null, 'https://www.cnblogs.com/aaronjs/p/3279314.html', '', '内容预览', 'jQuery源码分析系列', '2019-07-22 17:45:33', '0', 'jquery,源码', 'jquery,源码', '', '0', '2013-08-24 14:52:00');
INSERT INTO `dh_content` VALUES ('34', 'snippet', '16', 'JS小数点取整', null, null, 'js 向上取整、向下取整、四舍五入', 'https://www.cnblogs.com/Marydon20170307/p/8831055.html', null, 'Math.floor(5.55) //向下取整 结果为5 \nMath.floor(5.99) //向下取整 结果为5 \nMath.ceil(5.21) //向上取整，结果为6 \nMath.ceil(5.88) //向上取整，结果为6 \nMath.round(5.78) //四舍五入 结果为6 \nMath.round(5.33) //结果为5 ', null, '2019-07-30 14:48:45', '0', 'javascript,小数,取整,整数', null, null, '0', '2018-10-30 08:43:40');
INSERT INTO `dh_content` VALUES ('35', 'wiki', '0', 'High Performance Browser Networking', '', '性能,浏览器,javascript', null, 'https://hpbn.co/', null, null, 'Performance is a feature. This book provides a hands-on overview of what every web developer needs to know about the various types of networks (WiFi, 3G/4G), transport protocols (UDP, TCP, and TLS), application protocols (HTTP/1.1, HTTP/2), and APIs available in the browser (XHR, WebSocket, WebRTC, and more) to deliver the best—fast, reliable, and resilient—user experience.\n\n', '2019-07-25 09:37:36', '0', '浏览器,网络,性能', null, null, '0', '2013-04-05 00:00:00');
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
INSERT INTO `dh_content` VALUES ('47', 'collect', '30', '张鑫旭的个人博客', null, null, null, 'https://www.zhangxinxu.com/', null, '', null, '2019-07-25 12:43:29', '0', 'html,javascript,css,原理', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('48', 'collect', '30', '阮一峰的网络日志', null, null, null, 'http://www.ruanyifeng.com/blog/', null, '', null, '2019-07-25 12:44:06', '0', '博客', null, null, '0', null);
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
INSERT INTO `dh_content` VALUES ('61', 'collect', '30', 'React 大神博客（英）', null, null, null, 'https://overreacted.io/', null, 'React 大神博客', null, '2019-07-29 11:57:36', '0', 'react', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('62', 'collect', '30', 'Codrops（英）', null, null, null, 'https://tympanus.net/codrops/', null, 'Code Snap', null, '2019-07-29 11:57:26', '0', 'css,前端,javascript', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('63', 'collect', '30', 'Sebastian Müller（英）', null, null, null, 'https://sbstjn.com/', null, 'Hi!  I work as an independent Serverless Consultant, GraphQL Specialist, and Senior Cloud Consultant for superluminar in Hamburg, Germany. I am a passionate Scrum Master, Full Stack Engineer, and Technology Enthusiast who’s fancy about vinyl records, design, people, and vegan food.', null, '2019-07-29 12:01:18', '0', 'serverless,GraphQL', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('64', 'series', '0', '【全栈React】React 30天教程索引', null, '测试,部署,react,javascript,教程,javascript', null, 'https://segmentfault.com/a/1190000010516935', '', '内容预览', '在接下来的30天内，我们将逐步了解您需要知道的与React相关的所有内容。 从我们的第一个应用的从零开始到测试和部署。', '2019-07-29 15:08:32', '0', 'react,javascript', '', '', '0', '2017-08-05 15:00:00');
INSERT INTO `dh_content` VALUES ('65', 'page', '0', 'Demo', null, null, null, null, '/demo', '内容预览', null, '2019-07-30 15:21:39', '0', '案例,展示', '前后端案例展示', '', '0', null);
INSERT INTO `dh_content` VALUES ('66', 'page', '0', '代码段', null, null, null, null, '/code-snippet', '内容预览', null, '2019-07-30 15:35:01', '0', '代码,分享,收集', '', '', '0', null);
INSERT INTO `dh_content` VALUES ('67', 'page', '0', 'Blog', null, null, null, null, '/blog', '内容预览', null, '2019-07-30 15:43:54', '0', '', '', '', '0', null);
INSERT INTO `dh_content` VALUES ('68', 'page', '0', '在线文档', null, null, null, null, '/wiki', '内容预览', null, '2019-07-30 15:45:00', '0', '', '', '', '0', null);
INSERT INTO `dh_content` VALUES ('69', 'page', '0', '系列文章(收藏)', null, null, null, null, '/series', '内容预览', null, '2019-07-30 15:45:48', '0', '系列文章(收藏)', '', '', '0', null);
INSERT INTO `dh_content` VALUES ('70', 'collect', '35', 'Pixabay', null, null, null, 'https://pixabay.com', null, 'Over 1 million+ high quality stock images and videos shared by our talented community.', null, '2019-07-30 15:48:27', '0', '视频,免费,图片', null, null, '0', null);
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
INSERT INTO `dh_content` VALUES ('93', 'wiki', '0', 'Css Guidelin', '', 'css,教程', null, 'https://cssguidelin.es/', null, null, '', '2019-07-31 10:37:04', '0', '', null, null, '0', '2017-05-20 00:00:00');
INSERT INTO `dh_content` VALUES ('94', 'collect', '10', '卡片式编程教学', null, null, null, 'https://www.flashcardsfordevelopers.com/', null, '', null, '2019-07-31 10:52:49', '0', '', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('95', 'collect', '10', 'Flexbox开发教程', null, null, null, 'https://www.flexboxpatterns.com/', null, '', null, '2019-07-31 10:53:18', '0', 'flex,css3', null, null, '0', null);

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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dh_libs
-- ----------------------------
INSERT INTO `dh_libs` VALUES ('1', 'Layzr.js', 'http://callmecavs.com/layzr.js/', 'https://github.com/callmecavs/layzr.js', '一个小型的图片懒加载JS库，支持ES6标准开发模式', '', 'Javascript', '', null, '0');
INSERT INTO `dh_libs` VALUES ('3', 'Slick.js', 'http://kenwheeler.github.io/slick/', 'https://github.com/kenwheeler/slick/', 'Slick.js是一款幻灯片特效JS库，依赖JQuery 1.7+', '//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.css', 'jquery,javascript,幻灯片,js', 'https://codeload.github.com/kenwheeler/slick/zip/v1.8.1', null, '0');
INSERT INTO `dh_libs` VALUES ('4', 'Bootstrap3', 'https://www.bootcss.com/', 'https://v3.bootcss.com/getting-started/', '简洁、直观、强悍的前端开发框架，让web开发更迅速、简单。', 'https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css', '简洁、直观、强悍的前端开发框架，让web开发更迅速、简单。', 'https://v3.bootcss.com/getting-started/', null, '0');
INSERT INTO `dh_libs` VALUES ('5', 'Vue.js', 'https://cn.vuejs.org/', 'https://cn.vuejs.org/v2/guide/', 'Vue (读音 /vjuː/，类似于 view) 是一套用于构建用户界面的渐进式框架。与其它大型框架不同的是，Vue 被设计为可以自底向上逐层应用。Vue 的核心库只关注视图层，不仅易于上手，还便于与第三方库或既有项目整合。另一方面，当与现代化的工具链以及各种支持类库结合使用时，Vue 也完全能够为复杂的单页应用提供驱动。（来源：Vue.js官网）', '', '渐进式,javascript', 'https://cn.vuejs.org/js/vue.min.js', null, '0');
INSERT INTO `dh_libs` VALUES ('6', 'Mock.js', 'http://mockjs.com/', 'https://github.com/nuysoft/Mock/wiki/Getting-Started', 'Mock.js,生成随机数据，拦截 Ajax 请求， 用于模拟后台响应数据', '', '测试', '', null, '0');
INSERT INTO `dh_libs` VALUES ('7', '百度上传插件 Web Uploader', 'http://fex.baidu.com/webuploader/', 'http://fex.baidu.com/webuploader/getting-started.html', 'WebUploader是由Baidu WebFE(FEX)团队开发的一个简单的以HTML5为主，FLASH为辅的现代文件上传组件。在现代的浏览器里面能充分发挥HTML5的优势，同时又不摒弃主流IE浏览器，沿用原来的FLASH运行时，兼容IE6+，iOS 6+, android 4+。两套运行时，同样的调用方式，可供用户任意选用。采用大文件分片并发上传，极大的提高了文件上传效率。（来源：Web Uploader 官网）', '', '上传', 'https://github.com/fex-team/webuploader/releases', null, '0');
INSERT INTO `dh_libs` VALUES ('8', 'LESS', 'https://less.bootcss.com', 'https://less.bootcss.com', 'It\'s CSS, with just a little more.', '', 'css', '', null, '0');

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
  PRIMARY KEY (`tag_id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dh_tag
-- ----------------------------
INSERT INTO `dh_tag` VALUES ('10', 'rabbitmq');
INSERT INTO `dh_tag` VALUES ('11', '教程');
INSERT INTO `dh_tag` VALUES ('12', 'webkit');
INSERT INTO `dh_tag` VALUES ('13', '浏览器');
INSERT INTO `dh_tag` VALUES ('15', '微信');
INSERT INTO `dh_tag` VALUES ('16', '支付');
INSERT INTO `dh_tag` VALUES ('17', 'three.js');
INSERT INTO `dh_tag` VALUES ('18', 'javascript');
INSERT INTO `dh_tag` VALUES ('19', 'jquery');
INSERT INTO `dh_tag` VALUES ('20', 'es6');
INSERT INTO `dh_tag` VALUES ('21', '性能');
INSERT INTO `dh_tag` VALUES ('22', '测试');
INSERT INTO `dh_tag` VALUES ('23', '部署');
INSERT INTO `dh_tag` VALUES ('24', 'react');
INSERT INTO `dh_tag` VALUES ('25', 'css');

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dh_uisetting
-- ----------------------------
INSERT INTO `dh_uisetting` VALUES ('1', '默认模板', 'default', '<link href=\"//cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css\" rel=\"stylesheet\" />\n<link href=\"/static/css/codeso.css?v=1.0.0\" rel=\"stylesheet\" />', '', '<script src=\"//cdn.jsdelivr.net/npm/jquery@1.12.4/dist/jquery.min.js\"></script>\n<script src=\"//cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js\"></script>', '1');

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
