# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: psegura- <psegura-@student.42.fr>          +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2023/09/09 13:25:54 by psegura-          #+#    #+#              #
#    Updated: 2023/09/09 16:34:36 by psegura-         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

FROM alpine:3.18.3

# Label your image with your information
LABEL maintainer="psegura-@student.42madrid.com"

# Install Nginx and any other required dependencies
RUN apk update ; apk upgrade ; apk add --no-cache nginx

# Create a directory for Nginx to store its logs
RUN mkdir -p /var/log/nginx

# Expose the default HTTP port (80)
EXPOSE 80

# Start Nginx in the foreground when a container is launched
CMD ["nginx", "-g", "daemon off;"]