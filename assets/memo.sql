// utf8mb4
CREATE DATABASE helpspot_db2
    CHARACTER SET utf8mb4
    COLLATE utf8mb4_unicode_ci;


// c
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




//altering
ALTER TABLE `posts` ADD `user_id` INT NOT NULL AFTER `id`;

// trigger
CREATE TRIGGER before_employee_update
    BEFORE UPDATE ON employees
    FOR EACH ROW
BEGIN
    INSERT INTO employees_audit
    SET action = 'update',
     employeeNumber = OLD.employeeNumber,
        lastname = OLD.lastname,
        changedat = NOW();
END$$