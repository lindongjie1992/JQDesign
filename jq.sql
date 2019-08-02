/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : jq

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2019-08-02 10:12:01
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for ad
-- ----------------------------
DROP TABLE IF EXISTS `ad`;
CREATE TABLE `ad` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cid` int(11) NOT NULL,
  `title` varchar(100) NOT NULL DEFAULT '' COMMENT '标题',
  `link` varchar(255) NOT NULL DEFAULT '' COMMENT '链接',
  `pic` varchar(255) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ad
-- ----------------------------
INSERT INTO `ad` VALUES ('1', '1', '图1', '', '/upload/web/2019051601411170edb0270c2a804bb51f725c4ec434e3.png', '1557970875', '1557970875');

-- ----------------------------
-- Table structure for ad_category
-- ----------------------------
DROP TABLE IF EXISTS `ad_category`;
CREATE TABLE `ad_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增id',
  `name` varchar(50) NOT NULL COMMENT '分类名称',
  `pid` int(11) NOT NULL COMMENT '父id',
  `sort` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ad_category
-- ----------------------------
INSERT INTO `ad_category` VALUES ('1', 'banner', '0', '0');
INSERT INTO `ad_category` VALUES ('2', '广告', '0', null);

-- ----------------------------
-- Table structure for article
-- ----------------------------
DROP TABLE IF EXISTS `article`;
CREATE TABLE `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增id',
  `cid` int(11) NOT NULL COMMENT '分类id',
  `title` varchar(50) NOT NULL COMMENT '标题',
  `author` varchar(100) NOT NULL DEFAULT '' COMMENT '作者',
  `pic` varchar(255) NOT NULL DEFAULT '' COMMENT '封面图片',
  `description` varchar(100) DEFAULT NULL COMMENT '描述',
  `content` text NOT NULL COMMENT '内容',
  `sort` int(11) DEFAULT '0' COMMENT '排序',
  `created_at` int(11) NOT NULL COMMENT '创建时间',
  `updated_at` int(11) NOT NULL COMMENT '更新时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of article
-- ----------------------------
INSERT INTO `article` VALUES ('1', '1', '测试文章', '原创', '/upload/web/201905150850001ad1824be0ac285a8b13f9a975a37662.png', '测试内容', '<p>阿斯顿撒旦撒阿斯顿阿斯达<img src=\"/upload/image/20190515/1557910215515887.png\" title=\"1557910215515887.png\" alt=\"fun_item03.png\"/></p>', '1', '1', '1557914485');
INSERT INTO `article` VALUES ('2', '1', '测试文章', '', '', '测试内容', '<p>阿斯顿撒旦撒阿斯顿阿斯达<img src=\"/upload/image/20190514/1557832668316411.png\" title=\"1557832668316411.png\" alt=\"billboard_default.png\"/></p>', '1', '1', '1557832840');
INSERT INTO `article` VALUES ('3', '4', '撒打算', '', '', '奥术大师多阿萨德', '<p>阿萨德撒的撒</p>', '1', '1557904924', '1557904924');

-- ----------------------------
-- Table structure for article_category
-- ----------------------------
DROP TABLE IF EXISTS `article_category`;
CREATE TABLE `article_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增id',
  `name` varchar(50) NOT NULL COMMENT '分类名称',
  `pid` int(11) NOT NULL COMMENT '父id',
  `sort` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of article_category
-- ----------------------------
INSERT INTO `article_category` VALUES ('1', '测试顶级分类', '0', '1');
INSERT INTO `article_category` VALUES ('2', 'Logo设计', '1', '0');
INSERT INTO `article_category` VALUES ('3', 'VI设计', '1', '0');
INSERT INTO `article_category` VALUES ('4', 'logo下级', '2', '0');
INSERT INTO `article_category` VALUES ('5', '关于我', '0', '2');

