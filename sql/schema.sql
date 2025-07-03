
CREATE DATABASE IF NOT EXISTS crud_app CHARACTER SET utf8mb4;
USE crud_app;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    name VARCHAR(100) NOT NULL,
    role ENUM('admin','user') DEFAULT 'user'
);

INSERT INTO users (username, password, name, role)
VALUES ('admin', '$2b$12$7vltoiu0.wzXTxXE91jixOblIzVPRAVotcBiLPiR3xTSoosWgPFjm', 'Administrador', 'admin');
