-- Delete user that has id = 3;
DELETE FROM users
WHERE id = 3;

-- Deleting all users that have first name as NULL value
DELETE FROM users
WHERE first_name IS NULL;

-- Delete all users
DELETE FROM users
WHERE 1;