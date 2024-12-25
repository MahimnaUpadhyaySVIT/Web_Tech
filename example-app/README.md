# Read Me

![Web_Tech](https://socialify.git.ci/MahimnaUpadhyaySVIT/Web_Tech/image?language=1&name=1&owner=1&theme=Light)

## Cloning the Repository
To get started, clone the repository to your local machine using the following command:

```bash
git clone https://github.com/MahimnaUpadhyaySVIT/Web_Tech
```

## Prerequisites
Ensure you have **XAMPP** installed and running. Before starting the Laravel server, always start the following services in XAMPP:

1. **Apache**
2. **MySQL**

## Starting the Server
Run the following command in the terminal to start the Laravel development server:

```bash
php artisan serve
```

## Handling SQL Errors
If you encounter an error related to:

```
SQLSTATE[42S02]: Base table or view not found
```

Follow these steps:

1. Open **phpMyAdmin** in your browser.
2. Create a new database named `example_app`. Use the following SQL command to create the database:

   ```sql
   CREATE DATABASE example_app;
   ```

3. Once the database is created, run the following command to execute the migrations:

   ```bash
   php artisan migrate
   ```

4. After the migration process is complete, check the `example_app` database in **phpMyAdmin**. You should see tables such as `logs`, `users`, etc.

## Additional Notes
Ensure your `.env` file has the correct database configurations. It should look something like this:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=example_app
DB_USERNAME=root
DB_PASSWORD=
```

Replace `DB_USERNAME` and `DB_PASSWORD` with your database credentials if they are different.

5. Implementing the basic navigation
   
   Step I. Make home.blade.php, about.blade.php, contact.blade.php files in resources/views (for references check out my blades files). \
   Step II. Edit routes/web.php file. \
   Step III. Add these codes to add url:-
   
   ```bash
    Route::get('/', function () {
    return view('home');
    });

    Route::get('/aboutus', function () {
    return view('about');
    });

    Route::get('/contactus', function () {
    return view('contact');
    });
   ```
