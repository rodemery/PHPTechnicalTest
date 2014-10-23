The project's sources are located in src/ and the unit tests in tests/

- Open a command line console
- Change directory to project root
- Install the project dependencies (PHPUnit) from composer by running one of the following commands:
  If you already have composer installed globally run
        $ composer install
        $ composer update
  if composer is not installed run
        $ php composer.phar install
        $ php composer.phar update

- Run unit tests with the following command:
        $ php vendor/bin/phpunit tests/AppDataTest.php