-- UNIQUE is a keyword used to prevent duplicate entries for a certain column
CREATE TABLE products (
    id INT PRIMARY KEY,
    product_name VARCHAR(25) UNIQUE,
    price DECIMAL(4,2)
);