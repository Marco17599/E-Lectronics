DROP DATABASE IF EXISTS ELectronics;
CREATE DATABASE ELectronics;
Use ELectronics;

CREATE TABLE `User` (
    UserId int NOT NULL AUTO_INCREMENT,
    FirstName VARCHAR(50) NOT NULL,
    LastName VARCHAR(50) NOT NULL,
    Username VARCHAR(50) NOT NULL,
    Email VARCHAR (100) NOT NULL,
    UserPassword VARCHAR(16) NOT NULL,
    PhoneNumber VARCHAR(15),
    BirthDayDate Date NOT NULL,
    PRIMARY KEY(UserId)  
);

CREATE TABLE `CreditCard` (
    cardNumber VARCHAR(16) NOT NULL,
    ownerName VARCHAR(50) NOT NULL,
    ownerLastName VARCHAR(50) NOT NULL,
    CCV int(4) NOT NULL,
    expirationDate Date NOT NULL,
    PRIMARY KEY (CardNumber)
    
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
    PurchaseOrderId int NOT NULL AUTO_INCREMENT, 
    TotalPrice decimal(19,4) NOT NULL,
    UserId int,
    cardNumber VARCHAR(16) NOT NULL,
    addressId int,
    PRIMARY KEY (PurchaseOrderId),
    CONSTRAINT FK_UserPurchaseOrder FOREIGN KEY (UserId) REFERENCES User (UserId),
    CONSTRAINT FK_CreditCardPurchaseOrder FOREIGN KEY (cardNumber) REFERENCES CreditCard( cardNumber),
    CONSTRAINT FK_AddressPurchaseOrder FOREIGN KEY (addressId) REFERENCES Address (addressId) 
   
);

CREATE TABLE `Item` (
    ItemId int NOT NULL AUTO_INCREMENT,
    ItemName VARCHAR(100) NOT NULL,
    ItemDescription TEXT,
    ItemPrice decimal(19,4) NOT NULL,
    IsSold bit NOT NULL,
    Category ENUM('computer', 'videogames', 'console', 'smartphone', 'wires', 'others' ),
    Seller int,
    Buyer int,
    PurchaseOrderId int,
    PRIMARY KEY (ItemId),
    CONSTRAINT FK_SellerItem FOREIGN KEY (Seller) REFERENCES User (UserId),
    CONSTRAINT FK_BuyerItem FOREIGN KEY (Buyer) REFERENCES User (UserId),
    CONSTRAINT FK_PurchaseOrderItem FOREIGN KEY (PurchaseOrderId) REFERENCES PurchaseOrder (PurchaseOrderId)
);

CREATE TABLE `Review` (
    ReviewId int NOT NULL AUTO_INCREMENT,
    Vote int(2) NOT NULL,
    TextOfReview TEXT,
    Reviewer int,
    Reviewed int,
    PRIMARY KEY (ReviewId),
    CONSTRAINT FK_UserReview_1 FOREIGN KEY (Reviewer) REFERENCES User (UserId),
    CONSTRAINT FK_UserReview_2 FOREIGN KEY (Reviewed) REFERENCES User (UserId)
); 



/*INSERT INTO `Address` (`AddressId`, `Country`, `City`, `District`, `Street`, `CAP`, `HouseNumber`) VALUES
(1, 'Italia', 'Rieti', 'RI','Via Palmegiani', '02100', 69),
(2, 'Italia', 'Roma', 'RO','Via Boh', '00160', 3);

INSERT INTO `Address` (`Country`, `City`, `District`, `Street`, `CAP`) VALUES
('Italia', 'Roma', 'RO','Via Boh', '00160');

INSERT INTO `CreditCard` (`CardNumber`, `OwnerName`, `OwnerLastName`, `CCV`, `ExpirationDate`) VALUES
('123456789012', 'Marco', 'Matteucci', 321, '2025-11-23');*/








