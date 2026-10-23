FROM php:8.3-cli
WORKDIR /app
COPY . /app
EXPOSE 10000
# Render define PORT; escuta em 0.0.0.0 para ser acessível de fora do container
CMD ["sh", "-c", "php -S 0.0.0.0:${PORT:-10000} -t /app"]
