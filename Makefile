install:
	composer install

brain-games:
	./bin/brain-games

validate:
	composer validate

update:
	composer update

autoload:
	composer dump-autoload;
lint:
	composer exec --verbose phpcs -- --standard=PSR12 src bin