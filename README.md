# Install

### Skeleton

```bash
composer create-project rakshazi/slim-skeleton
```

### Docker

> **NOTE**: this docker image is production ready and works only with SSL

1. Generate SSL certificates with [certbot](https://certbot.eff.org/)
2. Put them into `docker/letsencrypt` dir (or any other, default is letsencrypt)
3. Change `your.site` domain in `docker/ssl.conf` to your domain
4. Run docker-compose:

```bash
#For development
docker-compose up

#For production
docker-compose -f docker-compose-prod.yml up -d
```

Composer dependencies, migrations, and DB will be created automaticaly
