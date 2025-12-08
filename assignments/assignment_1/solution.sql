-- Step 1
CREATE DATABASE TrainingDB;

-- Step 2
DROP DATABASE TrainingDB;

-- Step 3
CREATE DATABASE EmployeeTraining;

-- Step 4
CREATE TABLE Courses(
	CourseID INT,
    CourseName VARCHAR(100),
    Price DECIMAL(6,2),
    StartDate DATE
);

-- Step 5
RENAME TABLE Courses TO TrainingCourses;

-- Step 6
ALTER TABLE TrainingCourses
DROP COLUMN Price;

-- Step 7 - a
ALTER TABLE TrainingCourses
ADD COLUMN DurationDays INT;

-- Step 7 - b
ALTER TABLE TrainingCourses
CHANGE StartDate CourseStart DATE;

-- Step 7 - c
ALTER TABLE TrainingCourses
DROP COLUMN DurationDays;

-- Step 8
INSERT INTO TrainingCourses
VALUES
(1,"Flutter","2025-03-15");