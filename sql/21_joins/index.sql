-- JOIN in general combines rows from two tables based on a related column.

CREATE Table customers(
    id INT PRIMARY KEY AUTO_INCREMENT,
    first_name VARCHAR(50),
    last_name VARCHAR(50)
);

INSERT INTO customers (first_name,last_name)
VALUES 
("Fred","Fish"),
("Larry","Lobster"),
("Bubble","Bass"),
("John","Doe");


CREATE TABLE transactions (
    id INT PRIMARY KEY AUTO_INCREMENT,
    amount DECIMAL(5,2),
    customer_id INT,
    FOREIGN KEY(customer_id) REFERENCES customers(id) ON DELETE SET NULL
);

INSERT INTO transactions (amount,customer_id)
VALUES 
(5.50,3),
(4.92,2),
(7.32,3),
(1.34,1),
(2.68,NULL);

-- INNER JOIN
-- Returns only rows that match in both tables.

SELECT *
FROM transactions INNER JOIN customers
ON transactions.customer_id = customers.id;

-- INNER JOIN on specific columns

SELECT customers.first_name,customers.last_name,transactions.amount
FROM transactions INNER JOIN customers
ON transactions.customer_id = customers.id;

-- LEFT JOIN
-- Returns all rows from the left table, and matching rows from the right table (or NULL if no match).

SELECT *
FROM transactions LEFT JOIN customers
ON transactions.customer_id = customers.id;

-- RIGHT JOIN
-- Returns all rows from the right table, and matching rows from the left table (or NULL if no match).

SELECT *
FROM transactions RIGHT JOIN customers
ON transactions.customer_id = customers.id;