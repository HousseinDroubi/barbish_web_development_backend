-- SELF JOIN
-- SELF JOIN is the process of "JOIN" for a table with itself

CREATE TABLE employees (
    id INT PRIMARY KEY AUTO_INCREMENT,
    first_name VARCHAR(40),
    last_name VARCHAR(40),
    hourly_pay DECIMAL(4,2) DEFAULT 0.00,job VARCHAR(50),
    hire_date DATE DEFAULT NOW(),
	supervisor_id INT
);

INSERT INTO employees (first_name, last_name, hourly_pay, job, hire_date, supervisor_id)
VALUES
("Ahmed","Hassan",25.50,"manager","2023-01-02",NULL),
("Ali","Mahmoud",15.00,"cashier","2023-01-03",5),
("Ali","Nasser",12.50,"cook","2023-01-04",5),
("Amina","Ahmed",12.50,"cook","2023-01-05",5),
("Noor","Hassan",17.25,"asst. manager","2023-01-06",1),
("Yusuf","Mahmoud",10.00,"janitor","2023-01-07",5);

-- Select all employers with the name of the employer that they report to
SELECT E1.id, E1.first_name, E2.first_name 
FROM employees as E1 INNER JOIN employees AS E2
ON E2.id = E1.supervisor_id;