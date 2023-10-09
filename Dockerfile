# https://hub.docker.com/r/dockette/php
FROM dockette/php:7.4-fpm

# Add missing commands
RUN apt update && apt install -y curl git zip