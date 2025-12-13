-- DEFAULT is a keyword used to auto fill the attribute of a certain column with specific value
CREATE TABLE products (
    id INT,
    product_name VARCHAR(25),
    price DECIMAL(4,2) DEFAULT 0 
);