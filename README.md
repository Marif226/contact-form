# Laravel Contact Form

This is a Laravel project that implements a basic contact form with MySQL database integration.

## Prerequisites
Before you begin, ensure you have the following installed on your system:

- PHP 7.3 or later
- Composer
- MySQL server

## Installation

1. Clone the repository:
```Bash
git clone https://github.com/Marif226/contact-form.git
```

2. Install Composer dependencies:
```Bash
composer install
```

3. Create a .env file and configure database connection details:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=contact-db
DB_USERNAME=root
DB_PASSWORD=
```

4. Create the database:
```Bash
php artisan migrate
```

## Usage
1. Start the Laravel development server:
```Bash
php artisan serve
```

2. Open the application in your browser:
http://localhost:8000

3. Fill out the contact form with your information and click the "Submit" button.
The message will be stored in the database and displayed in the list below the form.

4. Validation
Laravel provides built-in validation rules to ensure that the data submitted through the form is valid. In this project, validation is applied to the following fields:

- name: Required, must be a string of 2-50 letters
- email: Required, must be a valid email address
- message: Required, must be a string of maximum 255 symbols