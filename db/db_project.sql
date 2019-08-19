/*
Navicat MySQL Data Transfer

Source Server         : local_db
Source Server Version : 100113
Source Host           : localhost:3306
Source Database       : db_devproject

Target Server Type    : MYSQL
Target Server Version : 100113
File Encoding         : 65001

Date: 2019-08-19 18:42:13
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for proj_proj_task
-- ----------------------------
DROP TABLE IF EXISTS `proj_proj_task`;
CREATE TABLE `proj_proj_task` (
  `task_id` int(4) NOT NULL AUTO_INCREMENT,
  `task_name` varchar(255) NOT NULL COMMENT '任务名称',
  `proj_id` int(4) NOT NULL COMMENT '项目ID',
  `task_pid` int(4) DEFAULT '0' COMMENT '上级任务ID',
  `task_state` tinyint(2) DEFAULT '0' COMMENT '任务完成',
  `task_mindid` varchar(20) NOT NULL,
  `task_desc` varchar(255) DEFAULT NULL,
  `task_level` tinyint(2) DEFAULT '0',
  PRIMARY KEY (`task_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of proj_proj_task
-- ----------------------------
INSERT INTO `proj_proj_task` VALUES ('4', '教学宝2', '1', '0', '0', 'bwa4mb0m3a00', '', '1');

-- ----------------------------
-- Table structure for proj_projects
-- ----------------------------
DROP TABLE IF EXISTS `proj_projects`;
CREATE TABLE `proj_projects` (
  `proj_id` int(4) NOT NULL AUTO_INCREMENT COMMENT '项目ID',
  `proj_name` varchar(255) NOT NULL COMMENT '项目管理',
  `proj_mind` longtext,
  PRIMARY KEY (`proj_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of proj_projects
-- ----------------------------
INSERT INTO `proj_projects` VALUES ('1', '共享课堂-教学宝', '{\"root\":{\"data\":{\"id\":\"bwa4mb0m3a00\",\"created\":1565864444346,\"text\":\"教学宝\"},\"children\":[]},\"template\":\"default\",\"theme\":\"fresh-blue\",\"version\":\"1.4.43\"}');
