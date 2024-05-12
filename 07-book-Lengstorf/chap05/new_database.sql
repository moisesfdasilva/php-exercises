CREATE DATABASE playground;

CREATE TABLE poll (
  poll_id INT NOT NULL AUTO_INCREMENT,
  poll_question TEXT,
  yes INT DEFAULT 0,
  no INT DEFAULT 0,
  PRIMARY KEY (poll_id)
)

INSERT INTO `poll` (`poll_id`, `poll_question`, `yes`, `no`)
VALUES(NULL, '"Is PHP hard fun?" ', '0', '0');

SELECT poll_id, poll_question, yes, no FROM poll

SELECT * FROM poll

UPDATE poll SET yes = yes + 1
WHERE poll_id = 1