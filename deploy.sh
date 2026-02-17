git pull origin main
docker exec -it ponto-net-php-1 bash -c 'php bin/console d:m:migrate --no-interaction --all-or-nothing'
docker exec -it ponto-net-php-1 bash -c 'php bin/console cache:clear'
rm -r var/cache
mkdir var/cache
chmod 777 -R var/cache
