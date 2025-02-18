# Dockerfile for PHP service
FROM php:8.2-fpm

# تثبيت الحزم المطلوبة
RUN apt-get update && apt-get install -y \
    libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# نسخ ملفات المشروع إلى الحاوية
WORKDIR /var/www
COPY . .

# إعداد التصاريح
RUN chmod -R 775 /var/www/storage /var/www/bootstrap/cache

# تشغيل PHP-FPM
CMD ["php-fpm"]
