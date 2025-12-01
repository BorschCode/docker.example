# Docker Example Project

## Services

- **nginx** - Web server
- **php-8** - PHP-FPM application server
- **mariadb** - Database server
- **rabbitmq** - Message broker with management UI
- **mailhog** - Email testing tool

## Setup

1. **Create environment file:**
   ```bash
   cp .env.example .env
   ```

2. **Configure ports (optional):**
   ```bash
   cp docker-compose.override.yml.dist docker-compose.override.yml
   ```

3. **Build and start services:**
   ```bash
   make build
   ```

## Available Commands

- `make build` - Build and start all services
- `make start` - Start existing services
- `make stop` - Stop services
- `make down` - Stop and remove containers
- `make logs` - View logs
- `make php_bash` - Access PHP container shell
- `make db_bash` - Access database container shell

## Access Points

- **Web Application:** http://10.100.10.10 (or configured NGINX_IP)
- **RabbitMQ Management:** Port 15236 (if override configured)
- **Database:** Port 3939 (if override configured)
- **MailHog:** Port 8413 (if override configured)

## Project Structure

- `app/` - PHP application files
- `docker/` - Docker configuration files
- `.env` - Environment variables (create from .env.example)
- `docker-compose.yml` - Main Docker Compose configuration
- `Makefile` - Build and management commands

## Troubleshooting

**RabbitMQ Issues:**
- If RabbitMQ fails to start with cookie permission errors, run:
  ```bash
  docker compose down
  docker volume rm docker_rabbitmq_data
  docker compose up -d
  ```

**Missing .env file:**
- Ensure you've copied `.env.example` to `.env` before starting services