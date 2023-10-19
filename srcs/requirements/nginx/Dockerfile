# NGINX Dockerfile
FROM debian:buster-20230904

ENV DEBIAN_FRONTEND=noninteractive

RUN apt update && \
	apt-get install -y nginx openssl && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/*

RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048\
            -keyout /etc/ssl/private/nginx-selfsigned.key\
            -out /etc/ssl/certs/nginx-selfsigned.crt\
            -subj "/C=ES/L=MD/O=42/OU=student/CN=psegura-.42.fr"

COPY ./conf/default /etc/nginx/sites-available/

CMD ["nginx", "-g", "daemon off;"]
