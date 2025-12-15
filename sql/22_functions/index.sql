CREATE TABLE customers (
    id INT PRIMARY KEY AUTO_INCREMENT,
    first_name VARCHAR(50),
    last_name VARCHAR(50)
);

CREATE TABLE transactions (
    id INT PRIMARY KEY AUTO_INCREMENT,
    amount DECIMAL (4,2),
    customer_id INT,
    FOREIGN KEY(customer_id) REFERENCES customers(_id)
);

ALTER TABLE transactions
AUTO_INCREMENT = 1000;

INSERT INTO customers (first_name,last_name)
VALUES 
("Fred","Fish"),
("Larry","Lobster"),
("Bubble","Bass"),
("Poppy","Puff");

INSERT INTO transactions (amount,customer_id)
VALUES
(4.99,3),
(2.89,2),
(3.38,3),
(4.99,1),
(2.89,NULL);

-- COUNT will get the number of rows
SELECT COUNT(_id)
FROM customers;

-- AS will rename the result
SELECT COUNT(_id) AS "number_of_customers"
FROM customers;


-- MIN will get the minimum amount column
SELECT MIN(amount) AS "minimum"
FROM transactions;

-- MAX will get the maximum amount column
SELECT MAX(amount) AS "maximum"
FROM transactions;

-- SUM will get the total amount column
SELECT SUM(amount) as "total"
FROM transactions;

-- AVG will get the average amount column
SELECT AVG(amount) as "average"
FROM transactions;

-- CONCAT will join two texts together
SELECT CONCAT(first_name, " " ,last_name) AS "full_name"
FROM customers;