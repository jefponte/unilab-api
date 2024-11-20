# UNILAB API

This project is a Laravel-based API serving as a template for new projects with common functionalities.

## Requirements

- Docker
- Docker Compose

## Development Environment Setup

### Step 1: Copy `.env.example` to `.env` and Set Environment Variables

Copy the example environment configuration file and set up the necessary environment variables for the application.

    cp .env.example .env

In the `.env` file, configure the database connection settings:


    DB_LOCAL_DRIVER=mysql
    DB_LOCAL_HOST=172.23.112.1
    DB_LOCAL_PORT=3306
    DB_LOCAL_DATABASE=unilab-api
    DB_LOCAL_USERNAME=user
    DB_LOCAL_PASSWORD=secret


    DB_SIGAA_DRIVER=mysql
    DB_SIGAA_HOST=172.23.112.1
    DB_SIGAA_PORT=3306
    DB_SIGAA_DATABASE=unilab-api
    DB_SIGAA_USERNAME=user
    DB_SIGAA_PASSWORD=secret


    DB_SISTEMAS_COMUM_DRIVER=mysql
    DB_SISTEMAS_COMUM_HOST=172.23.112.1
    DB_SISTEMAS_COMUM_PORT=3306
    DB_SISTEMAS_COMUM_DATABASE=unilab-api
    DB_SISTEMAS_COMUM_USERNAME=user
    DB_SISTEMAS_COMUM_PASSWORD=secret


This step sets up the environment variables required for the application to connect to the MySQL database.

### Step 2: Build and Start Containers with Docker Compose

Use Docker Compose to build and start the containers in detached mode.

    docker-compose up -d --build

This command will build the Docker image if needed and start the containers in the background.

### Step 3: Install Laravel Dependencies Inside the Container

Run the following command to install dependencies using Composer:

    docker exec -it unilab-api bash -c "composer install"

### Step 4: Run Database Migrations

With the environment up, run the migrations:

    docker exec -it unilab-api bash -c "php artisan migrate"

    docker exec -it unilab-api bash -c "php artisan db:seed"

### Step 5: Generate Application Key

To secure the application, generate a new app key:

    docker exec -it unilab-api bash -c "php artisan key:generate"

### Step 6: (Optional) Create Storage Link

If needed, create a symbolic link for the storage directory:

    docker exec -it unilab-api bash -c "php artisan storage:link"

### Step 7: Access the Application

The API will be available at [http://localhost](http://localhost).

## Useful Commands

- **Stop containers**:

      docker-compose down

- **Restart containers**:

      docker-compose up -d

- **Access the container**:

      docker exec -it unilab-api bash

## Notes

- Ensure Docker and Docker Compose are installed and up to date.
- Review directory permissions if needed, especially for `storage` and `bootstrap/cache`.
