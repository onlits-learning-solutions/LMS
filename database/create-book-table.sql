CREATE TABLE book
(
id CHAR(5) PRIMARY KEY,
title VARCHAR(100),
edition VARCHAR(50),
author VARCHAR(100),
publication VARCHAR(100),
isbn10 CHAR(10),
isbn13 CHAR(13),
pages INT,
price FLOAT,
cover LONGBLOB
);