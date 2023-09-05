# Use a imagem oficial do PHP 8
FROM php:8.0-apache

# Crie um diretório dentro da imagem para o seu aplicativo
WORKDIR /var/www/html

# Copie os arquivos PHP para o diretório de trabalho
COPY php/ .

# Copie os arquivos JavaScript e CSS para seus respectivos diretórios
COPY resources/js/ /var/www/html/resources/js/
COPY resources/style/ /var/www/html/resources/style/

# Exponha a porta 80 para acesso do navegador
EXPOSE 80

# Comando para iniciar o servidor web PHP embutido
CMD ["php", "-S", "0.0.0.0:80"]

RUN a2enmod rewrite

EXPOSE 80