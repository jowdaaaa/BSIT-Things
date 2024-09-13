CREATE DATABASE mydb;

USE mydb;

CREATE TABLE employee (
	emp_ID int PRIMARY KEY AUTO_INCREMENT,
    first_name varchar(100),
    last_name varchar(100),
    hourly_pay decimal(10,2),
    hire_date date
);

INSERT INTO employee (first_name, last_name, hourly_pay, hire_date) VALUE ("Judah Paulo", "Vinas", "100.00", "2024-08-29");
INSERT INTO employee (first_name, last_name, hourly_pay, hire_date) VALUE ("John Mark David", "Pajenago", "100.00", "2024-08-29");
INSERT INTO employee (first_name, last_name, hourly_pay, hire_date) VALUE ("Roland Joseph", "Cordez", "100.00", "2024-08-29");
INSERT INTO employee (first_name, last_name, hourly_pay, hire_date) VALUE ("Johnrick", "Babila", "100.00", "2024-08-29");
INSERT INTO employee (first_name, last_name, hourly_pay, hire_date) VALUE ("John Patrick", "Acbang", "100.00", "2024-08-29");
INSERT INTO employee (first_name, last_name, hourly_pay, hire_date) VALUE ("Dince", "Deliva", "100.00", "2024-08-29");
INSERT INTO employee (first_name, last_name, hourly_pay, hire_date) VALUE ("Juan", "Lunatic", "50.00", "2024-08-29");
INSERT INTO employee (first_name, last_name, hourly_pay, hire_date) VALUE ("Dave", "Manabat", "29.00", "2024-08-29");
INSERT INTO employee (first_name, last_name, hourly_pay, hire_date) VALUE ("Jose", "Motte", "75.00", "2024-08-29");
INSERT INTO employee (first_name, last_name, hourly_pay, hire_date) VALUE ("Dobido", "Baat", "90.00", "2024-08-29");

SELECT * FROM employee;

ALTER TABLE employee RENAME employees;
ALTER TABLE employees ADD phone_number varchar(11);
ALTER TABLE employees CHANGE phone_number email varchar(50);
ALTER TABLE employees MODIFY COLUMN email varchar(50) AFTER last_name;

INSERT INTO employees (last_name, first_name) VALUE ("Skibidi","Cophal");
INSERT INTO employees (last_name, first_name) VALUE ("Sap","Neg-ah"); 

UPDATE employees SET email = "juvinas@my.cspc.edu.ph" WHERE emp_ID = 1;
UPDATE employees SET email = "jopajenago@my.cspc.edu.ph" WHERE emp_ID = 2;
UPDATE employees SET email = "rocordez@my.cspc.edu.ph" WHERE emp_ID = 3;
UPDATE employees SET email = "jobabila@my.cspc.edu.ph" WHERE emp_ID = 4;
UPDATE employees SET email = "joacbang@my.cspc.edu.ph" WHERE emp_ID = 5;
UPDATE employees SET email = "dideliva@my.cspc.edu.ph" WHERE emp_ID = 6;
UPDATE employees SET email = "julunatic@my.cspc.edu.ph" WHERE emp_ID = 7;
UPDATE employees SET email = "damanabat@my.cspc.edu.ph" WHERE emp_ID = 8;
UPDATE employees SET email = "jomotte@my.cspc.edu.ph" WHERE emp_ID = 9;
UPDATE employees SET email = "dobaat@my.cspc.edu.ph" WHERE emp_ID = 10;
UPDATE employees SET email = "coskibidi@my.cspc.edu.ph" WHERE emp_ID = 11;
UPDATE employees SET email = "nesap@my.cspc.edu.ph" WHERE emp_ID = 12;

SELECT * FROM employees;

