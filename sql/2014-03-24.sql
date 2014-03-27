-- fixing the field iamge_url to image_url --
ALTER TABLE cld_project CHANGE `iamge_url` `image_url` VARCHAR(255) NOT NULL;