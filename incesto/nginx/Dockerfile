# NGINX Dockerfile
FROM debian:buster-20230904

RUN apt update -y;

RUN apt-get install -y nginx;


COPY ./conf/nginx.conf /etc/nginx/nginx.conf

CMD ["nginx", "-g", "daemon off;"]
