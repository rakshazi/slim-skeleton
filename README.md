# Install

### Skeleton

```bash
composer create-project rakshazi/slim-skeleton
```

### Docker

> **NOTE**: this docker image is production ready and works only with SSL

1. Change `your.site` domain in `docker-compose.yml` to your domain
4. Run docker-compose:

```bash
#For development
docker-compose up

#For production
docker-compose -f docker-compose-prod.yml up -d
```

Composer dependencies, migrations, and DB will be created automaticaly

# Documentation

### Backend

* App - **Slim Framework**: [slimframework.com/docs/](https://www.slimframework.com/docs/) + [rakshazi/slim-suit](https://github.com/rakshazi/slim-suit) + [akrabat/rka-slim-session-middleware](https://github.com/akrabat/rka-slim-session-middleware)
* ORM - **Medoo**: [medoo.in/doc](https://medoo.in/doc)
* Migrations, seeds - **Phinx**: [docs.phinx.org](http://docs.phinx.org/en/latest/)
* Exception handling - **Sentry.io**: [docs.sentry.io](https://docs.sentry.io)

### Frontend
* Rendering engine - **Twig**: [twig.sensiolabs.org](https://twig.sensiolabs.org/) + [slim/flash](https://github.com/slimphp/Slim-Flash) + [kanellov/slim-twig-flash](https://github.com/kanellov/slim-twig-flash)
* Framework - **Twitter Bootstrap**: [getbootstrap.com](https://getbootstrap.com/getting-started/) + [jQuery](https://jquery.com)
