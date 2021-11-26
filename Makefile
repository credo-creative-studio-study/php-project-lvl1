install:
	composer install

brain-games:
	./bin/brain-games

brain-even:
	./bin/brain-even

brain-calc:
	./bin/brain-calc

brain-gcd:
	./bin/brain-gcd

brain-progression:
	./bin/brain-progression

validate:
	composer validate

update:
	composer update

autoload:
	composer dump-autoload;

lint:
	composer exec --verbose phpcs -- --standard=PSR12 src bin
