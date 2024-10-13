drop database CAR;
CREATE DATABASE CAR;

USE CAR;

create table customer(
	custid varchar(100) primary key,
    custname varchar(100),
    Car_number varchar(100),
    Phone_number int,
    Register_date date
);

insert into customer (custid, custname, Car_number, Phone_number, Register_date) values
	("P001", "David Lim", "WKM 1234", 0139845263, "12/06/14"),
    ("P002", "Abu Hassan", "DBA 8999", 0126377298, "23/05/14"),
    ("P003", "Lw Ban Huat", "PFL 3434", 0197894563, "05/01/14"),
    ("P004", "Karigalan", "BGN 2511", 0112356897, "23/05/13"),
    ("P007", "Kamal Ibrahim", "WEP1103", 0145689471, "12/07/14");
select * from customer;
    
create table component_claim(
	claimID varchar(100) ,
    compID varchar(100),
    quantity int
);

insert into component_claim (claimID, compID, quantity) values
	("CL001", "KK002", 1),
    ("CL001", "KK005", 2),
    ("CL003", "KK001", 2),
    ("CL012", "KK003", 1),
    ("CL004", "KK001", 2),
    ("CL002", "KK003", 1),
    ("CL003", "KK003", 1);
select * from component_claim;
    
create table claim(
	claimID varchar(100) primary key,
    claim_date date,
    custid varchar(100)
);

insert into claim (claimID, claim_date, custid) values
	("CL001", "02/06/14", "P002"),
    ("CL002", "10/07/14", "P001"),
    ("CL003", "24/07/13", "P004"),
    ("CL004", "05/08/14", "P002"),
    ("CL012", "07/07/14", "P003");
select * from claim;


create table car_component(
	compID varchar(100) primary key,
    compName varchar(100),
    price int(10)
);

insert into car_component (compID, compName, price) values
	("KK001", "ISWARA Rear Lamp", 100),
    ("KK002", "WIRA Front Mirror", 450),
    ("KK003", "ISWARA Front Mirror", 500),
    ("KK004", "WAJA Break Lamp", 250),
    ("KK005", "WIRA Front Lamp", 350);
select * from car_component;    

-- 1.
SELECT MIN(price) AS MINPRICE
FROM car_component;

-- 2. 
SELECT MAX(price) AS MAXPRICE
FROM car_component;

-- 3.
SELECT AVG(price) AS AVGPRICE
FROM car_component;

-- 4.
SELECT AVG(quantity) AS AVGQUANTITY
FROM component_claim;

-- 5.
SELECT SUM(price)
FROM car_component;

-- 6. 
SELECT SUM(quantity)
FROM component_claim;

-- 7.
SELECT COUNT(custid)
FROM customer;

-- 8.
SELECT COUNT(claimID)
FROM claim;

-- 9.
CREATE VIEW CUSTOMER_CLAIM AS
SELECT C.custid AS customer_id, C.custname AS name, C.Car_number, CL.claim_date
FROM customer C
JOIN claim CL
ON C.custid = CL.custid;
SELECT * FROM CUSTOMER_CLAIM;

-- 10.
CREATE VIEW car_claim AS
SELECT CC.compID, CC.compName AS company_name, CL.quantity, CC.price                  
FROM COMPONENT_CLAIM CL
JOIN CAR_COMPONENT CC 
ON CL.compID = CC.compID;
SELECT * FROM car_claim;
drop view car_claim;
