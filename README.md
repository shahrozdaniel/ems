# EMS Project

This is a Laravel-based project for managing EMS (Employee Management System).

## Basic Laravel Project Setup

1. **Clone the repository:**
	```bash
	git clone <repository-url>
	cd ems
	```

2. **Install dependencies:**
	```bash
	composer install
	npm install
	```

3. **Copy the `.env` file:**
	```bash
	cp .env.example .env
	```

4. **Generate an application key:**
	```bash
	php artisan key:generate
	```

5. **Configure your database in the `.env` file:**
	```env
	DB_CONNECTION=mysql
	DB_HOST=127.0.0.1
	DB_PORT=3306
	DB_DATABASE=your_database_name
	DB_USERNAME=your_database_user
	DB_PASSWORD=your_database_password
	```

6. **Run the migrations:**
	```bash
	php artisan migrate
	```

7. **Seed the database with an admin user:**
	```bash
	php artisan db:seed --class=AdminUserSeeder
	```

## Admin Login

To login as an admin, use the following credentials:

- **Username:** admin
- **Password:** admin123

## Running the Application

1. **Start the development server:**
	```bash
	php artisan serve
	```

2. **Access the application:**
	Open your browser and navigate to `http://localhost:8000`.

## Additional Commands

- **Clear application cache:**
	```bash
	php artisan cache:clear
	```

- **Clear configuration cache:**
	```bash
	php artisan config:clear
	```

- **Clear route cache:**
	```bash
	php artisan route:clear
	```

- **Clear view cache:**
	```bash
	php artisan view:clear
	```

## License

This project is licensed under the MIT License.