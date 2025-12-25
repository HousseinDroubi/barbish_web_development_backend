-- Query 1
CREATE DATABASE company_db;

-- Query 2
CREATE TABLE employees (
    emp_id INT PRIMARY KEY AUTO_INCREMENT,
    emp_name VARCHAR(30) NOT NULL,
    department VARCHAR(30) NOT NULL,
    salary INT DEFAULT  0,
    manager_id INT DEFAULT NULL,
    city VARCHAR(30) NOT NULL
);


-- Query 3
INSERT INTO employees
VALUES
(NULL,"Noor", "HR", 50000, 3, "Beirut"),
(NULL,"Hassan", "IT", 60000, 4, "Baalback"),
(NULL,"Hady", "HR", 70000, NULL, "Beirut"),
(NULL,"Ali", "IT", 80000, NULL, "Tripoli"),
(NULL,"Mouhammad", "Sales", 45000, 6, "Saida"),
(NULL,"Zayn", "Sales", 65000, NULL, "Beqaa");

-- Query 4
-- a) Display all distinct departments from the employees table.

SELECT DISTINCT employees.department
FROM employees;

-- b) Display employee names and salaries where salary is greater than 50,000 AND the employee
-- belongs to either the IT or HR department.
SELECT employees.emp_name, employees.salary
FROM employees
WHERE employees.salary > 50000 AND  employees.department IN ("IT","HR");

-- c) Display the names of employees whose names start with the letter 'H'.
SELECT *
FROM employees
WHERE emp_name LIKE "H%";

-- d) Display the top 3 highest paid employees.
SELECT emp_id, emp_name, salary
FROM employees
ORDER BY salary DESC LIMIT 3;

--e) Display the total salary paid department-wise.
SELECT SUM(salary) as "total_salary_paid_per_departement", department
FROM employees
GROUP BY department; 

--f) Display the total salary paid department-wise along with the grand total.
SELECT SUM(salary) as "total_salary_paid_per_departement", department
FROM employees
GROUP BY department WITH ROLLUP; 

-- g) Display employees working in Beirut and employees working in Beqaa using the UNION
-- operator.
SELECT * FROM employees WHERE city = "Beirut"
UNION
SELECT * FROM employees WHERE city = "Beqaa";

-- h) Using a SELF JOIN, display employee names along with their respective manager names. 
SELECT e1.emp_name, e2.emp_name as "manager"
FROM employees as e1 INNER JOIN employees e2
ON e2.emp_id = e1.manager_id;

-- i) Display the names of employees whose salary is greater than the average salary of all
-- employees.

SELECT emp_name, salary, (SELECT AVG(salary) FROM employees) as avg
FROM employees 
WHERE salary > (SELECT AVG(salary) FROM employees);

-- j) Create a VIEW named IT_Employees that displays the employee name, department, and salary of
-- employees working in the IT department

CREATE VIEW IT_Employees AS
SELECT emp_name, department, salary FROM employees WHERE department = "IT";

-- k) Write an SQL query to display all records from the IT_Employees view.
SELECT * FROM IT_Employees;

-- l) Create a stored procedure named GetAllEmployees that displays all records from the Employee
-- table.

DELIMITER $$

CREATE PROCEDURE GetAllEmployees()
BEGIN
	SELECT * FROM employees;
END$$

DELIMITER ;


-- Call GetAllEmployees
CALL GetAllEmployees();

-- m) Create a stored procedure named GetEmployeesByDepartment that accepts a department
-- name as input and displays employees belonging to that department.
-- (Procedure with one input parameter)

DELIMITER $$

CREATE PROCEDURE GetEmployeesByDepartment(IN department VARCHAR(30))
BEGIN
	SELECT * FROM employees WHERE employees.department = department;
END$$

DELIMITER ;

-- Call GetEmployeesByDepartment
CALL GetEmployeesByDepartment("IT");

-- n) Create a stored procedure named GetEmployeesBySalary that accepts a salary amount as input
-- and displays employees whose salary is greater than the given value.
-- (Procedure with one input parameter)

DELIMITER $$

CREATE PROCEDURE GetEmployeesBySalary(IN salary INT)
BEGIN
	SELECT * FROM employees WHERE employees.salary > salary;
END$$

DELIMITER ;

-- Call GetEmployeesBySalary
CALL GetEmployeesBySalary(60000);