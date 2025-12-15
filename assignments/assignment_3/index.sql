-- Question 1

--1 Create university_db

CREATE DATABASE university_db;

--2 Create table students

CREATE TABLE students(
	student_id INT PRIMARY KEY AUTO_INCREMENT,
	full_name VARCHAR(50) NOT NULL,
	email VARCHAR(50) UNIQUE NOT NULL,
    age INT,
    registration_date DATE DEFAULT CURRENT_DATE(),
    registration_time TIME DEFAULT CURRENT_TIME(),
    created_at DATETIME DEFAULT NOW(),
    CONSTRAINT check_age CHECK (age>=18)
);



-- Question 2

    -- Query 1
INSERT INTO students(full_name,email,age)
VALUES
("Houssein Droubi","someEmail@example.com",28);

    -- Query 2
INSERT INTO students(full_name,email,age)
VALUES
("John Doe","someEmail1@example.com",20);

    -- Query 3
INSERT INTO students(full_name,email,age)
VALUES
("Samy","someEmail2@example.com",33);