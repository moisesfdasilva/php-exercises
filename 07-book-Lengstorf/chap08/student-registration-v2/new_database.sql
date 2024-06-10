CREATE DATABASE student_registrations

CREATE TABLE students_entry (
  student_id INT NOT NULL AUTO_INCREMENT,
  student_name VARCHAR(70),
  student_course VARCHAR(70),
  date_created TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (student_id)
)

CREATE TABLE comment (
  comment_id INT NOT NULL AUTO_INCREMENT,
  student_id INT NOT NULL,
  author VARCHAR(75),
  txt TEXT,
  date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (comment_id),
  FOREIGN KEY (student_id) REFERENCES students_entry (student_id)
)

INSERT INTO students_entry (student_id, student_name, student_course, date_created)
VALUES(NULL, 'Sebastian Bach', 'Music', NULL),
(NULL, 'Giuseppe Verdi', 'Music', NULL),
(NULL, 'Richard Wagner', 'Music', NULL),
(NULL, 'Usain Bolt', 'Physical Education', NULL),
(NULL, 'Eliud Kipchoge', 'Physical Education', NULL),
(NULL, 'Kelvin Kiptum', 'Physical Education', NULL);