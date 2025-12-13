-- AUTO_INCREMENT is a keyword used to automatically add the id by 1 on last id value
CREATE TABLE transactions (
    id INT PRIMARY KEY AUTO_INCREMENT,
    amount DECIMAL(4,2)
);

-- How to add data to transactions table after making id PRIMARY KEY AUTO_INCREMENT
INSERT INTO transactions (amount)
VALUES
(10.40),
(3.40),
(99.50);


-- In order to start auto increment counting from a specific number;
--1) Making id  PRIMARY KEY AUTO_INCREMENT
CREATE TABLE transactions (
    id INT PRIMARY KEY AUTO_INCREMENT,
    amount DECIMAL(4,2)
);

--2) Make AUTO_INCREMENT start by a specifc number
ALTER TABLE transactions
AUTO_INCREMENT = 1000;

