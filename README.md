# Gestion De Stock (Inventory Management System)

A comprehensive Inventory Management System built with Laravel. This project allows you to manage stocks, suppliers, purchases, employees, and users efficiently.

##  Features

- **Dashboard**: Overview of key metrics and statistics (using Chart.js).
- **User Authentication**: Secure login and registration functionality.
- **Role & Permission Management**: Managed via `spatie/laravel-permission`.
- **Inventory Management**:
  - Manage **Categories**.
  - Manage **Suppliers**.
  - Manage **Purchases**.
  - Manage **Employees**.
- **Real-time Updates**: Integrated with **Pusher** for real-time notifications/updates.
- **Settings**: Application-wide settings configurations.
- **Backups**: Database and file backups using `spatie/laravel-backup`.

##  Technologies Used

### Backend
- **Framework**: [Laravel 11](https://laravel.com)
- **Language**: PHP 8.2+
- **Database**: MySQL (recommended)

### Frontend
- **Blade Templates**
- **JavaScript / Chart.js**
- **Laravel Mix** (Asset Compilation)

### Key Packages
- `spatie/laravel-permission`
- `spatie/laravel-backup`
- `qcod/laravel-app-settings`
- `pusher/pusher-php-server`

##  Prerequisites

Before you begin, ensure you have met the following requirements:
- PHP >= 8.2
- Composer
- Node.js & NPM
- MySQL

##  Installation

1. **Clone the repository**
   ```bash
   git clone <repository-url>
   cd "Projet Stage - Gestion De Stock"
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install NPM dependencies**
   ```bash
   npm install
   ```

4. **Environment Configuration**
   Copy the `.env.example` file to `.env` and configure your database settings.
   ```bash
   cp .env.example .env
   ```
   Update the database credentials in `.env`:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=your_database_name
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```

5. **Generate Application Key**
   ```bash
   php artisan key:generate
   ```

6. **Run Migrations & Seeders**
   ```bash
   php artisan migrate --seed
   ```

7. **Compile Assets**
   ```bash
   npm run dev
   # or
   npm run watch
   ```

8. **Serve the Application**
   ```bash
   php artisan serve
   ```
   Visit `http://localhost:8000` in your browser.

##  Usage

- **Login**: Access the system using the registered credentials.
- **Dashboard**: View charts and stock summaries.
- **Modules**: Navigate through the sidebar to manage Categories, Purchases, Suppliers, etc.

##  License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
