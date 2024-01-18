CREATE DATABASE IF NOT EXISTS communication_db;
USE communication_db;

CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    profile_image VARCHAR(255)
);

CREATE TABLE IF NOT EXISTS messages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    message_text TEXT,
    image_path VARCHAR(255),
    FOREIGN KEY (user_id) REFERENCES users(id)
);
