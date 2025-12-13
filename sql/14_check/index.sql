-- The following line will prevent any new row in case hourly pay is less than 10.00
-- CONSTRAINT check_hourly_pay CHECK (hourly_pay >= 10.00)

CREATE TABLE users (
    id INT PRIMARY KEY,
    first_name VARCHAR(50),
    last_name VARCHAR(50),
    hourly_pay DECIMAL(4,2),
    hire_date_time DATETIME,
    CONSTRAINT check_hourly_pay CHECK (hourly_pay >= 10.00)
);