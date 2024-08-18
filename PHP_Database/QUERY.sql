CREATE TABLE customers(
  id VARCHAR(100) NOT NULL,
  name VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL,
  PRIMARY KEY (id)
)

CREATE TABLE admin(
  username VARCHAR(100) NOT NULL,
  password VARCHAR(100) NOT NULL,
  PRIMARY KEY (username)
)ENGINE=InnoDB;

SELECT * FROM admin;

INSERT INTO admin VALUES
('budi','rahasia');

CREATE TABLE comments(
  id INT NOT NULL AUTO_INCREMENT,
  email VARCHAR(100) NOT NULL,
  comment TEXT NOT NULL,
  PRIMARY KEY (id)
)ENGINE=InnoDB;