-- ----------------------------
-- Table structure for auth_assignment
-- ----------------------------
DROP TABLE IF EXISTS `auth_assignment`;
CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) NOT NULL,
  `user_id` varchar(64) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`item_name`,`user_id`),
  KEY `auth_assignment_user_id_idx` (`user_id`),
  CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of auth_assignment
-- ----------------------------
INSERT INTO `auth_assignment` VALUES ('超级管理员', '1', '1557887038');

-- ----------------------------
-- Table structure for auth_item
-- ----------------------------
DROP TABLE IF EXISTS `auth_item`;
CREATE TABLE `auth_item` (
  `name` varchar(64) NOT NULL,
  `type` smallint(6) NOT NULL,
  `description` text,
  `rule_name` varchar(64) DEFAULT NULL,
  `data` blob,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`),
  KEY `rule_name` (`rule_name`),
  KEY `type` (`type`),
  CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of auth_item
-- ----------------------------
INSERT INTO `auth_item` VALUES ('/ad-category/*', '2', null, null, null, '1557969674', '1557969674');
INSERT INTO `auth_item` VALUES ('/ad-category/create', '2', null, null, null, '1557969674', '1557969674');
INSERT INTO `auth_item` VALUES ('/ad-category/delete', '2', null, null, null, '1557969674', '1557969674');
INSERT INTO `auth_item` VALUES ('/ad-category/index', '2', null, null, null, '1557969674', '1557969674');
INSERT INTO `auth_item` VALUES ('/ad-category/update', '2', null, null, null, '1557969674', '1557969674');
INSERT INTO `auth_item` VALUES ('/ad-category/view', '2', null, null, null, '1557969674', '1557969674');
INSERT INTO `auth_item` VALUES ('/ad/*', '2', null, null, null, '1557969674', '1557969674');
INSERT INTO `auth_item` VALUES ('/ad/create', '2', null, null, null, '1557969674', '1557969674');
INSERT INTO `auth_item` VALUES ('/ad/delete', '2', null, null, null, '1557969674', '1557969674');
INSERT INTO `auth_item` VALUES ('/ad/index', '2', null, null, null, '1557969674', '1557969674');
INSERT INTO `auth_item` VALUES ('/ad/update', '2', null, null, null, '1557969674', '1557969674');
INSERT INTO `auth_item` VALUES ('/ad/view', '2', null, null, null, '1557969674', '1557969674');
INSERT INTO `auth_item` VALUES ('/admin/*', '2', null, null, null, '1557887061', '1557887061');
INSERT INTO `auth_item` VALUES ('/admin/assignment/*', '2', null, null, null, '1557887059', '1557887059');
INSERT INTO `auth_item` VALUES ('/admin/assignment/assign', '2', null, null, null, '1557887059', '1557887059');
INSERT INTO `auth_item` VALUES ('/admin/assignment/index', '2', null, null, null, '1557887059', '1557887059');
INSERT INTO `auth_item` VALUES ('/admin/assignment/revoke', '2', null, null, null, '1557887059', '1557887059');
INSERT INTO `auth_item` VALUES ('/admin/assignment/view', '2', null, null, null, '1557887059', '1557887059');
INSERT INTO `auth_item` VALUES ('/admin/default/*', '2', null, null, null, '1557887059', '1557887059');
INSERT INTO `auth_item` VALUES ('/admin/default/index', '2', null, null, null, '1557887059', '1557887059');
INSERT INTO `auth_item` VALUES ('/admin/menu/*', '2', null, null, null, '1557887060', '1557887060');
INSERT INTO `auth_item` VALUES ('/admin/menu/create', '2', null, null, null, '1557887060', '1557887060');
INSERT INTO `auth_item` VALUES ('/admin/menu/delete', '2', null, null, null, '1557887060', '1557887060');
INSERT INTO `auth_item` VALUES ('/admin/menu/index', '2', null, null, null, '1557887059', '1557887059');
INSERT INTO `auth_item` VALUES ('/admin/menu/update', '2', null, null, null, '1557887060', '1557887060');
INSERT INTO `auth_item` VALUES ('/admin/menu/view', '2', null, null, null, '1557887059', '1557887059');
INSERT INTO `auth_item` VALUES ('/admin/permission/*', '2', null, null, null, '1557887060', '1557887060');
INSERT INTO `auth_item` VALUES ('/admin/permission/assign', '2', null, null, null, '1557887060', '1557887060');
INSERT INTO `auth_item` VALUES ('/admin/permission/create', '2', null, null, null, '1557887060', '1557887060');
INSERT INTO `auth_item` VALUES ('/admin/permission/delete', '2', null, null, null, '1557887060', '1557887060');
INSERT INTO `auth_item` VALUES ('/admin/permission/index', '2', null, null, null, '1557887060', '1557887060');
INSERT INTO `auth_item` VALUES ('/admin/permission/remove', '2', null, null, null, '1557887060', '1557887060');
INSERT INTO `auth_item` VALUES ('/admin/permission/update', '2', null, null, null, '1557887060', '1557887060');
INSERT INTO `auth_item` VALUES ('/admin/permission/view', '2', null, null, null, '1557887060', '1557887060');
INSERT INTO `auth_item` VALUES ('/admin/role/*', '2', null, null, null, '1557887060', '1557887060');
INSERT INTO `auth_item` VALUES ('/admin/role/assign', '2', null, null, null, '1557887060', '1557887060');
INSERT INTO `auth_item` VALUES ('/admin/role/create', '2', null, null, null, '1557887060', '1557887060');
INSERT INTO `auth_item` VALUES ('/admin/role/delete', '2', null, null, null, '1557887060', '1557887060');
INSERT INTO `auth_item` VALUES ('/admin/role/index', '2', null, null, null, '1557887060', '1557887060');
INSERT INTO `auth_item` VALUES ('/admin/role/remove', '2', null, null, null, '1557887060', '1557887060');
INSERT INTO `auth_item` VALUES ('/admin/role/update', '2', null, null, null, '1557887060', '1557887060');
INSERT INTO `auth_item` VALUES ('/admin/role/view', '2', null, null, null, '1557887060', '1557887060');
INSERT INTO `auth_item` VALUES ('/admin/route/*', '2', null, null, null, '1557887060', '1557887060');
INSERT INTO `auth_item` VALUES ('/admin/route/assign', '2', null, null, null, '1557887060', '1557887060');
INSERT INTO `auth_item` VALUES ('/admin/route/create', '2', null, null, null, '1557887060', '1557887060');
INSERT INTO `auth_item` VALUES ('/admin/route/index', '2', null, null, null, '1557887060', '1557887060');
INSERT INTO `auth_item` VALUES ('/admin/route/refresh', '2', null, null, null, '1557887060', '1557887060');
INSERT INTO `auth_item` VALUES ('/admin/route/remove', '2', null, null, null, '1557887060', '1557887060');
INSERT INTO `auth_item` VALUES ('/admin/rule/*', '2', null, null, null, '1557887060', '1557887060');
INSERT INTO `auth_item` VALUES ('/admin/rule/create', '2', null, null, null, '1557887060', '1557887060');
INSERT INTO `auth_item` VALUES ('/admin/rule/delete', '2', null, null, null, '1557887060', '1557887060');
INSERT INTO `auth_item` VALUES ('/admin/rule/index', '2', null, null, null, '1557887060', '1557887060');
INSERT INTO `auth_item` VALUES ('/admin/rule/update', '2', null, null, null, '1557887060', '1557887060');
INSERT INTO `auth_item` VALUES ('/admin/rule/view', '2', null, null, null, '1557887060', '1557887060');
INSERT INTO `auth_item` VALUES ('/admin/user/*', '2', null, null, null, '1557887061', '1557887061');
INSERT INTO `auth_item` VALUES ('/admin/user/activate', '2', null, null, null, '1557887061', '1557887061');
INSERT INTO `auth_item` VALUES ('/admin/user/change-password', '2', null, null, null, '1557887061', '1557887061');
INSERT INTO `auth_item` VALUES ('/admin/user/delete', '2', null, null, null, '1557887061', '1557887061');
INSERT INTO `auth_item` VALUES ('/admin/user/index', '2', null, null, null, '1557887060', '1557887060');
INSERT INTO `auth_item` VALUES ('/admin/user/login', '2', null, null, null, '1557887061', '1557887061');
INSERT INTO `auth_item` VALUES ('/admin/user/logout', '2', null, null, null, '1557887061', '1557887061');
INSERT INTO `auth_item` VALUES ('/admin/user/request-password-reset', '2', null, null, null, '1557887061', '1557887061');
INSERT INTO `auth_item` VALUES ('/admin/user/reset-password', '2', null, null, null, '1557887061', '1557887061');
INSERT INTO `auth_item` VALUES ('/admin/user/signup', '2', null, null, null, '1557887061', '1557887061');
INSERT INTO `auth_item` VALUES ('/admin/user/view', '2', null, null, null, '1557887060', '1557887060');
INSERT INTO `auth_item` VALUES ('/article-category/*', '2', null, null, null, '1557887115', '1557887115');
INSERT INTO `auth_item` VALUES ('/article-category/create', '2', null, null, null, '1557887115', '1557887115');
INSERT INTO `auth_item` VALUES ('/article-category/delete', '2', null, null, null, '1557887115', '1557887115');
INSERT INTO `auth_item` VALUES ('/article-category/index', '2', null, null, null, '1557887115', '1557887115');
INSERT INTO `auth_item` VALUES ('/article-category/update', '2', null, null, null, '1557887115', '1557887115');
INSERT INTO `auth_item` VALUES ('/article-category/view', '2', null, null, null, '1557887115', '1557887115');
INSERT INTO `auth_item` VALUES ('/article/*', '2', null, null, null, '1557887115', '1557887115');
INSERT INTO `auth_item` VALUES ('/article/create', '2', null, null, null, '1557887115', '1557887115');
INSERT INTO `auth_item` VALUES ('/article/delete', '2', null, null, null, '1557887115', '1557887115');
INSERT INTO `auth_item` VALUES ('/article/index', '2', null, null, null, '1557887115', '1557887115');
INSERT INTO `auth_item` VALUES ('/article/update', '2', null, null, null, '1557887115', '1557887115');
INSERT INTO `auth_item` VALUES ('/article/upload', '2', null, null, null, '1557887115', '1557887115');
INSERT INTO `auth_item` VALUES ('/article/view', '2', null, null, null, '1557887115', '1557887115');
INSERT INTO `auth_item` VALUES ('/configs/*', '2', null, null, null, '1557914190', '1557914190');
INSERT INTO `auth_item` VALUES ('/configs/create', '2', null, null, null, '1557914190', '1557914190');
INSERT INTO `auth_item` VALUES ('/configs/delete', '2', null, null, null, '1557914190', '1557914190');
INSERT INTO `auth_item` VALUES ('/configs/index', '2', null, null, null, '1557914190', '1557914190');
INSERT INTO `auth_item` VALUES ('/configs/update', '2', null, null, null, '1557914190', '1557914190');
INSERT INTO `auth_item` VALUES ('/configs/view', '2', null, null, null, '1557914190', '1557914190');
INSERT INTO `auth_item` VALUES ('/debug/*', '2', null, null, null, '1557887114', '1557887114');
INSERT INTO `auth_item` VALUES ('/debug/default/*', '2', null, null, null, '1557887114', '1557887114');
INSERT INTO `auth_item` VALUES ('/debug/default/db-explain', '2', null, null, null, '1557887114', '1557887114');
INSERT INTO `auth_item` VALUES ('/debug/default/download-mail', '2', null, null, null, '1557887114', '1557887114');
INSERT INTO `auth_item` VALUES ('/debug/default/index', '2', null, null, null, '1557887114', '1557887114');
INSERT INTO `auth_item` VALUES ('/debug/default/toolbar', '2', null, null, null, '1557887114', '1557887114');
INSERT INTO `auth_item` VALUES ('/debug/default/view', '2', null, null, null, '1557887114', '1557887114');
INSERT INTO `auth_item` VALUES ('/debug/user/*', '2', null, null, null, '1557887114', '1557887114');
INSERT INTO `auth_item` VALUES ('/debug/user/reset-identity', '2', null, null, null, '1557887114', '1557887114');
INSERT INTO `auth_item` VALUES ('/debug/user/set-identity', '2', null, null, null, '1557887114', '1557887114');
INSERT INTO `auth_item` VALUES ('/file/*', '2', null, null, null, '1557907083', '1557907083');
INSERT INTO `auth_item` VALUES ('/file/upload', '2', null, null, null, '1557907083', '1557907083');
INSERT INTO `auth_item` VALUES ('/gii/*', '2', null, null, null, '1557887114', '1557887114');
INSERT INTO `auth_item` VALUES ('/gii/default/*', '2', null, null, null, '1557887114', '1557887114');
INSERT INTO `auth_item` VALUES ('/gii/default/action', '2', null, null, null, '1557887114', '1557887114');
INSERT INTO `auth_item` VALUES ('/gii/default/diff', '2', null, null, null, '1557887114', '1557887114');
INSERT INTO `auth_item` VALUES ('/gii/default/index', '2', null, null, null, '1557887114', '1557887114');
INSERT INTO `auth_item` VALUES ('/gii/default/preview', '2', null, null, null, '1557887114', '1557887114');
INSERT INTO `auth_item` VALUES ('/gii/default/view', '2', null, null, null, '1557887114', '1557887114');
INSERT INTO `auth_item` VALUES ('/project-category/*', '2', null, null, null, '1557890646', '1557890646');
INSERT INTO `auth_item` VALUES ('/project-category/create', '2', null, null, null, '1557890646', '1557890646');
INSERT INTO `auth_item` VALUES ('/project-category/delete', '2', null, null, null, '1557890646', '1557890646');
INSERT INTO `auth_item` VALUES ('/project-category/index', '2', null, null, null, '1557890646', '1557890646');
INSERT INTO `auth_item` VALUES ('/project-category/update', '2', null, null, null, '1557890646', '1557890646');
INSERT INTO `auth_item` VALUES ('/project-category/view', '2', null, null, null, '1557890646', '1557890646');
INSERT INTO `auth_item` VALUES ('/project/*', '2', null, null, null, '1557890647', '1557890647');
INSERT INTO `auth_item` VALUES ('/project/create', '2', null, null, null, '1557890646', '1557890646');
INSERT INTO `auth_item` VALUES ('/project/delete', '2', null, null, null, '1557890646', '1557890646');
INSERT INTO `auth_item` VALUES ('/project/index', '2', null, null, null, '1557890646', '1557890646');
INSERT INTO `auth_item` VALUES ('/project/update', '2', null, null, null, '1557890646', '1557890646');
INSERT INTO `auth_item` VALUES ('/project/view', '2', null, null, null, '1557890646', '1557890646');
INSERT INTO `auth_item` VALUES ('超级管理员', '1', null, null, null, '1557886660', '1557886660');

-- ----------------------------
-- Table structure for auth_item_child
-- ----------------------------
DROP TABLE IF EXISTS `auth_item_child`;
CREATE TABLE `auth_item_child` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`),
  CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of auth_item_child
