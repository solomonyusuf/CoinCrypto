# Use an Nginx + PHP-FPM image with PHP 8.1
FROM richarvey/nginx-php-fpm:php8.1

# Set working directory
WORKDIR /var/www/html

# Copy all files
COPY . .

# Laravel permissions
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Image configuration
ENV SKIP_COMPOSER 0  # Run Composer
ENV WEBROOT /var/www/html/public
ENV PHP_ERRORS_STDERR 1
ENV RUN_SCRIPTS 1
ENV REAL_IP_HEADER 1

# Laravel config
ENV APP_ENV production
ENV APP_DEBUG false
ENV LOG_CHANNEL stderr

# Allow composer to run as root
ENV COMPOSER_ALLOW_SUPERUSER 1

# Install Laravel dependencies
RUN composer install --no-dev --optimize-autoloader

# Run database migrations (optional)
RUN php artisan migrate --force

# Expose port for Nginx
EXPOSE 80

# Start Nginx and PHP-FPM
CMD ["/start.sh"]
