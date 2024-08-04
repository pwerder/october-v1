
# Test on October CMS

Project to learn and test functionality of October CMS in version 1


## Installation

To deploy this project run

Create a image
```bash
  docker build -t october:v1 .
```
Create a network
```bash
  docker network create myapp
```
Create a container
```bash
  docker run --name my_october_1 -dp 8000:8000 --network myapp -v ./:/var/www/html october:v1
```
Access docker bash
```bash
  docker exec -it my_october_1 bash
```
Remove the composer.lock file if you have it and run
```bash
  composer install
```
Application key
```bash
    php artisan key:generate
```
Project configuration
```bash
    php artisan october:install
```
