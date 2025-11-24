# Blog Post
A simple and elegant Laravel blog application to create, read, update, and delete blog posts. This project is perfect for learning Laravel's core features like routing, models, controllers, authentication, and Blade templates. This project allows users to register, login, create posts, edit, delete, and comment on posts (if implemented). It also supports image uploads, search functionality, pagination, and SEO friendly URLs using slugs. The project is responsive and mobile-friendly.

## Table of Contents
- About
- Features
- Tech Stack
- Installation
- Environment Setup
- Database
- Build & Run
- Usage
- Testing
- Deployment
- Contributing
- License
- Contact

## About
This is a basic blog application built with Laravel. Users can register, login, and manage blog posts. It demonstrates CRUD operations, authentication, and file uploads.

## Features
User authentication (register, login, logout), create, read, update, delete posts (CRUD), categories/tags (if implemented), rich text/markdown editor for posts, image uploads, comments (if implemented), search functionality, pagination, responsive UI, admin dashboard (if implemented), SEO friendly URLs with slugs, timestamps for posts, validation and security using Laravel built-in features.

## Tech Stack
Backend: Laravel (PHP), Frontend: Blade Templates, Tailwind CSS/Bootstrap, Database: MySQL/SQLite/PostgreSQL, Build Tools: Vite/Mix, Testing: PHPUnit.

## Installation
Clone the repository: `git clone https://github.com/manchuriqbal/blog-post.git` then `cd blog-post`. Install PHP dependencies using `composer install`. Install JavaScript dependencies using `npm install` or `yarn install`.

## Environment Setup
Copy `.env.example` to `.env` using `cp .env.example .env`. Set environment variables in `.env` as `APP_NAME=BlogPost`, `APP_URL=http://localhost`, `DB_CONNECTION=mysql`, `DB_HOST=127.0.0.1`, `DB_PORT=3306`, `DB_DATABASE=blog_post`, `DB_USERNAME=root`, `DB_PASSWORD=`. Generate application key using `php artisan key:generate`.

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
