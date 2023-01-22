# REST API FULL EXAMPLE WITH PHP
## THIS REPO INCLUDE SERVER SIDE PROJECT AND FOLDER FOR IMPLEMENTING REST API 
---
| Two Folders 
* api-app -> folder
* rest-api -> folder

### api-app is an laravel project 
| for installation
| first you need 
* php 
* composer 
* mysql
* webserver - apache
  
| run this command after creating database with name (rest-api)
```shell
php artisan migrate --seed 
```
| to run the server project 
```shell
php artisan serv
```

| to run rest apis

| go to rest-api folder and run cli for specific file 

------

### examples 
| open your editor , open categories.php file in terminal and run this command
```shell
php categories.php
```
#### Result will be 
```shell
array of  categories
``` 
------ 
| to create new item 
| open cli for store.php file and run this command 
```shell
php store.php
``` 
| after runing this command you will store new category and response will have resource for this category 
------

| to show item 

| open cli for show.php file and run this command 
```shell
php show.php
``` 
| response will be resource of selected item 
------ 

| to delete item

| open cli for delete.php file and run this command 
```shell
php delte.php
``` 
-----

| to update item

| open cli for update.php file and run this command 
```shell
php update.php
``` 


