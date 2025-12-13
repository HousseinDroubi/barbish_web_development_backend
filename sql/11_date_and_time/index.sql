-- The following types:
    -- DATE for: yyyy-mm-dd
    -- TIME for: hh:mm:ss
    -- DATETIME for: yyyy-mm-dd hh-mm-ss

CREATE TABLE test_date (
    my_date DATE,
    my_time TIME,
    my_datetime DATETIME
);

-- CURRENT_DATE is a variable inside sql which fetches current date
-- CURRENT_TIME is a variable inside sql which fetches current time 
-- NOW() is a function inside sql which fetches current date and time 
INSERT INTO appointments_table
VALUES
(2, CURRENT_DATE, CURRENT_TIME, NOW());