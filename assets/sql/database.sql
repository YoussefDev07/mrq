-- CREATE DATABASE

CREATE DATABASE mrq;

-- Create `surveys` Tabel

CREATE TABLE surveys (
  id int(11) PRIMARY KEY AUTO_INCREMENT,
  type ENUM("ksa_in", "ksa_out", "uae", "omn"),
  email varchar(255),
  name varchar(255),
  country varchar(100),
  spec varchar(150),
  whatsapp varchar(20),
  phone varchar(20),
  age int(2),
  message varchar(4000),
  send_date date,
  send_time time,
  destination varchar(16)
);