-- Relational operators (>, >=, <, <=, =, !=)
-- Logical operators (AND, OR, NOT)

CREATE TABLE employees (
    id INT PRIMARY KEY AUTO_INCREMENT,
    first_name VARCHAR(40),
    last_name VARCHAR(40),
    hourly_pay DECIMAL(4,2) DEFAULT 0.00,
    job VARCHAR(20),
    hire_date DATE DEFAULT NOW()
);
INSERT INTO employees (first_name, last_name, hourly_pay, job, hire_date)
VALUES 
("Layla","Hassan",25.50,"manager","2023-01-02"),
("Noor","Abdullah",15.00,"cook","2023-01-03"),
("Yusuf","Saleh",12.50,"hr","2023-01-04"),
("Zayn","Mahmoud",12.50,"developer","2023-01-05"),
("Mahmoud","Nasser",17.25,"cashier","2023-01-06"),
("Mariam","Nasser",10.00,"manager","2023-01-07");

-- Get the following
--1) hire date less than "2023-01-05" and job is "cook"
SELECT *
FROM employees
WHERE hire_date < "2023-01-05" AND job = "cook";

--2) job is "cook" or job is "cashier"
SELECT *
FROM employees
WHERE job = "cook" OR job = "cashier";

--3) job is "manager"
SELECT *
FROM employees
WHERE job = "manager";

--4) hire_date is between "2023-01-04" and "2023-01-07"
SELECT *
FROM employees
WHERE hire_date BETWEEN "2023-01-01" AND "2023-01-07";

--5) job is one of the "cook","cashier" or "janitor"
SELECT *
FROM employees
WHERE job IN ("cook", "cashier", "janitor");