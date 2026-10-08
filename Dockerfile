FROM php:8.2-apache

# Mengaktifkan ekstensi PostgreSQL agar PHP bisa membaca Supabase
RUN apt-get update && apt-get install -y libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql pgsql

# Menyalin file PHP kamu ke folder server
COPY . /var/www/html/

# Membuka port 80
EXPOSE 80