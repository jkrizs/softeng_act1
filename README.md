# Task Management Application

A simple web-based task management system built with Laravel. This application allows users to register, log in, and manage their personal tasks with features like task creation, editing, deletion, searching, and filtering by status.

## Frameworks & Starter Kits Used

- **Laravel** (PHP framework)
- **Laravel Breeze** (authentication starter kit)
- **Tailwind CSS** (styling)
- **Vite** (frontend build tool)
- **MySQL** (database)

## Features

- User registration, login, and profile management
- Create, edit, and delete tasks
- Assign status to tasks: Not Started, Ongoing, Complete
- Search tasks by title or description
- Filter tasks by status
- Responsive and clean UI with Tailwind CSS
- Secure authentication and authorization

## Quick Setup

1. **Clone the repository:**
   ```sh
   git clone <repository-url>
   cd softeng_act1
   ```

2. **Install dependencies:**
   ```sh
   composer install
   npm install
   ```

3. **Set up environment:**
   ```sh
   cp .env.example .env
   php artisan key:generate
   ```

4. **Install Laravel Breeze:**
   ```sh
   composer require laravel/breeze --dev
   php artisan breeze:install
   npm run build
   ```

5. **Configure MySQL database:**
   - Edit your `.env` file:
     ```
     DB_CONNECTION=mysql
     DB_HOST=127.0.0.1
     DB_PORT=3306
     DB_DATABASE=your_database_name
     DB_USERNAME=your_username
     DB_PASSWORD=your_password
     ```

6. **Run migrations:**
   ```sh
   php artisan migrate
   ```

7. **Start the server:**
   ```sh
   php artisan serve
   ```
   Visit [http://localhost:8000](http://localhost:8000) in your browser.

## Usage

- Register or log in to manage your tasks.
- Add, edit, delete, and filter tasks by status.

## Project Structure

- `app/Models/Task.php` - Task model
- `app/Http/Controllers/TaskController.php` - Task CRUD logic
- `resources/views/tasks/` - Blade templates for task views
- `routes/web.php` - Web routes
- `database/migrations/` - Database schema

## Testing

Run tests with:
```sh
php artisan test
```
or, if using Pest:
```sh
vendor/bin/pest
```

## License

This project is open-sourced under the [MIT license](LICENSE).

---

Built with Laravel, Breeze, Tailwind