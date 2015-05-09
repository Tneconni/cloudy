-- cmc_customer_comment  --
CREATE TABLE `cmc_customer_comment` (
  `comment_id` INT(11) NOT NULL AUTO_INCREMENT,
  `content` VARCHAR(255) DEFAULT NULL,
  `customer_name` VARCHAR(32) DEFAULT '漫客',
  `customer_id` INT(11) DEFAULT 0,
  `to_comment_id` INT(11) DEFAULT 0,
  `type` VARCHAR(16) DEFAULT 'comic' COMMENT 'squad,comic,product,',
  `date_add` DATETIME NOT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=INNODB DEFAULT CHARSET=utf8;