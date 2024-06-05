CREATE DATABASE simple_blog

CREATE TABLE blog_entry (
  entry_id INT NOT NULL AUTO_INCREMENT,
  title VARCHAR(150),
  entry_text TEXT,
  date_created TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (entry_id)
)