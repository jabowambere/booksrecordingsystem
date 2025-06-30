# Use official PHP Apache image
FROM php:8.2-apache

# Enable Apache mod_rewrite if needed
RUN a2enmod rewrite

# Copy all your project files to /var/www/html/
COPY . /var/www/html/

# Set working directory
WORKDIR /var/www/html/

# (Optional) Install PHP extensions
# RUN docker-php-ext-install mysqli pdo pdo_mysql

# Expose port 80
EXPOSE 80
