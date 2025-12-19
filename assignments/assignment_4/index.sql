-- Part 1
-- Task 1
CREATE DATABASE university_db;

-- Part 2
-- Task 2
CREATE TABLE departments(
	dept_id INT PRIMARY KEY AUTO_INCREMENT,
    dept_name VARCHAR(50) NOT NULL
);

-- Task 3
CREATE TABLE courses(
	course_id INT PRIMARY KEY AUTO_INCREMENT,
    course_name VARCHAR(50) NOT NULL,
    credits INT NOT NULL DEFAULT 3,
    dept_id INT NOT NULL,
    FOREIGN KEY(dept_id) REFERENCES departments(dept_id) ON DELETE CASCADE
);

-- Task 4
CREATE TABLE students(
    student_id INT PRIMARY KEY AUTO_INCREMENT,
    student_name VARCHAR(50) NOT NULL
);

-- Task 5
CREATE TABLE enrollments(
	enrollment_id INT PRIMARY KEY AUTO_INCREMENT,
    student_id INT NOT NULL,
    course_id INT NOT NULL,
	FOREIGN KEY(student_id) REFERENCES students(student_id) ON DELETE CASCADE,
    FOREIGN KEY(course_id) REFERENCES courses(course_id) ON DELETE CASCADE
);

-- Task 6
CREATE TABLE health_records(
	record_id INT PRIMARY KEY AUTO_INCREMENT,
    student_id INT NOT NULL,
    blood_group VARCHAR(50) NOT NULL,
	FOREIGN KEY(student_id) REFERENCES students(student_id) ON DELETE CASCADE
);


-- Part 3
-- Task 7
INSERT INTO departments (dept_name)
VALUES
("computer science"),
("mathematics"),
("physics");


INSERT INTO courses (course_name,credits,dept_id)
VALUES
("database systems",4,1),
("algorithms",3,1),
("calculus",4,2),
("quantum mechanics",5,3),
("web",3,1);

INSERT INTO students (student_name)
VALUES
("alice"),("bob"),("charlie"),("samy"),("eva");

INSERT INTO enrollments (student_id,course_id)
VALUES
(1,1),
(1,2),
(2,1),
(3,2),
(3,3),
(4,3),
(4,4);

INSERT INTO health_records (student_id,blood_group)
VALUES
(1,"A+"),
(2,"B+"),
(3,"O-"),
(4,"AB+"),
(5,"A-");


-- Part 4
-- Task 8-1

SELECT students.student_id, students.student_name,health_records.blood_group
FROM students INNER JOIN health_records
ON students.student_id = health_records.student_id;


-- Task 8-2
SELECT students.student_id, students.student_name, courses.course_name
FROM students INNER JOIN enrollments
ON students.student_id = enrollments.student_id
INNER JOIN courses
ON courses.course_id = enrollments.course_id;


-- Task 9
SELECT students.student_id,students.student_name,courses.course_name
FROM students LEFT JOIN enrollments
ON students.student_id = enrollments.student_id
LEFT JOIN courses
ON courses.course_id = enrollments.course_id;

-- Task 10
SELECT students.student_id,students.student_name,courses.course_name
FROM students RIGHT JOIN enrollments
ON students.student_id = enrollments.student_id
RIGHT JOIN courses
ON courses.course_id = enrollments.course_id;


-- Task 11
DELETE FROM departments
WHERE dept_id = 3;

-- Task 12
DELETE FROM students
WHERE student_id = 3;

-- Task 13
SELECT COUNT(student_id) as "total_number_of_students"
FROM students;

SELECT AVG(credits) as "average_of_total_credits"
FROM courses;

SELECT MAX(credits) as "maximum_course_credits"
FROM courses;

SELECT MIN(credits) as "minimum_course_credits"
FROM courses;

SELECT COUNT(*) as "number_of_a_plus_blood_group"
FROM students INNER JOIN health_records
ON students.student_id = health_records.student_id
WHERE health_records.blood_group = "A+"