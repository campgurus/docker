FROM php:8.0.0-apache

RUN buildDeps=" \
        wget \
        git \
        ssh \
        zip \
        libzip-dev \
    "; \
    set -x \
    && apt-get update && apt-get install -y $buildDeps --no-install-recommends && rm -rf /var/lib/apt/lists/*
RUN docker-php-ext-install  mysqli
RUN docker-php-ext-install  zip
RUN a2enmod rewrite
RUN apache2ctl restart
RUN wget https://getcomposer.org/installer -O - -q | php -- --quiet --version=2.1.9 && \
    mv composer.phar /usr/local/bin/composer && \
    mkdir /usr/local/bin/composer-packages && \
    mkdir /credentials && \
    chown www-data:www-data /credentials -R && \
    touch /var/www/.safe-space && \
    composer global config vendor-dir /usr/local/bin/composer-packages
RUN composer global require neoan3/neoan3 --ignore-platform-reqs
ENV PATH /usr/local/bin/composer-packages/bin:$PATH
