# バージョン7.4.9のphpをインストールする
FROM php:7.4.9-fpm

# php.iniを/usr/local/etc/php/にコピー
COPY php.ini /usr/local/etc/php/

# 起動時に必要なコマンド
RUN apt update \
# default-mysql-client zlib1g-dev libzip-dev unzipをインストールする
    && apt install -y default-mysql-client zlib1g-dev libzip-dev unzip \
# phpにpdo_mysqlとzipの機能を追加して正しく動作できるようにする
    && docker-php-ext-install pdo_mysql zip

# インストールに必要なコマンド
RUN curl -sS https://getcomposer.org/installer | php \
# composer.pharを/usr/local/bin/composerに移す
    && mv composer.phar /usr/local/bin/composer \
# composerを最新バージョンに更新する
    && composer self-update

# /var/wwwをワーキングディレクトリに設定
WORKDIR /var/www