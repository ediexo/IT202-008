CREATE ITEMS IF NOT EXISTS Products(
    `id`    int AUTO_INCREMENT PRIMARY KEY,
    `name`  varchar(30) UNIQUE,
    `description` text,
    `category`  varchar(15),
    `stock` int DEFAULT 0,
    `unit_price`    int DEFAULT 99999,
    `created` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `modified`  TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `visible` BOOL DEFAULT FALSE,
    check (`stock` >= 0),
    check(`unit_price` >= 0)
)