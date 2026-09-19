-- CREATE DATABASE

CREATE DATABASE mrq;

-- Create `surveys` Tabel

CREATE TABLE surveys (
  id int(11) PRIMARY KEY AUTO_INCREMENT,
  type ENUM("ksa_in", "ksa_out"),
  email varchar(255),
  name varchar(255),
  nationality varchar(100),
  birth_date date,
  phone varchar(20),
  whatsapp varchar(20),
  spec varchar(250),
  job varchar(150),
  job_type ENUM("طبي", "إداري"),
  graduation date,
  master date,
  phd date,
  f date,
  dataflow date,
  prometric date,
  message varchar(4000),
  send_date date,
  send_time time,
  destination varchar(16)
);

-- Create `surveys_data` Table

CREATE TABLE surveys_data (
  id int(11) PRIMARY KEY AUTO_INCREMENT,
  email varchar(256),
  phone_code varchar(5),
  phone_number varchar(5),
  whatsapp_code varchar(5),
  whatsapp_number varchar(5),
  town varchar(100),
  expert_in int(3),
  expert_out int(3),
  kdexp int(3)
);