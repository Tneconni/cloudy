-- wechat log table--
CREATE TABLE `oc_wechat_log` (
  `log_id` INT(11) NOT NULL AUTO_INCREMENT,
  `type` INT(11) NOT NULL,
  `content` TEXT NOT NULL,
  `date_added` DATETIME NOT NULL,
  PRIMARY KEY (`log_id`)
) ENGINE=MYISAM DEFAULT CHARSET=utf8;
ALTER  TABLE `oc_wechat_log` ADD `wechat_id` VARCHAR(64) NOT NULL;
ALTER  TABLE `oc_wechat_log` ADD `open_id` VARCHAR(64) NOT NULL;