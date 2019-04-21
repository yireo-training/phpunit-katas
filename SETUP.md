# PHPUnit Katas - Fresh setup

## Cleaning up the sources
Remove all files except the Markdown documentation (`*.md`).

## Initialize the PHP source
Create a file `packages/yireo-training/phpunit-kata-example/HelloWorld.php` with the following contents:

```php
<?php
declare(strict_types=1);

namespace Yireo\KataExample;

class HelloWorld
{
    public function sayHello(): string
    {
        return 'Hello World';
    }
}
```

Also, add a file `packages/yireo-training/phpunit-kata-example/composer.json` with the following contents:

```json
{
    "name": "yireo-training/phpunit-kata-example",
    "description": "Sample PHPUnit kata",
    "type": "composer",
    "authors": [
        {
            "name": "Jisse Reitsma",
            "email": "jisse@yireo.com"
        }
    ],
    "autoload": {
        "psr-4": {
            "Yireo\\KataExample\\": ""
        }
    }
}
```

## Configure composer in the project
Next, go back to the root of the project and initialize `composer` with the following command:

    composer init

Once the project is initialized, add the `packages` folder as a repository:

    composer config repositories.katas path packages/yireo-training/\*

Note the (escaped) wildcard `*` in the URL: We can now add any new packages to the `package` folder and install them using `composer`.

## Install test kata
Install the newly created kata using the following command:

    composer require yireo-training/phpunit-kata-example:@dev

There is now a new package installed in the `vendor` folder, symlinked back to the `package` folder. We can now start using this package.

## Creating an app
We can now create a sample app with a dummy content. Create a file `public/index.php`:

```php
<?php
declare(strict_types=1);
require_once __DIR__ . '/../vendor/autoload.php';
echo (new \Yireo\KataExample\HelloWorld)->sayHello();
```
    
Let's see if this works:

    php ./public/index.php
    
And we can get the same results by starting up a webserver listing to `localhost:3000` and then visiting `http://localhost:3000` in our browser:

    php -S localhost:3000 public/index.php 

The application is running now.

## Preparation for testing
To make sure we are ready for the next step - testing - we'll install PHPUnit version 8.0 or higher:

    composer require phpunit/phpunit:^8.0 --dev
    
Done.