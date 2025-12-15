-- A foreign key is a column in a database table that links to a row in another table to show how the data is related.
CREATE Table customers(
    id INT PRIMARY KEY AUTO_INCREMENT,
    first_name VARCHAR(50),
    last_name VARCHAR(50)
);

INSERT INTO customers (first_name,last_name)
VALUES 
("Fred","Fish"),
("Larry","Lobster"),
("Bubble","Bass");


CREATE TABLE transactions (
    id INT PRIMARY KEY AUTO_INCREMENT,
    amount DECIMAL(5,2),
    customer_id INT,
    FOREIGN KEY(customer_id) REFERENCES customers(id)
);

INSERT INTO transactions (amount,customer_id)
VALUES (5.50,3),
(4.92,2),
(7.32,3),
(1.34,1);

-- Add a foreign key after creating a table

CREATE TABLE transactions (
    id INT PRIMARY KEY AUTO_INCREMENT,
    amount DECIMAL(5,2),
    customer_id INT
);

ALTER TABLE transactions
ADD FOREIGN KEY(customer_id) REFERENCES customers(id);


-- Trying to delete a row in 'customers' at this time will get an error,
-- because there are related rows in table 'transactions' 

DELETE FROM customers
WHERE id = 3; -- Will get an error

-- So, you have to delete all related rows from table 'transactions' first
DELETE FROM transactions
WHERE customer_id = 3; -- 1) Delete all related rows from table 'transactions' of customer_id = 3

DELETE FROM customers
WHERE id = 3; -- Now, this should work