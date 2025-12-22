-- 1. GROUP BY aggregate all rows by a specific column.
-- 2. GROUP BY used with some function SUM(), COUNT(), MIN(), MAX(), AVG().


CREATE TABLE customers (
    id INT PRIMARY KEY AUTO_INCREMENT,
    first_name VARCHAR(50),
    last_name VARCHAR(50),
    referral_id INT
);

INSERT INTO customers (first_name,last_name,referral_id)
VALUES 
("Ali","Hassan",NULL),
("Amina","Mahmoud",1),
("Nour","Al-Amin",2),
("Zayn","Mahmoud",2);

CREATE TABLE transactions (
    id INT PRIMARY KEY AUTO_INCREMENT,
    amount DECIMAL (4,2),
    customer_id INT,
    order_date Date,
    FOREIGN KEY(customer_id) REFERENCES customers(id)
);

ALTER TABLE transactions
AUTO_INCREMENT = 1000;

INSERT INTO transactions (amount,customer_id,order_date)
VALUES 
(4.99,3,"2023-01-01"),
(2.89,2,"2023-01-01"),
(3.38,3,"2023-01-02"),
(4.99,1,"2023-01-02"),
(1.00,NULL,"2023-01-03"),
(2.49,4,"2023-01-03"),
(5.48,NULL,"2023-01-03");

-- How much amount we made per day, we have 3 different days 01, 02 and 03
SELECT SUM(amount) as "amount_made", order_date 
FROM `transactions`
GROUP BY order_date;

-- The maximum amount of transactions we made per day
SELECT MAX(amount) as "maximum_amount", order_date 
FROM `transactions`
GROUP BY order_date;

-- The minimum amount of transactions we made per day
SELECT MIN(amount) as "minimum_amount", order_date 
FROM `transactions`
GROUP BY order_date;

-- The average amount of transactions we made per day
SELECT AVG(amount) as "average_amount", order_date 
FROM `transactions`
GROUP BY order_date;

-- The count of transactions we made per day
SELECT COUNT(amount) as "number_of_amount", order_date 
FROM `transactions`
GROUP BY order_date;

-- The sum of amount regarding customer id
SELECT SUM(amount) AS "total_amount", customer_id
FROM transactions
GROUP BY customer_id;

-- The max of amount regarding customer id
SELECT MAX(amount) AS "maximum_amount", customer_id
FROM transactions
GROUP BY customer_id;

-- The min of amount regarding customer id
SELECT MIN(amount) AS "minimum_amount", customer_id
FROM transactions
GROUP BY customer_id;

-- The avg of amount regarding customer id
SELECT AVG(amount) AS "average_amount", customer_id
FROM transactions
GROUP BY customer_id;

-- The count of amount regarding customer id
SELECT COUNT(amount) AS "number_of_transactions", customer_id
FROM transactions
GROUP BY customer_id;

-- The count of amount regarding customer id with a condition
SELECT COUNT(amount) AS "number_of_transactions", customer_id
FROM transactions
WHERE customer_id IS NOT NULL
GROUP BY customer_id;
