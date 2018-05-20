.PHONY: test

test:
	vendor/bin/phpunit --configuration phpunit.xml tests/
