-- 添加类型值 字段：type_value --
ALTER TABLE `cmc_customer_comment` ADD `type_value` INT(11) NOT NULL COMMENT '所对应的评论类型的id' AFTER `type`;