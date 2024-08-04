# Use uma imagem base adequada
FROM ubuntu:18.04

# Defina a variável de ambiente de fuso horário
ENV TZ=America/Sao_Paulo

# Instale a ferramenta de configuração do fuso horário
RUN apt-get update && \
    apt-get install -y tzdata

# Configure o fuso horário
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && \
    echo $TZ > /etc/timezone

# Atualize o repositório de pacotes e instale as dependências do PHP 7.2
RUN apt-get update && \
    apt-get install -y software-properties-common && \
    add-apt-repository ppa:ondrej/php && \
    apt-get update && \
    apt-get install -y \
    php7.2 \
    php7.2-ctype \
    php7.2-curl \
    php7.2-xml \
    php7.2-fileinfo \
    php7.2-gd \
    php7.2-json \
    php7.2-mbstring \
    php7.2-mysql \
    php7.2-sqlite3 \
    php7.2-zip

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
    && php composer-setup.php --install-dir=/usr/local/bin --filename=composer \
    && php -r "unlink('composer-setup.php');"

# Copie o código-fonte da aplicação para o contêiner (opcional)
COPY . /var/www/html

# Defina o diretório de trabalho
WORKDIR /var/www/html

# Defina o comando de inicialização (se necessário)
CMD ["php", "-S", "0.0.0.0:8000"]
