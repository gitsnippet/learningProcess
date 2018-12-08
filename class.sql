USE `learningProcess`;
CREATE TABLE IF NOT EXISTS `class`(
	    `id` INT(4) UNSIGNED NOT NULL AUTO_INCREMENT,
	    `date` DATE NOT NULL COMMENT '日期',
	    `class` VARCHAR(100) NOT NULL COMMENT '课程的名称',
	    UNIQUE KEY (`class`),
	    PRIMARY KEY (`id`)
	) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
