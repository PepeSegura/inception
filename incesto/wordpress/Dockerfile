# WORDPRESS Dockerfile
FROM debian:buster-20230904

RUN apt update -y;
RUN apt upgrade -y;

RUN apt-get install -y php-fpm php-mysql curl;

COPY ./tools/WORDPRESS_setup /run.sh

RUN chmod +x /run.sh

CMD ["/run.sh"]
