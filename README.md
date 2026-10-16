# Senior Citizen Registry & Assistance Management System (Laravel starter)

A responsive, light-themed Laravel starter for barangay personnel in San Ildefonso, Bulacan. Includes dashboard, senior citizen registry, assistance request tracking, benefit distribution records, and simple reports.

## Requirements
- PHP and Composer supported by your installed Laravel version
- XAMPP with MySQL/MariaDB
- A fresh Laravel project (Laravel 11/12 recommended)

## Install into XAMPP
1. In `C:\xampp\htdocs`, create a Laravel project:
   ```bash
   composer create-project laravel/laravel SeniorCitizenSystem
   cd SeniorCitizenSystem
   ```
2. Install Laravel Breeze for login/authentication (Blade):
   ```bash
   composer require laravel/breeze --dev
   php artisan breeze:install blade
   npm install
   npm run build
   ```
3. Copy the files from this starter package into the matching folders of `SeniorCitizenSystem`, allowing the provided `routes/web.php` and layout/views to replace their equivalents. Keep Breeze's authentication routes in `routes/auth.php`.
4. Create a MySQL database in phpMyAdmin named `senior_citizen_db`.
5. Update `.env`:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=senior_citizen_db
   DB_USERNAME=root
   DB_PASSWORD=
   ```
6. Run:
   ```bash
   php artisan key:generate
   php artisan migrate
   php artisan serve
   ```
7. Open `http://127.0.0.1:8000`. Register an account through Breeze. For deployment, disable public registration and create accounts only for authorized staff.

## Included modules
- Dashboard with live record counts
- Senior citizen records: create, read, update, delete, search/filter
- Assistance requests: create, view, update status, delete
- Benefits/distribution: record recipients, distribution date, and claim status
- Reports: searchable tables and browser print support
- Responsive navigation and mobile layout

## Important setup/security notes
- This is a starter project overlay, not a standalone Laravel installation; Laravel framework files and `vendor/` must come from Composer.
- Apply authorization policies/role middleware before deployment. Authentication alone is not sufficient for a government records system.
- Use realistic access controls, strong passwords, HTTPS, backups, audit logs, and privacy-compliant retention. Do not put real senior-citizen personal data into a development/demo environment.
- The starter uses basic `auth` middleware and is intended for authorized barangay personnel. Citizen self-service accounts, SMS/email delivery, and national database integrations are not included.
- Status changes and benefit distribution must be verified by authorized staff; the system does not guarantee approval or availability.
