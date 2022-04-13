## About the System

Education institutions need reliable and effective student attendance systems to record presence and tackle the problem of low attendance. A system that is simple from an admin side, but notifies the education institution of clear attendance concerns.

-   Fully Dynamic.
-   Create new Students.
-   Create new Courses and assign students to them.
-   Keep track of presence and absence of each student
-   Start new attendance with only one click 
-   User Friendly.
-   Custom Css & Js.
-   Laravel 8.x.

## Developing

**Getting Started**

*Clone this repo:*

```
https://github.com/Ahmad-Chebbo/Students-Attendance-System-V1.git
```

*Enter the project folder:*

```
cd Students-Attendance-System-V1
```

*Install php dependencies:*

```
composer install
```

*Copy the env.example file to .env and generate new key:*

```
cp .env.example .env

php artisan key:generate
```

*Open to the .env file and change the database credentials to your database:*

*Migrate the database and the seeds:*

```
php artisan migrate:fresh --seed
```

**Workflow**

*Serve the project:*

```
php artisan serve
```

*Login and access project* 

Use the default email : **admin@app.com** and password : **password**

## Built with

-   **[Laravel 8 as a PHP framework used as an API endpoint](https://laravel.com/)**
-   **[Bootstrap as a CSS framework](https://getbootstrap.com/)**
-   **[Argon Dashbaord](https://demos.creative-tim.com/argon-dashboard/)**

## Browser / OS / Device support

-   IE 11, Edge, Chrome, Firefox, Safari, Opera
-   Windows, Mac, iOS, Android
-   Desktop, Tablet, Mobile

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT)
