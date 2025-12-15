-- ON DELETE CASCADE: ON DELETE CASCADE means that when a row in one table is deleted, all related rows in another table are automatically deleted too.
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
    FOREIGN KEY(customer_id) REFERENCES customers(id) ON DELETE CASCADE -- here the implementation of ON DELETE CASCADE
);

INSERT INTO transactions (amount,customer_id)
VALUES (5.50,3),
(4.92,2),
(7.32,3),
(1.34,1);


-- Trying to delete any row in table 'customers' will delete all related rows in table 'transactions'

DELETE FROM customers
WHERE id = 3