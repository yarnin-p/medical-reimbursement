FROM php:8.0.6-fpm-alpine

ENV TZ='Asia/Bangkok'

RUN apk --update add ca-certificates

RUN apk --no-cache add curl nano

RUN apk add tzdata && \
    cp /usr/share/zoneinfo/${TZ} /etc/localtime && \
    echo "${TZ}" > /etc/timezone && \
    apk del tzdata

# Install nginx
RUN apk update \
    && apk add nginx

# Install PHP/FPM + Modules
# Install dev dependencies
RUN apk add --no-cache --virtual .build-deps \
    $PHPIZE_DEPS \
    curl-dev \
    imagemagick-dev \
    libtool \
    libxml2-dev \
    postgresql-dev \
    sqlite-dev

# Install production dependencies
RUN apk add --no-cache \
    nano \
    bash \
    curl \
    freetype-dev \
    g++ \
    gcc \
    git \
    icu-dev \
    icu-libs \
    imagemagick \
    libc-dev \
    libjpeg-turbo-dev \
    libpng-dev \
    libzip-dev \
    make \
    mysql-client \
    nodejs \
    nodejs-npm \
    yarn \
    openssh-client \
    postgresql-libs \
    rsync \
    zlib-dev

# Install PECL and PEAR extensions
RUN pecl install \
    redis \
    mongodb \
#    imagick \
    xdebug

# Enable PECL and PEAR extensions
RUN docker-php-ext-enable \
    redis \
    mongodb \
#    imagick \
    xdebug

# Configure php extensions
#RUN docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
#    && docker-php-ext-configure zip --with-libzip

# Install php extensions
RUN docker-php-ext-install \
    bcmath \
    calendar \
    curl \
    exif \
    gd \
    iconv \
    intl \
#    mbstring \
    pdo \
    pdo_mysql \
    pdo_pgsql \
    pdo_sqlite \
    pcntl \
    soap \
    tokenizer \
    xml \
    zip

# Install composer
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" && \
    php composer-setup.php --quiet --install-dir=/usr/bin --filename=composer && \
    rm composer-setup.php

WORKDIR /var/www/html/benchmark-app

COPY src .

COPY ./development/nginx/benchmark-app.dev.conf /etc/nginx/conf.d/default.conf

RUN chown -R www-data:www-data /var/www/html/benchmark-app


# Nginx on :80
# EXPOSE 80
