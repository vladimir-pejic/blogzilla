-- Create DATABASE for this platform
CREATE DATABASE php_blog
    CHARACTER SET utf8mb4
    COLLATE utf8mb4_unicode_ci;


-- Create USERS table

CREATE TABLE `php_blog`.`users`

(
`id` INT NOT NULL AUTO_INCREMENT ,
`first_name` VARCHAR(255) NOT NULL ,
`last_name` VARCHAR(255) NOT NULL ,
`email` VARCHAR(255) NOT NULL ,
`password` VARCHAR(255) NOT NULL ,
`created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ,

PRIMARY KEY (`id`), UNIQUE (`email`)
)

ENGINE = InnoDB;


-- Create POSTS table

CREATE TABLE `php_blog`.`posts`

(
`id` INT NOT NULL AUTO_INCREMENT ,
`title` VARCHAR(255) NOT NULL ,
`body` TEXT NOT NULL ,
`link` VARCHAR(255) NOT NULL ,
`created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ,

PRIMARY KEY (`id`)
)

ENGINE = InnoDB;
