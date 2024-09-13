<<<<<<< HEAD

=======
-- Judah Paulo Vinas
>>>>>>> 0ca5626e02d4c2e63f6a9bc548cb8d8f3d77e019
CREATE DATABASE library;
USE library;

CREATE TABLE author (
	id int PRIMARY KEY AUTO_INCREMENT,
    author_name varchar(100),
    birth_year int,
    death_year int
);

INSERT INTO author (author_name, birth_year) VALUE ("Marcella Cole", "1983");
INSERT INTO author (author_name, birth_year, death_year) VALUE ("Lisa Mullins", "1891", "1950");
INSERT INTO author (author_name, birth_year, death_year) VALUE ("Dennis Stokes", "1935", "1994");
INSERT INTO author (author_name, birth_year, death_year) VALUE ("Randolph Vasquez", "1957", "2004");
INSERT INTO author (author_name, birth_year, death_year) VALUE ("Daniel Branson", "1965", "1990");
SELECT * FROM author;

CREATE TABLE book(
	id int PRIMARY KEY AUTO_INCREMENT,
    author_id int,
    title varchar(100),
    publish_year int,
    publishing_house varchar(100),
    rating decimal(10,2)
);

INSERT INTO book (title, publish_year, publishing_house, rating) VALUE ("Soulless", "2008", "Golden Albatros", "4.3");
INSERT INTO book (title, publish_year, publishing_house, rating) VALUE ("Weak Heart", "1980", "Diarmud Inc.", "3.8");
INSERT INTO book (author_id, title, publish_year, publishing_house, rating) VALUE ("4", "Faith Of Light", "1995", "White Cloud Press", "4.3");
INSERT INTO book (title, publish_year, publishing_house, rating) VALUE ("Memory Of Hope", "2000", "Rutis Enterprises", "2.7");
INSERT INTO book (author_id, title, publish_year, publishing_house, rating) VALUE ("6", "Warrior Of Wind", "2005", "Maverick", "4.6");
SELECT * FROM book;

CREATE TABLE adaptation(
	book_id int PRIMARY KEY,
    book_type varchar(100),
    title varchar(100),
    release_year int,
    rating decimal(10,2)
);

INSERT INTO adaptation (book_id, book_type, title, release_year, rating) VALUE ("1", "movie", "Gone With The Wolves: The Beginning", "2008", "3");
INSERT INTO adaptation (book_id, book_type, title, release_year, rating) VALUE ("3", "movie", "Companions Of Tomorrow", "2001", "4.2");
INSERT INTO adaptation (book_id, book_type, title, release_year, rating) VALUE ("5", "movie", "Homeless Warrior", "2008", "4");
INSERT INTO adaptation (book_id, book_type, title, release_year, rating) VALUE ("2", "movie", "Blacksmith With Silver", "2014", "4.3");
INSERT INTO adaptation (book_id, book_type, title, release_year, rating) VALUE ("4", "movie", "Patrons And Bearers", "2004", "3.2");
SELECT * FROM adaptation;

CREATE TABLE book_review(
	book_id int,
    review varchar(1000),
    author varchar(100)
);
drop table book_review;

INSERT INTO book_review (book_id, review, author) VALUE ("1", "An incredible book", "Sylvia Jones");
INSERT INTO book_review (book_id, review, author) VALUE ("1", "Great, although it has some flaws", "Jessica Parker");
INSERT INTO book_review (book_id, review, author) VALUE ("2", "Dennis Strokes takes the reader for a ride full of emotions", "Thomas Green");
INSERT INTO book_review (book_id, review, author) VALUE ("3", "Incredible craftsmanship of the author", "Martin Freeman");
INSERT INTO book_review (book_id, review, author) VALUE ("4", "Not the best book by this author", "Jude Falth");
INSERT INTO book_review (book_id, review, author) VALUE ("5", "Claudia Johnson at her best!", "Joe Marqiz");
INSERT INTO book_review (book_id, review, author) VALUE ("6", "I cannot recall more captivating plot", "Alexander Durham");
SELECT * FROM book_review;

SHOW TABLES FROM library;

-- SELECT author_name, title, publish_year
-- FROM author, book
-- WHERE author.id = book.author_id;

-- 1.
SELECT author_name, title, publish_year
FROM book
LEFT JOIN author
ON book.author_id = author.id;

-- 2.
SELECT author_name, title, publish_year
FROM book
JOIN author 
ON book.author_id = author.id
WHERE book.publish_year > 2005;

-- 3.
SELECT book.title AS book_title, adaptation.title AS adaptation_title, book.publish_year, adaptation.release_year
FROM book
JOIN adaptation 
ON book.id = adaptation.book_id
WHERE (adaptation.release_year - book.publish_year) <= 4 AND adaptation.rating > book.rating;

-- 4. 
SELECT book.title, adaptation.title, release_year
FROM book
LEFT JOIN adaptation 
ON book.id = adaptation.book_id;

-- 5.
SELECT book.title, book.publishing_house, adaptation.title, adaptation.book_type
FROM book
LEFT JOIN adaptation 
ON book.id = adaptation.book_id
WHERE adaptation.book_type = 'movie' OR adaptation.book_type IS NULL;

-- 6.
SELECT book.title, book_review.review, book_review.author
FROM book
RIGHT JOIN book_review 
ON book.id = book_review.book_id;

-- 7.
SELECT book.title, author.author_name
FROM book
LEFT JOIN author 
ON book.author_id = author.id
UNION
SELECT book.title, author.author_name
FROM book
RIGHT JOIN author 
ON book.author_id = author.id;




