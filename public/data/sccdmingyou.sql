/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50717
Source Host           : localhost:3306
Source Database       : sccdmingyou

Target Server Type    : MYSQL
Target Server Version : 50717
File Encoding         : 65001

Date: 2017-11-16 15:21:30
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `yw_apply`
-- ----------------------------
DROP TABLE IF EXISTS `yw_apply`;
CREATE TABLE `yw_apply` (
  `apply_id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `amount` decimal(10,2) NOT NULL COMMENT '金额',
  `phone` varchar(20) NOT NULL,
  `source` varchar(100) NOT NULL COMMENT '来源（1.PC网站，2.WAP网站）',
  `website` varchar(100) NOT NULL COMMENT '来源网站',
  `createtime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updatetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(10) NOT NULL DEFAULT '0' COMMENT '是否删除（0未删除，1已删除）',
  PRIMARY KEY (`apply_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of yw_apply
-- ----------------------------

-- ----------------------------
-- Table structure for `yw_articles`
-- ----------------------------
DROP TABLE IF EXISTS `yw_articles`;
CREATE TABLE `yw_articles` (
  `id` int(50) NOT NULL AUTO_INCREMENT COMMENT '自增ID',
  `category_id` int(50) NOT NULL COMMENT '所属分类ID',
  `title` varchar(200) NOT NULL,
  `content` text,
  `discript` text NOT NULL,
  `advantage` text COMMENT '产品优势',
  `detail` text COMMENT '详情页',
  `sort` int(50) NOT NULL DEFAULT '0' COMMENT '排序（越大越靠前）',
  `click` tinyint(50) NOT NULL DEFAULT '0' COMMENT '点击量',
  `createtime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updatetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(10) NOT NULL DEFAULT '0' COMMENT '是否删除（0未删除，1已删除）',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of yw_articles
-- ----------------------------
INSERT INTO `yw_articles` VALUES ('1', '7', '工程简介', '', '<p><iframe frameborder=\"0\" height=\"300\" src=\"http://player.youku.com/embed/XMzE0NTMxOTU4OA==\" width=\"400\"></iframe></p>\r\n', '<p>&nbsp; &nbsp; &nbsp; &nbsp;首页工程简介首页工程简介首页工程简介首页工程简介首页工程简介首页工程简介首页工程简介首页工程简介首页工程简介首页工程简介首页工程简介首页工程简介首页工程简介首页工程简介首页工程简介首页工程简介首页工程简介首页工程简介首页工程简介首页工程简介首页工程简介首页工程简介首页工程简介首页工程简介首页工程简介首页工程简介首页工程简介首页工程简介首页工程简介首页工程简介首页工程简介首页工程简介首页工程简介首页工程简介首页工程简介首页工程简介首页工程简介首页工程简介首页工程简介首页工程简介首页工程简介首页工程简介首页工程简介<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; 首页工程简介首页工程简介首页工程简介首页工程简介首页工程简介首页工程简介首页工程简介首页工程简介首页工程简介首页工程简介首页工程简介首页工程简介首页工程简介首页工程简介首页工程程简介首页工程简介首页工程简介首页工程简介首页工程简介首页工程简介首页工程简介首页工程简介首页工程简介首页工程简介首页工程简介首页工程简介首页工程简介首简介首页工程简介首页工程简介首页工程简介首页工程简介</p>\r\n', '', '0', '0', '2017-11-16 13:14:47', '2017-11-16 13:14:47', '0');
INSERT INTO `yw_articles` VALUES ('2', '5', '品牌标题1', '', '<p>名优品牌内容名优品牌内容名优品牌内容名优品牌内容名优品牌内容名优品牌内容名优品牌内容名优品牌内容名优品牌内容名优品牌内容名优品牌内容名优品牌内容名优品牌内容名优品牌内容名优品牌内容名优品牌内容名优品牌内容名优品牌内容名优品牌内容名优品牌内容名优品牌内容名优品牌内容名优品牌内容名优品牌内容名优品牌内容名优品牌内容名优品牌内容名优品牌内容名优品牌内容名优品牌内容名优品牌内容名优品牌内容名优品牌内容名优品牌内容名优品牌内容</p>\r\n', '', '', '0', '0', '2017-11-15 21:21:32', '2017-11-15 21:21:32', '0');
INSERT INTO `yw_articles` VALUES ('3', '15', 'banner图', '', '', '', '', '0', '0', '2017-11-15 21:22:39', '2017-11-15 21:22:39', '0');
INSERT INTO `yw_articles` VALUES ('4', '15', 'banner图', '', '', '', '', '0', '0', '2017-11-15 21:22:58', '2017-11-15 21:22:58', '0');
INSERT INTO `yw_articles` VALUES ('5', '15', 'banner图', '', '', '', '', '0', '0', '2017-11-16 11:08:30', '2017-11-16 11:08:30', '0');
INSERT INTO `yw_articles` VALUES ('6', '5', '品牌标题2', '', '', '', '', '0', '0', '2017-11-16 11:24:00', '2017-11-16 11:24:00', '0');
INSERT INTO `yw_articles` VALUES ('7', '5', '品牌标题3', '', '', '', '', '0', '0', '2017-11-16 11:25:20', '2017-11-16 11:25:20', '0');
INSERT INTO `yw_articles` VALUES ('8', '5', '品牌标题4', '', '', '', '', '0', '0', '2017-11-16 11:25:38', '2017-11-16 11:25:38', '0');
INSERT INTO `yw_articles` VALUES ('9', '5', '品牌标题5', '', '<p>品牌标题5描述品牌标题5描述品牌标题5描述品牌标题5描述品牌标题5描述品牌标题5描述品牌标题5描述品牌标题5描述</p>\r\n', '', '', '0', '0', '2017-11-16 14:40:52', '2017-11-16 14:40:52', '0');
INSERT INTO `yw_articles` VALUES ('10', '8', '首页中图', '', '', '', '', '0', '0', '2017-11-16 13:08:10', '2017-11-16 13:08:10', '0');
INSERT INTO `yw_articles` VALUES ('11', '2', '新闻标题1新闻标题1新闻标题1新闻标题1新闻标题1新闻标题1新闻标题1新闻标题1', '', '<p>发达省份三大反对撒反对撒防守打法三大防守打法三大防守打法</p>\r\n', '', '', '0', '0', '2017-11-16 14:08:24', '2017-11-16 14:08:24', '0');
INSERT INTO `yw_articles` VALUES ('12', '2', '富士达反对撒反对撒范德萨富士达范德萨富士达反对撒反对撒发撒旦', '', '<p>范德萨范德萨啊范德萨范德萨反对撒反对撒反对撒反对撒范德萨范德萨范德萨飞洒防守打法</p>\r\n', '', '', '0', '0', '2017-11-16 14:08:50', '2017-11-16 14:08:50', '0');
INSERT INTO `yw_articles` VALUES ('13', '2', '新闻标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题', '', '<p>防撒旦东方舵手范德萨富士达反对撒反对撒发生大幅度撒</p>\r\n', '', '', '0', '0', '2017-11-16 14:14:52', '2017-11-16 14:14:52', '0');
INSERT INTO `yw_articles` VALUES ('14', '9', '首页联系我们', '', '<p>首页联系我们首页联系我们首页联系我们首页联系我们首页联系我们首页联系我们首页联系我们首页联系我们首页联系我们首页联系我们首页联系我们首页联系我们首页联系我们首页联系我们首页联系我们首页联系我们首页联系我们</p>\r\n', '', '', '0', '0', '2017-11-16 14:31:42', '2017-11-16 14:31:42', '0');
INSERT INTO `yw_articles` VALUES ('15', '1', '我的合作伙伴', '', '<p><img alt=\"\" src=\"http://www.mingyou.com/public/upload/2017-11-16/5a0d3a1f2ef53.png\" style=\"height:100px; width:214px\" />&nbsp; &nbsp;&nbsp;<img alt=\"\" src=\"http://www.mingyou.com/public/upload/2017-11-16/5a0d3a1f2ef53.png\" style=\"height:100px; width:214px\" />&nbsp; &nbsp;&nbsp;<img alt=\"\" src=\"http://www.mingyou.com/public/upload/2017-11-16/5a0d3a1f2ef53.png\" style=\"height:100px; width:214px\" />&nbsp; &nbsp;&nbsp;<img alt=\"\" src=\"http://www.mingyou.com/public/upload/2017-11-16/5a0d3a1f2ef53.png\" style=\"height:100px; width:214px\" />&nbsp; &nbsp;&nbsp;<img alt=\"\" src=\"http://www.mingyou.com/public/upload/2017-11-16/5a0d3a1f2ef53.png\" style=\"height:100px; width:214px\" /></p>\r\n', '', '', '0', '0', '2017-11-16 15:11:56', '2017-11-16 15:11:56', '0');

-- ----------------------------
-- Table structure for `yw_articles_category`
-- ----------------------------
DROP TABLE IF EXISTS `yw_articles_category`;
CREATE TABLE `yw_articles_category` (
  `category_id` int(10) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(200) NOT NULL DEFAULT '' COMMENT '分类名称',
  `category_pid` int(10) NOT NULL COMMENT '父级ID',
  `category_path` varchar(100) NOT NULL COMMENT '分类全路径',
  `category_level` int(10) NOT NULL COMMENT '所属层级',
  `isindex` tinyint(10) NOT NULL DEFAULT '0' COMMENT '是否在导航显示（0否，1是）',
  `category_sort` int(10) NOT NULL COMMENT '排序',
  `createtime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updatetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(10) NOT NULL DEFAULT '0' COMMENT '0未删，1已删除',
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COMMENT='文章分类表';

-- ----------------------------
-- Records of yw_articles_category
-- ----------------------------
INSERT INTO `yw_articles_category` VALUES ('1', '我的合作伙伴', '6', '6-1', '1', '0', '0', '2017-11-16 15:11:00', '2017-11-16 15:11:00', '0');
INSERT INTO `yw_articles_category` VALUES ('2', '新闻动态', '0', '2', '0', '1', '8', '2017-11-15 14:13:52', '2017-11-15 21:30:55', '0');
INSERT INTO `yw_articles_category` VALUES ('3', '首页切换', '0', '3', '0', '0', '0', '2017-11-15 13:57:47', '2017-11-15 13:57:47', '0');
INSERT INTO `yw_articles_category` VALUES ('4', '品牌展播', '0', '4', '0', '0', '0', '2017-11-15 13:58:06', '2017-11-15 13:58:06', '0');
INSERT INTO `yw_articles_category` VALUES ('5', '名优品牌', '0', '5', '0', '1', '9', '2017-11-15 14:13:33', '2017-11-15 21:30:51', '0');
INSERT INTO `yw_articles_category` VALUES ('6', '其他信息', '0', '6', '0', '0', '0', '2017-11-15 14:17:22', '2017-11-15 14:17:22', '0');
INSERT INTO `yw_articles_category` VALUES ('7', '首页工程简介', '6', '6-7', '1', '0', '0', '2017-11-15 14:17:51', '2017-11-15 14:17:51', '0');
INSERT INTO `yw_articles_category` VALUES ('8', '首页中图', '6', '6-8', '1', '0', '0', '2017-11-15 14:18:07', '2017-11-15 14:18:07', '0');
INSERT INTO `yw_articles_category` VALUES ('9', '首页联系我们', '6', '6-9', '1', '0', '0', '2017-11-15 14:18:40', '2017-11-15 14:18:40', '0');
INSERT INTO `yw_articles_category` VALUES ('10', '关于工程', '0', '10', '0', '1', '10', '2017-11-15 21:23:52', '2017-11-15 21:30:46', '0');
INSERT INTO `yw_articles_category` VALUES ('11', '发现品牌', '0', '11', '0', '1', '7', '2017-11-15 14:19:54', '2017-11-15 21:32:29', '0');
INSERT INTO `yw_articles_category` VALUES ('12', '查询中心', '0', '12', '0', '1', '6', '2017-11-15 14:20:29', '2017-11-15 21:32:35', '0');
INSERT INTO `yw_articles_category` VALUES ('13', '联系我们', '0', '13', '0', '1', '5', '2017-11-15 14:20:42', '2017-11-15 21:32:39', '0');
INSERT INTO `yw_articles_category` VALUES ('14', '测试显示', '6', '6-14', '1', '0', '5', '2017-11-15 15:35:14', '2017-11-15 16:35:05', '1');
INSERT INTO `yw_articles_category` VALUES ('15', '首页banner', '6', '6-15', '1', '0', '0', '2017-11-15 21:15:12', '2017-11-15 21:15:12', '0');

-- ----------------------------
-- Table structure for `yw_auth`
-- ----------------------------
DROP TABLE IF EXISTS `yw_auth`;
CREATE TABLE `yw_auth` (
  `auth_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `auth_name` varchar(200) NOT NULL COMMENT '权限名称',
  `auth_pid` int(10) NOT NULL COMMENT '权限父ID',
  `auth_c` varchar(100) NOT NULL COMMENT '权限控制器',
  `auth_a` varchar(100) NOT NULL COMMENT '权限方法',
  `auth_path` varchar(100) NOT NULL COMMENT '权限全路径',
  `auth_level` int(10) NOT NULL COMMENT '权限所属层级',
  `created` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`auth_id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COMMENT='权限表';

-- ----------------------------
-- Records of yw_auth
-- ----------------------------
INSERT INTO `yw_auth` VALUES ('1', '服务器日志', '0', '', '', '1', '0', '2016-10-18 15:05:51', '2016-10-18 15:13:36', '0');
INSERT INTO `yw_auth` VALUES ('2', '其他日志', '0', '', '', '2', '0', '2016-10-18 15:07:22', '2016-10-21 14:32:51', '1');
INSERT INTO `yw_auth` VALUES ('3', '日志列表', '1', 'Server', 'showlist', '1-3', '1', '2016-10-18 15:09:25', '2016-10-19 12:37:52', '0');
INSERT INTO `yw_auth` VALUES ('4', '填写日志', '1', 'Server', 'add', '1-4', '1', '2016-10-18 15:10:06', '2016-10-21 13:37:03', '0');
INSERT INTO `yw_auth` VALUES ('5', '日志列表', '1', 'Server', 'showlistRegular', '1-5', '1', '2016-10-18 15:15:28', '2016-11-03 15:16:15', '1');
INSERT INTO `yw_auth` VALUES ('6', '填写日志', '1', 'Server', 'addRegular', '1-6', '1', '2016-10-18 15:19:54', '2016-11-03 15:16:18', '1');
INSERT INTO `yw_auth` VALUES ('7', '用户管理', '0', '', '', '7', '0', '2016-10-18 15:19:58', '2016-10-25 10:13:47', '0');
INSERT INTO `yw_auth` VALUES ('8', '用户列表', '7', 'Manager', 'showlist', '7-8', '1', '2016-10-18 15:19:47', '2016-10-25 10:14:01', '0');
INSERT INTO `yw_auth` VALUES ('9', '添加用户', '7', 'Manager', 'add', '7-9', '1', '2016-10-18 15:20:52', '2016-10-25 10:14:10', '0');
INSERT INTO `yw_auth` VALUES ('10', '更新日志', '1', 'Server', 'upd', '1-10', '1', '2016-10-24 15:10:29', '2016-10-24 15:10:34', '0');
INSERT INTO `yw_auth` VALUES ('11', '公共池', '1', 'Server', 'suspendList', '1-11', '1', '2016-10-24 22:48:19', '2016-10-24 22:48:23', '0');
INSERT INTO `yw_auth` VALUES ('12', '角色管理', '0', '', '', '12', '0', '2016-10-25 14:37:31', '2016-10-25 14:37:34', '0');
INSERT INTO `yw_auth` VALUES ('13', '角色列表', '12', 'Role', 'showlist', '12-13', '1', '2016-10-25 14:38:45', '2016-10-26 14:38:48', '0');
INSERT INTO `yw_auth` VALUES ('14', '权限管理', '0', '', '', '14', '0', '2016-10-25 14:40:22', '2016-10-25 14:56:41', '0');
INSERT INTO `yw_auth` VALUES ('15', '权限列表', '14', 'Auth', 'showlist', '14-15', '1', '2016-10-25 14:57:26', '2016-10-25 14:57:29', '0');
INSERT INTO `yw_auth` VALUES ('16', '添加权限', '14', 'Auth', 'add', '14-16', '1', '2016-10-25 15:00:47', '2016-10-25 15:00:50', '0');
INSERT INTO `yw_auth` VALUES ('17', '问题管理', '0', '', '', '17', '0', '2016-10-26 08:53:12', '2016-10-26 08:53:15', '0');
INSERT INTO `yw_auth` VALUES ('18', '问题列表', '17', 'Problem', 'showlist', '17-18', '1', '2016-10-26 08:54:09', '2016-10-27 09:57:09', '1');
INSERT INTO `yw_auth` VALUES ('19', '添加问题', '17', 'Problem', 'add', '17-19', '1', '2016-10-26 08:55:27', '2016-10-27 09:57:07', '1');
INSERT INTO `yw_auth` VALUES ('20', '修改用户', '7', 'Manager', 'upd', '7-20', '1', '2016-10-26 09:05:55', '2016-11-03 15:22:34', '1');
INSERT INTO `yw_auth` VALUES ('21', '状态图', '17', 'Problem', 'hchats', '17-21', '1', '2016-10-27 09:56:55', '2016-10-27 10:02:08', '0');
INSERT INTO `yw_auth` VALUES ('22', '1111', '11', '22', '333', '1-11-22', '2', '0000-00-00 00:00:00', '2017-11-01 09:17:45', '0');

-- ----------------------------
-- Table structure for `yw_images`
-- ----------------------------
DROP TABLE IF EXISTS `yw_images`;
CREATE TABLE `yw_images` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `article_id` int(50) NOT NULL COMMENT '文章ID',
  `img_url` varchar(100) NOT NULL DEFAULT '' COMMENT '大图地址',
  `themb_url` varchar(100) NOT NULL DEFAULT '' COMMENT '缩略图地址',
  `cover` tinyint(1) NOT NULL COMMENT '是否是封面图（1.是、0.不是）',
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否删除（0未删除，1已删除）',
  `type` tinyint(1) NOT NULL DEFAULT '0' COMMENT '类型（0.文章，1分类）',
  `sort` int(50) NOT NULL DEFAULT '0' COMMENT '排序（越大越靠前）',
  `createtime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updatetime` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of yw_images
-- ----------------------------
INSERT INTO `yw_images` VALUES ('1', '2', 'public/upload/171115210941.png', '', '0', '0', '0', '0', '2017-11-15 21:21:26', '2017-11-15 21:21:32');
INSERT INTO `yw_images` VALUES ('2', '3', 'public/upload/2016072110140540.jpg', '', '0', '0', '0', '0', '2017-11-15 21:22:34', '2017-11-15 21:22:39');
INSERT INTO `yw_images` VALUES ('3', '4', 'public/upload/2016072110142154.jpg', '', '0', '0', '0', '0', '2017-11-15 21:22:54', '2017-11-15 21:22:58');
INSERT INTO `yw_images` VALUES ('4', '5', 'public/upload/20150612025112329.jpg', '', '0', '0', '0', '0', '2017-11-16 11:08:27', '2017-11-16 11:08:30');
INSERT INTO `yw_images` VALUES ('5', '6', 'public/upload/20150608031813393.jpg', '', '0', '0', '0', '0', '2017-11-16 11:23:50', '2017-11-16 11:24:00');
INSERT INTO `yw_images` VALUES ('6', '7', 'public/upload/20150608031829822.jpg', '', '0', '0', '0', '0', '2017-11-16 11:25:17', '2017-11-16 11:25:20');
INSERT INTO `yw_images` VALUES ('7', '8', 'public/upload/20150608031723113.jpg', '', '0', '0', '0', '0', '2017-11-16 11:25:36', '2017-11-16 11:25:38');
INSERT INTO `yw_images` VALUES ('8', '9', 'public/upload/171116112630.png', '', '0', '0', '0', '0', '2017-11-16 11:27:03', '2017-11-16 11:27:05');
INSERT INTO `yw_images` VALUES ('9', '10', 'public/upload/nav01.jpg', '', '0', '0', '0', '0', '2017-11-16 13:08:03', '2017-11-16 13:08:10');
INSERT INTO `yw_images` VALUES ('10', '14', 'public/upload/171116142621.png', '', '0', '0', '0', '0', '2017-11-16 14:31:39', '2017-11-16 14:31:42');

-- ----------------------------
-- Table structure for `yw_log`
-- ----------------------------
DROP TABLE IF EXISTS `yw_log`;
CREATE TABLE `yw_log` (
  `log_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `log_name` int(10) unsigned NOT NULL COMMENT '日志名称',
  `log_reported_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '事件报告时间',
  `log_level` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '严重级别(1.I,2.II,3.III,4.IV)',
  `log_phone` varchar(20) NOT NULL,
  `log_report_user` int(10) unsigned NOT NULL COMMENT '日志报告人',
  `log_type` int(10) NOT NULL COMMENT '事件类型(1.软件故障，2.硬件故障，3.彩打没墨，4.其他故障)',
  `log_describe` varchar(200) NOT NULL COMMENT '事件详细描述',
  `log_first_response_time` timestamp NULL DEFAULT NULL COMMENT '首次响应时间',
  `log_completion_time` timestamp NULL DEFAULT NULL COMMENT '处理完成时间',
  `log_processing_method` varchar(200) DEFAULT NULL COMMENT '处理方法及步骤',
  `log_status` int(10) DEFAULT '0' COMMENT '日志状态(1.正常，2.一般故障，3.严重故障)',
  `log_result` int(10) DEFAULT '1' COMMENT '处理结果(1.未处理，2.处理中，3.已处理)',
  `log_deal_user` varchar(20) DEFAULT NULL COMMENT '处理人',
  `list_updated` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `list_deleted` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`log_id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COMMENT='日志信息表';

-- ----------------------------
-- Records of yw_log
-- ----------------------------
INSERT INTO `yw_log` VALUES ('1', '12', '2016-11-16 14:23:17', '1', '15828272713', '10', '4', '话务台断线，14：02', '2016-11-16 14:27:33', '2016-11-16 14:30:17', '需联系政务中心张伟查看断线原因及处理方法', '0', '3', '3', '2016-11-16 14:54:12', '0');
INSERT INTO `yw_log` VALUES ('2', '12', '2016-11-17 13:16:50', '1', '18482145438', '10', '4', '11月17日 12:50呼叫中心  出现无法打开知识库故障，请尽快处理。\r\n申报人：张宜\r\n', '2016-11-17 13:18:28', '2016-11-17 13:22:50', '本部测试没得问题', '0', '3', '3', '2016-11-17 13:22:36', '0');
INSERT INTO `yw_log` VALUES ('3', '12', '2016-11-17 15:42:42', '1', '15983415450', '10', '1', ' 11月17日15:30话务台 1：出现电脑显示挂断，可是我处还可以听到群众与窗口老师的对话的故障 2：由于电脑原因多次出现群众听不见我处声音的故障，请尽快处理。\r\n申报人：宋燕\r\n', '2016-11-17 15:46:39', '2016-11-17 15:46:42', '直接重装IE控件', '0', '3', '3', '2016-11-17 15:46:28', '0');
INSERT INTO `yw_log` VALUES ('4', '12', '2016-11-18 09:18:43', '1', '13088089786', '10', '4', '2016年11月18日 呼叫中心知识库内网知识库无法打开，外网知识库也无法使用。\r\n申报人：何丹', '2016-11-18 09:20:03', '2016-11-18 09:25:53', '外网检测没得问题，需要联系政务中心技术人员排查', '0', '3', '3', '2016-11-18 09:26:46', '0');
INSERT INTO `yw_log` VALUES ('5', '7', '2016-11-18 10:58:42', '1', '18382258575', '6', '2', '新津非紧急系统服务器故障，无法登录。需联系甲方82518725重启系统。', '2016-11-18 11:02:29', '2016-11-18 11:02:35', '系统重启联系电话：82518725', '0', '3', '2', '2016-11-18 11:03:43', '0');
INSERT INTO `yw_log` VALUES ('6', '12', '2016-11-23 09:21:08', '1', '13088089786', '10', '2', '11月23日 09:17 呼叫中心  出现主机无法开启，请尽快处理。\r\n申报人：何丹', '2016-11-23 09:30:02', '2016-11-23 09:38:40', '需要到现场处理。有备用PC就到后面一起处理', '0', '3', '3', '2016-11-23 09:40:20', '0');
INSERT INTO `yw_log` VALUES ('7', '8', '2016-11-28 14:09:08', '1', '15802855880', '6', '4', '无法登陆系统，需联系新津信息办重启服务器', '2016-11-28 14:11:47', '2016-11-28 14:11:49', '服务器已重启，系统正常。', '0', '3', '2', '2016-11-28 14:12:20', '0');
INSERT INTO `yw_log` VALUES ('8', '7', '2016-11-29 08:55:10', '1', '13388177780', '6', '1', '登陆不上，界面显示用户名和密码错误。', '2016-11-29 08:56:57', '2016-11-29 08:58:27', '联系新津重启服务器', '0', '3', '3', '2016-11-29 08:59:00', '0');
INSERT INTO `yw_log` VALUES ('9', '8', '2016-11-30 09:24:24', '1', '15802855880', '6', '2', '新津非紧急系统无法登陆，需要新津那边重启服务器', '2016-11-30 09:26:34', '2016-11-30 09:26:35', '联系新津重启服务器', '0', '3', '3', '2016-11-30 09:27:01', '0');
INSERT INTO `yw_log` VALUES ('10', '2', '2016-12-01 09:44:27', '1', '13541088328', '5', '4', '呼入弹屏，显示白屏。之前窗口一起白。', '2016-12-01 10:32:43', '2016-12-01 10:32:45', '关闭浏览器，重开。清理不必要的后台应用', '0', '3', '2', '2016-12-01 10:33:45', '0');
INSERT INTO `yw_log` VALUES ('11', '12', '2016-12-09 10:37:00', '1', '13088089786', '10', '4', '12月9日 10:28 话务台3个 账号： a b c   出现闪退，退出后无法登陆，再登陆提示登陆话务台服务器失败，链接错误，请尽快处理。\r\n申报人：何丹', '2016-12-09 10:42:43', '2016-12-09 10:42:45', '再次登录系统，记录时间及错误信息。报告给政务中心张伟', '0', '3', '3', '2016-12-09 10:44:09', '0');
INSERT INTO `yw_log` VALUES ('12', '13', '2016-12-20 09:22:08', '1', '15828272713', '10', '4', '3D政务大厅系统故障，无法进入', '2016-12-20 10:00:00', '2016-12-20 14:55:03', '已联系陈传奇处理', '0', '3', '3', '2016-12-21 08:56:21', '0');
INSERT INTO `yw_log` VALUES ('13', '19', '2017-01-05 14:24:06', '1', '', '3', '4', '乐政项目主动维护', '2017-01-05 14:24:06', '2017-01-05 14:24:06', '乐政项目主动维护', '0', '3', '3', '2017-01-05 14:39:53', '0');
INSERT INTO `yw_log` VALUES ('14', '12', '2017-02-14 14:22:51', '1', '13880745385', '24', '1', '2017年2月14日 09:00 呼叫中心有2台电脑出现故障。 电脑1出现蓝屏故障；电脑2出现政务云平台系统不能转接和白屏。请尽快处理。申报人：兰杰\r\n\r\n', '2017-02-14 14:25:04', '2017-02-14 14:26:45', '电脑蓝屏运维将1个工作日内到现场维护，电脑转接以及白屏属于呼叫系统插件故障，将立即远程维护！', '0', '3', '2', '2017-02-14 14:26:49', '0');
INSERT INTO `yw_log` VALUES ('15', '2', '2017-08-25 11:07:50', '1', '15802855880', '5', '1', '系统自身原因 呼入不弹屏，', '2017-08-25 11:09:28', '2017-08-25 11:09:32', '重装IE控件', '0', '3', '34', '2017-08-25 11:19:12', '0');
INSERT INTO `yw_log` VALUES ('16', '2', '2017-08-28 14:23:20', '1', '13540361390', '5', '4', '呼入不弹屏，系统自身原因。', '2017-08-28 14:29:47', '2017-08-28 14:29:49', '重装IE控件', '0', '3', '34', '2017-09-14 10:27:16', '0');
INSERT INTO `yw_log` VALUES ('17', '2', '2017-08-28 16:14:11', '1', '15802855880', '5', '1', '一号通系统呼入不弹屏。', '2017-08-28 16:34:53', '2017-08-28 16:34:54', '重装IE控件', '0', '3', '34', '2017-09-14 10:27:17', '0');
INSERT INTO `yw_log` VALUES ('18', '2', '2017-09-01 16:39:31', '1', '15708449712', '5', '1', '大邑一号通系统有时不弹屏', '2017-09-01 16:40:29', '2017-09-01 16:40:31', '重装控件', '0', '3', '34', '2017-09-14 10:27:18', '0');
INSERT INTO `yw_log` VALUES ('19', '2', '2017-09-05 17:06:06', '1', '15708449712', '5', '1', '一号通不弹屏，一直没得到解决。', '2017-09-05 17:08:09', '2017-09-05 17:08:11', '重装IE控件', '0', '1', '34', '2017-09-14 10:27:18', '0');
INSERT INTO `yw_log` VALUES ('20', '2', '2017-09-08 13:33:25', '1', '15708449712', '5', '1', '系统不弹屏，一直没有得到解决。', '2017-09-08 13:40:08', '2017-09-08 13:40:09', '重装控件', '0', '3', '34', '2017-09-14 10:27:21', '0');
INSERT INTO `yw_log` VALUES ('21', '2', '2017-09-13 09:30:47', '1', '15802855880', '5', '1', '系统自身原因，呼入不弹屏', '2017-09-13 09:46:34', '2017-09-13 09:46:35', '重装IE控件', '0', '3', '34', '2017-09-14 10:27:23', '0');
INSERT INTO `yw_log` VALUES ('22', '2', '2017-09-15 14:08:56', '1', '15802855880', '5', '1', '登录系统，网页空白无显示', '2017-09-15 14:28:42', '2017-09-15 14:28:45', '重装IE控件', '0', '3', '34', '2017-09-15 14:29:04', '0');
INSERT INTO `yw_log` VALUES ('23', '2', '2017-09-25 17:30:50', '1', '13540361390', '5', '1', '群众来电话时，系统呼入没有弹屏。', '2017-09-25 17:32:38', '2017-09-25 17:32:54', '重装IE控件', '0', '3', '34', '2017-09-30 15:14:36', '0');
INSERT INTO `yw_log` VALUES ('24', '2', '2017-09-30 15:06:39', '1', '15802855880', '5', '1', '系统网5555空白，内容显示不全', '2017-09-30 15:12:45', '2017-09-30 15:12:46', '重装控件', '0', '3', '34', '2017-10-20 14:45:34', '0');

-- ----------------------------
-- Table structure for `yw_log_list`
-- ----------------------------
DROP TABLE IF EXISTS `yw_log_list`;
CREATE TABLE `yw_log_list` (
  `list_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `list_name` varchar(200) NOT NULL COMMENT '日志名称',
  `list_pid` int(10) unsigned NOT NULL COMMENT '日志父ID',
  `list_path` varchar(100) NOT NULL COMMENT '日志路径',
  `list_created` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `list_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `list_deleted` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`list_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COMMENT='日志分类列表';

-- ----------------------------
-- Records of yw_log_list
-- ----------------------------
INSERT INTO `yw_log_list` VALUES ('1', '大邑', '0', '0,', '2016-11-15 13:20:20', '2016-11-15 13:20:26', '0');
INSERT INTO `yw_log_list` VALUES ('2', '一号通', '1', '0,1,', '2016-11-15 13:20:47', '2016-11-15 13:20:52', '0');
INSERT INTO `yw_log_list` VALUES ('3', '在线咨询', '1', '0,1,', '2016-11-15 13:21:27', '2016-11-15 13:21:31', '0');
INSERT INTO `yw_log_list` VALUES ('4', '新津', '0', '0,', '2016-11-15 13:25:35', '2016-11-15 13:25:40', '0');
INSERT INTO `yw_log_list` VALUES ('5', '县长信箱', '4', '0,4,', '2016-11-15 13:28:10', '2016-11-15 13:29:41', '0');
INSERT INTO `yw_log_list` VALUES ('6', '县长热线', '4', '0,4,', '2016-11-15 13:30:24', '2016-11-15 13:30:29', '0');
INSERT INTO `yw_log_list` VALUES ('7', '民生诉求', '4', '0,4,', '2016-11-15 13:31:09', '2016-11-15 13:31:14', '0');
INSERT INTO `yw_log_list` VALUES ('8', '阳光热线', '4', '0,4,', '2016-11-15 13:31:37', '2016-11-15 13:31:41', '0');
INSERT INTO `yw_log_list` VALUES ('9', '微博微信', '4', '0,4,', '2016-11-15 13:33:47', '2016-11-15 13:33:51', '0');
INSERT INTO `yw_log_list` VALUES ('10', '市长电话', '4', '0,4,', '2016-11-15 13:33:44', '2016-11-15 13:34:04', '0');
INSERT INTO `yw_log_list` VALUES ('11', '武侯', '0', '0,', '2016-11-15 13:39:55', '2016-11-15 13:39:59', '0');
INSERT INTO `yw_log_list` VALUES ('12', '政务热线', '11', '0,11,', '2016-11-15 13:39:58', '2016-11-15 13:40:02', '0');
INSERT INTO `yw_log_list` VALUES ('13', '在线咨询', '11', '0,11,', '2016-11-15 13:39:53', '2016-11-15 13:39:56', '0');
INSERT INTO `yw_log_list` VALUES ('14', '微博微信', '11', '0,11,', '2016-11-15 13:39:51', '2016-11-15 13:39:54', '0');
INSERT INTO `yw_log_list` VALUES ('15', '大联动热线', '11', '0,11,', '2016-11-15 13:39:48', '2016-11-15 13:39:52', '0');
INSERT INTO `yw_log_list` VALUES ('16', '金牛', '0', '0,', '2016-11-15 13:39:45', '2016-11-15 13:39:49', '0');
INSERT INTO `yw_log_list` VALUES ('17', '微博微信', '16', '0,16,', '2016-11-15 13:40:38', '2016-11-15 13:40:42', '0');
INSERT INTO `yw_log_list` VALUES ('18', '乐政', '0', '0,', '2017-01-05 13:36:56', '2017-01-05 13:37:33', '0');
INSERT INTO `yw_log_list` VALUES ('19', '乐政项目', '18', '0,18', '2017-01-05 13:44:07', '2017-01-05 13:44:39', '0');

-- ----------------------------
-- Table structure for `yw_manager`
-- ----------------------------
DROP TABLE IF EXISTS `yw_manager`;
CREATE TABLE `yw_manager` (
  `mg_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `mg_name` varchar(200) NOT NULL COMMENT '管理员名称',
  `mg_real_name` varchar(100) NOT NULL,
  `mg_pwd` varchar(200) NOT NULL COMMENT '管理员密码',
  `mg_tel` varchar(20) NOT NULL COMMENT '管理员电话',
  `mg_role_id` varchar(200) NOT NULL COMMENT '管理员权限',
  `mg_content` text COMMENT '内容',
  `mg_created` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `mg_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `mg_big_img` varchar(200) NOT NULL COMMENT '缩略图',
  `mg_small_img` varchar(200) NOT NULL,
  `mg_deleted` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '是否删除的标识',
  PRIMARY KEY (`mg_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='管理员';

-- ----------------------------
-- Records of yw_manager
-- ----------------------------
INSERT INTO `yw_manager` VALUES ('1', 'admin', '运维经理', 'e10adc3949ba59abbe56e057f20f883e', '', '1', null, '2016-10-18 13:29:53', '2016-11-15 15:35:46', '', '', '0');

-- ----------------------------
-- Table structure for `yw_role`
-- ----------------------------
DROP TABLE IF EXISTS `yw_role`;
CREATE TABLE `yw_role` (
  `role_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `role_name` varchar(200) NOT NULL COMMENT '角色名称',
  `role_auth_ids` varchar(200) NOT NULL COMMENT '角色权限列表',
  `role_auth_ac` varchar(400) NOT NULL COMMENT '角色控制器方法',
  `role_created` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `role_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `role_deleted` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='角色';

-- ----------------------------
-- Records of yw_role
-- ----------------------------
INSERT INTO `yw_role` VALUES ('1', '运维经理', '1,3,4,7,8,9,10,11,12,13,14,15,16,17,18,19,21', 'Server-sendSMS,Server-showlist,Server-add,Server-upd,Server-del,Server-delSuspend,Server-suspendList,Role-showlist,Role-distribute,Auth-showlist,Auth-add,Problem-showlist,Problem-add,Problem-upd,Problem-hchats,Problem-getData,Manager-showlist,Manager-add,Manager-del,Manager-upd', '2016-10-18 13:47:29', '2016-11-07 16:30:31', '0');
INSERT INTO `yw_role` VALUES ('2', '运维工程师', '1,3,4,11,17,21', 'Server-showlist,Server-add,Server-upd,Server-suspendList,Problem-hchats,Problem-getData,Problem-getYAxis,', '2016-10-18 13:47:32', '2016-11-11 14:49:44', '0');
INSERT INTO `yw_role` VALUES ('3', '座席', '0', 'Server-addRegular,Problem-hchats,', '2016-10-24 14:41:38', '2016-11-07 16:30:56', '0');

-- ----------------------------
-- Table structure for `yw_userinfo`
-- ----------------------------
DROP TABLE IF EXISTS `yw_userinfo`;
CREATE TABLE `yw_userinfo` (
  `id` tinyint(50) NOT NULL,
  `number` varchar(100) NOT NULL COMMENT '（工作人员）工号',
  `name` varchar(200) NOT NULL COMMENT '名称',
  `area` varchar(100) NOT NULL COMMENT '区域',
  `discript` text NOT NULL COMMENT '描述',
  `job` varchar(100) NOT NULL COMMENT '职务',
  `createtime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updatetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of yw_userinfo
-- ----------------------------
INSERT INTO `yw_userinfo` VALUES ('1', 'DH1140', '刘侵江', '四川省', '描描述信息描述信息描述信息描述信息描述信息描述信息描述信息描述信息描述信息描述信息描述信息描述信息描述信息描述信息描述信息描述信息描述信息描述信息描述信息描述信息描述信息描述信息描述信息描述信息描述信息描述信息描述信息描述信息描述信息描述信息描述信息描述信息描述信息描述信息描述信息描述信息描述信息描述信息描述信息描述信息描述信息描述信息描述信息描述信息描述信息描述信息描述信息描述信息描述信息描述信息描述信息描述信息描述信息述信息', '制片主任', '2017-11-15 14:14:15', '2017-11-15 14:16:02');
