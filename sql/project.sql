-- 添加 js app 链接字段 向project表 --
ALTER TABLE cld_project ADD `link` VARCHAR(255) NOT NULL COMMENT '作品链接' AFTER `iamge_url`;