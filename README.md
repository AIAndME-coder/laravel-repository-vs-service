<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Laravel Docker Setup - Repository vs Service Pattern

This Laravel application demonstrates repository and service patterns and runs in Docker with connection to an external MySQL database.

## Prerequisites

- Docker and Docker Compose installed
- MySQL database running (on host or another container)

## Environment Configuration

The `.env` file is configured to connect to MySQL using:
- **DB_HOST**: `host.docker.internal` (to connect to MySQL on your host machine or other container)
- **DB_PORT**: `3306`
- **DB_DATABASE**: `laravel` (update as needed)
- **DB_USERNAME**: `root` (update as needed)
- **DB_PASSWORD**: (set your password)

## Docker Setup

### Build and Run

```bash
# Build the Docker image
docker-compose build

# Start the containers
docker-compose up -d

# View logs
docker-compose logs -f
```

### Access the Application

The application will be available at: `http://localhost:8080`

### Running Artisan Commands

```bash
# Run migrations
docker-compose exec laravel-app php artisan migrate

# Clear cache
docker-compose exec laravel-app php artisan cache:clear

# Any artisan command
docker-compose exec laravel-app php artisan <command>
```

### Stopping the Application

```bash
docker-compose down
```

## Project Structure

- `Dockerfile` - PHP 8.3-FPM with Nginx
- `docker-compose.yml` - Docker Compose configuration
- `docker/nginx/` - Nginx configuration files
- `docker/start.sh` - Startup script for PHP-FPM and Nginx

## Notes

- The application runs on port `8080` (mapped from container port 80)
- MySQL connection uses `host.docker.internal` to connect to MySQL on your host machine
- If MySQL is in another Docker container, update `DB_HOST` in `.env` to the container name or add to the same network

---

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework. You can also check out [Laravel Learn](https://laravel.com/learn), where you will be guided through building a modern Laravel application.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
