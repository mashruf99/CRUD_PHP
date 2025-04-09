# CRUD_PHP

# 👥 Member Management CRUD System

A simple web-based **CRUD** (Create, Read, Update, Delete) application to manage member information using **PHP**, **MySQL**, **HTML**, and **Tailwind CSS**.

## 📌 Features

- ✅ Add new members
- ✅ View all members in a table
- ✅ Edit and update member info
- ✅ Delete members
- ✅ Auto-capture join date
- ✅ Responsive design using Tailwind CSS



## 🛠️ Tech Stack

- **Frontend:** HTML, Tailwind CSS
- **Backend:** PHP
- **Database:** MySQL

## 🗃️ Database Setup

Run the following SQL commands to create your database and table:

```sql
CREATE DATABASE crud_operation;

USE crud_operation;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL UNIQUE,
    phone VARCHAR(50) NOT NULL,
    join_date DATE NOT NULL DEFAULT CURRENT_DATE
);


## 📁 File Structure

├── index.php          # View members
├── add.php            # Add new member form
├── insert.php         # Process new member form submission
├── edit.php           # Edit member info
├── update.php         # Save updated member data
├── delete.php         # Delete a member
├── db_conn.php        # Database connection
├── README.md
└── /assets            # Images or logos used


## 📬 Contact
Kazi Shafiul Islam Mashruf
Daffodil International University
Email: bemashrufislam@gmail.com