------------  修改域名 所需要 改动的几个表 --------------------------------
--  把 http://cloud.test 修改为 http://cloud.blog :8080 --
---- 2013-12-16 18:17 -------
UPDATE
wp_posts
SET
post_content = REPLACE(
post_content,
'http://cloud.test',
'http://cloud.blog :8080'
),
pinged = REPLACE(
pinged,
'http://cloud.test',
'http://cloud.blog :8080'
),
guid = REPLACE(
guid,
'http://cloud.test',
'http://cloud.blog :8080'
);

UPDATE
wp_postmeta
SET
meta_value = REPLACE(
meta_value,
'http://cloud.test',
'http://cloud.blog :8080'
);


UPDATE
wp_options
SET
option_value = REPLACE(
option_value,
'http://cloud.test',
'http://cloud.blog :8080'
);