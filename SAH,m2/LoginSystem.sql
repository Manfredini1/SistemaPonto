CREATE DATABASE LoginSystem;
use LoginSystem;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `nome` VARCHAR(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
);


CREATE TABLE `registro`
(
	`id` SERIAL PRIMARY KEY,
	`event_date` DATE,
	`event_start` TIME,
	`event_end` TIME,
  `total` VARCHAR(256),
	`justify` VARCHAR(256),
	user_id INTEGER REFERENCES users (id)
);

INSERT INTO users(nome, email, password)
values('Paulo', 'aaa@aa.com', 'aaa');

