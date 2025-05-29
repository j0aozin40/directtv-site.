
CREATE DATABASE IF NOT EXISTS direct_tv;
USE direct_tv;
CREATE TABLE IF NOT EXISTS filmes (
  id INT AUTO_INCREMENT PRIMARY KEY,
  titulo VARCHAR(255),
  capa TEXT,
  link TEXT,
  categoria VARCHAR(50)
);
