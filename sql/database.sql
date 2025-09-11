CREATE TABLE users (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    company VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL,
    role ENUM('seller', 'buyer', 'admin') DEFAULT 'buyer',
    status ENUM('pending', 'approved', 'rejected') DEFAULT 'pending',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    );
    
 CREATE TABLE cars (
     ID INT AUTO_INCREMENT PRIMARY KEY,
     seller_id INT,
     title VARCHAR(100),
     yom INT,
     transmission ENUM('manual', 'automatic', 'automated manual', 'continuously variable transmission') DEFAULT 'automatic',
     mileage VARCHAR(50),
     location VARCHAR(50),
     engine_size VARCHAR(50),
     drive ENUM('2WD', '4WD', 'AWD'),
     fuel ENUM('petrol', 'diesel', 'hybrid', 'electric'),
     description TEXT,
     price DECIMAL(10,2),
     image VARCHAR(255),
     category ENUM('car','bike') DEFAULT 'car',
     created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
     FOREIGN KEY (seller_id) REFERENCES users(id)
    );
    