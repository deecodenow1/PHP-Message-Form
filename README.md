# 📬 PHP Message Form with MySQL (phpMyAdmin)

A simple PHP message form that collects user input (name, email, message) and stores it securely in a MySQL database using `MySQLi`. Great for beginners learning PHP and database integration.

## 🚀 Features

- Clean HTML + PHP contact form
- Data stored in MySQL database
- Secure input handling with `prepared statements`
- Minimal styling for quick integration

## 🛠️ Tech Stack

- PHP (MySQLi)
- HTML/CSS
- MySQL (via phpMyAdmin)

## ⚙️ Setup Instructions

1. **Clone this repo:**
    ```bash
    git clone https://github.com/deecodenow1/PHP-Message-Form
    cd PHP-Message-Form
    ```
    
2. **Create MySQL Database:**
    In phpMyAdmin or MySQL CLI:
      CREATE DATABASE message_app;
      USE message_app;    
      CREATE TABLE messages (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(100) NOT NULL,
        email VARCHAR(100) NOT NULL,
        message TEXT NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
      );

3. **Database Configuration (db.php):**
   $host = "localhost";
   $user = "root";
   $pass = "root";
   $dbname = "message_app";

4. **Run the Project:**
   - Place the project in your local server directory (htdocs/ for XAMPP) 
   - Start Apache & MySQL
   - Visit: http://localhost/PHP-Message-Form/

## 📁 File Structure

├── index.php        # Message form UI
├── submit.php       # Handles form submission & inserts data
├── db.php           # Database connection
├── README.md

## 📷 Screenshot
![Form Screenshot](https://raw.githubusercontent.com/deecodenow1/PHP-Message-Form/main/Screenshot.png)

## 📄 License
MIT License — free to use, modify, and distribute.

💡 Feel free to star ⭐ this repo if you found it helpful!
