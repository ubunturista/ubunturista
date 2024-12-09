CREATE DATABASE targetdb;
CREATE USER targetuser@localhost IDENTIFIED BY 'UnSuperPassword1234';

GRANT ALL PRIVILEGES ON targetdb.* TO targetuser@localhost;
FLUSH PRIVILEGES;

USE targetdb;

CREATE TABLE users (
	id int not null primary key auto_increment,
	name text not null,
	lastname text not null,
	created_at datetime not null
);





