DROP DATABASE IF EXISTS ELectronics;
CREATE DATABASE ELectronics;
START TRANSACTION;
Use ELectronics;

CREATE TABLE `User` (
    userId int NOT NULL AUTO_INCREMENT,
    firstName VARCHAR(50) NOT NULL,
    lastName VARCHAR(50) NOT NULL,
    username VARCHAR(50) NOT NULL,
    email VARCHAR (100) NOT NULL,
    userPassword VARCHAR(50) NOT NULL,
    phoneNumber VARCHAR(15),
    birthDayDate Date NOT NULL,
    PRIMARY KEY(userId)  
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `CreditCard` (
    cardNumber VARCHAR(16) NOT NULL,
    ownerName VARCHAR(50) NOT NULL,
    ownerLastName VARCHAR(50) NOT NULL,
    CCV int(4) NOT NULL,
    expirationDate Date NOT NULL,
    PRIMARY KEY (cardNumber)
    
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `Address` (
    addressId int NOT NULL AUTO_INCREMENT,
    country VARCHAR(50) NOT NULL,
    city VARCHAR(50) NOT NULL,
    district CHAR(2) NOT NULL ,
    street VARCHAR(100) NOT NULL,
    cap CHAR(5) NOT NULL,
    houseNumber INT(5),
    userId int,
    PRIMARY KEY (addressId),
    CONSTRAINT FK_UserAddress FOREIGN KEY (userId) REFERENCES User (UserId)
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `PurchaseOrder` (
    purchaseOrderId int NOT NULL AUTO_INCREMENT, 
    totalPrice decimal(19,4) NOT NULL,
    userId int,
    cardNumber VARCHAR(16) NOT NULL,
    addressId int,
    PRIMARY KEY (purchaseOrderId),
    CONSTRAINT FK_UserPurchaseOrder FOREIGN KEY (userId) REFERENCES User (userId),
    CONSTRAINT FK_CreditCardPurchaseOrder FOREIGN KEY (cardNumber) REFERENCES CreditCard( cardNumber),
    CONSTRAINT FK_AddressPurchaseOrder FOREIGN KEY (addressId) REFERENCES Address (addressId) 
   
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `Item` (
    itemId int NOT NULL AUTO_INCREMENT,
    itemName VARCHAR(100) NOT NULL,
    itemDescription TEXT,
    itemPrice decimal(19,4) NOT NULL,
    isSold tinyint(1) NOT NULL default 0,
    category ENUM('computer', 'videogames', 'console', 'smartphone', 'wires', 'others' ),
    `image` longblob ,
    seller int,
    buyer int,
    purchaseOrderId int,
    PRIMARY KEY (itemId),
    CONSTRAINT FK_SellerItem FOREIGN KEY (seller) REFERENCES User (userId),
    CONSTRAINT FK_BuyerItem FOREIGN KEY (buyer) REFERENCES User (userId),
    CONSTRAINT FK_PurchaseOrderItem FOREIGN KEY (purchaseOrderId) REFERENCES PurchaseOrder (purchaseOrderId)
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `Review` (
    reviewId int NOT NULL AUTO_INCREMENT,
    vote int(2) NOT NULL,
    textOfReview TEXT,
    reviewer int,
    reviewed int,
    PRIMARY KEY (reviewId),
    CONSTRAINT FK_UserReview_1 FOREIGN KEY (reviewer) REFERENCES User (userId),
    CONSTRAINT FK_UserReview_2 FOREIGN KEY (reviewed) REFERENCES User (userId)
)ENGINE=InnoDB DEFAULT CHARSET=latin1;






INSERT INTO `CreditCard` (`CardNumber`, `OwnerName`, `OwnerLastName`, `CCV`, `ExpirationDate`) VALUES
('123456789012', 'Marco', 'Matteucci', 321, '2025-11-23');

INSERT INTO `User` (`userId`, `firstName`, `lastName`, `username`, `email`, `userPassword`, `phoneNumber`, `birthDayDate`) VALUES
(1, 'Marco', 'Matteucci', 'marcolino','marco@ma.com','password' ,'333333333', '1999-5-17'),
(2, 'Manu', 'Matteucci', 'manuu','manu@ma.com', '3334443333','password' , '1992-8-18'),
(3, 'Marco', 'Matteucci', 'Admin','admin@admin.com', '333245678','password' , '1991-3-7');

INSERT INTO `Address` (`AddressId`, `Country`, `City`, `District`, `Street`, `CAP`, `HouseNumber`, `userId`) VALUES
(1, 'Italia', 'Rieti', 'RI','Via Palmegiani', '02100', 69, 1),
(2, 'Italia', 'Roma', 'RO','Via Boh', '00160', 3 , 2),
(3, 'Italia', 'Milano', 'MI','Via Boh', '02160', 3 , 3);

INSERT INTO `Item` (`itemId`, `itemName`, `itemDescription`, `itemPrice`, `isSold`, `category`,  `seller`) VALUES
(1, 'iPhone', 'good', '500',false, 'smartphone', 1),
(2, 'iPhone', 'good', '500',false, 'smartphone',  1),
(3, 'iPhone', 'good', '500',false, 'smartphone',  1),
(4, 'iPhone', 'good', '500',false, 'smartphone',  1),
(5, 'iPhone', 'good', '500',false, 'smartphone',  1);

INSERT INTO `Review` (`reviewId`, `vote`, `textOfReview`, `reviewer`, `reviewed`) VALUES
(1, 3, 'decente', 2,1),
(2, 4, 'buono', 1,2),
(3, 2, 'sconsigliato', 1,2);













