-- The following will change an existed column called 'hourly_page' to 'hourly_pay'
ALTER TABLE workers
CHANGE COLUMN hourly_page hourly_pay DECIMAL(5,1);