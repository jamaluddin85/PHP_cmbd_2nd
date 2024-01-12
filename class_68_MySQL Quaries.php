<h1>MySQL Quaries</h1>

To create database
CREATE DATABASE `database_Name`

To create table 
CREATE TABLE `table_name` (
    `column_heading` 2nd_data_type INT (Length/Values) 3rd_must_NOT NULL 4th_AUTO_INCREMENT,

    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(100) NOT NULL,
    `email` VARCHAR(100) NOT NULL,
    `password` VARCHAR(200) NOT NULL,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY(`id`) 
)


<br>
<h2>Insert data into the table:</h2>
INSERT INTO `table_name` (column_heading_name like-`name`, `email`, `password` ) VALUE (column_heading_name_value like-'jamal', 'jamal@gmail.com', md5(524515));

INSERT INTO `users` (`name`, `email`, `password`) VALUES ('Samiha', 'sima@gmail.com', md5(256332));
<br>

<h2>Insert multiple data into the table:</h2>

INSERT INTO `users`(`name`, `email`, `password`) VALUES
('Jamal', 'jamal@gmail.com', md5('ja2632')),
('Rita', 'rita@gmail.com', md5('r552632')),
('Arja', 'arja@gmail.com', md5('ar552632'))

<br>
To delete table:
DROP TABLE `table_name`


CREATE TABLE `products`( 
    `id` INT(11) NOT NULL AUTO_INCREMENT, 
    `name` VARCHAR(200) NOT NULL, 
    `brand` VARCHAR(100) NOT NULL, 
    `regular_price` INT(11) NOT NULL, 
    `discount_price` INT (11), 
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP, 
    PRIMARY KEY(`id`));


    INSERT INTO `products`(`name`, `brand`, `regular_price`, `discount_price`) VALUES 
    ('Jacket','DKT', 200, 150),
    ('pant','B&S', 100, 50),
    ('over_all','Richlu', 350, 250),
    ('Caver_all','Berne', 200, 150)

    <br>

    UPDATE table data:

    UPDATE `table_name` SET `column_name` = value/changed, `column_name` = value/changed WHERE `id`= id no like 1/2

    UPDATE `products` SET `regular_price`= 250, `discount_price`= 200 WHERE `id`=4


    CREATE TABLE `orders`:

    CREATE TABLE `orders`( 
    `id` INT(11) NOT NULL AUTO_INCREMENT, 
		`user_id` INT(11) NOT NULL,
	  `products_id` INT(11) NOT NULL,
		`quantity` INT(11) NOT NULL,
		`total_amount` INT(11) NOT NULL,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP, 
    PRIMARY KEY(`id`),
    FOREIGN KEY(`user_id`) REFERENCE `users` (`id`),
    FOREIGN KEY(`products_id`) REFERENCE `products` (`id`)
    );

    Update total amount column on orders table:
    UPDATE `orders` JOIN `products` ON `orders`.`products_id` = `products`.`id` SET `orders`.`total_amount` = `products`. `discount_price` * `orders`.`quantity`;