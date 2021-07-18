# users table
CREATE TABLE USERS(
    id int AUTO_INCREMENT,
    fullname VARCHAR(255),
    email VARCHAR(100),
    username VARCHAR(100),
    password VARCHAR(100),
    avatar VARCHAR(255)
) ## create table with null value
CREATE TABLE USERS (
    id int NOT NULL AUTO_INCREMENT,
    profileimg VARCHAR(100) NOT NULL,
    fullname VARCHAR(100) NOT NULL,
    username VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL,
    PRIMARY KEY(id)
);