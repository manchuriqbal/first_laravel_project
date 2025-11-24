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
- **Post Categories / Tags** 
- **Rich Text or Markdown Editor** for posts  
- **Image Uploads** for posts  
- **Comments** on posts 
- **Search Functionality** to find posts  
- **Pagination** for listing posts  
- **Responsive UI** compatible with mobile devices  
- **Admin Dashboard** to manage posts and users 
- **SEO Friendly URLs** with slugs  
- **Timestamps** for posts (`created_at` and `updated_at`)  
- **Validation & Security** using Laravel built-in features  

## Tech Stack

- **Backend**: Laravel (PHP)  
- **Frontend**: Blade Templates, Tailwind CSS / Bootstrap  
- **Database**: MySQL / SQLite / PostgreSQL  
- **Build Tools**: Vite / Mix  

1. Clone the repository:

'git clone https://github.com/manchuriqbal/blog-post.git'
'cd blog-post'

2. Install PHP dependencies:

'composer install'

3. Install JavaScript dependencies:

'npm install'
# or
'yarn install'

## Environment Setup

1. Copy .env.example to .env:

'cp .env.example .env'

2. Set environment variables in .env:

APP_NAME=BlogPost
APP_URL=http://localhost
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=blog_post
DB_USERNAME=root
DB_PASSWORD=

3. Generate application key:

'php artisan key:generate'



## Database
Run migrations using `php artisan migrate`. Optionally, seed the database using `php artisan db:seed`.

## Build & Run
Build frontend assets using `npm run dev` or `yarn dev`. Start the development server using `php artisan serve`. Visit `http://localhost:8000` to access the application.

## Usage
Log in and create a post by filling title, content, optionally uploading image, and saving/publishing. Edit or delete posts as needed. Homepage lists all posts with pagination. Use search bar to find posts. Add comments under posts (if implemented). Filter posts by categories or tags.

## Testing
Run automated tests using `php artisan test` or `./vendor/bin/phpunit`.

## Deployment
Set web server to point to `public` directory. Configure environment variables in `.env`. Install dependencies in production using `composer install --optimize-autoloader --no-dev` and build frontend assets using `npm run build`. Run migrations using `php artisan migrate --force`.

## Contributing
Fork the repository, create a branch (`feature/my-feature`), make changes, add tests/documentation, submit a pull request.

## License
This project is open-source. Specify license (MIT, Apache, etc.).

## Contact
Author: Manchur Iqbal, GitHub: [manchuriqbal](https://github.com/manchuriqbal), Email: _your-email@example.com_ (replace with your contact)
