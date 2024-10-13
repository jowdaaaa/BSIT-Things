-- Judah Paulo Vinas
CREATE DATABASE library;
USE library;

-- Create table author
CREATE TABLE author (
	id int PRIMARY KEY AUTO_INCREMENT,
    author_name varchar(100),
    birth_year int,
    death_year int
);

-- Insert values in table author
INSERT INTO author (author_name, birth_year) VALUE ("Marcella Cole", "1983");
INSERT INTO author (author_name, birth_year, death_year) VALUE ("Lisa Mullins", "1891", "1950");
INSERT INTO author (author_name, birth_year, death_year) VALUE ("Dennis Stokes", "1935", "1994");
INSERT INTO author (author_name, birth_year, death_year) VALUE ("Randolph Vasquez", "1957", "2004");
INSERT INTO author (author_name, birth_year, death_year) VALUE ("Daniel Branson", "1965", "1990");
SELECT * FROM author;

-- Create table book
CREATE TABLE book(
	id int PRIMARY KEY AUTO_INCREMENT,
    author_id int,
    title varchar(100),
    publish_year int,
    publishing_house varchar(100),
    rating decimal(10,2)
);

-- Insert values in table book
INSERT INTO book (title, publish_year, publishing_house, rating) VALUE ("Soulless", "2008", "Golden Albatros", "4.3");
INSERT INTO book (title, publish_year, publishing_house, rating) VALUE ("Weak Heart", "1980", "Diarmud Inc.", "3.8");
INSERT INTO book (author_id, title, publish_year, publishing_house, rating) VALUE ("4", "Faith Of Light", "1995", "White Cloud Press", "4.3");
INSERT INTO book (title, publish_year, publishing_house, rating) VALUE ("Memory Of Hope", "2000", "Rutis Enterprises", "2.7");
INSERT INTO book (author_id, title, publish_year, publishing_house, rating) VALUE ("6", "Warrior Of Wind", "2005", "Maverick", "4.6");
SELECT * FROM book;

-- Create table adaptation
CREATE TABLE adaptation(
	book_id int PRIMARY KEY,
    book_type varchar(100),
    title varchar(100),
    release_year int,
    rating decimal(10,2)
);

-- Insert values in table adaptation
INSERT INTO adaptation (book_id, book_type, title, release_year, rating) VALUE ("1", "movie", "Gone With The Wolves: The Beginning", "2008", "3");
INSERT INTO adaptation (book_id, book_type, title, release_year, rating) VALUE ("3", "movie", "Companions Of Tomorrow", "2001", "4.2");
INSERT INTO adaptation (book_id, book_type, title, release_year, rating) VALUE ("5", "movie", "Homeless Warrior", "2008", "4");
INSERT INTO adaptation (book_id, book_type, title, release_year, rating) VALUE ("2", "movie", "Blacksmith With Silver", "2014", "4.3");
INSERT INTO adaptation (book_id, book_type, title, release_year, rating) VALUE ("4", "movie", "Patrons And Bearers", "2004", "3.2");
SELECT * FROM adaptation;

-- Create table book_review
CREATE TABLE book_review(
	book_id int,
    review varchar(1000),
    author varchar(100)
);
drop table book_review;

-- Insert values in table book_review
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

-- 1. List All Books and Their Authors
--    Show the name of each author together with the title of the book they wrote and the 
--    year in which that book was published. 
SELECT author_name, title, publish_year
FROM book
LEFT JOIN author
ON book.author_id = author.id;

-- 2. List Authors and Books Published After 2005
-- Show the name of each author together with the title of the book they wrote 
-- and the year in which that book was published. Show only books published after 2005. 
SELECT author_name, title, publish_year
FROM book
LEFT JOIN author 
ON book.author_id = author.id
WHERE book.publish_year > 2005;

-- 3. Show Books Adapted Within 4 Years and Rated Lower Than the Adaptation
--    For each book, show its title, adaptation title, adaptation year, and publication year. 
SELECT book.title AS book_title, adaptation.title AS adaptation_title, book.publish_year, adaptation.release_year
FROM book
JOIN adaptation 
ON book.id = adaptation.book_id
WHERE (adaptation.release_year - book.publish_year) <= 4 AND adaptation.rating > book.rating;

-- 4. Show All Books and Their Adaptations (If Any)
--    Show the title of each book together with the title of its adaptation and 
--    the date of the release. Show all books, regardless of whether they had adaptations. 
SELECT book.title, adaptation.title, release_year
FROM book
LEFT JOIN adaptation 
ON book.id = adaptation.book_id;

-- 5. Show All Books and Their Movie Adaptations
--    Show all books with their movie adaptations. Select each book's title, 
--    the name of its publishing house, the title of its adaptation, and the type of 
--    the adaptation. Keep the books with no adaptations in the result. 
SELECT book.title, book.publishing_house, adaptation.title, adaptation.book_type
FROM book
LEFT JOIN adaptation 
ON book.id = adaptation.book_id
WHERE adaptation.book_type = 'movie' OR adaptation.book_type IS NULL;

-- 6. Show All Books with Their Reviews (If Any)
--    Join the book_review and book tables using a RIGHT JOIN. Show the title 
--    of the book, the corresponding review, and the name of the review's author. 
--    Consider all books, even those that weren't reviewed. 
SELECT book.title, book_review.review, book_review.author
FROM book
RIGHT JOIN book_review 
ON book.id = book_review.book_id;

-- 7. List All the Books and All the Authors
--    Display the title of each book along with the name of its author. 
--    Show all books, even those without an author. Show all authors, 
--    even those who haven't published a book yet. Use a FULL JOIN.
SELECT book.title, author.author_name
FROM book
LEFT JOIN author 
ON book.author_id = author.id
UNION
SELECT book.title, author.author_name
FROM book
RIGHT JOIN author 
ON book.author_id = author.id;




