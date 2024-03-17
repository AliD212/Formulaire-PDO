CREATE DATABASE bd2;
USE bd2;



CREATE TABLE appareils (
    id INT AUTO_INCREMENT PRIMARY KEY,
    type_appareil VARCHAR(100) NOT NULL,
    numero_serie VARCHAR(50) NOT NULL,
    numero_appareil VARCHAR(50) NOT NULL
);
