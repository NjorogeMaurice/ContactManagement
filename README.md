# Contact Management System

This is a Contact Management System built with Laravel. It allows users to manage their contacts and groups efficiently. Users can create, read, update, and delete contacts and groups, providing a simple yet powerful way to organize and keep track of their personal or professional network.

## Table of Contents

- [Introduction](#introduction)
- [Features](#features)
- [Technologies Used](#technologies-used)
- [Prerequisites](#prerequisites)
- [Installation](#installation)
- [Running the Project](#running-the-project)
- [License](#license)

## Introduction

The Contact Management System is designed to help users manage their contacts and group them as needed. This project includes user authentication and authorization features to ensure that users can securely manage their information.

## Features

- User authentication and authorization
- CRUD operations for contacts
- CRUD operations for groups
- Group assignment for contacts
- Search functionality
- Responsive design

## Technologies Used

- Laravel
- PHP
- MySQL
- Blade Templating
- Tailwind CSS
- JavaScript

## Prerequisites

Before you begin, ensure you have met the following requirements:

- PHP >= 7.3
- Composer
- MySQL
- Node.js and npm (for compiling assets)
- Git

## Installation

Follow these steps to set up and run the project locally

### 1. Clone the Repository

```bash
git clone https://github.com/NjorogeMaurice/ContactManagement.git

cd ContactManagement
```

### 2. Install Dependencies
Use Composer to install PHP dependencies

```bash
composer install
```

Use npm to install JavaScript dependencies
```bash
npm install
npm run dev
```

### 3. Set Up Environment Variables
Create a .env and configure your environment variables, especially the database settings

Add the following lines. Replace with your credentials 

```bash
DB_DATABASE=my_laravel_db
DB_USERNAME=laravel_user
DB_PASSWORD=your_password
```

### 4. Generate Application Key

```bash
php artisan key:generate
```

### 5. Run Database Migrations and Seeders

```bash
php artisan migrate --seed
```

## Running the Project

You can serve/run the application using the built-in Laravel server:

```bash
php artisan serve
```

Then open your browser at http://localhost:8000.






<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>


