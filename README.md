# Blog Post

A simple and elegant **Laravel blog application** to create, read, update, and delete blog posts. This project is perfect for learning Laravel's core features like routing, models, controllers, authentication, and Blade templates.

## Table of Contents

- [About](#about)  
- [Features](#features)  
- [Tech Stack](#tech-stack)  
- [Installation](#installation)  
- [Environment Setup](#environment-setup)  
- [Database](#database)  
- [Build & Run](#build--run)  
- [Usage](#usage)  
- [Testing](#testing)  
- [Deployment](#deployment)  
- [Contributing](#contributing)  
- [License](#license)  
- [Contact](#contact)  

## About

This is a basic **blog application** built with **Laravel**. Users can register, login, and manage blog posts. It demonstrates common web development tasks including CRUD operations, authentication, and file uploads.

## Features

- **User Authentication**: Register, login, logout  
- **Create, Read, Update, Delete Posts** (CRUD)  
- **Post Categories / Tags** (if implemented)  
- **Rich Text or Markdown Editor** for posts  
- **Image Uploads** for posts  
- **Comments** on posts (if implemented)  
- **Search Functionality** to find posts  
- **Pagination** for listing posts  
- **Responsive UI** compatible with mobile devices  
- **Admin Dashboard** to manage posts and users (if implemented)  
- **SEO Friendly URLs** with slugs  
- **Timestamps** for posts (`created_at` and `updated_at`)  
- **Validation & Security** using Laravel built-in features  

## Tech Stack

- **Backend**: Laravel (PHP)  
- **Frontend**: Blade Templates, Tailwind CSS / Bootstrap  
- **Database**: MySQL / SQLite / PostgreSQL  
- **Build Tools**: Vite / Mix  
- **Testing**: PHPUnit  

## Installation

1. Clone the repository:
```bash
git clone https://github.com/manchuriqbal/blog-post.git
cd blog-post
2. Install PHP dependencies:
```bash
composer install
Install JavaScript dependencies:

bash
Copy code
npm install
# or
yarn install
Environment Setup
Copy .env.example to .env:

bash
Copy code
cp .env.example .env
Set environment variables in .env:

makefile
Copy code
APP_NAME=BlogPost
APP_URL=http://localhost
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=blog_post
DB_USERNAME=root
DB_PASSWORD=
Generate application key:

bash
Copy code
php artisan key:generate
Database
Run migrations:

bash
Copy code
php artisan migrate
(Optional) Seed the database:

bash
Copy code
php artisan db:seed
Build & Run
Build frontend assets:

bash
Copy code
npm run dev
# or
yarn dev
Start the development server:

bash
Copy code
php artisan serve
Visit http://localhost:8000 to access the application.

Usage
Create a Post: Log in → New Post → Fill title, content, optionally upload image → Save / Publish

Edit / Delete Post: Navigate to your post → Edit or Delete

View Posts: Homepage lists all posts with pagination

Search Posts: Use search bar to find posts

Commenting: Add comments under posts (if implemented)

Categories / Tags: Filter posts by categories or tags

Testing
Run automated tests:

bash
Copy code
php artisan test
Or with PHPUnit:

bash
Copy code
./vendor/bin/phpunit
Deployment
Steps to deploy:

Set web server to point to public directory

Configure environment variables in .env

Install dependencies in production:

bash
Copy code
composer install --optimize-autoloader --no-dev
npm run build
Run migrations:

bash
Copy code
php artisan migrate --force
Contributing
Fork the repository

Create a branch (feature/my-feature)

Make changes

Add tests and documentation

Submit a pull request

License
This project is open-source. Specify your license here (MIT, Apache, etc.).

Contact
Author: Manchur Iqbal

GitHub: manchuriqbal

Email: your-email@example.com (replace with your contact)
