# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: psegura- <psegura-@student.42.fr>          +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2023/09/14 01:38:52 by psegura-          #+#    #+#              #
#    Updated: 2023/09/14 01:41:04 by psegura-         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

FROM debian:buster

# # Label your image with your information
# LABEL maintainer="psegura-@student.42madrid.com"

# Install Nginx and any other required dependencies
RUN apt update ; apt upgrade ; apt install mariadb-server -y
# Instal vim, curl and OpenSSL
RUN apt install -y vim curl

# RUN mkdir -p /etc/nginx/ssl

# RUN openssl req -x509 -nodes -out /etc/nginx/ssl/inception.crt -keyout /etc/nginx/ssl/inception.key -subj "/C=FR/ST=IDF/L=Madrid/O=42/OU=42/CN=psegura-.42.fr/UID=login"

# RUN mkdir -p /var/run/nginx

# COPY conf/nginx.conf /etc/nginx/nginx.conf

# RUN chmod 755 /var/www/html

# RUN chown -R www-data:www-data /var/www/html

# CMD ["nginx", "-g", "daemon off;"]