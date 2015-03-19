-- 添加表属性 --
CREATE TABLE `cmc_tao_attribute` (
  `tao_id` INT(11) NOT NULL,
  `price` DECIMAL(9,2) DEFAULT '0' NOT NULL,
  `special` DECIMAL(9,2) DEFAULT '0' NOT NULL,
  `discount` DECIMAL(5,2) DEFAULT '0' NOT NULL,
  `like_count` INT(11) DEFAULT '0' NOT NULL,
  `source` VARCHAR(16) DEFAULT 'tmall' NULL COMMENT 'tmall,tao',
  PRIMARY KEY (`tao_id`)
) ENGINE=INNODB DEFAULT CHARSET=utf8;