# Use the official PHP image as a base image
FROM php:7.4-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y libzip-dev unzip libpng-dev libjpeg-dev libfreetype6-dev libonig-dev libmcrypt-dev libxml2-dev libpq-dev libsqlite3-dev libssl-dev git

# Install Composer globally
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install PHP extensions
RUN docker-php-ext-configure gd --with-freetype --with-jpeg
RUN docker-php-ext-install pdo pdo_mysql pdo_pgsql mbstring zip gd xml json

# Set the working directory
WORKDIR /var/www/html

# Copy the Laravel application files to the container
COPY . .

# Install application dependencies
RUN composer install

# Expose port 9000 for PHP-FPM
EXPOSE 9000

# Start PHP-FPM
CMD ["php-fpm"]

# Optionally, you can customize the command to run your Laravel application
# For example, to run Laravel's built-in development server, use the following instead:
# CMD ["php", "artisan", "serve", "--host=0.0.0.0"]
