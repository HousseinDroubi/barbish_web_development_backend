-- Update table users, set hourly pay to 15 where id = 3
UPDATE users
SET hourly_pay = 15
WHERE id = 3;

-- Update table users, set hire date to 2025/12/08 where hire date is null
UPDATE users
SET hire_date = "2025-12-08"
WHERE hire_date IS NULL;

-- Update table users, set hire date to 2025/12/08 and hourly pay to 12 where hire date is null
UPDATE users
SET hire_date = "2025/12/08", hourly_pay = 12
WHERE hire_date IS NULL;

-- Update table users, set hourly pay to NULL for id = 3
UPDATE users
SET hourly_pay = NULL
WHERE id = 3;

-- Update table users, set hourly pay to NULL for all users
UPDATE users
SET hourly_pay = NULL
WHERE 1;