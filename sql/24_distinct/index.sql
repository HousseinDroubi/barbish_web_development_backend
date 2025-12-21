CREATE TABLE users(
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL
);

INSERT INTO users (id, name)
VALUES
(NULL,"sara"),
(NULL,"samy"),
(NULL,"john"),
(NULL,"sara"),
(NULL,"eva");

-- DISTINCT
-- DISTINCT ignores duplicate records in search query
SELECT DISTINCT name
FROM users;