## Vue-Task- Project setup

* Clone the repository git clone  https://github.com/samsteve1/vue-task.git
* Create a sqlite database file named "database.sqlite" in the database folder.

From the command line interface (CLI), run the following commands:

* composer install
* npm install 
* npm run dev

Run the database migration 

* php artisan migrate

Seed the employees table with some data by running

*php artisan tinker
*factory(App\Employee::class,5)->create();

Finally, start the application by running:

* php artisan serve

