# Codingame PHP environment
Tools for codingame challenges
* docker
* phpunit
* blackfire

# Setup 
> Note: setup the blackfire Credentials in the docker-compose file

###docker-compose
```yml
version: '3'
services:
  codingame:
    build:
      context: ./
    volumes:
      - "./:/var/www/codingame:cached"
      - "~/.composer:/var/composer:cached"
    ports:
      - "8080:80"
    environment:
      BLACKFIRE_CLIENT_ID: ~
      BLACKFIRE_CLIENT_TOKEN: 
      BLACKFIRE_SERVER_ID: ~
      BLACKFIRE_SERVER_TOKEN: ~
```

###Run the container 
```
$ docker-compose up -d 
```
### Install dependencies
```
$ docker-compose exec codingame composer install --prefer-dist
```

### Run unit test
```
$ docker-compose exec codingame vndor/bin/phpunit
```

### Run blackfire profiler
```
$ docker-compose exec codingame blackfire run php src/index.php
```

