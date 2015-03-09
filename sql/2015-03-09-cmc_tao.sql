-- 添加数据表 cmc_tao --
CREATE TABLE `cmc_tao` (
  `tao_id` INT(11) NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(255) DEFAULT NULL,
  `url` VARCHAR(1024) DEFAULT NULL,
  `img` VARCHAR(1024) DEFAULT NULL,
  `website_id` INT(11) DEFAULT NULL COMMENT '来源网站 id',
  `public_date` DATETIME NOT NULL,
  `date_add` DATETIME NOT NULL,
  PRIMARY KEY (`tao_id`)
) ENGINE=INNODB DEFAULT CHARSET=utf8;
