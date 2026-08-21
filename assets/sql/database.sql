-- CREATE DATABASE

CREATE DATABASE mrq;

-- Create `surveys` Tabel

CREATE TABLE surveys (
  id int(11) PRIMARY KEY AUTO_INCREMENT,
  type ENUM("ksa_in", "ksa_out", "uae", "omn"),
  email varchar(255),
  name varchar(255),
  nationality varchar(100),
  birth_date date,
  phone varchar(20),
  whatsapp varchar(20),
  spec varchar(150),
  graduation varchar(10),
  master varchar(10),
  phd varchar(10),
  f varchar(10),
  message varchar(4000),
  send_date date,
  send_time time,
  destination varchar(16)
);