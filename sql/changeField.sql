------------  修改域名 所需要 改动的几个表 --------------------------------
--  把 http://tneconni.gotoip55.com 修改为 http://cloud.blog --
---- 2013-12-16 18:17 -------
UPDATE
wp_posts
SET
post_content = REPLACE(
post_content,
'http://tneconni.gotoip55.com',
'http://cloud.blog'
),
pinged = REPLACE(
pinged,
'http://tneconni.gotoip55.com',
'http://cloud.blog'
),
guid = REPLACE(
guid,
'http://tneconni.gotoip55.com',
'http://cloud.blog'
);

UPDATE
wp_postmeta
SET
meta_value = REPLACE(
meta_value,
'http://tneconni.gotoip55.com',
'http://cloud.blog'
);


UPDATE
wp_options
SET
option_value = REPLACE(
option_value,
'http://tneconni.gotoip55.com',
'http://cloud.blog'
);