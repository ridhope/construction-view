# Construction View Service

This project is a Construction View Service built with Symfony. It provides various endpoints to view construction project information. Note that this service is read-only and does not support CRUD operations.

## Table of Contents
- [Features](#features)
- [Architecture](#architecture)
- [Folder Structure](#folder-structure)
- [Testing](#testing)
- [Installation](#installation)
- [Configuration](#configuration)

## Features

- **Project Viewing**: Retrieve construction project information.
- **Error Handling**: Comprehensive error handling and logging.
- **CORS Support**: Configurable Cross-Origin Resource Sharing (CORS) settings.

## Architecture

The application follows a layered architecture:

- **Controller Layer**: Handles HTTP requests and responses.
- **Service Layer**: Contains business logic.
- **Repository Layer**: Manages data retrieval.
- **Entity Layer**: Defines the data models.

## Folder Structure


## Installation

To set up the project locally, follow these steps:

1. **Clone the repository**:
    ```bash
    git clone https://github.com/ridhope/construction-view.git
    cd construction-view

2. **Install dependencies**:
    ```bash
    composer install

3. **Set up environment variables**:
    Copy the .env-sample file to .env and update the necessary environment variables.
    ```bash
    cp .env-sample .env

4. **Set up the database**:
    Update the DATABASE_URL in the .env file with your database credentials.
    ```bash
    DATABASE_URL="postgresql://userconstruction:passwordC0nstruction@127.0.0.1:5432/construction_management"

5. **Run database migrations**:
    ```bash
    php bin/console doctrine:migrations:migrate

6. **Start the development server**:
    ```bash
    symfony server:start

## Configuration

### Database

The database connection is configured using the DATABASE_URL environment variable. Example configuration for PostgreSQL:

```bash
DATABASE_URL="postgresql://userconstruction:passwordC0nstruction@127.0.0.1:5432/construction_management"

CORS
CORS settings are configured using the CORS_ALLOW_ORIGIN environment variable. Example configuration:

CORS_ALLOW_ORIGIN='^https?://(localhost|127\.0\.0\.1)(:[0-9]+)?$'

Testing
To run the tests, use the following command:

vendor/bin/phpunit

Tests are located in the tests directory and are organized by the type of test (e.g., Controller tests, Entity tests).