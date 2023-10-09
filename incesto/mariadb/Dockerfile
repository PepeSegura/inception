# MariaDb Dockerfile
FROM debian:buster-20230904

RUN apt update -y;
RUN apt upgrade -y;

ENV MYSQL_ROOT_PASSWORD=1234

RUN apt-get install -y mariadb-server mariadb-client;

RUN cd /; mkdir volume

CMD ["mysqld_safe"]
