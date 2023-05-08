CREATE TABLE IF NOT EXISTS `Products`(
    `id` int NOT NULL AUTO_INCREMENT,
    `name` varchar(30),
    `description` text,
    `category` varchar(15),
    `stock` int DEFAULT 0,
    `unit_price` int DEFAULT 99999,
    `created` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `modified` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    `visible` BOOL DEFAULT FALSE,
    check (`stock` >= 0),
    check(`unit_price` >= 0),
    PRIMARY KEY (`id`),
    UNIQUE (`name`)
)