# 🔐 Login Page with PHP and MySQL

A secure and user-friendly login system developed using PHP and MySQL. This project includes full authentication functionality, including user registration, login, password recovery with token-based reset, and secure password storage.

---

## 📌 Overview

This web application provides a solid foundation for any system that requires user authentication. It implements best practices such as password hashing, token-based password reset links, and MySQL-based user management. It’s built using PHP for backend logic and MySQL for persistent data storage.

---

## ✨ Features

### 🧾 User Registration
Users can register by providing their email, username, and password. Data is validated and stored securely.

### 🔐 Login System
Users can log in using their registered email and password. Credentials are checked securely against hashed values in the database.

### 🔁 Password Recovery
If a user forgets their password, they can request a reset link via email.

### 📧 Email Verification for Reset
A password reset link with a secure token is sent to the user's email. The link allows the user to set a new password safely.

### 🔒 Secure Password Storage
Passwords are hashed using secure algorithms like **bcrypt** before being saved to the database.

### 🗄️ Database Management
All user credentials and related data are stored in MySQL tables with proper structure and indexing.

---

## 🛠️ Tech Stack

- **Backend**: PHP
- **Database**: MySQL
- **Frontend**: HTML5, CSS3,BootStrap,JavaScript,SCSS
- **Security**:
  - Password Hashing (bcrypt)
  - Token-based reset system
  - Prepared Statements (to prevent SQL Injection)
- **Mailing**: PHP `mail()` function or SMTP (optional)

---

## 🚀 Getting Started

### 1. Clone the Repository

```bash
git clone https://github.com/elshourbagi97/login-page.git
