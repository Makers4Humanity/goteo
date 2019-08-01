####################################
# PHPDocker.io PHP 7.2 / FPM image #
####################################

FROM phpdockerio/php72-cli
WORKDIR /application

# Install FPM
RUN export DEBIAN_FRONTEND=noninteractive \
    && apt-get update \
    && apt-get -y --no-install-recommends install php7.2-fpm \
    && apt-get -y --no-install-recommends install php-memcached php7.2-mysql php7.2-gd php-xdebug \
    && apt-get -y --no-install-recommends install nodejs npm build-essential ruby-dev rubygems-integration gosu \
    && apt-get -y install jq \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*


RUN gem install sass -v 3.4.23
RUN gem install compass
RUN npm install -g grunt-cli
#RUN ln -s /usr/bin/nodejs /usr/bin/node

# PHP-FPM packages need a nudge to make them docker-friendly
COPY overrides.conf /etc/php/7.2/fpm/pool.d/z-overrides.conf

# PHP-FPM has really dirty logs, certainly not good for dockerising
# The following startup script contains some magic to clean these up
COPY php-fpm-startup /usr/bin/php-fpm

# Entrypoint to execute commands with the host user
COPY entrypoint.sh /usr/local/bin/entrypoint.sh

# Open up fcgi port
EXPOSE 9000
EXPOSE 35729

ENTRYPOINT ["/usr/local/bin/entrypoint.sh"]

# Will be overwritten by docker-compose.yml
CMD /usr/bin/php-fpm
