# MariaDb Dockerfile
FROM debian:buster-20230904

ENV DEBIAN_FRONTEND=noninteractive

RUN apt update && \
	apt-get install -y mariadb-server && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/*

COPY ./conf/50-server.cnf /etc/mysql/mariadb.conf.d/50-server.cnf

COPY ./tools/MYSQL_setup /run.sh

RUN chmod +x /run.sh

ENTRYPOINT [ "/run.sh" ]
