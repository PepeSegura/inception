#!/bin/bash

NAME="nginx"

case $1 in
    "up")
	docker build -t ${NAME} . 
	docker run -d -p 8080:80 ${NAME}
	;;
    "down")
	docker stop ${NAME}
	docker rm ${NAME}
	;;
    "enter")
	docker exec -it ${NAME} sh
	;;
    *)
	echo "usage: ./start.sh [ up | down | enter ]"
	exit 1
esac
