<?php
declare(strict_types=1);

namespace MacDoggie\HelloWorldTests\World;

use MacDoggie\HelloWorld\World\Hello;
use PHPUnit\Framework\TestCase;

/**
 * Class HelloTest
 * Tests the Hello class in all possible ways
 * @package MacDoggie\Test\World
 */
class HelloTest extends TestCase
{
    /**
     * The thing being said by the Hello class should always be a non empty string
     */
    public function testSaySomething()
    {
        // Setup
        $hello = new Hello();

        // Execute
        $thingBeingSaid = $hello->saySomething();

        // Verify
        $this->assertTrue(is_string($thingBeingSaid));
        $this->assertNotEmpty($thingBeingSaid);
    }
}