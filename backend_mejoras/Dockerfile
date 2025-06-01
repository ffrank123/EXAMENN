# Dockerfile  ─────────────
FROM jenkins/jenkins:lts-jdk17

USER root

# 📦 Instalar PHP 8.2 CLI + extensiones + utilidades
RUN apt-get update -qq \
 && apt-get install -y --no-install-recommends \
        php8.2-cli php8.2-zip php8.2-mysql unzip curl git \
 && curl -sS https://getcomposer.org/installer | php \
        -- --install-dir=/usr/local/bin --filename=composer \
 && apt-get clean

USER jenkins
