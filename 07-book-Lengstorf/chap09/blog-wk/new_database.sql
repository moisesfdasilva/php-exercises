ALTER TABLE blog_entry
ADD image VARCHAR(150);

create table admin(
  admin_id INT NOT NULL AUTO_INCREMENT,
  email TEXT,
  userid VARCHAR(72),
  password VARCHAR(72),
  primary key (admin_id)
)