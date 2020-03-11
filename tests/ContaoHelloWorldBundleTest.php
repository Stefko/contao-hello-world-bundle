<?php

namespace Stefko\ContaoHelloWorlddBundle\Tests;

use Stefko\ContaoHelloWorldBundle\ContaoHelloWorldBundle;
use PHPUnit\Framework\TestCase;

class ContaoHelloWorldBundleTest extends TestCase
{
    public function testCanBeInstantiated()
    {
        $bundle = new ContaoHelloWorldBundle();

        $this->assertInstanceOf('Stefko\ContaoHelloWorldBundle\ContaoHelloWorldBundle', $bundle);
    }
}
