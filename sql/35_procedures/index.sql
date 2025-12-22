-- Procedures
-- 1. Store procedures are prepared SQL code like functions in another file.
-- 2. Procedures reduces network traffic.
-- 3. Procedures increases performance.

CREATE TABLE customers (
    id INT PRIMARY KEY AUTO_INCREMENT,
    first_name VARCHAR(50),
    last_name VARCHAR(50),
    referral_id INT
);

INSERT INTO customers (first_name,last_name,referral_id)
VALUES 
("Amina","Al-Amin",NULL),
("Zayn","Mahmoud",1),
("Hassan","Hady",2),
("Noor","Mahmoud",2);

-- 1- Implement a procedure that fetches all customers
-- a) Create a procedure 

DELIMITER $$

CREATE PROCEDURE get_all_customers()
BEGIN
	SELECT * FROM customers;
END$$

DELIMITER ;
-- b) Call a procedure 
CALL get_all_customers();

--2- Implement a procedure that fetches all customers by id
-- a) Create a procedure 
DELIMITER $$

CREATE PROCEDURE get_customer_by_id(IN id INT)
BEGIN
	SELECT * FROM customers WHERE customers.id = id;
END$$

DELIMITER ;

-- b) Call a procedure 
CALL get_customer_by_id(4);
--3- Implement a procedure that fetches all customers by first name and last name
-- a) Create a procedure 
DELIMITER $$

CREATE PROCEDURE get_customer_by_first_name_and_last_name(IN first_name VARCHAR(50), last_name VARCHAR(50))
BEGIN
	SELECT * FROM customers WHERE customers.first_name = first_name AND customers.last_name = last_name;
END$$

DELIMITER ;

-- b) Call a procedure 
CALL get_customer_by_first_name_and_last_name("Noor", "Mahmoud");

-- How to drop a procedure
DROP PROCEDURE get_all_customers;