-- Step 1: Create Database
CREATE DATABASE college_db;

-- Step 2: Select / Use the Database
USE college_db;

-- Step 3: Create Table
CREATE TABLE students (
    id      INT AUTO_INCREMENT PRIMARY KEY,
    name    VARCHAR(100) NOT NULL,
    address VARCHAR(200),
    phone   VARCHAR(15),
    age     INT,
    gender  VARCHAR(10)
);

-- Step 4: Add a new column to existing table
ALTER TABLE students
ADD COLUMN email VARCHAR(100);

-- Step 5: View table structure
DESCRIBE students;

-- Step 6: Insert sample records
INSERT INTO students (name, address, phone, age, gender, email)
VALUES
('Raynee', 'Peru',    '910820012', 20, 'Male',   'raynee@gmail.com'),
('Paul',  'Manchester',  '912802221', 21, 'Female', 'paul1@gmail.com'),
('Ana',   'Daegu',   '992301355', 22, 'Female',   'anahong@gmail.com');

-- Step 7: View all records
SELECT * FROM students;

-- Step 8: Drop column (remove a column)
ALTER TABLE students
DROP COLUMN email;

-- Step 9: Drop table
-- DROP TABLE students;

-- Step 10: Drop database
-- DROP DATABASE college_db;