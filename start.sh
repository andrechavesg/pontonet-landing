docker compose build --no-cache --pull
docker compose down --remove-orphans
docker compose up -d --pull always -d --wait