-- ----------------------------
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/ad-category/*');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/ad-category/create');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/ad-category/delete');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/ad-category/index');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/ad-category/update');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/ad-category/view');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/ad/*');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/ad/create');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/ad/delete');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/ad/index');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/ad/update');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/ad/view');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/*');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/assignment/*');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/assignment/assign');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/assignment/index');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/assignment/revoke');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/assignment/view');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/default/*');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/default/index');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/menu/*');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/menu/create');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/menu/delete');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/menu/index');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/menu/update');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/menu/view');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/permission/*');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/permission/assign');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/permission/create');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/permission/delete');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/permission/index');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/permission/remove');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/permission/update');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/permission/view');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/role/*');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/role/assign');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/role/create');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/role/delete');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/role/index');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/role/remove');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/role/update');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/role/view');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/route/*');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/route/assign');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/route/create');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/route/index');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/route/refresh');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/route/remove');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/rule/*');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/rule/create');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/rule/delete');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/rule/index');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/rule/update');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/rule/view');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/user/*');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/user/activate');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/user/change-password');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/user/delete');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/user/index');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/user/login');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/user/logout');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/user/request-password-reset');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/user/reset-password');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/user/signup');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/admin/user/view');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/article-category/*');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/article-category/create');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/article-category/delete');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/article-category/index');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/article-category/update');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/article-category/view');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/article/*');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/article/create');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/article/delete');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/article/index');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/article/update');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/article/upload');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/article/view');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/configs/*');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/configs/create');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/configs/delete');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/configs/index');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/configs/update');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/configs/view');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/debug/*');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/debug/default/*');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/debug/default/db-explain');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/debug/default/download-mail');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/debug/default/index');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/debug/default/toolbar');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/debug/default/view');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/debug/user/*');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/debug/user/reset-identity');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/debug/user/set-identity');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/file/*');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/file/upload');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/gii/*');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/gii/default/*');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/gii/default/action');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/gii/default/diff');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/gii/default/index');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/gii/default/preview');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/gii/default/view');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/project-category/*');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/project-category/create');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/project-category/delete');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/project-category/index');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/project-category/update');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/project-category/view');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/project/*');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/project/create');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/project/delete');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/project/index');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/project/update');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '/project/view');

-- ----------------------------
-- Table structure for auth_rule
-- ----------------------------
DROP TABLE IF EXISTS `auth_rule`;
CREATE TABLE `auth_rule` (
  `name` varchar(64) NOT NULL,
  `data` blob,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of auth_rule
-- ----------------------------

-- ----------------------------
-- Table structure for configs
-- ----------------------------
DROP TABLE IF EXISTS `configs`;
CREATE TABLE `configs` (
  `key` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort` int(11) NOT NULL DEFAULT '100',
  PRIMARY KEY (`key`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='系统配置';

-- ----------------------------
-- Records of configs
-- ----------------------------
INSERT INTO `configs` VALUES ('web_title', 'jq', '网站名称', '网站名称描述', '1');
INSERT INTO `configs` VALUES ('copyright', 'Copyright © 2019 我的网站', '版权信息', '版权信息描述', '2');
INSERT INTO `configs` VALUES ('web_flag', '1', '网站开关', '网站开关描述', '3');

-- ----------------------------
-- Table structure for menu
-- ----------------------------
DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `parent` int(11) DEFAULT NULL,
  `route` varchar(256) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `data` text,
  PRIMARY KEY (`id`),
  KEY `parent` (`parent`),
  CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `menu` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of menu
-- ----------------------------
INSERT INTO `menu` VALUES ('1', '权限控制', null, null, '5', '{\"icon\":\"puzzle-piece\",\"visible\":true}');
INSERT INTO `menu` VALUES ('2', '路由', '1', '/admin/route/index', '1', '{\"icon\":\"fa fa-lock\",\"visible\":true}');
INSERT INTO `menu` VALUES ('3', '权限', '1', '/admin/permission/index', '2', null);
INSERT INTO `menu` VALUES ('4', '角色', '1', '/admin/role/index', '3', null);
INSERT INTO `menu` VALUES ('5', '分配', '1', '/admin/assignment/index', '4', null);
INSERT INTO `menu` VALUES ('6', '菜单', '1', '/admin/menu/index', '5', null);
INSERT INTO `menu` VALUES ('7', '文章管理', null, null, '1', '{\"icon\":\"server\",\"visible\":true}');
INSERT INTO `menu` VALUES ('8', '文章列表', '7', '/article/index', null, null);
INSERT INTO `menu` VALUES ('9', '文章分类', '7', '/article-category/index', null, null);
INSERT INTO `menu` VALUES ('10', '案例管理', null, null, '2', '{\"icon\":\"tablet\",\"visible\":true}');
INSERT INTO `menu` VALUES ('11', '案例列表', '10', '/project/index', '1', null);
INSERT INTO `menu` VALUES ('12', '案例分类', '10', '/project-category/index', '2', null);
INSERT INTO `menu` VALUES ('13', '网站配置', null, '/configs/index', '4', '{\"icon\":\"safari\",\"visible\":true}');
INSERT INTO `menu` VALUES ('14', '图片管理', null, null, '3', '{\"icon\":\"file-image-o\",\"visible\":true}');
INSERT INTO `menu` VALUES ('15', '图片分类', '14', '/ad-category/index', null, null);
INSERT INTO `menu` VALUES ('16', '图片列表', '14', '/ad/index', null, null);

-- ----------------------------
-- Table structure for migration
-- ----------------------------
DROP TABLE IF EXISTS `migration`;
CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of migration
-- ----------------------------
INSERT INTO `migration` VALUES ('m000000_000000_base', '1557830723');
INSERT INTO `migration` VALUES ('m130524_201442_init', '1557830725');
INSERT INTO `migration` VALUES ('m190124_110200_add_verification_token_column_to_user_table', '1557830725');
INSERT INTO `migration` VALUES ('m190514_065941_article', '1557830725');
INSERT INTO `migration` VALUES ('m190514_071103_project', '1557830726');

-- ----------------------------
-- Table structure for project
-- ----------------------------
DROP TABLE IF EXISTS `project`;
CREATE TABLE `project` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增id',
  `title` varchar(50) NOT NULL COMMENT '标题',
  `cid` int(11) NOT NULL DEFAULT '0',
  `pic` varchar(255) DEFAULT '' COMMENT '封面图片',
  `description` varchar(100) NOT NULL DEFAULT '' COMMENT '描述',
  `content` text NOT NULL COMMENT '内容',
  `sort` int(11) DEFAULT '0' COMMENT '排序',
  `created_at` int(11) NOT NULL COMMENT '创建时间',
  `updated_at` int(11) NOT NULL COMMENT '更新时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of project
-- ----------------------------
INSERT INTO `project` VALUES ('1', '测试', '2', '/upload/web/20190517020952bcf2388e55c10cffdaf8b408714b2cef.png', '反反复复发', '<p>打发士大夫士大夫</p>', '1', '1557973765', '1558059052');

-- ----------------------------
-- Table structure for project_category
-- ----------------------------
DROP TABLE IF EXISTS `project_category`;
CREATE TABLE `project_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增id',
  `name` varchar(50) NOT NULL COMMENT '分类名称',
  `pid` int(11) NOT NULL COMMENT '父id',
  `sort` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of project_category
-- ----------------------------
INSERT INTO `project_category` VALUES ('1', '平面设计', '0', '0');
INSERT INTO `project_category` VALUES ('2', '平面案例1', '1', null);

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `verification_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'admin', '5s8MsoG4Q3-721qpoW8nJFaH5sTxsYv5', '$2y$13$LD3ZFfm9eJVGJEhybG3qb.Td7JPS9fiemuYU9BDcLdfm/9zypPSQ2', null, 'admin@qq.com', '1557830789', '1557830789', 'GMO1ijcOti3ZMgB2hge2MJvkB631S21t_1557830789');
