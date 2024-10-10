# PHP Playground

This **PHP Playground** repository contains code and tasks based on the **PHP Series** from [Laracasts](https://laracasts.com/). It serves as a sandbox for practicing PHP fundamentals and intermediate-level concepts covered in the series.

## Overview

Throughout this repository, you’ll find examples and tasks related to key PHP concepts such as:

- **Variables & Data Types**
- **Functions**
- **Control Structures**
- **Arrays & Iteration**
- **Classes & Objects**
- **Inheritance & Interfaces**
- **Error Handling**
- **File Operations**
- **Composer & Autoloading**
- **Namespaces**
- **And More**

## Prerequisites

To run the code in this repository, you will need the following:

- **PHP** (>= 7.4)
- A **web server** like **Apache** or **Nginx** (alternatively, you can use PHP’s built-in server)
- **Composer** (for managing dependencies)

## Installation

1. **Clone the repository:**

```bash
git clone https://github.com/mostafaamahmoudd/PHP-Playground
cd php-playground
```

2. **Install dependencies (if any):**

```bash
composer install
```

3. **Run the PHP built-in server:**

```bash
php -S localhost:8000
```

## Tasks

Below is a summary of the tasks and lessons covered in this repository, based on the **Laracasts PHP Series**:

1. Setting Up Development Environment
  Installing PHP, Composer, and setting up a local environment for PHP projects.

2. PHP Syntax & Variables
  Basic PHP syntax rules.
  Declaring and working with variables, data types (strings, integers, arrays, etc.).

3. Conditionals & Control Structures
  Using if, else, elseif, and switch statements to create decision-making logic.
  Loops like while, for, and foreach to repeat code execution.

4. Functions
  Defining reusable functions.
  Understanding parameters, arguments, and return values.

5. Working with Arrays
  Creating indexed and associative arrays.
  Array manipulation with PHP built-in functions like array_map(), array_filter().

6. Object-Oriented Programming (OOP)
  Introduction to classes, properties, methods.
  Understanding OOP principles like inheritance, encapsulation, and polymorphism.

7. Handling Forms and User Input
  Capturing and processing data from HTML forms using PHP's $_GET and $_POST superglobals.

8. Session Management & Cookies
  Storing user session data across pages.
  Using cookies for persistent user state.

9. File Handling
  Reading from and writing to files in PHP.
  Handling file uploads.

10. Error Handling
  Using try-catch blocks and custom exceptions for handling runtime errors.

11. Composer & Autoloading
  Managing dependencies with Composer.
  Autoloading files and classes using PSR-4 standards.

12. Debugging & Error Logging
  Tools and techniques for effective debugging.
  Configuring error reporting and logging.

## Directory Structure

The directory structure is that every task in a seperate directory.

## How to Run a Task

Each task in the **DIRName** directory is standalone. You can run any task by navigating to its respective folder and running the code directly, for example:

```bash
php PHP-Playground/Build a Better Router/config.php

```

Alternatively, use the **index.php** file to test multiple scripts or view outputs via a web browser:

```bash
http://localhost:8000
```

## Notes

- This repository is purely for educational purposes.

## Resources

- [Laracasts PHP Series](https://laracasts.com/series/php-for-beginners)
- [PHP Documentation](https://www.php.net/docs.php)
- [Composer Documentation](https://getcomposer.org/doc/)
