PHPUNIT=./vendor/bin/phpunit  
PHPCS=./vendor/bin/phpcs

install:
	composer install

clean:
	rm -rf ./vendor

test:
	$(PHPUNIT)

coverage:                                 
	$(PHPUNIT) -c  --coverage-html code_coverage                             

standards:                                
	$(PHPCS) --standard=PSR2 


