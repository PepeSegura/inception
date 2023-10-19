# WORDPRESS Dockerfile
FROM debian:buster-20230904

ENV DEBIAN_FRONTEND=noninteractive

RUN apt update && \
	apt-get install -y php-fpm php-mysql curl && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/*

COPY ./tools/WORDPRESS_setup /run.sh
COPY ./tools/wp_config.php /var/www/html/wp_config.php

RUN chmod +x /run.sh

CMD ["/run.sh"]
