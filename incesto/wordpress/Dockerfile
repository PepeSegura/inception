# WORDPRESS Dockerfile
FROM debian:buster-20230904

RUN apt update -y;
RUN apt upgrade -y;

RUN apt-get install -y wget;

RUN cd /; mkdir volume

RUN wget https://wordpress.org/latest.tar.gz && tar -xzvf latest.tar.gz

# COPY ./conf/nginx.conf /etc/nginx/nginx.conf

CMD ["nginx", "-g", "daemon off;"]