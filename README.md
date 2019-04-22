# PHPUnit Katas
This project offers a playground for using PHPUnit with sample code to test.

## Create a new project
Create a new project in PhpStorm. Make sure it is supporting PHP 7.1+. Next, see below to initialize the project.

## Setup the project
Setup the project using one of the following approaches:

- Run `composer install` and start using this app;
- Follow the instructions in [SETUP.md](SETUP.md) to setup all files one-by-one;

## Start testing
Once the application is running, start testing it: Follow the instructions in [TESTING.md](TESTING.md) to setup all files one-by-one. Once the example test is working, you are ready for the rest of the katas.

## Katas
Besides the `phpunit-kata-example` package, there are various (empty) packages, each laying down a certain goal - see the `README.md` per package. There is also `composer.json` in the package, so you can install the package to `vendor`. However, the PHP classes are still to be created by you. 

To achieve this goal, use TDD (*Red-Green-Refactor*): First, a test is written that fails (because the code doesn't exist yet): *Red*. Next, the code is written to make sure the basic functionality is there: *Green*. Next, refactor the code, so that possible smaller units are created (that require more tests) or the logic is enhanced: *Refactor*.