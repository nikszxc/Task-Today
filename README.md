# Tasks for Today Management System

A beginner-friendly CodeIgniter 4 lab project with four pages:

- / shows tasks scheduled for today.
- /tasks shows all tasks ordered by date.
- /profile shows the single seeded demo user.
- /about identifies the student developer.

## Requirements

- PHP 8.2 or newer
- Composer 2.0.14 or newer
- MySQL or MariaDB
- PHP extensions intl, mbstring, and mysqli

## Set up locally

1. Import database/schema.sql into MySQL. The script creates the tasks_today database and the two required tables.
2. Import database/seed.sql. It inserts eight sample tasks across four dates, including the database server's current date, and exactly one demo user. The seed script clears the current contents of the tasks and users tables first, so use it only for the lab database.
3. Copy .env.example to .env. Change the database username or password if your MySQL setup uses different credentials.
4. In this project folder, install the framework:

       composer install

5. Start the local development server:

       php spark serve

6. Open http://localhost:8080.

## Sample profile

The seed creates one demo account:

- Username: demo
- Name: Demo User
- Email: demo@example.com

## Upload to GitHub

Create a new GitHub repository, then upload the contents of this folder. Do not upload .env or vendor; both are excluded by .gitignore. After cloning the repository elsewhere, run composer install, copy .env.example to .env, configure the database, and import the SQL files.

## Project structure

    app/
      Config/       Application, database, paths, and route configuration
      Controllers/  Page request handlers
      Models/       TaskModel and UserModel
      Views/        Shared layout and four page views
    database/       Schema and sample data
    public/         Web entry point and CSS
    writable/       CodeIgniter runtime folders
