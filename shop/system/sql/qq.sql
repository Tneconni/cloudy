
-- 2014-07-22 --
-- 添加qq 信息表 --
CREATE TABLE `oc_qq_info` (
  `qq_info_id` int(11) NOT NULL AUTO_INCREMENT,
  `open_id` varchar(64) NOT NULL COMMENT '唯一标示， 和qq号一一对应',
  `msg` text COMMENT '如果ret<0，会有相应的错误信息提示，返回数据全部用UTF-8编码。',
  `is_lost` tinyint(4) DEFAULT NULL,
  `nickname` varchar(255) NOT NULL COMMENT '用户在QQ空间的昵称。',
  `gender` varchar(8) DEFAULT '男' COMMENT '性别。 如果获取不到则默认返回"男"',
  `province` varchar(16) DEFAULT NULL,
  `city` varchar(32) DEFAULT NULL,
  `figureurl` varchar(255) DEFAULT NULL COMMENT '大小为30×30像素的QQ空间头像URL。',
  `is_yellow_vip` tinyint(4) DEFAULT NULL COMMENT '标识用户是否为黄钻用户（0：不是；1：是）。',
  `vip` tinyint(4) DEFAULT NULL COMMENT '标识用户是否为黄钻用户（0：不是；1：是）',
  `yellow_vip_level` tinyint(4) DEFAULT NULL COMMENT '黄钻等级',
  `level` tinyint(4) DEFAULT NULL COMMENT '黄钻等级',
  `is_yellow_year_vip` tinyint(4) DEFAULT NULL COMMENT '标识是否为年费黄钻用户（0：不是； 1：是）',
  PRIMARY KEY (`qq_info_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 添加新字段 qq_info_id, 和 oc_qq_info 表相关联--
ALTER TABLE oc_customer ADD `qq_info_id` INT(11) NOT NULL DEFAULT '0' COMMENT '和qq_info表关联' AFTER `customer_group_id`;