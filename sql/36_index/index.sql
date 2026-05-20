-- 1- INDEX is a BTree data structure.
-- 2- Indexes are used to find values within a specific column more quickly.
-- 3- MySQL normally searches sequentially through a column, the longer the column, the more expensive the operation is gonna be.
-- 4- Sometimes we do have an index on _id

CREATE TABLE employees (
    _id INT PRIMARY KEY AUTO_INCREMENT,
    first_name VARCHAR(40),
    last_name VARCHAR(40),
    hourly_pay DECIMAL(4,2) DEFAULT 0.00,
    job VARCHAR(50),
    hire_date DATE DEFAULT NOW(),
);

INSERT INTO employees (first_name, last_name, hourly_pay, job, hire_date, supervisor_id,email)
VALUES ("Zahraa","Al-Amin",25.50,"manager","2023-01-02"),
       ("Noor","Hassan",15.00,"cashier","2023-01-03",),
       ("Houssein","Mahmoud",12.50,"cook","2023-01-04",),
       ("Hady","Al-Amin",12.50,"cook","2023-01-05",),
       ("Sara","Abdullah",17.25,"asst. manager","2023-01-06");

-- * To show indexes
-- ! By default, employees has index on _id, that's why searching for a customer using _id is so much fast
-- ! but, searching for employees by their first_name or last_name is more expensive.
SHOW INDEXES from employees;

-- * Create an index for last_name (one-column)
CREATE INDEX last_name_idx
ON employees(last_name);

SELECT last_name from employees;

-- * Drop INDEX from a table
-- ! In this example we will delete last_name_idx INDEX and create last_name_first_name_idx that do the same job of last_name_idx
ALTER TABLE employees
DROP INDEX last_name_idx;

-- * Create an index for last_name and first_name (many-column)
CREATE INDEX last_name_first_name_idx
ON employees(last_name,first_name);