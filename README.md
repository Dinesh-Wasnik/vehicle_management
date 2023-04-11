
## Vehicle Management 
---
## Problem Statement 
For this process they are supplying you with data about their vehicles, vehicle inspections as well as the assignment of vehicles to their workers.
Each vehicle has a fixed displayed name, a date when it was acquired and a fixed parking location and further on can have a worker who has the current ownership over the vehicle and a license plate number.
A vehicle inspection can be a actual inspection at the Technical Supervisory Association, but also a regular maintenance appointment or a general inspection.
Each worker can take ownership over multiple vehicles, but a vehicle can only be owned by one worker.
They are also providing you the data from their old, analog system as CSV-Files.
Your task is to create a REST-API in laravel that enables the display of data for the vehicles, the inspections and workers as well as the possibilities to create new inspections, vehicles and workers and the possibility to edit modifiable info on vehicles.

## Project Requirement
- You can setup project xampp or wampp software
- Laragon software is recommended.


## Project Setup
 - Clone the from this link ```git@github.com:Dinesh-Wasnik/vehicle_management.git```

 - Create database and set value in .env file.

 - ```DB_CONNECTION=mysql
		DB_HOST=127.0.0.1
		DB_PORT=3306
		DB_DATABASE=vehicle_management
		DB_USERNAME=root
		DB_PASSWORD=
	 ```
	set value like this.	

## Run Below commands

 - ```Composer install``` .
 

 - ```php artisan passport:install ``` .


 - ```PHP artisan migrate ``` 



## Postman Guidine.
 - For client_id field  take value from id column of  ```oauth_clients```  table from 2nd id .
 
 - For client_secret  field  take value from secret column of ```oauth_clients```  table from 2nd row .
 
## APi Document link
 - https://documenter.getpostman.com/view/10476122/2s93XsYS7V#b571f6d4-4917-4eaa-a4af-0e88eaaae95f
 
  





