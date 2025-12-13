-- NOT NULL used to prevent the default value of an data value to be NULL
CREATE TABLE products (
    id INT PRIMARY KEY,
    product_name VARCHAR(50),
    price DECIMAL(4,2) NOT NULL
);