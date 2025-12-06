-- The following will add a new column called 'phone_number' with data type of VARCHAR(20)
-- In case there were existed data (rows) into the table, the actual data of new column will be filled as 'NULL'
ALTER TABLE workers
ADD phone_number VARCHAR(20);