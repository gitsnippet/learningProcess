CREATE DATABASE `learningProcess`;
USE `learningProcess`;
CREATE TABLE `process` (
      `id` int(4) unsigned NOT NULL AUTO_INCREMENT,
      `time` date NOT NULL COMMENT '日期',
      `class` varchar(20) NOT NULL COMMENT '课程的名称',
      `process` varchar(100) NOT NULL COMMENT '课程的进度',
      PRIMARY KEY (`id`),
      UNIQUE KEY  (`id`,`time`,`class`,`process`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
