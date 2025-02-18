# استخدام صورة PHP مع FPM
FROM php:8.2-fpm

# ضبط مجلد العمل داخل الحاوية
WORKDIR /var/www

# تثبيت الحزم المطلوبة
RUN apt-get update && apt-get install -y \
    unzip curl git libpng-dev libonig-dev libxml2-dev \
    && docker-php-ext-install pdo pdo_mysql mbstring exif pcntl bcmath gd

# نسخ ملفات المشروع إلى الحاوية
COPY . .

# نسخ ملف البيئة الافتراضي
RUN cp .env.example .env

# إعطاء الصلاحيات لمجلدات Laravel المهمة
RUN chmod -R 777 storage bootstrap/cache

# تثبيت Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# تثبيت الاعتماديات
RUN composer install --no-dev --optimize-autoloader

# توليد مفتاح التطبيق
RUN php artisan key:generate

# الأوامر الافتراضية لتشغيل Laravel
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=10000"]
