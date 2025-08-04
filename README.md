# Task Management Application

A simple web-based task management system built with Laravel. This application allows users to register, log in, and manage their personal tasks with features like task creation, editing, deletion, searching, and filtering by status.

## Features

- User registration, login, and profile management
- Create, edit, and delete tasks
- Assign status to tasks: Not Started, Ongoing, Complete
- Search tasks by title or description
- Filter tasks by status
- Responsive and clean UI with Tailwind CSS
- Secure authentication and authorization

## Getting Started

### Prerequisites

- PHP >= 8.2
- Composer
- Node.js & npm
- SQLite (default) or another supported database

### Installation

1. **Clone the repository:**
   ```sh
   git clone <repository-url>
   cd softeng_act1
   ```

2. **Install PHP dependencies:**
   ```sh
   composer install
   ```

3. **Install JavaScript dependencies:**
   ```sh
   npm install
   ```

4. **Copy the example environment file and set your environment variables:**
   ```sh
   cp .env.example .env
   ```

5. **Generate an application key:**
   ```sh
   php artisan key:generate
   ```

6. **Set up the database:**
   - By default, the app uses SQLite. You can change the database settings in `.env`.
   - To use SQLite, create the database file:
     ```sh
     type nul > database\database.sqlite
     ```
   - Update your `.env`:
     ```
     DB_CONNECTION=sqlite
     DB_DATABASE=/absolute/path/to/database/database.sqlite
     ```

7. **Run migrations:**
   ```sh
   php artisan migrate
   ```

8. **Build frontend assets:**
   ```sh
   npm run build
   ```
   For development, use:
   ```sh
   npm run dev
   ```

9. **Start the development server:**
   ```sh
   php artisan serve
   ```
   Visit [http://localhost:8000](http://localhost:8000) in your browser.

## Usage

- Register a new account or log in.
- After logging in, you'll be redirected to the dashboard.
- Click "View Your Tasks" to manage your tasks.
- Use the "Add Task" button to create a new task.
- Edit or delete tasks using the corresponding buttons.
- Use the search bar and status filter to find specific tasks.

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

## Built With

- [Laravel](https://laravel.com/) - PHP web framework
- [Tailwind CSS](https://tailwindcss.com/) - Utility-first CSS framework
- [Vite](https://vitejs.dev/) - Frontend build tool

## License

This project is open-sourced under the [MIT license](LICENSE).

---

Feel free to contribute or open