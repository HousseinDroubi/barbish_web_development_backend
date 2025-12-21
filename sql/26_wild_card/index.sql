CREATE TABLE employees (
    id INT PRIMARY KEY AUTO_INCREMENT,
    first_name VARCHAR(40),
    last_name VARCHAR(40),
    hourly_pay DECIMAL(4,2) DEFAULT 0.00,
    job VARCHAR(50),
    hire_date DATE DEFAULT NOW()
);

INSERT INTO employees (first_name, last_name, hourly_pay, job, hire_date)
VALUES
("Ahmed","Hassan",25.50,"manager","2022-01-02"),
("Noor","Abdullah",15.00,"cashier","2022-01-03"),
("Ali","Saleh",12.50,"cook","2023-01-04"),
("Zayn","Mahmoud",12.50,"cook","2023-03-05"),
("Hassan","Al-Amin",17.25,"asst. manager","2023-04-06"),
("Sara","Al-Amin",10.00,"janitor","2023-01-07");


-- Get the following
--1) first_name starts with 'A'
SELECT *
FROM employees
WHERE first_name LIKE "A%";

--2) first_name starts with 'Ah'
SELECT *
FROM employees
WHERE first_name LIKE "Ah%";

--3) hire_date year is "2023" 
SELECT *
FROM employees
WHERE hire_date LIKE "2023%";

--4) last_name ends with 'h'
SELECT *
FROM employees
WHERE last_name LIKE "%h";

--5) job ends with 'ook' and only one character before it
SELECT *
FROM employees
WHERE job LIKE "_ook";

--6) job contains with 'ook', only one character before it and one character after it
SELECT *
FROM employees
WHERE job LIKE "_ook_";

--7) job contains with 'oo', only one character before it and one character after it
SELECT *
FROM employees
WHERE job LIKE "_oo_";

--8) hire_date month is 01
SELECT *
FROM employees
WHERE hire_date LIKE "____-01-__";

--9) job's second character is 'a' and only one character before it
SELECT *
FROM employees
WHERE job LIKE "_a%";
