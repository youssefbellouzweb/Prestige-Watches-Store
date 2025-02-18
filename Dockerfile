# استخدم صورة PHP مع Apache
FROM php:8.2-apache

# تثبيت الامتدادات المطلوبة لـ Laravel و PostgreSQL
RUN apt-get update && apt-get install -y \
    libpq-dev unzip git curl \
    && docker-php-ext-install pdo pdo_pgsql

# تثبيت Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# إعداد المشروع
WORKDIR /var/www/html
COPY . .

# تثبيت حزم Laravel
RUN composer install --no-dev --optimize-autoloader

# إعطاء الأذونات المناسبة للمجلدات
RUN chmod -R 777 storage bootstrap/cache
RUN chown -R www-data:www-data /var/www/html

# إنشاء رابط التخزين
RUN php artisan storage:link || true

# تشغيل Apache
CMD ["apache2-foreground"]
