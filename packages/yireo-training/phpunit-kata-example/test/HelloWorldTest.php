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
