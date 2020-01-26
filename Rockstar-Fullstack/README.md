## Wanlab Laravel Basic CRUD Tutorial Hackathon!

## Project Name: Rockstar-Fullstack

Build a CRUD application in less then 2hours tutorial using laravel for newbies.

* [x] Installation
    * [x] composer
        * [x] https://getcomposer.org/download/
    * [x] laravel
        * [x] cli: composer global require laravel/installer
    * [x] Create New project folder call Rockstar-Fullstack
      * [x] Start Xampp
      * [x] composer create-project --prefer-dist laravel/laravel Rockstar-Fullstack
    * [x] Test run Laravel Project in server:
      * [x] cli: php artisan serve

* [x] Setup Mysql Database:
  * [x] Creat database rockstars
    * [x] DB connection
        * [x] Update db connection details at .env file
  * [x] Build new table using Migration:
        * [x] Build table schema using cli: php artisan make:migration create_rockstarfullstacks_table 
        * [x] Build the table in db using cli: php artisan migrate
        * [x] Insert dummy data in the table using mysql cli

* [x] CRUD Pages
  * [x] Created new controller & new model using cli:
    * [x] cli: php artisan make:controller RockstarsController -r -m Rockstar   
  * [x] Create Routers to RockstarsController in web.php:
    * [x] Route::resource('rockstars', 'RockstarsController');

* [x] Create Page Layout Theme
  * [x] Create layout folder in view folder
  * [x] Create main.blade.php
  * [x] Create main layout html in main.blade.php. Get html from bootsrap.  
  * [x] Create Nav bar using bootsrap in main.blade.php
    * [x] Set Nav link to be dynamic
  * [x] Set dynamic value for page contents
    * [x] @yield('title')
    * [x] @yield('container')

  * [x] Index page:
      * [x] Create index page function in controller that get data from tables and pass to view.
      * [x] Create index page view in index.blade.php themes. Use bootsrap list. 
    * [x] Show pages:    
        * [x] Create show page function in controller
        * [x] Create show age view in show.blade.php themes. Use bootstrap card.
    * [x] Create page:
        * [x] Create create button link in index.blade.php        
        * [x] Create create page function in controller
        * [x] Create create form view in create.blade.php themes
        * [x] Add protected $fillable form value array at model file
        * [x] Create store function in controller
          * [x] Create store data in table code
          * [x] Create redirect routes & message
        * [x] Create form validation value in store function @ controller
        * [x] Create form validation values in form
        * [x] Create form error flash message in form
        * [x] Create status flash message at index.blade.php     
    * [x] Delete Action:
        * [x] Create the delete button form with id in show.blade.php
        * [x] Create destroy function in controller with redirect & flash messages.       
    * [x] Edit Page
        * [x] Create edit link with id in show.blade.php
        * [x] Create edit function in controller
        * [x] Create edit form in edit.blade.php
        * [x] Create edit form validation                
        * [x] Create update function in controller
            * [x] Create process to update data in table
            * [x] Create redirect routes & flash message 
    * [x] Soft Delete:
        * [x] Create deleted_at collumn in table using migration
            * [x] migrate table in cli: php artisan make:migration add_soft_delete_to_students
            * [x] add delete_at collum at the mogration file
            * [x] migrate the model table in cli:php artisan migrate 
        * [x] Insert softDelete statement in model file
          * [x] use Illuminate\Database\Eloquent\SoftDeletes;
          * [x] use SoftDeletes;
  * [x] Overal Function Testing
  * [] Git Upload
  * [] Upload to online server
  