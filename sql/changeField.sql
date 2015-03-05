------------  修改域名 所需要 改动的几个表 --------------------------------
--  把 http://cloud.blog 修改为 http://m.mankaa.com --
---- 2013-12-16 18:17 -------
UPDATE
wp_posts
SET
post_content = REPLACE(
post_content,
'http://cloud.blog',
'http://m.mankaa.com'
),
pinged = REPLACE(
pinged,
'http://cloud.blog',
'http://m.mankaa.com'
),
guid = REPLACE(
guid,
'http://cloud.blog',
'http://m.mankaa.com'
);

UPDATE
wp_postmeta
SET
meta_value = REPLACE(
meta_value,
'http://cloud.blog',
'http://m.mankaa.com'
);


UPDATE
wp_options
SET
option_value = REPLACE(
option_value,
'http://cloud.blog',
'http://m.mankaa.com'
);