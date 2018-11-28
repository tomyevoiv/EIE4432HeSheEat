CREATE TABLE user
(
    UserID int PRIMARY KEY NOT NULL AUTO_INCREMENT,
    FirstName varchar(45) NOT NULL,
    LastName varchar(45) NOT NULL,
    Birthday date NOT NULL,
    PhoneNum varchar(10) NOT NULL,
    Email varchar(100) NOT NULL,
    UserName varchar(45) NOT NULL,
    Password varchar(45) NOT NULL
);
