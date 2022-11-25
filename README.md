# A Simple Task for Internship

----

#### Quick Overview:


This repo is only for two functionality module! It illustrates magazine view and create funtionality by using repository desing pattern.


----------

# Getting started

## Installation

Please check the official laravel installation guide for server requirements before you start. [Official Documentation](https://laravel.com/docs/9.x/installation)

Clone the repository

    git clone https://github.com/fahadchy24/devsenv-internship-assignment.git

Switch to the repo folder

    cd devsenv-internship-assignment

Install all the dependencies using composer

    composer install

Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

Generate a new application key

    php artisan key:generate


Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan migrate

Start the local development server

    php artisan serve

You can now access the server at http://localhost:8000

**TL;DR command list**

    git clone git@github.com:fahadchy24/devsenv-internship-assignment.git
    cd devsenv-internship-assignment
    composer install
    cp .env.example .env
    php artisan key:generate
    
**Make sure you set the correct database connection information before running the migrations** [Environment variables](#environment-variables)

    php artisan migrate
    php artisan serve

## Storage Link


Run the database Storage link to preview and store the images

    php artisan storage:link

***Note*** : It's recommended to delete older storage linked folder before linking up another time.

    
----------


## Environment variables

- `.env` - Environment variables can be set in this file

- `APP_URL` - Make sure to set &nbsp;<b>APP_URL</b> according to site url path.

<br>

***Note*** : You can quickly set the database information and other variables in this file and have the application fully working.

----------
