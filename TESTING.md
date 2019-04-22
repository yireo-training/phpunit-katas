# PHPUnit Katas - Testing
Make sure the setup has completed (see [README.md](README.md)), so that PHPUnit has been installed. The command `vendor/bin/phpunit --version` should output something now.

## Create a test file
Create a new file `packages/yireo-training/phpunit-kata-example/test/HelloWorldTest.php`:

```php
<?php
declare(strict_types=1);

namespace Yireo\KataExample\Test;

use PHPUnit\Framework\TestCase;
    use Yireo\KataExample\HelloWorld;

class HelloWorldTest extends TestCase
{
    /**
    * @var HelloWorld
    */
    private $target;

    protected function setUp(): void
    {
        $this->target = new HelloWorld();
    }

    public function testSayHello()
    {
        $this->assertInstanceOf(HelloWorld::class, $this->target);
        $this->assertSame('Hello World', $this->target->sayHello());
    }
}
```
    
Note that the namespace follows some kind of schema, while actually `composer.json` doesn't specify autoloading for files in the `test` folder: PHPUnit simply locates all files ending with the word `Test` and then executes all methods starting with `test` within the class specified.

Before configuring PHPUnit, we can run this single test already using the following command:

    vendor/bin/phpunit vendor/yireo-training/phpunit-kata-example/test/HelloWorldTest.php

The end-result should be that 1 test has run with 2 assertions:

    OK (1 test, 2 assertions)
    
    Process finished with exit code 0

## Setting up PHPUnit
First of all, let's setup PHPUnit itself in PHPStorm: Navigate to **Settings > Languages & Frameworks > PHP > Test Frameworks**. Add a new setup of **PHPUnit Local**. Select the option **Use Composer autoloader** and point the field **Path to script** to the file `vendor/autoload.php`. After this, the PHPUnit 8 version should be detected.

Next, under **Run > Edit Configurations** add a new configuration for **PHPUnit**. The name is something you can choose yourself, but here, we'll be assuming the name `PHPUnit Kata`. Under **Test Runner**, select as **Test Scope** the option **Directory**. As directory, enter the absolute path to `packages/yireo-training/phpunit-kata-example/test` (or actually, this could also be the root-folder of your project).

Once this is done, you should be able to select this task using **Run > Run...**. The task should output the same as before (1 test, 2 assertions). Once this task has run, you can repeat the task with a shortcut `SHIFT+F10`. 

## Configuring PHPUnit
This already works. However, we can improve things a little bit. Once you add more sources, or if you want to make the setup process easier, a `phpunit.xml` file is easier:

```xml
<phpunit
        xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
        xsi:noNamespaceSchemaLocation="https://schema.phpunit.de/8.0/phpunit.xsd"
        bootstrap="vendor/autoload.php"
        colors="true">
    <testsuites>
        <testsuite name="PHPUnit Katas">
            <directory>packages/yireo-training/phpunit-kata-example/test/</directory>
        </testsuite>
    </testsuites>
</phpunit>
```

Next, under **Run > Edit Configurations** add a new configuration for **PHPUnit**. The name is something you can choose yourself, but here, we'll be assuming the name `PHPUnit Kata`. Under **Test Runner**, select as **Test Scope** the option **Defined in the configuration file**. If the configuration file is not detected right away, you can either fix this in the global PHPUnit configuration or use the option **Use alternative configuration file** and point it to your new `phpunit.xml`.

Repeat the test to make sure it works.