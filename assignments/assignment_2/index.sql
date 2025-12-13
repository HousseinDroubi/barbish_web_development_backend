-- Assignment 2 solution

-- Query 1
CREATE DATABASE school_db;

-- Query 2
CREATE TABLE students_table (
	student_id INT PRIMARY KEY,
    first_name VARCHAR(50),
    last_name VARCHAR(50),
    age INT,
    grade VARCHAR(1),
    city VARCHAR (20)
);

-- Query 3
INSERT INTO students_table
VALUES
(1, "Ahmad", "Ahmad", 17, "A", "Beirut"),
(2, "Sara", "Khatib", 18, "B", "Tripoli"),
(3, "Hassan", "Zein", 17, "A", "Sidon"),
(4, "Mariam", "Ata", 19, "C", "Beirut"),
(5, "Khaled", "Najjar", 16, "B", "Tyre"),
(6, "Reem", "Salem", 18, "A", "Tripoli"),
(7, "Youssef", "Hany", 17, "C", "Sidon"),
(8, "Hiba", "Zein", 20, "B", "Beirut"),
(9, "Fadi", "Hashem", 16, "A", "Tyre"),
(10, "Layla", "Hassan", 17, "B", "Tripoli");

-- Query 4 - 1
SELECT * 
FROM students_table;

-- Query 4 - 2
SELECT first_name,city
FROM students_table;

-- Query 4 - 3
-- a)
SELECT *
FROM students_table
WHERE grade = "B";

-- b)
SELECT *
FROM students_table
WHERE city != "Beirut";

-- c)
SELECT *
FROM students_table
WHERE age > 17;

-- d)
SELECT *
FROM students_table
WHERE age >= 18;


-- e)
SELECT *
FROM students_table
WHERE student_id <5;

-- f)
SELECT *
FROM students_table
WHERE age <=16;

-- Query 4 - 4
-- a)
SELECT *
FROM students_table
WHERE city IS NULL;

-- b)
SELECT *
FROM students_table
WHERE city IS NOT NULL;


-- Query 4 - 5
SELECT *
FROM students_table
WHERE age BETWEEN 17 AND 19;

-- Query 4 - 6
SELECT * 
FROM students_table
WHERE age>17 AND grade = "A";

-- Query 4 - 7
SELECT *
FROM students_table
WHERE city = "Beirut" OR city = "Tripoli";

-- Query 5
-- a)
UPDATE students_table
SET grade = "A"
WHERE student_id = 4;

-- b)
UPDATE students_table
SET city = "Beirut"
WHERE city = "Tripoli";

-- Query 6
-- a)
DELETE FROM students_table
WHERE student_id = 10;

--b)
DELETE FROM students_table
WHERE age < 17;