# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Makefile                                           :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: psegura- <psegura-@student.42.fr>          +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2023/09/09 15:49:23 by psegura-          #+#    #+#              #
#    Updated: 2023/09/09 16:10:12 by psegura-         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

# DELETE MAKEFILE BEFORE SUBMITING

build:
	docker build -t nginx .

run:
	docker run -d -p 8080:80 nginx

exec:
	docker exec -it $(shell (docker ps | grep nginx | awk '{print $1}')) sh

stop:
	docker stop nginx

fclean: stop
	docker rmi nginx

re: stop build run


.PHONY: build run exec stop clean fclean re
