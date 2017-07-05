# Install

## Project

```bash
composer create-project rakshazi/slim-skeleton
```

## Docker

> **NOTE**: this docker image is production ready and works only with SSL for production and with SSL and without it for dev env.

1. Change `your.site` domain in `docker-compose.yml` and `docker-compose-prod.yml` to your domain
4. Run docker-compose:

```bash
#For development
docker-compose up

#For production
docker-compose -f docker-compose-prod.yml up -d
```

Composer dependencies, migrations, and DB will be created automaticaly

### `quay.io/rakshazi/slim-skeleton` (Dockerfile.quay)

Full-featured image **without composer** and its dependencies. `composer update` should be run on build stage.

Example of Dockerfile for your usage (if you dont want to build base image yourself):

```Dockerfile
FROM composer/composer:alpine
COPY ./ /app
RUN composer update --ignore-platform-reqs --no-ansi --no-dev \
        --no-interaction --no-progress --no-scripts --optimize-autoloader \
        -d /app

FROM quay.io/rakshazi/slim-skeleton
MAINTAINER Your Name <your.name@your.site>
COPY --from=0 /app/ /var/lib/nginx/html/
```

# Documentation

### Backend

* App - **Slim Framework**: [slimframework.com/docs/](https://www.slimframework.com/docs/) + [rakshazi/slim-suit](https://github.com/rakshazi/slim-suit) + [akrabat/rka-slim-session-middleware](https://github.com/akrabat/rka-slim-session-middleware)
* ORM - **Medoo**: [medoo.in/doc](https://medoo.in/doc)
* Migrations, seeds - **Phinx**: [docs.phinx.org](http://docs.phinx.org/en/latest/)
* Exception handling - **Sentry.io**: [docs.sentry.io](https://docs.sentry.io)
* Session storage - **Redis**: [redis.io](https://redis.io)

### Frontend
* Rendering engine - **Twig**: [twig.sensiolabs.org](https://twig.sensiolabs.org/) + [slim/flash](https://github.com/slimphp/Slim-Flash) + [kanellov/slim-twig-flash](https://github.com/kanellov/slim-twig-flash)
* Framework - **Twitter Bootstrap**: [getbootstrap.com](https://getbootstrap.com/getting-started/) + [jQuery](https://jquery.com)
