# LAMP Stack Docker Setup

This repository contains a Docker setup for running a LAMP (Linux, Apache, MySQL, PHP) stack using Debian as the base image.

## Features

- Debian Stable Slim as the base image.
- Apache2 for serving web content.
- PHP for server-side scripting.
- PhpMyAdmin for DB managament.
- SSH for secure shell access into the container.

## Directory Structure

```plaintext
.
├── config
│   └── my-httpd.conf       # My Apache configuration file
├── public_html               # Web application files - put you files here
├── Dockerfile                # Docker build file
├── docker-compose.yml        # Docker Compose file
└── LICENSE                   # GNU GENERAL PUBLIC LICENSE
```

## How to Use

1. **Open the terminal and clone the Lamp Repository:**
    ```bash
    git clone https://github.com/bkosic/lamp.git
    cd lamp
    ```
2. **Build the Docker Image:**
    ```bash
    docker-compose build
    ```
3. **Start the Docker Containers:**
    ```bash
    docker-compose up
    ```
4. **Access the Web Application:**
    - Open your web browser and navigate to `http://localhost`.
5. **Access the PhpMyAdmin Application:**
    - Open your web browser and navigate to `http://localhost:8080`.
6. **Stop and Remove the Docker Containers:**
    ```bash
    docker-compose down
    ```
## License

This project is open source under the MIT license.
