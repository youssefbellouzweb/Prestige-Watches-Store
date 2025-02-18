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

# تعيين أذونات المجلدات المناسبة
RUN chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache
RUN chown -R www-data:www-data /var/www/html

# إنشاء رابط التخزين
RUN php artisan storage:link || true

# توليد APP_KEY في بيئة البناء
RUN php artisan key:generate --force

# تشغيل ترحيلات قاعدة البيانات في بيئة البناء
RUN php artisan migrate --force || true

# تعيين DocumentRoot لمجلد `public`
RUN sed -i 's|/var/www/html|/var/www/html/public|g' /etc/apache2/sites-available/000-default.conf

# تشغيل Apache
CMD ["apache2-foreground"]
