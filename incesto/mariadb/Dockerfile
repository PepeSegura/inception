# MariaDb Dockerfile
FROM debian:buster-20230904

RUN apt update -y;
RUN apt upgrade -y;

RUN apt-get install -y mariadb-server;

COPY ./conf/50-server.cnf /etc/mysql/mariadb.conf.d/50-server.cnf

COPY ./tools/MYSQL_setup /run.sh

RUN chmod +x /run.sh

ENTRYPOINT [ "/run.sh" ]
