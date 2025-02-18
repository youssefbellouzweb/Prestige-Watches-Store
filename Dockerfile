FROM php:8.2-fpm

# تثبيت الحزم المطلوبة
RUN apt-get update && apt-get install -y \
    nginx \
    unzip \
    git \
    curl \
    libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql

# نسخ الملفات إلى الحاوية
WORKDIR /var/www
COPY . .

# إعداد التصاريح الصحيحة
RUN chmod -R 777 /var/www/storage /var/www/bootstrap/cache

# تشغيل خدمات Nginx و PHP-FPM عند بدء التشغيل
CMD ["sh", "-c", "nginx && php-fpm"]
