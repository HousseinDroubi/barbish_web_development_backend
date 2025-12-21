-- LIMIT
-- LIMIT specifies the number of records to be returned from a search query
CREATE TABLE customers (
    id INT PRIMARY KEY AUTO_INCREMENT,
    first_name VARCHAR(50),
    last_name VARCHAR(50)
);

INSERT INTO customers (first_name,last_name)
VALUES 
("Ali","Al-Amin"),
("Zayn","Abdullah"),
("Noor","Nasser"),
("Abdullah","Hassan");

-- Get the following:
--1) First 2 customers
SELECT *
FROM customers LIMIT 2;

--2) First 1 customer after first customer
SELECT *
FROM customers LIMIT 1, 1;

--3) First 1 customer after second customer
SELECT *
FROM customers LIMIT 2, 1;