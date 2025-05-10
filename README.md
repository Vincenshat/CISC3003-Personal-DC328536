# DC328536-ZHONG YU ZHANG-PERSONAL PROJECT OF CISC3003

## General Prerequisites

To run these projects, you will need a local web server environment that supports PHP and MySQL. We recommend using XAMPP, which bundles Apache, MariaDB (a MySQL compatible database), PHP, and Perl. You can download XAMPP from [https://www.apachefriends.org](https://www.apachefriends.org).

**General Setup Steps for XAMPP:**

1.  Download and install XAMPP.
2.  Start the Apache and MySQL modules from the XAMPP control panel.
3.  Place the project folders into the `htdocs` directory within your XAMPP installation folder (e.g., `C:\xampp\htdocs\` on Windows or `/Applications/XAMPP/htdocs/` on macOS).
4.  Access phpMyAdmin (usually via `http://localhost/phpmyadmin`) to manage databases (create databases, import SQL files).

## Part A: E-commerce Shopping Cart System

**Project Path:** `/home/ubuntu/partA_project`

### Description

This project is a functional e-commerce web application designed as a mobile phone store. It allows users to browse products, add items to a shopping cart, manage cart contents (update quantity, remove items), and proceed through a checkout process to place an order. The system utilizes PHP for server-side logic and MySQL for data storage.

### Key Features

*   Product listing and display.
*   Dynamic shopping cart functionality (add, update, remove, clear).
*   Order placement with customer details and payment mode selection.
*   Automatic database and table creation if they do not exist, using the provided `cart_system.sql` file.

### Setup Instructions

1.  **Environment:** Ensure XAMPP (or a similar AMP stack) is installed and Apache & MySQL services are running.
2.  **Project Files:** Copy the entire `partA_project` directory into your web server's document root (e.g., `htdocs` in XAMPP).
3.  **Database Configuration:** The `config.php` file within the project is configured to automatically create the `cart_system` database and import the `cart_system.sql` schema if the database doesn't exist. The default MySQL connection parameters are:
    *   Host: `127.0.0.1`
    *   Port: `3306`
    *   Username: `root`
    *   Password: (empty)
    *   Database Name: `cart_system`
    If your MySQL setup differs (e.g., you have a root password), you may need to update these details in `config.php`.
4.  **Accessing the Application:** Open your web browser and navigate to `http://localhost/partA_project/` (or the respective path if you named the folder differently).

### How to Use

1.  **Browse Products:** The homepage (`index.php`) displays available mobile phones.
2.  **Add to Cart:** For each product, you can specify a quantity and click the "Add to Cart" button.
3.  **View Cart:** Click the cart icon in the navigation bar or navigate to `cart.php` to view items in your cart. Here you can update quantities or remove items.
4.  **Checkout:** From the cart page, click "Checkout Now!". This will take you to `checkout.php`.
5.  **Place Order:** Fill in your name, email, phone number, delivery address, and select a payment method. Click "Place Order" to submit.
6.  **Order Confirmation:** Upon successful order placement, a confirmation message will be displayed.

## Part B: Login and User Management Systems

This part consists of five distinct PHP projects, each demonstrating different aspects and approaches to building user authentication, registration, and profile management systems. All projects generally require a PHP and MySQL environment (XAMPP recommended).

**General Setup for Part B Projects:**

1.  Ensure XAMPP (or equivalent) is running with Apache and MySQL.
2.  Copy the respective project folders from `/home/ubuntu/partB_projects/part-b/` into your web server's document root (e.g., `htdocs`).
3.  For each project, you will likely need to set up a database. Check for `.sql` files within each project folder and import them using phpMyAdmin. Also, review any `dbh.classes.php`, `dbh.inc.php`, or similar database connection files for configuration details (database name, user, password) and adjust if necessary for your environment.

--- 

### Project 1: Basic OOP Login System

**Project Path:** `/home/ubuntu/partB_projects/part-b/1/`

#### Description
This project implements a fundamental user login and registration system using an Object-Oriented Programming (OOP) approach in PHP. It includes classes for database handling (`Dbh`), signup (`Signup`, `SignupContr`), and login (`Login`, `LoginContr`).

#### Setup Instructions
1.  Place the `1` folder (from `part-b`) into your `htdocs` directory.
2.  **Database:** This project expects a database. While no `.sql` file is explicitly provided in this specific folder, the `dbh.classes.php` file attempts to connect to a database named `loginsystem_oop`. You will need to create this database manually in phpMyAdmin. The table structure would typically include a `users` table with columns like `users_id` (INT, PK, AI), `users_uid` (VARCHAR), `users_pwd` (VARCHAR), `users_email` (VARCHAR).
3.  Verify database connection details in `/home/ubuntu/partB_projects/part-b/1/classes/dbh.classes.php` (defaults to `root` user with no password).
4.  Access via `http://localhost/1/`.

#### How to Use
*   The homepage (`index.php`) provides options to "SIGN UP" or "LOG IN".
*   Users can register with a username, password, and email.
*   Registered users can log in with their username and password.
*   A basic logged-in view is presented, with a logout option.

--- 

### Project 2: Procedural Login System Tutorial

**Project Path:** `/home/ubuntu/partB_projects/part-b/2/`

#### Description
This project is a login and registration system developed using procedural PHP. It's intended as a tutorial project. It includes features for user signup, login, logout, and basic error handling. The `BEFORE YOU GET STARTED/READ FIRST.txt` file provides context about the tutorial.

#### Setup Instructions
1.  Place the `2` folder into `htdocs`.
2.  **Database:** Inside the `BEFORE YOU GET STARTED` subfolder, there is a `database.sql` file. Create a new database in phpMyAdmin (e.g., `loginsystem_procedural`) and import this `database.sql` file to create the necessary `users` table.
3.  Verify database connection details in `/home/ubuntu/partB_projects/part-b/2/includes/dbh.inc.php`. It attempts to connect to a database named `loginsystemtut`. You might need to change this to the name you used in step 2 or create a database with this specific name.
4.  Access via `http://localhost/2/`.

#### How to Use
*   The homepage (`index.php`) shows different content based on login status.
*   Navigate to `signup.php` to register a new user (name, email, username, password).
*   Navigate to `login.php` to log in.
*   A logout option is available when logged in.

--- 

### Project 3: OOP Profile Page System

**Project Path:** `/home/ubuntu/partB_projects/part-b/3/OOP Profile Page - Finished/`

(Note: This directory contains 'Fresh', 'Only HTML included', and 'Finished' versions. The 'Finished' version is the most complete.)

#### Description
This project demonstrates a user profile system built with OOP PHP. Users can sign up, log in, view their profile, and update their profile information. It features a more extensive use of classes for database connection, signup, login, and profile information management.

#### Setup Instructions
1.  Place the `OOP Profile Page - Finished` folder (from `part-b/3/`) into `htdocs`.
2.  **Database:** The `classes/dbh.classes.php` file indicates it connects to a database named `profile_db_oop`. You will need to create this database. While no single `.sql` file is provided for the full schema, the code implies tables for users (`users` with `users_id`, `users_uid`, `users_pwd`, `users_email`) and profiles (`profiles` with `profiles_id`, `profiles_about`, `profiles_introtitle`, `profiles_introtext`, `users_id` as FK).
    You may need to infer table structures from the class files (e.g., `Signup.classes.php`, `ProfileInfo.classes.php`) or set them up incrementally.
3.  Verify database connection in `/classes/dbh.classes.php`.
4.  Access via `http://localhost/OOP Profile Page - Finished/`.

#### How to Use
*   `index.php`: Allows signup and login.
*   `profile.php`: Displays the user's profile information (visible after login).
*   `profilesettings.php`: Allows logged-in users to update their profile information (about section, intro title, intro text) and change their password.

--- 

### Project 4: MVC-Patterned Login System

**Project Path:** `/home/ubuntu/partB_projects/part-b/4/`

#### Description
This project implements a user registration and login system that appears to follow some Model-View-Controller (MVC) pattern conventions, with files named like `signup_model.inc.php`, `signup_view.inc.php`, and `signup_contr.inc.php`. It includes session management and input sanitization/validation.

#### Setup Instructions
1.  Place the `4` folder into `htdocs`.
2.  **Database:** A `db.sql` file is provided. Create a new database in phpMyAdmin (e.g., `loginsystem_mvc`) and import `db.sql` into it. This will create the `users` table.
3.  Verify database connection details in `/home/ubuntu/partB_projects/part-b/4/includes/dbh.inc.php`. It expects a database named `my_first_database`. You should update this to the name you used in step 2 or ensure your database is named `my_first_database`.
4.  Access via `http://localhost/4/`.

#### How to Use
*   The `index.php` page serves as the main interface.
*   Users can sign up with a username, password, and email.
*   Registered users can log in.
*   The system demonstrates handling of user sessions and displays different content for logged-in and logged-out users.

--- 

### Project 5: Login System with Password Reset

**Project Path:** `/home/ubuntu/partB_projects/part-b/5/`

#### Description
This project is a user login and registration system that includes a password reset functionality. Users who have forgotten their password can request a reset link to be sent to their email (though actual email sending might require further configuration depending on your PHP mail setup).

#### Setup Instructions
1.  Place the `5` folder into `htdocs`.
2.  **Database:** Two SQL files are provided: `user-table-database.sql` (for the `users` table) and `pwdreset-table-database.sql` (for the `pwdReset` table). Create a new database in phpMyAdmin (e.g., `loginsystem_pwdreset`) and import both SQL files.
3.  Verify database connection details in `/home/ubuntu/partB_projects/part-b/5/includes/dbh.inc.php`. It connects to a database named `loginsystem`. Update this to the name you used in step 2 or ensure your database is named `loginsystem`.
4.  **Email Configuration:** For the password reset email functionality to work, your PHP environment needs to be configured to send emails. This might involve configuring `php.ini` with SMTP server details or using a library like PHPMailer (not included by default in this project).
5.  Access via `http://localhost/5/`.

#### How to Use
*   `index.php`: Main page with login form.
*   `signup.php`: User registration.
*   **Password Reset:**
    1.  Click on "Forgot your password?" on the login page.
    2.  Enter the email address associated with the account on `reset-password.php`.
    3.  If the email exists, the system (conceptually) sends a reset link. In a local XAMPP setup without mail configuration, the email won't be sent, but the reset token mechanism is in place.
    4.  `create-new-password.php` is the page where the user would enter a new password after clicking the (hypothetical) link from the email, using the provided selectors and validators.

---

This README provides a guide to understanding, setting up, and using the provided PHP projects. Ensure your local development environment is correctly configured, especially the database connections for each project.
