DROP DATABASE IF EXISTS ELectronics;
CREATE DATABASE ELectronics;
Use ELectronics;

CREATE TABLE `User` (
    userId int NOT NULL AUTO_INCREMENT,
    firstName VARCHAR(50) NOT NULL,
    lastName VARCHAR(50) NOT NULL,
    username VARCHAR(50) NOT NULL,
    email VARCHAR (100) NOT NULL,
    userPassword VARCHAR(16) NOT NULL,
    phoneNumber VARCHAR(15),
    birthDayDate Date NOT NULL,
    PRIMARY KEY(userId)  
);

CREATE TABLE `CreditCard` (
    cardNumber VARCHAR(16) NOT NULL,
    ownerName VARCHAR(50) NOT NULL,
    ownerLastName VARCHAR(50) NOT NULL,
    CCV int(4) NOT NULL,
    expirationDate Date NOT NULL,
    PRIMARY KEY (cardNumber)
    
);

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
);

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
   
);

CREATE TABLE `Item` (
    itemId int NOT NULL AUTO_INCREMENT,
    itemName VARCHAR(100) NOT NULL,
    itemDescription TEXT,
    itemPrice decimal(19,4) NOT NULL,
    isSold tinyint(1) NOT NULL default 0,
    category ENUM('computer', 'videogames', 'console', 'smartphone', 'wires', 'others' ),
    `image` longblob NOT NULL,
    seller int,
    buyer int,
    purchaseOrderId int,
    PRIMARY KEY (itemId),
    CONSTRAINT FK_SellerItem FOREIGN KEY (seller) REFERENCES User (userId),
    CONSTRAINT FK_BuyerItem FOREIGN KEY (buyer) REFERENCES User (userId),
    CONSTRAINT FK_PurchaseOrderItem FOREIGN KEY (purchaseOrderId) REFERENCES PurchaseOrder (purchaseOrderId)
);

CREATE TABLE `Review` (
    reviewId int NOT NULL AUTO_INCREMENT,
    vote int(2) NOT NULL,
    textOfReview TEXT,
    reviewer int,
    reviewed int,
    PRIMARY KEY (reviewId),
    CONSTRAINT FK_UserReview_1 FOREIGN KEY (reviewer) REFERENCES User (userId),
    CONSTRAINT FK_UserReview_2 FOREIGN KEY (reviewed) REFERENCES User (userId)
); 



/*INSERT INTO `Address` (`AddressId`, `Country`, `City`, `District`, `Street`, `CAP`, `HouseNumber`) VALUES
(1, 'Italia', 'Rieti', 'RI','Via Palmegiani', '02100', 69),
(2, 'Italia', 'Roma', 'RO','Via Boh', '00160', 3);

INSERT INTO `Address` (`Country`, `City`, `District`, `Street`, `CAP`) VALUES
('Italia', 'Roma', 'RO','Via Boh', '00160');

INSERT INTO `CreditCard` (`CardNumber`, `OwnerName`, `OwnerLastName`, `CCV`, `ExpirationDate`) VALUES
('123456789012', 'Marco', 'Matteucci', 321, '2025-11-23');*/








