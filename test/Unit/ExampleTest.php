<?php

declare(strict_types=1);

/**
 * This is an example plugin for Textpattern CMS.
 *
 * @link https://textpattern.com/
 */

namespace Abc\Plugin\Test\Unit;

use PHPUnit\Framework\TestCase;
use function Patchwork\{redefine};

final class ExampleTest extends TestCase
{
    private \Abc_Example $subject;

    protected function setUp(): void
    {
        $this->subject = new \Abc_Example();
    }

    public function testLifecycleCallbacks(): void
    {
        redefine('\register_callback', fn(array $callback) => $this->assertIsArray($callback));

        new \Abc_Example();
    }

    public function testGreeting(): void
    {
        redefine('\gTxt', fn(string $input) => $this->assertSame('abc_plugin_greeting', $input));
        redefine('\graf', fn() => '');

        $this->subject->greeting();
    }
}
