-- ON DELETE SET NULL: ON DELETE SET NULL means that when a referenced row is deleted, the related foreign key values are set to NULL instead of deleting the rows.
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
    FOREIGN KEY(customer_id) REFERENCES customers(id) ON DELETE SET NULL -- Here is the implementation of ON DELETE SET NULL
);

INSERT INTO transactions (amount,customer_id)
VALUES (5.50,3),
(4.92,2),
(7.32,3),
(1.34,1);

-- Trying to delete any row in table 'customers' will set related rows of 'customer_id' column in table 'transactions' to NULL
DELETE FROM users
WHERE id = 3;