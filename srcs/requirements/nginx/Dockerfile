# NGINX Dockerfile
FROM debian:buster-20230904

ENV DEBIAN_FRONTEND=noninteractive

RUN apt update && \
	apt-get install -y nginx && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/*

COPY ./conf/nginx.conf /etc/nginx/nginx.conf

CMD ["nginx", "-g", "daemon off;"]
