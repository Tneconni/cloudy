ALTER TABLE cmc_comic ADD description TEXT COMMENT '动漫描述' AFTER `ename`;
ALTER TABLE cmc_comic ADD content TEXT COMMENT '动漫内容' AFTER `description`;