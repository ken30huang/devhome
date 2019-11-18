/*
Navicat MySQL Data Transfer

Source Server         : local_db
Source Server Version : 100113
Source Host           : localhost:3306
Source Database       : db_devhome

Target Server Type    : MYSQL
Target Server Version : 100113
File Encoding         : 65001

Date: 2019-11-18 18:07:31
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
) ENGINE=InnoDB AUTO_INCREMENT=87 DEFAULT CHARSET=utf8;

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
INSERT INTO `dh_category` VALUES ('49', '前端框架', '33', '前端框架', '', '0');
INSERT INTO `dh_category` VALUES ('50', '在线编辑器', '33', '', '', '0');
INSERT INTO `dh_category` VALUES ('51', 'Tips提示', '33', 'Tips提示插件', '', '0');
INSERT INTO `dh_category` VALUES ('52', '动画插件', '33', '', '', '0');
INSERT INTO `dh_category` VALUES ('53', '绘图插件', '33', '', '', '0');
INSERT INTO `dh_category` VALUES ('54', '异步任务', '33', '', '', '0');
INSERT INTO `dh_category` VALUES ('55', '模块化管理', '33', '', '', '0');
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
INSERT INTO `dh_category` VALUES ('66', '旋转木马/幻灯片', '33', '', '', '0');
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
