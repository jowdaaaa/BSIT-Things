CREATE DATABASE act3;
USE act3;

CREATE TABLE employee (
	emp_num int PRIMARY KEY AUTO_INCREMENT,
    emp_title varchar(100),
    emp_lname varchar(100),
    emp_fname varchar(100),
    emp_bod date,
    emp_hire_date date,
    emp_area_code int,
    emp_phone varchar(11),
    park_code varchar(11)
);

INSERT INTO employee (emp_num, emp_title, emp_lname, emp_fname, emp_bod, emp_hire_date, emp_area_code, emp_phone, park_code) VALUE ("100", "Ms", "Calderdale", "Emma", "1972-06-15", "1992-03-15", "0101", "324-9134", "FR1001");
INSERT INTO employee (emp_title, emp_lname, emp_fname, emp_bod, emp_hire_date, emp_area_code, emp_phone, park_code) VALUE ("Mr", "Ricardo", "Marshel", "1978-03-19", "1996-04-25", "6731", "623-1346", "UK3452");
INSERT INTO employee (emp_title, emp_lname, emp_fname, emp_bod, emp_hire_date, emp_area_code, emp_phone, park_code) VALUE ("Mr", "Arshad", "Arif", "1969-11-14", "1990-12-20", "7253", "675-8993", "FR1001");
INSERT INTO employee (emp_title, emp_lname, emp_fname, emp_bod, emp_hire_date, emp_area_code, emp_phone, park_code) VALUE ("Ms", "Roberts", "Anne", "1974-10-16", "1994-08-16", "8127", "135-4123", "UK3452");
INSERT INTO employee (emp_title, emp_lname, emp_fname, emp_bod, emp_hire_date, emp_area_code, emp_phone, park_code) VALUE ("Ms", "Denver", "Enrica", "1980-11-08", "2001-10-20", "8427", "985-2342", "ZA1342");
INSERT INTO employee (emp_title, emp_lname, emp_fname, emp_bod, emp_hire_date, emp_area_code, emp_phone, park_code) VALUE ("Ms", "Namowa", "Mirrelle", "1998-03-14", "2006-11-03", "0181", "890-3243", "FR1001");
INSERT INTO employee (emp_title, emp_lname, emp_fname, emp_bod, emp_hire_date, emp_area_code, emp_phone, park_code) VALUE ("Ms", "Smith", "Gemma", "1968-02-12", "1989-01-05", "1231", "120-2311", "ZA1342");
SELECT * FROM employee;

-- E6.1
CREATE VIEW empfr AS
SELECT *
FROM employee
WHERE park_code = 'FR1001'
WITH CHECK OPTION;
SELECT * FROM empfr;

-- E6.2
UPDATE empfr
SET emp_phone = '324-9652'
WHERE emp_num = 100;
SELECT * FROM empfr;
DROP VIEW empfr;

-- E6.3
CREATE TABLE tparkssold (
	park_code varchar(10),
    park_name varchar(35),
    park_city varchar(50),
    park_country char(2)
);

INSERT INTO tparkssold (park_code, park_name, park_city, park_country) VALUE ("FR1001","Fairyland", "PARIS", "FR");
INSERT INTO tparkssold (park_code, park_name, park_city, park_country) VALUE ("UK3452","PleasureLand", "STOKE", "UK");
INSERT INTO tparkssold (park_code, park_name, park_city, park_country) VALUE ("ZA1342","GoldTown", "JOHANNESBURG", "ZA");
select * from tparksold;
CREATE VIEW tparksold AS
SELECT *
FROM tparkssold;
SELECT * FROM tparksold;

-- E6.4
CREATE VIEW emp_details AS
SELECT e.emp_num, e.park_code, p.park_name, e.emp_lname, 
		e.emp_fname, e.emp_hire_date, e.emp_bod
FROM employee e
LEFT JOIN tparkssold p
ON e.park_code = p.park_code;
SELECT * FROM emp_details;

-- E6.5
SELECT emp_fname, emp_lname, park_name FROM emp_details;

-- E6.6
CREATE TABLE sales (
	park_name varchar(20),
    line_price decimal(10.2)
);

INSERT INTO sales(park_name, line_price) VALUE ("FairyLand", 14.99);
INSERT INTO sales(park_name, line_price) VALUE ("FairyLand", 139.96);
INSERT INTO sales(park_name, line_price) VALUE ("GoldTown", 12.12);
INSERT INTO sales(park_name, line_price) VALUE ("GoldTown", 114.68);
INSERT INTO sales(park_name, line_price) VALUE ("PleasureLand", 21.98);
INSERT INTO sales(park_name, line_price) VALUE ("PleasureLand", 168.40);
SELECT * FROM sales;

CREATE VIEW ticket_sales AS
SELECT park_name, min(line_price) AS `min(line_price)`, max(line_price) AS `max(line_price)`, ROUND(AVG(line_price), 2) AS avg_price
FROM sales
GROUP BY park_name;
SELECT * FROM ticket_sales;

-- E6.7
CREATE TABLE sale(
	sale_date date
);
INSERT INTO sale(sale_date) VALUE ('2007-05-18');
select * from sale;

SELECT DISTINCT(DATE_FORMAT(sale_date, '%a-%e-%m-%y')) AS Date_Format
FROM sale;

-- E6.8
SELECT emp_fname, emp_lname, 
	   CONCAT(DATE_FORMAT(emp_bod, '%m'), '01', UPPER(SUBSTR(emp_lname, 1, 6))) 
AS user_id FROM employee;

-- E6.9
SELECT emp_fname, emp_lname, emp_bod 
FROM employee WHERE DATE_FORMAT(emp_bod, '%d') = '14';

-- E6.10
SELECT emp_fname, emp_lname, CONCAT(SUBSTR(emp_phone, 1, 3), LOWER(SUBSTR(emp_fname, 1, 2))) 
AS user_password FROM employee; 




-- DROP TABLE tparkssold;
-- DROP VIEW emp_details;