-- Create DB
CREATE DATABASE learn_sql_db;

-- Create users tabe
CREATE TABLE users(
    id INT PRIMARY KEY,    
    first_name VARCHAR(50),    
    last_name VARCHAR(50),    
    houlry_pay DECIMAL(4,2),
    hire_date DATE,    
);

-- Fill data
INSERT INTO users 
VALUES
(1,"Houssein","Droubi",12.3,"2025-10-20"),
(2,"Ali","Salman",20.5,"2025-08-20"),
(3,"Walid","Chehne",12,"2023-08-20"),
(4,"Ali","Charaf",17,"2010-08-12"),
(5,"Moustafa","Sayed",35,"2024-09-12");

-- Get all users
SELECT *
FROM users;

-- Get first name for all row
SELECT first_name
FROM users;

-- Get first name and last name for all row
SELECT first_name, last_name
FROM users;

-- Get first name and last name for user id = 1
SELECT first_name,last_name
FROM users
WHERE id = 1;

-- Get first name and last name for user id > 3
SELECT first_name,last_name
FROM users
WHERE id > 3; -- >, <, >=, <=, =, !=

-- Get all users where first name is Ali
SELECT *
FROM users
WHERE first_name = "Ali";

-- Get all users where first name is not Ali
SELECT *
FROM users
WHERE first_name != "Ali";

-- Get id and hourly pay for users who have hourly pay greater than 15
SELECT id,hourly_pay
FROM users
WHERE hourly_pay>15;

-- Get id and hire date for users who are hired before 2025/01/01
SELECT id, hire_date
FROM users
WHERE hire_date < "2025-01-01";

-- Get id for users who have NULL data (we use IS in order to search for NULL)
SELECT id
FROM `users`
WHERE first_name IS NULL;


-- Get id for users who haven't NULL data
SELECT id
FROM `users`
WHERE first_name IS NOT NULL;


-- Get users who have first name as "Ali" and have hourly_pay greater than 18
SELECT *
FROM users
WHERE first_name = "Ali" AND hourly_pay>18;

-- Get users who have hourly pay greater than 15 and are hired before 2024/01/01
SELECT *
FROM users
WHERE hourly_pay>15 AND hire_date< "2024-01-01";

-- Get users who have have "Walid" as first name or users who have hourly pay greater than 30
SELECT *
FROM users
WHERE first_name = "Walid" OR hourly_pay>30;

-- Get users who have hired between 2023/01/01 and 2025/01/01
SELECT *
FROM users
WHERE hire_date BETWEEN "2023-01-01" AND "2025-01-01"

-- Get users who have last name starts with "CH"
SELECT *
FROM users
WHERE last_name LIKE "CH%"

-- Get users who have last name contains "a"
SELECT *
FROM users
WHERE last_name LIKE "%a%";