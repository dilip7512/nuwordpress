# FROM git:alphine  AS builder
# RUN git config --global url."https://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:@github.com/".insteadOf "https://github.com/"
FROM wordpress:6.0.1-apache
COPY . /var/www/html/
RUN chmod -R 777 /var/www/html
