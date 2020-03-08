FROM php:7.4-apache

# composerのインストール
# Dockerのマルチステージビルドを利用
# https://docs.docker.com/develop/develop-images/multistage-build/
COPY --from=composer /usr/bin/composer /usr/bin/composer

RUN apt-get update && apt-get install -y git