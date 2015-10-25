-- 添加squad 字段：type_value --

ALTER TABLE `cmc_squad`
  ADD `hot` INT (1) NOT NULL DEFAULT 0  COMMENT '最热推荐' AFTER `img`;

ALTER TABLE `cmc_squad`
  ADD `content` TEXT NOT NULL  COMMENT '文章内容' AFTER `description`;
