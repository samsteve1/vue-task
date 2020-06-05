## Vue-Task- Project setup

* Clone the repository git clone  https://github.com/samsteve1/vue-task.git


From the command line interface (CLI), run the following commands:

* composer install
* npm install 
* npm run dev

Generate application key like so:

* php artisan key:generate

Create a .env file and copy the contents of .env.example to the new file.

* set the DB_connection to sqlite
* set DB_DATABASE to /database/database.sqlite

To Seed the database with more data

* php artisan tinker
* factory(App\Employee::class,10)->create();

Finally, start the application by running:

* php artisan serve

