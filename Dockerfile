# Use PHP latest as the base image
FROM php:apache-bookworm

# Install sendmail
RUN apt-get update && apt-get install -y sendmail

# Install the MySQL PDO extension
RUN docker-php-ext-install pdo_mysql

# Copy the entrypoint script into the container
COPY ./config/entrypoint.sh /usr/local/bin/

# Ensure the script is executable
RUN chmod +x /usr/local/bin/entrypoint.sh

# Set the entrypoint script as the entrypoint
ENTRYPOINT ["entrypoint.sh"]

# Copy an existing php.ini file to php.ini
RUN cp /usr/local/etc/php/php.ini-development /usr/local/etc/php/php.ini

# Update the php.ini file to specify the sendmail path
RUN sed -i 's|;sendmail_path =|sendmail_path = "/usr/sbin/sendmail -t -i"|' /usr/local/etc/php/php.ini

# Install mysql ext
RUN docker-php-ext-install mysqli

# Copy custom configuration file
COPY ./config/my-httpd.conf /etc/apache2/conf-available/my-httpd.conf

# Enable custom configuration
RUN a2enconf my-httpd

# Enable mod_rewrite (optional, if needed)
RUN a2enmod rewrite
