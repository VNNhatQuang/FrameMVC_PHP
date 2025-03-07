# 🛠 PHP MVC Framework

A simple PHP MVC frame project is built from the beginning with basic features such as Routing, Controller, View, and Model.

---



## 🚀 TABLE OF CONTENTS
- 📌[Introduction](#introduction)
- 🖥 [Requirements](#requirements)
- ⚙️ [Get started](#get_started)
- 📁 [Folder structure](#folder_structure)

---



## 📌 Introduction
This project is developed for the purpose of learning and practicing with the MVC model (Model-view-Controller) PHP. Includes features such as:
- Simple routing.
- Processing Request and Response.
- MVC model clearly with separate folders for Controller, Model and View.
- Integrated JWT to authenticate users.
- Support Session and Cookie management.

---



## 🖥 Requirements
- ** PHP: **> = 7.4
- ** Composer: **> = 2.x (if there is an external library)
- ** MySQL: **> = 5.7

---



## ⚙️ Get started
1. **Clone project:**
    ```bash
    git clone https://github.com/VNNhatQuang/FrameMVC_PHP.git
    cd FrameMVC_PHP
    ```

2. **Install dependencies:**
    ```bash
    composer install
    ```

3. **Create `.env` file based on `.env.example`:**
    ```bash
    cp .env.example .env
    ```
    Update variables in `.env` file:

        SECRET_KEY = QuangVNN
        DB_HOST = localhost
        DB_PORT = 3306
        DB_USER = root
        DB_PASS = 
        DB_NAME = api_template_db

4. **Import database:**
    - Import `database.sql` file from `ddl` folder into MySQL

5. **Run project:**
    ```bash
    php -S localhost:8000
    ```



## 📁 Folder structure
The project follows this structure:

    .
    ├── app
    │   ├── controllers         # Controllers
    │   ├── middleware          # Middlewares
    │   ├── models              # Handle database with each model
    │   ├── services            # Handle business logic
    │   ├── validations         # Handle validate data request
    ├── config
    │   ├── database.php        # Handle connect to database
    │   ├── dotenv.php          # Handle read variables config from .env file
    ├── Core
    │   ├── functions.php       # Other support functions
    │   ├── index.php           # Where Import all Core Libraries
    │   ├── routes.php          # Handle routing
    │   ├── views.php           # Handle render and data transmission from controller to view
    ├── ddl                     # Contain create database file
    ├── resources               # Contain view files (php, html), css, js
    ├── routes
    │   ├── web.php             # Where define route path
    ├── storage                 # Contain files need to storage
    ├── .env.example            # Sample .env file
    ├── .gitignore              # Where define files, folders Do not want to put on git
    ├── composer.json           # Composer dependencies
    ├── index.php               # Entry point of project
    ├── README.md               # This documentation

---
