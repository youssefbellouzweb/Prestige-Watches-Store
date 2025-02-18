# استخدام صورة PHP مع Apache
FROM php:8.2-apache

# تثبيت الامتدادات المطلوبة لـ Laravel و PostgreSQL
RUN apt-get update && apt-get install -y \
    libpq-dev unzip git curl \
    && docker-php-ext-install pdo pdo_pgsql

# تمكين mod_rewrite لـ Apache
RUN a2enmod rewrite

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

# تعيين DocumentRoot لمجلد `public`
RUN sed -i 's|/var/www/html|/var/www/html/public|g' /etc/apache2/sites-available/000-default.conf

# إنشاء رابط التخزين
RUN php artisan storage:link || true

# تنفيذ ترحيل قاعدة البيانات إذا لزم الأمر
RUN php artisan migrate --force || true

# تشغيل Apache
CMD ["apache2-foreground"]
