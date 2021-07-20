# neoan3 docker container

- PHP8.1
- mariaDB
- neoan3-cli

## Installation
1. Fork, download or clone this repository
2. compose
3. see quick start

### start container
`docker compose up -d`

> runs on http://localhost:8090 (initially returns forbidden as it's empty)

This setup allows running neoan3-cli commands within the container. 
You do not need PHP, composer, apache or mysql on your system.

## Quick start

After the containers are running, enter the shell:

`docker compose exec neoan3 sh`

Then, you can run neoan3 commands as usual:

`neoan3 new app`