/*
Navicat MySQL Data Transfer

Source Server         : local_db
Source Server Version : 50720
Source Host           : localhost:3306
Source Database       : db_devhome

Target Server Type    : MYSQL
Target Server Version : 50720
File Encoding         : 65001

Date: 2020-03-31 23:41:52
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
INSERT INTO `dh_demo` VALUES ('1', 'h1', '12131', null, 'PGgxPmgxPC9oMT4=', '', '', 'javascript', null, '');
INSERT INTO `dh_demo` VALUES ('2', '红色', 'test', null, 'PGRpdiBjbGFzcz0icmVkIj7nuqLoibI8L2Rpdj4=', 'dmFyIHJlZDs=', 'LnJlZCB7IGNvbG9yOnJlZDsgfQ==', 'javascript', null, '');
INSERT INTO `dh_demo` VALUES ('3', '红色', 'testVue', null, 'PGRpdiBpZD0iYXBwIiBjbGFzcz0icmVkIj7nuqLoibLnmoR7e21lc3NhZ2V9fTwvZGl2Pg==', 'bmV3IFZ1ZSh7CgllbDonI2FwcCcsCiAgICBkYXRhOnsKICAgIAltZXNzYWdlOiJoZWxsbyIKICAgIH0KfSk7', 'LnJlZCB7IGNvbG9yOnJlZDsgfQ==', 'javascript', null, 'aHR0cHM6Ly9jZG4uanNkZWxpdnIubmV0L25wbS92dWU=');
INSERT INTO `dh_demo` VALUES ('4', 'Hello', 'React', null, 'PGRpdiBpZD0icm9vdCI+PC9kaXY+', 'UmVhY3RET00ucmVuZGVyKAoJPGgxPkhlbGxvPC9oMT4sCiAgICBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgncm9vdCcpCik7', '', 'babel', null, 'aHR0cHM6Ly91bnBrZy5jb20vcmVhY3RAMTYvdW1kL3JlYWN0LnByb2R1Y3Rpb24ubWluLmpzLGh0dHBzOi8vdW5wa2cuY29tL3JlYWN0LWRvbUAxNi91bWQvcmVhY3QtZG9tLnByb2R1Y3Rpb24ubWluLmpzLGh0dHBzOi8vdW5wa2cuY29tL0BiYWJlbC9zdGFuZGFsb25lL2JhYmVsLm1pbi5qcw==');
