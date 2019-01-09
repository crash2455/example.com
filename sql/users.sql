CREATE TABLE users (
    id CHAR(36) PRIMARY KEY COMMENT 'Primary Key UUID',
    first_name VARCHAR(40) DEFAULT NULL COMMENT 'The users first name',
    last_name VARCHAR(40) DEFAULT NULL COMMENT 'The users last name',
    email VARCHAR(200) DEFAULT NULL COMMENT 'A unique identifier for a user',
    created DATETIME DEFAULT CURRENT_TIMESTAMP COMMENT 'When the user was created',
    modified DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'When the user was last edited'
) ENGINE=INNODB;
