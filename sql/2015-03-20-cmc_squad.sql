-- 产品小队表 --
CREATE TABLE `cmc_squad` (
  `squad_id` INT(11) NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(255) DEFAULT NULL,
  `description` VARCHAR(1024) DEFAULT NULL,
  `img` TEXT,
  `last_modified` DATETIME NOT NULL,
  `date_add` DATETIME NOT NULL,
  PRIMARY KEY (`squad_id`)
) ENGINE=INNODB DEFAULT CHARSET=utf8;

-- 小队和产品对应关系表 --
CREATE TABLE `cmc_tao_to_squad`(
  `squad_id` INT(11) NOT NULL,
  `tao_id` INT(11) NOT NULL
) ENGINE=INNODB DEFAULT CHARSET=utf8;