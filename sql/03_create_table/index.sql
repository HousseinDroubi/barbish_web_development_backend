CREATE TABLE users(
	id INT, -- INT means integer
    first_name VARCHAR(50), -- VARCHAR used for texts, and 50 is the maximum amount of characters
    last_name VARCHAR(50),
    age INT,
    hourly_page DECIMAL(5,2), -- DECIMAL used for decimal numbers. 5 is the total number of digits, and 2 is the total number of digits after the '.'
    hired_date DATE -- DATE used for dates
);

