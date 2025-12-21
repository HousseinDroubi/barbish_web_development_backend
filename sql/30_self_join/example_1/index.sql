-- SELF JOIN
-- SELF JOIN is the process of "JOIN" for a table with itself

CREATE TABLE customers (
    id INT PRIMARY KEY AUTO_INCREMENT,
    first_name VARCHAR(50),
    last_name VARCHAR(50),
    referral_id INT
);

INSERT INTO customers (first_name,last_name,referral_id)
VALUES
("Noor","Mahmoud",NULL),
("Mahmoud","Ahmed",1),
("Amina","Saleh",2),
("Ali","Al-Amin",2);

-- Select all customer with the name of the customer that they refer a job to
SELECT C1.id, CONCAT(C1.first_name," " ,C1.last_name) as customer_full_name, CONCAT(C2.first_name, " ", C2.last_name) as refers_job_to
FROM customers as C1 INNER JOIN customers as C2
ON C2.id = C1.referral_id;