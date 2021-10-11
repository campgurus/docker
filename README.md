# neoan3-optimized docker setup

- PHP8.1
- mariaDB
- neoan3-cli
- composer

## Installation
1. Fork, download or clone this repository
2. compose up
3. see quick start

### Getting started
_first time commands:_
   
`docker-compose up --build -d`

`docker-compose exec neoan3 sh`

`# neoan3 new app`

`# chown -R www-data:www-data /var/www/html/model` *

_**\*this enables the use of the migration tool (http://localhost:8090/migrate)
When creating new models with the cli, ownership is 'root' and not writable by php**_

_to restart an existing app:_

`docker-compose up -d`

> runs on http://localhost:8090 

This setup allows running neoan3-cli commands within the container. 
You do not need PHP, composer, apache or mysql on your system.

## Quick start

After the containers are running, enter the shell:

`docker-compose exec neoan3 sh`

Here you can run neoan3 cli-commands

Depending on the neoan3 version you installed (when following this README, the newest version will be used and the following does not apply):

- make sure your frame uses database credentials with the name neoan3_db (or make changes to credentials)
- make sure components, frames, models, providers and dependencies from older versions are compatible with PHP8 & composer 2

## Security notes

This setup runs in safe-space mode (activated by a file .safe-space in the php-apache/Dockerfile) and is targeted at easy development. 
It is not recommended exposing a port for maria-db (see compose.yml) in production nor to deploy the component `migrate`.
Additionally, please consider adding the file credentials/credentials.json to your .gitignore when storing private credentials for external services/apis (and you will want to change your jwt-secret!).


