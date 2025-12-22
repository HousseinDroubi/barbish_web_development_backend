-- 1. ROLLUP comes with GROUP BY
-- 2. ROLLUP produces another row that shows the GRAND TOTAL

CREATE TABLE customers (
    id INT PRIMARY KEY AUTO_INCREMENT,first_name VARCHAR(50),
    last_name VARCHAR(50),
    referral_id INT
);

INSERT INTO customers (first_name,last_name,referral_id)
VALUES 
("Noor","Mahmoud",NULL),
("Zayn","Hassan",1),
("Hady","Al-Amin",2),
("Amina","Mahmoud",2);

CREATE TABLE transactions (
    _id INT PRIMARY KEY AUTO_INCREMENT,
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

-- The sum of amount of each date
SELECT SUM(amount) AS "total_amount_per_day", order_date
FROM transactions
GROUP BY order_date;

-- The sum of amount of each date and a row that shows the total amount
SELECT SUM(amount) AS "total_amount_per_day", order_date
FROM transactions
GROUP BY order_date WITH ROLLUP;

-- The number of transactions in each day
SELECT COUNT(amount) AS "number_of_transactions_per_day", order_date
FROM transactions
GROUP BY order_date;

-- The number of transactions in each day with a row that show the total number of transactions
SELECT COUNT(amount) AS "number_of_transactions_per_day", order_date
FROM transactions
GROUP BY order_date WITH ROLLUP;