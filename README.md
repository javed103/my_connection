# My Connections Web Application

**Tech Stack:**
- Laravel
- Livewire
- Tailwind CSS
- Alpine.js

## Getting Started

**Clone Repository:**
```bash
git clone https://github.com/yourusername/my-connections-app.git


Install Dependencies:

cd my-connections-app
composer install
npm install



Set Up Environment:

Create .env from .env.example
Generate Application Key: php artisan key:generate
Configure Database in .env
Migrate and Seed Database:



php artisan migrate
php artisan db:seed


php artisan serve


Access the Application:
Open your browser and go to http://localhost:8000

Project Structure
app/ - Application-specific code
bootstrap/ - Bootstrapping and configuration
config/ - Configuration files
database/ - Database migrations and seeders
public/ - Public assets and entry point (index.php)
resources/ - Frontend assets and Blade templates
routes/ - Application routes
storage/ - Storage directory for logs, uploads, etc.
tests/ - PHPUnit test files
vendor/ - Composer dependencies
.env - Environment configuration file
.env.example - Example environment configuration file
composer.json - Composer dependencies and scripts
package.json - Node.js dependencies and scripts
Task 1: Login Page
A login page with Laravel Jetstream is implemented, including user registration, login, and password reset functionality.

Task 2: My Connections Overview Page
The "My Connections" page displays an overview of user connections as cards with dynamic and static data.

Task 3: All Connections Search and Addition
The "All Connections" page allows dynamic searching for connections using Laravel Scout with Elasticsearch. Users can add connections from search results.

Contributing
Contributions are welcome! Follow these steps:

Fork the repository.
Create a new branch for your feature or bug fix.
Make changes, commit with descriptive messages.
Push to your fork on GitHub.
Create a pull request to the main branch of the original repository.
