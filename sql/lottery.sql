CREATE TABLE cld_lottery_customer(
  `lottery_customer_id` INT(11) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(64) NOT NULL,
  `sex` ENUM('male','female','secret') DEFAULT 'male',
  `img_url` VARCHAR(255) NOT NULL DEFAULT '',
  `lottery_level` TINYINT NOT NULL DEFAULT '0' COMMENT '0:没有中奖，非0数字：中奖等级',
  PRIMARY KEY(`lottery_customer_id`),
  KEY `name` (`name`),
  KEY `lottery_level` (`lottery_level`)
);