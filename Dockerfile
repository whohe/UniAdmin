FROM php:8-apache
RUN apt update
RUN apt install -y libmcrypt-dev libzip-dev libonig-dev libpng-dev libxml2-dev libpq-dev libmongoc-dev
RUN pecl install mcrypt mongodb
RUN docker-php-ext-enable mcrypt mongodb
RUN docker-php-ext-install zip mbstring gd opcache xml pgsql pdo pdo_pgsql 
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php -r "if (hash_file('sha384', 'composer-setup.php') === 'e21205b207c3ff031906575712edab6f13eb0b361f2085f1f1237b7126d785e826a450292b6cfd1d64d92e6563bbde02') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
RUN php composer-setup.php
RUN php -r "unlink('composer-setup.php');"
RUN mv composer.phar /usr/local/bin/composer
COPY 000-default.conf /etc/apache2/sites-available/000-default.conf
RUN a2enmod rewrite
COPY ./entrypoint.sh /entrypoint.sh
RUN chmod 777 /entrypoint.sh
ENTRYPOINT /entrypoint.sh
