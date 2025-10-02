# Use the base PHP-FPM Alpine image
FROM php:8.2-fpm-alpine

# Install common utilities needed for Composer (git, unzip, wget)
RUN apk add --no-cache git unzip wget

# Directly download and install Composer into the correct PATH
RUN wget https://getcomposer.org/installer -O composer-setup.php \
    && php composer-setup.php --install-dir=/usr/local/bin --filename=composer \
    && php -r "unlink('composer-setup.php');"

# Set the working directory for all subsequent commands
WORKDIR /var/www/html

# The default command to keep PHP-FPM running in the foreground
CMD ["php-fpm", "-F"]