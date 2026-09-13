<?php

declare(strict_types=1);

/**
 * This is an example plugin for Textpattern CMS.
 *
 * @link https://textpattern.com/
 */

namespace Abc\Plugin\Test\Unit;

use PHPUnit\Framework\TestCase;
use Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;
use Brain\Monkey\Functions;
use Brain\Monkey;

final class ExampleTest extends TestCase
{
    use MockeryPHPUnitIntegration;

    private \Abc_Example $subject;

    protected function setUp(): void
    {
        Functions\stubs(['register_callback']);

        $this->subject = new \Abc_Example();
    }

    public function testConstruct(): void
    {
        Functions\stubs([
            'register_callback' => fn(array $callback) => $this->assertIsArray($callback),
        ]);

        new \Abc_Example();
    }

    public function testInstall(): void
    {
        $this->assertTrue(true);

        $this->subject->install();
    }

    public function testUninstall(): void
    {
        $this->assertTrue(true);

        $this->subject->uninstall();
    }

    public function testGreeting(): void
    {
        Functions\stubs([
            'gTxt' => fn (string $input) => $this->assertSame('abc_plugin_greeting', $input),
            'graf' => '',
        ]);

        $this->subject->greeting();
    }

    protected function tearDown(): void
    {
        Monkey\tearDown();
    }
}
