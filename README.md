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

- **Web Application:** http://10.100.10.10
- **MailHog Web UI:** http://10.100.10.3:8025
- **RabbitMQ Management:** http://10.100.10.4:15672 (admin/admin)
- **Database:** 10.100.10.2:3306

**With Port Override (docker-compose.override.yml):**
- **RabbitMQ Management:** http://localhost:15236
- **Database:** localhost:3939
- **MailHog:** http://localhost:8413

## Discover Container IPs

```bash
# Show all container IPs
docker compose ps --format "table {{.Name}}\t{{.Status}}\t{{.Ports}}"

# Inspect network to see IP assignments
docker network inspect dockerexample_default

# Get specific container IP
docker inspect example_app_nginx --format='{{range .NetworkSettings.Networks}}{{.IPAddress}}{{end}}'
```

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