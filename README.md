# To Do App built in Slim Framework

This application uses the latest Slim 4 with Slim PSR-7 implementation and PHP-DI container implementation along with the PHP-View template renderer. It also uses the Monolog logger.

The application was built for Composer.

## Install the Application

Create a new directory with your project name, e.g:


```bash
mkdir academyProject
```

Once inside the new directory, clone this repo:

```bash
git clone git@github.com:maxwell-01/ToDoApp.git .
```

One cloned, you must install the slim components by running:

```bash
composer install
```

To run the application locally:
```bash
composer start

```
Run this command in the application directory to run the test suite
```bash
composer test
```

You'll also need the MySQL database to communicate with. Please create a table named 'todoapp' in your
favourite MySql application of choice.

Upload the 'todoapp.sql' file to insert the table.

Check that your credentials match those found in the 'ToDoModelFactory.php' class. 

That's it! Now go and add some tasks!
