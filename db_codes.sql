/*
Navicat MySQL Data Transfer

Source Server         : 威威
Source Server Version : 50727
Source Host           : 120.78.211.13:3306
Source Database       : db_codes

Target Server Type    : MYSQL
Target Server Version : 50727
File Encoding         : 65001

Date: 2020-03-03 22:21:09
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
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8;

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
INSERT INTO `dh_category` VALUES ('33', '第三方插件', '0', '', '', '0');
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
INSERT INTO `dh_category` VALUES ('50', '在线编辑器', '33', '', '', '0');
INSERT INTO `dh_category` VALUES ('51', 'Tips提示', '33', 'Tips提示插件', '', '0');
INSERT INTO `dh_category` VALUES ('52', '动画插件', '33', '', '', '0');
INSERT INTO `dh_category` VALUES ('53', '绘图插件', '33', '', '', '0');
INSERT INTO `dh_category` VALUES ('55', '网络', '33', '', '', '0');
INSERT INTO `dh_category` VALUES ('56', '游戏', '33', '', '', '0');
INSERT INTO `dh_category` VALUES ('57', '3D引擎', '33', '', '', '0');
INSERT INTO `dh_category` VALUES ('58', '图片特效', '33', '', '', '0');
INSERT INTO `dh_category` VALUES ('59', '数值计算', '33', '', '', '0');
INSERT INTO `dh_category` VALUES ('60', 'UI框架', '33', '', '', '0');
INSERT INTO `dh_category` VALUES ('61', '弹窗插件', '33', '', '', '0');
INSERT INTO `dh_category` VALUES ('62', 'jquery插件', '33', '', '', '0');
INSERT INTO `dh_category` VALUES ('63', '测试库', '33', '', '', '0');
INSERT INTO `dh_category` VALUES ('64', 'Vue', '33', '', '', '0');
INSERT INTO `dh_category` VALUES ('65', 'React', '33', '', '', '0');
INSERT INTO `dh_category` VALUES ('66', '幻灯片特效', '33', '', '', '0');
INSERT INTO `dh_category` VALUES ('67', '代码工具', '33', '', '', '0');
INSERT INTO `dh_category` VALUES ('68', 'Bootstrap', '33', '', '', '0');
INSERT INTO `dh_category` VALUES ('69', '多媒体', '33', '', '', '0');
INSERT INTO `dh_category` VALUES ('70', '色彩', '33', '', '', '0');
INSERT INTO `dh_category` VALUES ('71', 'DOM操作', '33', '', '', '0');
INSERT INTO `dh_category` VALUES ('72', '文本工具', '33', '', '', '0');
INSERT INTO `dh_category` VALUES ('73', 'UI特效', '33', '', '', '0');
INSERT INTO `dh_category` VALUES ('74', 'CSS3', '33', '', '', '0');
INSERT INTO `dh_category` VALUES ('75', '图库', '33', '', '', '0');
INSERT INTO `dh_category` VALUES ('76', 'SVG', '33', '', '', '0');
INSERT INTO `dh_category` VALUES ('77', 'Canvas', '33', '', '', '0');
INSERT INTO `dh_category` VALUES ('78', '图像识别', '33', '', '', '0');
INSERT INTO `dh_category` VALUES ('79', '即时消息', '33', '', '', '0');
INSERT INTO `dh_category` VALUES ('80', '性能优化', '33', '', '', '0');
INSERT INTO `dh_category` VALUES ('81', '函数式工具', '33', '', '', '0');
INSERT INTO `dh_category` VALUES ('82', '安全', '33', '', '', '0');
INSERT INTO `dh_category` VALUES ('83', '移动端', '33', '', '', '0');
INSERT INTO `dh_category` VALUES ('84', '日期相关', '33', '', '', '0');
INSERT INTO `dh_category` VALUES ('85', '图表工具', '33', '', '', '0');
INSERT INTO `dh_category` VALUES ('86', '滚动插件', '33', '', '', '0');
INSERT INTO `dh_category` VALUES ('87', '进度条', '33', '', '', '0');
INSERT INTO `dh_category` VALUES ('88', '状态管理', '33', '', '', '0');
INSERT INTO `dh_category` VALUES ('89', '拖拽', '33', '', '', '0');
INSERT INTO `dh_category` VALUES ('90', '数据API', '9', '', '', '0');
INSERT INTO `dh_category` VALUES ('92', '爬虫', '33', '', '', '0');
INSERT INTO `dh_category` VALUES ('93', '选择', '33', '', '', '0');
INSERT INTO `dh_category` VALUES ('94', '手势/触碰', '33', '', '', '0');
INSERT INTO `dh_category` VALUES ('95', '桌面应用', '33', '', '', '0');
INSERT INTO `dh_category` VALUES ('96', '表格', '33', '', '', '0');
INSERT INTO `dh_category` VALUES ('97', '数据处理', '33', '', '', '0');
INSERT INTO `dh_category` VALUES ('98', '人工智能', '33', '', '', '0');
INSERT INTO `dh_category` VALUES ('99', '键盘/鼠标', '33', '', '', '0');
INSERT INTO `dh_category` VALUES ('100', '文件相关', '33', '上传,文件读取等等', '', '0');

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB AUTO_INCREMENT=243 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of dh_content
-- ----------------------------
INSERT INTO `dh_content` VALUES ('14', 'page', '0', 'HOME', null, null, null, null, '/', '内容预览', null, '2019-07-22 14:45:56', '0', '', 'HOME', '', '0', null);
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
INSERT INTO `dh_content` VALUES ('67', 'page', '0', '系列教程', null, null, null, null, '/series', '内容预览', null, '2019-10-23 12:03:20', '0', '整理收集来自于不同技术社区的技术类系列文章', '整理收集来自于不同技术社区的技术类系列文章', '', '0', null);
INSERT INTO `dh_content` VALUES ('68', 'page', '0', '资源网站', null, null, null, null, '/links', '内容预览', null, '2019-10-12 17:45:41', '0', '', '', '', '0', null);
INSERT INTO `dh_content` VALUES ('69', 'page', '0', 'Demo展示', null, null, null, null, '/demos', '内容预览', null, '2019-08-06 17:55:39', '0', 'Demo展示', '', '', '0', null);
INSERT INTO `dh_content` VALUES ('71', 'collect', '35', 'ImageFinder', null, null, null, 'https://imagefinder.co/', null, '', null, '2019-07-30 15:50:44', '0', '免费,图片,视频', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('72', 'collect', '36', 'CSS Desk', null, null, null, 'http://cssdeck.com/', null, '', null, '2019-07-30 15:56:18', '0', 'css,代码,展示', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('73', 'collect', '35', 'Wallions', null, null, null, 'https://wallions.com/', null, '', null, '2019-07-30 15:59:00', '0', '免费,图库', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('74', 'collect', '35', 'Undraw', null, null, null, 'https://undraw.co/illustrations', null, '', null, '2019-07-30 16:16:32', '0', '图标,下载,免费', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('75', 'collect', '35', 'Iconstore', null, null, null, 'https://iconstore.co/', null, '', null, '2019-07-30 16:18:04', '0', '图标,免费', null, null, '0', null);
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
INSERT INTO `dh_content` VALUES ('152', 'collect', '32', 'Font Awesome', null, null, null, 'http://www.fontawesome.com.cn/', null, '一套绝佳的图标字体库和CSS框架，Font Awesome为您提供可缩放的矢量图标，您可以使用CSS所提供的所有特性对它们进行更改，包括：大小、颜色、阴影或者其它任何支持的效果。', null, '2019-08-09 14:58:38', '0', 'web,字体', null, null, '0', null);
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
INSERT INTO `dh_content` VALUES ('182', 'collect', '30', 'LogRocket Blog', null, null, null, 'https://blog.logrocket.com/', null, '', null, '2019-10-22 14:24:44', '0', '前端,博客', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('183', 'collect', '13', 'NodeGUI', null, null, null, 'https://docs.nodegui.org', null, '', null, '2019-10-22 14:25:32', '0', '桌面开发', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('184', 'page', '0', 'RSS订阅', null, null, null, null, '/rss', '内容预览', null, '2019-10-23 14:58:58', '0', '', '', '', '0', null);
INSERT INTO `dh_content` VALUES ('185', 'collect', '30', 'Dmitri Pavlutin', null, null, null, 'https://dmitripavlutin.com/all-posts/', null, 'Thoughts on Frontend development', null, '2019-10-29 07:34:05', '0', '前端,博客', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('192', 'collect', '32', '前端云平台', null, null, null, 'https://zeit.co', null, '', null, '2019-11-05 15:21:08', '0', 'react,vue,部署,云平台', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('193', 'collect', '30', 'SitePoint', null, null, null, 'https://www.sitepoint.com/', null, '', null, '2019-11-05 15:58:03', '0', 'html,css,javascript,教程,学习', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('206', 'collect', '90', '聚合数据', null, null, null, 'https://www.juhe.cn', null, '', null, '2019-12-03 21:38:35', '0', '数据,api', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('207', 'knowledge', '0', '小程序渲染原理', null, '微信', null, '', null, '小程序是采用双线程的机制，让页面渲染和逻辑代码的执行分离开来。\n一方面使用webview负责处理页面（布局和样式）的渲染，但屏蔽了原生的DOM和BOM接口，自定义一套组件规范；\n另一方面采用js-core对javascript进行解析，通过调用setData方法使得js逻辑代码和页面进行通信。', null, '2019-12-05 09:52:11', '0', null, null, null, '0', null);
INSERT INTO `dh_content` VALUES ('208', 'collect', '35', 'pxfuel', null, null, null, 'https://www.pxfuel.com/', null, 'Royalty free stock photos free & unlimited download', null, '2019-12-05 23:00:55', '0', '免费,图库', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('209', 'collect', '35', 'Piqsels', null, null, null, 'https://www.piqsels.com/zh', null, '免版税图库，个人和商业免费使用', null, '2019-12-05 23:02:06', '0', '免费,图库', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('210', 'article', '0', '使用纯的CSS3实现按钮点击切换效果', null, 'css', null, null, 'css-buttton-toggle', '<p>这组开关按钮的功能是完全使用 CSS 写出来的，你可以看看它们的效果，看是否适宜于用到你的项目当中。</p>\n<iframe height=\"265\" style=\"width: 100%;\" scrolling=\"no\" title=\"Pure CSS Toggle Buttons | ON-OFF Switches\" src=\"https://codepen.io/himalayasingh/embed/EdVzNL?height=265&amp;theme-id=default&amp;default-tab=css,result\" frameborder=\"no\" allowtransparency=\"true\" allowfullscreen=\"true\">\n  See the Pen <a href=\'https://codepen.io/himalayasingh/pen/EdVzNL\'>Pure CSS Toggle Buttons | ON-OFF Switches</a> by Himalaya Singh\n  (<a href=\'https://codepen.io/himalayasingh\'>@himalayasingh</a>) on <a href=\'https://codepen.io\'>CodePen</a>.\n</iframe>', '这组开关按钮的功能是完全使用 CSS 写出来的，你可以看看它们的效果，看是否适宜于用到你的项目当中。', '2019-12-06 11:38:57', '0', 'css3,按钮,切换', '', '这组开关按钮的功能是完全使用 CSS 写出来的，你可以看看它们的效果，看是否适宜于用到你的项目当中。\n\n<iframe height=\"265\" style=\"width: 100%;\" scrolling=\"no\" title=\"Pure CSS Toggle Buttons | ON-OFF Switches\" src=\"https://codepen.io/himalayasingh/embed/EdVzNL?height=265&theme-id=default&default-tab=css,result\" frameborder=\"no\" allowtransparency=\"true\" allowfullscreen=\"true\">\n  See the Pen <a href=\'https://codepen.io/himalayasingh/pen/EdVzNL\'>Pure CSS Toggle Buttons | ON-OFF Switches</a> by Himalaya Singh\n  (<a href=\'https://codepen.io/himalayasingh\'>@himalayasingh</a>) on <a href=\'https://codepen.io\'>CodePen</a>.\n</iframe>', '0', null);
INSERT INTO `dh_content` VALUES ('211', 'collect', '35', '免费SVG,插画素材库', null, null, null, 'https://www.glazestock.com/', null, 'Free illustrations, for everything', null, '2019-12-06 12:03:57', '0', 'svg,插画', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('212', 'collect', '32', 'Freebies.ByPeople →', null, null, null, 'https://freebies.bypeople.com/?ref=prototyprio', null, '这是一个面向设计师和开发者的免费商用资源合集，这里有上百个不同的图标包、UI工具包和字体等。', null, '2019-12-06 13:12:13', '0', '设计,前端,电子书,开发,ui,字体,免费,合集', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('213', 'collect', '32', 'UI Bakery', null, null, null, 'https://uibakery.io', null, '基Angular的在线开发web前端平台，可以基于现有的布局进行开发，也可以自定义开发', null, '2019-12-06 14:32:15', '0', 'ui,开发,前端,angular', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('215', 'collect', '32', '趣味图标库', null, null, null, 'https://pixelbuddha.net/freebie/childhood-flat-icons-set', null, '', null, '2019-12-06 15:31:34', '0', '趣味,图标,svg', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('216', 'collect', '13', 'Static Site Boilerplate', null, null, null, 'https://docs.staticsiteboilerplate.com/', null, '一个生成静态网页资源的项目，可以自动编译部署，需要提供基本的ftp信息', null, '2019-12-06 15:51:22', '0', '静态,网页,部署,开发', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('217', 'collect', '35', 'illlustrations', null, null, null, 'https://illlustrations.co/', null, '', null, '2019-12-06 16:33:53', '0', 'svg,png,插画', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('218', 'collect', '13', 'Quick.js', null, null, null, 'https://quarkjs.io/', null, '通过html，javascript，css代码开发原型', null, '2019-12-06 16:49:42', '0', '轻量级,原型,设计,html,js,css', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('219', 'collect', '32', '图表秀：最好用的在线图表制作网站', null, null, null, 'https://www.tubiaoxiu.com/', null, '持快速制作各种传统图表和高级可视化图表，支持个性化定制数据分析报告，支持动态播放和社会化分享\n提供专业的各行业数据分析报告模板、提供精美的排版样式，提供多维数据分析图表', null, '2019-12-06 16:58:18', '0', '图表', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('220', 'collect', '30', 'IAN LUNN', null, null, null, 'https://ianlunn.co.uk/', null, '帮助小团队或组织实现高质量的用户体验', null, '2019-12-06 18:05:42', '0', '前端,网页开发', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('221', 'collect', '10', 'Javascript数据结构与算法代码实现', null, null, null, 'https://github.com/trekhleb/javascript-algorithms', null, '每种算法和数据结构都有自己的 README，包含相关说明和链接，以便进一步阅读 ', null, '2019-12-12 11:52:17', '0', '数据结构,算法', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('222', 'collect', '34', '凹凸实验室（京东前端）', null, null, null, 'https://aotu.io/index.html', null, '', null, '2019-12-12 13:13:55', '0', '前端', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('225', 'collect', '10', 'Code Guppy', null, null, null, 'https://codeguppy.com/', null, 'Code Guppy 是一个给年轻人所准备的 Javascript 学习的资源和教程集合，你甚至都不用创建帐号，就能享用这全部的教程，其中甚至包含插画、算法和游戏资源。', null, '2019-12-17 14:18:07', '0', '教程,javascript', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('226', 'collect', '32', '流程图转换工具', null, null, null, 'https://code2flow.com/', null, '将代码转换成流程图的工具', null, '2019-12-17 16:35:46', '0', '代码,流程图', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('227', 'collect', '35', 'remixicon', null, null, null, 'https://remixicon.com/', null, '', null, '2019-12-17 16:36:37', '0', 'svg,图库', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('228', 'collect', '36', 'css3特效代码段', null, null, null, 'https://emilkowalski.github.io/css-effects-snippets/', null, '', null, '2019-12-17 23:19:19', '0', 'css3,特效', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('229', 'collect', '30', 'Free Web Design Resources', null, null, null, 'https://freebiesbug.com/', null, '免费设计资源网站', null, '2019-12-18 15:35:11', '0', '免费,设计', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('230', 'collect', '35', 'CSS Logo 合集', null, null, null, 'https://colorswall.github.io/CSS-file-icons/', null, '这是一个 CSS 文件图标合集，包含了各种各样的样式和风格，你只需要这个 CSS 包含在 header 中就能够使用。', null, '2019-12-18 18:14:29', '0', 'css,logo', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('231', 'collect', '30', 'Flavio', null, null, null, 'https://flaviocopes.com/', null, '', null, '2019-12-18 18:19:35', '0', '博客,javascript', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('232', 'collect', '30', '设计达人', null, null, null, 'http://www.shejidaren.com/', null, '主要原创和手工收集国内外高质量网页设计文章、优秀设计素材', null, '2019-12-30 11:53:50', '0', '设计', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('233', 'collect', '32', 'Easyicon（图标下载）', null, null, null, 'https://www.easyicon.net/', null, '', null, '2019-12-30 11:55:42', '0', '图标', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('234', 'collect', '32', 'css3基础动画效果', null, null, null, 'http://waitanimate.wstone.io', null, '', null, '2019-12-30 11:59:12', '0', 'css3,动画', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('235', 'article', '0', '要做动效？这75款动效工具让你无所不能（上）', null, 'javascript,css', null, 'https://www.uisdc.com/75-web-animation-tools-1', '', '内容预览', '75个不同的动效设计工具，它们有的是插件，有的是代码库，合理的运用它们，能帮你搞定各式各样的动效。', '2019-12-30 14:20:47', '0', '', '', '', '0', null);
INSERT INTO `dh_content` VALUES ('236', 'article', '0', '要做动效？这75款动效工具让你无所不能（下)', null, 'javascript,jquery,css', null, 'https://www.uisdc.com/75-web-animation-tools-2', '', '内容预览', '75个不同的动效设计工具，它们有的是插件，有的是代码库，合理的运用它们，能帮你搞定各式各样的动效。', '2020-01-06 22:44:51', '0', '', '', '', '0', null);
INSERT INTO `dh_content` VALUES ('237', 'article', '0', 'Electron升级到最新版本的问题', null, '桌面应用', null, '', 'electron-update-problem', '<h1 id=\"问题\">问题</h1>\n<p>前不久，Electron更新到了7.1.9版本</p>\n<p>尝试了一下安装，发现一个问题，脚本运行到 node install就卡住了，走不下去</p>\n<p>开始以为是npm仓库的问题，切换成taobao的仓库再尝试还是卡在node install 那个步骤</p>\n<p>网上提供的解决方法也不多，有消息说是electron版本问题，于是尝试回退到v6.1.7</p>\n<h1 id=\"解决方法\">解决方法</h1>\n<p>首先，卸载v7.1.9</p>\n<pre><code>npm uninstall -g electron</code></pre><p>再安装v6.1.7（官方提供的v6最新版）\n在这个页面 <a href=\"https://electronjs.org/releases/stable\">Electron版本发布</a> 的最右边找到版本发布列表，选择v6.x</p>\n<p>即：<a href=\"https://electronjs.org/releases/stable?version=6\">https://electronjs.org/releases/stable?version=6</a></p>\n<p>在这个页面下，可以看到v6.x的最新版本号为：v6.1.7，重新安装</p>\n<p>** 注意了，在安装的时候，需要指定版本，否则就会自动安装最新版本（即v7.1.9） **</p>\n<p>全局安装</p>\n<pre><code class=\"language-javascript\">npm install -g electron@v6.1.7</code></pre>\n<p>项目下开发依赖安装</p>\n<pre><code class=\"language-javascript\">npm install --save-dev electron@v6.1.7</code></pre>\n', 'Electron更新到了7.1.9版本，尝试了一下安装，本地项目启动不了，需要回退到旧的版本', '2020-02-22 10:50:15', '0', 'electron,桌面应用', '', '# 问题\n\n前不久，Electron更新到了7.1.9版本\n\n尝试了一下安装，发现一个问题，脚本运行到 node install就卡住了，走不下去\n\n开始以为是npm仓库的问题，切换成taobao的仓库再尝试还是卡在node install 那个步骤\n\n网上提供的解决方法也不多，有消息说是electron版本问题，于是尝试回退到v6.1.7\n\n# 解决方法\n\n首先，卸载v7.1.9\n```\nnpm uninstall -g electron\n```\n\n再安装v6.1.7（官方提供的v6最新版）\n在这个页面 [Electron版本发布](https://electronjs.org/releases/stable) 的最右边找到版本发布列表，选择v6.x\n\n即：https://electronjs.org/releases/stable?version=6\n\n在这个页面下，可以看到v6.x的最新版本号为：v6.1.7，重新安装\n\n** 注意了，在安装的时候，需要指定版本，否则就会自动安装最新版本（即v7.1.9） **\n\n全局安装\n```javascript\nnpm install -g electron@v6.1.7\n```\n\n项目下开发依赖安装\n```javascript\nnpm install --save-dev electron@v6.1.7\n```\n', '0', null);
INSERT INTO `dh_content` VALUES ('238', 'page', '0', '资源搜索', null, null, null, null, '/frontlib', '<p>前端资源搜索，图片搜索，知识点搜索</p>\n', null, '2020-02-27 18:42:34', '0', 'html,javascript,js,css3,canvas,vue.js,react.js,', '前端资源搜索，图片搜索，知识点搜索', '前端资源搜索，图片搜索，知识点搜索', '0', null);
INSERT INTO `dh_content` VALUES ('239', 'collect', '30', 'Bootstrap 4 Cheat Sheet', null, null, null, 'https://hackerthemes.com/bootstrap-cheatsheet/', null, '通过这个网站可以更直观地展示代码段的效果', null, '2020-02-28 17:08:17', '0', 'bootstrap4,特效展示', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('240', 'collect', '32', 'Kraken.io(压缩图片)', null, null, null, 'https://kraken.io/', null, '压缩图片的网站', null, '2020-02-28 18:10:25', '0', '优化,压缩', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('241', 'collect', '32', 'Export Kit', null, null, null, 'https://exportkit.com/', null, '', null, '2020-02-28 18:27:00', '0', '', null, null, '0', null);
INSERT INTO `dh_content` VALUES ('242', 'collect', '12', 'TOAST UI :: Make Your Web Delicious!', null, null, null, 'https://ui.toast.com/', null, '', null, '2020-03-02 23:26:11', '0', 'UI组件库', null, null, '0', null);

-- ----------------------------
-- Table structure for dh_content_snippet
-- ----------------------------
DROP TABLE IF EXISTS `dh_content_snippet`;
CREATE TABLE `dh_content_snippet` (
  `c_fileid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `c_cateid` varchar(255) NOT NULL DEFAULT '0' COMMENT '分类ID',
  `c_filename` varchar(255) NOT NULL DEFAULT '' COMMENT '标题',
  `c_thumb` varchar(255) DEFAULT NULL COMMENT '文章缩略图',
  `c_tag` varchar(255) DEFAULT NULL COMMENT '标签',
  `c_filecont` longtext COMMENT '文章内容',
  `c_seokeyword` varchar(255) DEFAULT NULL,
  `c_seodescription` varchar(255) DEFAULT NULL,
  `c_contid` varchar(100) DEFAULT NULL COMMENT 'content表ID',
  `c_filedate` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`c_fileid`)
) ENGINE=InnoDB AUTO_INCREMENT=207 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of dh_content_snippet
-- ----------------------------

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dh_demo
-- ----------------------------

-- ----------------------------
-- Table structure for dh_lib_files
-- ----------------------------
DROP TABLE IF EXISTS `dh_lib_files`;
CREATE TABLE `dh_lib_files` (
  `file_id` int(11) NOT NULL AUTO_INCREMENT,
  `file_name` varchar(255) NOT NULL,
  `file_type` varchar(10) NOT NULL,
  `file_url` varchar(255) NOT NULL,
  `lib_id` int(11) DEFAULT '0',
  `file_install_cont` text,
  PRIMARY KEY (`file_id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dh_lib_files
-- ----------------------------
INSERT INTO `dh_lib_files` VALUES ('1', 'bootstrap.min.css', 'css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', '11', null);
INSERT INTO `dh_lib_files` VALUES ('2', 'bootstrap.min.js', 'js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', '11', null);
INSERT INTO `dh_lib_files` VALUES ('3', 'popper.min.js', 'js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', '11', null);
INSERT INTO `dh_lib_files` VALUES ('4', 'vue.js', 'js', 'https://cdn.jsdelivr.net/npm/vue', '12', null);
INSERT INTO `dh_lib_files` VALUES ('5', 'react.production.min.js', 'js', 'https://unpkg.com/react@16/umd/react.production.min.js', '13', null);
INSERT INTO `dh_lib_files` VALUES ('6', 'react-dom.production.min.js', 'js', 'https://unpkg.com/react-dom@16/umd/react-dom.production.min.js', '14', null);
INSERT INTO `dh_lib_files` VALUES ('7', 'd3.v5.min.js', 'js', 'https://d3js.org/d3.v5.min.js', '15', null);
INSERT INTO `dh_lib_files` VALUES ('8', 'animate.min.css', 'css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css', '23', null);
INSERT INTO `dh_lib_files` VALUES ('9', 'jquery-3.4.1.min.js', 'js', 'https://code.jquery.com/jquery-3.4.1.min.js', '24', null);
INSERT INTO `dh_lib_files` VALUES ('10', 'axios.min.js', 'js', 'https://unpkg.com/axios/dist/axios.min.js', '26', null);
INSERT INTO `dh_lib_files` VALUES ('11', 'three.min.js', 'js', 'https://threejs.org/build/three.min.js', '27', null);
INSERT INTO `dh_lib_files` VALUES ('12', 'chart.js', 'js', 'https://www.jsdelivr.com/package/npm/chart.js', '32', null);
INSERT INTO `dh_lib_files` VALUES ('13', 'moment.min.js', 'js', 'https://momentjs.com/downloads/moment.min.js', '34', null);
INSERT INTO `dh_lib_files` VALUES ('14', 'google-icon', 'css', 'https://fonts.googleapis.com/icon?family=Material+Icons', '35', null);
INSERT INTO `dh_lib_files` VALUES ('15', 'materialize.min.css', 'css', 'https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css', '39', null);
INSERT INTO `dh_lib_files` VALUES ('16', 'materialize.min.js', 'js', 'https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js', '39', null);
INSERT INTO `dh_lib_files` VALUES ('17', 'bulma.min.css', 'css', 'https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css', '44', null);
INSERT INTO `dh_lib_files` VALUES ('18', 'immutable.min.js', 'js', 'https://cdnjs.cloudflare.com/ajax/libs/immutable/3.8.2/immutable.min.js', '55', null);
INSERT INTO `dh_lib_files` VALUES ('19', 'fullpage.min.js', 'js', 'https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.7/fullpage.min.js', '57', null);
INSERT INTO `dh_lib_files` VALUES ('20', 'fullpage.min.css', 'css', 'https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.7/fullpage.min.css', '57', null);
INSERT INTO `dh_lib_files` VALUES ('21', 'clipboard.min.js', 'js', 'https://cdn.jsdelivr.net/npm/clipboard@2/dist/clipboard.min.js', '59', null);
INSERT INTO `dh_lib_files` VALUES ('22', 'anime.min.js', 'js', 'https://cdn.jsdelivr.net/npm/animejs@3.1.0/lib/anime.min.js', '62', null);
INSERT INTO `dh_lib_files` VALUES ('23', 'phaser.min.js', 'js', '//cdn.jsdelivr.net/npm/phaser@3.20.1/dist/phaser.min.js', '66', null);
INSERT INTO `dh_lib_files` VALUES ('24', 'slick-theme.css', 'css', '//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css', '68', null);
INSERT INTO `dh_lib_files` VALUES ('25', 'slick.css', 'css', '//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.css', '68', null);
INSERT INTO `dh_lib_files` VALUES ('26', 'slick.min.js', 'js', '//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.min.js', '68', null);
INSERT INTO `dh_lib_files` VALUES ('27', 'weui.min.js', 'js', 'https://res.wx.qq.com/open/libs/weuijs/1.2.1/weui.min.js', '74', null);
INSERT INTO `dh_lib_files` VALUES ('28', 'mermaid.min.js', 'js', 'https://unpkg.com/mermaid@7.1.0/dist/mermaid.min.js', '76', null);
INSERT INTO `dh_lib_files` VALUES ('29', 'hover.css', 'css', 'http://ianlunn.github.io/Hover/css/hover.css', '77', null);
INSERT INTO `dh_lib_files` VALUES ('30', 'quill.snow.css', 'css', 'https://cdn.quilljs.com/1.0.0/quill.snow.css', '78', null);
INSERT INTO `dh_lib_files` VALUES ('31', 'quill.js', 'js', 'https://cdn.quilljs.com/1.0.0/quill.js', '78', null);
INSERT INTO `dh_lib_files` VALUES ('32', 'rxjs.umd.min.js', 'js', 'https://unpkg.com/rxjs@6.5.3/bundles/rxjs.umd.min.js', '80', null);
INSERT INTO `dh_lib_files` VALUES ('33', 'bootstrap-material-design.min.css', 'css', 'https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css', '79', null);
INSERT INTO `dh_lib_files` VALUES ('34', 'bootstrap-material-popper.js', 'js', 'https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js', '79', null);
INSERT INTO `dh_lib_files` VALUES ('35', 'bootstrap-material-design.js', 'js', 'https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js', '79', null);
INSERT INTO `dh_lib_files` VALUES ('36', 'sweetalert.min.js', 'js', 'https://unpkg.com/sweetalert/dist/sweetalert.min.js', '82', null);
INSERT INTO `dh_lib_files` VALUES ('37', 'hammer.min.js', 'js', 'http://hammerjs.github.io/dist/hammer.min.js', '84', null);
INSERT INTO `dh_lib_files` VALUES ('38', 'dragula.min.js', 'js', 'https://bevacqua.github.io/dragula/dist/dragula.js', '86', null);
INSERT INTO `dh_lib_files` VALUES ('39', 'skrollr.min.js', 'js', 'http://prinzhorn.github.io/skrollr/dist/skrollr.min.js', '87', null);
INSERT INTO `dh_lib_files` VALUES ('40', 'velocity.min.js', 'js', '//cdnjs.cloudflare.com/ajax/libs/velocity/2.0.3/velocity.min.js', '114', null);
INSERT INTO `dh_lib_files` VALUES ('41', 'velocity.ui.min.js', 'js', '//cdnjs.cloudflare.com/ajax/libs/velocity/2.0.3/velocity.ui.min.js', '114', null);
INSERT INTO `dh_lib_files` VALUES ('42', 'mo.js', 'js', 'https://cdn.jsdelivr.net/npm/@mojs/core', '130', null);
INSERT INTO `dh_lib_files` VALUES ('43', 'parallax.min.js', 'js', 'https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js', '144', null);

-- ----------------------------
-- Table structure for dh_libs
-- ----------------------------
DROP TABLE IF EXISTS `dh_libs`;
CREATE TABLE `dh_libs` (
  `lib_id` int(11) NOT NULL AUTO_INCREMENT,
  `lib_name` varchar(50) NOT NULL COMMENT '库名称',
  `lib_site` varchar(255) DEFAULT NULL COMMENT '库主页',
  `lib_github` varchar(255) DEFAULT NULL COMMENT 'github地址',
  `lib_intro_res` varchar(255) DEFAULT NULL COMMENT '库介绍',
  `lib_keyword` varchar(255) DEFAULT NULL COMMENT '库所对应的关键字',
  `lib_intro_show` varchar(255) DEFAULT NULL COMMENT '显示的内容',
  `lib_star` decimal(10,0) DEFAULT '0',
  `lib_version` varchar(20) DEFAULT NULL COMMENT '当前版本',
  `lib_cateid` varchar(255) DEFAULT '',
  `lib_status` tinyint(2) DEFAULT '-1' COMMENT '是否显示',
  `lib_remark` tinyint(2) DEFAULT '-1' COMMENT '是否留意',
  `lib_addtime` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`lib_id`)
) ENGINE=InnoDB AUTO_INCREMENT=534 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dh_libs
-- ----------------------------
INSERT INTO `dh_libs` VALUES ('11', 'twitter-bootstrap', 'http://getbootstrap.com/', 'https://github.com/twbs/bootstrap', 'The most popular front-end framework for developing responsive, mobile first projects on the web.', 'css,less,mobile-first,responsive,front-end,framework,web,twitter,bootstrap', 'Twitter前端团队开发的UI框架', '127718', '4.1.1', '49,51,58,60,61,62,66,68,73,74,83,', '1', '1', '2019-12-06 21:33:40');
INSERT INTO `dh_libs` VALUES ('12', 'vue', 'https://cn.vuejs.org', 'https://github.com/vuejs/vue.git', 'Simple, Fast & Composable MVVM for building interactive interfaces', 'mvvm,browser,framework', '一套用于构建用户界面的渐进式框架', '115357', '2.5.16', '49,60,64,71,', '1', '1', '2019-12-06 21:33:41');
INSERT INTO `dh_libs` VALUES ('13', 'react', 'https://zh-hans.reactjs.org/', 'https://github.com/facebook/react/', 'React is a JavaScript library for building user interfaces.', 'react,jsx,transformer,view', '用于构建用户界面的 JavaScript 库', '112304', '16.4.0', '49,55,60,65,71,73,', '1', '1', '2019-12-06 21:33:43');
INSERT INTO `dh_libs` VALUES ('14', 'react-dom', 'https://facebook.github.io/react/', 'https://github.com/facebook/react', 'The entry point of the DOM-related rendering paths. It is intended to be paired with the isomorphic React, which is shipped as react to npm.', 'react,jsx,transformer,view,dom,server', '用于构建用户界面的 JavaScript 库', '112304', '16.4.0', '49,65,70,71,73,81,83,', '1', '1', '2019-12-06 21:33:43');
INSERT INTO `dh_libs` VALUES ('15', 'd3', 'https://d3js.org', 'https://github.com/d3/d3.git', 'A JavaScript visualization library for HTML and SVG.', 'dom,w3c,visualization,svg,animation,canvas', 'SVG绘图库', '79155', '4.13.0', '49,52,53,57,60,71,73,74,76,81,', '1', '1', '2019-12-06 21:33:45');
INSERT INTO `dh_libs` VALUES ('23', 'animate.css', 'http://daneden.github.io/animate.css', 'https://github.com/daneden/animate.css', 'Plug and play, app-like animations for your websites and web apps.', 'animation,css', 'CSS3动画库', '54494', '3.5.2', '52,60,73,74,83,', '1', '1', '2019-12-06 21:33:37');
INSERT INTO `dh_libs` VALUES ('24', 'jquery', 'http://jquery.com/', 'https://github.com/jquery/jquery.git', 'JavaScript library for DOM operations', 'jquery,library,ajax,framework,toolkit,popular', 'Javascript框架，实现UI操作、ajax请求发送', '50048', '3.3.1', '60,71,73,', '1', '1', '2019-12-06 21:33:35');
INSERT INTO `dh_libs` VALUES ('26', 'axios', '', 'https://github.com/axios/axios', 'Promise based HTTP client for the browser and node.js', 'xhr,http,ajax,promise,node', 'HTTP请求库', '49043', '0.18.0', '55,', '1', '1', '2020-03-02 09:04:29');
INSERT INTO `dh_libs` VALUES ('27', 'three.js', 'http://threejs.org/', 'https://github.com/mrdoob/three.js.git', 'JavaScript 3D library', '3d,WebGL', '3d绘图引擎', '45202', '92', '53,57,', '1', '1', '2019-12-12 11:35:44');
INSERT INTO `dh_libs` VALUES ('34', 'moment.js', 'http://momentjs.com/', 'https://github.com/moment/moment', 'Parse, validate, manipulate, and display dates', 'date,moment,time', '日期转换库', '38766', '2.22.1', '84,', '1', '1', '2019-12-06 21:33:26');
INSERT INTO `dh_libs` VALUES ('35', 'material-design-icons', 'http://google.github.io/material-design-icons/', 'https://github.com/google/material-design-icons', 'Material Design icons by Google', 'icons,material,material-design,google', 'Google图标库', '36150', '3.0.1', '75,76,', '1', '-1', '2019-12-06 21:33:35');
INSERT INTO `dh_libs` VALUES ('36', 'ionic', 'https://ionicframework.com/', 'https://github.com/ionic-team/ionic', 'Advanced HTML5 Mobile App Framework.', 'html5,mobile', '多端跨平台开发框架', '35451', '1.3.2', '49,60,83,', '1', '1', '2019-12-06 21:33:33');
INSERT INTO `dh_libs` VALUES ('37', 'lodash.js', 'http://lodash.com/', 'https://github.com/lodash/lodash.git', 'A utility library delivering consistency, customization, performance, & extras.', 'amd,browser,client,customize,functional,server,util', '基于函数式的Javascript库', '34918', '4.17.10', '67,81,', '1', '-1', '2019-12-06 21:33:32');
INSERT INTO `dh_libs` VALUES ('38', 'antd', 'http://ant.design/', 'https://github.com/ant-design/ant-design', 'An UI design language', 'ant,design,react,react-component,component,components,ui,framework,frontend', '基于React的UI框架', '34141', '3.5.4', '60,64,', '1', '1', '2019-12-06 21:33:32');
INSERT INTO `dh_libs` VALUES ('39', 'materialize', 'http://materializecss.com/', 'git://github.com/Dogfalo/materialize.git', 'Builds Materialize distribution packages', 'css,js,sass,mobile-first,responsive,front-end,framework,ux,material,design', '响应式UI框架', '34051', '0.100.2', '49,60,73,74,83,', '1', '1', '2019-12-06 21:34:07');
INSERT INTO `dh_libs` VALUES ('40', 'impress.js', 'http://impress.js.org', 'https://github.com/impress/impress.js.git', 'It\'s a presentation framework based on the power of CSS3 transforms and transitions in modern browsers and inspired by the idea behind prezi.com', 'slideshow,slides,css3', '基于CSS3变换特性的库', '34004', '0.5.3', '52,73,74,', '1', '-1', '2019-12-06 21:34:01');
INSERT INTO `dh_libs` VALUES ('41', 'react-router', 'https://reacttraining.com/react-router/', 'https://github.com/ReactTraining/react-router', 'A complete routing library for React.js', 'react,reactjs,router,routes,routing', '一个React常用的路由库', '32756', '4.2.0', '65,', '1', '1', '2019-12-06 21:33:31');
INSERT INTO `dh_libs` VALUES ('44', 'element-ui', 'https://element.eleme.cn/#/zh-CN', 'https://github.com/ElemeFE/element', 'A Component Library for Vue.js.', 'eleme,vue,components', '一个Vue的组件库', '31335', '2.4.0', '49,60,64,', '1', '1', '2019-12-06 21:33:59');
INSERT INTO `dh_libs` VALUES ('45', 'material-design-lite', 'https://getmdl.io', 'https://github.com/google/material-design-lite', 'Material Design Components in CSS, JS and HTML', 'material,design,styleguide,style,guide', 'Google开发的原型设计组件', '30657', '1.3.0', '49,60,73,74,', '1', '1', '2019-12-06 21:33:58');
INSERT INTO `dh_libs` VALUES ('46', 'gulp', 'http://gulpjs.com', 'https://github.com/gulpjs/gulp.git', 'The streaming build system', 'gulp', '前端自动构建工具', '30382', '3.8.5', '67,', '1', '1', '2019-12-06 21:34:16');
INSERT INTO `dh_libs` VALUES ('47', 'echarts', 'https://www.echartsjs.com/zh/index.html', '//github.com/ecomfe/echarts', 'A powerful charting and visualization library for browser', 'baidu,echarts,canvas,data visualization', '百度研发的图表插件', '30345', '4.1.0', '53,76,77,85,', '1', '1', '2019-12-06 21:34:16');
INSERT INTO `dh_libs` VALUES ('48', 'bulma', 'http://bulma.io', 'https://github.com/jgthms/bulma.git', 'Modern CSS framework based on Flexbox', 'css,sass,flexbox,responsive,framework', '基于Flexbox的CSS框架', '30140', '0.7.1', '49,60,74,', '1', '1', '2019-12-06 21:34:17');
INSERT INTO `dh_libs` VALUES ('49', 'babel-polyfill', 'https://babeljs.io/', 'https://github.com/babel/babel/tree/master/packages/babel-polyfill', 'Provides polyfills necessary for a full ES2015+ environment', 'compiler,JavaScript,babel,ast,flavortown,es6,es2015', 'Babel兼容插件', '29870', '6.26.0', '67,', '1', '1', '2019-12-06 21:34:20');
INSERT INTO `dh_libs` VALUES ('50', 'babel-core', 'https://babeljs.io/', 'git://github.com/babel/babel', 'A compiler for writing next generation JavaScript', '6to5,babel,classes,const,es6,harmony,let,modules,transpile,transpiler,var', 'ES6转ES5工具', '29870', '6.1.19', '67,', '1', '1', '2019-12-06 21:34:19');
INSERT INTO `dh_libs` VALUES ('52', 'foundation', 'http://foundation.zurb.com', 'https://github.com/zurb/foundation-sites.git', 'The most advanced responsive front-end framework in the world.', 'foundation,responsive,zurb', '响应式的前端框架', '27662', '6.4.3', '49,51,60,74,76,83,', '1', '1', '2019-12-06 21:34:21');
INSERT INTO `dh_libs` VALUES ('55', 'immutable', 'https://immutable-js.github.io/immutable-js/', 'https://github.com/facebook/immutable-js', 'Immutable Data Collections', 'immutable,persistent,lazy,data,datastructure,functional,collection,stateless,sequence,iteration', '不可变数据结构Javascript库', '25180', '3.8.2', '81,', '1', '1', '2019-12-06 21:34:22');
INSERT INTO `dh_libs` VALUES ('56', 'admin-lte', 'https://adminlte.io/', '//github.com/almasaeed2010/AdminLTE.git', 'Admin dashboard and control panel template', 'css,js,html,template,admin,bootstrap,theme,backend,responsive', '基于Bootstrap开发的后台UI框架', '25113', '2.4.3', '49,60,68,', '1', '1', '2019-12-06 21:34:24');
INSERT INTO `dh_libs` VALUES ('57', 'fullPage.js', 'http://alvarotrigo.com/fullPage/', 'git://github.com/alvarotrigo/fullPage.js.git', 'Create  beautiful fullscreen scrolling websites', 'jquery,scrolling,single_page,one_page,sliding', '全屏滚动效果库', '24724', '2.9.7', '52,60,62,73,74,', '1', '1', '2019-12-06 21:34:27');
INSERT INTO `dh_libs` VALUES ('59', 'clipboard.js', 'https://clipboardjs.com', 'https://github.com/zenorocha/clipboard.js', 'Modern copy to clipboard. No Flash. Just 2kb', 'clipboard,copy,cut', '实现复制到粘贴板', '23726', '2.0.1', '72,', '1', '1', '2019-12-06 21:34:29');
INSERT INTO `dh_libs` VALUES ('60', 'underscore.js', 'https://underscorejs.org/', 'https://github.com/jashkenas/underscore/', 'JavaScript\'s functional programming helper library.', 'utility,popular,函数式', 'Javascript函数式编程库', '23721', '1.9.0', '81,', '1', '1', '2019-12-06 21:34:30');
INSERT INTO `dh_libs` VALUES ('61', 'pdf.js', '', 'git://github.com/mozilla/pdf.js.git', 'PDF Reader in JavaScript', 'PDF,reader,Js', '在线PDF阅读器', '23608', '2.0.489', '72,', '1', '-1', '2019-12-06 21:34:31');
INSERT INTO `dh_libs` VALUES ('62', 'animejs', 'http://anime-js.com', 'https://github.com/juliangarnier/anime.git', 'Polyvalent Javascript animation engine', 'anime,animation,javascript,CSS,transforms,SVG,canvas', '动画引擎，支持CSS3、DOM、SVG、Canvas', '23537', '2.2.0', '52,53,73,74,76,77,', '1', '1', '2019-12-06 21:34:32');
INSERT INTO `dh_libs` VALUES ('64', 'select2', 'https://select2.github.io/', 'https://github.com/select2/select2', 'Select2 is a jQuery based replacement for select boxes. It supports searching, remote data sets, and infinite scrolling of results.', 'select,jquery,dropdown,ui', '基于jquery用于美化select标签的插件', '22850', '4.0.5', '62,93,', '1', '1', '2019-12-06 21:34:33');
INSERT INTO `dh_libs` VALUES ('66', 'phaser', 'http://phaser.io/', 'https://github.com/photonstorm/phaser.git', 'A fast, free and fun HTML5 Game Framework for Desktop and Mobile web browsers.', 'HTML5,game,canvas,2d,WebGL,web audio,physics,tweens,javascript,typescript', 'HTML5 2D游戏框架，支持PC端和手机端', '22675', '2.6.2', '49,56,77,', '1', '1', '2019-12-06 21:34:36');
INSERT INTO `dh_libs` VALUES ('68', 'slick-carousel', 'http://kenwheeler.github.io/slick/', 'https://github.com/kenwheeler/slick.git', 'the last carousel you\'ll ever need', 'carousel,slick,responsive,幻灯片,切换', '跑马灯（幻灯片切换效果）', '22545', '1.9.0', '62,66,73,', '1', '1', '2019-12-06 21:34:37');
INSERT INTO `dh_libs` VALUES ('69', 'chosen', 'http://harvesthq.github.com/chosen', 'https://github.com/harvesthq/chosen.git', 'Chosen is a JavaScript plugin that makes select boxes user-friendly. It is currently available in both jQuery and Prototype flavors.', 'select,multiselect,dropdown,form,input,ui', '美化select标签的jquery插件', '21819', '1.8.5', '62,93,', '1', '1', '2019-12-06 21:34:40');
INSERT INTO `dh_libs` VALUES ('71', 'pixi.js', 'https://github.com/pixijs/pixi.js', 'https://github.com/pixijs/pixi.js.git', 'Pixi.js is a fast lightweight 2D library that works across all devices.', '2d,animation,canvas,graphics,rendering,webgl', '轻量级2D动画引擎', '20282', '4.8.0', '52,53,77,', '1', '1', '2019-12-06 21:34:41');
INSERT INTO `dh_libs` VALUES ('74', 'weui', 'https://weui.io/', 'https://github.com/Tencent/weui', 'A UI library by WeChat official design team, includes the most useful widgets/modules in mobile web applications.', 'weui,wechat,weixin,css,less,mobile,微信', 'WeUI 是一套同微信原生视觉体验一致的基础样式库，由微信官方设计团队为微信内网页和微信小程序量身设计，令用户的使用感知更加统一。', '20191', '1.1.2', '49,52,60,61,71,73,74,86,87,', '1', '1', '2019-12-06 21:34:42');
INSERT INTO `dh_libs` VALUES ('77', 'hover.css', 'http://ianlunn.github.io/Hover/', 'https://github.com/IanLunn/Hover', 'A collection of CSS3 powered hover effects to be applied to call to actions, buttons, logos, featured images and so on.', '2d,3d,CSS,CSS3,animations,effects,transitions,鼠标,覆盖,动画,特效', '鼠标覆盖元素动画特效', '19921', '2.3.1', '52,74,', '1', '1', '2019-12-06 21:34:45');
INSERT INTO `dh_libs` VALUES ('80', 'rxjs', 'https://rxjs.dev/', 'https://github.com/ReactiveX/rxjs', 'Library for composing asynchronous and event-based operations in JavaScript', 'LINQ,FRP,Reactive,Events,Rx,RxJS', '基于响应式编程的Javascript库', '19383', '6.2.0', '81,', '1', '1', '2019-12-06 21:34:46');
INSERT INTO `dh_libs` VALUES ('82', 'sweetalert', 'https://sweetalert.js.org/', 'https://github.com/t4t5/sweetalert.git', 'A beautiful replacement for JavaScript\'s ', 'alert,modal,sweetalert,popup,dialog,ui', '美化alert弹出特效', '19138', '2.1.0', '51,61,72,73,74,', '1', '1', '2019-12-06 21:34:47');
INSERT INTO `dh_libs` VALUES ('84', 'hammer.js', 'http://eightmedia.github.io/hammer.js/', 'https://github.com/hammerjs/hammer.js', 'A javascript library for multi-touch gestures', 'events,touch,gestures', '触碰特效', '19048', '2.0.8', '94,', '1', '1', '2019-12-06 21:34:48');
INSERT INTO `dh_libs` VALUES ('86', 'dragula', 'https://bevacqua.github.io/dragula/', 'https://github.com/bevacqua/dragula', 'Drag and drop so simple it hurts', 'dragula', '简易拖拽库', '18160', '3.7.2', '89,', '1', '1', '2019-12-06 21:34:49');
INSERT INTO `dh_libs` VALUES ('89', 'iview', 'https://www.iviewui.com', 'https://github.com/iview/iview', 'A high quality  UI components Library with Vue.js', 'iview,vue,vue.js,component,components,ui,framework', '一套基于 Vue.js 的高质量 UI 组件库', '17714', '2.14.0', '60,64,73,', '1', '1', '2019-12-06 21:34:50');
INSERT INTO `dh_libs` VALUES ('94', 'photoswipe', 'http://photoswipe.com/', 'https://github.com/dimsemenov/PhotoSwipe', 'JavaScript gallery', '图片,弹窗,缩放', '图片预览库', '17250', '4.1.2', '58', '1', '1', '2019-12-06 17:44:06');
INSERT INTO `dh_libs` VALUES ('96', 'vuex', 'https://vuex.vuejs.org/', 'https://github.com/vuejs/vuex', 'state management for Vue.js', 'vue,Application,Architecture,Flux,状态管理', '基于Vue的状态管理库', '17088', '3.0.1', '49,64,88,', '1', '1', '2019-12-06 21:34:51');
INSERT INTO `dh_libs` VALUES ('97', 'nprogress', 'http://ricostacruz.com/nprogress/', 'https://github.com/rstacruz/nprogress.git', 'Simple slim progress bars', 'progress,load,ajax', '简易的进度条插件', '17067', '0.2.0', '52,', '1', '1', '2019-12-06 21:34:55');
INSERT INTO `dh_libs` VALUES ('98', 'mobx', 'https://mobxjs.github.io/mobx', 'https://github.com/mobxjs/mobx.git', 'Simple, scalable state management.', 'mobx,mobservable,observable,react-component,react,reactjs,reactive,model,frp,functional-reactive-programming,state management,data flow', '状态管理库', '16941', '4.3.0', '64,88,', '1', '1', '2019-12-06 21:34:55');
INSERT INTO `dh_libs` VALUES ('100', 'fastclick', '', 'https://github.com/ftlabs/fastclick.git', 'Polyfill to remove click delays on browsers with touch UIs.', 'fastclick,mobile,touch,tap,click,delay', '一个优化点击响应的库', '16825', '1.0.6', '71,', '1', '1', '2019-12-06 21:34:56');
INSERT INTO `dh_libs` VALUES ('101', 'scrollReveal.js', 'https://scrollrevealjs.org/', 'https://github.com/jlmakes/scrollReveal.js.git', 'Easily reveal elements as they enter the viewport.', 'scroll,reveal,css,animation,javascript,mobile', '滚动加载插件', '16329', '3.4.0', '86,', '1', '1', '2019-12-06 21:34:56');
INSERT INTO `dh_libs` VALUES ('102', 'mocha', 'https://mochajs.org/', 'https://github.com/mochajs/mocha', 'simple, flexible, fun test framework', 'mocha,test,bdd,tdd,tap', '单元测试库', '16319', '5.2.0', '63,', '1', '1', '2019-12-06 21:34:57');
INSERT INTO `dh_libs` VALUES ('105', 'less.js', 'http://lesscss.org/', 'https://github.com/less/less.js', 'Leaner CSS', 'less,less.js,css,css3,preprocessor,pre-processor,popular', '可编程CSS框架', '15745', '3.0.4', '49,74,', '1', '1', '2019-12-06 21:34:58');
INSERT INTO `dh_libs` VALUES ('106', 'codemirror', 'https://codemirror.net', 'https://github.com/codemirror/CodeMirror.git', 'In-browser code editing made bearable', 'JavaScript,CodeMirror,Editor', '在线代码编辑器', '15732', '5.38.0', '67,', '1', '1', '2019-12-06 21:34:59');
INSERT INTO `dh_libs` VALUES ('112', 'spinkit', 'http://tobiasahlin.com/spinkit/', 'https://github.com/tobiasahlin/SpinKit', 'A collection of loading indicators animated with CSS', 'css,spinkit,spinner,loading,ui', 'loading动画库', '15390', '1.2.5', '52,74,87,', '1', '1', '2019-12-06 21:35:00');
INSERT INTO `dh_libs` VALUES ('114', 'velocity', 'http://velocityjs.org', 'https://github.com/julianshapiro/velocity.git', 'Accelerated JavaScript animation.', 'animation,jquery,animate,lightweight,smooth,ui,velocity.js,velocityjs,javascript', 'Javascript动画库', '15197', '2.0.4', '52,', '1', '1', '2019-12-06 21:35:00');
INSERT INTO `dh_libs` VALUES ('117', 'popmotion', 'http://popmotion.io', 'https://github.com/Popmotion/popmotion', 'The JavaScript motion engine. Handles animation, physics, and input tracking.', 'animation,ux,ui,popmotion,redshift,canvas animation,jquery animation,dom animation,dom,pointer tracking,mouse,mouse tracking,touch,touch tracking,physics,interaction,interface,svg', 'Javascript动画引擎', '14860', '4.3.4', '52,74,', '1', '1', '2019-12-06 21:35:01');
INSERT INTO `dh_libs` VALUES ('119', 'Sortable', 'https://sortablejs.github.io/Sortable/', 'https://github.com/rubaxa/Sortable.git', 'Minimalist JavaScript library for reorderable drag-and-drop lists on modern browsers and touch devices. No jQuery. Supports AngularJS and any CSS library, e.g. Bootstrap.', 'sortable,reorder,drag', '可拖拽排序列表插件', '14396', '1.6.0', '60,73,', '1', '1', '2019-12-06 21:35:01');
INSERT INTO `dh_libs` VALUES ('121', 'feather-icons', 'https://feathericons.com/', 'https://github.com/colebemis/feather.git', 'Simply beautiful open source icons', 'popular,icons,feather,svg', '图标库', '14374', '4.7.3', '75,76,', '1', '-1', '2019-12-06 21:35:03');
INSERT INTO `dh_libs` VALUES ('124', 'flat-ui', 'http://designmodo.github.io/Flat-UI/', 'https://github.com/designmodo/Flat-UI.git', 'Flat UI Free is a beautiful theme for Bootstrap. We have redesigned many of its components to look flat in every pixel', 'ui,flat,bootstrap', 'UI插件', '14201', '2.3.0', '60,68,', '1', '-1', '2019-12-06 21:35:02');
INSERT INTO `dh_libs` VALUES ('127', 'react-redux', 'http://redux.js.org/docs/basics/UsageWithReact.html', 'https://github.com/reactjs/react-redux.git', 'Official React bindings for Redux', 'react,reactjs,hot,reload,hmr,live,edit,flux,redux', '基于React的状态管理插件', '14052', '5.0.7', '65,88,', '1', '1', '2019-12-06 21:35:04');
INSERT INTO `dh_libs` VALUES ('128', 'dropzone', 'http://www.dropzonejs.com/', 'git://github.com/enyo/dropzone.git', 'Handles drag and drop of files for you.', 'html5,file,upload', '文件拖拽', '14012', '5.4.0', '89,', '1', '1', '2019-12-06 21:35:03');
INSERT INTO `dh_libs` VALUES ('130', 'mo-js', '', 'https://github.com/legomushroom/mojs.git', 'motion graphics toolbelt for the web', 'motion,effects,animation,motion graphics', '动画引擎', '13986', '0.288.2', '52,74,', '1', '1', '2019-12-06 21:35:06');
INSERT INTO `dh_libs` VALUES ('134', 'jasmine', 'http://jasmine.github.io/', 'https://github.com/jasmine/jasmine.git', 'Official packaging of Jasmine\'s core files for use by Node.js projects.', 'bdd,testing', '测试库', '13881', '3.1.0', '63,', '1', '1', '2019-12-06 21:35:07');
INSERT INTO `dh_libs` VALUES ('135', 'react-select', 'https://jedwatson.github.io/react-select/', 'https://github.com/JedWatson/react-select.git', 'A Select control built with and for ReactJS', 'combobox,form,input,multiselect,react,react-component,select,ui', '基于React的下拉框插件', '13841', '1.2.1', '65,73', '1', '1', null);
INSERT INTO `dh_libs` VALUES ('139', 'vuetify', 'https://vuetifyjs.com/', 'https://github.com/vuetifyjs/vuetify.git', 'Vue.js 2 Semantic Component Framework', 'Vue,Vuetify,semantic,component', 'Vue.js 组件库', '13700', '1.0.18', '60,64,74,', '1', '1', '2019-12-06 21:35:08');
INSERT INTO `dh_libs` VALUES ('142', 'masonry', 'http://masonry.desandro.com/', 'https://github.com/desandro/masonry', 'Cascading grid layout library', 'jquery,layout,float,grid', 'CSS3 grid 布局库', '13498', '4.2.1', '60,73,74,', '1', '1', '2019-12-06 21:35:09');
INSERT INTO `dh_libs` VALUES ('144', 'parallax', 'http://matthew.wagerfield.com/parallax/', 'git://github.com/wagerfield/parallax.git', 'Parallax Engine that reacts to the orientation of a smart device.', 'parallax,gyroscope,jquery,javascript,library', '视觉效果差', '13357', '3.1.0', '60,73,', '1', '1', '2019-12-06 21:35:11');
INSERT INTO `dh_libs` VALUES ('147', 'uikit', 'http://www.getuikit.com', 'git://github.com/uikit/uikit', 'UIkit is a lightweight and modular front-end framework for developing fast and powerful web interfaces.', 'uikit,css,framework', 'UI框架', '13201', '2.27.5', '49,60,73,74,', '1', '1', '2019-12-06 21:35:14');
INSERT INTO `dh_libs` VALUES ('149', 'framework7', 'https://framework7.io', 'https://github.com/nolimits4web/Framework7.git', 'Full Featured Mobile HTML Framework For Building iOS & Android Apps', 'mobile,framework,ios 7,ios7,ios8,ios 8,iphone,ipad,apple,phonegap,native,touch,appstore,app,f7,material,android,google,googleplay', '跨平台移动端开发框架', '13127', '2.3.0', '60,71,74,83,95,', '1', '-1', '2019-12-12 10:36:06');
INSERT INTO `dh_libs` VALUES ('150', 'ionicons', 'https://ionicons.com/', 'https://github.com/driftyco/ionicons', 'The premium icon font for Ionic Framework', 'font,icon', '专门为Ionic Framework提供的一套SVG图标,也可以单独下载使用', '13078', '4.1.2', '75,76,', '1', '1', '2019-12-12 10:31:31');
INSERT INTO `dh_libs` VALUES ('151', 'highlight.js', 'http://highlightjs.org', 'https://github.com/isagalaev/highlight.js', 'Syntax highlighting with language autodetection.', 'highlight,syntax highlighter,代码,高亮', '代码高亮插件', '13004', '9.12.0', '67,72,', '1', '-1', '2019-12-12 10:29:39');
INSERT INTO `dh_libs` VALUES ('166', 'ant-design-pro', 'https://pro.ant.design', 'https://github.com/ant-design/ant-design-pro', 'An enterprise-class UI design language and React-based implementation', 'react', '开箱即用的中台前端/设计解决方案', '12945', '1.3.0', '60,65,', '1', '1', '2019-12-12 10:28:36');
INSERT INTO `dh_libs` VALUES ('168', 'reselect', '', 'https://github.com/reactjs/reselect', 'Selectors for Redux.', 'react,redux', '基于redux的选择器插件', '12805', '3.0.1', '93,', '1', '-1', '2019-12-12 10:26:28');
INSERT INTO `dh_libs` VALUES ('169', 'medium-editor', 'http://yabwe.github.io/medium-editor/', 'https://github.com/yabwe/medium-editor', 'Medium.com WYSIWYG editor clone.', 'contenteditable,editor,medium,wysiwyg,rich-text', '在线编辑器', '12756', '5.23.3', '50,72,', '1', '1', '2019-12-12 10:24:54');
INSERT INTO `dh_libs` VALUES ('172', 'xlsx', 'https://sheetjs.com/', 'https://github.com/SheetJS/js-xlsx', 'Excel (XLSB/XLSX/XLSM/XLS/XML) and ODS spreadsheet parser and writer', 'excel', '导入Excel表格插件库', '12418', '0.12.13', '96,', '1', '1', '2019-12-12 10:21:49');
INSERT INTO `dh_libs` VALUES ('173', 'mint-ui', 'https://mint-ui.github.io', 'git+https://github.com/ElemeFE/mint-ui.git', 'Mobile UI elements for vue.js', 'vue,手机,移动', '基于 Vue.js 的移动端组件库', '12389', '2.2.13', '64,83,', '1', '1', '2019-12-12 10:18:36');
INSERT INTO `dh_libs` VALUES ('180', 'draggable', 'https://shopify.github.io/draggable/', 'https://github.com/Shopify/draggable', 'The JavaScript Drag & Drop library your grandparents warned you about.', 'shopify,draggable,drag-and-drop,es6', '拖拽排序插件', '11715', '1.0.0-beta.7', '71,89,', '1', '1', '2019-12-12 10:16:14');
INSERT INTO `dh_libs` VALUES ('181', 'snap.svg', 'http://snapsvg.io', 'https://github.com/adobe-webplatform/Snap.svg', 'JavaScript Vector Library', 'vector,graphics', 'svg绘图库', '11601', '0.5.1', '52,53,76,', '1', '1', '2019-12-12 10:11:37');
INSERT INTO `dh_libs` VALUES ('182', 'validator', '', 'https://github.com/chriso/validator.js', 'String validation and sanitization', '验证', '验证字符串框架', '11512', '10.2.0', '72,', '1', '1', '2019-12-12 10:10:08');
INSERT INTO `dh_libs` VALUES ('186', 'vue-router', 'http://router.vuejs.org/', 'https://github.com/vuejs/vue-router', 'A router for Vue.js', 'vue,vuejs,router,mvvm', 'Vue的路由插件', '11411', '3.0.1', '64,', '1', '1', '2019-12-12 10:05:31');
INSERT INTO `dh_libs` VALUES ('189', 'monaco-editor', 'https://microsoft.github.io/monaco-editor/', 'https://github.com/Microsoft/monaco-editor', 'A browser based code editor', 'Monaco,Editor,vscode,TypeScript,JavaScript', '在线代码编辑器', '11273', '0.13.1', '50,72,', '1', '1', '2019-12-12 09:59:48');
INSERT INTO `dh_libs` VALUES ('190', 'frappe-charts', 'https://frappe.github.io/charts', 'https://github.com/frappe/charts', 'Simple, responsive, modern SVG Charts with zero dependencies', 'svg,图表', '基于SVG的图表插件', '11213', '1.1.0', '53,76,85,', '1', '1', '2019-12-12 10:01:53');
INSERT INTO `dh_libs` VALUES ('192', 'chartist', 'https://gionkunz.github.io/chartist-js', 'https://github.com/gionkunz/chartist-js', 'Simple, responsive charts', 'chartist,responsive charts,charts,charting', '简易的响应式图表插件', '11107', '0.11.0', '53,76,77,83,85,', '1', '1', '2019-12-12 09:55:21');
INSERT INTO `dh_libs` VALUES ('193', 'pouchdb', 'http://pouchdb.com/', 'https://github.com/pouchdb/pouchdb', 'PouchDB is a pocket-sized database.', 'db,couchdb,pouchdb', '', '11096', '6.4.3', '97,', '1', '1', '2019-12-12 09:51:17');
INSERT INTO `dh_libs` VALUES ('194', 'trix', 'http://trix-editor.org/', 'https://github.com/basecamp/trix', 'A rich text editor for everyday writing', 'rich text,wysiwyg,editor', '富文本编辑器', '11066', '0.11.2', '72,', '1', '1', '2019-12-12 09:27:23');
INSERT INTO `dh_libs` VALUES ('199', 'froala-design-blocks', 'https://www.froala.com/design-blocks', 'git://github.com/froala/design-blocks.git', 'An amazing collection of over 170 ready to use responsive design blocks based on Bootstrap.', '', 'Bootstrap UI样式集合', '10706', '1.0.2', '68,74,83,', '1', '-1', '2019-12-12 09:05:28');
INSERT INTO `dh_libs` VALUES ('200', 'smartcrop', 'http://29a.ch/2014/04/03/smartcrop-content-aware-image-cropping', 'https://github.com/jwagner/smartcrop.js.git', 'Content aware image cropping.', '图片,裁剪', '图片裁剪插件', '10662', '2.0.3', '58,77,', '1', '-1', '2019-12-12 09:02:57');
INSERT INTO `dh_libs` VALUES ('202', 'bootswatch', 'http://bootswatch.com/', 'https://github.com/thomaspark/bootswatch', 'Bootswatch is a collection of themes for Bootstrap.', 'css', '基于Bootstrap的免费模板', '10619', '4.1.1', '68,74,', '1', '1', '2019-12-12 08:45:29');
INSERT INTO `dh_libs` VALUES ('203', 'jquery-handsontable', 'http://handsontable.com/', 'https://github.com/handsontable/handsontable', 'Spreadsheet-like data grid editor that provides copy/paste functionality compatible with Excel/Google Docs', 'excel,data,editor,popular', '基于jquery的仿Excel编辑表格插件', '10613', '0.10.2', '62,96,97,', '1', '1', '2019-12-12 08:44:07');
INSERT INTO `dh_libs` VALUES ('204', 'handsontable', 'http://handsontable.com/', 'https://github.com/handsontable/handsontable', 'Spreadsheet-like data grid editor that provides copy/paste functionality compatible with Excel/Google Docs', 'grid,datagrid,table,ui,input,ajax,handsontable,spreadsheet', '仿Excel表格编辑组件', '10613', '3.0.0', '64,65,96,97,', '1', '1', '2019-12-12 08:42:40');
INSERT INTO `dh_libs` VALUES ('205', 'flatpickr', 'https://chmln.github.io/flatpickr', 'https://github.com/chmln/flatpickr', 'A lightweight, powerful datetimepicker', '日期,选择', '轻量级，功能强大的日期选择控件', '10594', '4.5.0', '68,84,93,', '1', '1', '2019-12-12 08:38:03');
INSERT INTO `dh_libs` VALUES ('206', 'redux-form', 'https://redux-form.com/', 'https://github.com/erikras/redux-form', 'A higher order component decorator for forms using Redux and React', 'react,redux,表单', '基于Redux的表单状态管理组件', '10564', '7.3.0', '65,88,', '1', '1', '2019-12-12 08:31:14');
INSERT INTO `dh_libs` VALUES ('215', 'popper.js', 'https://popper.js.org/', 'git+https://github.com/FezVrasta/popper.js.git', 'A kickass library to manage your poppers', 'tooltips,popovers', '提示特效', '10039', '1.14.3', '51,61,', '1', '1', '2019-12-11 18:22:48');
INSERT INTO `dh_libs` VALUES ('220', 'headroom', 'http://wicky.nillia.ms/headroom.js/', 'https://github.com/WickyNilliams/headroom.js', 'Give your page some headroom. Hide your header until you need it', '顶部,菜单,导航,滚动', '滚动页面时，隐藏页面顶部的元素/菜单', '9934', '0.9.4', '71,73,86,', '1', '1', '2019-12-11 18:19:47');
INSERT INTO `dh_libs` VALUES ('221', 'raphael', 'http://raphaeljs.com/', 'https://github.com/DmitryBaranovskiy/raphael/', 'JavaScript Vector Library', 'vector,graphics,popular', 'svg绘图插件', '9913', '2.2.7', '52,53,76,', '1', '1', '2019-12-11 18:16:11');
INSERT INTO `dh_libs` VALUES ('223', 'paper.js', 'http://paperjs.org/', 'https://github.com/paperjs/paper.js', 'The Swiss Army Knife of Vector Graphics Scripting', 'vector,graphic,graphics,2d,geometry,bezier,curve,curves,path,paths,canvas,svg,paper,paper.js', '基于Canvas的2d绘图/动画', '9758', '0.11.5', '52,53,77,', '1', '1', '2019-12-11 18:14:56');
INSERT INTO `dh_libs` VALUES ('224', 'picturefill', 'http://scottjehl.github.com/picturefill/', 'https://github.com/scottjehl/picturefill', 'A responsive image polyfill.', 'polyfill,responsive,images,html,picture', '响应式图片转换', '9748', '3.0.3', '58,83,', '1', '1', '2019-12-11 18:13:13');
INSERT INTO `dh_libs` VALUES ('226', 'waypoints', 'http://imakewebthings.com/waypoints/', 'https://github.com/imakewebthings/waypoints', 'Easily execute a function when you scroll to an element', 'scroll,胡朋友呢', '滚动监听插件，滚动到某个元素前执行一个回调函数', '9502', '4.0.1', '73,86,', '1', '1', '2019-12-11 18:10:05');
INSERT INTO `dh_libs` VALUES ('227', 'onepage-scroll', 'http://www.thepetedesign.com/demos/onepage_scroll_demo.html', 'https://github.com/peachananr/onepage-scroll', 'Create an Apple-like one page scroller website (iPhone 5S website) with One Page Scroll plugin', 'scroll,jquery,keyboard,键盘,鼠标,滚动,整页', '基于jquery的整屏滚动插件，支持鼠标滚轮和键盘控制', '9353', '1.3.1', '62,71,86,99,', '1', '1', '2019-12-11 18:03:28');
INSERT INTO `dh_libs` VALUES ('228', 'convnetjs', 'https://cs.stanford.edu/people/karpathy/convnetjs/', 'https://github.com/karpathy/convnetjs', 'Deep Learning in Javascript. Train Convolutional Neural Networks (or ordinary ones) in your browser.', '机器学习,深度学习,人工智能,模型训练', '在浏览器中训练深度学习模型框架', '9292', '0.3.0', '98,', '1', '1', '2019-12-10 18:06:52');
INSERT INTO `dh_libs` VALUES ('231', 'list.js', 'http://listjs.com', 'https://github.com/javve/list.js', 'The perfect library for adding search, sort, filters and flexibility to tables, lists and various HTML elements. Built to be invisible and work on existing HTML', 'list,search,sort,table,dom,html,ui,列表,node', '在已有的HTML元素上生成列表/表格插件，表格数据的搜索和排序', '9238', '1.5.0', '71,96,', '1', '1', '2019-12-10 18:00:59');
INSERT INTO `dh_libs` VALUES ('232', 'Isotope', 'http://isotope.metafizzy.co', 'https://github.com/metafizzy/isotope', 'Filter and sort magical layouts', 'isotope,filtering,sorting,masonry,layout,过滤,排序', '过滤和排序页面元素', '9217', '3.0.6', '52,71,', '1', '1', '2019-12-11 17:59:07');
INSERT INTO `dh_libs` VALUES ('233', 'lazysizes', '', 'git://github.com/aFarkas/lazysizes.git', 'High performance (jankfree) lazy loader for images (including responsive images), iframes and scripts (widgets).', 'lazy,lazyload,performance,responsive,image,responsive', '图片懒加载', '9154', '4.0.2', '58,80,', '1', '1', '2019-12-11 17:53:08');
INSERT INTO `dh_libs` VALUES ('234', 'knockout', 'http://knockoutjs.com/', 'https://github.com/knockout/knockout.git', 'Knockout makes it easier to create rich, responsive UIs with JavaScript', 'mvvm,ui,templating', '轻量级的MVVM框架', '9147', '3.4.2', '71,', '1', '1', '2019-12-11 17:48:54');
INSERT INTO `dh_libs` VALUES ('235', 'Mock.js', 'http://mockjs.com/', 'https://github.com/nuysoft/Mock', 'Mock.js is a simulation data generator to help the front-end to develop and prototype separate from the back-end progress and reduce some monotony particularly while writing automated tests.', 'mock,mockJSON,mockAjax', 'Mock.js 生成随机数据，拦截 Ajax 请求', '9145', '1.0.0', '63,67,', '1', '1', '2019-12-10 18:19:01');
INSERT INTO `dh_libs` VALUES ('240', 'mousetrap', 'https://craig.is/killing/mice', 'https://github.com/ccampbell/mousetrap', 'Simple library for handling keyboard shortcuts', 'keyboard,shortcut,mouse', '轻量级自定义键盘快捷方式', '9078', '1.6.1', '99,', '1', '1', '2019-12-10 18:13:31');
INSERT INTO `dh_libs` VALUES ('242', 'KaTeX', 'https://khan.github.io/KaTeX/', 'https://github.com/Khan/KaTeX', 'Fast math typesetting for the web.', 'tex,latex,khan,数学', '数学公式转换插件', '8992', '0.9.0', '72,', '1', '1', '2019-12-10 15:41:42');
INSERT INTO `dh_libs` VALUES ('249', 'aframe', 'https://aframe.io/', 'https://github.com/aframevr/aframe.git', 'Building blocks for the VR Web', 'aframe,vr,webvr,3d,three,components,elements', 'Web VR框架', '8852', '0.7.1', '53,57,60,73,', '1', '1', '2019-12-10 15:37:57');
INSERT INTO `dh_libs` VALUES ('251', 'lowdb', '', 'https://github.com/typicode/lowdb', 'JSON database for Node and the browser powered by lodash API', 'json,数据库', 'json数据库,产生的数据保存在一个json文件中,适用于多端应用', '8769', '1.0.0', '95,', '1', '1', '2019-12-10 15:20:40');
INSERT INTO `dh_libs` VALUES ('257', 'trianglify', 'http://qrohlf.com/trianglify/', 'https://github.com/qrohlf/trianglify', 'Trianglify is a javascript library for generating colorful triangle meshes that can be used as SVG images and CSS backgrounds.', 'svg,d3.js,visualization', '生成不规则多边形库', '8553', '1.2.0', '53,74,76,', '1', '-1', '2019-12-10 15:30:23');
INSERT INTO `dh_libs` VALUES ('258', 'vue-resource', '', 'https://github.com/vuejs/vue-resource', 'A web request service for Vue.js', 'vue,vuejs,resource,mvvm,http', '基于Vue的http请求插件', '8535', '1.5.1', '64,', '1', '-1', '2019-12-10 15:28:18');
INSERT INTO `dh_libs` VALUES ('259', 'wow', 'https://www.delac.io/WOW/', 'https://github.com/matthieua/WOW', 'Reveal CSS animation as you scroll down a page', '滚动,页面,动画', '页面滚动动画插件', '8520', '1.1.2', '52,74,86,', '1', '1', '2019-12-10 15:13:50');
INSERT INTO `dh_libs` VALUES ('260', 'is_js', 'http://is.js.org', 'https://github.com/arasatasaygin/is.js', 'micro check library', 'type,presence,regexp,string,arithmetic,object,array,environment,time,configuration', 'Javascript对象类型检测库', '8468', '0.9.0', '67,72,', '1', '1', '2019-12-10 15:10:49');
INSERT INTO `dh_libs` VALUES ('261', 'react-intl', '', 'https://github.com/yahoo/react-intl', 'Internationalize React apps declaratively. This library provides React components and an API to format dates, numbers, and string messages, including pluralization.', 'intl,i18n,react,reactjs', 'React国际化输出文本组件', '8377', '1.2.2', '65,72,', '1', '-1', '2019-12-10 15:06:15');
INSERT INTO `dh_libs` VALUES ('263', 'remark', 'https://remarkjs.com', 'https://github.com/gnab/remark.git', 'A simple, in-browser, markdown-driven slideshow tool', 'slideshow,markdown,幻灯片', '将markdown文本生成幻灯片浏览特效', '8350', '0.14.0', '72,73,', '1', '1', '2019-12-10 15:26:22');
INSERT INTO `dh_libs` VALUES ('265', 'fullcalendar', 'http://fullcalendar.io/', 'https://github.com/fullcalendar/fullcalendar.git', 'Full-sized drag & drop event calendar', 'calendar,event,日历,插件', '可拖拽的日历插件', '8319', '3.9.0', ',', '1', '-1', '2019-12-10 14:59:05');
INSERT INTO `dh_libs` VALUES ('269', 'bokeh', 'https://docs.bokeh.org/en/latest/', 'https://github.com/bokeh/bokeh', 'Interactive, novel data visualization', 'bokeh,datavis,dataviz,visualization,plotting,plot,graph', '基于python的图表生成工具', '8211', '0.12.16', '52,53,85,', '1', '-1', '2019-12-10 14:52:51');
INSERT INTO `dh_libs` VALUES ('270', 'daterangepicker', 'http://www.daterangepicker.com/', 'https://github.com/dangrossman/daterangepicker', 'Date range picker component', 'bootstrap,daterangepicker', '日期范围选择插件', '8209', '3.0.3', '84,', '1', '-1', '2019-12-10 14:49:38');
INSERT INTO `dh_libs` VALUES ('272', 'sigma.js', 'http://sigmajs.org/', 'https://github.com/jacomyal/sigma.js.git', 'A JavaScript library dedicated to graph drawing.', 'sigma.js', '将json数据转化从2D图表插件', '8150', '1.2.1', '53,85,', '1', '-1', '2019-12-10 14:46:30');
INSERT INTO `dh_libs` VALUES ('276', 'favico.js', 'http://lab.ejci.net/favico.js/', 'https://github.com/ejci/favico.js', 'Favico.js is a library to manipulate the favicon, adding alert badges, render images or videos.', 'favico.js,badges,favicon', '通过Javascript代码让Favico新增交互效果', '8073', '0.3.10', '51,52,74,', '1', '-1', '2019-12-10 14:45:16');
INSERT INTO `dh_libs` VALUES ('278', 'jshint', 'http://jshint.com/', 'https://github.com/jshint/jshint.git', 'Static analysis tool for JavaScript', 'detect,code-analysis', '检查分析Javascript语法的库', '8023', '2.9.5', '67,', '1', '-1', '2019-12-09 18:16:46');
INSERT INTO `dh_libs` VALUES ('285', 'gremlins.js', '', 'https://github.com/marmelab/gremlins.js', 'A monkey testing library written in JavaScript, for Node.js and the browser. Use it to check the robustness of web applications by unleashing a horde of undisciplined gremlins.', 'monkey,test,testing,stress,gremlin', '', '7937', '0.1.0', '63,', '1', '-1', '2019-12-09 18:14:56');
INSERT INTO `dh_libs` VALUES ('288', 'tachyons', 'https://tachyons.io/', 'https://github.com/tachyons-css/tachyons', 'Performant, mobile-first, and 100% responsive modular css framework.', 'css,sass,oocss,performance,tachyons,tachyons.css', '', '7784', '4.9.1', '60,74,', '1', '-1', '2019-12-09 18:14:10');
INSERT INTO `dh_libs` VALUES ('289', 'react-router-redux', '', 'https://github.com/reactjs/react-router-redux.git', 'Ruthlessly simple bindings to keep react-router and redux in sync', 'react,redux,router', 'react状态管理库', '7784', '4.0.8', '88,', '1', '-1', '2019-12-09 18:08:48');
INSERT INTO `dh_libs` VALUES ('291', 'Primer', 'https://primer.style/', 'https://github.com/primer', 'Primer was created for GitHub by GitHub. We love it so much, we chose to open-source it to allow the community to design and build their own projects with Primer.', 'primer,css,github,primercss,design-system,sass,ui-components,framework', 'Github主导开发基于React的前端框架', '7675', '10.5.0', '60,', '1', '1', '2019-12-09 18:07:55');
INSERT INTO `dh_libs` VALUES ('292', 'hint.css', 'http://kushagragour.in/lab/hint/', 'https://github.com/chinchang/hint.css', 'A tooltip library in CSS for your lovely websites.', 'tooltip,ui,sass,css,help,hint', 'CSS3提示动效', '7668', '2.5.0', '51,52,74,', '1', '1', '2019-12-09 18:05:32');
INSERT INTO `dh_libs` VALUES ('293', 'matter-js', 'http://brm.io/matter-js/', 'https://github.com/liabru/matter-js', 'Matter.js is a 2D physics engine for the web ', 'javascript,canvas,html5,physics,physics engine,game engine,rigid body physics', '一款2d物理引擎', '7647', '0.12.0', '52,71,', '1', '1', '2019-12-09 18:03:26');
INSERT INTO `dh_libs` VALUES ('294', 'flexboxgrid', 'http://flexboxgrid.com', 'https://github.com/kristoferjoseph/flexboxgrid', 'Grid based off of CSS3 flexbox specification', 'browser,flexbox,grid,css', '流式布局框架', '7633', '6.3.1', '60,74,', '1', '1', '2019-12-09 17:59:56');
INSERT INTO `dh_libs` VALUES ('297', 'push.js', 'https://pushjs.org/', 'https://github.com/Nickersoft/push.js', 'A compact, cross-browser solution for Javascript desktop notifications', 'push,Notifications', '一款桌面版，通知,推送插件', '7599', '1.0.5', '72,73,', '1', '1', '2019-12-09 17:51:09');
INSERT INTO `dh_libs` VALUES ('298', 'jquery.imagesloaded', 'http://desandro.github.com/imagesloaded/', 'https://github.com/desandro/imagesloaded', 'You images done yet or what?', 'images,load,jquery,图片,加载', '一款图片懒加载的插件，支持以jquery插件的方式调用', '7578', '4.1.4', '58,62,', '1', '1', '2019-12-09 17:48:32');
INSERT INTO `dh_libs` VALUES ('300', 'showdown', 'http://showdownjs.com', 'https://github.com/showdownjs/showdown', 'A Markdown to HTML converter written in Javascript', 'markdown,converter', 'Markdown和HTML代码相互转换插件', '7546', '1.8.6', '50,67,72,', '1', '-1', '2019-12-12 11:30:15');
INSERT INTO `dh_libs` VALUES ('302', 'babylonjs', 'https://www.babylonjs.com', 'https://github.com/BabylonJS/Babylon.js', 'Babylon.js is a JavaScript 3D engine based on webgl.', '3D,javascript,html5,webgl', 'Babylon.js是一个Javascript 3D引擎', '7523', '3.2.0', '52,53,57,', '1', '1', '2019-12-12 11:15:57');
INSERT INTO `dh_libs` VALUES ('303', 'jquery_lazyload', 'https://appelsiini.net/projects/lazyload/', 'https://github.com/tuupola/jquery_lazyload.git', 'Lazyload images with jQuery', 'jquery-plugin,ecosystem:jquery,jquery,懒加载,图片', '基于JQuery的懒加载图片插件', '7520', '1.9.7', '58,62,80,', '1', '1', '2019-12-12 11:13:45');
INSERT INTO `dh_libs` VALUES ('305', 'aos', 'https://michalsnik.github.io/aos/', 'https://github.com/michalsnik/aos.git', 'Animate on scroll library', '滚动,动画', '页面滚动时的动画效果', '7496', '2.3.0', '52,74,86,', '1', '1', '2019-12-12 11:12:02');
INSERT INTO `dh_libs` VALUES ('306', 'mathjs', 'http://mathjs.org', 'https://github.com/josdejong/mathjs', 'Math.js is an extensive math library for JavaScript and Node.js. It features a flexible expression parser and offers an integrated solution to work with numbers, big numbers, complex numbers, units, and matrices.', '函数式,计算,ndoejs', '基于函数式实现的数学运算库', '7476', '4.4.0', '59,', '1', '-1', '2019-12-12 11:11:03');
INSERT INTO `dh_libs` VALUES ('307', 'slideout', 'https://slideout.js.org/', 'https://github.com/Mango/slideout', 'A touch slideout navigation menu for your mobile web apps.', 'slideout,offcanvas,menu,touch', '一款触碰滑出侧边栏的插件', '7475', '1.0.1', '73,83,', '1', '1', '2019-12-09 17:45:59');
INSERT INTO `dh_libs` VALUES ('309', 'limonte-sweetalert2', 'https://sweetalert2.github.io/', 'https://github.com/sweetalert2/sweetalert2.git', 'A beautiful, responsive, customizable and accessible (WAI-ARIA) replacement for JavaScript\'s popup boxes, supported fork of sweetalert', 'JavaScript,SweetAlert,SweetAlert2,alert,prompt', '弹出窗时的动画插件', '7474', '7.21.1', '52,61,74,', '1', '-1', '2019-12-12 11:08:35');
INSERT INTO `dh_libs` VALUES ('310', 'pickadate.js', 'http://amsul.github.io/pickadate.js', 'https://github.com/amsul/pickadate.js.git', 'The mobile-friendly, responsive, and lightweight jQuery date & time input picker.', 'date,time,picker,input,responsive', '一款基于jquery的适用于移动端的日期插件', '7470', '3.5.6', '62,73,74,84,', '1', '1', '2019-12-09 17:43:15');
INSERT INTO `dh_libs` VALUES ('311', 'docsify', 'https://docsify.js.org', 'https://github.com/QingWei-Li/docsify.git', 'A magical documentation generator.', 'doc,docs,documentation,creator,generator', '轻量级文档编写工具，自动将Markdown内容转换为HTML，支持插件开发', '7467', '4.6.10', '67,72,', '1', '-1', '2019-12-09 17:35:17');
INSERT INTO `dh_libs` VALUES ('312', 'jquery.transit', 'http://ricostacruz.com/jquery.transit/', 'https://github.com/rstacruz/jquery.transit', 'Smooth CSS3 transitions and transformations for jQuery.', 'css3,transitions,transformations,jquery', '基于CSS3的jquery动画插件', '7441', '0.9.12', '52,62,74,', '1', '1', '2019-12-09 17:37:11');
INSERT INTO `dh_libs` VALUES ('313', 'interact.js', 'http://interactjs.io', 'https://github.com/taye/interact.js.git', 'Drag and drop, resizing and multi-touch gestures with inertia and snapping for modern browsers (and also IE9+)', 'interact.js,draggable,droppable,drag,drop,drag and drop,resize,touch,multi-touch,gesture,snap,inertia,grid,autoscroll,SVG', '拖拽，支持多点触屏', '7425', '1.2.9', '89,', '1', '1', '2019-12-09 17:34:01');
INSERT INTO `dh_libs` VALUES ('314', 'Ladda', 'http://lab.hakim.se/ladda', 'https://github.com/hakimel/Ladda.git', 'Buttons with built-in loading indicators', 'Ladda,按钮,动画,特效', '让您的btn带上Loading的特效', '7365', '1.0.6', '52,73,74,', '1', '-1', '2019-12-12 11:06:59');
INSERT INTO `dh_libs` VALUES ('317', 'iCheck', 'http://fronteed.com/iCheck/', 'https://github.com/fronteed/iCheck', 'Highly customizable checkboxes and radio buttons (jQuery and Zepto). Features: identical inputs across different browsers and devices (both desktop and mobile), touch devices support (iOS, Android, BlackBerry, Windows Phone, Amazon Kindle), keyboard acces', '美化,复选,单选', '复选框/单选框美化', '7324', '1.0.2', '93,96,', '1', '-1', '2019-12-12 11:06:23');
INSERT INTO `dh_libs` VALUES ('318', 'muuri', 'https://haltu.github.io/muuri/', 'https://github.com/haltu/muuri.git', 'Responsive, sortable, filterable and draggable grid layouts.', 'grid布局,响应式,拖拽,过滤', 'Grid布局,它是响应式的,支持拖拽,过滤,支持IE9+', '7267', '0.5.4', '73,83,89,', '1', '1', '2019-12-09 14:14:32');
INSERT INTO `dh_libs` VALUES ('320', 'vis', 'http://visjs.org/', 'git://github.com/almende/vis.git', 'A dynamic, browser-based visualization library.', '图表', '2D/3D绘图插件', '7155', '4.21.0', '53,57,73,85,', '1', '-1', '2019-12-09 14:12:53');
INSERT INTO `dh_libs` VALUES ('321', 'react-grid-layout', 'https://strml.github.io/react-grid-layout/examples/0-showcase.html', 'git+https://github.com/STRML/react-grid-layout.git', 'A draggable and resizable grid layout with responsive breakpoints, for React.', 'react,拖拽,网格', '基于React开发的可拖拽的Grid网格插件', '7130', '0.16.6', '65,89,', '1', '1', '2019-12-09 14:10:31');
INSERT INTO `dh_libs` VALUES ('322', 'tracking.js', 'http://trackingjs.com', 'http://github.com:eduardolundgren/tracking.js.git', 'A modern approach for Computer Vision on the web.', 'tracking,trackingjs,webrtc', '基于浏览器的人脸识别捕捉工具', '7126', '1.1.3', '78,', '1', '-1', '2019-12-09 14:08:54');
INSERT INTO `dh_libs` VALUES ('323', 'cropper', 'https://fengyuanchen.github.io/jquery-cropper/', 'https://github.com/fengyuanchen/jquery-cropper', 'A simple jQuery image cropping plugin.', '图片,jquery', '这是一款基于浏览器的图片编辑的工具', '7107', '4.0.0', '58,62,', '1', '1', '2020-02-28 17:54:37');
INSERT INTO `dh_libs` VALUES ('324', 'turbolinks', '', 'https://github.com/turbolinks/turbolinks.git', 'Turbolinks makes navigating your web application faster', 'rails,navigate,fast,turbolinks,popular', '页面切换效果', '7087', '5.1.1', '73,', '1', '-1', '2019-12-12 11:00:29');
INSERT INTO `dh_libs` VALUES ('328', 'dynamics.js', 'http://dynamicsjs.com', 'https://github.com/michaelvillar/dynamics.js', 'Javascript library to create physics-related animations', 'animation,javascript,requestAnimationFrame,spring,physic,dynamics', '2D物理动画库', '6978', '1.1.5', '52,77,', '1', '1', '2019-12-09 14:07:14');
INSERT INTO `dh_libs` VALUES ('329', 'EaselJS', 'https://createjs.com/easeljs/', 'https://github.com/CreateJS/EaselJS', 'EaselJS is a library for building high-performance interactive 2D content in HTML5. It provides a feature-rich display  list to allow you to manipulate and animate graphics. It also provides a robust interactive model for mouse and touch  interactions.', 'canvas,webgl,graphics,animation,html5', '2d交互库', '6973', '1.0.2', '52,53,73,77,', '1', '1', '2019-12-12 10:58:36');
INSERT INTO `dh_libs` VALUES ('330', 'tailwindcss', 'https://tailwindcss.com', 'https://github.com/tailwindcss/tailwindcss', 'A utility-first CSS framework for rapidly building custom user interfaces.', 'tailwindcss,css,css-framework,postcss,functional-css,utility-classes,responsive', '一个快速自定义CSS框架', '6951', '0.5.3', '49,60,74,', '1', '-1', '2019-12-09 15:15:33');
INSERT INTO `dh_libs` VALUES ('331', 'metrics-graphics', 'http://metricsgraphicsjs.org', 'git://github.com/mozilla/metrics-graphics.git', 'A library optimized for concise, principled data graphics and layouts', '图表', '图表插件', '6940', '2.15.1', '53,76,77,85,', '1', '-1', '2019-12-12 10:55:50');
INSERT INTO `dh_libs` VALUES ('333', 'layer', 'http://layer.layui.com/', 'https://github.com/sentsin/layer', 'Cross-end web layer tool', 'layer,layui,dialog,jquery', ' 基于jquery的弹出层UI框架', '6902', '2.3', '60,62,73,', '1', '1', '2019-12-09 13:58:03');
INSERT INTO `dh_libs` VALUES ('334', 'spectre.css', 'https://picturepan2.github.io/spectre', 'https://github.com/picturepan2/spectre.git', 'Spectre.css: a lightweight, responsive and modern CSS framework.', '手机,移动,ui', 'CSS框架', '6891', '0.5.1', '49,60,72,73,74,83,', '1', '1', '2019-12-09 14:06:20');
INSERT INTO `dh_libs` VALUES ('339', 'color-thief', 'http://lokeshdhakar.com/projects/color-thief/', 'https://github.com/lokesh/color-thief.git', 'Get the dominant color or color palette from an image.', 'color,palette,sampling,image,picture,photo,canvas', '从图片中获取颜色', '6845', '2.0.1', '70,72,', '1', '-1', '2019-12-09 13:56:25');
INSERT INTO `dh_libs` VALUES ('343', 'swipe', 'http://swipejs.com/', 'https://github.com/thebird/Swipe.git', 'Swipe is a lightweight mobile slider with 1-to-1 touch movement.', 'swipe,touch,mobile,slider', '手机端触碰翻页的插件', '6735', '2.0.0', '73,83,', '1', '1', '2019-12-09 13:55:49');
INSERT INTO `dh_libs` VALUES ('346', 'numeral.js', 'http://numeraljs.com/', 'https://github.com/adamwdraper/Numeral-js', 'Format and manipulate numbers.', 'numeral,number,format,time,money,percentage', '操作数字，自定义数字格式', '6693', '2.0.6', '59,', '1', '1', '2019-12-09 13:55:01');
INSERT INTO `dh_libs` VALUES ('349', 'vConsole', '', 'https://github.com/Tencent/vConsole', 'A lightweight, extendable front-end developer tool for mobile web page.', 'console,lightweight,extendable,debug,mobile', '针对移动端网页的模拟浏览器console调试工具', '6642', '3.2.0', '63,', '1', '-1', '2019-12-09 13:07:17');
INSERT INTO `dh_libs` VALUES ('353', 'barba.js', 'http://barbajs.org', 'https://github.com/luruke/barba.js', 'Barba.js it\'s a small, flexible and dependency free library that helps you creating fluid and smooth transition between your website\'s pages.', 'pjax,transitions,navigation', '实现网站不同页面之间的平滑过渡的跳转', '6590', '1.0.0', '73,', '1', '-1', '2019-12-09 13:05:31');
INSERT INTO `dh_libs` VALUES ('356', 'simple-icons', 'https://simpleicons.org', 'https://github.com/danleech/simple-icons.git', 'PNG and SVG icons for popular brands', 'icons,SVG,PNG,image', '免费的SVG商标', '6561', '3.0.1', '75,76,', '1', '-1', '2019-12-09 12:37:23');
INSERT INTO `dh_libs` VALUES ('357', 'jquery.perfect-scrollbar', 'https://utatti.github.io/perfect-scrollbar/', 'https://github.com/utatti/perfect-scrollbar', 'Minimalistic but perfect custom scrollbar plugin', 'jquery-plugin,frontend,scroll,scrollbar', '轻量级的滚动插件', '6510', '1.3.0', '86,', '1', '-1', '2019-12-09 13:00:34');
INSERT INTO `dh_libs` VALUES ('361', 'gpu.js', 'http://gpu.rocks/', 'git+https://github.com/gpujs/gpu.js.git', 'GPU Accelerated JavaScript', 'gpgpu,GPU,webgl,accelerate', 'GPU加速Javascript执行库', '6443', '1.2.0', '80,', '1', '-1', '2019-12-09 12:58:35');
INSERT INTO `dh_libs` VALUES ('362', 'sinon.js', 'http://sinonjs.org/', 'https://github.com/sinonjs/sinon', 'JavaScript test spies, stubs and mocks.', 'utility,popular,spies,stubs,mock,testing', '单元测试库', '6416', '5.0.10', '63,', '1', '-1', '2019-12-09 13:00:17');
INSERT INTO `dh_libs` VALUES ('365', 'fingerprintjs2', 'https://valve.github.io/fingerprintjs2/', 'https://github.com/Valve/fingerprintjs2.git', 'Modern & flexible browser fingerprinting library', 'browser,identification,fingerprint,fingerprinting,privacy', '基于浏览器的指纹提取库', '6373', '1.8.0', '94,', '1', '-1', '2019-12-09 12:58:12');
INSERT INTO `dh_libs` VALUES ('394', 'antd-mobile', 'https://mobile.ant.design', 'https://github.com/ant-design/ant-design-mobile', 'A configurable Mobile UI specification and React-based implementation.', 'ant,react,ui,组件', '一个基于 Preact / React / React Native 的 UI 组件库', '5952', '2.1.10', '49,60,65,', '1', '1', '2019-12-09 12:33:17');
INSERT INTO `dh_libs` VALUES ('399', 'tween.js', '', 'https://github.com/tweenjs/tween.js', 'Super simple, fast and easy to use tweening engine which incorporates optimised Robert Penner\'s equations.', 'tween,interpolation', '动画库', '5871', '17.2.0', '52,', '1', '1', '2019-12-06 23:46:43');
INSERT INTO `dh_libs` VALUES ('401', 'mathjax', 'http://www.mathjax.org/', 'https://github.com/mathjax/MathJax', 'MathJax is an open source JavaScript display engine for mathematics that works in all browsers.', 'Math,MathML,LaTeX,TeX', '数学公式显示引擎', '5854', '2.7.4', '52,53,74,76,', '1', '1', '2019-12-06 23:45:02');
INSERT INTO `dh_libs` VALUES ('403', 'js-sequence-diagrams', 'http://bramp.github.io/js-sequence-diagrams/', 'https://github.com/bramp/js-sequence-diagrams', 'Generates UML sequence diagrams from simple text', 'svg,uml,sequence,diagram', '生成UML图形', '5842', '1.0.6', '53,74,76,85,', '1', '1', '2019-12-06 23:42:04');
INSERT INTO `dh_libs` VALUES ('404', 'jquery-infinitescroll', 'https://infinite-scroll.com/', 'https://github.com/metafizzy/infinite-scroll', 'Infinite Scroll is a JavaScript plugin that automatically adds the next page, saving users from a full page load.', 'jquery,scroll,infinite,masonry,plugin,ui,DOM,browser', '无线滚动加载内容插件，可以作为jquery插件来使用，也可以作为一个单独的库来使用', '5824', '3.0.4', '62,73,86,', '1', '1', '2019-12-06 23:39:10');
INSERT INTO `dh_libs` VALUES ('406', 'fancybox', 'https://fancyapps.com/fancybox/3/', 'https://github.com/fancyapps/fancybox', 'Touch enabled, responsive and fully customizable jQuery lightbox script', 'fancybox,jquery,images,image,zoom,zooming', '基于jquery弹出层插件', '5786', '3.3.5', '58,61,62,73,', '1', '1', '2019-12-06 23:35:16');
INSERT INTO `dh_libs` VALUES ('407', 'two.js', 'http://jonobr1.github.com/two.js', 'https://github.com/jonobr1/two.js', 'A two-dimensional drawing api meant for modern browsers.', 'dom,w3c,visualization,svg,animation,canvas2d,webgl,rendering,motiongraphics', '2D艺术绘图插件', '5783', '0.6.0', '52,53,77,', '1', '1', '2019-12-06 23:33:43');
INSERT INTO `dh_libs` VALUES ('409', 'chai', 'http://chaijs.com', 'https://github.com/chaijs/chai', 'BDD/TDD assertion library for node.js and the browser. Test framework agnostic.', 'test,assertion,assert,testing,chai', '单元测试断言库', '5737', '4.1.2', '63,', '1', '-1', '2019-12-12 10:54:04');
INSERT INTO `dh_libs` VALUES ('410', 'react-slick', '', 'https://github.com/akiran/react-slick', ' React port of slick carousel', 'slick,carousel,Image slider,orbit,slider,react-component', '基于React的旋转木马组件', '5721', '0.23.1', '65,66,', '1', '-1', '2019-12-12 10:53:46');
INSERT INTO `dh_libs` VALUES ('411', 'js-beautify', 'http://jsbeautifier.org/', 'https://github.com/beautify-web/js-beautify', 'jsbeautifier.org for node', '美化,javascript,json', 'javascript/json代码格式化', '5715', '1.7.5', '67,72,', '1', '1', '2019-12-12 10:53:25');
INSERT INTO `dh_libs` VALUES ('412', 'startbootstrap-sb-admin-2', 'https://startbootstrap.com/template-overviews/sb-admin-2/', 'https://github.com/BlackrockDigital/startbootstrap-sb-admin-2', 'A free, open source, Bootstrap admin theme created by Start Bootstrap', 'bootstrap,theme', 'bootstrap创建后台界面模板', '5667', '3.3.7+1', '60,68,', '1', '1', '2019-12-12 10:50:01');
INSERT INTO `dh_libs` VALUES ('413', 'datatables', 'http://datatables.net', 'https://github.com/DataTables/DataTables.git', 'DataTables enhances HTML tables with the ability to sort, filter and page the data in the table very easily. It provides a comprehensive API and set of configuration options, allowing you to consume data from virtually any data source.', 'DataTables,DataTable,table,grid,filter,sort,page,internationalisable', '基于JQuery的数据表格插件', '5639', '1.10.16', '62,96,', '1', '-1', '2019-12-12 10:49:43');
INSERT INTO `dh_libs` VALUES ('414', 'tone', 'https://tonejs.github.io/', 'https://github.com/Tonejs/Tone.js.git', 'A Web Audio framework for making interactive music in the browser.', 'Web Audio,Web Audio API,Synthesis,Playback,Effect,Instrument,DSP,Signal Processing,Interactive Music', '基于Web Audio API 开发的音乐交互框架', '5605', '13.1.22', '69,', '1', '-1', '2019-12-12 10:49:32');
INSERT INTO `dh_libs` VALUES ('416', 'flot', 'http://flotcharts.org/', 'https://github.com/flot/flot', 'Attractive Javascript plotting for jQuery', 'ie,jquery', '基于jquery的图标插件', '5603', '0.8.3', '53,62,', '1', '1', '2019-12-12 10:45:41');
INSERT INTO `dh_libs` VALUES ('421', 'magic', '', 'https://github.com/miniMAC/magic.git', 'CSS3 Animations with special effects', 'css,css3,magic,animations', 'CSS3动画库', '5556', '1.1.0', '52,62,74,', '1', '1', '2019-12-12 10:43:30');
INSERT INTO `dh_libs` VALUES ('423', 'javascript-state-machine', '', 'https://github.com/jakesgordon/javascript-state-machine.git', 'A simple finite state machine library', 'state-machine,fsm', 'Javascript有限状态机库', '5554', '2.0.0', '67,', '1', '1', '2019-12-06 21:36:24');
INSERT INTO `dh_libs` VALUES ('425', 'turn.js', 'http://www.turnjs.com', 'https://github.com/blasten/turn.js.git', 'The page flip effect for HTML5', 'flipbooks,HTML5,CSS3', 'js模拟翻书插件', '5526', '3', '52,71,', '1', '1', '2019-12-06 21:36:26');
INSERT INTO `dh_libs` VALUES ('427', 'layzr.js', 'http://callmecavs.github.io/layzr.js/', 'https://github.com/callmecavs/layzr.js.git', 'A small, fast, modern, and dependency-free library for lazy loading.', 'images,lazy,load,scroll', '图片懒加载插件', '5513', '2.2.2', '58,', '1', '1', '2019-12-06 21:36:27');
INSERT INTO `dh_libs` VALUES ('428', 'clmtrackr', '', 'https://github.com/auduno/clmtrackr.git', 'clmtrackr is a javascript library for fitting facial models to faces in videos or images.', 'track,face,array', '人脸追踪库', '5503', '1.0.2', '78,', '1', '1', '2019-12-06 21:36:28');
INSERT INTO `dh_libs` VALUES ('429', 'react-move', 'https://react-move.js.org/', 'https://github.com/tannerlinsley/react-move.git', 'Beautifully and deterministically animate anything in React', 'react,animate,animation,interpolation,move,time', '基于React的动画库', '5477', '1.6.1', '52,65,', '1', '-1', '2019-12-06 21:36:29');
INSERT INTO `dh_libs` VALUES ('434', 'react-sortable-hoc', 'https://clauderic.github.io/react-sortable-hoc/', 'https://github.com/clauderic/react-sortable-hoc.git', 'Set of higher-order components to turn any list into a sortable, touch-friendly, animated list', 'react,reactjs,react-component,sortable,sortable-list,list,sortable list,smooth,animated,hoc,higher-order,component,drag-and-drop,sorting,javascript,front-end,dragging,grid,higher-order-component', '基于React的拖拽列表插件', '5387', '0.8.1', '65,', '1', '1', '2019-12-06 21:36:30');
INSERT INTO `dh_libs` VALUES ('436', 'lazy.js', 'http://dtao.github.io/lazy.js/', 'https://github.com/dtao/lazy.js', 'Like Underscore, but lazier', 'lazy,functional,performance,speed,util', '类似Underscore的函数式编程库', '5353', '0.5.1', '81,', '1', '1', '2019-12-06 23:31:56');
INSERT INTO `dh_libs` VALUES ('440', 'peerjs', 'http://peerjs.com/', 'https://github.com/peers/peerjs', 'PeerJS client', 'js,WebRTC', '基于WebRTC的即时消息', '5324', '0.3.14', '79,', '1', '1', '2019-12-06 21:36:33');
INSERT INTO `dh_libs` VALUES ('442', 'stats.js', 'https://github.com/mrdoob/stats.js/', 'https://github.com/mrdoob/stats.js/', 'JavaScript Performance Monitor', 'fps,framerate', 'Javascript性能监控插件', '5302', 'r16', '63,67,', '1', '-1', '2019-12-06 21:36:34');
INSERT INTO `dh_libs` VALUES ('445', 'Vue.Draggable', '', 'https://github.com/SortableJS/Vue.Draggable.git', 'Vue component allowing drag-and-drop sorting in sync with View-Model. Based on Sortable.js.', 'vue,list,drag,drop', '基于Sortable.js开发的Vue组件', '5244', '15.0.0', '64,', '1', '-1', '2019-12-06 21:36:35');
INSERT INTO `dh_libs` VALUES ('450', 'ramjet.js', 'http://www.rich-harris.co.uk/ramjet/', 'https://github.com/rich-harris/ramjet.git', 'Transform DOM elements into each another with smooth transitions', 'ramjet.js', 'DOM状态平滑切换特效', '5173', '0.5.0', '52,71,73,74,', '1', '1', '2019-12-06 21:36:36');
INSERT INTO `dh_libs` VALUES ('452', 'crypto-js', '', 'http://github.com/brix/crypto-js.git', 'JavaScript library of crypto standards.', 'security,crypto,Hash,MD5,SHA1,SHA-1,SHA256,SHA-256,RC4,Rabbit,AES,DES,PBKDF2,HMAC,OFB,CFB,CTR,CBC,Base64', 'Javascript加密库，支持多种加密方式', '5159', '3.1.9-1', '82,', '1', '-1', '2019-12-06 21:36:37');
INSERT INTO `dh_libs` VALUES ('453', 'flag-icon-css', '', 'https://github.com/lipis/flag-icon-css', ':flags: A collection of all country flags in SVG — plus the CSS for easier integration', 'svg,flag,collection', '基于SVG绘制的国旗库', '5127', '3.1.0', '53,75,76,', '1', '-1', '2019-12-06 21:36:37');
INSERT INTO `dh_libs` VALUES ('458', 'animateplus', '', 'git+https://github.com/bendc/animateplus.git', 'CSS and SVG animation library', 'animate,animation,css,svg,javascript', 'CSS/SVG动画库', '5028', '2.1.1', '52,53,74,76,', '1', '1', '2019-12-06 21:36:38');
INSERT INTO `dh_libs` VALUES ('461', 'flickity', 'http://flickity.metafizzy.co/', 'https://github.com/metafizzy/flickity', 'Touch, responsive, flickable galleries', 'gallery,carousel,slider,touch,responsive,flick', '移动端触碰滑动插件', '4968', '2.1.1', '53,66,71,73,74,81,83,', '1', '1', '2019-12-06 21:36:39');
INSERT INTO `dh_libs` VALUES ('462', 'tippy.js', 'https://atomiks.github.io/tippyjs/', 'https://github.com/atomiks/tippyjs.git', 'Vanilla JS Tooltip Library', 'tooltip,js,lightweight,purejs', 'tips提示插件', '4966', '2.5.2', '51,', '1', '1', '2019-12-06 21:36:40');
INSERT INTO `dh_libs` VALUES ('463', 'whitestorm.js', 'https://whsjs.readme.io/docs', 'https://github.com/WhitestormJS/whs.js', 'Framework for developing 3D web apps with physics.', 'whitestorm.js,three.js,webgl,ammo.js,api,3d,web,javascript,webpack,gulpjs,whs.js', '用于创建3D web应用程序的物理引擎', '4953', '2.1.9', '57,', '1', '-1', '2019-12-06 21:36:44');
INSERT INTO `dh_libs` VALUES ('467', 'annyang', 'https://www.talater.com/annyang/', 'https://github.com/TalAter/annyang.git', 'A javascript library for adding voice commands to your site, using speech recognition', 'annyang,annyang.js,speechrecognition,webkitspeechrecognition,voice,speech,recognition', '语音识别库', '4941', '2.6.1', '69,', '1', '1', '2019-12-06 21:36:42');
INSERT INTO `dh_libs` VALUES ('471', 'weather-icons', 'http://erikflowers.github.io/weather-icons/', 'git://github.com/erikflowers/weather-icons.git', '215 weather themed icons inspired by Font Awesome and ready for Bootstrap', 'css,font,icons,weather', 'CSS3天气图标套件', '4908', '2.0.9', '68,74,75,', '1', '1', '2019-12-06 21:36:45');
INSERT INTO `dh_libs` VALUES ('472', 'json-editor', '', 'https://github.com/jdorn/json-editor.git', 'JSON Schema based editor', 'json,schema,jsonschema,editor', 'JSON编辑插件', '4905', '0.7.28', '67,', '1', '-1', '2019-12-06 21:36:46');
INSERT INTO `dh_libs` VALUES ('473', 'countup.js', 'https://inorganik.github.io/countUp.js/', 'git+https://github.com/inorganik/countUp.js.git', 'Animates a numerical value by counting to it', 'countup,javascript,animation', '数字递增特效库', '4884', '1.9.3', '59,72,', '1', '1', '2019-12-06 21:36:46');
INSERT INTO `dh_libs` VALUES ('475', 'SyntaxHighlighter', 'http://alexgorbatchev.com/SyntaxHighlighter', 'https://github.com/syntaxhighlighter/syntaxhighlighter.git', 'SyntaxHighlighter is a fully functional self-contained code syntax highlighter developed in JavaScript.', 'highlight,highlighter', '语法高亮', '4831', '3.0.83', '67,', '1', '-1', '2019-12-06 21:36:48');
INSERT INTO `dh_libs` VALUES ('477', 'xterm', 'https://xtermjs.org/', 'git+https://github.com/sourcelair/xterm.js', 'Full xterm terminal, in your browser', 'xterm,terminal,browser-tty', '基于浏览器的命令行工具库', '4820', '2.9.2', '72,', '1', '1', '2019-12-06 21:36:52');
INSERT INTO `dh_libs` VALUES ('478', 'octicons', 'http://octicons.github.com/', 'git://github.com/primer/octicons.git', 'GitHub\'s icon font', 'GitHub,icons,font,web font,icon font,svg,octicons', 'Github图标套件', '4809', '4.4.0', '75,', '1', '1', '2019-12-06 21:36:51');
INSERT INTO `dh_libs` VALUES ('479', 'vue-strap', 'https://yuche.github.io/vue-strap/', 'https://github.com/yuche/vue-strap', 'Bootstrap components built with Vue.js', 'vue,vue-bootstrap,vue-component,bootstrap', '基于Vue的类似Bootstrap样式的框架', '4785', '1.1.40', '60,64,', '1', '-1', '2019-12-06 21:36:50');
INSERT INTO `dh_libs` VALUES ('481', 'seamless-immutable', '', 'https://github.com/rtfeldman/seamless-immutable.git', 'Immutable data structures for JavaScript which are backwards-compatible with normal JS Arrays and Objects.', 'immutable', '不可变数据结构Javascript库', '4767', '7.1.3', '67,', '1', '-1', '2019-12-06 21:36:52');
INSERT INTO `dh_libs` VALUES ('482', 'esprima', 'http://esprima.org', 'https://github.com/jquery/esprima.git', 'ECMAScript parsing infrastructure for multipurpose analysis', 'ast,ecmascript,javascript,parser,syntax', 'Javascript代码词法分析工具', '4742', '2.7.3', '67,', '1', '-1', '2019-12-06 21:36:54');
INSERT INTO `dh_libs` VALUES ('485', 'cytoscape', 'http://js.cytoscape.org', 'https://github.com/cytoscape/cytoscape.js.git', 'Graph theory (a.k.a. network) library for analysis and visualisation', 'graph,theory,visualisation,visualization,analysis', '可视化图论插件', '4733', '3.2.12', '53,', '1', '-1', '2019-12-06 21:36:58');
INSERT INTO `dh_libs` VALUES ('488', 'cubism', 'http://square.github.com/cubism/', 'https://github.com/square/cubism.git', 'A JavaScript library for time series visualization.', 'time series,visualization,d3', '基于D3的绘图插件', '4708', '1.6.0', '52,53,', '1', '1', '2019-12-06 21:36:58');
INSERT INTO `dh_libs` VALUES ('491', 'jquery.form', 'https://jquery-form.github.io/form/', 'https://github.com/jquery-form/form.git', 'The jQuery Form Plugin allows you to easily and unobtrusively upgrade HTML forms to use AJAX.', 'jquery,ajax,jquery-plugin,json,json-form,html-form,form,jquery-form', '基于jquery的表单插件', '4668', '4.2.2', '62,', '1', '1', '2019-12-06 21:36:59');
INSERT INTO `dh_libs` VALUES ('494', 'hamburgers', 'https://jonsuh.com/hamburgers/', 'https://github.com/jonsuh/hamburgers.git', 'Collection of tasty CSS-animated hamburger icons. Includes Sass files (modular and customizable), so cook up your own hamburger.', 'css,hamburger,hamburgers,menu,sass,scss', 'CSS3图标动效', '4607', '0.9.3', '52,73,74,', '1', '-1', '2019-12-06 21:37:00');
INSERT INTO `dh_libs` VALUES ('496', 'cssgram', 'https://github.com/una/CSSgram', 'https://github.com/una/CSSgram', 'Instagram filter library in Sass and CSS.', 'cssgram,filters,CSS,library,photo,effects', '图片特效', '4581', '0.1.12', '58,', '1', '-1', '2019-12-06 21:37:00');
INSERT INTO `dh_libs` VALUES ('497', 'elevator.js', 'http://tholman.com/elevator.js/', 'https://github.com/tholman/elevator.js.git', 'Elevator.js fixes those awkward ', 'scroll,top,elevator,Elevator,Easter Egg', '滚动到顶部插件，滚动过程中可加入音效', '4557', '1.0.1', '73,', '1', '-1', '2019-12-06 21:37:01');
INSERT INTO `dh_libs` VALUES ('499', 'heatmap.js', 'https://www.patrick-wied.at/static/heatmapjs/', 'https://github.com/pa7/heatmap.js.git', 'Dynamic JavaScript Heatmaps for the Web', 'heatmap,googlemaps,leaflet', '3D绘图插件', '4501', '2.0.2', '53,57,', '1', '-1', '2019-12-06 21:37:02');
INSERT INTO `dh_libs` VALUES ('500', 'Sal.js', 'https://mciastek.github.io/sal/', 'https://github.com/mciastek/sal', 'Lightweight scroll animation library', '滚动,scroll,animation,动画', '轻量级滚动动画库', '0', null, '52,73,74,86,', '1', '1', '2019-12-06 21:37:03');
INSERT INTO `dh_libs` VALUES ('501', 'jQuery Terminal Emulator', 'https://terminal.jcubic.pl', 'https://github.com/jcubic/jquery.terminal', 'jQuery Terminal Emulator is a plugin for creating command line interpreters in your applications.', 'jquery,命令行,javascript', '基于JQuery的Javascript模拟命令行插件', '0', null, '50,67,', '1', '1', '2019-12-06 21:37:04');
INSERT INTO `dh_libs` VALUES ('502', 'Symfony Panther', '', 'https://github.com/symfony/panther', 'A browser testing and web crawling library for PHP and Symfony', 'php,Symfony,爬虫,自动化', '一个基于PHP and Symfony开发的库，的爬虫和浏览器测试', '0', null, '63,91,92,', '1', '1', '2019-12-06 21:37:04');
INSERT INTO `dh_libs` VALUES ('503', 'Selection.js', 'https://simonwep.github.io/selection/', 'https://github.com/Simonwep/selection', 'Selection - A simple and lightweight library to realize visual DOM Selections, like on your Desktop. No jQuery. Supports any CSS library, e.g. Bootstrap. Including vertical & horizontal scroll support.', '拖动,选择', '一款轻量级的拖动选择元素的库，类似桌面PC端系统，不依赖于jquery，支持任何的CSS框架，支持横向和竖向滚动', '0', null, '71,89,93,', '1', '1', '2019-12-06 21:37:07');
INSERT INTO `dh_libs` VALUES ('504', 'Scroll-hint', 'https://appleple.github.io/scroll-hint/', 'https://github.com/appleple/scroll-hint', 'A JavaScript library to suggest that the elements are scrollable horizontally, with the pointer icon.', '滚动,提示', '一款提示内容可以横向滚动的交互式库', '0', null, '86,89,', '1', '-1', '2019-12-06 21:37:08');
INSERT INTO `dh_libs` VALUES ('505', 'v-clipboard', '', 'https://github.com/euvl/v-clipboard', 'Vue.js clipboard library (no dependencies, less than 2kb)', 'vue,复制', '基于Vue实现的文本复制的库', '0', null, '64,71,', '1', '-1', '2020-01-10 11:15:34');
INSERT INTO `dh_libs` VALUES ('506', 'Glorious Codes ', 'https://glorious.codes/', 'https://github.com/glorious-codes/glorious-demo', 'The easiest way to demonstrate your code in action. ', 'javascript,代码,动态,动画', 'Glorious Codes 为你提供一种更为便捷度的方式，借助动效来显示代码。它是一个 JavaScript 库，它使用 API 帮你将代码以动效形式展现。', '0', null, '67,', '1', '-1', '2019-12-06 21:37:09');
INSERT INTO `dh_libs` VALUES ('507', 'React UI素材库', 'https://ui.flawwwless.com/', 'https://github.com/JulienRioux/flawwwless-ui', 'Building a React.js components library to help you to create applications that your users will love.', 'react,组件,素材', '创建React组件开发素材库，需要用到的素材直接复制即可', '0', null, '60,65,', '1', '1', '2019-12-06 21:37:12');
INSERT INTO `dh_libs` VALUES ('508', 'noUiSlider', 'https://refreshless.com/nouislider/', 'https://github.com/leongersen/noUiSlider', 'JavaScript Range Slider', '滑动', '创建range滑动组件', '0', null, '73,', '1', '1', null);
INSERT INTO `dh_libs` VALUES ('509', 'Docz', 'https://www.docz.site/', 'https://github.com/doczjs/docz', 'It\'s never been easier to document your things!', '文档,react', '基于React开发的文档编写工具，有配套的模板', '0', null, '65,72,', '1', '1', null);
INSERT INTO `dh_libs` VALUES ('510', 'AT-UI', 'https://at-ui.github.io/at-ui/#/zh', 'https://github.com/at-ui/at-ui', 'A fresh and flat UI-Kit specially for desktop application, made by Vue.js 2.0', 'vue', '一款轻量级、模块化的前端 UI 组件库', '0', null, '60,64,74,', '1', '1', null);
INSERT INTO `dh_libs` VALUES ('511', 'Elastic UI framework', 'https://elastic.github.io/eui/#/', 'https://github.com/elastic/eui', ' Elastic UI Framework', 'react,弹性', '基于React的弹性布局UI框架', '0', null, '60,65,', '1', '1', null);
INSERT INTO `dh_libs` VALUES ('513', 'filesizejs', 'https://filesizejs.com', 'https://github.com/avoidwork/filesize.js', 'JavaScript library to generate a human readable String describing the file size', '文件,容量,单位转换', '一个将数字转换成计算机容量单位（KB / MB / GB / TB）的库', '0', null, '59,', '1', '1', null);
INSERT INTO `dh_libs` VALUES ('514', 'ProgressBar.js', 'https://kimmobrunfeldt.github.io/progressbar.js/', 'https://github.com/kimmobrunfeldt/progressbar.js', 'Responsive and slick progress bars with animated SVG paths.', 'svg,进度条,加载', '基于SVG生成的加载动画，支持各种图形轨迹', '0', null, '52,76,87,', '1', '1', null);
INSERT INTO `dh_libs` VALUES ('515', 'Priority Nav Scroller', 'https://nigelotoole.github.io/priority-nav-scroller', 'https://github.com/NigelOToole/priority-nav-scroller', ' Priority Nav Scroller is a plugin for the priority+ navigation pattern.', '横向,滚动,导航', '横向滚动导航', '0', null, '86,', '1', '1', null);
INSERT INTO `dh_libs` VALUES ('516', 'Optic', 'https://www.useoptic.com/', 'https://github.com/opticdev/optic', 'Optic 是一款人工智能编程工具，它可以帮助用户自动执行普通任务，以改善工作流程。', '', 'Optic 是一款人工智能编程工具，它可以帮助用户自动执行普通任务，以改善工作流程。', '0', null, '98,', '1', '1', null);
INSERT INTO `dh_libs` VALUES ('517', 'capture-website', '', 'https://github.com/sindresorhus/capture-website', 'Capture screenshots of websites', '网页,截屏,截图', '网页截屏', '0', null, '78,', '1', '1', null);
INSERT INTO `dh_libs` VALUES ('518', 'Geometric.js', 'https://www.npmjs.com/package/geometric', 'https://github.com/HarryStevens/geometric', 'A JavaScript library for doing geometry.', '绘图,几何,图形', '绘制几何图形', '0', null, '53,76,77,', '1', '1', null);
INSERT INTO `dh_libs` VALUES ('519', 'Fontisto', 'https://www.fontisto.com/', 'https://github.com/kenangundogan/fontisto', 'The iconic font and CSS toolkit.', 'css,图标,svg', 'css，svg 图标集合，类似font-awesome', '0', null, '74,76,', '1', '1', null);
INSERT INTO `dh_libs` VALUES ('521', 'Choreographer-js', 'https://christinecha.github.io/choreographer-js/', 'https://github.com/christinecha/choreographer-js', ' simple library to take care of complicated animations.', '', '一个处理复杂动画的JS库', '0', null, '52,73,74,', '1', '1', null);
INSERT INTO `dh_libs` VALUES ('522', 'Sequence.js', 'https://www.sequencejs.com/', 'https://github.com/IanLunn/Sequence/', 'The responsive CSS animation framework for creating unique sliders, presentations, banners, and other step-based applications.', 'css3,响应式,动画', '响应式的css动画框架', '0', null, '52,74,', '1', '1', null);
INSERT INTO `dh_libs` VALUES ('523', 'BonsaiJS', 'https://bonsaijs.org/', 'https://bonsaijs.org/', 'Bonsai is a JavaScript graphics library.', '', '一款JS绘图插件', '0', null, '53,76,', '1', '1', null);
INSERT INTO `dh_libs` VALUES ('524', 'vivus', 'http://maxwellito.github.io/vivus/', 'https://github.com/maxwellito/vivus', 'JavaScript library to make drawing animation on SVG', '', 'svg动画插件', '0', null, '52,53,76,', '1', '1', null);
INSERT INTO `dh_libs` VALUES ('525', 'Swiper.js', 'https://www.swiper.com.cn', '', 'Swiper is the most modern free mobile touch slider with hardware accelerated transitions and amazing native behavior', 'javascript,互动,移动端,桌面端', 'Swiper是纯javascript打造的滑动特效插件，面向手机、平板电脑等移动终端。', '0', null, '58,73,83,94,', '1', '1', null);
INSERT INTO `dh_libs` VALUES ('526', 'Chat.js', 'https://www.chartjs.org/', 'https://www.chartjs.org/', 'Simple yet flexible JavaScript charting for designers & developers', '', '一款简约的面向设计师和开发者的图表javascript类库，基于Canvas渲染', '0', null, '53,77,85,97,', '1', '1', null);
INSERT INTO `dh_libs` VALUES ('527', 'DROPIFY', 'http://jeremyfagis.github.io/dropify/', 'https://github.com/JeremyFagis/dropify', 'Override your input files with style', 'jquery,文件,上传,upload,file', '基于jquery的拖拽文件上传插件', '0', null, '62,100,', '1', '1', '2020-02-28 17:23:50');
INSERT INTO `dh_libs` VALUES ('528', 'UPUP', 'https://www.talater.com/upup/', 'https://github.com/TalAter/UpUp', 'a tiny script that makes sure your site is always there for your users', 'javascript,offline', '一款轻量级的javascript脚本程序，确保用户在任何时候都可以访问您的网站', '0', null, '80,', '1', '1', null);
INSERT INTO `dh_libs` VALUES ('529', 'jQuery DrawSVG', 'http://leocs.me/jquery-drawsvg/', 'https://github.com/lcdsantos/jquery-drawsvg', 'Lightweight, simple to use jQuery plugin to animate SVG paths', 'jquery,svg,动画', '基于jquery的绘制svg路径动画插件', '0', null, '52,62,73,76,', '1', '1', null);
INSERT INTO `dh_libs` VALUES ('530', 'MOTION UI', 'https://zurb.com/playground/motion-ui', 'https://github.com/foundation/motion-ui', 'A Sass library for creating flexible CSS transitions and animations', '', '基于SASS编写的css变换和动画效果的JS库', '0', null, '52,73,74,', '1', '1', null);
INSERT INTO `dh_libs` VALUES ('531', 'Chartist.js', 'http://gionkunz.github.io/chartist-js/index.html', '', 'Simple responsive charts', '响应式,图表', '响应式javascript图表插件', '0', null, '53,85,', '1', '1', null);
INSERT INTO `dh_libs` VALUES ('532', 'Photon', 'http://photonkit.com/', 'https://github.com/connors/photon', 'The fastest way to build beautiful Electron apps using simple HTML and CSS', 'electron,桌面开发', '面向electron开发者的UI工具包', '0', null, '60,73,95,', '1', '1', null);
INSERT INTO `dh_libs` VALUES ('533', 'AlloyImage', 'http://alloyteam.github.io/AlloyImage/', 'https://github.com/AlloyTeam/AlloyImage', 'An image processing lib based on html5.', '图像', '基于HTML5的专业级图像处理开源引擎', '0', null, '58,77,', '1', '1', null);

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
INSERT INTO `dh_rss` VALUES ('2', 'Node Weekly', 'https://nodeweekly.com/issues', '', '', '', '');
INSERT INTO `dh_rss` VALUES ('3', 'Frontend Focus', 'https://frontendfoc.us/issues', '', '', '', '');
INSERT INTO `dh_rss` VALUES ('4', 'WebTools Weekly', 'https://webtoolsweekly.com/?view=archive', '', '', '', '');
INSERT INTO `dh_rss` VALUES ('5', 'CSS Weekly', 'https://css-weekly.com/archives/', '', '', '', '');
INSERT INTO `dh_rss` VALUES ('6', 'Mozilla Hack Weekly', 'https://hacks.mozilla.org/', '', '', '', '');
INSERT INTO `dh_rss` VALUES ('7', 'Responsive Design Weekly', 'http://responsivedesignweekly.com/archive', '', '', '', '');
INSERT INTO `dh_rss` VALUES ('8', '奇舞周刊', 'https://weekly.75team.com/', '', '', '', '');
INSERT INTO `dh_rss` VALUES ('10', '百度FEX', 'http://fex.baidu.com/weekly/', '', '', '', '');

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
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;

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
INSERT INTO `dh_tag` VALUES ('37', '桌面应用', null);

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dh_uisetting
-- ----------------------------
INSERT INTO `dh_uisetting` VALUES ('1', '默认模板', 'default', '<link href=\"//cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css\" rel=\"stylesheet\" />\n<link href=\"/static/css/codeso.css?v=1.0.0\" rel=\"stylesheet\" />', '', '<script src=\"//cdn.jsdelivr.net/npm/jquery@1.12.4/dist/jquery.min.js\"></script>\n<script src=\"//cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js\"></script>', '0');
INSERT INTO `dh_uisetting` VALUES ('3', 'blog', 'blog', '', '', '', '1');

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
  `v_uname` varchar(255) DEFAULT NULL COMMENT '用户名',
  `v_link` varchar(255) NOT NULL COMMENT '访问链接',
  `v_logtime` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  `v_staytime` decimal(11,0) NOT NULL COMMENT '0',
  PRIMARY KEY (`v_id`)
) ENGINE=InnoDB AUTO_INCREMENT=296 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dh_visitlog
-- ----------------------------

-- ----------------------------
-- Table structure for dh_visitlog_filter
-- ----------------------------
DROP TABLE IF EXISTS `dh_visitlog_filter`;
CREATE TABLE `dh_visitlog_filter` (
  `vf_id` int(11) NOT NULL AUTO_INCREMENT,
  `vf_ip` varchar(255) NOT NULL COMMENT 'IP地址',
  PRIMARY KEY (`vf_id`)
) ENGINE=InnoDB AUTO_INCREMENT=311 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dh_visitlog_filter
-- ----------------------------
INSERT INTO `dh_visitlog_filter` VALUES ('306', '::1');
INSERT INTO `dh_visitlog_filter` VALUES ('307', '183.237.17.149');
INSERT INTO `dh_visitlog_filter` VALUES ('308', '103.27.25.168');
INSERT INTO `dh_visitlog_filter` VALUES ('309', '103.27.26.97');
INSERT INTO `dh_visitlog_filter` VALUES ('310', '103.27.25.78');
