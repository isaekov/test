start :
	# запуск контейнеров
	docker-compose up -d
	docker-compose run --rm composer install
	docker-compose run --rm artisan migrate:refresh --seed


