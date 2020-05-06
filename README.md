# Codingame PHP environment
Tools for codingame challenges
* docker
* phpunit
* blackfire

# Setup 
> Note: setup the blackfire Credentials in the .env

###.env file (copy .env.dist and rename)
```yml
BLACKFIRE_CLIENT_ID=client-id-credentials
BLACKFIRE_CLIENT_TOKEN=client-token-credentials
BLACKFIRE_SERVER_ID=server-id-credentials
BLACKFIRE_SERVER_TOKEN=token-id-credentials
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
$ docker-compose exec codingame vendor/bin/phpunit
```

### Run blackfire profiler
```
$ docker-compose exec codingame blackfire run php index.php
```

### command to generate a single PHP script containing all of the classes required
```
$ docker-compose exec codingame php vendor/bin/classpreloader compile --config=config/config.php --output=output.php
```
