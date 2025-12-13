-- PRIMARY KEY is a keyword used to make sure that there are now duplicate rows in the table.
CREATE TABLE users(
	id INT PRIMARY KEY,
    name VARCHAR(50)
);


-- In case we have created the table without making id column PRIMARY KEY

-- Query 1
CREATE TABLE users(
	id INT,
    name VARCHAR(50)
);


-- Query 2
ALTER TABLE users
ADD CONSTRAINT PRIMARY KEY(id);
