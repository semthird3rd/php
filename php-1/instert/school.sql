CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    gender ENUM('male', 'female', 'other') NOT NULL,
    course VARCHAR(100) NOT NULL,
    hobbies VARCHAR(255),
    registration_date TIMESTAMP
);
