FROM php:7-fpm

RUN apt-get update && apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libmcrypt-dev \
        libjpeg-dev \
        libpq-dev \
        libcurl4-gnutls-dev \
        libicu-dev \
        libxml2-dev \
        libpq-dev \
        zlib1g-dev \
        git \
        g++ \
        openssl \
        libssl-dev \
        librdkafka-dev \
        wget \
    && apt-get autoremove -y && apt-get autoclean \
    && rm -rf /var/lib/apt/lists/*

RUN wget https://download.savannah.gnu.org/releases/freetype/freetype-2.9.tar.gz && tar xf freetype-2.9.tar.gz && cd freetype-2.9/ && ./configure && make && make install

RUN pecl install -o -f redis \
    && docker-php-ext-enable redis \
    && pecl install rdkafka \
    && pecl install swoole \
    && docker-php-ext-enable swoole \
    && pecl install mongodb \
    && docker-php-ext-enable mongodb \
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install -j$(nproc) iconv mysqli pdo pdo_mysql pdo_pgsql pgsql intl curl json sockets opcache xml mbstring gd bcmath \
    && rm -rf /tmp/pear
