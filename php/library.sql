CREATE TABLE books (
    book_id INT(11) NOT NULL AUTO_INCREMENT,
    book_title VARCHAR(255) NOT NULL,
    author VARCHAR(255) NOT NULL,
    publisher VARCHAR(255) NOT NULL,
    category VARCHAR(255) NOT NULL,
    PRIMARY KEY (book_id)
);

CREATE TABLE users (
    user_id INT(11) NOT NULL AUTO_INCREMENT,
    first_name VARCHAR(255) NOT NULL,
    last_name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone_number VARCHAR(20) NOT NULL,
    address VARCHAR(255) NOT NULL,
    PRIMARY KEY (user_id)
);

CREATE TABLE borrowed_books (
    borrow_id INT(11) NOT NULL AUTO_INCREMENT,
    user_id INT(11) NOT NULL,
    book_id INT(11) NOT NULL,
    borrow_date DATE NOT NULL,
    return_date DATE NOT NULL,
    PRIMARY KEY (borrow_id),
    FOREIGN KEY (user_id) REFERENCES users(user_id),
    FOREIGN KEY (book_id) REFERENCES books(book_id)
);


INSERT INTO books (book_title, author, publisher, category)
VALUES ('The Great Gatsby', 'F. Scott Fitzgerald', 'Charles Scribner\'s Sons', 'Classics');

UPDATE users
SET phone_number = '123-456-7890'
WHERE user_id = 1;

DELETE FROM borrowed_books
WHERE book_id = 1;

SELECT * FROM books;
