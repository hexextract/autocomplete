<p> This is documentation to setup and run autocomplete application. Commands to run are provided in quotes </p>


# Setting up Docker Container:
<p>Docker Container is creating image for PHP 7.3, Nginx, Mysql</p>



## Clone Directory provided
<p>First thing is to copy provided folder</p>

<p> Open a terminal in provided folder and make sure your directory contains dockerFile</p>

## Setting .env file for laravel project

<quote> cp .env.example .env </quote>

## Build Docker Image

<p> To build docker image you need to run following command</p>
<quote>docker-compose build</quote>

<p> Image shall be created with the name of test-app:v1. After successful build you need to run with following steps </p>

##  Starting Docker Image  

<quote>docker-compose up -d</quote>

 ## Setting up laravel users table and some data
 
 <quote>docker exec -it app php artisan key:generate </quote>
 <quote>docker exec -it app php artisan migrate </quote>
 <quote>docker exec -it app php artisan db:seed </quote>

 <p> Once both commands run succesfully. Access your application at http://localhost </p>

## Curl to confirm responses

<quote> curl http://localhost/api/users/d </quote>

This command shall return upto 5 records having "d" character in them. "d" can be replaced by any string you want to search.


## run test cases
<quote> docker exec -it app php artisan test </quote>




